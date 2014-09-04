<?php

class UserTest extends TestCase {

  public function testEmptyGet()     {
    $response = $this->call('GET', 'users/batch');

    // Test code HTTP
    $this->assertResponseStatus(400);
  }

  public function testInexistantGet()     {
    $response = $this->call('GET', 'users/batch', ['data' => ['dozfeziufhiz']]);

    // Test code HTTP
    $this->assertResponseStatus(206);
  }

  public function testInvalideGet()     {
    $response = $this->call('GET', 'users/batch', ['data' => ['04:5c:8b:12:3e:27:80', 'dozfeziufhiz']]);

    // Test code HTTP
    $this->assertResponseStatus(206);

    // Test variable valid
    $content = json_decode($response->getContent());
    $this->assertFalse($content->valid);
    
  }

  public function testValideGet()     {
    $response = $this->call('GET', 'users/batch', ['data' => ['04:5c:8b:12:3e:27:80']]);

    // Test code HTTP
    $this->assertResponseStatus(200);

    // Test variable valid
    $content = json_decode($response->getContent());
    $this->assertTrue($content->valid);

    // Test données
    $this->assertEquals($content->data[0]->prenom, 'Thibaud');
    $this->assertEquals($content->data[0]->nom, 'Dauce');

  }



}
