
        <!-- Navbar -->
    <ul class="w3-navbar w3-red w3-card-2 w3-top w3-left-align w3-large">
      <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
        <a class="w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      </li>
      <li><a href="http://localhost/frameworkcodeign/ci3/site" class="w3-padding-large w3-hover-white">Home</a></li>
      <li class="w3-hide-small"><a href="http://localhost/frameworkcodeign/ci3/site/dicas" class="w3-padding-large w3-hover-white">Dicas</a></li>
      <li class="w3-hide-small"><a href="http://localhost/frameworkcodeign/ci3/site/produtos" class="w3-padding-large w3-hover-white">Produtos</a></li>
      <li class="w3-hide-small"><a href="http://localhost/frameworkcodeign/ci3/site/sobrenos" class="w3-padding-large w3-hover-white">Sobre nós</a></li>
      <li class="w3-hide-small"><a href="http://localhost/frameworkcodeign/ci3/site/faleconosco" class="w3-padding-large w3-white">Fale Conosco</a></li>
    </ul>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:51px">
      <ul class="w3-navbar w3-left-align w3-large w3-black">
        <li><a class="w3-padding-large" href="http://localhost/frameworkcodeign/ci3/site">Home</a></li>
        <li><a class="w3-padding-large" href="http://localhost/frameworkcodeign/ci3/site/dicas">Dicas</a></li>
        <li><a class="w3-padding-large" href="http://localhost/frameworkcodeign/ci3/site/produtos">Produtos</a></li>
        <li><a class="w3-padding-large" href="http://localhost/frameworkcodeign/ci3/site/sobrenos">Sobre nós</a></li>
        <li><a class="w3-padding-large" href="http://localhost/frameworkcodeign/ci3/site/faleconosco">Fale Conosco</a></li>
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
