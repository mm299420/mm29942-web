<?php
function ob() {
    ob_start("start");
    ob_end_flush();
}
function start() {
    echo "<head>
        <link rel='stylesheet' type='text/css' href='style.css'>
        <script src='script.js'></script>
        <script src='jquery-3.6.1.js'></script>
    </head>
    <script>
    </script>
    <div id='asciiArt'  class='asciiArt'>
        <pre>
            <p>



                   `.,:::*#####i,:::::`.`                                .;;:                                    `...,::::::::::..`
               `,*nMxxxnnn++++#nznMMWWMWMz*,`                        `,i+M##@#i.                        ``,i*+xxxMWxnznnnnnnnxMMnxMz*.`  `
             `izz*::.`` ``      `,...,;:,;nnn#+;.`                  ;xW@Mx*;#x@M*.`                  `,inMWMnzii**i,`` `   `:,....:iWWn;
            :x*.``,;*,     :*#+z#,`     ````.,+#nzi,`              i@#M;..```.:+xW,              `,iznz*i+;``       `i++#; `*W*,` .,;z@xi`
           iM: `,;::*`   .;n;,..`       :,,,, ,`::izx*;.          `x#@i``;` `;.;:x,            :+nz+:. `:,   .:`    `,:;:i``,x*.` ..``:;+:
          ,@+``.```#i    `.x.   `ii,..;i;zz,i+, .:,iiinxn;`        ;WM````  ``````         `:+xzi.`  `iz,``..,;` :ii#*`    `.#:```:,::,.``
         `z#i   .i+:`  `  ,#.  ``.,*##*;;;:```#zz+:,.i;;izx*.       i@i ,#;  `*.        `,#Wn*.    :*xn.  ;+zzz#nM+;:`      `;,``:+*;``,.`
          zM.``+z:` .;zz` ``. `;`  ``   ```` ...;#zMM;,:.:,zWn:`    i#;,`ni  .M,.,    `iMM+,`  `i#zzi,`    ``  `::  `,.`  .,;z+i,`.i;*,i.
          ;n,`#*` .#Mni.     ;n*    `;i;;:i` ;. ;i,.inWxzin#M#@M+. .M#**#Wi,nnn``;``;nWW+.`,;+z##,.``    .,*ii;.,#i,`+n,   `*x:i##`;z*i.
          `,,::``,nx:``,#;`..#,``,;*n#+*ii+i+i*xx@W.`.:``:*i#+zW@W;###n:++,,z+*. .+x@@n:.:*:,,.:: :+#+`;*n#+*+i+z+*M,`.`  `+z,.,:*z:*i
            ``i:+xn, `:xMi``.#,``,,``   :```.*M;,..` ``;xW#Wn``.,zW@##z:,,````.,,z@zi:`:,,*:.`,:``.#zz+@#.i`    `.,.   ` .iM+z:`z*+*.`
              ,`:;, `#W*` .:`++`   ` .*n+`.``.`   `,izMni,`,.i  `,;##n,.`   ` `:M@;`. ``,:`;z#*,.`: `:;.:*,`+;.`  ;;``  `;++..i**#`
               `  ;*nn:  ,M@z```   :x@n,    ` `**zMWz*i.```,;.  ;*.,i`   .   `;`;;`..:,`,,.`.;*+zn#i;`  `:;.:#@W*````  ,xWM.`.`:i`
                  ``,;  +@n,` .` `;zWz.  .i#Mnxnz.,,.`` ,::.`  `x**,`  `*n`  .z, ``;` :*;```,:::.`:*nxz+:;:*:;+zn;   `.iWi#M:;z`
                  `i:;:z@#` .x@x.``z# .#nnnz+;.`.   ` `.`     `;#;:,  ``xx` `M#i ``::,` .#;.``,`,:::,`;in#xx*n# `  `,zzW*. :zz.
                   `;*,.,` .zi.. `,nM.`i.```..   ,+i,            .n@i .;WM``:@@,    `i.,`  `,:i.`.`.:.;:` `.*z` `.,`zi`.;`*:`
                     `;:;.;xx`  i@#x:     ,W+  ii;.              z##*,;###.x@##       ``,,     .. ,`:`.M` :;;   `#xz+*, .n#.
                       ,+ni;```;@x:`    ,;M#,*z;`                ,n#W`.+:``,,;`..;.`    ,...     `.**Wz@;,.`` ```` `,,+z.`
                      `  .;+n:i#*`  `.i+,,+M`,;,`               `*#@;``  ```` ``  ``    `  `       .i@#@:`+*::;*+:.z##+,
                           `*z. ``     `,i#M`,,.                `,Wz;`   ,`.i.                   ` `##WW,i+: `:,.:.`
                              ````    :x@n;` .i#,                :M*i ,`**;.`.;`.`                  `## `;*n++,`
                                    ,nn:`  `+M#n@`              `.nx; :;:``:+;,  ,i                `#@+.   ,i+x*`
                                   ;@#`.`.,,i+*:,,               ,WW. ..`     `` `i                `@M .   `,#i+M,
                                  `M#,.+.``;z*+  `               `nM``**.    ,i.  `                .#+` ``.iiz#.*+
                                  :@W.  ,inxi`` `.                +W`    .`                        +@`  .x#,;Wi. ``
                                  .Wz .*M+,`, `  `                *@: `.in.:,`:`                   +n`  `.*nni;*``
                                   nW,#*.`.#z``  `                ##i ,i,` `i;n,   .`              #z    `;**#xx`
                                   .xM#`.iMi ..   ,              `nW. ` `;` `;:    ,.             `xW    .;:+ii.
                                    ,n@i;n, i#`. .#              `nW,   .i` `:;   ``;             +#z   ,;;##+
                                     `*Wx, **`:i i`               ##*   `:  `,`  `* ,`           `@#:,``;+x+,
                                       ,M*,i`,z`.+.i+,.`          ;#i ` `.  ```   i .:          `*#i:z,,:z*.
                                        .i::;,. +:,**xi:`         .Wn` `:+ `.``  ..  ;`      ,i##zn.#n*;.. `
                                          ,;,..         `         `n@; .,: .`    ..  `;`     i::````..
                                            .,         `,          i#*  `.           ``,,`    `...
                                                                   .Wz` ..```           ``,
                                                                    +@: ;::;`
                                                                    .Mx.`
                                                                     z@:
                                                                     :@#`
                                                                     `xW,
                                                                      ,W*`
                                                                       i@i
                                                                       `MM.
                                                                        z@:
                                                                        `i;


                                                                        `

            </p>
        </pre>
    </div>";
}
function menuWindows() {
    echo '<div class="menuWindow" id="menuW"
        <form action="all.php" method="post" class="btnClear">
                    <input type="submit" name="All Items"  value="All Items" id="BTNclear" class="btn menuBTNForms btnClear" />
                </form>
                <button class="btn menuBTNForms mobile-test" id="loginBTN" onclick="mobile-test()">mobile-test</button>
                <button class="btn menuBTNForms" id="BTNMM29942" onclick="mm29942()">mm29942</button>
                <button class="btn menuBTNForms" id="BTNAllItems" onclick="AllItems()">All Items</button>
                <button class="btn menuBTNForms" id="BTNHome" onclick="home()">Home</button>
                <button class="btn menuBTNForms" id="BTNDB" onclick="DB()">DB</button>
            </div>';
}
function menuBTN() {
    echo '<div class="menu" id="menu">
        <div class="menuBtn btn" id="MenuBTN" onclick="menu()">
            <div class="menuBtnIcon">
                <img src = "Images/menu.png" height = "180" width = "180">
            </div>
        </div>
    </div>';
}
function database_C() {

    $sql = "INSERT INTO mobile-test ".
        "(UserID, UserName, UserPasswd) ".
        "VALUES (1, 'root', 'Mm@3141');";
    try
    {
        $dbh = new PDO ("mysql:dbname=webshop; host=localhost", "webshop", "AkJ3342198873!#1337*C0D3;");
        echo "<p>Verbindung erfolgreich hergestellt.</p>";
        $dbh->query($sql);
        $error = $dbh->errorInfo();
        if ($error[0] > 0)
        {
            alert( "Fehlercode: " .$error[1]."<br>".$error[2]);
        }
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
}