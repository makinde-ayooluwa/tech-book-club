<!DOCTYPE html> 
<html lang="en"> 

<head> 
    <link rel="stylesheet" href="bootstrap.min.css">
    <meta charset="UTF-8" /> 
    <meta name="viewport" 
          content= "width=device-width, 
                    initial-scale=1.0" /> 
    <title>Bootstrap Collapsible Content</title> 
    <style> 
       
    </style> 
</head> 

<body> 
    <nav class="navbar bg-dark navbar-dark navbar-expand-sm"> 
        <!-- Create a div for navbar-brand --> 
        <a class=navbar-brand href='#'> 
        <img src='images/wisdompetlogo.svg' style="width: 40px;" alt="wisdow pet 
        logo"/> 
        </a> 
        <!-- Create a hamburger button to control the collapseTab--> 
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data
        bs-target='#collapseTab' aria-controls="collapseTab" aria-expanded='false' aria
        label='Toggle navigation'> 
        <span class='navbar-toggler-icon'></span> 
        </button> <!--end of collapse button --> 
        <!-- Create a div to specified the collapse session --> 
        <div class='collapse navbar-collapse'  id='collapseTab'> 
        <!-- nav list--> 
        <div class='navbar-nav'> 
        <a href="#" class="nav-item nav-link active">Home</a> 
        <a href="#" class="nav-item nav-link">Services</a> 
        <a href="#" class="nav-item nav-link">Mission Impossible</a> 
        <a href="#" class=" nav-item nav-link">Staff</a> 
        <a href="#" class="nav-item nav-link">Testimonials</a> 
        </div> 
        </div> <!-- end of collapse--> 
        </nav> 
</body> 

</html> 