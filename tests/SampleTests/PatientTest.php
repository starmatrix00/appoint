<?php

namespace AppointTest\SampleTests;

use PHPUnit_Framework_TestCase; 
use Appoint\Models\Patient;


class PatientTest extends PHPUnit_Framework_TestCase
{
	public function testImarie()
	{
		$patient = new patient();
		$patient->setNationality("Filipino");
		$this->assertEquals("Filipino", $patient->getNationality());

		$patient->setPatient_no("1");
		$this->assertEquals("1", $patient->getPatient_no());

		$patient->setOccupation("Engineer");
		$this->assertEquals("Engineer", $patient->getOccupation());

		$patient->setCivil_status("Single");
		$this->assertEquals("Single", $patient->getCivil_status());
	}
}