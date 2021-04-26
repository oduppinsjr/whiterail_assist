// Js start for the Widget
$(document).ready(function() {
    $(".act-widget-box").click(function() {
        $(".act-widget-btnText").toggleClass("dp-none");
        $(".act-widget-btnclose").toggleClass("dp-block");
        $(".main-widget-box").toggleClass("widget-box-block");
        var isOpen = document.getElementsByClassName('widget-box-block');
        if (isOpen.length > 0) {
            window.parent.postMessage({ resizeMe: 560 }, "https://abrams.ca");
        } else {
            window.parent.postMessage({ resizeMe: 100 }, "https://abrams.ca");
        }
    });
    $(".tp-close-btn").click(function() {
        $(".act-widget-btnText").toggleClass("dp-none");
        $(".act-widget-btnclose").toggleClass("dp-block");
        $(".main-widget-box").toggleClass("widget-box-block");
        window.parent.postMessage({ resizeMe: 100 }, "https://abrams.ca");
    });
    $(".ctt-btn").click(function() {
        $(".Car-Truck-Towing").toggleClass("dp-block");
        $(".slt-box").toggleClass("dp-none");
    });
    $(".hdt-btn").click(function() {
        $(".Heavy-Duty-Towing").toggleClass("dp-block");
        $(".slt-box").toggleClass("dp-none");
    });
    $(".ra-btn").click(function() {
        $(".Roadside-Assistance").toggleClass("dp-block");
        $(".slt-box").toggleClass("dp-none");
    });
    $(".back-btn").click(function() {
        $(".Car-Truck-Towing").removeClass("dp-block");
        $(".Heavy-Duty-Towing").removeClass("dp-block");
        $(".Roadside-Assistance").removeClass("dp-block");
        $(".slt-box").removeClass("dp-none");
        $(".form-message").html("");
        $(".input-box").val("");
        $("#ctt-name-error").html("");
        $("#ctt-number-error").html("");
        $("#ctt-message-error").html("");

        $("#hdt-name-error").html("");
        $("#hdt-number-error").html("");
        $("#hdt-message-error").html("");

        $("#ra-name-error").html("");
        $("#ra-number-error").html("");
        $("#ra-message-error").html("");

    });
    $(".btn-Submit").click(function() {
        $(".form-message").html("");
    });
    // Validation start for the Widget
    $("#ctt-submit-btn").click(function() {
        var name = $("#ctt-name").val();
        var number = $("#ctt-number").val();
        var message = $("#ctt-message").val();
        var lnth = number.length;
        if (name == "") {
            $("#ctt-name-error").html("Please enter your name");
            return false;
        }
        if (number == "") {
            $("#ctt-number-error").html("Please enter your number");
            return false;
        }
        if (message == "") {
            $("#ctt-message-error").html("Please enter your message");
            return false;
        }
        if (lnth < 10) {
            $("#ctt-number-error").html("Please enter your 10 digit number");
            return false;
        }
    });
    $("#hdt-submit-btn").click(function() {
        var name = $("#hdt-name").val();
        var number = $("#hdt-number").val();
        var message = $("#hdt-message").val();
        var lnth = number.length;
        if (name == "") {
            $("#hdt-name-error").html("Please enter your name");
            return false;
        }
        if (number == "") {
            $("#hdt-number-error").html("Please enter your number");
            return false;
        }
        if (message == "") {
            $("#hdt-message-error").html("Please enter your message");
            return false;
        }
        if (lnth < 10) {
            $("#hdt-number-error").html("Please enter your 10 digit number");
            return false;
        }
    });
    $("#ra-submit-btn").click(function() {
        var name = $("#ra-name").val();
        var number = $("#ra-number").val();
        var message = $("#ra-message").val();
        var lnth = number.length;
        if (name == "") {
            $("#ra-name-error").html("Please enter your name");
            return false;
        }
        if (number == "") {
            $("#ra-number-error").html("Please enter your number");
            return false;
        }
        if (message == "") {
            $("#ra-message-error").html("Please enter your message");
            return false;
        }
        if (lnth < 10) {
            $("#ra-number-error").html("Please enter your 10 digit number");
            return false;
        }
    });

    // Validation end for the Widget
});


// Validation function for the Widget
function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    if (!(/[0-9]/.test(ch))) {
        evt.preventDefault();
    }
};
// Js end for the Widget