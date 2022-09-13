<?php
include "common.php";

$mode = $_POST['mode'];

if($mode == "signup") {
    $id = ___;
    $pw = ___;
    $name = ___;
    $now = ___;

    $sql = "___";
    $ret = dbexec($sql);

    if($ret) {
        alert_redir("회원가입이 정상적으로 처리되었습니다.", "signin_form.php");
    } else {
        alert_redir("회원가입 오류 발생! 다시 시도해주세요.", "");
    }

}