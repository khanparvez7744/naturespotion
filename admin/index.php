<?php
  require_once '../conn.php';
?>

<?php
    $msg1="";
    $msg2="";
   if(isset($_POST['login'])){
    $user = $_POST['user'];
    $password = $_POST['pass'];
    $sql= "SELECT * FROM admin where is_delete='0'";
    $result=$conn->query($sql);
    $data = $result->fetch_row();
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
    if($data[1] == $user){
      if($data[3] == $password){
         header("location: home.php");
    }
    else{
      $msg2="invalid password";
    }
  }
  else{
    $msg1="invalid username";
   }
  }
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>login</title>
</head>
<body>
 <div class="container" style="margin-top: 100px;">
   <div class="col-md-6 mx-auto">
    <h3 class="text-primary">Admin login</h3>
     <form method="post">
      <div class="my-3">
        <label>User:</label><input class="mx-5" type="text" name="user" placeholder="User name" required><br>
        <?php
        if($msg1 !=""){
          echo "<div style='color:red;'>$msg1</div>";
        }
        ?>
      </div>
      <div class="mb-3">
        <label>Password:</label><input class="mx-4" type="password" name="pass" placeholder="password" required>
        <?php
        if($msg2 !=""){
          echo "<div style='color:red;'>$msg2</div>";
        }
        ?>
      </div>
      <button type="submit" class="btn btn-primary" name="login">login</button>
     </form>
   </div>
 </div>
  <!-- these links for bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- !bootstrap link -->
</body>
</html>
