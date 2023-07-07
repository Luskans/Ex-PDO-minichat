let connected = false;

document.addEventListener('DOMContentLoaded', function() {
    console.log(connected);
    let urlParam = new URLSearchParams(window.location.search);
    if (urlParam.has('success1')) {
        signinAlert.click();
    } else if (urlParam.has('success2')) {
        loginAlert.click();
        connected = true;
    } else if (urlParam.has('disconnected')) {
        logoutAlert.click();
        connected = false;
    }
});