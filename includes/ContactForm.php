<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Nom obligatoire ";
} else {
    $name = $_POST["name"];
}

// FIRSTNAME
if (empty($_POST["firstname"])) {
    $errorMSG = "Prénom obligatoire ";
} else {
    $firstname = $_POST["firstname"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email obligatoire ";
} else {
    $email = $_POST["email"];
}

// NUMBER
if (empty($_POST["number"])) {
    $errorMSG .= "Numéro obligatoire ";
} else {
    $number = $_POST["number"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message obligatoire";
} else {
    $message = $_POST["message"];
}


$EmailTo = "emailaddress@test.com";
$Subject = "Nouveau message reçu";

// prepare email body text
$Body = "";
$Body .= "Nom: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Prénom: ";
$Body .= $firstname;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Numéro: ";
$Body .= $number;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "De la part de:" . $email);

// redirect to success page
if ($success && $errorMSG == "") {
    echo "Tout est bon!";
} else {
    if ($errorMSG == "") {
        echo "Un problème est survenu :(";
    } else {
        echo $errorMSG;
    }
}

?>