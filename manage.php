<?php
include "db_conn.php";

if(isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $user_name = $_POST['user_name'];
    $number	 = $_POST['number'];


    $sql = "INSERT INTO `manage`(`id`, `full_name`, `email`, `user_name`, `number`) VALUES (NULL,'$full_name','$email','$user_name','$number')";
    $sql = "SELECT * FROM users";
    if(isset($_GET["search"])) {
        $search_term = $_GET["search"];
        $sql .= "WHERE name LIKE '%$search_term%'";
    }

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
            <div class="sidebar">
                <a href="dashboard.php" class="">
                    <span class="material-icons-sharp">dashboard</span>
                
                    <h2>DASHBOARD</h2>

                </a>
              
                <a href="index.php" class="active">
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

        .container-3 {
          position: relative;
       
          width: 150%;
          margin-top: 5%;
          

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
        table {
            background-color: #f2f2f2;
            width: 100%;
            border-collapse: collapse;
            margin-top: 6%;
            margin-left: 20px;
            
        }
        thead {
        background-color: #3f2323ff;
        border-bottom: 2px solid #ddd;
       
        }

        th {
        padding: 12px;
        text-align: left;
        border: 1px solid #ddd;
        color: white;
        }
        .text- a {
            color: black;
            background: #80CCE3;
            cursor: pointer;
            padding: 15px;
            border-radius: 10px;
            margin-left: 20px;
        }
        .text-red {
        color: red;
        padding: 15px;
        }
        .text-green {
            color: green;
            padding: 15px;
        }
       
        



        </style>

        <body>
            <div class="container-3">
                <form action="" method="get">
                    <input type="text" class="form-control" name="search" placeholder="Search user by name">
                </form>
                <?php
                if (isset($_GET['mgs'])) {
                    $mgs = $_GET['msg'];
                    echo '<div class="alert alert-warning alert-dismissible fade show"role="alert">
                    '.$msg.'
                    <button type="button" class="btn=close" data-bs-dismiss="alert"
                    aria-label="Close"></button>
                    </div>';

                }
                ?>
                <div class="text-">
                <a href="index.php" class="btn btn-dark"> Add user</a>
            </div>

                <table>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            
                            <th scope="col">Full name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Username</th>
                            <th scope="col">Contact Number</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "db_conn.php";
                          $sql = "SELECT * FROM manage";
                          $result = mysqli_query($conn, $sql);
                          if(mysqli_num_rows($result) > 0) {

                          while ($row = mysqli_fetch_assoc($result)) {

                          
                            ?>
                            <tr>
                                <td><?php echo $row['id']?></td>
                                <td><?php echo $row['full_name']?></td>
                                <td><?php echo $row['email']?></td>
                                <td><?php echo $row['user_name']?></td>
                                <td><?php echo $row['number']?></td>
                               
                            <td>
                                <a href="delete.php?id=<?php echo $row['id']?>" class="link-dark text-red"><span class="material-icons-sharp">delete</span></i></a>
                                <a href="edit.php?id=<?php echo $row['id']?>" class="link-dark text-green"><span class="material-icons-sharp">edit</span></i></a>
                            </td>
                        </tr>
                            
                            <?php
                          }
                        } else {
                            echo "No result found";
                        }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </body>
        
</body>
</html>

<?php
mysqli_close($conn);
                        