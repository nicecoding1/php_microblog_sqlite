<?php
include "common.php";

$mode = $_POST['mode'];

if($mode == "write") {
    $subject = ___;
    $content = ___;
    $now = date('Y-m-d H:i:s');

    $sql = "___";
    $ret = dbexec($sql);

    if($ret) {
        alert_redir("입력 성공", "list.php");
    } else {
        alert_redir("입력 실패", "");
    }

}