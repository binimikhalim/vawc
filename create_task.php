<?php
include "db_conn.php";



if (isset($_POST['submit'])) {
    $user_id = $_POST['user_id'];
    $task_title = $_POST['task_title'];
    $task_description = $_POST['task_description'];
    $additional_detail = $_POST['additional_detail'];
     $task_status = $_POST['task_status'];
    
    $assigned_by = "Admin"; 

    $sql = "INSERT INTO `tasks`(`user_id`, `task_title`, `task_description`, `assigned_by`, `additional_detail`, `task_status`) VALUES (?, ?, ?, ?, ?, ?)";
    
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "isssss", $user_id, $task_title, $task_description, $assigned_by, $additional_detail, $task_status );
        mysqli_stmt_execute($stmt);
        header("Location: dashboard.php?msg=New task assigned successfully");
        exit();
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
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
            <div class="sidebar" class="">
                <a href="dashboard.php" class="">
                    <span class="material-icons-sharp">dashboard</span>
                
                    <h2>DASHBOARD</h2>

                </a>
                <a href="manage.php">
                    <span class="material-icons-sharp">manage_accounts</span>
                    
                    <h5>Manage Users</h5>
                </a>

                <a href="create_task.php" class="active">
                    <span class="material-icons-sharp">assignment_ind</span>
                    
                    <h5>Assign Case </h5>

                <a href="logout.php">
                    <span class="material-icons-sharp">logout</span>
                    
                    <h5>LOG OUT</h5>
                </a>
            </div>

        </aside>


        <!-- end of aside -->

        <style>
            .container-3 {
                
            }
            h3 {
                margin-top: 5%;
                font-size: 20px;
                font-family: Georgia, 'Times New Roman', Times, serif;
                text-align: center;
                width: 60rem;
            }
           .form-label {
            padding: 5px;
            margin-top: 10px;
           }
  
           .container3 {
            margin-top: 5%;
            text-align: center;
            margin-left: 16%;

           }
           .container3 label[class="form-label"] {
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;

           }
           .container3 select[name="user_id"] {
            padding: 10px;
            
           }
           .mb-3 {
            justify-content: center;
            display: flex;
            gap: 10px;
            padding: 16px;
            margin-left: 5px;
           }
           .mb-3 input[type="text"] {
            padding: 14px;
           }
           .mb-3 label[for="task_status"] {
            padding: 10px;
            display: flex;
           }
           .col {
            background-color: cadetblue;
            border-radius: 10%;
            width: 70%;
            height: 80%;
            margin-left: 150px;
            
           }


        </style>
        <div class="container-3">
            <div class="text-center mb-4">
                <h3>Assign New Case</h3>
            </div>
            <div class="container3">
                <form action="" method="post" style="width:50vw; min-width:300px;">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Assign to User:</label>
                            <select name="user_id" class="form-control" required>
                                <?php
                                $users_sql = "SELECT id, full_name FROM manage";
                                $users_result = mysqli_query($conn, $users_sql);
                                while ($user = mysqli_fetch_assoc($users_result)) {
                                    echo "<option value='{$user['id']}'>{$user['full_name']}</option>";
                                }
                                ?>
                            </select>
                        </div>

                    <div class="mb-3">
                        <label for="form-label">Name of Victim:</label>
                        <input type="text" class="form-control" name="additional_detail" id="additional_detail">
                    </div> 
                    
                    <div class="mb-3">
                        <label class="form-label">Task Title:</label>
                        <input type="text" class="form-control" name="task_title" required>
                        </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Task Description:</label>
                        <textarea class="form-control" name="task_description" rows="5" required></textarea>
                    </div>

                    <div class="mb-3">
                    <label for="task_status" class="form-label">Status:</label>
                    <select class="form-select" id="task_status" name="task_status" required>
                         <option value="" disabled selected>Select a status</option>
                         <option value="pending">Pending</option>
                         <option value="ongoing">Ongoing</option>
                         <option value="settled">Settled</option>
                         <option value="closed_cases">Closed Cases</option>
                    </select><br>
                    </div>

                    
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success" name="submit">Assign Task</button>
                        <a href="dashboard.php" class="btn btn-danger">Cancel</a>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>