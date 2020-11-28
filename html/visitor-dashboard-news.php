<!-- Unknown Visitor --><?php session_start();?>
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
  position: absolute;
  background-color: rgb(41, 41, 41);
  height: 200px;
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  /* bottom: 0%; */
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

  @media only screen and (max-width: 400px) {
    .made-by p {
      font-size: 12px;
    }
  }
  a{
    text-decoration: none;
  }
  .form-control {
  display: block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

  </style>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../css/visitor.css" />
    <link rel="stylesheet" href="../css/model.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <title>Visitor Dashboard</title>
  </head>

  <body>
    <header>
      <div class="logo">
        <img src="../img/id.svg" alt="" />
      </div>
      <div class="options">
       
        <a href="about.html" class="About-us-btn option">About Us</a>
        
        <a class="btn btn-success" type="button" href="logout.php">Log out</a>
      </div>
    </header>
    <h1 class="heading">Visitor Dashboard</h1>

    <a class="tablink button" href="./visitor-dashboard-home.php">
      New Visitor
    </a>
    <button class="tablink selectTablink" href="./visitor-dashboard-news.php" id="defaultOpen">
      Unknown visitor
    </button>
    <a class="tablink button" href="./visitor-dashboard-contact.php">
      Visitor Entered
    </a>
    <a class="tablink button" href="./visitor-dashboard-about.php">
      Visitors Record
    </a>

    <div id="News" class="tabcontent" style="margin: auto; width: 70%">
      <h3 style="text-align: center">Register a new visitor</h3>
      <form name="NewVisitor" action="" method="POST" onsubmit="return validation(event)">
        <div class="form-group">
          <legend>Name</legend>
          <input class="form-control" type="text" name="name" id="newVisitorName" placeholder="Name"/>
        </div><br/>

        <div class="flex-container" >
          <div class="form-group">
            <legend>Age</legend>
            <input class="form-control" type="number" min="0" name="age" id="newVisitorAge" placeholder="Age"/>
          </div>

          <div class="form-group">
            <legend>Gender</legend>
            <select class="form-control" name="gender" id="newVisitorGender">
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
          </div>
        </div><br/>

        <div class="flex-container" >
          <div class="form-group">
            <legend>Contact:</legend>
            <input class="form-control" type="number" min="0" maxlength="10" name="contact" id="newVisitorContact" placeholder="phone number"/>
          </div>

          <div class="form-group">
            <legend>Role/Purpose:</legend>
            <select class="form-control" name="role" id="newVisitorRole">
              <option value="other">other</option>
              <option value="Guest">Guest</option>
              <option value="Delivery">Delivery</option>
              <option value="Repair-Work">Repair Work</option>
            </select>
          </div>
        </div><br/>

        <h2 style="text-align: center; margin-bottom: 10px">Company / Bussiness Info</h2>

        <div class="flex-container">
          <div class="form-group">
            <legend>Company/Bussiness Name:</legend>
            <input class="form-control" type="text" name="com_name" id="busiName" placeholder="" />
          </div><br/>

          <div class="form-group">
            <legend>Company/Bussiness Contact:</legend>
            <input class="form-control" type="number" min="0" name="com_cont" id="busiContact" placeholder="phone number"/>
          </div>
        </div><br/>

        <div class="form-group">
          <legend>Company/Bussiness Location:</legend>
          <input class="form-control" type="text" name="com_loc" id="busiLocation" placeholder="location" />
        </div><br/>

        <button name="newvisit" id="myBtn" type="submit">Add Visitor</button>
      </form>
    </div>

    <script>
      function validation(event) {
      var name = document.querySelector('#newVisitorName').value;
      var age = document.querySelector('#newVisitorAge').value;
      var gender = document.querySelector('#newVisitorGender').value;
      var contact = document.querySelector('#newVisitorContact').value;
      var role = document.querySelector('#newVisitorRole').value;
      var busiName = document.querySelector('#busiName').value;
      var busiContact = document.querySelector('#busiContact').value;
      var busiLocation = document.querySelector('#busiLocation').value;

      if (name == null || name == '') {
        alert("Name can't be blank");
        return false;
      }
      if (age == '' || age == null) {
        alert('Please Enter Age');
        return false;
      }

      if (gender == '' || gender == null) {
        alert('Please Select Gender');
        return false;
      }
      if (contact == '' || contact == null) {
        alert("Contact Can't be blank");
        return false;
      }
      var pattern = new RegExp('^([0|+[0-9]{1,5})?([7-9][0-9]{9})$');
      if (!pattern.test(contact)) {
        alert('Invalid Phone Number');
        return false;
      }
      if (role == '' || role == null) {
        alert("Role Can't be Blank");
        return false;
      }

      if (busiName == '' || busiName == null) {
        alert("Business Name Can't be Blank");
        return false;
      }

      if (busiContact == '' || busiContact == null) {

        alert("Business Contact Can't be Blank");
        return false;
      }

      if (!pattern.test(busiContact)) {
        alert('Invalid Business Contact');
        return false;
      }

      if (busiLocation == '' || busiLocation == null) {
        alert("Business Location Can't be Blank");
        return false;
      }
    }
    </script>
  </body>
</html>

<?php

require("connect.php");

@$name      = $_POST['name'];
@$age       = $_POST['age'];
@$gender    = $_POST['gender'];
@$contact   = $_POST['contact'];
@$role      = $_POST['role'];
@$com_name  = $_POST['com_name'];
@$com_cont  = $_POST['com_cont'];
@$com_loc   = $_POST['com_loc'];
@$socid      = $_SESSION['soc_id'];

if(isset($_POST['newvisit'])){
echo "We are getting call";
$write = "INSERT INTO visitor1 VALUES('', '$name', '$age', '$gender', '$contact', '$role', '$com_name', '$com_cont', '$com_loc', '$socid')";
      if ($conn->query($write) === TRUE) {
          echo "<script>alert('New record created successfully')</script>";
        } else {
          echo "Error: " . $write . "<br>" . $conn->error;
      }
  $conn->close();
}

?>
