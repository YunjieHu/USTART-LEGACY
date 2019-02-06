function showBasicSettings() {
    hideAllSettings();
    document.getElementById("form-basic-settings").style.display = "block";
    return true;
}
function showOtherSettings() {
    hideAllSettings();
    document.getElementById("form-other-settings").style.display = "block";
    return true;
}
function hideAllSettings() {
    document.getElementById("form-basic-settings").style.display = "none";
    document.getElementById("form-other-settings").style.display = "none";
}