var script = document.createElement('script');
script.src = 'jquery-3.6.1.js';
document.getElementsByTagName('head')[0].appendChild(script);
var open = true;

function test() {
    //window.location = 'http://localhost:63342/WebShop/index.php';
        document.location = 'try.php';
}
function menu() {
        var setDisplay = document.getElementById('menuW');
        var blockingItems = document.getElementById('screen');
        var login = document.getElementById('loginDATA');
        var passwd = document.getElementById('passwd');
        var usern = document.getElementById('username');
        if( ($(window).width() > 414 ) && ($(window).height() > 896 )) {
                if (open) {
                        setDisplay.style.display = 'block';
                } else {
                        setDisplay.style.display = 'none';
                }
        } else if (($(window).width() < 1440 ) && ($(window).height() < 3088 )) {
                if (open) {
                        setDisplay.style.display = 'block';
                        blockingItems.style.display = 'none';
                        login.style.display = 'none';
                        passwd.style.display = 'none';
                        usern.style.display = 'none';
                } else if (!open) {
                        setDisplay.style.display = 'none';
                        setDisplay.style.display = 'block';
                        passwd.style.display = 'block';
                        usern.style.display = 'block';
                }
        } else {
                if (open) {
                        setDisplay.style.display = 'block';
                        blockingItems.style.display = 'none';
                        login.style.display = 'none';
                        passwd.style.display = 'none';
                        usern.style.display = 'none';
                } else if (!open) {
                        setDisplay.style.display = 'none';
                        setDisplay.style.display = 'block';
                        passwd.style.display = 'block';
                        usern.style.display = 'block';
                }
        }
        open = !open;
}
function home() {
        window.location.assign("index.php");
}
function login() {
        window.location.assign("login.php");
        let form = document.getElementById("loginBTN");
        form.submit();
}
function signup() {
        window.location.assign("login.php");
        let form = document.getElementById("loginBTN");
        form.submit();
}
function mm29942() {
        window.location.assign("mm29942.com/index.php");
}
function AllItems() {
        window.location.assign("all.php");
        //window.open("all.php");
}
$(document).ready(function() {
        $("loginBTN").on("submit", function(event) {
                $.ajax({
                        type: 'POST',
                        url: 'login/login.php',
                        data: $( this ).serialize(),
                        //data : { username : "username", passwd : "password" },
                        success: function(data) {

                        }
                });
        });
});
function start() {
        var body = document.getElementById("body")
        body.style.display = 'inline-block';
        document.getElementById('asciiArt').style.display = 'none';
}
function DB() {
        window.location.assign("/db.php");
}