
$(function() {
    $("#sms").on("input propertychange", function(event) {
        var curLength = $(this).val().replace(/\r(?!\n)|\n(?!\r)/g, "\r\n").length;
        $("#counter").html(curLength);
        countSms();
    });

    $("#latin").on("input propertychange", function () {
        if(this.checked != true){
            $("#sms").val($("#log").html());
            $("#log").html("");
            countSms();
        } else {
            $("#log").html($("#sms").val());
            rusLat($("#sms").val());
            countSms();
        }
    });

    $("form").submit(function(){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            }
        };
        xmlhttp.open("POST", "/save");
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
        xmlhttp.send("sms=" + $("#sms").val() + "&phone=" + $("#phone").val() + "&amount=" + $("#smsCounter").html());
    });
});

function isCyrillic(message)
{
    return /[а-я]/i.test(message);
}

function countSms() {

    var curLength = $("#counter").html();
    var countSms;
    if ($('#latin').prop('checked') || !isCyrillic($("#sms").val())) {
        if (curLength < 160) {
            countSms = 1;
        } else {
            countSms = Math.ceil(curLength / 153);
        }
    } else {
        if (curLength < 70) {
            countSms = 1;
        } else {
            countSms = Math.ceil(curLength / 67);
        }
    }

    $("#smsCounter").html(countSms);
    $("#counter").html(curLength);
}

function rusLat(str) {

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            $("#sms").val( this.responseText)
        }
    };
    xmlhttp.open("POST", "/ruslat");
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
    xmlhttp.send("sms=" + str);
}

