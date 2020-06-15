<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// PHONE
if (empty($_POST["phone"])) {
    $errorMSG = "Phone is required ";
} else {
    $phone = $_POST["phone"];
}

// EMPRESA
if (empty($_POST["empresa"])) {
    $errorMSG = "Empresa is required ";
} else {
    $empresa = $_POST["empresa"];
}

// PAIS
if (empty($_POST["pais"])) {
    $errorMSG = "Pais is required ";
} else {
    $pais = $_POST["pais"];
}

// CIUDAD
if (empty($_POST["ciudad"])) {
    $errorMSG = "Ciudad is required ";
} else {
    $ciudad = $_POST["ciudad"];
}
// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "paulinalara@tlsolution.net";
$Subject = "New Message Received";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Empresa: ";
$Body .= $empresa;
$Body .= "\n";
$Body .= "pais: ";
$Body .= $pais;
$Body .= "\n";
$Body .= "Ciudad: ";
$Body .= $ciudad;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>