<?php

    session_start();

    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: index.php");
        exit;
    }


    include('includes/top.php');



?>
      
      <section id="left-panel">
      
          <div id="content-box">
          
              <span>MAIN</span>
              <ul id="Menu" class="Menu">
              
                 <li><i class="fas fa-laptop-house"></i><a href="dashboard.html"> Dashboard</a></li>
                 <li><li><i class="fas fa-bed"></i><a href="index.html"> Rooms</a></li>
                 <li><li><i class="fas fa-user"></i><a href="adminlogin.html"> Student Registration</a></li>
                  
                 <li><li><i class="fas fa-users"></i><a href="adminlogin.html"> Manage Students</a></li>
                <li><li><i class="fas fa-comments"></i><a href="adminlogin.html"> Commnicate</a></li>
              </ul>
         
              <hr>
              <ul id="Profile" class="Menu">
              
                 <li><i class="fas fa-user-circle"></i><a href="dashboard.html"> My Profile</a></li>
                 <li><li><i class="fas fa-sign-out-alt
"></i><a href="logout.php"> Logout</a></li>
          </ul>
          </div>
          
          
          

      
      </section>
    
      
      <section id="dashboard" class="right-panel">
      
          <h3 class="panel-heading">Dashboard</h3>
          
          
          
          <div id="admin-dashboard-panel" class="data-panel container">
              
              
              <div class="row">
                  <div id="hostel-rooms" class="col dashboard-block deepsafron">
                      
                        <i class="fas fa-hotel fa-4x"></i>

                      <h5 class="bold">Hostel Rooms</h5>
                  </div>
                  
                  <div id="alot-rooms" class="col dashboard-block amaranth">
                      <i class="fas fa-id-card fa-4x"></i>
                    <h5 class="bold">Room Allotment</h5>
                  </div>
                  
                  <div class="col dashboard-block imperialred" style="margin-right: 2%;">
                    
                      <i class="fas fa-book-dead fa-4x"></i>
                      <h5 class="bold">View Complaints</h5>
                  </div>
                                  
              </div>
              
              
              <div class="row">
                  <div id="hostel-rooms" class="col dashboard-block darkcyan">
                      
                        <i class="fas fa-user-graduate fa-4x"></i>

                      <h5 class="bold">Hostel Users</h5>
                  </div>
                  
                  <div id="alot-rooms" class="col dashboard-block carnelian">
                      <i class="fas fa-clipboard-list fa-4x"></i>
                    <h5 class="bold">Staff Attendance</h5>
                  </div>
                  
                  <div class="col dashboard-block midnblue" style="margin-right: 2%;">
                    
                      <i class="fas fa-phone-alt fa-4x"></i>
                      <h5 class="bold">View Enquiry</h5>
                  </div>
                                  
              </div>
              
              
          </div>
          
          
          
          
          
          
          
          
          
          
          
          <div class="footer">
          
                <h6>4th Semester Project &nbsp;&nbsp;|&nbsp;&nbsp;GIETU - My Hostel &nbsp;&nbsp;|&nbsp;&nbsp; &copy;2021</h6>
            
          </div>
      </section>
    
      
      
      
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
      
    

    
  </body>
</html>