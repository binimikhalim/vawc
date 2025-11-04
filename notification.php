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
    <header class="header1">
        <div class="right">
            <div class="top">
                <span class="notification">
                    <span class="material-icons-sharp">notifications</span>
                     <span>&nbsp;9&nbsp;</span>
                </span>
           
            <div class="profile">
                <div class="info">
                    <p> Elya </p>
                </div>
                <div class="profileinfo">
                    <img src="https://i.imgur.com/pKPjb8s.png">
                </div>
            </div>
        </div>

    </header>
    <style>
        .span {
            color: white;
        }
            .header1 {
                width: 100%;
                height: 10%;
                background-color: aqua;
            }
            .notifbtn {
                background: none;
            }

            .right .top {
                display: flex;
                justify-content: right;
                margin-right: 50px;
                top: 4px;
                gap: 2rem;
              

            }
            .profile {
                display: flex;
                justify-content: right;
                
                top: 4px;
            }

            </style>
    <div class="container">
        <aside>
             <div class="top">
                <div class="logo">
                    <img src="https://i.imgur.com/pKPjb8s.png">
                    <h1>VAWC Management <p>System </p></h1>
                </div>
            
            </div>
            <div class="sidebar">
                 <a href="notification.php" class="active">
                    <span class="material-icons-sharp">notifications</span>
                
                    <h2>notification</h2>

    
                 </a>
       
                <a href="logout.php">
                    <span class="material-icons-sharp">logout</span>
                    
                    <h5>LOG OUT</h5>
                </a>
            </div>
        </aside>
        <!-------end of aside------->

        <div class="notification-bar">
            <ul>
                <li>
                    <a href="">
                        <mark> NEW TASK ASSIGNED:</mark> 'New incoming cases has been assigned to you.
                         Please review and start working on it &nbsp;&nbsp;<small> Sep 2, 2024</small>'

                    </a>
                </li>
            </ul>
        </div>
        <script type="vawc.js">
   
        </script>



