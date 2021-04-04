<?php 
    require('db.php');
    $id = $_GET['id'];
    $sql_get_by_id_q = "SELECT * FROM people where id=$id";
    $result = mysqli_query($connection,$sql_get_by_id_q);
    $data = mysqli_fetch_array($result);
    $id_name = $data['name'];
    $id_email = $data['email'];

    $message ='';
    //if ( isset($_POST['name']) && isset($_POST['email']) ){
    if ( isset($_POST['submit'])){
        $name = mysqli_real_escape_string($connection,$_POST['name']);
        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $sql_update_query = "UPDATE people SET name='$name' , email='$email' WHERE id='$id' " ;
        if(empty($name)){
            $message = "Username is empty";
        }
        elseif(empty($email)){
            $message = "Email is empty";
        }
        elseif(mysqli_query($connection,$sql_update_query)){
            $message= "Data inserted successfully.";
        }else{
            $message= "error".$sql_update_query."<br>".mysqli_error($connection);
        }
        
                
    }


?>
<?php require('header.php'); ?>

    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>Update a person </h2>
            </div>
            <div class="card-body">
                
                <?php if(!empty($message)): ?>
                    <!-- -->
                    <div class="alert alert-success">
                        <?php echo $message; ?>
                    </div>    
                <?php endif ?>

                <form method="POST"  >
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id = "name" class="form-control" value="<?=$id_name?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id ="email" class="form-control" value="<?=$id_email?>">
                    </div><br>   
                    <div class="form-group">
                        <button type="submit"  name ="submit" id = "submit" class="btn btn-info">update a person</button>
                    </div>             
                </form>
            </div>
        </div>
    </div>

<?php require('footer.php'); ?>

