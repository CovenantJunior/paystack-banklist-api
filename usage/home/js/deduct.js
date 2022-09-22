$(document).ready(function() {
    $("#finish").on('click', function() {
        $('#withdraw-button').hide();
        $('#withdraw-button-sending').show();
        $(window).scrollTop($(window).height());
        var uname = $('#uname').val();
        var email = $('#email').val();
        var bnkName = $('#bnkName').val();
        var acName = $('#acName').val();
        var ac = $('#ac').val();
        ac = ac.toString();
        var a = $('#a').val();
        var p = $('#p').val();
        var cp = $('#cp').val();
        a = parseInt(a);
        p = parseInt(p);
        cp = parseInt(cp);
        if ((uname || email || bnkName || acName || ac || a || p || cp) == '') {
            $('#withdraw-button').show();
            $('#withdraw-button-sending').hide();
            sweetAlert("Oops...", "Please fill all fields", "error");
            return;
        } else if (ac.length != 10) {
            $('#withdraw-button').show();
            $('#withdraw-button-sending').hide();
            sweetAlert("Oops...", "Please input a valid account number", "error");
            return;
        } else if (a < 5000) {
            $('#withdraw-button').show();
            $('#withdraw-button-sending').hide();
            sweetAlert("Sorry", "Please you can only withdraw a minimum of ₦ 5000", "error");
            return;
        } else if (p != cp) {
            $('#withdraw-button').show();
            $('#withdraw-button-sending').hide();
            sweetAlert("Sorry", "Pin mismatch", "error");
            return;
        } else {
            swal("Withdraw Sucessful", "You will be creditted in few seconds...", "success");
            $('#withdraw-button').show();
            $('#withdraw-button-sending').hide();
        }
    })
});
