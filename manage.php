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

                 <a href="assign.php" class="">
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
           <h4 class="title"> Manage Worker <a href="add-worker.php"> Add Vawc Worker </a></h4>
           <?php if (!empty($users)) { ?>
             

           <table class="table">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>email</th>
                <th>Role</th>
                <th>action</th>

            </tr>
            
            <?php 
            $i = 0;
            foreach ($users as $user) { 
            ?>
                <tr>
                    <td><?= ++$i ?></td>
                    <td><?= htmlspecialchars($user['name']) ?></td>
                    <td><?= htmlspecialchars($user['username']) ?></td>
                    <td><?= htmlspecialchars($user['role']) ?></td>
                    <td>
                        <a href="edit-user.php?id=<?= $user['id'] ?>" class="edit-btn">Edit</a>
                        <a href="delete-user.php?id=<?= $user['id'] ?>" class="delete-btn">Delete</a>
                    </td>
                </tr>
            <?php 
            } 
            ?>
        </table>
    <?php } else { ?>
        <h3>Empty</h3>
    <?php } ?>
</div>
    