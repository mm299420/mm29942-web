<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Projekte</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="buttonSTYLE.css">
    <link rel="icon" href="IMG/cicada.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        function Cookie() {
            var accept = document.getElementById('btnCookie');
            var menage = document.getElementById('btnCookieMenage');
            var decline = document.getElementById('btnCookieDecline');


            document.getElementById('box').style.display = 'none';
            document.getElementById('html').style.opacity = '1';
            document.getElementById('html').style.colorScheme = 'none!important';
            document.getElementById('html::-webkit-scrollbar').style.backgroundColor = 'none!important';
            document.getElementById('html::-webkit-scrollbar-thumb').style.backgroundColor = 'none!important';
            document.getElementById('html::-webkit-scrollbar-corner').style.backgroundColor = 'none!important';
            document.getElementById('html::-moz-selection').style.backgroundColor = 'none!important';
            document.getElementById('body').style.backgroundImage = 'url(IMG/2377499.jpg)';

            for (var link of document.querySelectorAll("link[rel=stylesheet]")) link.href = link.href.replace(style.css, "?" + Date.now())


        }

        function CookieM() {
            var text = document.getElementById('cookieText');
            var menage = document.getElementById('btnCookieMenage');
            var decline = document.getElementById('btnCookieDecline');
            var btn = document.getElementsByClassName('btnCookie');


            btn.style.bottom = '2%';
            menage.style.display = 'none';
            text.style.display = 'none';
            decline.style.display = 'inline';
        }
        function CookieD() {
            var accept = document.getElementById('btnCookie');
            var menage = document.getElementById('btnCookieMenage');
            var decline = document.getElementById('btnCookieDecline');
            document.getElementById('box').style.display = 'none';
            document.getElementById('html').style.opacity = '1';
            document.getElementById('html').style.colorScheme = 'none';
            document.getElementById('html::-webkit-scrollbar').style.backgroundColor = 'none';
            document.getElementById('html::-webkit-scrollbar-thumb').style.backgroundColor = 'none';
            document.getElementById('html::-webkit-scrollbar-corner').style.backgroundColor = 'none';
            document.getElementById('html::-moz-selection').style.backgroundColor = 'none';
        }

        function CShow2() {
            document.getElementById('btnMH').style.display = 'inline';
            document.getElementById('btnMS').style.display = 'none';
            document.getElementById('menu').style.visibility = 'visible';

            if (window.innerWidth > 600) {
                document.getElementById('logo').style.visibility = 'hidden';
            }
        }

        function CHide2() {
            document.getElementById('btnMH').style.display = 'none';
            document.getElementById('btnMS').style.display = 'inline';
            document.getElementById('menu').style.visibility = 'hidden';

           if (window.innerWidth > 600)  {
                document.getElementById('logo').style.visibility = 'visible';
            }

        }
    </script>

</head>

<body id="body">
<div id="html">
    <div id="img">
        <img src="test/IMG/flat-design-color-chart-mobile.png" title="color chart" id="colorIMG">
        <img src="test/IMG/flat-design-color-chart.png" title="color chart" id="colorIMG2">
        <form>
            <input id="btnC2" class="btn" onclick="CHide()" type="button" value="Verstecken" />
        </form>
    </div>
    <div id="all">
        <div id="front">
            <h1>Projekte</h1>
            <h3>News: </h3>
        </div>

        <div class="containerLB">
            <div class="head">
                <div class="head" id="headRC">
                    <h3>Programmierhilfe</h3>
                </div>
                <div class="head" id="headLC">
                    <h3>Schulprojekte</h3>
                </div>
            </div>

            <div class="proposal">
                <div class="pBTN">
                    <form action="../OLD/mobile/index.html">
                        <input class="proposalBTN btn" type="submit" value="C#" />
                    </form>
                </div>
            </div>
            <div class="schulprojekte">
                <div class="projects">
                    <h4>HTML Projekte:</h4>
                    <form action="test/impressum/index.html">
                        <input class="proposalBTN btn proposalBTN2 btn2" type="submit" value="Impressum" />
                    </form>
                    <form action="test/Aufgaben/Übung/Übung_WIBU_Seite/index.html">
                        <input class="proposalBTN btn proposalBTN2 btn2" type="submit" value="Prüfungsvorbereitung" />
                    </form>
                </div>
            </div>
        </div>

        <img id="logo" src="test/IMG/LOGO.png" title="logo" height="700" width="auto">
        <div id="menu">
            <h4>MENU</h4>
            <div id="btnMM">
                <form action="PresentationWIBU/index.html">
                    <input class="menuBTN btn" type="submit" value="WIBU" />
                </form>
                <form action="ProgrammingHelp/index.html">
                    <input class="menuBTN btn" type="submit" value="Form" />
                </form>
                <form action="Pizza/index.html">
                    <input class="menuBTN btn" type="submit" value="Pizza" />
                </form>
            </div>
        </div>


    </div>
    <div id="back">
        <form>
            <input id="btnMS" class="btn btnMENU" onclick="CShow2()" type="button" value="Menu" />
        </form>
        <form>
            <input id="btnMH" class="btn btnMENU" onclick="CHide2()" type="button" value="Hide Menu" />
        </form>
        <form action="ColorChart/">
            <input class="btn" id="btnCS1" type="submit" value="ColorCodes" />
        </form>
    </div>
</div>

</body>


