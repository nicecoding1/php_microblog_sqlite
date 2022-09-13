<?php

$db = new SQLite3('microblog.db');
function dbexec($sql) {
	global $db;
	$ret = $db->exec($sql);
    return $ret;
}

function dbquery($sql) {
	global $db;
	$res = $db->query($sql);
    return $res;
}

function dbfetch($res) {
	$row = $res->fetchArray();
	return $row;
}

function dbqueryfetch($sql) {
	global $db;
	$res = $db->query($sql);
	$row = $res->fetchArray();
	return $row;
}

function alert_redir($msg, $url) {
	$msg = str_replace("\n", "\\n", $msg);
	echo("<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">");
	echo("<script>\n");
	if($msg) echo("alert(\"$msg\");\n");
	if($url) echo("window.location='$url';\n");
	else echo("history.back();\n");
	echo("</script>\n");
	exit;
}

?>