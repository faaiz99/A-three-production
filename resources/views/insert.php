<?php 

$client = $_POST['client'];
$date = $_POST['date'];
$priority = $_POST['priority'];
$taskType = $_POST['taskType'];
$taskDescription = $_POST['taskDescription'];

// $con = new mysqli('localhost','root','','web');
// if($con->connect_error)
//     echo 'database error';
// else
//     echo 'working fine';
// $stmt = $con->prepare("INSERT INTO 
//         `task` (`client`, `date`, 
//         `priority`, `taskType`, `taskDescription`) 
//         VALUES (?,?,?,?,?);");
// $stmt->bind_param('sssss',$client,$date,$priority,$taskType,$taskDescription);        

// if($stmt->execute())
//     echo 'data inserted';
// else
//     echo('data not inserted');

?>