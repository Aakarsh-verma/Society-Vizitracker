
<?php 
session_start();
require('connect.php');

@$email = $_POST['email'];
@$password=$_POST['password'];
@$role = $_POST['role'];

if(isset($_POST['submit'])){
  if($email&&$password){
    switch ($role){
      case 'secretary':
        $sql = "SELECT * FROM society where email = '$email' and confirmpassword = '$password'";
        $result = $conn->query($sql);
        if (!empty($result) && $result->num_rows > 0){
          while($row = $result->fetch_assoc()) {
          $_SESSION['soc_id'] = $row['id'];
          $_COOKIE['soc_id'] = $row['id'];
          echo '<script>alert("Session id recorded")</script>';
          header("location: society-dashboard.php");
          }
        }
      break;
      case 'security':
        $sql = "SELECT * FROM guards where email = '$email' and confirmpassword = '$password'";
        $result = $conn->query($sql);
        if (!empty($result) && $result->num_rows > 0){
          while($row = $result->fetch_assoc()) {
          $_SESSION['soc_id'] = $row['socid'];
          $_COOKIE['soc_id'] = $row['socid'];
          $_SESSION['gname'] = $row['name'];
          $_COOKIE['gname'] = $row['name'];
          echo '<script>alert("Session id recorded")</script>';
          header("location: security-dashboard.php");
          }
        }
      break;
      default:
      echo '<script>alert("Choose your role")</script>';
    }
  }
  else{
    echo '<script>alert("please enter all the details")</script>';
  }
}$conn->close(); 
?>


<html lang="en">

<head>
    <style>
        :root {
  --green: #2fd485;
  --blue: #1e1f27;
}

* {
  font-family: DM Sans, sans;
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
.title p {
  font-family: "Bebas Neue", cursive;
  padding-top: 30px;
}
.title {
  font-size: 30px;
  color: rgb(224, 224, 224);
  letter-spacing: 7px;
  margin: 0px auto;
}
.footer-container {
  position: absolute;
  background-color: rgb(41, 41, 41);
  height: 200px;
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  bottom: 0%;
}
.made-by {
  margin: 0px auto;
}
.made-by p {
  font-family: Montserrat, sans-serif;
  color: rgb(224, 224, 224);
  font-weight: 300;
  font-size: 15px;
}

.divider {
  height: 0.2px;
  width: 40%;
  background-color: rgb(224, 224, 224);
  margin: 0px auto;
}
.info {
  margin: 10px auto;
}

.fab {
  color: rgb(224, 224, 224);
  font-size: 35px;
  transition: all 0.5s;
}

.fab:hover {
  transform: scale(1.25);
}
.clickme{
  
  padding: 12px 20px;
  border-radius: 25px;
  background-color: white;
  text-decoration: none;
  cursor: pointer;
  color: white;
  font-size: 1.3em;
}

@media only screen and (max-width: 400px) {
  .made-by p {
    font-size: 12px;
  }
}

    </style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css" />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet" />
       <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
      
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>

<body>
    <header>
        <div class="logo">
            <img src="../img/id.svg" alt="" />
        </div>
        <div class="options" >
            <a class="home-btn option" href="index.html">Home</a>
            <a class="About-us-btn option" href="about.html">About Us</a>
            <a class="Contact-btn option" href="contactus.html">Contact</a>
        </div>
    </header>
    <main>
        <div class="reg-card" style="height: max-content;">
            <br>
            <p class="card-title">Society Login</p><br>

            <form class="container" action="login.php"   method="POST" style="height:auto; margin-bottom: 20px;">

                <p>
                    <label for="socusername">Email (security/secratary)</label>
                    <input type="email" name="email" id="email" placeholder="Email" value="<?php echo $email ?>">
                </p>
                <br>
                
                
                <p>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Password" >
                </p>
                <br>
                <select name="role" id="role" style="margin: 7px auto; padding: 15px; border-radius: 5px;">
                  <option value="">Select Role</option>
                  <option value="secretary">Secretary</option>
                  <option value="security">Security</option>
              </select>
                <input class="clickme" type="submit" name="submit" value="Login" style="color:black;">
                <p>Not Registered? Register <a style="color: aliceblue;" type="button" href="soc_reg.php">Here</a></p>
                <br>
            </form>
        </div>
    </main>

    <div class="footer-container" style="height:auto;">
                <div class="title"><p>Visitracker</p></div>
                <div class="divider">

                </div>
                <div class="made-by">
                        <p>Project made by Aakarsh, Akshay, Neel and Pramod</p>
                </div>
                
                <div class="info">
                        <div class="github-logo">
                                <a href="https://github.com/Aakarsh-verma/intp-sem5-mini-project"><i class="fab fa-github"></i></a>
                        </div>
                </div>

    <script type = "text/javascript">
        function valThisForm() {
            event.preventDefault();
            let socUsername = document.getElementById("email");
            let password = document.getElementById("password");
            if(socUsername.value=="" && password.value=="") {
                alert("Please fill all the fields");
                event.preventDefault();
                socUsername.focus();
            }
            else if(socUsername.value=="") {
                alert("Email cannot be empty");
                event.preventDefault();
                socUsername.focus();
            }
           
            else if(password.value=="") {
                alert("Password cannot be empty");
                password.focus();
            }
            console.log(socUsername);
        }
        
    </script>
</body>

</html>
