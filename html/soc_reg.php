<html lang="en">

<head>
    <style >
        :root {
  --green: #2fd485;
  --blue: #1e1f27;
}

* {
  font-family: DM Sans, soans;
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
.button {
  cursor: pointer;
  background: var(--blue);
  width: 45%;
  height: 50px;
  border: 0;
  margin-bottom: 30px;
  border-radius: 0.8rem;
  padding: 10px 15px;
  color: #ffffff;
  -webkit-transition: 0.3s ease;
  transition: 0.3s ease; 
  text-decoration:none;
}
.clickme{
  
  padding: 12px 20px;
  border-radius: 25px;
  background-color: white;
  text-decoration: none;
  cursor: pointer;
  color: white;
  font-size: 1.3rem;
}

.soc-reg p{
  padding-left:10px;
}
.fab:hover {
  transform: scale(1.25);
}

@media only screen and (max-width: 400px) {
  .made-by p {
    font-size: 12px;
  }
  
}

    </style>
      <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/footer.css">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    <link rel="stylesheet" href="../css/login.css" />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet" />
      <!-- footer utils -->
  <link rel="stylesheet" href="../css/footer.css">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>

<body>
    <header>
        <div class="logo">
            <img src="../img/id.svg" alt="" />
        </div>
        <div class="options">
            <a class="home-btn option" href="index.html" style="text-decoration: none;">Home</a>
            <a class="About-us-btn option" href="about.html" style="text-decoration: none;" >About Us</a>
            <a class="Contact-btn option" href="contactus.html" style="text-decoration: none;">Contact</a>
        </div>
    </header>
    <main>
        <div class="reg-card">
            <br>
            <p class="card-title">Society Registration</p><br>

            <form class="container" action="soc_reg.php" method="POST">
                <p>
                    <label for="socname">Society Name:</label>
                    <input type="text" name="socname" id="socname" placeholder="Name of Society" >
                </p>
                <br>
                <p>
                    <label for="adline1">Address line 1:</label>
                    <input type="text" name="adline1" id="adline1" placeholder="Name of Street, Town" >
                </p>
                <br>
                <p>
                    <label for="adline2">Address line 2:</label>
                    <input type="text" name="adline2" id="adline2" placeholder="Name of City, State" >
                </p>
                <br>
                <p>
                    <label for="pincode">Pincode:</label>
                    <input type="number" min="0" name="pincode" id="pincode" maxlength="6" minlength="6" placeholder="Pincode" value="<?php echo $pincode ?>">
                </p>
                <br>
                <p>
                    <label for="secname">Secretary Name:</label>
                    <input type="text" name="secname" id="secname" placeholder="Name of Secretary" >
                </p>
                <p>
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" placeholder="email" >
                </p>
                <br>
                
                
                <p>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Password" >
                </p>
                <br>
                 <p>
                    <label for="conpassword">Confirm Password:</label>
                    <input type="password" name="conpassword" id="conpassword" placeholder="Confirm Password" >
                </p>
                <br>
               
                <input class="clickme" type="submit" name="submit" value="Register" style="color:black;">
               
            </form>
        </div>
    </main>
    <script type = "text/javascript">
        function emailValidation(email) {
            var mailformat = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
            return email.value.match(mailformat);
            
        }
        function valThisForm() {
            event.preventDefault();
            let email = document.getElementById("email");
            let password = document.getElementById("password");
            let conpassword = document.getElementById("conpassword");
            let validEmail = emailValidation(email)
            if(validEmail==false){
                alert("Please Enter a valid Email ID!");
                event.preventDefault();
                email.focus()
            }
            if(email.value=="" && password.value=="" && conpassword=="") {
                alert("Please fill all the fields");
                event.preventDefault();
                email.focus();
            }
            else if(email.value=="") {
                alert("Email cannot be empty");
                event.preventDefault();
                email.focus();
            }
            
            else if(password.value=="") {
                alert("Password cannot be empty");
                password.focus();
            }
            else if(conpassword.value=="") {
                alert("Please confirm your password");
                conpassword.focus();
            }
            else if(password.value!==conpassword.value){
                alert("Passwords do not match");
                conpassword.focus();
            }
            console.log(email);
        
        }
    
    </script>

<?php
require('connect.php');
@$socname = $_POST['socname'];
@$adline1 = $_POST['adline1'];
@$adline2 = $_POST['adline2'];
@$pincode = $_POST['pincode'];
@$secname = $_POST['secname'];
@$email = $_POST['email'];
@$password = $_POST['password'];

if(isset($_POST['submit'])){
  if($socname&&$adline2&&$adline1&&$pincode&&$password){
      if(!$socname){
          echo "enter society name";
      }
      if(!$pincode){
          echo "enter valid pincode";
      }
      else{
          $sql = "INSERT INTO society VALUES ('', '$socname', '$adline1', '$adline2', '$pincode', '$secname', '$email', '$password')";
          if ($conn->query($sql) === TRUE) {
            echo "<script>alert('New record created successfully You are now able to log in')</script>";
            header("location: login.php");
          } 
          else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          $conn->close();
      }
  }
  else{
      echo 'Please fill all the details'; 
  }
}
?>  
        <div class="footer-container">
  }

?>
        <div class="footer-container">
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
</body>

</html>
