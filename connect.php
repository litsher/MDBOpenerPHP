<?php

$dbName = "C:/Users/Nathan/AppData/Roaming/Jaangle/Storage/Database/music.mdb";
echo $dbName;
if (!file_exists($dbName)) {

    die("Could not find database file.");
}
$db = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$dbName; Uid=; Pwd=DontMessWithIt;");
 ?>