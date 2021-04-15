<?php 


function register($request) {
  
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    
    $array_user =[
        'user_name' => $user_name,
        'password' => $password,
        'dob' => $dob
    ];
       
     file_put_contents('database/'. $array_user['user_name'].".json",json_encode($array_user));
     header("Location:success-page.php");
}

function login($request){

    if(file_exists("database/".$request["username"].".json") && !empty($request["username"])) {

         $file = file_get_contents("database/".$request["username"].".json");
        
         $data=json_decode($file);

         if($data->password == $request["password"]) {

           $_SESSION['user'] = $data;

           header("Location:loginsucceed.php");

         }

        
    }
    
}


function resetPass($request) {

    if(file_exists("database/".$request["username"].".json") && !empty($request["username"])) {

        $file = file_get_contents("database/".$request["username"].".json");
       
        $data=json_decode($file);

        $_SESSION['user'] = $data;

        header("Location:password-reset.php");
       
   }

}

function passReset($request, $user) {

    if(file_exists("database/".$user->user_name.".json")) {

        $array_user =[
            'user_name' => $user->user_name,
            'password' => $request['password'],
            'dob' => $user->dob
        ];
           
        file_put_contents('database/'. $user->user_name. ".json",json_encode($array_user));

        unset($_SESSION['user']);

        header("Location:login.php");
       
   }

}