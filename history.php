<?php
session_start();
include('config.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <h1 class="navbar-brand" style="padding-left:2%;">HIW | Appointment History</h1>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">HIW</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="main.html">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="profile.php">My Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="appointment.php">Book an Appointment</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="history.php">Appointment History</a>
                </li>
                
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                  </ul>
                </li>
              </ul>
              <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
      </nav>

<?php
$phone = $_SESSION['phone'];
$sql="select * from appointment_data where phone = $phone";
$res=mysqli_query($con,$sql);
?>
  <div style="margin-top:5%;">
<table border="1" class="table">
  
  <tr align="center">
  <th>Doctor</th>
  <th>Speciality</th>
  <th>Appointment date</th>
  <th>Slot</th>
  </tr>
  


<?php
while($row = mysqli_fetch_array($res))
{
?>
    
    <tr align="center">
        <td> <?php echo $row['doctor']; ?></td>
        <td> <?php echo $row['speciality']; ?></td>
        <td> <?php echo $row['date']; ?></td>
        <td> <?php echo $row['slot']; ?></td>
    </tr>

    
 <?php   
    }
  ?>

</table>
</div>

</body>
</html>