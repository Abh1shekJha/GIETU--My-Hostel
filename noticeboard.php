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
      
          <h3 class="panel-heading">Notice Board</h3>
          
          
       <br>
            <div class="content-box container">
                <div class="row">
                    
                   <div class="col-md-6">
                       
                      <div class="alert alert-success" role="alert">
                          <h4 class="alert-heading">Notice</h4>
                          <p>This is to inform all the students of this hostel that there is an information to inform you all such that the purpose of this notice board is satisfied.</p>
                          <hr>
                          <p class="mb-0">This is just a sample for the digital notice-board.<br> 
                          </p>
                          <p style="text-align:right"><strong>-Authority</strong></p>
                        </div>

                    </div>
                    
                    <div class="col-md-6">
                       
                      <div class="alert alert-success" role="alert">
                          <h4 class="alert-heading">Notice </h4>
                          <p>This is to inform all the students of this hostel that there is an information to inform you all such that the purpose of this notice board is satisfied.</p>
                          <hr>
                          <p class="mb-0">This is just a sample for the digital notice-board.<br> 
                          </p>
                          <p style="text-align:right"><strong>-Authority</strong></p>
                        </div>

                    </div>
                
                </div>
       
                 <div class="row">
                    
                    <div class="col-md-6">
                       
                      <div class="alert alert-success" role="alert">
                          <h4 class="alert-heading">Notice </h4>
                          <p>This is to inform all the students of this hostel that there is an information to inform you all such that the purpose of this notice board is satisfied.</p>
                          <hr>
                          <p class="mb-0">This is just a sample for the digital notice-board.<br> 
                          </p>
                          <p style="text-align:right"><strong>-Authority</strong></p>
                        </div>

                    </div>
                    
                   <div class="col-md-6">
                       
                      <div class="alert alert-success" role="alert">
                          <h4 class="alert-heading">Notice </h4>
                          <p>This is to inform all the students of this hostel that there is an information to inform you all such that the purpose of this notice board is satisfied.</p>
                          <hr>
                          <p class="mb-0">This is just a sample for the digital notice-board.<br> 
                          </p>
                          <p style="text-align:right"><strong>-Authority</strong></p>
                        </div>

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










