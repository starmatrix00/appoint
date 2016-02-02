<?php

namespace Appoint\Models;

 class Patient extends Person
 {

	private $patient_no;
	private $nationality;
	private $occupation;
	private $civil_status;


	public function setPatient_no($patient_no) 
	{
		$this->patient_no = $patient_no;
		
	}

	public function setNationality($nationality) 
	{
		$this->nationality = $nationality;
	
	}

	public function setOccupation($occupation) 
	{
		$this->occupation = $occupation;
	}

	public function setCivil_Status($civil_status) 
	{
		$this->civil_status = $civil_status;
	}

	public function getPatient_no() 
	{
		return $this->patient_no;
	}


	public function getNationality() 
	{
		return $this->nationality;
	}

	public function getOccupation() 
	{
		return $this->occupation;
	}

	public function getCivil_status() 
	{
		return $this->civil_status;
	}

}