<?php
$cont = new mysqli('localhost','root','','the_ajax_user_db');


// $data['user_id'] = $_POST['ajuserid'];
// $data['user_nme'] = $_POST['ajusername'];
// $data['user_email'] = $_POST['ajuser_email'];
// $data['user_password'] = $_POST['ajuserps'];

if($cont->connect_error){
    echo "Database Connection error".$cont->connect_error;
}

// $useraddobj = "INSERT INTO ajuser (ajusername, ajuseremail, ajuserpswd) VALUES('$user_nme','$user_email','$user_password)";
$useselectobj = "SELECT ajuid, ajusername, ajuseremail, ajuserpswd FROM ajuser";
$rst = $cont->query($useselectobj);
if($rst->num_rows>0){
    while($ajurow = $rst->fetch_assoc()){
        $data['user_id'] = $ajurow['ajuid'];
        $data['user_nme'] = $ajurow['ajusername'];
        $data['user_email'] = $ajurow['ajuseremail'];
        $data['user_password'] = $ajurow['ajuserpswd'];
    }
}

if($cont->query($useraddobj) === TRUE){
    echo json_encode($data);
    exit;
}
else{
    echo "Data could not save try again";
}
$cont->close();
?>