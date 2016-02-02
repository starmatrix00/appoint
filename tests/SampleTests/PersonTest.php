<?php

namespace AppointTest\SampleTests;

use PHPUnit_Framework_TestCase; 
use Appoint\Models\Person;


class PersonTest extends PHPUnit_Framework_TestCase
{
	public function testPerson()
	{
		$person = new Person();

		$person->setFname("Imarie");
		$this->assertEquals("Imarie", $person->getFname());

		$person->setMname("Juni");
		$this->assertEquals("Juni", $person->getMname());

		$person->setLname("Ignalig");
		$this->assertEquals("Ignalig", $person->getLname());

		// $person->setOccupation("Engineer");
		// $this->assertEquals("Engineer", $person->getOccupation());

		// $person->setCivil_status("Single");
		// $this->assertEquals("Single", $person->getCivil_status());
	}
}