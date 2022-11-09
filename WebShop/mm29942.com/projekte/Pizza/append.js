<script>
    var $UserForm = $( "#UserForm" ),
    str = "<form>\n" +
    "            <form id=\"user1\">\n" +
        "                <br /><br /><label for=\"name\"> Name*: </label>\n" +
    "                <input type=\"reciver\" placeholder=\"Max Mustermann\" id=\"name\">\n" +
    "\n" +
    "                <br /><label for=\"payed\"> Gezahlt*: </label>\n" +
"                <input type=\"number\" placeholder=\"Max Mustermann\" id=\"payed\"><br /><br />\n" +
"            </form>\n" +
"\n" +
"            <br/><br/><input id=\"btnU\" class=\"btn btnG\" onclick=\"user()\" type=\"button\" value=\"Bestätigen\">\n" +
"        </form>",
    html = $.parseHTML( str ),
    nodeNames = [];

// Append the parsed HTML
$UserForm.append( html );

// Gather the parsed HTML's node names
$.each( html, function( i, el ) {
    nodeNames[ i ] = "<li>" + el.nodeName + "</li>";
})
// Insert the node names
/*$UserForm.append( "<h3>Node Names:</h3>" );
$( "<ol></ol>" )
    .append( nodeNames.join( "" ) )
    .appendTo( $UserForm );*/
</script>