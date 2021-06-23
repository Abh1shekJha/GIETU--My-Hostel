<?php
session_start();
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include('dbconn.php');
    $uname = $_POST["username"];
    $pwd = $_POST["password"];
    
    $sql = "Select * from admin where uname='$uname' AND pass='$pwd'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $uname;
        $_SESSION['isAdmin'] = true;
        header("Location:dashboard.php");
        
    }
    else
    {
        $showError = "Invalid credentials!";
    }
}



    
include('includes/top.php');

?>

      <section id="admin-panel">
            <?php 
              if($showError != false){
                  
                  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong> Invalid Credentials, please try again!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
              }
              ?>
          <div id="admin-block">
            <h4><i class="fa fa-user-shield fa-3x"></i> Administrator</h4>
              
              <form id="admin-login" action="" method="post">
              
                  <input required type="text" name="username" placeholder="Username">
                  <br>
                  <input required type="password" name="password" placeholder="Password">
                  <br>
                  <input class="submit-btn" type="submit" name="submit" value="Login">
                  
                  
              </form> 
          
          </div>
      
      
      
      </section>
      
      
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
      
    

    
  </body>
</html>