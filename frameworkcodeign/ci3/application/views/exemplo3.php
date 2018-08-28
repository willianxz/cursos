<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <meta charset="UTF-8">
    <title>Exemplo 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
    .w3-navbar,h1,button {font-family: "Montserrat", sans-serif}
    .fa-anchor,.fa-coffee {font-size:200px}
    </style>
    <body>

    <!-- Navbar -->
    <ul class="w3-navbar w3-red w3-card-2 w3-top w3-left-align w3-large w3-hover-shadow">
      
      <?php foreach($menu as $item): ?>  
        
      <li class="w3-hide-small"> <?php echo $item; ?></li>
      
      <?php endforeach; ?>
      
    </ul>

   

    <!-- Header -->
    <div class="w3-container w3-red w3-center w3-padding-128">
      <h1 class="w3-margin w3-jumbo"><?php echo $titulo; ?></h1>
    </div>

   
<div class="w3-light-grey w3-padding-64 w3-margin-bottom w3-center">
  <h1 class="w3-jumbo">Weekly Ping</h1>
</div>

<div class="w3-row-padding w3-content" style="max-width:1400px">
  <div class="w3-twothird">
      
      <!-- <img src="../libraries/images/café1.jpg" alt="Café" style="width:100%"> -->
    
      
   <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i> 
      
    <h2>Empty Notebook Found</h2>
    <div class="w3-justify">
     
      <p><?php echo $texto; ?></p>
      
      <p><?php //echo $segmento ?></p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
  <div class="w3-third">
    <div class="w3-container w3-light-grey">
      <h2>Very New News!</h2>
      <i class="fa fa-envelope  w3-text-red w3-xlarge w3-margin-right"></i>
      <p class="w3-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <br>
    <div class="w3-container w3-light-grey w3-justify">
      <h2>Very New News!</h2>
      <i class="fa fa-envelope  w3-text-red w3-xlarge w3-margin-right"></i>
      <p class="w3-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <br>
    <div class="w3-container w3-light-grey w3-justify">
      <h2>Very New News!</h2>
      <i class="fa fa-envelope  w3-text-red w3-xlarge w3-margin-right"></i>
      <p class="w3-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
</div>
    
    
    
    <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
        <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-opacity">
      <div class="w3-xlarge w3-padding-32">
       <a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
       <a href="#" class="w3-hover-text-red"><i class="fa fa-pinterest-p"></i></a>
       <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
       <a href="#" class="w3-hover-text-grey"><i class="fa fa-flickr"></i></a>
       <a href="#" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
     </div>
     <p>Desenvolvido por Willian Rosa Duarte</p>
    </footer>


</body>
</html>

