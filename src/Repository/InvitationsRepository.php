<?php

namespace App\Repository;

use App\Entity\Invitations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Invitations>
 *
 * @method Invitations|null find($id, $lockMode = null, $lockVersion = null)
 * @method Invitations|null findOneBy(array $criteria, array $orderBy = null)
 * @method Invitations[]    findAll()
 * @method Invitations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InvitationsRepository extends ServiceEntityRepository
{
  public function __construct(ManagerRegistry $registry)
  {
    parent::__construct($registry, Invitations::class);
  }

  public function save(Invitations $entity, bool $flush = false): void
  {
    $this->getEntityManager()->persist($entity);

    if ($flush)
    {
      $this->getEntityManager()->flush();
    }
  }

  public function remove(Invitations $entity, bool $flush = false): void
  {
    $this->getEntityManager()->remove($entity);

    if ($flush)
    {
      $this->getEntityManager()->flush();
    }
  }

  public function findBySenderAndInviteeAndStatus(string $senderId, string $receiverId, array $status)
  {
    return $this->createQueryBuilder('i')
      ->andWhere('i.sender_id = :senderId')
      ->andWhere('i.receiver_id = :receiverId')
      ->andWhere('i.status IN (:status)')
      ->setParameter('senderId', $senderId)
      ->setParameter('receiverId', $receiverId)
      ->setParameter('status', $status)
      ->setMaxResults(1)
      ->getQuery()
      ->getOneOrNullResult();
  }

  public function cancelInvitation(int $invitationId, int $senderId, int $receiverId)
  {
    return $this->createQueryBuilder('i')
      ->update()
      ->set('i.status', ':status')
      ->setParameter('status', Invitations::STATUS_CANCELLED)
      ->andWhere('i.id = :invitationId')
      ->andWhere('i.sender_id = :senderId')
      ->andWhere('i.receiver_id = :receiverId')
      ->setParameter('senderId', $senderId)
      ->setParameter('receiverId', $receiverId)
      ->setParameter('invitationId', $invitationId)
      ->getQuery()
      ->execute();

  }

  public function updateInvitation(int $invitationId, int $senderId, int $receiverId, string $status)
  {
    return $this->createQueryBuilder('i')
      ->update()
      ->set('i.status', ':status')
      ->where('i.id = :invitationId')
      ->andWhere('i.sender_id = :senderId')
      ->andWhere('i.receiver_id = :receiverId')
      ->andWhere('i.status = :currentStatus')
      ->setParameter('status', $status)
      ->setParameter('senderId', $senderId)
      ->setParameter('receiverId', $receiverId)
      ->setParameter('invitationId', $invitationId)
      ->setParameter('currentStatus', Invitations::STATUS_PENDING)
      ->getQuery()
      ->execute();

  }

  public function accpetInvitation(int $invitationId, int $senderId, int $receiverId)
  {
    return $this->updateInvitation($invitationId, $senderId, $receiverId, Invitations::STATUS_ACCEPTED);
  }

  public function declineInvitation(int $invitationId, int $senderId, int $receiverId)
  {
    return $this->updateInvitation($invitationId, $senderId, $receiverId, Invitations::STATUS_DECLINED);
  }
}
