<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bandarawela Central College</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <?php
    include ("db.php");//include db.php file to connect to DB
    ?>
    <div class="text-center">
        <h1 class="head1"><span>Bandarawela Central College</span></h1>
    </div>
    <div class="text-center">
        <div class="row">
            <div class="col-6 col-md-4 text-center">
                <a href="#" class="btn" id="showSportsOverlay">Sports</a>
            </div>
            <div class="col-6 col-md-4 text-center">
                <a href="#" class="btn" id="showStudentsOverlay">Students</a>
            </div>
            <div class="col-6 col-md-4 text-center">
                <a href="#" class="btn" id="showLogingOverlay">Login</a>
            </div>
        </div>
    </div>
    <!--Sports Data Show in this overlayer -->
    <div class="overlaySport" id="sportsOverlay">
        <div class="overlaySport-content">
        <?php
        include("sports.php");
        ?>
        </div>
    </div>
    <!--Students Data Show in this overlayer -->
    <div class="overlayStudents" id="studentsOverlay">
        <div class="overlayStudents-content">
        <?php
        include("students.php");
        ?>
        </div>
    </div>
    <!--Loging overlayer -->
    <div class="overlayLoging" id="LogingOverlay">
    <div class="overlayLoging-content">
        <?php
        include("login.php");
        ?>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#showSportsOverlay').click(function() {
                $('#sportsOverlay').fadeIn(300);
            });
            $('#showStudentsOverlay').click(function() {
                $('#studentsOverlay').fadeIn(300);
            });
            $('#showLogingOverlay').click(function() {
                $('#LogingOverlay').fadeIn(300);
            });
            
            $('#closeOverlay').click(function() {
                $('#sportsOverlay').fadeOut(300);
            });
            $('#closestudentOverlay').click(function() {
                $('#studentsOverlay').fadeOut(300);
            });
            $('#closelogingOverlay').click(function() {
                $('#LogingOverlay').fadeOut(300);
            });
        });
    </script>
</body>
</html>
