<?php 

$con = mysqli_connect("localhost","root","","dbrentalsepeda");

    $id = $_POST["id"];
    $noktp = $_POST["noktp"];
    $email = $_POST["email"];
    $nama = $_POST["nama"];
    $nohp = $_POST["nohp"];
    $alamat = $_POST["alamat"];

    $sql = mysqli_query($con, "UPDATE tbuser SET nama='$nama', email='$email', noktp='$noktp', nohp='$nohp', alamat='$alamat' WHERE id=$id");
    $json["result"] = [];

    if( $sql === true ){
        $json["result"]["response"] = true;
    }else{
        $json["result"]["response"] = true;
    }

    echo json_encode($json);

?>