var parent_url = "https://roadrunnerwreckerservice.com"

// Js start for the Widget
$(document).ready(function() {
    $(".act-widget-box").click(function() {
        $(".act-widget-btnText").toggleClass("dp-none");
        $(".act-widget-btnclose").toggleClass("dp-block");
        $(".main-widget-box").toggleClass("widget-box-block");
        var isOpen = document.getElementsByClassName('widget-box-block');
        if (isOpen.length > 0) {
            setHeight(750)
        } else {
            setHeight(80);
            setModal("none");
        }
    });
    $(".tp-close-btn").click(function() {
        $(".act-widget-btnText").toggleClass("dp-none");
        $(".act-widget-btnclose").toggleClass("dp-block");
        $(".main-widget-box").toggleClass("widget-box-block");
        $(".form-message").html("");
        $("#ctt-name-error").html("");
        $("#ctt-number-error").html("");
        $("#ctt-message-error").html("");
        setHeight(80);
        setModal("none");
    });
    $(".ctt-btn").click(function() {
        $(".Car-Truck-Towing").toggleClass("dp-block");
        $(".slt-box").toggleClass("dp-none");
    });
    $(".btn-Submit").click(function() {
        $(".form-message").html("");
        $("#ctt-name-error").html("");
        $("#ctt-number-error").html("");
        $("#ctt-message-error").html("");
    });
    // Validation start for the Widget
    $("#ctt-submit-btn").click(function() {
        var name = $("#ctt-name").val();
        var number = $("#ctt-number").val();
        var message = $("#ctt-message").val();
        var lnth = number.length;
        if (name == "") {
            $("#ctt-name-error").html("Please enter your name");
        }
        if (number == "") {
            $("#ctt-number-error").html("Please enter your number");
        }
        if (message == "") {
            $("#ctt-message-error").html("Please enter your message");
        }
        if (lnth < 10) {
            $("#ctt-number-error").html("Please enter your 10 digit number");
        }
        if (name == "" || number == "" || message == "" || lnth < 10) {
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

// Send height of Widget to parent
function setHeight(size) {
    window.parent.postMessage({ resizeMe: size }, parent_url);
};

// Send Modal display to parent
function setModal(display) {
    window.parent.postMessage({ modal: display }, parent_url);
};

// Listen for message from parent
//console.log("listening for message..");
// window.addEventListener('message', function(message) {
//     if (message.origin !== parent_url)
//         return;
//     else if (message.data.isModal) {
//         console.log("isModal:" + message.data.isModal);
//     }
//     console.log("isModal:" + message.data.isModal);
// });