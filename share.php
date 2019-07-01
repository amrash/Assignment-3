
<!doctype html>
<html lang="en">
  <head>
      <!-- header attachements go here -->
  <? include "head.php"?>
  </head>
  <body>
  
  <!-- POP Logo goes here -->
 
  <div class="container-my-5">

        <div class="row-header">
  
            <div class="col-12 text-center pt-4">    
     
     <h1> pOp </h1>
     
            </div>

        </div>
  
    </div>

<!-- Nav bar from jquery plugin -->
    <div class="wrapper">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-offcanvas">

  <div class="container-fluid">

      <a class="navbar-brand" href="#"></a>

      <ul class="navbar-nav navbar-top">

          <!-- <li class="nav-item active">

              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>

          </li>

          <li class="nav-item">

              <a class="nav-link" href="#">Link</a>

          </li> -->

      </ul>

      <button class="navbar-toggler navbar-toggler-right navbar-icon" type="button" data-toggle="collapse" data-target="#navbar-mobile" aria-controls="navbar-mobile" aria-expanded="false" aria-label="Toggle navigation">

          <span class="icon-bar bar1"></span>

          <span class="icon-bar bar2"></span>

          <span class="icon-bar bar3"></span>

      </button>

      <div class="navbar-collapse collapse ml-auto" id="navbar-mobile">

          <ul class="navbar-nav ml-auto">

              <li class="nav-image">

                  <img src="image.jpg">

              </li>

              <li class="nav-item">

                  <a href="index.php" class="nav-link">pOp Out</a>

              </li>

              <li class="nav-item">

                  <a href="form.php" class="nav-link">Sign in</a>

              </li>

              <li class="nav-item">

                  <a href="share.php" class="nav-link">Share</a>

              </li>

          </ul>

      </div>

  </div>


</nav>

</div>
    
    <!-- <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h4 class="text-white">Collapsed content</h4>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div> -->





<div class="row-header">
  
<div class="col-12 text-center pt-4">  

<a class="twitter-share-button"
  href="https://twitter.com/intent/tweet?text=Hello%20world"
  data-size="large">
Help us spread the word by tweeting</a>

</div>
<div>
<!-- 
Google maps goes here -->



<div class="row-header">
  
<div class="col-12 text-center pt-4">  
   <div class="card">
  <div class="card-body">

<div class=<div class="col-12 text-center pt-4">  
<div id="map" style="width:500px; height:500px;"></div>

<script>
          // Initialize and add the map
          function initMap() {
          // The location of Uluru
          var OCAD = {lat:43.653887, lng:-79.392299};


          // The map, centered at Uluru
          var map = new google.maps.Map(document.getElementById('map'), {center: {lat:43.656102, lng:-79.380384},
          zoom: 13});
          // The marker, positioned at Uluru
          var marker1 = new google.maps.Marker({position: OCAD, map: map});
         
          }
              </script> 
              
              <script async defer
              src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfBjkR4r44VhBgYB822duZbaTVF1FiuT4
          &callback=initMap">
              </script>
   </div>

  
   
    <h3>Made in Toronto</h3>
  </div>
</div>

        </div>
        </div>
        </div>
        </div>
</body>
</html>    