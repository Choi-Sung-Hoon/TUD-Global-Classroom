<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Adventure in Ireland</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#main_container">Main</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <li>
            <a class="nav-link" href="#login_modal" data-toggle="modal" data-target="#login_modal">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Login modal -->
  <div id="login_modal" class="modal fade">
    <div class="modal-dialog modal-login">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <form action="/examples/actions/confirmation.php" method="post">
            <div class="form-group">
              <i class="fa fa-envelope"></i>
              <input type="email" class="form-control" placeholder="Email address" required="required">
            </div>
            <div class="form-group">
              <i class="fa fa-lock"></i>
              <input type="password" class="form-control" placeholder="Password" required="required">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <a href="#registration_modal" data-toggle="modal" data-dismiss="modal">Do you want to register?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Registration modal -->
  <div id="registration_modal" class="modal fade">
    <div class="modal-dialog modal-login">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Sign up</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <form action="/examples/actions/confirmation.php" method="post">
            <div class="form-group">
              <i class="fa fa-user"></i>
              <input type="text" class="form-control" placeholder="User name" required="required">
            </div>
            <div class="form-group">
              <i class="fa fa-envelope"></i>
              <input type="email" class="form-control" placeholder="Email address" required="required">
            </div>
            <div class="form-group">
              <i class="fa fa-lock"></i>
              <input type="password" class="form-control" placeholder="Password" required="required">
            </div>
            <div class="form-group">
              <i class="fa fa-lock"></i>
              <input type="password" class="form-control" placeholder="Repeat password" required="required">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>