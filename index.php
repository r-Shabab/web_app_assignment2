<?php
$submitMessage=false; 
include 'connection.php'; 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //echo "<h1>Successfully connected to DB<h1>";
          $name=$_POST['name'];
          $email=$_POST['email'];
          $message=$_POST['message'];
        // Sql query for insertion 
          $sql= "INSERT INTO contactus(name, email, message) VALUES ('$name', '$email', '$message' )";

        if ($con->query($sql) == true) {
          $submitMessage=true;
        } else {
          echo "Error: " . $sql . "<br>" . $con->error;
        }
        $con->close();

      }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact us</title>

    <!-- BOOTSTRAP -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
              <a class="btn btn-primary" type="button" href="login.php">Login</a>
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
              src="img/contact.gif"
              class="img-fluid rounded"
              alt="Shabab"
            />
          </div>
          <div class="col-lg-6 mx-auto text-center">
            <h2 class="section-heading mb-3">Contact Me</h2>

            <p class="text-center mb-5"><?php
        if($submitMessage==false){

            echo "<p><b>hello there</b></p>";

        }
        else if($submitMessage==true){
            echo "<p><b>Thanks For Contacting US</b></p>";
            $submitMessage==false;
        }

        ?></p>

            <form id="contactForm" name="sentMessage" novalidate="novalidate" method="post">
              <div class="control-group">
                <div class="form-floating controls mb-3">
                  <input
                    class="form-control"
                    name="name"
                    type="text"
                    placeholder="Name"
                    required="required"
                    data-validation-required-message="Please enter your name."
                  />
                  <label for="name">Name</label>
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
                    name="email"
                    type="email"
                    placeholder="Email Address"
                    required="required"
                    data-validation-required-message="Please enter your email address."
                  />
                  <label for="email">Email Address</label>
                  <div
                    class="invalid-feedback"
                    data-validation-message="Please enter a valid email address."
                  ></div>
                </div>
              </div>
              <div class="control-group">
                <div class="form-floating controls mb-3">
                  <textarea
                    class="form-control"
                    name="message"
                    rows="10"
                    cols="80"
                    placeholder="Message"
                    required="required"
                    data-validation-required-message="Please enter a message."
                  ></textarea>
                  <label for="message">Message</label>
                  <div
                    class="invalid-feedback"
                    data-validation-message="Please enter a message."
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
                  Send Message
                  <i class="fa-solid fa-paper-plane"></i>
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
