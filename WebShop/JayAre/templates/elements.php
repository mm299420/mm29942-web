<?php
function menuWindows() {
echo '<div class="menuWindow" id="menuW"
<form action="all.php" method="post" class="btnClear">
    <input type="submit" name="All Items"  value="All Items" id="BTNclear" class="btn menuBTNForms btnClear" />
</form>
<button class="btn menuBTNForms" id="btnHome" onclick="Home()">Home</button>
<button class="btn menuBTNForms" id="btnAboutMe" onclick="AboutMe()">About me</button>
<button class="btn menuBTNForms" id="btnContact" onclick="contact()">Contact</button>
<button class="btn menuBTNForms" id="btnReference" onclick="reference()">Reference</button>
<button class="btn menuBTNForms" id="btnPress" onclick="press()">Press</button>
</div>';
}
function menuBTN() {
echo '<div class="menu" id="menu">
    <div class="menuBtn btn" id="MenuBTN" onclick="menu()">
        <div class="menuBtnIcon">
            <img src="Images/menu.png" height="70" width="70">
        </div>
    </div>
</div>';
}