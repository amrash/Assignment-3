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

                  <a href="#!" class="nav-link">Quiz</a>

              </li>

              <li class="nav-item">

                  <a href="#!" class="nav-link">Share</a>

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


<!-- 
 Test Goes here -->
 <div class="card">
  <div class="card-body">
    <h3>pOp is a Period Visualization tool. Pop aims to create tools primarily for menstruation. Through data we hope to help empower menstruating human beings. Every period is different.</h3>
  </div>
</div>
<!-- this is where the form goes -->
<div class="container-my-5">

<form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Additional</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            Track my period
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
          <label class="form-check-label" for="gridRadios3">
            Email Reminders
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-2">Checkbox</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Monthly newsletter
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
    <a class="btn btn-warning" href="signedin.php" role="button">Sign in</a>
      
    </div>
  </div>
</form>

</div>
  
     


</body>
   
 <footer class="page-footer font-small black">
   <div class="fixed-bottom"> 
    <div class="footer-copyright text-center mt-9 py-3"> 
    
           <p>© 2019 Designed by Amreen Ashraf</p>
            
          

    
</footer>    


</html>