<?php

namespace App\Controller;

use App\Entity\Invitations;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/send-invitation', name: 'app_invitation', methods: 'post')]
class InvitationController extends RequestController
{
  public function getResponse(Request $request): JsonResponse
  {
    if ($this->invitations)
    {
      $this->response[$this->errorCodes['INVITATION_EXISTS']] = [
        'error' => $this->errorCodes['INVITATION_EXISTS'],
        'message' => 'Invitation already in ' . $this->invitations->getStatus() . ' status with : ' . $this->receiverUser->getEmail() . '. Cannot process again',
      ];
    }
    else
    {
      $this->saveInvitation();
      $this->response[] = [
        'message' => 'Invitation sent successfully',
      ];
    }

    return $this->json($this->response);
  }

  protected function saveInvitation()
  {
    $invitationRequest = (new Invitations())
      ->setSenderId($this->senderUser->getId())
      ->setReceiverId($this->receiverUser->getId())
      ->setStatus(Invitations::STATUS_PENDING)
      ->setCreated(new \DateTime());

    $this->invitationsRepository->save($invitationRequest, true);
  }

  public function getInvitation()
  {
    $this->invitations = $this->invitationsRepository->findBySenderAndInviteeAndStatus(
      $this->senderUser->getId(), $this->receiverUser->getId(), [Invitations::STATUS_PENDING, Invitations::STATUS_ACCEPTED]
    );
  }
}
