<?php
include "db_conn.php";

if(isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $user_name = $_POST['user_name'];
    $number	 = $_POST['number'];


    $sql = "INSERT INTO `manage`(`id`, `full_name`, `email`, `user_name`, `number`) VALUES (NULL,'$full_name','$email','$user_name','$number')";


    $result = mysqli_query($conn, $sql);
    
    if($result) {
        header("Location: index.php?msg=New record created sucessfully");
    }else {
        echo "Failed" . mysqli_error($conn);
    }
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
                <a href="dashboard.php" class="">
                    <span class="material-icons-sharp">dashboard</span>
                
                    <h2>DASHBOARD</h2>

                </a>
                <a href="manage.php" class="active">
                    <span class="material-icons-sharp">manage_accounts</span>
                    
                    <h5>Manage Users</h5>
                </a>

                 <a href="create_task.php" class="">
                    <span class="material-icons-sharp">assignment_ind</span>
                    
                    <h5>Assign Case </h5>
                </a>

                <a href="logout.php">
                    <span class="material-icons-sharp">logout</span>
                    
                    <h5>LOG OUT</h5>
                </a>
            </div>
        </aside>


        <style> 

        .container-2 {
          position: relative;
          

        }
        .text-center {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
           
        }
        .row{
            background-color:  rgba(174, 155, 133, 0.642);
           
        }
        label {
            font-size: 15px;
            padding: 12px;

        }
        input {
            margin-left: 13px;
            padding: 12px;
            width: 60%;
            border-radius: 10px;
            border: 1px solid;
            margin-bottom: 20px;
        }
        button {
            background-color: green;
            padding: 10px;
            margin-left: 10px;
            margin-bottom: 10px;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }



        </style>

        <body>
            <div class="container-2">
                <div class="text-center">
                    <h3> Edit User information</h3>
                    <p class="text-muted">Click update after changing any information </p>
                </div>

                <?php
                $id = $_GET['id'];
                $sql = "SELECT * FROM `manage` WHERE id = $id LIMIT 1";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);

                ?>
                <div class="container d-flex justify-content-center">
                    <form action="" method="post" style="width:50vw; min-width: 300px;">
                        <div class="row">
                            <div class="col">
                                <label for="form-label1">Full Name </label>
                                <input type="text" class="form-control" name="full_name"
                                value="<?php echo $row['full_name']?>">
                         </div>

                        <div>
                          <label for="form-label1">Email </label>
                            <input type="text" class="form-control" name="email"
                            value="<?php echo $row['email']?>">
                            </div>

                            <div>
                                <label for="form-label1">Username </label>
                                <input type="text" class="form-control" name="user_name"
                                value="<?php echo $row['user_name']?>">
                            </div>

                            <div>
                                <label for="form-label1"> Contact Number </label>
                                <input type="text" class="form-control" name="number"
                                value="<?php echo $row['number']?>">
                            </div>

                            <div>
                        <button type="submit" class="btn btn-sucess" name="submit"> Save</button>
                        <a href="index.php" class="btn-btn-danger"> Cancel</a>
                      </div>
                      </div>

                      
                    </form>
                </div>
            </div>
        </body>
        
</body>
</html>
    