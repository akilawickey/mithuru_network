<?php

require 'corei.inc.php';




session_destroy();

header('Location: '.$http_referer);












?>