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
function Home() {
    window.location.assign("index.php");
}
function contact() {
    window.location.assign("redirects/contact.php");
}
function reference() {
    window.location.assign("redirects/reference.php");
}
function press() {
    window.location.assign("redirects/press.php");
}
function AboutMe() {
    window.location.assign("aboutme.php");
}