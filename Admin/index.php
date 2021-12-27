<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Welcome to Sports Tournaments</title>
    <style>
  

</style>
  </head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand  ms-lg-0 ms-3  text-uppercase fw-bold"
          href="#"
           style="padding-left: 5%;"></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-1 my-lg-0">
            <div class="input-group">
              <input
                class="form-control"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-primary" type="submit">
                <i class="bi bi-search"></i>
              </button>
            <!--  <input class="form-control mx-5"type="date"placeholder="date"aria-label="date"/>-->
            </div>
          </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-primary"
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body ">
        <nav class="navbar-dark">
          <br>
          <ul class="navbar-nav ">
            
            <li>
              <a href="#" class="nav-link px-3 active  mx-5">
              <span class="me-2"><i class="bi bi-person-circle"></i></span>
                <span>Admin</span>
              </a>
            </li>
            <li class="my-2"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
             <Option></Option>
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-people-fill"></i></span>
                <span>Players</span>
              </a>
            </li>
            
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->

<main class="mt-5 pt-1 my-5">
     
<div class=" row date" style="padding-right:01.5%; padding-left: 40%;">
<div class="col-lg-6 col-12"> 
</div>
<div class="col-lg-3 col-6  text-center bg-primary text-white ms-auto">
</div>
</div>
        <div class="row my-5 my-5" id="orders">
          <div class="col-md-12 mb-3">
            <div class="card" >
              <div class="card-header text-center">
                <span><i class="bi bi-table me-2 "></i></span>List of Players
              </div>
              <a href="insert.php">
                <button type="button" class="btn btn-info  " data-target="#mymodel" data-toggle="modal">
                  Add New
                </button></a>
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    id="example"
                    class="table table-striped data-table";>
                   
                      <tr class="text-center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email id</th>
                        <th>Phone No.</th>
                        <th>Sports Name</th>
                        <th>Delete</th>
                        <th>Update</th>
                        
                      </tr>
<?php
 include 'config.php'; 
 $q = "select * from sport";
 $query = mysqli_query($con,$q);
 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['name'];  ?> </td>
 <td> <?php echo $res['email'];  ?> </td>
 <td> <?php echo $res['phone'];  ?> </td>
 <td> <?php echo $res['sptp'];  ?> </td>
 <td> <button class="btn-warning btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"><a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>
 </tr>
 <?php 
 }
  ?>
</table>
  </div>
 </div>
 
            </div>
          </div>
        </div>
</div>
      </div>
    </main>
  
    <footer class="fixed-bottom">
      <p class="copyright text-center ">Copyright © Sports. All Right Reserved</p>
    </footer>
    <hr>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
