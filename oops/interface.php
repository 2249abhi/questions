<?php

// Methods inside interface must be implemented in all classes which implement interface.


error_reporting( E_ALL);
ini_set('display_errors', 1);
//Interfaces allow you to specify what methods a class should implement.
//Interfaces are declared with the "interface" keyword:

interface Info
{
	public function firstname();

	public function lastname($lname);
}



//inheritance
class Parents implements Info
{

	function __construct()
	{
		return "Parent Class Constructor</br>";
	}

	public function firstname()
	{
		return "The father name is rakesh";
	}

	function lastname($lname)
	{
		return " ".$lname."<br>";
	}
}

class Childs extends Parents
{
	function __construct()
	{
		return Parent::__construct(). " and Child Class Constructor.</br>";
	}

	public function firstname()
	{
		return "The son name is harry";
	}
}


$pobj = new Parents();
$cobj = new Childs();

echo $pobj->firstname();
echo $pobj->lastname('tiwari');

echo "<br><br>";
echo $cobj->firstname();
echo $cobj->lastname('tiwari');
