<?php 
function dbcon(){
    try{ 
        $pdo=new PDO("mysql:host=localhost; dbname=zuriassignment;","root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        die("Could not connect to Database ".$e->getmessage());
    }
        return $pdo;
}

function addSubject($request){
    global $db, $errors;
    if(empty(trim($request['subject_name']))){
      $errors['subject_name'] = 'The Subject Name is required';
    }
    if(empty($errors)){
        $query= $db->prepare("INSERT INTO addsubject(`name`) VALUES(:name)");
        $query->execute([
            'name' => $request['subject_name'],
        ]);
        return true;
     }
}

function subjects(){
global $db;
$query = $db->prepare("SELECT * FROM addsubject ORDER BY ID DESC");
$query->execute();

return $query;

}

?>