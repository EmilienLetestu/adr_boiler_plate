<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 20/04/2023
 * Time: 15:00
 */

namespace App\Tests\Action;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BaseActionTest extends WebTestCase
{
    public function test__invoke()
    {
        $client = static::createClient();
        $client->request('GET', '/default');
        $this->assertResponseIsSuccessful();
    }
}