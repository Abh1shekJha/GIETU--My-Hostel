<section id="left-panel">
      
          <div id="content-box">
          
              <span>MAIN</span>
              <ul id="Menu" class="Menu">
            
            <?php if(isset($_SESSION['username']))      
            {?>
                 <li><i class="fas fa-laptop-house"></i><a href="studentdashboard.php"> Dashboard</a></li>
                  <li><li><i class="far fa-file"></i><a href="bookhostel.php"> Book Hostel</a></li>
                 <li><li><i class="fas fa-bed"></i><a href="index.html"> Room Details</a></li>
                 
                  
                 
                <li><li><i class="far fa-clipboard"></i><a href="adminlogin.html"> Notice Board</a></li>
              </ul>
         
              <hr>
              <ul id="Profile" class="Menu">
              
                 <li><i class="fas fa-user-circle"></i><a href="dashboard.html"> My Profile</a></li>
                  <li><i class="fas fa-key"></i><a href="dashboard.html"> Change Password</a></li>
                 <li><li><i class="fas fa-sign-out-alt"></i><a href="logout.php"> Logout</a></li>
                  
                <?php } else { ?>
                  
                  <li><i class="fas fa-file-signature"></i><a href="student_reg.php"> User Registration</a></li>
                 <li><li><i class="fas fa-users"></i><a href="index.php"> User Login</a></li>
                 <li><li><i class="fas fa-user-shield"></i><a href="adminlogin.php"> Admin Login</a></li>
                  
                  <?php } ?>
                  
          </ul>
          </div>
                      
      </section>