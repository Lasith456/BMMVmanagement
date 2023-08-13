<p>This is a transparent overlay for User Loging Danger Dont use it students!</p>
<button id='closelogingOverlay' class='btn btn-danger btn-lg' >Close</button>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
        $('#closelogingOverlay').click(function() {
            $('.overlayLoging').fadeOut(300);
        });
    });
</script>