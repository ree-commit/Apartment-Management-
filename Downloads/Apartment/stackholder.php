<?php

?>
<?php

?>
<!DOCTYPE html>
<html>
    <head>
    	
              
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>AMS</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style2.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header nav nav-tabs" role="tablist">
                   
                </div>

                <ul class="list-unstyled components">
                    
                    <li class="nav-item">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">OWNER</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li class="nav-item"><a  href="createflat1.php">Create</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#viewflat">View</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#updateflat">Update</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#deleteflatowner">Delete</a></li>
                        </ul>
                    </li>
                     
                 
                     <li class="nav-item">
                        <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false">EMPLOYEE</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu1">
                            <li class="nav-item"><a href="createemployee.php">Create</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#viewemployee">View</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#updateemployee">Update</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#deleteemployee">Delete</a></li>
                        </ul>
                    </li>
            
                </ul>

                
            </nav>

           

                

                <div class="tab-content">
  
    <div id="createflat" class="container tab-pane fade"><br>
      <h3>Create Flat Owner Profile</h3>
      
	  
	  
	  
	  
    </div>
    <div id="viewflat" class="container tab-pane fade"><br>
      <h3>View Flat Owner Profile</h3>
     <form action="nviewflat.php" method="post">
 <label for="dno"><h4>Door number&nbsp;&emsp;</h4></label><br>
   &nbsp;&nbsp; <input type="text"  placeholder="Enter doorno " name="dno" pattern="[0-9]{1}-[A-Z]{1}-[0-9]{2}-[0-9]{3}/[0-9]{1}"  required> <div id="result"></div><br> <button style="border-radius:10px;background-color:#4CAF50;color: white;padding:10px 15px;margin-left:2% ;border: none;" name="submit" value="Submit">View</button>
</form>
 </div>
    <div id="updateflat" class="container tab-pane fade"><br>
      <h3>Update Flat Owner Profile</h3>
      <form action="updateflat.php" method="post">
 <label for="dno"><h4>Door number&nbsp;&emsp;</h4></label><br>
   &nbsp;&nbsp; <input type="text"  placeholder="Enter doorno " name="dno" pattern="[0-9]{1}-[A-Z]{1}-[0-9]{2}-[0-9]{3}/[0-9]{1}"  required>  required> <div id="result"></div><br> <button style="border-radius:10px;background-color:#4CAF50;color: white;padding:10px 15px;margin-left:2% ;border: none;" name="submit" value="Submit">Update</button>
</form>
 </div>
    <div id="deleteflat" class="container tab-pane fade"><br>
      <h3>Delete Flat Owner Profile</h3>
<br>
<br>
<form action="deleteflat.php" method="post">
 <label for="dno"><h4>Door number&nbsp;&emsp;</h4></label><br>
   &nbsp;&nbsp; <input type="text" onkeyup="checkpattern(this)" placeholder="Enter doorno " name="dno" pattern="[0-9]{1}-[A-Z]{1}-[0-9]{2}-[0-9]{3}/[0-9]{1}"  required>  required> <div id="result"></div><br> <button style="border-radius:10px;background-color:#4CAF50;color: white;padding:10px 15px;margin-left:2% ;border: none;" name="submit" value="Submit">Delete</button>
</form>
    </div>
    <div id="updateemployee" class="container tab-pane fade"><br>
      <h3>View Employee Record</h3>
<br>
<br>
<form action="updateemployee.php" method="post">
 <label for="eno"><h4>Employee Id&nbsp;&emsp;</h4></label><br>
   &nbsp;&nbsp; <input type="number"  placeholder="Enter Employeeid" name="eno" required> <br> <br><button style="border-radius:10px;background-color:#4CAF50;color: white;padding:10px 15px;margin-left:2% ;border: none;" name="submit" value="Submit">View</button>
</form>
    </div>
     <div id="viewemployee" class="container tab-pane fade"><br>
      <h3>View Employee Record</h3>
<br>
<br>
<form action="viewemployee.php" method="post">
 <label for="eno"><h4>Employee Id&nbsp;&emsp;</h4></label><br>
   &nbsp;&nbsp; <input type="number"  placeholder="Enter Employeeid" name="eno" required> <br> <br><button style="border-radius:10px;background-color:#4CAF50;color: white;padding:10px 15px;margin-left:2% ;border: none;" name="submit" value="Submit">View</button>
</form>
    </div>
    <div id="deleteemployee" class="container tab-pane fade"><br>
      <h3>Delete Employee Record</h3>
<br>
<br>
<form action="deleteemployee.php" method="post">
 <label for="eno"><h4>Employee Id&nbsp;&emsp;</h4></label><br>
   &nbsp;&nbsp; <input type="number"  placeholder="Enter Employeeid" name="eno" required> <br> <br><button style="border-radius:10px;background-color:#4CAF50;color: white;padding:10px 15px;margin-left:2% ;border: none;" name="submit" value="Submit">Delete</button>
</form>
    </div>

  </div>

            </div>
        </div>





        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>
    </body>
</html>
