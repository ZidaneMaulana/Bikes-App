<?php

// $con = mysqli_connect("localhost","root","","dbrentalsepeda");

//         $nim = $_GET['nim'];
//         if(!$nim){
//         echo json_encode(array('message'=>'required field is empty'));
//         }else{
//         $query = mysqli_query($CON, "DELETE FROM tbuser WHERE nim='$nim'");
//         if($query){
//             echo json_encode(array('message'=>'student data successfully deleted.'));
//         }else{
//             echo json_encode(array('message'=>'student data failed to delete.'));
//         }
//     }

    $ID = $_POST['ID'];
	$con = mysqli_connect("localhost","root","","dbrentalsepeda");
	$sql = "DELETE FROM tbuser where ID = $ID";
	$json["hasil"]=array();
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);

?>