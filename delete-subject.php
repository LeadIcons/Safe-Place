<?php 
require_once("functiondarshboard.php");
$db = dbcon();

if(empty($_GET['id'])){
    header('Location: view-subject.php');
}
$id = $_GET['id'];
$query = $db-> prepare("DELETE FROM addsubject WHERE id=:id");
$query -> execute([
        'id'=> $id
]);

header('Location: view-subject.php');
?>