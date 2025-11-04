


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
    
    <header class="header1">
        

        </header>
        <style>
            .header1 {
                width: 100%;
                height: 10%;
                background-color: aqua;
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
                    <span class="material-icons-sharp" id="notificationBtn"
                    aria-hidden="true">dashboard</span>
                    <span>&nbsp;7&nbsp;</span>

                <a href="view_cases.php">
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

        <!-------end of aside------->
        <style>
           
            .container2 {
                margin-top: 1rem;
                background-color:  rgba(174, 155, 133, 0.642);
                width: 60rem;
                height: 110vh;
                overflow-y: auto;
                border-radius: 10px;
                padding: 5%;
            }
            input {
                width: 10%;
            }
            
            label {
                display: block;
                margin-bottom: 15px;
            }
            h2 {
                color: white;
                margin-bottom: 10px;
                background-color: darkolivegreen;
                margin-top: .5px;
                font-size: 20px;
                
            }
            .form-group {
                margin-bottom: 4px;
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                margin-top: 20px;
                margin-bottom: 20px;
            }
            
            input[type="age"] {
                width: 5%;
            }
            input[type="date"] {
                width: 50%;
                margin-left: 10px;
                margin-right: 20px;
                margin-top: 10px;
            }
            
            
             input[type="address"] {
                width: 50%;
            }
            
            
            .form-group select[type="status-select"] {
                width: 10%;
                padding: 10px;
                height: 20%;
            }
            .form-group input[type="add"] {
                width: 60%;
                padding: 10px;
                
            }
            .report input[type="add"] {
                width: 60%;
                padding: 10px;
                
            }
           
            
            .dob-label {
            font-size: 10px; 
            }

            .report {
                margin-top: 20px;
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                margin-bottom: 20px;
            }
            .reportw h2 {
                color: black;
            }
            input {
                width: 25%;
                padding: 10px;

            }
            
            .scenario {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            align-items: center;
            }

            .scenario input[type="address"] {
                width: 40%;
            }
            .form-group input[type="text1"] {
                width: 40%;
            }

            .scenario input[type="file"] {
             width: 25%;
           }
            .scenario input[type="text"] {
             width: 60%;
           }
           .scenario input[type="date"],
            .scenario input[type="time"] {
                width: 14%;
                padding: 10px;

            }
            .scenario input[type="iod"] {
             width: 60%;
             padding: 50px;
             margin-top: 10px;
           }
            .scenario select[type="type"] {
                width: 12%;
                padding: 10px;
            }
           

          button {
         margin-top: 10px;
         padding: 10px 20px;
         background-color: darkolivegreen;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        } 
        .scenario label {
            display: block;
            margin-left: 2px;
            font-size: 13px;
            margin-right: 2px
        }
             

    
            
  
           
        
        </style>
<body>
         
    <div class="container2">
         
    <form action="insert.php" method="post" enctype="multipart/form-data"></form>
        <h2> Victim Information</h2>
        
                <div class="form-group">

                <input type="text" placeholder="Full name" name="Full name" required>
                
                <input type="text" placeholder="Email" name="email" required>
                
                <input type="age" placeholder="Age" name="age"required>
                 <input type="phone" placeholder="Contact Number" name="phone"required>

                  <select type="gender" id="gender" class="gender" name="gender" required>
                    
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="not">Prepare not to say</option>
                    </select>
                    


                    <input type="add" placeholder="Address" name="add" required>
                    <input type="text" placeholder="Relationship to Perpretator" name="Perpretator"required>

 
                </div>
                 

                
        

     <h2> Perpretator information  </h2>
                <div class="report">

            <input type="text" placeholder="Full Name" name="Fullname" required/>
            <input type="text" placeholder="Email" name="email2" required>
            

            <input type="age" placeholder="Age" name="age1"required>
             <input type="phone" placeholder="Contact Number" name="phone"required>
            <select type="gender" id="gender" class="gender" name="gender" required>
                 
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="not">Prepare not to say</option>
                    </select>
 
                
            <input type="add" placeholder="Address" name="add" required>
            <input type="text" placeholder="Relationship to Victim" name="victim"required>
</div>
        


     <h2>Incident Details</h2>
         <div class="form-group scenario">
         
           <label>Date of Incident</label>
           <input type="date" required>
           <label>Time of Incident</label>
           <input type="time" required>
              <input type="text" placeholder="Location Of Incident">
           <select type="type" id="type" class="type" required>
                        <option value="-">Type of Incident</option>
                        <option value="phy">Physical Abuse</option>
                        <option value="eco">Economical Abuse</option>
                        <option value="pys">Pyschological Abuse</option>
                        <option value="sexual">Sexual Abuse</option>
                    </select>
           

        </div>

<div class="form-group scenario">
    
    <textarea placeholder = "description" name="message"style="padding: 20px; width: 50%; margin-top: 10px;"></textarea>
<br>
    
    <input type="file" accept="image/*,application/pdf">
    
</div>

<input type="submit" name="submit" value="Add"></button>
            </div>

           
    </form>
    </div>   


</body>

<script src="vawc.js"></script>
</label>
</body>
</html>
