<?php

namespace App\Controller;

use App\Entity\Invitations;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

abstract class RequestController extends AbstractController
{
  protected \Doctrine\ORM\EntityRepository $userRepository;
  protected \Doctrine\ORM\EntityRepository $invitationsRepository;
  protected ?string $inputSender;
  protected ?string $inputReceiver;
  protected ?User $senderUser = null;
  protected ?User $receiverUser = null;
  protected array $response = [];
  protected ?Invitations $invitations = null;

  protected array $errorCodes = [
    'NOT_AUTHORIZE' => 1000,
    'NOT_ALLOWED' => 1001,
    'SENDER_NOT_FOUND' => 1002,
    'RECEIVER_NOT_FOUND' => 1003,
    'SENDER_AND_RECEIVER_SAME' => 1004,
    'INVITATION_EXISTS' => 1005,
    'INVITATION_NOT_EXISTS' => 1006,
    'WRONG_INVITATION_STATUS' => 1007,
  ];

  abstract public function getResponse(Request $request): JsonResponse;
  abstract public function getInvitation();

  public function __construct(EntityManagerInterface $entityManager)
  {
    $this->userRepository = $entityManager->getRepository(User::class);
    $this->invitationsRepository = $entityManager->getRepository(Invitations::class);
  }

  public function getUserDetails(string $apiKey): ?User
  {
    return $this->userRepository->findOneByEmail($apiKey);
  }

  public function __invoke(Request $request, $args = null)
  {
    $this->inputSender = $request->headers->get('apiKey') ?? null;
    if (!isset($this->inputSender))
    {
      return $this->json([
        'error' => $this->errorCodes['NOT_ALLOWED'],
        'message' => 'Not authorized! ApiKey is missing'
      ]);
    }

    $this->senderUser = $this->getUserDetails($this->inputSender);
    if (is_null($this->senderUser))
    {
      return $this->json([
        'error' => $this->errorCodes['SENDER_NOT_FOUND'],
        'message' => 'Not authorized sender'
      ]);
    }

    $this->inputReceiver = $request->getMethod() === 'POST' ? $request->request->get('receiver') : $request->query->get('receiver');
    if (!isset($this->inputReceiver) || empty($this->inputReceiver))
    {
      return $this->json([
        'error' => $this->errorCodes['RECEIVER_NOT_FOUND'],
        'message' => 'Receiver not sent.',
      ]);
    }

    if ($this->inputReceiver === $this->inputSender)
    {
      return $this->json([
        'error' => $this->errorCodes['SENDER_AND_RECEIVER_SAME'],
        'message' => 'sender and receiver can not be same',
      ]);
    }

    $this->receiverUser = $this->getUserDetails($this->inputReceiver);
    if (is_null($this->receiverUser))
    {
      return $this->json([
        'error' => $this->errorCodes['RECEIVER_NOT_FOUND'],
        'message' => 'Receiver not found',
      ]);
    }

    if (!empty($this->response))
    {
      return $this->json($this->response);
    }

    $this->getInvitation();
    return $this->getResponse($request);
  }
}