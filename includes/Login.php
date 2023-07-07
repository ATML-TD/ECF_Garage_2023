<?php
include("includes/Config.php");

if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $sql="SELECT username, password FROM admin WHERE username=:username and password=:password";
    $query= $pdo -> prepare($sql);
    $query -> bindParam(':username', $username, PDO::PARAM_STR);
    $query -> bindParam(':password', $password, PDO::PARAM_STR);
    $query -> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
    {
        $_SESSION['alogin']=$_POST['username'];
        echo "<script> document.location = 'admin/index.php'; </script>";
    } else{
        echo "<script>alert('Utilisateur invalide');</script>";
    }
}




if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $sql="SELECT username, password FROM employees WHERE username=:username and password=:password";
    $query= $pdo -> prepare($sql);
    $query -> bindParam(':username', $username, PDO::PARAM_STR);
    $query -> bindParam(':password', $password, PDO::PARAM_STR);
    $query -> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
    {
        $_SESSION['alogin']=$_POST['username'];
        echo "<script> document.location = 'employee/index.php'; </script>";
    } else{
        echo "<script>alert('Utilisateur invalide');</script>";
    }
}

?>