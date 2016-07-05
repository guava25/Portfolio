function nameCheck(name){
    if (name = null) {
        return name = "Visitor";
    }
    /*else if (name = "Maybe your name") {
        return name = "Visitor";
    }*/
    else {
    }
    document.getElementById("personalize").innerHTML = name;
}
var name;
name = window.prompt("To allow a more personalized visit, please enter a callsign");
document.write("<?php session_start(); $_SESSION['USER'] ='" + name + "';");
nameCheck(name);