<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $license = $_POST["license"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    //DATABASE Connection    
    $conn = new mysqli('localhost', 'root', 'driveease');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(name, email, phone, license, password, confirmPassword)
        value(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi", $name, $email, $phone, $license, $password, $confirmPassword);
        $sttmt->execute();
        echo "registration successfully...";
        $stmt->close();
        $stmt->close();
    }
?>