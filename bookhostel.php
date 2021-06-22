<?php

      session_start();

    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: index.php");
        exit;
    }


    include('includes/top.php');

    include('includes/sidebar.php');
?>

<section class="right-panel">
    
  
        <div id="box-outer" class="box-outer">
                <h4 class="box-outer-heading">Registration</h4>
            <hr>
            
            <div class="content-box">
                <div class="alert alert-info bg-danger" role="alert">
                  You have already booked your room!
                </div>
                   
        
        <form class="row g-4" method="post" action="ureg.php">
        
            <h5 class="bg-dark col-md-3" style="color: green; padding: 4px;font-weight:600; margin-bottom:0;">Room Info:</h5>
            <div class="row g-3">
            
                <div class="col-md-4">
                  <select name="gender"  class="form-select" aria-label="Gender">
                  <option selected>Select Hostel</option>
                  <option value="M">NC-5</option>
                  <option value="F">Female</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <select name="gender"  class="form-select" aria-label="Gender">
                  <option selected>Room No.</option>
                  <option value="M">NC-5</option>
                  <option value="F">Female</option>
                  </select>
                </div>
            </div>
                       
        
                      
            <div class="row g-3">
            <div class="col-md-4">
              <div class="col-md-4 input-group mb-3">
                <span class="input-group-text">Stay From:</span>
                <input name="date" type="date" class="form-control" placeholder="Password" aria-label="Password">
              </div>
            </div>
                
            <div class="col-md-4">
              <div class="col-md-4 input-group mb-3">
                <span class="input-group-text">Duration in months:</span>
                <select name="gender"  class="form-select" aria-label="Gender">
                    <option value="">select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
              </div>
            </div>
            </div>

            
            <h5 class="bg-dark col-md-3" style="color: green; padding: 4px;font-weight:600; margin-bottom:0;">Personal Info:</h5>
            
            
                <div class="row g-3">
                  <div class="col-md-6">
                    <input name="rno" type="text" class="form-control" placeholder="Registration No." aria-label="Registration No.">
                  </div>              
                </div>
                
            <div class="row g-3">
              <div class="col">
                <input name="fname" type="text" class="form-control" placeholder="First name" aria-label="First name">
              </div>
              <div class="col">
                <input name="lname" type="text" class="form-control" placeholder="Last name" aria-label="Last name">
              </div>
            </div>
                
            
             
            
            <div class="row g-3">
            
                <div class="col">
                  <select name="gender"  class="form-select" aria-label="Gender">
                  <option selected>Gender</option>
                  <option value="M">Male</option>
                  <option value="F">Female</option>
                  </select>
                </div>
              <div class="col">
                <input name="mob" required type="text" class="form-control" placeholder="Mobile" aria-label="Mobile">
              </div>
            </div>

            <div class="row g-3">
              <div class="col">
                <input name="username" type="text" class="form-control" placeholder="Username" aria-label="Username">
              </div>
              <div class="col">
                <input name="email" type="email" class="form-control" placeholder="Email" aria-label="Email">
              </div>
            </div>

            <div class="row g-3">
              <div class="col">
                <input name="pwd" type="password" class="form-control" placeholder="Password" aria-label="Password">
              </div>
              <div class="col">
                <input name="cpwd" type="password" class="form-control" placeholder="Confirm password" aria-label=Confirm Password>
              </div>
            </div>

           
                           
           
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign Up</button>
              </div>
            </form>
             
        
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
    
</section>








