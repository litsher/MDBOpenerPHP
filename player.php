<?php

include_once 'connect.php';

$id = $_GET['id']; 
$sql  = "SELECT Path FROM Tracks where ID = $id";
$result = $db->query($sql);
$row = $result->fetch();  
$Path = $row["Path"];
echo $Path;
 ?>
 
 <object height="50" width="100" data=" C:/Users/Nathan/Music/Jimmies Chicken Shack/03 - Jimmies Chicken Shack - Bring Your Own Stereo - Do Right.mp3 "></object>