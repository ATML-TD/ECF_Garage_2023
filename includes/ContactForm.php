<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL);

if(isset($_POST['contactFrmSubmit']) && !empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['email']) && (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) && !empty($_POST['number']) && !empty($_POST['message'])){
    // Submitted form data
    $name   = $_POST['name'];
    $firstname   = $_POST['firstname'];
    $number   = $_POST['number'];
    $email  = $_POST['email'];
    $message= $_POST['message'];
    
    /*
     * Send email to admin
     */
    $to = 'admin@example.com';
    $subject = 'Bonjour';
    
    $htmlContent = '
    <h4>Un client vous a envoyé un message.</h4>
    <table cellspacing="0" style="width: 300px; height: 200px;">
        <tr>
            <th>Nom:</th><td>'.$name.'</td>
        </tr>
        <tr style="background-color: #e0e0e0;">
            <th>Email:</th><td>'.$email.'</td>
        </tr>
        <tr>
            <th>Message:</th><td>'.$message.'</td>
        </tr>
    </table>';
    
    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // Additional headers
    $headers .= 'De: ClientUn<clientun@example.com>' . "\r\n";
    
    // Send email
    if(mail($to,$subject,$htmlContent,$headers)){
        $status = 'ok';
    }else{
        $status = 'err';
    }
    
    // Output status
    echo $status;die;
}else{
    echo("BYE");
}