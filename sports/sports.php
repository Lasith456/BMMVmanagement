<p>This is a transparent overlay for sports</p>
<button id='closeOverlay' class='btn btn-danger btn-lg' >Close</button>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
        $('#closeOverlay').click(function() {
                $('#sportsOverlay').fadeOut(300);
            });
    });
</script>