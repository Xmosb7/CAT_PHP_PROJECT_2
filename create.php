<?php 
    
    $message ='';
    require('db.php');
    //if ( isset($_POST['name']) && isset($_POST['email']) ){
    if ( isset($_POST['submit'])){
        $name = mysqli_real_escape_string($connection,$_POST['name']);
        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $sql_query = "INSERT INTO people(name, email) VALUES ('$name','$email') " ;
        if(empty($name)){
            $message = "Username is empty";
        }
        elseif(empty($email)){
            $message = "Email is empty";
        }
        elseif(mysqli_query($connection,$sql_query)){
            $message= "New record created successfully.";
        }else{
            $message= "error".$sql_query."<br>".mysqli_error($connection);
        }
        
                
    }


?>
<?php require('header.php'); ?>

    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>Create a person </h2>
            </div>
            <div class="card-body">
                
                <?php if(!empty($message)): ?>
                    <!-- -->
                    <div class="alert alert-success">
                        <?php echo $message; ?>
                    </div>    
                <?php endif ?>

                <form method="POST" action="create.php" >
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id = "name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id ="email" class="form-control">
                    </div><br>   
                    <div class="form-group">
                        <button type="submit"  name ="submit" id = "submit" class="btn btn-info">Create a person</button>
                    </div>             
                </form>
            </div>
        </div>
    </div>

<?php require('footer.php'); ?>

