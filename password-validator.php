<?php

$password = " 0&a24223A2 ";
function validatePassword($password){
    $length = false;
    $noAccents = false;
    $charMinimum = false;
    $specialChar = false;
    $UPPERCASE = false;
    $lowercase = false;
    $number = false;
    $input = true;
    $password == trim($password);
    if (strlen($password) >= 10 ){
        $length = true;
    }
    if(strlen($password) == mb_strlen($password)){
        $noAccents = true;
    }
    if(count(array_unique(str_split($password))) >= 6){
        $charMinimum = true;
    }
    for ($i = 0; $i < strlen($password); $i++){
        $c = $password[$i];
        if($c == "!" || $c == "#" || $c == "$" || $c == "%" || $c == "&" || $c == "*" || $c ==  "+" || $c == "-" || $c == ":" || $c == ";" || $c == "=" || $c == " " ){  
            $specialChar= true;  
        }else if($c >= "A" && $c <= "Z" ){
            $UPPERCASE = true;
        }else if($c >= "a" &&  $c <= "z"){
            $lowercase = true;
        }else if($c >= "0" && $c <= "9"){
            $number = true;
        }else{
            $input = false;
        }
    }
    if ($length && $noAccents && $charMinimum && $specialChar && $UPPERCASE && $lowercase && $number && $input == true){
        $answer = " valide";
    }else{
        $answer = "invalide";
    }
    return $answer;
}

echo validatePassword($password);

?>

