<?php

require_once '../share/db.php';
$query = 'SELECT * FROM items where status=0';
var_dump($query);
$result = $mysqli->query($query) or die($mysqli->error . __LINE__);

$arr = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $arr[] = $row;
    }
}

# JSON-encode the response
echo  json_encode($arr);
?>