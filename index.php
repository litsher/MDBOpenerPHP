<?php

include_once 'connect.php';
$sql  = "SELECT * FROM Tracks";
$result = $db->query($sql);
$row = $result->fetch();
 while ($row = $result->fetch()) {
$Name = $row["Name"];
$id = $row["ID"];
?>

<ul> 
<li><a href="player.php?id=<?php echo "$id";?>"><?php echo "$Name"; ?></a></li> 
</ul>
<?php } ?>