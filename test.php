<?php
$mysqli = mysqli_connect('localhost', 'root', 'Kpojiik0139', 'people') or die('Didn\'t connect');
$result = $mysqli->query('select human.name, human.age from `human`');
$res = [];
while($row = mysqli_fetch_assoc($result)){
    $res[] = $row;
}
    $res = json_encode($res);
    echo $res;
?>