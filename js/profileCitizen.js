function picPrev(pic) {
    if (pic.files && pic.files[0]) {
        var reader = new FileReader();
        reader.onload = function (prev) {
            $("#picShow").attr('src', prev.target.result);
        }
        reader.readAsDataURL(pic.files[0]);
    }
}
$("#edit").click(function () {
    $("#picUpload").click();
});

$(document).ajaxStart(function () {
    $("#wait").show();
});
$(document).ajaxStop(function () {
    $("#wait").hide();
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
    var url = "../php/Citizen-profileJSON.php?uid=" + uid;
    $.getJSON(url, function (jsonAryRes) {
        if (jsonAryRes.length == 0)
            alert("Invalid ID");
        else {
            $("#email").val(jsonAryRes[0].email);
            $("#username").val(jsonAryRes[0].name);
            $("#mobile").val(jsonAryRes[0].mobile);
            $("#address").val(jsonAryRes[0].address);
            var pos = state_arr.indexOf(jsonAryRes[0].stat);
            $("#state").val(jsonAryRes[0].stat);
            print_city('city', (pos + 1));
            $("#city").val(jsonAryRes[0].city);
            $("#picShow").attr("src", "../php/Citizen-ProfilePics/" + jsonAryRes[0].pic);
            $("#hdn").val(jsonAryRes[0].pic);
        }
    });
});
