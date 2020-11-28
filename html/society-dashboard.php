<?php session_start();?>
<html>

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
.responsive {
  width: 100%;
  height: auto;
}
.clickme{
  /* width: 100px; */
  /* height:20px; */
  margin: 8px auto;
  padding: 5px 20px;
  border-radius: 25px;
  background-color: white;
  text-decoration: none;
  cursor: pointer;
  color: white;
  font-size: 0.9rem;
  text-align:center;

}
.form-wrapper{
  display:flex;
  flex-direction: column;
  height:auto;
  
}
.form-control{
  margin: 2px auto;
}
.form-control input{
  width: 25vw;
  height: 40px;
  border-radius:10px;
  border:none;


}
.form-control input:focus{
  outline:none;
  border:none;
}

.form-control legend{
  padding:5px;
  margin-left:5px;
  font-size: 15px;
}
/* .form-wrapper{
  height: 500px;
  overflow-y:auto;
} */
@media only screen and (max-width: 400px) {
  .made-by p {
    font-size: 12px;
  }

}
a{
  text-decoration: none;
}

.soc-wrapper{
  display:flex;
  flex-direction: row;
  align-items:center;
  justify-content: center;
  margin: 0 auto;
  width: auto;
}
.soc-details{
  padding-left:20px;
  display:flex;
  flex-direction: column;
  background-color: #2fd485;
  font-family: DM Sans, sans;
  width: 500px

}
.soc-details p{
  color: #1e1f27;
}
.soc-details .detail{
  width:90%;
  padding:8px;
  border-radius:25px;
}
.soc-img{
  width: 800px;
  
}
</style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
       
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <!-- footer utils -->
  <link rel="stylesheet" href="../css/footer.css">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/society.css">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
</head>

<body >
  <header>
    <div class="logo">
        <img src="../img/id.svg" alt="" />
    </div>
    <div class="options">
      <a class="About-us-btn option" href="about.html">About Us</a>
      <a class="btn btn-success" type="button" href="logout.php">Log out</a>
  </div>
  </header>
  <h1 class="heading">Society Dashboard</h1>

  <button class="tablink" style="width: 33.3%h" onclick="openPage('Home', this)" id="defaultOpen">Society details</button>
  <button class="tablink" style="width: 33.3%" onclick="openPage('News', this)">Add security</button>
  <button class="tablink" style="width: 33.3%" onclick="openPage('Contact', this)">Security details</button>

  <div id="Home" class="tabcontent" >

  <h3>Soceity details </h3>
  <div class="soc-wrapper">
  <img src="../img/undraw_quite_town_mg2q (1).svg" alt="Society vector" class="soc-img">

  <?php
    require('connect.php');
    @$socid = $_SESSION['soc_id']; 
    $sql = "SELECT * FROM society where id = $socid";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()){
        @$socname  = $row['socname'];
        @$adline1  = $row['adline1'];
        @$adline2  = $row['addline2'];
        @$pincode  = $row['pincode'];
        @$secname  = $row['secname'];
        @$email    = $row['email'];
  ?>
       <div class="soc-details" style="border-radius:7px;">
            <p class="detail" style="font-size:30px; background-color:#adff8a;  border-radius:7px; padding: 5px 12px; margin: 5px auto;  text-align: center;"><?php echo $socname; ?></p>
            <p class="detail">Address: <?php echo "$adline1, $adline2, $pincode";?></p>
            
            
            <p class="detail">Secretary Name: <?php echo $secname; ?></p>
            <p class="detail">Email: <?php echo $email; ?></p>
            
            <p><a href="visitor-dashboard-about.php"><input class="clickme" type="submit" name="submit" value="Manage Visitors" style="color:black; margin: 8px auto;
  padding: 5px 30px;"></a></p>
       </div>
  <?php 
         
      }
    }
  ?>
  </div>
  </div>
 

  <div id="News" class="tabcontent" style="margin: 0 auto; height: auto;">
    
    <form class="form-wrapper"action="society-dashboard.php" method="POST" style="margin: 0 auto; background-color:#2fd485; border-radius:15px; height:auto; width: 40vw; ">

          <div class="form-control name" style="margin:0 auto;">
          <h3 style="align-items: center; margin: 10px auto; font-size:25px; text-align:center;">Register Security</h3>
              <legend>Name:</legend>
              <input type="text" name="name" id="name" placeholder="   Name" required>
          </div><br>

          <div class="form-control age">
              <legend>Age:</legend>
              <input type="number" min="0" name="age" id="age" placeholder="   Age" required> 
          </div><br>

          <div class="form-control gender">
              <legend>Gender</legend>
              <select name="gender" id="gender" required>
                  <option value="">Choose</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="other">Other</option>
              </select>
          </div><br>

          <div class="form-control contact">
          <legend>Contact:</legend>
            <input type="number" min="0" minlength="10" maxlength="10"  name="contact" id="contact" placeholder="phone number" required>
          </div>

          <div class="form-control email">
            <legend>Email:</legend>
            <input type="email" name="email" id="email" placeholder="   email" required>
          </div><br>

          <div class="form-control">
            <legend>Password:</legend>
            <input type="password" maxlength="10" name="password" id="" placeholder="   password" required>
          </div><br>

          <div class="form-control">
            <legend>Confirm Password:</legend>
            <input type="password" maxlength="10" name="confirmpassword" id="" placeholder="   Confirm Password" required>
          </div><br>

      
          <!--<legend>Image:</legend>
          <input type="file" name="image" id="id_image" accept="image/*"><br><br>-->
          
          <input class="clickme" type="submit" name="submit" value="ADD" style="color:black;">
          
          
          <?php 
          require('connect.php');
          @$socid = $_SESSION['soc_id'];
          @$name = $_POST['name'];
          @$age=$_POST['age'];
          @$email = $_POST['email'];
          @$gender = $_POST['gender'];
          @$confirmpassword= $_POST['confirmpassword'];
          if(isset($_POST['submit'])){
            if($name&&$email){
                if(!$name){
                    echo "enter name";
                }
                if(!$email){
                    echo "enter valid email";
                }
                else{
                    $sql = "INSERT INTO guards VALUES (0, '$socid', '$name', '$age', '$gender', '$email', '$confirmpassword')";
                    if ($conn->query($sql) === TRUE) {
                      echo '<script language="javascript">window.location.href ="'.$url.'"</script>';
                  
                    }
                    if($mysqli -> error){
                      $error = "Invalid: " . $mysqli -> error;
                      echo "<script>alert('$error')</script>";
                    }
                }
                
            }
            else{
                echo 'Please fill all the details'; 
            }
            $conn->close(); 
          }


          ?>

      </form>
  </div>

    <div id="Contact" class="tabcontent">
        <h3>Security Details</h3>
        <table style="border: 2px; border-style: solid; border-spacing: 6px; width: 80%; margin: 0 auto;">
						
        <tr>
          <th style="border:solid 1px; background-color:#abff94">Name</th>
          <th style="border:solid 1px;background-color:#abff94">Age</th>
          <th style="border:solid 1px;background-color:#abff94">Gender</th>
          <th style="border:solid 1px;background-color:#abff94">Contact</th>
          <th style="border:solid 1px;background-color:#abff94">Email</th>
          
        </tr><br>
        <?php
          require('connect.php');
          @$socid = $_SESSION['soc_id'];
          $sql = "SELECT * FROM guards where socid = $socid";
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
              $name    = $row['name'];
              $age     = $row['age'];
              $gender  = $row['gender'];
              $contact = $row['contact']; 
              $email   =$row['email'];
              
        ?>
				<tr style="color: #404040;">
					<td style="height:50px;width:100px;text-align:center; background-color: #ededed; padding: 12px;"><?php echo $name; ?></td>
					<td style="height:50px;width:100px;text-align:center; background-color: #ededed; padding: 12px;"><?php echo $age; ?></td>
					<td style="height:50px;width:100px;text-align:center; background-color: #ededed; padding: 12px;"><?php echo $gender; ?></td>
          <td style="height:50px;width:100px;text-align:center; background-color: #ededed; padding: 12px;"><?php echo $contact; ?></td>
          <td style="height:50px;width:100px;text-align:center; background-color: #ededed; padding: 12px;"><?php echo $email; ?></td>
					
        </tr>
        
        <?php
            }
          }
        ?>
			</table>
    </div>


    <script>
        function openPage(pageName, elmnt) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }
            document.getElementById(pageName).style.display = "block";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        
        function validation(event) {

        var contact = document.querySelector('#contact').value;
        if (contact == '' || contact == null) {
        alert("Contact Can't be blank");
        return false;
        }
        var pattern = new RegExp('^([0|+[0-9]{1,5})?([7-9][0-9]{9})$');
        if (!pattern.test(contact)) {
          alert('Invalid Phone Number');
          return false;
        }
      }
    </script>
    <div class="footer-container">
                        <div class="title"><p>Visitracker</p></div>
                        <div class="divider">
        
                        </div>
                        <div class="made-by">
                                <p>Website made by Aakarsh, Akshay, Neel and Pramod</p>
                        </div>
                        
                        <div class="info">
                                <div class="github-logo">
                                        <a href="https://github.com/Aakarsh-verma/intp-sem5-mini-project"><i class="fab fa-github"></i></a>
                                </div>
                        </div>
                        
        
                </div>

</body>
      

</html>

<?php  

@$name            = $_POST['name'];
@$age             = $_POST['age'];
@$gender          = $_POST['gender'];
@$contact         = $_POST['contact'];
@$email           = $_POST['email'];
@$password        = $_POST['password'];
@$confirmpassword = $_POST['confirmpassword'];
@$socid = $_SESSION['soc_id'];
if(isset($_POST['submit'])){

    if($name&&$age&&$gender&&$email&&$password&&$confirmpassword){
        if(!$name){
            echo "enter name";
        }
        else{
            if(!$email){
                echo "enter valid email";
            }
            else{
               $sql = "INSERT INTO guards VALUES (0, '$socid', '$name', '$age', '$gender', '$contact', '$email', '$password')";
               if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $write . "<br>" . $conn->error;
              }
              $conn->close();
            }
        }
    }
    else{
        echo 'Please fill all the details'; 
    }
}
?>