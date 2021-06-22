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
                  <div id="hostel-rooms" class="col dashboard-block darkcyan">
                      
                        <i class="fas fa-user-graduate fa-4x"></i>

                      <h5 class="bold">My Profile</h5>
                  </div>
                  
                  <div id="alot-rooms" class="col dashboard-block carnelian">
                      <i class="fas fa-house-user fa-4x"></i>
                    <h5 class="bold">My Room</h5>
                  </div>
                  
                  <div class="col dashboard-block midnblue" style="margin-right: 2%;">
                    
                      <i class="fas fa-exclamation-triangle fa-4x"></i>
                      <h5 class="bold">Complain</h5>
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