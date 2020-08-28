$("#edit").click(function () {
    $("#picUpload").click();
});
$("#cardedit").click(function () {
    $("#cardUpload").click();
});
$(document).ajaxStart(function () {
    $("#wait").show();
});
$(document).ajaxStop(function () {
    $("#wait").hide();
});

function picPrev(pic) {
    if (pic.files && pic.files[0]) {
        var reader = new FileReader();
        reader.onload = function (prev) {
            $("#picShow").attr('src', prev.target.result);
        }
        reader.readAsDataURL(pic.files[0]);
    }
}

function cardPrev(pic) {
    if (pic.files && pic.files[0]) {
        var reader = new FileReader();
        reader.onload = function (prev) {
            $("#cardShow").attr('src', prev.target.result);
        }
        reader.readAsDataURL(pic.files[0]);
    }
}
$("#uid").blur(function () {
    var uid = $("#uid").val();
    var url = "../php/Worker-profileCheckUid.php?uid=" + uid;
    $.get(url, function (uidRes) {
        $("#errUid").html(uidRes);
    });
});
$("#mobile").blur(function () {
    var mob = $("#mobile").val();
    var regMob = /^\(?([0-9]{2})\)?[-. ]?([0-9]{2})[-. ]?([0-9]{3})$/;
    if (regMob.val(mob))
        $("#errMob").html("Valid");
    else $("#errMob").html("InValid");
});
/*-=-=-=-=Fetch-=-=-Profile=-=-=-=-=-=-=*/
$("#fetchBtn").click(function () {
    var uid = $("#uid").val();
    var url = "../php/Worker-profileJSON.php?uid=" + uid;
    $.getJSON(url, function (jsonAryRes) {
        alert(JSON.stringify(jsonAryRes));
        if (jsonAryRes.length == 0)
            alert("Invalid ID");
        else {
            $("#email").val(jsonAryRes[0].email);
            $("#username").val(jsonAryRes[0].name);
            $("#mobile").val(jsonAryRes[0].mobile);
            $("#firm").val(jsonAryRes[0].firm);
            $("#address").val(jsonAryRes[0].address);
            var pos = state_arr.indexOf(jsonAryRes[0].stat);
            $("#state").val(jsonAryRes[0].stat);
            print_city('city', pos + 1);
            $("#pin").val(jsonAryRes[0].pin);
            $("#category").val(jsonAryRes[0].category);
            $("#specs").val(jsonAryRes[0].specs);
            $("#exp").val(jsonAryRes[0].exp);
            $("#bio").val(jsonAryRes[0].bio);
            $("#picShow").attr("src", "../php/Worker-profile/" + jsonAryRes[0].aadharPic);
            $("#cardShow").attr("src", "../php/Worker-profile/" + jsonAryRes[0].profilePic);
            $("#hdn").val(jsonAryRes[0].profilePic);
            $("#cardhdn").val(jsonAryRes[0].aadharPic);
        }
    });
});
