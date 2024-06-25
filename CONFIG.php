<?php
$ZONE = "";
$NS = "";
// 1 = Yes // 0 = No
$USEKEY = "0";
// Leave this blank if you don't use a TSIG KEY
$TSIG_PATH = "";
// DIG PATH (/usr/bin/dig)
$DIG_PATH = "/usr/bin/dig";
// (Default is +notls ) "BIND >9.18 +tls or +https or "-p 9999"
$DIGEXT = "";
// NSUPDATE COMMAND (/usr/bin/nsupdate -v or /usr/bin/nsupdate -v -D -k $TSIG_PATH)
$NSUPDATE_CMD = "/usr/bin/nsupdate -v -D -k $TSIG_PATH";
?>
