<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- BOOTSTRAP -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script src="https://kit.fontawesome.com/6f6e8e1141.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
        <!-- SIDEBAR -->
        <nav class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Admin Panel</span>
                </a>
              
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0 text-light">
                            <i class="fa-solid fa-house"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link align-middle px-0 text-light">
                            <i class="fa-solid fa-right-from-bracket"></i> <span class="ms-1 d-none d-sm-inline">Log out</span>
                        </a>
                    </li>
                    
                </ul>
                <hr>
            </div>
        </nav>
<!-- MAIN SECTION -->
        <main class="col py-3 ">
            <div class="col-md-9 col-lg-10 main-content ms-3">
                <h1>Dashboard</h1>
                <table class="table">
                <thead>
                 <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                 // import   database connection from connection.php
                 include 'connection.php';
                $sql = "SELECT * FROM contactus";

                $result=$con->query($sql);
                if($result->num_rows >0){
                    while($row = $result->fetch_assoc()){
                        echo "</td><td data-label='Name'>". $row["name"]."</td><td data-label='Email'>". $row["email"]."</td><td data-label='Message'>". $row["message"]."</td><tr>";
                    }

                }else{
                    echo "no result";
                }
                $con->close();
            ?>
                </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
   <!-- BOOTSTRAP -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
</body>
</html>