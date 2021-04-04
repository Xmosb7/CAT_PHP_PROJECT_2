<?php 
    require 'db.php';
    $sql_q= 'SELECT * FROM people';
    $result = mysqli_query($connection,$sql_q);

?>


<?php require('header.php'); ?>

   
<div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>All people</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>Action</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_array($result)): ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['name']?></td>
                            <td><?= $row['email']?></td>
                            <td><a href="edit.php?id=<?=$row['id']?>" class="btn btn-info">Edit
                                <a onclick="return confirm('ARE YOU SURE?')"  href="delete.php?id=<?=$row['id']?>" class="btn btn-danger">Delete</td>
                        </tr>

                    <?php endwhile ?>
                
                </table>
            </div>
        </div>
    

    </div>


<?php require('footer.php'); ?>

