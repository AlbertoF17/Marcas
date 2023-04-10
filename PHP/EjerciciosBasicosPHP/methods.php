<?php
function getVar($var, $def=0) {
    return isset($_GET[$var]) ? $_GET[$var] : $def;
}
?>
