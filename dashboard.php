<?php
include "db_conn.php";





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>VAWC Management System</title>
  <!--MATERIAL CDN-->
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="vawc.css">    
  </head>

</head>
<body>
    <header class="header"></header>
    <div class="container">
        <aside>
             <div class="top">
                <div class="logo">
                    <img src="https://i.imgur.com/pKPjb8s.png">
                    <h1>VAWC Management <p>System </p></h1>
                </div>
            
            </div>
            <div class="sidebar">
                <a href="dashboard.php" class="active">
                    <span class="material-icons-sharp">dashboard</span>
                
                    <h2>DASHBOARD</h2>

                </a>
                 
                <a href="manage.php">
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
        <!-------end of aside------->

        <div class="main">
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number">1234</div>
                        <div class="card-name">Total Cases</div>
                    </div>
                    <div class="icon-box">
                            <span class="material-icons-sharp">cases</span>
                        </div>
                    </div>
                    <div class="card">
                    <div class="card-content">
                        <div class="number">1234</div>
                        <div class="card-name">Outgoing  Cases</div>
                    </div>
                    <div class="icon-box">
                            <span class="material-icons-sharp">cases</span>
                        </div>
                    </div>
                    <div class="card">
                    <div class="card-content">
                        <div class="number">1234</div>
                        <div class="card-name">Pending  Case</div>
                    </div>
                    <div class="icon-box">
                            <span class="material-icons-sharp">cases</span>
                        </div>
                    </div>
                    <div class="card">
                    <div class="card-content">
                        <div class="number">1234</div>
                        <div class="card-name"> Closed Case</div>
                    </div>
                    <div class="icon-box">
                            <span class="material-icons-sharp">cases</span>
                        </div>
                    </div>
            </div>
            
         <!-------end of main------->
         <style>
            table {
            background-color: #f2f2f2;
            width: 100%;
            border-collapse: collapse;
            margin-top: 6%;
            margin-left: 5px;  
            overflow-x: auto
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
        .container-3 h2 {
            margin-top: 20px;
            margin-left: 15px;
            font-size: 20px;
            text-align: center;
            background-color: #80CCE3;
        }
            
         </style>



        <div class="container-3">
            <div class="text-center">
                <h2> Total Cases</h2>
            </div>

            <?php if (isset($_GET['msg'])) : ?>
                <div class="alert alert-success mt-3"><?= $_GET['msg'] ?></div>
            <?php endif; ?>


            <table>
                <thead>
                    <tr>
                        <th scope="col">Case No</th>
                        <th scope="col">Assigned To</th>
                        <th scope="col">Task Title</th>
                        <th scope="col">Task Description</th>
                        <th scope="col">Name of Victim</th>
                        <th scope="col">Task Status</th>
                        <th scope="col">Assigned By</th>
                        <th scope="col">Date Assigned</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $limit_clause = "";
if (!isset($_GET['show']) || $_GET['show'] != 'all') {
    // Set a default limit for the number of rows displayed
    $limit_clause = " LIMIT 8"; 
}
                    $sql = "SELECT t.id, m.full_name, t.task_title, t.task_description, t.additional_detail, t.task_status, t.assigned_by, t.created_at FROM tasks t JOIN manage m ON t.user_id = m.id" . $limit_clause;
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['full_name']; ?></td>
                                <td><?php echo $row['task_title']; ?></td>
                                <td><?php echo $row['task_description']; ?></td>
                                <td><?php echo $row['additional_detail']; ?></td>
                                <td><?php echo $row['task_status']; ?></td>
                                <td><?php echo $row['assigned_by']; ?></td>
                                
                                <td><?php echo $row['created_at']; ?></td>
                                <td>
                                 <a href="delete_dash.php?id=<?php echo $row['id']?>" class="link-dark text-red"><span class="material-icons-sharp">delete</span></i></a>
                                <a href="edit.php?id=<?php echo $row['id']?>" class="link-dark text-green"><span class="material-icons-sharp">edit</span></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "<tr><td colspan='7'>No tasks assigned yet.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
            <a href="?show=all"> Show All</a>
        </div>
    </div>
</body>
</html>
