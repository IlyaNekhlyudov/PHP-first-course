<?php 

function hashPasswd($password) {
    return md5($password . 'sample');
}

?>