<?php
include "db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>VAWC Management System</title>
  <!--MATERIAL CDN-->
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="vawc.css">
  </head>
  

  <body>
    
    <header class="header">
        

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
                
                <a href="vawc_page.php" class="active">
                    <span class="material-icons-sharp">report_problem</span>
                    
                    <h3>REPORT INCIDENT</h3>
                </a>

                <a href="">
                    <span class="material-icons-sharp">cases</span>
                    
                    <h4>VIEW CASES</h4>
                </a>

                <a href="logout.php">
                    <span class="material-icons-sharp">logout</span>
                    
                    <h5>LOG OUT</h5>
                </a>
            </div>
        </aside>

</head>
<body>
    <div class="container-3">
        <h2>Submitted Incident Reports</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Victim Name</th>
                    <th>Perpetrator Name</th>
                    <th>Incident Type</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT id, victim_name, perpetrator_name, type_of_incident, date_of_incident FROM incident_reports ORDER BY created_at DESC";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['victim_name']; ?></td>
                            <td><?php echo $row['perpetrator_name']; ?></td>
                            <td><?php echo $row['type_of_incident']; ?></td>
                            <td><?php echo $row['date_of_incident']; ?></td>
                            <td>
                                <!-- Add links to view full details or perform other actions -->
                                <a href="view_report_details.php?id=<?php echo $row['id']; ?>">View Details</a>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='6'>No reports found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
mysqli_close($conn);
?>
