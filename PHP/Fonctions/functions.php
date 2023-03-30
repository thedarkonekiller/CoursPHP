<?php
function multiTable($number)
{
    for ($i=0; $i < 11 ; $i++) {
        echo "<li>";
        echo $i." x ".$number." = ".$i*$number;
        echo "</li>";
    }
}

function hello($fname,$lname){
    echo "Bonjour $fname $lname";
}

function convFahrenheit ($celcius){
    echo $celcius, "°C = ", $celcius*1.8000+32, "°F";
}

function nbTest ($nb){
    if ($nb >= 10) {
        $result = "Au dessus de 10";
    } else {
        $result = "En dessous de 10";
    }
    return $result;
}

function hellor($fname,$lname){
    return "Bonjour $fname $lname";
}

function convFahrenheitr($celcius){
    $result = $celcius*1.8000+32;
    return "$celcius °C = $result °F";
}

function checkPair($number){
    if ($number%2) {
        $result = "IMPAIRE";
    } else {
        $result = "PAIRE";
    }
    return $result;
}

function checkAdmin($role){
    if (str_contains($role,'admin')) {
        $result = "Vous pouvez vous connecter";
    } else {
        $result = "Vous ne pouvez pas vous connecter";
    }
    return $result;
}

?>