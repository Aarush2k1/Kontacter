$(document).ready(function () {

    var uid, pwd;
    /*SignupBtn*/
    $("#signupBtn").click(function () {
        var query = $("#signup").serialize();
        var signupUrl = "php/signupProcess.php?" + query;
        $.get(signupUrl, function (signupRes) {
            if (signupRes == "Citizen")
                location.href = "html/HTMLdashboardCitizen.php";
            else if (signupRes == "Worker")
                location.href = "html/HTMLdashboardWorker.php";
            else
                $("#signupDisplay").html(signupRes);
        });
    });
    $("#signupEye").mousedown(function () {
        $("#pwd").attr('type', 'text');
        $(".se").removeClass("fa-eye-slash").addClass("fa-eye");
    });
    $("#signupEye").mouseup(function () {
        $("#pwd").attr('type', 'password');
        $(".se").removeClass("fa-eye").addClass("fa-eye-slash");
    });
    /*Unique id checker*/
    $("#uid").blur(function () {
        var uid = $("#uid").val();
        if (uid == "") {
            alert("User Id can't be empty");
        } else {
            var check = "php/signupUserIdChecker.php?uid=" + uid;
            $.get(check, function (checkRes) {
                if (checkRes == "Used") {
                    $("#errUid").html("Id is already in use, Use our suggestions");
                    $("#suggestions").prop('hidden', false);
                } else if (checkRes == "Free")
                    $("#errUid").html("Welcome " + uid);
            });
        }

    });

    $("#errPwd").hide();
    $("#pwd").blur(function () {
        $("#errPwd").show();
        pwd = $("#pwd").val();
        //        var regExp = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
        if (pwd.match(/[A-Z]/g)) {
            $("#capital").css('color', 'green');
            $(".ca").addClass("fa-check-circle").removeClass("fa-times-circle");
        } else {
            $("#capital").css('color', 'red');
            $(".ca").addClass("fa-times-circle").removeClass("fa-check-circle");
        }
        if (pwd.match(/[0-9]/g)) {
            $("#number").css('color', 'green');
            $(".na").addClass("fa-check-circle").removeClass("fa-times-circle");
        } else {
            $("#number").css('color', 'red');
            $(".na").addClass("fa-times-circle").removeClass("fa-check-circle");
        }
        if (pwd.match(/[!@#$%^&*]/g)) {
            $("#char").css('color', 'green');
            $(".cha").addClass("fa-check-circle").removeClass("fa-times-circle");
        } else {
            $("#char").css('color', 'red');
            $(".cha").addClass("fa-times-circle").removeClass("fa-check-circle");
        }
        if (pwd.length >= 6 && pwd.length <= 16) {
            $("#length").css('color', 'green');
            $(".la").addClass("fa-check-circle").removeClass("fa-times-circle");
        } else {
            $("#length").css('color', 'red');
            $(".la").addClass("fa-times-circle").removeClass("fa-check-circle");
        }
    });
    /*loginBtn*/
    $("#loginBtn").click(function () {
        uid = $("#loginUid").val();
        pwd = $("#loginPwd").val();
        var loginUrl = "php/loginProcess.php?uid=" + uid + "&pwd=" + pwd;
        $.get(loginUrl, function (loginRes) {
            if (loginRes == "Citizen")
                location.href = "html/HTMLdashboardCitizen.php";
            else if (loginRes == "Worker")
                location.href = "html/HTMLdashboardWorker.php";
            else
                $("#loginDisplay").html(loginRes);
        });
    });
    $("#loginEye").mousedown(function () {
        $("#loginPwd").attr('type', 'text');
        $(".le").removeClass("fa-eye-slash").addClass("fa-eye");
    });
    $("#loginEye").mouseup(function () {
        $("#loginPwd").attr('type', 'password');
        $(".le").removeClass("fa-eye").addClass("fa-eye-slash");
    });
    $("#forgotBtn").click(function () {
        uid = $("#loginUid").val();
        var url = "php/forgotPwd.php?uid=" + uid;
        $.get(url, function (pwdRes) {
            $("#forgotPwd").html(pwdRes);
        });
    });
});

function onSignIn(googleUser) {
    // Useful data for your client-side scripts:
    var profile = googleUser.getBasicProfile();
    console.log("ID: " + profile.getId());
    alert(profile.getId());
    // Don't send this directly to your server!
    console.log('Full Name: ' + profile.getName());
    console.log('Given Name: ' + profile.getGivenName());
    console.log('Family Name: ' + profile.getFamilyName());
    console.log("Image URL: " + profile.getImageUrl());
    console.log("Email: " + profile.getEmail());

    // The ID token you need to pass to your backend:
    var id_token = googleUser.getAuthResponse().id_token;
    console.log("ID Token: " + id_token);
    alert(" id token=" + id_token);
}

function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        console.log('User signed out.');
    });
}
