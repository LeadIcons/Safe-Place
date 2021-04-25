<?php require_once("headerdarshboard.php");
$errors=[];
$success='';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(addSubject($_POST)){
        $success ='Subject has been added successfully';
    }

}

?>

<body >
      <div >
        <h1 class="h2">Add Subject</h1>
      </div>


           <?php if(!empty($success)){ ?>
            <div><?= $success ?></div>
            <?php  } ?>
       
            <div >
            <form method="post">
            <div>
                <label class="subject">Subject Name</label>
                <input type="text"  name="subject_name" placeholder="Enter subject name">
                <?php if(!empty($errors['subject_name'])){ ?>
                <span"> <?= $errors['subject_name'] ?></span>
                <?php }?>
            </div>
            <div>
                <button type="submit"  name="submit">submit</button>
            </div>
        </form>
            
</body>
     



