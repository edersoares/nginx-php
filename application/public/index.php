<?php

$ip = $_SERVER['REMOTE_ADDR'];

echo sprintf('PHP Version %s', phpversion());
echo '<br>';
echo $ip;