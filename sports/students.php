<?php
    include("db.php"); // Include db.php file to connect to the DB
?>

<p>Student Average and Place in School life</p>

<form method="POST" action="data.php">
    <label for="Index">IndexNO:</label>
    <input type="text" id="search" name="search">
    <br>
    <button type="submit" class='btn btn-success btn-md'>Search</button>
</form>


<button id='closestudentOverlay' class='btn btn-danger btn-md btn-close-overlay'>Close</button>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function () {

        $('#closestudentOverlay').click(function () {
            $('.overlayStudents').fadeOut(300);
        });
    });
</script>
