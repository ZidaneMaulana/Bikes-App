<?php 

	$con = mysqli_connect("localhost","root","","dbrentalsepeda");

    $noktp = $_POST["noktp"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $nama = $_POST["nama"];
    $nohp = $_POST["nohp"];
    $alamat = $_POST["alamat"];
    // $roleuser = $_POST["roleuser"];

    $sql = "INSERT INTO tbuser (noktp, email, password, nama, nohp, alamat, roleuser) VALUES('$noktp', '$email', '$password', '$nama', '$nohp', '$alamat', '0')";
    $json["result"] = [];

    if( mysqli_query($con, $sql) === true ){
        $json["result"]["response"] = true;
    }else{
        $json["result"]["response"] = true;
    }

    echo json_encode($json);

?>