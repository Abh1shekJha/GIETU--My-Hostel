<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,500;1,300;1,400;1,500&family=Roboto+Slab:wght@400;600&family=Rowdies&display=swap" rel="stylesheet">
    <!-- Style Css -->
    <link href="css/style.css" rel="stylesheet">
    <!-- font-awesome -->
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Student Registration</title>
  </head>
  <body>
    
      
      <header>
      
          <div id="head-bar">
            <h1>GIETU - MY HOSTEL</h1>
          </div>
      
      </header>
    
      
      <section id="left-panel">
      
          <div id="content-box">
          
              <span>MAIN</span>
              <ul id="Menu" class="Menu">
              
                 <li><i class="fas fa-file-signature"></i><a href="student_reg.html"> User Registration</a></li>
                  <li><li><i class="fas fa-users"></i><a href="index.html"> User Login</a></li>
                 <li><li><i class="fas fa-user-shield"></i><a href="adminlogin.html"> Admin Login</a></li>
              </ul>
          
          </div>
      
      </section>
    
      
      <section id="right-panel" class="right-panel">
      
          <h3>Student Registration</h3>
          
          
         <div class="reg-form" style="opacity: 0.9">
          
             
             
            <h4>Enter Your Details:</h4>
             
            <form class="row g-4" method="post" action="ureg.php">
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
          
          
          
          
          
          <div class="footer">
          
                <h6>4th Semester Project &nbsp;&nbsp;|&nbsp;&nbsp;GIETU - My Hostel &nbsp;&nbsp;|&nbsp;&nbsp; &copy;2021</h6>
            
          </div>
      </section>
    
      
      
      
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
      
    

    
  </body>
</html>