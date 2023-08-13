<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details</title>
    <link rel="stylesheet" href="css/stdetails.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<?php
    include("db.php"); // Include db.php file to connect to the DB
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $search = $_POST['search']; // Retrieve the search query
        $SQL = "SELECT * FROM $search"; // Modify the query to use the search term
        $exeSQL = mysqli_query($conn, $SQL) or die(mysqli_error($conn));
?>
                <p>Name :- <?php
                        $SQLname = "SELECT name FROM $search"; // Modify the query to use the search term
                        $exeSQLname = mysqli_query($conn, $SQLname) or die(mysqli_error($conn));
                        $arrayname=mysqli_fetch_array($exeSQLname);
                echo $arrayname['name'];
                ?></p>
                <p>Email :- <?php
                        $SQLemail = "SELECT email FROM $search"; // Modify the query to use the search term
                        $exeSQLemail = mysqli_query($conn, $SQLemail) or die(mysqli_error($conn));
                        $arrayemail=mysqli_fetch_array($exeSQLemail);
                echo $arrayemail['email'];
                ?></p>
                <p>Address :- <?php
                        $SQLaddress = "SELECT address FROM $search"; // Modify the query to use the search term
                        $exeSQLaddress = mysqli_query($conn, $SQLaddress) or die(mysqli_error($conn));
                        $arrayaddress=mysqli_fetch_array($exeSQLaddress);
                echo $arrayaddress['address'];
                ?></p>
                <p>Mobile Number :- <?php
                        $SQLtp = "SELECT phone FROM $search"; // Modify the query to use the search term
                        $exeSQLtp = mysqli_query($conn, $SQLtp) or die(mysqli_error($conn));
                        $arraytp=mysqli_fetch_array($exeSQLtp);
                echo $arraytp['phone'];
                ?></p>
                <p>Index Number :- <?php
                        $SQLtp = "SELECT indexnumber FROM $search"; // Modify the query to use the search term
                        $exeSQLtp = mysqli_query($conn, $SQLtp) or die(mysqli_error($conn));
                        $arraytp=mysqli_fetch_array($exeSQLtp);
                echo $arraytp['indexnumber'];
                ?></p>
                <p>First School Date :- <?php
                        $SQLda = "SELECT firstdate FROM $search"; // Modify the query to use the search term
                        $exeSQLda = mysqli_query($conn, $SQLda) or die(mysqli_error($conn));
                        $arrayda=mysqli_fetch_array($exeSQLda);
                echo $arrayda['firstdate'];
                ?></p>





<div class="tab-titles">
              <p class="tab-links active-link" onclick="opentab('ACTIVITY')">
                Activity
              </p>
              <p class="tab-links" onclick="opentab('MARKS')">Marks</p>
            </div>
            <div class="tab-contents active-tab" id="ACTIVITY">
                





            <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="teacherdata" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Activity</th>
                    <th>Date</th>
                    <th>Feedback</th>
                    <th>Any Comments</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($row = mysqli_fetch_assoc($exeSQL)) {
                        $activity = $row['activity'];
                        $date = $row['date'];
                        $feedback = $row['feedback'];
                        $comments = $row['comments'];
                ?>
                        <tr>
                            <td><?php echo $activity; ?></td>
                            <td><?php echo $date; ?></td>
                            <td><?php echo $feedback; ?></td>
                            <td><?php echo $comments; ?></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

            </div>





            <div class="tab-contents" id="MARKS">
            <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="teacherdata" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Grade</th>
                    <th>Term</th>
                    <th>Avarage</th>
                    <th>Place</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $SQLmarks = "SELECT * FROM $search"; // Modify the query to use the search term
                $exeSQLmrks = mysqli_query($conn, $SQLmarks) or die(mysqli_error($conn));
                    while ($marks = mysqli_fetch_assoc($exeSQLmrks)) {
                        $grade = $marks['grade'];
                        $term = $marks['term'];
                        $avg = $marks['avg'];
                        $place = $marks['place'];
                ?>
                        <tr>
                            <td><?php echo $grade; ?></td>
                            <td><?php echo $term; ?></td>
                            <td><?php echo $avg; ?></td>
                            <td><?php echo $place; ?></td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
            </div>

<a href="index.php" class="btn">Back</a>
<script>
    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");

    function opentab(tabname) {
      for (tablink of tablinks) {
        tablink.classList.remove("active-link");
      }
      for (tabcontent of tabcontents) {
        tabcontent.classList.remove("active-tab");
      }

      event.currentTarget.classList.add("active-link");
      document.getElementById(tabname).classList.add("active-tab");
    }
  </script>
      <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>

</body>
</html>