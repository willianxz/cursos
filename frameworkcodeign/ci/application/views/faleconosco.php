<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <meta charset="UTF-8">
    <title>Fale Conosco</title>
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
    <ul class="w3-navbar w3-red w3-card-2 w3-top w3-left-align w3-large">
      <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
        <a class="w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      </li>
      <li><a href="http://localhost/frameworkcodeign/ci/index.php" class="w3-padding-large w3-hover-white">Home</a></li>
      <li class="w3-hide-small"><a href="http://localhost/frameworkcodeign/ci/dicas" class="w3-padding-large w3-hover-white">Dicas</a></li>
      <li class="w3-hide-small"><a href="http://localhost/frameworkcodeign/ci/produtos" class="w3-padding-large w3-hover-white">Produtos</a></li>
      <li class="w3-hide-small"><a href="http://localhost/frameworkcodeign/ci/sobrenos" class="w3-padding-large w3-hover-white">Sobre nós</a></li>
      <li class="w3-hide-small"><a href="http://localhost/frameworkcodeign/ci/faleconosco" class="w3-padding-large w3-white">Fale Conosco</a></li>
    </ul>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:51px">
      <ul class="w3-navbar w3-left-align w3-large w3-black">
         <li><a class="w3-padding-large" href="http://localhost/frameworkcodeign/ci/dicas">Home</a></li>
        <li><a class="w3-padding-large" href="http://localhost/frameworkcodeign/ci/dicas">Dicas</a></li>
        <li><a class="w3-padding-large" href="http://localhost/frameworkcodeign/ci/produtos">Produtos</a></li>
        <li><a class="w3-padding-large" href="http://localhost/frameworkcodeign/ci/sobrenos">Sobre nós</a></li>
        <li><a class="w3-padding-large" href="http://localhost/frameworkcodeign/ci/faleconosco">Fale Conosco</a></li>
      </ul>
    </div>

    <!-- Header -->
    <div class="w3-container w3-red w3-center w3-padding-128">
      <h1 class="w3-margin w3-jumbo">Fale Conosco</h1>
                <button onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-padding-16 w3-large w3-margin-top">Enviar Email</button>

                <div id="id01" class="w3-modal w3-animate-opacity">
                  <div class="w3-modal-content w3-card-8">
                    <header class="w3-container w3-red">
                      <span onclick="document.getElementById('id01').style.display='none'"
                      class="w3-closebtn">&times;</span>
                     <h2>Enviar Email</h2> 
                    </header>
                        <form class="w3-container">

                       <p>
                         <label class="w3-black w3-xlarge w3-round">Nome</label>
                        <input class="w3-input w3-border w3-hover-red" type="text">
                       </p>

                        <p>
                         <label class="w3-black w3-xlarge w3-round">Sobrenome</label>
                         <input class="w3-input w3-border w3-hover-red" type="text"></p>
                        
                        <p>
                         <label class="w3-black w3-xlarge w3-round">Email</label>
                        <input class="w3-input w3-border w3-hover-red" type="text"></p>
                        
                       
                        <textarea rows="4" cols="50"></textarea> </br>
                         
                        <input class="w3-btn w3-border w3-hover-red w3-ripple w3-xlarge" type="submit">
                        
                        
                       

                        </form>
                    <footer class="w3-container w3-black">
                      <!-- <p>Modal Footer</p> -->
                    </footer>
                  </div>
                </div>
    </div>

    <!-- First Grid -->
    <div class="w3-row-padding w3-padding-64 w3-container">
      <div class="w3-content">
        <div class="w3-twothird">
          <h1>Lorem Ipsum</h1>
          <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

          <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <div class="w3-third w3-center">
          <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
        </div>
      </div>
    </div>

    <!-- Second Grid -->
    <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
      <div class="w3-content">
        <div class="w3-third w3-center">
          <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
        </div>

        <div class="w3-twothird">
          <h1>Lorem Ipsum</h1>
          <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

          <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.
          </p>
          
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14149.12609470184!2d-48.504000075113716!3d-27.55377204356184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5b0f13adab8483ec!2sSENAI+Florian%C3%B3polis+(CTAI)!5e0!3m2!1spt-BR!2sbr!4v1470060765080" width="600" height="450" frameborder="0" style="border:0" allowfullscreen clas="w3-xlarge"></iframe>
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

    <script>
    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
    </script>

</body>
</html>

