<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/');
        $this->assertTrue(false); //SHOULD FAIL
		$this->assertTrue($this->client->getResponse()->isOk());
	}

}
