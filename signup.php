<?php
    $name = $_POST['name'];
    $number  = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    //Database Connection
    
    $conn = new mysqli_connect('localhost','root','','sign_up');
    if($conn->connect_error){
        die('connection Failed :'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(name, number, gender, email, password) values(?,?,?,?,?)");
        $stmt->bind_param("sisss",$name, $number, $gender, $email, $password);
        $stmt->execute();
        echo "Registration Successfull";
        $stmt->close();
        $conn->close();

    }

?>