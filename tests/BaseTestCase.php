<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class BaseTestCase extends KernelTestCase
{
  public function getSendInvitationRequest()
  {
    return [
      ['{"error":1002,"message":"Not authorized sender"}', 'test-user-0@test.com', []],
      ['{"error":1001,"message":"Not authorized! ApiKey is missing"}', null, []],
      ['{"error":1002,"message":"Not authorized sender"}', 'test-user-0@test.com', ['receiver' => 'test-user-1@test.com']],
    ];
  }
}