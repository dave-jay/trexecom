
<?php include _PATH . "instance/front/tpl/libValidate.php" ?>
<script>
    $(document).ready(function () {
//        alert("S");
    });
    function submit() {
        $.ajax({
            url: '<?php echo _U ?>apiTest',
            dataType: "json",
//            type: 'post',

            data: {
                SearchData: 1,
                txtDomains: $("#txtdomain").val()
            }, success: function (r) {
                if (r.error == "") {
                    $("#MSG").text("This Domain Is Valid");
                    $("#txtdomain").css("background-color", "#FFFFFF");
                    $("#MSG").css("color", "black");
                } else {
                    $("#MSG").text("This Domain Is Already Exist");
                    $("#MSG").css("color", "red");
                    $("#txtdomain").focus();
                    $("#txtdomain").css("background-color", "#FFDBDB");
                }
            }
        });
//        alert($("#txtdomain").val());
    }

</script>
