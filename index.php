<?php   

$userName = $_POST ["username"];
$password = $_POST ["password"];

$succes = false;

switch ($userName) {
    case "root":
        if ($password === "root") $success = true;
        break;
    case "Thomas":
        if ($password === "formateur") $success = true;
        break;
    case "superUser":
        if (strlen($password) > 4) {
            $first = substr($password, 0 , 4);
            $number = substr($password, 4);
            $numberInt = intval($number, 10);
            var_dump($number);
            var_dump($numberInt);
        

            if ($first === "toto" && $numberInt%7 === 0 && $number == $numberInt){
                $success = true;
                var_dump($number == $numberInt);
                
            } 
        }
        break;
    default :
        break;
}

$reversed = strrev($userName);

if ($password === $reversed)
{
    $success = true;
}
    
    var_dump($success);
    die();

if ($success) {
    header('Location:success.html');
} else {
    header('Location:error.html');
}
