
<?php
 
/*
* Write your logic to manage the data
* like storing data in database
*/
 
// POST Data
$data['fname'] = $_POST['fname'];
$data['lname'] = $_POST['lname'];
$data['uemail'] = $_POST['uemail'];
$data['umessage'] = $_POST['umessage'];
 
echo json_encode($data);
exit;
 
?>