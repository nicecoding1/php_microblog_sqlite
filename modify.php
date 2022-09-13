<?php
include "common.php";

$mode = $_POST['mode'];

if($mode == "modify") {
    $no = ___;
    $subject = ___;
    $content = ___;

    $sql = "___";
    $ret = dbexec($sql);

    if($ret) {
        alert_redir("수정 성공", "view.php?no=$no");
    } else {
        alert_redir("수정 실패", "");
    }

}