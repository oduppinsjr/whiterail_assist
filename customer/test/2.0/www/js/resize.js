window.addEventListener('message', function(message) {
    if (message.data.resizeMe) {
        document.getElementsByClassName('text-frame')[0].height =
            message.data.resizeMe + "px";
    }
});