<?php
session_start();


if (!isset($_SESSION['role']) && isset($_SESSION['id'])){


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdeliver.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="header">
       <!--MATERIAL CDN-->
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="vawc.css">    
  </head>
        </header>
    
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="https://i.imgur.com/pKPjb8s.png">
                    <h1>VAWC Management <p>System </p></h1>
                </div>
            
            </div>
            <div class="sidebar" class="">
                <a href="dashboard.html" class="">
                    <span class="material-icons-sharp">dashboard</span>
                
                    <h2>DASHBOARD</h2>

                </a>
                <a href="manage.php" class="active">
                    <span class="material-icons-sharp">manage_accounts</span>
                    
                    <h5>Manage Users</h5>
                </a>

                <a href="logout.php">
                    <span class="material-icons-sharp">logout</span>
                    
                    <h5>LOG OUT</h5>
                </a>
            </div>
        </aside>


        <section class="section-1">
           <h4 class="title">Add Worker <a href="manage.php"> workers </a></h4>

           <form class="-form"
                 method="POST"
                 action="app/add-worker.php">
            <div class="holder">
                <label>Full Name</label>
                <input type="text" name="full_name"class="input-1" placeholder="Full Name"><br>
            </div>
            <div class="holder">
                <label>Email</label>
                <input type="text" name="email" class="input-1" placeholder="Email"><br>
            </div>
            <div class="holder">
                <label>Password</label>
                <input type="text" name="password" class="input-1" placeholder="Password"><br>
            </div>
            <button class="edit-btn"> Add </button>
           </form>

           </section>
    </div>
       
</body>
</html>
    