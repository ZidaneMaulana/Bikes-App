<?php 

    $con = mysqli_connect("localhost","root","","dbrentalsepeda");

    $read_sql = mysqli_query($con, "SELECT * FROM tbuser");

    $json["result"]["data"] = [];

    while( $data = mysqli_fetch_assoc($read_sql) ){
        array_push($json["result"]["data"], $data);
    }

    echo json_encode($json);

?>