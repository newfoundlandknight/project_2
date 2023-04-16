
<pre>
if ( isset($_SESSION["test_2"])){echo "set";}
if ( ($_SESSION["test_2"])== true ){echo "true";}
if ( ($_SESSION["test_2"])== false ){echo "false";}
if ( !isset($_SESSION["test_2"])){echo "!set";}
if ( ($_SESSION["test_2"])!== true ){echo "!true";}
if ( ($_SESSION["test_2"])!== false ){echo "!false";}

if ( !isset($_SESSION["test_2"]) || $_SESSION["test_2"] !== true ) {  echo "!set||!true"; }
if ( !isset($_SESSION["test_2"]) || $_SESSION["test_2"] == true ) {  echo "!set||true"; }
if ( isset($_SESSION["test_2"]) || $_SESSION["test_2"] !== true ) {  echo "set||!true"; }
if ( isset($_SESSION["test_2"]) || $_SESSION["test_2"] == true ) {  echo "set||true"; }
if ( !isset($_SESSION["test_2"]) && $_SESSION["test_2"] !== true ) {  echo "!set && !true"; }
if ( !isset($_SESSION["test_2"]) && $_SESSION["test_2"] == true ) {  echo "!set && true"; }
if ( isset($_SESSION["test_2"]) && $_SESSION["test_2"] !== true ) {  echo "set && !true"; }
if ( isset($_SESSION["test_2"]) && $_SESSION["test_2"] == true ) {  echo "set && true"; }
</pre>
<?php 

error_reporting(0);

$_SESSION["test_2"]=true; //echo $_SESSION["test_2"];
if ( isset($_SESSION["test_2"])   ) {  echo "set<br>"; } else {echo"not set<br>";}
if ( $_SESSION["test_2"] == ""  ) {  echo "empty<br>"; } else {echo"not empty<br>";}
$_SESSION["test_2"]=false;//echo $_SESSION["test_2"];
if ( isset($_SESSION["test_2"])   ) {  echo "set<br>"; } else {echo"not set<br>";}
if ( $_SESSION["test_2"] == ""  ) {  echo "empty<br>"; } else {echo"not empty<br>";}
echo "<br><br>";
$_SESSION["test_2"]=true;
test("true");echo "<br>";
$_SESSION["test_2"]=false;
test("false");echo "<br>";
unset($_SESSION['test_2']);
test("unset");echo "<br>";





function test($cond) {
    echo '<b>$_SESSION["test_2"]=' . $cond. "</b><br>";
if ( isset($_SESSION["test_2"])){echo "set<br>";}
if ( ($_SESSION["test_2"])== true ){echo "true<br>";}
if ( ($_SESSION["test_2"])== false ){echo "false<br>";}

if (!isset($_SESSION["test_2"])){echo "!set<br>";}
if ( ($_SESSION["test_2"])!== true ){echo "!true<br>";}
if ( ($_SESSION["test_2"])!== false ){echo "!false<br>";}

if ( !isset($_SESSION["test_2"]) || $_SESSION["test_2"] !== true ) {  echo "!set || !true<br>"; }
if ( !isset($_SESSION["test_2"]) || $_SESSION["test_2"] == true ) {  echo "!set || true<br>"; }

if ( isset($_SESSION["test_2"]) || $_SESSION["test_2"] !== true ) {  echo "set || !true<br>"; }
if ( isset($_SESSION["test_2"]) || $_SESSION["test_2"] == true ) {  echo "set || true<br>"; }

if ( !isset($_SESSION["test_2"]) && $_SESSION["test_2"] !== true ) {  echo "!set && !true<br>"; }
if ( !isset($_SESSION["test_2"]) && $_SESSION["test_2"] == true ) {  echo "!set && true<br>"; }

if ( isset($_SESSION["test_2"]) && $_SESSION["test_2"] !== true ) {  echo "set && !true<br>"; }
if ( isset($_SESSION["test_2"]) && $_SESSION["test_2"] == true ) {  echo "set && true<br>"; }

}
?>


