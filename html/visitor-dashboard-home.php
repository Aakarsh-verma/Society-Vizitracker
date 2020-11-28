<?php session_start();?>
<html>
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
  position: static;
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

@media only screen and (max-width: 570px) {
  header {
    padding: 1rem;
  }
  .options {
    display: flex;
    flex-direction: row;
  }
  .options .option {
    font-size: 0.8rem;
  }
}

@media only screen and (max-width: 400px) {
  .made-by p {
    font-size: 12px;
  }
}

  </style>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../css/visitor.css" />
    <link rel="stylesheet" href="../css/model.css" /> <!-- Anchor Button CSS is in model.css -->
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

    <button class="tablink selectTablink" id="defaultOpen">
      New Visitor
    </button>
    <a class="tablink button" href="./visitor-dashboard-news.php">
      Unknown visitor
    </a>
    <a class="tablink button" href="./visitor-dashboard-contact.php">
      Visitor Entered
    </a>
    <a class="tablink button" href="./visitor-dashboard-about.php">
      Visitors Record
    </a>

    <div id="Home" class="tabcontent">
      <?php
        require("connect.php");
        @$socid = $_SESSION['soc_id'];
        $sql = "SELECT * FROM visitor1 where soc_id='$socid'";
        $result = $conn->query($sql);
        $count = 0;
        if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                $vid    = $row['id'];
                $name   = $row["name"];
                $age    = $row["age"];
                $gender = $row["gender"];
                $role   = $row["role"];
                ?>

                <div class='card' style='max-width: 70%; margin: auto'>
                        <div class='card-body flex-container'>
                          <div>
                            <h3 class='card-title'> <?php echo $name ?> </h3>
                            <p><?php echo "<b>Age:</b> ". $age ." <b>Gender:</b> ". $gender ." <b>Role:</b> ". $role ?></p>
                            <div> <!-- input tag for taking visitor id for form -->
                              <input name="id" id="vid<?php echo "myBtn".$vid; ?>" type="hidden" value="<?php echo "$vid";?>"/>
                            </div>
                          </div>
                          <button class='btn' id='<?php echo "myBtn".$vid; ?>' style='margin-top: 10px; margin-bottom: 0px; max-width: 10rem'>Enter
                          </button>
                        </div>
                      </div>
                      <br>

                <div id='<?php echo "myModal".$vid ?>' class='modal'>
                        <div class='modal-content'>
                          <span class='close'  id='<?php echo $vid; ?>'>&times;</span>
                            <form action='' method='POST'>
                                  <div >
                                    <legend>Enter Houses</legend>
                                    <input type='text' class='form-control' name='house' id='field' placeholder='Visiting Houses'/>
                                  </div><br/>
                
                                  <div>
                                    <legend>Enter Temprature</legend>
                                    <input type='number' min="0" class='form-control' name='temp' id='field' placeholder='Visitor Temperature'/>
                                  </div><br/>
                
                                  <div>
                                    <legend>Enter Symptoms</legend>
                                    <select class='form-control' name='symp' id='field'>
                                      <option value='None'>None</option>
                                      <option value='Cough'>Cough</option>
                                      <option value='Cold'>Drowsy</option>
                                      <option value='Sneezing'>Sneezing</option>
                                      <option value='other'>Other</option>
                                    </select>                
                                  </div><br/>
                                <button class="btn" name='<?php echo "enter".$vid ?>'>Enter ME!!</button>
                            </form>
                        </div>
                      </div>

                      <script> 
                        var modal$vid = document.getElementById('<?php echo "myModal".$vid; ?>');
                        var btn$vid = document.getElementById('<?php echo "myBtn".$vid; ?>');
                        btn$vid.onclick = function () {
                          var id = document.getElementById('vid<?php echo "myBtn".$vid; ?>').value;
                          modal$vid.style.display = 'block';
                          document.cookie = "vid = " + id;
                        };
                        var span = document.getElementsByClassName('close')[0];
                        var span$vid = document.getElementById('<?php echo $vid; ?>');
                        span$vid.onclick = function () {
                          modal$vid.style.display = 'none';
                        };
                      </script>

                <?php
              }
              if(isset($_POST['enter'.$vid])){
                @$entid   = $_COOKIE['vid'];
                @$house   = $_POST['house'];
                @$temp    = $_POST['temp'];
                @$symp    = $_POST['symp'];
                date_default_timezone_set('Asia/Kolkata');
                $time     = date("H:i:s");
                $exitTIme = NULL;
                $socid      = $_SESSION['soc_id'];
                
                if($entid&&$house&&$temp&&$symp){
                  $check = "SELECT * FROM records where visitor_id = '$entid'";
                  if($conn->query($check) === TRUE ){
                    echo "<script>alert('Visitor already inside!')</script>";
                  }
                  else{
                    $enter_time = "INSERT INTO records VALUES (0, '$entid', '$house', '$temp', '$symp', '$time', NULL, '$socid')";
                    if ($conn->query($enter_time) === TRUE) {
                            echo "<script>alert('New record created successfully')</script>";
                            } else {
                                   echo "Error: " . $enter_time . "<br>" . $conn->error;
                             }
                  }
                }else{
                  echo "<script>alert('Please Fill All Fields')</script>";
                }
              }
        } 
        else {
            echo "no results";
        }
        $conn->close(); 
      ?>
    </div>
      </body>
      </html>
