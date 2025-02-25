<?php

require_once 'Classes/Person.php';
require 'Classes/Customer.php';
require_once 'Classes/Employee.php';

$jonas = new Person('Jonas', 'Pedersen', 'jonas@eamil.com');

// $jonas->firstName = 'Jonas';
// $jonas->lastName = 'Pedersen';
// $jonas->email = 'jonas@eamil.com';


echo $jonas->firstName . '<br>';
echo $jonas->lastName . '<br>';
echo $jonas->email . '<br>';



$maria = new Person('Maria', 'Hansen', 'maria@email.com');
$lise = new Person('Lise', 'Jørgensen', 'lise@email.com');

$line = new Customer('Line', 'Mikkelsen', 'line@email.com', 'KEA', 'line@kea.dk');
echo $line->companyName;

$wei = new Employee('Wei', 'Yang', 'wei@kea.dk', '');

?>