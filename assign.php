<?php
session_start();


if (!isset($_SESSION['role']) && isset($_SESSION['id'])){
    include "config.php";
    include "User.php";

    $users = get_all_users($conn);
    


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Case</title>
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
                <a href="manage.php" class="">
                    <span class="material-icons-sharp">manage_accounts</span>
                    
                    <h5>Manage Users</h5>
                </a>

                 <a href="assign.php" class="active">
                    <span class="material-icons-sharp">manage_accounts</span>
                    
                    <h5>Assign Case </h5>
                </a>

                <a href="logout.php">
                    <span class="material-icons-sharp">logout</span>
                    
                    <h5>LOG OUT</h5>
                </a>
            </div>
        </aside>


        <section class="section-1">
           <h4 class="title"> Assign Case</h4>
           
           
           <form class="-form"
                 method="POST"
                 action="app/add-worker.php">
            <div class="holder">
                <label>case_no</label>
                <input type="text" name="case_no"class="input-1" placeholder="case_no"><br>
            </div>

            <div class="holder">
                <label>name</label>
                <input type="text" name="name"class="input-1" placeholder="name"><br>
            </div>

            <div class="holder">
                <label>Assigned to</label>
                <select name="assigned_to" class="input-1">
                    <option value="0"> Select VAWC Worker</option>
                    <?php if ($users !=0) {
                        foreach ($users as $user )  {
                        
                        
                        ?>
                        <option value="1"><?=$user['name']?> </option>

                    <?php } } ?>
                    
                </select><br>
            </div>
           
            <button class="edit-btn"> Assign Case </button>
           </form>
</body>
</html>
    