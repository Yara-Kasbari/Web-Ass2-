<?php

class Student {
	public $studentID;
    public $firstName;
    public $lastName;
    public $Gender;
    public $DateOfBirth;
    public $Adress;
    public $City;
    public $Country;
    public $tel;

    function __construct($studentID,$firstName,$lastName,$Gender,$DateOfBirth,$Adress,$City,$Country,$tel)
    {
	   $this ->studentID = $studentID;
       $this ->firstName = $firstName;
       $this ->lastName  = $lastName;
       $this ->Gender    = $Gender;
       $this ->DateOfBirth = $DateOfBirth;
       $this ->Adress    =  $Adress;
       $this -> City     =  $City;
       $this ->Country   =  $Country;
       $this ->tel       =  $tel;
    }


  function setStudentID ($studentID)
    {
        $this ->studentID = $studentID;
    }

    function getStudentID(){
        return  $this ->studentID;
    }
	
    function setFirstName ($firstName)
    {
        $this ->firstName = $firstName;
    }

    function getFirstName (){
        return  $this ->firstName;
    }

    function setLastName ($lastName)
    {
        $this ->lastName = $lastName;
    }

    function getLastName (){
        return  $this ->lastName;
    }

    function setGender ($Gender)
    {
        $this ->Gender = $Gender;
    }

    function getGender(){
        return  $this ->Gender;
    }

    function setDateOfBirth ($DateOfBirth)
    {
        $this ->DateOfBirth = $DateOfBirth;
    }

    function getDateOfBirth(){
        return  $this ->DateOfBirth;
    }

    function setAdress ($Adress)
    {
        $this ->Adress = $Adress;
    }

    function getAdress(){
        return  $this ->Adress;
    }

    function setCity ($City)
    {
        $this ->City = $City;
    }

    function getCity(){
        return  $this ->City;
    }

    function setCountry ($Country)
    {
        $this ->Country = $Country;
    }

    function getCountry(){
        return  $this ->Country;
    }

    function setTel ($tel)
    {
        $this ->tel = $tel;
    }

    function getTel(){
        return  $this ->tel;
    }   


     public function toArray()
    {
        return [
            'studentID' => $this->studentID,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'Gender' => $this->Gender,
            'DateOfBirth' => $this->DateOfBirth,
            'Address' => $this->Address,
            'City' => $this->City,
            'Country' => $this->Country,
            'tel' => $this->tel,
        ];
    }


}
?>