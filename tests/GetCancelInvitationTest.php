<?php

namespace App\Tests;

use App\Controller\InvitationController;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class GetCancelInvitationTest extends BaseTestCase
{
  /** @dataProvider getSendInvitationRequest */
  public function testNotApiKeyAndNotAuthorized(string $expected, ?string $apiKey, array $requestBody): void
  {
    $kernel = self::bootKernel();

    $invitationController = $this->createPartialMock(InvitationController::class, ['getUserDetails']);

    //expect that sendEmail will be called
    $invitationController
      ->method('getUserDetails')
      ->willReturn((new User())->setEmail('abc@test.com')->setName('abc'));

    $fakeRequest = Request::create('/api/cancel-invitation', 'GET', $requestBody, [], [], [], $requestBody);
    if ($apiKey)
    {
      $fakeRequest->headers->set('apiKey', $apiKey);
    }

    $response = $kernel->handle($fakeRequest, HttpKernelInterface::MAIN_REQUEST, false);
    $this->assertSame($expected, $response->getContent());

  }
}
