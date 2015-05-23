<?php

$time = time();

setcookie('username', 'George', $time + 1000);


setcookie('username', 'George', $time - 1000);
?>
