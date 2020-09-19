<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#check").click(function () {
            if ($(this).is(":checked")) {
                $("#peradd").hide();
            } else {
                $("#peradd").show();
            }
        });
    });
</script>