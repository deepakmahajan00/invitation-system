<?php

namespace App\Controller;

use App\Entity\Invitations;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/cancel-invitation', name: 'app_cancel_invitation', methods: 'get')]
class CancelInvitationController extends RequestController
{
  public function getInvitation()
  {
    $this->invitations = $this->invitationsRepository->findBySenderAndInviteeAndStatus(
      $this->senderUser->getId(), $this->receiverUser->getId(), [Invitations::STATUS_PENDING, Invitations::STATUS_ACCEPTED]
    );
  }

  public function getResponse(Request $request): JsonResponse
  {
    if (!$this->invitations)
    {
      $this->response[$this->errorCodes['INVITATION_NOT_EXISTS']] = [
        'error' => $this->errorCodes['INVITATION_NOT_EXISTS'],
        'message' => 'Invitation not found',
      ];
    }
    else
    {
      $this->invitationsRepository->cancelInvitation($this->invitations->getId(), $this->senderUser->getId(), $this->receiverUser->getId());
      $this->response[] = [
        'message' => 'Invitation cancelled',
      ];
    }

    return $this->json($this->response);
  }
}
