<?php

namespace App\Controller;

use App\Entity\Invitations;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/respond-invitation', name: 'app_process_invitation', methods: 'post')]
class ProcessInvitationController extends RequestController
{
  public function getInvitation()
  {
    $this->invitations = $this->invitationsRepository->findBySenderAndInviteeAndStatus(
      $this->receiverUser->getId(), $this->senderUser->getId(), [Invitations::STATUS_PENDING]
    );
  }

  public function getResponse(Request $request): JsonResponse
  {

    $updateToAcceptOrDecline = $request->request->get('status');
    if (
      !isset($updateToAcceptOrDecline)
      || empty($updateToAcceptOrDecline)
      || !in_array(strtoupper($updateToAcceptOrDecline), [Invitations::STATUS_ACCEPTED, Invitations::STATUS_DECLINED], true)
    )
    {
      $this->response[$this->errorCodes['WRONG_INVITATION_STATUS']] = [
        'error' => $this->errorCodes['WRONG_INVITATION_STATUS'],
        'message' => 'Invitation can be ' . Invitations::STATUS_ACCEPTED .' OR '. Invitations::STATUS_DECLINED
      ];
    }

    if (!$this->invitations)
    {
      $this->response[$this->errorCodes['INVITATION_NOT_EXISTS']] = [
        'error' => $this->errorCodes['INVITATION_NOT_EXISTS'],
        'message' => 'Invitation not found',
      ];
    }
    else
    {
      if ($updateToAcceptOrDecline === Invitations::STATUS_ACCEPTED)
      {
        // Here we have to swap sender with receiver to accept
        $this->invitationsRepository->accpetInvitation($this->invitations->getId(), $this->receiverUser->getId(), $this->senderUser->getId());
      }
      else if ($updateToAcceptOrDecline === Invitations::STATUS_DECLINED)
      {
        // Here we have to swap sender with receiver to decline
        $this->invitationsRepository->declineInvitation($this->invitations->getId(), $this->receiverUser->getId(), $this->senderUser->getId());
      }

      $this->response[] = [
        'message' => 'Invitation successfully '. $updateToAcceptOrDecline,
      ];
    }

    return $this->json($this->response);
  }
}
