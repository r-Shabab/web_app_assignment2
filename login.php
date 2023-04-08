 <?php
 include 'connection.php'; 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $uName=$_POST['username'];
        $uPass=$_POST['password'];
       
        $sql = "SELECT * FROM login where username='$uName' and password='$uPass'"; //0 
        $result=$con->query($sql);
        if($result->num_rows >0){
            header('Location: admin.php');
        }
        else{
            $checkUserExist=true;
            header('Location: login.php');
        }
        }
?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- BOOTSTRAP -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"/>
 </head>
 <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Shabab.</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="btn btn-primary" type="button" href="index.php">Contact me</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section id="contact" class="py-5" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <img
              src="img/login.png"
              class="img-fluid rounded"
              alt="Shabab"
            />
          </div>
          <div class="col-lg-6 mx-auto text-center">
            <h2 class="section-heading mb-3">Log in</h2>

            <p class="text-center mb-5">Hello admin</p>

            <form id="loginForm" novalidate="novalidate" method="post">
              <div class="control-group">
                <div class="form-floating controls mb-3">
                  <input
                    class="form-control"
                    name="username"
                    type="text"
                    placeholder="User name"
                    required="required"
                    data-validation-required-message="Please enter your username."
                  />
                  <label for="name">User name</label>
                  <div
                    class="invalid-feedback"
                    data-validation-message="Please enter your name."
                  ></div>
                </div>
              </div>
              <div class="control-group">
                <div class="form-floating controls mb-3">
                  <input
                    class="form-control"
                    name="password"
                    type="password"
                    placeholder="Password"
                    required="required"
                    data-validation-required-message="Please enter your password address."
                  />
                  <label for="password">Password</label>
                  <div
                    class="invalid-feedback"
                    data-validation-message="Please enter a valid password address."
                  ></div>
                </div>
              </div>
             
              <div id="success"></div>
              <div class="form-group">
                <button
                  type="submit"
                  class="btn btn-primary btn-xl"
                  id="sendMessageButton"
                >
                  Login
                  
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    
    <!-- BOOTSTRAP -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
 </body>
 </html>