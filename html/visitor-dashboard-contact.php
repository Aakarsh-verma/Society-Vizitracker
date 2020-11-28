<!-- Visitor Entered --><?php session_start();?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../css/visitor.css" />
    <link rel="stylesheet" href="../css/model.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <title>Visitor Dashboard</title>
    <style>
      a{
        text-decoration: none;
      }
    </style>
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
    <a class="tablink button" href="./visitor-dashboard-news.php" >
      Unknown visitor
    </a>
    <button class="tablink selectTablink button" href="./visitor-dashboard-contact.php" id="defaultOpen">
      Visitor Entered
    </button>
    <a class="tablink button" href="./visitor-dashboard-about.php">
      Visitors Record
    </a>

    <div id="Contact" class="tabcontent">
      <h3>Visitor Entered</h3>
      <table border="1">
        <tr>
          <th>Visitor Name</th>
          <th>Role</th>
          <th>Houses</th>
          <th>Temprature</th>
          <th>Symptoms</th>
          <th>Entry time</th>
          <th>Exit</th>
        </tr>
        <?php
          require("connect.php");
          @$socid = $_SESSION['soc_id'];
          $ent = "SELECT * FROM records where soc_id='$socid'";
          $result = $conn->query($ent);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $vid = $row['visitor_id'];
            $house = $row['houses'];
            $temp = $row['temp'];
            $symp = $row['symptoms'];
            $enter_time = $row['entry_time'];
              if(!$row['exit_time']){
              $visitor = "SELECT * FROM visitor1 where id = $vid";
              $res = $conn->query($visitor);
                if ($res->num_rows > 0) {
                  while($row = $res->fetch_assoc()) {
                    $name = $row["name"];
                    $age = $row["age"];
                    $gender = $row["gender"];
                    $role = $row["role"];
                    echo "<tr>
                            <td>$name</td>
                            <td>$role</td>
                            <td>$house</td>
                            <td>$temp</td>
                            <td>$symp</td>
                            <td>$enter_time</td>
                            <td><form action='' method='POST'><input type='submit' id='$id' class='btn' name='submit$id' value='Exit visitor' style='width:100px; margin:auto; height:50%'/></form></td>
                          ";
                      ?>
                        <script>
                          var submitBtn<?php echo $id?> = document.getElementById("<?php echo $id?>");
                          submitBtn<?php echo $id?>.onclick = function () {
                            document.cookie = "exitVisitor ="+submitBtn<?php echo $id?>.id;
                          }
                        </script> 
                      <?php
                      echo "</tr>";

                      date_default_timezone_set('Asia/Kolkata');
                      $time     = date("h:i:sa");
                      @$exitVisitorid = $_COOKIE['exitVisitor'];
                      @$exitTIme = $_POST['submit'.$exitVisitorid];
                      if(isset($exitTIme)){
                        $enter_time = "UPDATE records SET exit_time =  '$time' WHERE id = $exitVisitorid";
                        if ($conn->query($enter_time) === TRUE) {
                            echo "<script>alert('New record created successfully');</script>";
                            header('Location: '.$_SERVER['REQUEST_URI']);
                          } else {
                            echo "<script> console.log(\" Error: $enter_time <br> $conn->error only for removing error \")</script>";
                        }
                    }
                  }
                }
              }
            }
          }
          $conn->close(); 
        ?>
      </table>
    </div>
  </body>
</html>