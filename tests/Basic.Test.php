<?php

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

include './tests/BasicClass.php';

use BasicClass\Get_status;

// execute: vendor/bin/phpunit tests/Basic.Test.php

class Basic extends TestCase
{
    public function testGetRequest()
    {
        $this->assertEquals(200, Get_status::result(200));

        /* changed url */
        //  $url = 'localhost:8000';
        // $client = new Client();
        // $response = $client->request('GET', $url);
        //$this->assertEquals(200, $response->getStatusCode());
        //$data = json_decode($response->getBody(), true);
        /*verifica se não é vazio */
        //$this->assertNotEmpty($data);
        /*verifica se retorna 200 */
        //$this->assertEquals(200, $data['status'] );  
    }
}
