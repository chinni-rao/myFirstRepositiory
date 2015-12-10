<?php
print "<pre>";
print_r($_SERVER);
print "</pre><br><br>";
print "<pre>";
print_r($_REQUEST);
print "</pre>";
//print "<pre><br><br>";
//print_r($_SERVER);
//print "</pre>";
//added comment
print "refer = ".$_SERVER['HTTP_REFERER']."<br>";
print "ok in test.php\n";

 phpinfo();

?>
