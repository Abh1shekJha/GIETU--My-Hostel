<?php
session_start();
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include('dbconn.php');
    $uname = $_POST["uname"];
    $pwd = $_POST["pwd"];
    
    $sql = "Select * from users where username='$uname' AND pass='$pwd'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $uname;
        
        header("Location:studentdashboard.php");
        
    }
    else
    {
        $showError = "Invalid credentials!";
    }
}

    include('includes/top.php');
    include('includes/sidebar.php');
?>


    
      
      <!--section id="left-panel">
      
          <div id="content-box">
          
              <span>MAIN</span>
              <ul id="Menu" class="Menu">
              
                 <li><i class="fas fa-file-signature"></i><a href="student_reg.php"> User Registration</a></li>
                 <li><li><i class="fas fa-users"></i><a href="index.php"> User Login</a></li>
                 <li><li><i class="fas fa-user-shield"></i><a href="adminlogin.php"> Admin Login</a></li>
              </ul>
          
          </div>
      
      </section-->
    
      
      <section id="right-panel" class="right-panel">
      
          <h3>User Login</h3>
          <div id="login-box">
          
            <?php 
              if($showError != false){
                  
                  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong> Invalid Credentials, please try again!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
              }
              ?>
              
              
            <form id="login" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            
                <table>
                    
                    <tr>
                        <td><h6>USERNAME</h6></td>
                    </tr>
                    <tr>
                        <td><input required name="uname" type="text" placeholder="Username"></td>
                    </tr>
                    <tr>
                        <td><h6>PASSWORD</h6></td>
                    </tr>
                    
                    <tr>
                        <td><input name="pwd" type="password" placeholder="Password"></td>
                    </tr>
                    <tr>
                        <td><input required id="login-btn" type="submit" value="Login"></td>
                            
                    
                    </tr>
                
                </table>          
              
            </form>  
          </div>
          
          <div class="footer">
          
                <h6>4th Semester Project &nbsp;&nbsp;|&nbsp;&nbsp;GIETU - My Hostel &nbsp;&nbsp;|&nbsp;&nbsp; &copy;2021</h6>
            
          </div>
      </section>
    
      
      
      
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
      
    

    
  </body>
</html>