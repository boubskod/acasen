<?php



function setmessage($msg, $type="success"){
    if ($msg) {
        $_SESSION["msg"]["content"] = $msg;
        $_SESSION["msg"]["type"] = $type;
    }
}