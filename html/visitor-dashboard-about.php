<!-- Visitor Record --><?php session_start();?>
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
    <a class="tablink button" href="./visitor-dashboard-news.php">
      Unknown visitor
    </a>
    <a class="tablink button" href="./visitor-dashboard-contact.php">
      Visitor Entered
    </a>
    <button class="tablink selectTablink button" href="./visitor-dashboard-about.php" id="defaultOpen">
      Visitors Record
    </button>

    <div id="About" class="tabcontent">
      <h2>Visitor Records For the day</h2>
    <table border="1">
        <tr>
          <th>Visitor Name</th>
          <th>Role</th>
          <th>Houses</th>
          <th>Temprature</th>
          <th>Symptoms</th>
          <th>Entry time</th>
          <th>Exit Time</th>
        </tr>
        <?php
          require("connect.php");
          @$socid = $_SESSION['soc_id'];
          $ent = "SELECT * FROM records where soc_id='$socid'";
          $result = $conn->query($ent);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $vid = $row['visitor_id'];
            $house = $row['houses'];
            $temp = $row['temp'];
            $symp = $row['symptoms'];
            $enter_time = $row['entry_time'];
            $exit_time = $row['exit_time'];
              if($exit_time){
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
                            <td>$exit_time</td>
                          </tr>";
                  }
                }
              }
            }
          }

          date_default_timezone_set('Asia/Kolkata');
          $dtime= date("h:i:sa");
          if($dtime == date('00:00:00')){
            $sql = 'DELETE FROM records';
            $res = $conn->qurey($sql);
            if($res === TRUE){
              echo 'Record Deleted';
            }
          }$conn->close();
        ?>
      </table>
    </div>
  </body>
</html>
