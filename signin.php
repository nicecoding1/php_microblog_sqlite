<?php
___;
include "common.php";

if(isset($_REQUEST['mode'])) $mode = $_REQUEST['mode'];
else $mode = "";

if($mode == "signin") {
    $id = ___;
    $pw = ___;

    $sql = "___";
    $row = dbqueryfetch($sql);

    if($row['id'] != "" && $row['pw'] == $pw) {
        //로그인 성공
        ___ = $row['id'];
        ___ = $row['name'];
        alert_redir("로그인 성공", "list.php");
    } else {
        //로그인 실패
        alert_redir("로그인 실패. 아이디와 비밀번호를 정확하게 입력해주세요!", "");
    }
} elseif($mode == "signout") {
    ___($_SESSION['login_id']);
    ___($_SESSION['login_name']);
    ___;
    alert_redir("", "list.php");
}