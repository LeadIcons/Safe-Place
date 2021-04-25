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

function register($request){
    global $db, $error;
    if(empty($request["name"])){
      $error["name"]="required field";

    }

    if(empty($request["course"])){
        $error["course"]="required field";
        
      }

      if(empty($request["username"])){
        $error["username"]="required field";
        
      }

      if(empty($request["password"])){
        $error["password"]="required field";
        
      }

      if(empty($request["confirm"])){
        $error["confirm"]="required field";
        
      }

      if(empty($error)){
          $query=$db->prepare("INSERT INTO student (fullname,course,username,password) VALUE (:fullname,:course,:username,:password)");
          $query->execute([
            "fullname"=>$request["name"],
            "course"=>$request["course"],
            "username"=>$request["username"],
            "password"=>$request["password"]
          ]);
          return true;
          
      }
}
function login($request){
  global $db, $error;
  if(empty($request["username"]) && empty($request["password"])){
    $error["credentials"]="required fields";

  }else{
    $password=$request["password"];
    $query=$db->prepare("SELECT * FROM student WHERE username=:username AND password=:password");
    $query->execute([
      "username"=>$request["username"], 
      "password"=>$password
    ]);
    if($query->rowCount()== 0){
      $error["credentials"]="invalid credential provided";
     
    }else{
      $data = $query->fetch(PDO::FETCH_OBJ);
      $_SESSION["student_name"]=$request["username"];
      $_SESSION["student"]=$data;
      header("Location:index.php");
    }
  }
}


function verifyuser($request){
  global $db, $error;
  if(empty($request["username"]) && empty($request["password"])){
    $error["credentials"]="required fields";

  }else{
    $password=$request["password"];
    $query=$db->prepare("SELECT * FROM student WHERE username=:username ");
    $query->execute([
      "username"=>$request["username"], 
    ]);
    if($query->rowCount()== 0){
      $error["credentials"]="username does not exit";
    }else{
      $data = $query->fetch(PDO::FETCH_OBJ);
      $_SESSION["user"]=$data;
      header("Location:reset.php");
    }
  }
}


function resetpass($request, $user){
  global $db, $error;
  if(empty($request["password"])){
    $error["credentials"]="required fields";

  }else{
    $password=$request["password"];
    $query=$db->prepare("UPDATE student SET  password=:password WHERE id=:id ");
    $query->execute([
      "password"=>$request['password'],
      "id"=>$user->id
    ]);
      header("Location:signin.php");
    }
  }
?>