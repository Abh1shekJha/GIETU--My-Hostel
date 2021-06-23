<?php

    session_start();

    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: index.php");
        exit;
    }


    include('includes/top.php');
    include('includes/sidebar.php');


?>
      
     
      
      <section id="dashboard" class="right-panel">
      
          <h3 class="panel-heading">Dashboard</h3>
          
          
          
          <div id="admin-dashboard-panel" class="data-panel container">
              
              
              <div class="row">
                  
                  <a href="#" style="text-decoration:none;" class="col dashboard-block deepsafron">
                  <div id="hostel-rooms" class="">
                      
                        <i class="fas fa-hotel fa-4x"></i>

                      <h5 class="bold">Hostel Rooms</h5>
                  </div>
                  </a>
                  <a style="text-decoration:none;" class="col dashboard-block amaranth"href="#">
                  <div id="alot-rooms" class="">
                      <i class="fas fa-id-card fa-4x"></i>
                    <h5 class="bold">Room Allotment</h5>
                  </div>
                  </a>
                
                  <a href="#" style="text-decoration:none; margin-right: 2%;" class="col dashboard-block imperialred">
                  <div class="" style="margin-right: 2%;">
                    
                      <i class="fas fa-book-dead fa-4x"></i>
                      <h5 class="bold">View Complaints</h5>
                  </div>
                      </a>
                                  
              </div>
              
              
              <div class="row">
                  
                  <a href="#" style="text-decoration:none" class="col dashboard-block darkcyan"> 
                  <div id="hostel-rooms">
                      
                        <i class="fas fa-user-graduate fa-4x"></i>

                      <h5 class="bold">Hostel Users</h5>
                  </div>
                  </a>
                  
                  <a href="#" style="text-decoration:none" class="col dashboard-block carnelian">
                  <div id="alot-rooms">
                      <i class="fas fa-clipboard-list fa-4x"></i>
                    <h5 class="bold">Staff Attendance</h5>
                  </div>
                  </a>
                  
                  <a href="#" style="text-decoration:none; margin-right: 2%;"  class="col dashboard-block midnblue">
                  <div  style="">
                    
                      <i class="fas fa-phone-alt fa-4x"></i>
                      <h5 class="bold">View Enquiry</h5>
                  </div>
                    </a>              
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