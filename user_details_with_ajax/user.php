<?php
$cont = new mysqli('localhost','root','','the_ajax_user_db');
if($cont->connect_error){
    echo "Database Connection error".$cont->connect_error;
}

$useselectobj = "SELECT ajuid, ajusername, ajuseremail, ajuserpswd FROM ajuser";
$rst = $cont->query($useselectobj);
if($rst->num_rows>0){
    while($ajurow = $rst->fetch_assoc()){
        $data['user_id'] = $ajurow['ajuid'];
        $data['user_nme'] = $ajurow['ajusername'];
        $data['user_email'] = $ajurow['ajuseremail'];
        $data['user_password'] = $ajurow['ajuserpswd'];
        
    echo  json_encode($data);
     return;   // echo json_encode($data['user_id']);
        // echo json_encode($data['user_nme']);
        // echo json_encode($data['user_id']);
    }
    exit;
}

$cont->close();
?>