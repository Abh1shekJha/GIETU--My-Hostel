<?php

      session_start();

    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: index.php");
        exit;
    }


    include('includes/top.php');

    include('includes/sidebar.php');
?>

<section class="lg-right">
    
  
        <div id="box-outer" class="box-outer">
                <h4 class="box-outer-heading">Registration</h4>
            <hr>
            
            <div class="content-box">
                <div class="alert alert-info bg-danger" role="alert">
                  You have already booked your room!
                </div>
                   
        
        <form class="row g-4" method="get" action="">
        
            <h5 class="bg-dark col-md-3" style="color: green; padding: 4px;font-weight:600; margin-bottom:0;">Room Info:</h5>
            <div class="row g-3">
            
                <div class="col-md-4">
                  <select name="hostel"  class="form-select" aria-label="Hostel">
                  <option selected>Select Hostel</option>
                    
                      <?php
                            include "dbconn.php";
                            $sql = "SELECT `h_name` FROM `hostel` WHERE 1";
                            $result = mysqli_query($conn,$sql);
                            $i=0;
                            while($rws = mysqli_fetch_array($result))
                            {
                               
                      ?>
                      
                    
                  <option value=""><?php echo $rws[$i];?></option>
                      
                      <?php
                            }
                      ?>
                      
                      
                  </select>
                </div>
                <div class="col-md-4">
                  <select name="room_no"  class="form-select" aria-label="Room No.">
                  <option selected>Room No.</option>
                      
                    <?php
                        for($i=1; $i<=10; $i++){
                            
                      
                      ?>
                  <option value="<?php echo $i;?>"><?php echo $i;?></option>
                    
                      <?php
                        }
                      ?>
                  
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
                
                 <div class="col">
                    <input name="email" type="email" class="form-control" placeholder="Email" aria-label="Email">
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
                <input name="emergency_contact" type="text" class="form-control" placeholder="Emergency Contact" aria-label="Username">
              </div>
                
                <div class="col">
                    <input name="guardian_name" type="text" class="form-control" placeholder="Guardian Name" aria-label="Password">
                  </div>
            </div>

            <div class="row g-3">
              
              <div class="col">
                <input name="guardian_rel" type="text" class="form-control" placeholder="Guardian Relation" aria-label="Guardian Relation">
              </div>
                <div class="col">
                <input name="guardian_mob" type="text" class="form-control" placeholder="Guardian Contact No." aria-label="guardian contact">
              </div>
            </div>

           
             <h5 class="bg-dark col-md-3" style="color: green; padding: 4px;font-weight:600; margin-bottom:0;">Correspondense Address:</h5>
                           
            
            <div class="row g-3">
              
                <div class="form-group col-md-8">
                    <textarea placeholder="Address"class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
            </div>

           <div class="row g-3">
              
              <div class="col">
                <input name="City" type="text" class="form-control" placeholder="City" aria-label="City">
              </div>
                <div class="col">
                <input name="State" type="text" class="form-control" placeholder="State" aria-label="State">
              </div>
               
               <div class="col">
                <input name="Pincode" type="text" class="form-control" placeholder="Pincode" aria-label="State">
              </div>
            </div>
            
            
             <h5 class="bg-dark col-md-3" style="color: green; padding: 4px;font-weight:600; margin-bottom:0;">Permanent Address:</h5>
                           
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label text-dark" for="flexCheckDefault">
                Permanent Address same as Correspondense address
              </label>
            </div>
            <div class="row g-3">
              
                <div class="form-group col-md-8">
                    <textarea placeholder="Address"class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
            </div>

           <div class="row g-3">
              
              <div class="col">
                <input name="City" type="text" class="form-control" placeholder="City" aria-label="City">
              </div>
                <div class="col">
                <input name="State" type="text" class="form-control" placeholder="State" aria-label="State">
              </div>
               
               <div class="col">
                <input name="Pincode" type="text" class="form-control" placeholder="Pincode" aria-label="State">
              </div>
            </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Register</button>
              </div>
            </form>
             <br>
        
            </div>
        </div>
    

    
    
    
      <div class="footer">
          
                <h6>4th Semester Project &nbsp;&nbsp;|&nbsp;&nbsp;GIETU - My Hostel &nbsp;&nbsp;|&nbsp;&nbsp; &copy;2021</h6>
            
          </div>
      </section>
    
      
      
      

<!-- JQUERY -->
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
      
    

    
  </body>
</html>
    
</section>








