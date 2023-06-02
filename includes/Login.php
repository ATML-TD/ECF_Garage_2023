<?php  
$host = "localhost";  
$username = "root";  
$password = "";  
$message = "";  
try  
{  
    $pdo = new PDO("mysql:host=$host;", $username, $password); 
    $pdo->exec(statement:'CREATE DATABASE IF NOT EXISTS garageparrot');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    if(isset($_POST["login"]))  
    {  
        if(empty($_POST["username"]) || empty($_POST["password"]))  
        {  
            $message = '<label>All fields are required</label>';  
        }  
        else  
        {  
            $query = "SELECT * FROM admin WHERE username = :username AND password = :password";  
            $statement = $pdo->prepare($query);  
            $statement->execute(  
                    array(  
                        'username'     =>     $_POST["username"],  
                        'password'     =>     $_POST["password"]  
                    )  
            );  
            $count = $statement->rowCount();  
            if($count > 0)  
            {  
                //$_SESSION["username"] = $_POST["username"];
                header("Location: admin/index.php");  
            }  
            else  
            {  
                echo "<script>alert('Invalid Details');</script>";  
            }  
        }  
    }  
}  
catch(PDOException $error)  
{  
    $message = $error->getMessage();  
}  
?>  




<!-- Modal -->
<div class="modal fade" id="loginForm" tabindex="-1" role="dialog" aria-labelledby="loginFormTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="loginFormTitle">Login</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <?php  
            if(isset($message))  
            {  
                    echo '<label class="text-danger">'.$message.'</label>';  
            }  
        ?>  
        <form method="post">  
            <label>Username</label>  
            <input type="text" name="username" class="form-control" />  
            <br />  
            <label>Password</label>  
            <input type="password" name="password" class="form-control" />  
            <br />  
            <input type="submit" name="login" class="btn btn-danger" value="Login" />  
        </form>  
    </div>
</div>
</div>