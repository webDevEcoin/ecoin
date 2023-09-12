<?php
session_start();
require "inc/const.php";
require "inc/function.php";

$user = (isset($_POST['email']))?$_POST['email']:NULL;
$pass = (isset($_POST['password']))?$_POST['password']:NULL;
$v = (isset($_POST['sent']))?$_POST['sent']:NULL;

if($v=="ok"){
   $user = trim($user);
   $pass = trim($pass);
   $role= getRole($user,$pass,$lists);
  //echo $role ;
     if($role !=-1):
      $_SESSION["user"] = md5($user.$role);
        switch ($role) {
          case "admin":
            header("Location:admin/dashboard.php");
            break;
          case "user":
            header("Location:admin/index.php");
            break;
          default:
          header("Location:admin/logout.php");
            break;
        }

    else: 
        echo 'without Role';
     endif;
 
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
<?php
if(isset($_SESSION["user"])){
?>
<h1>This is My Session</h1>
<?php
}
?>

<div class="container">
    <div class="row">
        <div class="col-4 m-auto bg-info mt-5">
        <form method="post" action="">
  <div class="mb-3">
    <label for="eamil" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
<input type="hidden" name="sent" value="ok">
  <button type="submit" class="btn btn-primary">Login</button>
</form>
        </div>
    </div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>