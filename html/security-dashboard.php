<?php session_start();?>
<html>
<head>
<style>
.ajax-div input:focus{
        outline:none;
        border:0;
        color: black;
}
                
.clickme{
  
  padding: 12px 20px;
  border-radius: 25px;
  background-color: black;
  text-decoration: none;
  cursor: pointer;
  color: white;
  font-size: 1.3rem;
}
#name{
        padding: 9px 15px;
  border-radius: 22px;
  background-color: white;
  text-decoration: none;
  cursor: pointer;
  color: white;
   
}
        </style>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet" />
  <link rel="icon" href="../img/id.svg">


  <!-- footer utils -->
  <link rel="stylesheet" href="../css/footer.css">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../img/id.svg">
        <title>Security Dashboard</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <link rel="stylesheet" href="../css/security-dashboard.css">
        <!-- footer -->
        <link rel="stylesheet" href="../css/footer.css">
        <script>
        function getUser() {
            name = document.getElementById("name").value;
            if (name == "") {
                return
            }
            var obj = { name: name };
            console.log(name);
            var userJSON = JSON.stringify(obj);

            var txt = "";
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                    console.log(this);
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.response);
                    myObj = JSON.parse(this.response);
                    console.log(myObj);
                    if (myObj.length === 0) {
                        txt = "No details found"
                    }
                    else {
                        for (x in myObj) {
                            txt += "Visitor name is: " + myObj[x].name + " and age is: " + myObj[x].age + " and contact is: " + myObj[x].contact + "<br>";
                        }
                    }
                    document.getElementById("userDetail").innerHTML = txt;

                }
            }
            xmlhttp.open("POST", "indexphpajaxgetuserdetails.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            console.log(userJSON);
            xmlhttp.send("user=" + userJSON);
        }
    </script>
 
</head>
<body>  

        <header>
                <div class="logo">
                  <a href="./landing-page.html"> <img src="../img/id.svg" alt="" /> </a>
                </div>
                <div class="options">
                  
                  <a href="about.html" class="About-us-btn option">About Us</a>
                  
                  <a class="btn btn-success" type="button" href="logout.php">Log out</a>
                </div>
        </header>
        <main>
                
        <div class="soc-wrapper" style="height:auto;">

                <h2 style="color:green;">Security Dashboard</h2>
                <p style="font-size: 30px; font-weight: bold; ">Welcome <?php
                @$gid = $_SESSION['gname']; 
                echo "$gid";
                ?>!</p>
                <div class="soc-name">
                        <i class="fas fa-map-marker-alt"></i>      
                        <p><?php
                                require('connect.php');
                                $socid = $_SESSION['soc_id']; 
                                $sql = "SELECT * FROM society where id = $socid";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                                        @$socname  = $row['socname'];
                                        echo "$socname";
                                }
                                }
                                $conn->close();        
                        ?>
                        </p>                
                </div>
               
                
                <div class="ajax-div" style="display:flex; flex-direction:column; align-items: center; margin-bottom:10px;">

                <h3 style="margin:2px auto ;">Enter Visitor name: </h3>

                <input type="text"  name="name" id="name" style="color:black;">
                <br /><br />        
                <input type="button"  class="clickme" style="color:white; margin: 10px auto;" onclick="getUser()" value="Search for the visitors" />
        </div>

        <div>
        <p id="userDetail" style="padding: 5px 10px; background-color:#e0e0e0; border-radius:10px;"></p>
        <div></div><br>
                <div class="visitor-options">
                <a href="visitor-dashboard-home.php">
                <div class="visitor-option new-visitor" style="border-radius: 5px; margin: 7px auto;">Monitor Visitors</div>
                </a>
        </div>
        
        
        </main>
        <footer>
        <div class="footer-container" style="position:relative;">
                <div class="title"><p>Visitracker</p></div>
                <div class="divider"></div>
                <div class="made-by">
                <p>Project made by Aakarsh, Akshay, Neel and Pramod</p>
                </div>
                <div class="info">
                        <div class="github-logo">
                                <a href="https://github.com/Aakarsh-verma/intp-sem5-mini-project"><i class="fab fa-github"></i></a>
                        </div>
                </div>
                

        </div>
        </footer>
        
</html>