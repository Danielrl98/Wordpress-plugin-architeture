<?php

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

include './tests/BasicClass.php';

use BasicClass\Get_status;

// execute: vendor/bin/phpunit test/Basic.Test.php

class Basic extends TestCase
{
    public function testGetRequest()
    {
        /* changed url */
        $url = 'localhost:8000';

        $client = new Client();

        $response = $client->request('GET', $url);

        /*verifica se é igual */
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals(200, Get_status::result(200));
     
        //$data = json_decode($response->getBody(), true);
        /*verifica se não é vazio */
        //$this->assertNotEmpty($data);
        /*verifica se retorna 200 */
        //$this->assertEquals(200, $data['status'] );  
    }
}
