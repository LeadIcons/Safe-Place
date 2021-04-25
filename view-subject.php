
<?php require_once("headerdarshboard.php");?>
   <body>
      <div>
        <h1 class="h2">View Subjects</h1>
        
      </div>

      <div>
        <table >
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Name</th>
                    <th>Date Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $query = subjects();
                $i=0;
                while($subject=$query->fetch(PDO::FETCH_OBJ)){
            ?>
                <tr>
                    <td><?= ++$i ?></td>
                    <td><?= $subject->name ?></td>
                     <td><?= date('d/m/Y', strtotime($subject->created_at))?></td>
                    <td>
                        <a href="delete-subject.php?id=<?= $subject->id ?>" > Delete</a>   
                    </td>
                </tr>
                <?php } ?>

                <?php if($query->rowcount() == 0) { ?>
                <tr>
                <td>No Record Found</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
      </div>

      
    </body>