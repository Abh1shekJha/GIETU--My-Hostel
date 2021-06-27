<?php

    session_start();

    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: index.php");
        exit;
    }


    include('includes/top.php');

    include('includes/sidebar.php');
?>


 
      <section id="dashboard" class="right-panel lg-right">
      
          <h3 class="panel-heading">Room Details</h3>
          
          
       
          <div class="box-outer">
          
               <h4 class="box-outer-heading">Room Related Info</h4>
              
                <div class="content-box">
                    
                   <table class="table">
                      
                        <tr class="table-secondary">
                          <th scope="row">Registration No.</th>
                          <td scope="row">1901060045</td>
                      
                        </tr>
                      
                      
                        <tr class="table-light">
                          <th scope="row">Hostel</th>
                          <td>NC-5</td>
                        </tr>
                        <tr class="table-secondary">
                          <th scope="row">Room No.</th>
                          <td>54</td>
                        </tr>
                        <tr class="table-light">
                          <th scope="row">Stay from</th>
                          <td>26-06-2021</td>
                        </tr>
                      
                    </table>
                    
                  
                  
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