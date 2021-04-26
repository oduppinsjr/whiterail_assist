window.addEventListener('message', function(message) {
    if (message.origin !== "https://roadrunner-dot-regal-sled-246521.uc.r.appspot.com")
        return;
    else if (message.data.resizeMe) {
        document.getElementsByClassName('text-frame')[0].height = message.data.resizeMe + "px";
        //console.log("text-frame:" + message.data.resizeMe + "px");
    } else {
        console.log(message.data);
    }
});