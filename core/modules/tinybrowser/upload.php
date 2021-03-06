<?php
(!empty($_GET['configFile']) && file_exists($_GET['configFile'])) ? require_once($_GET['configFile']) : die('Not received param of name require the configuration file or the file does not exist!');

if(!$tinybrowser['allowupload']) die(TB_UPDENIED);

// put config file for uploads
@file_put_contents('upload_conf_file.php', "<?php define('SDG', true);require_once '" . $_GET['configFile'] . "';");

// Assign get variables
//$typenow = isset($_GET['type']) ? $_GET['type'] : 'image';
if (!empty($_GET['type']) && array_key_exists($_GET['type'], $tinybrowser['path'])) {
    $typenow = $_GET['type'];
} else {
    $typenow = 'image';
}

$foldernow = isset($_REQUEST['folder']) ? urldecode($_REQUEST['folder']) : '';
$passfolder = '&folder='.urlencode($foldernow);

// Assign upload path
$uploadpath = urlencode($tinybrowser['path'][$typenow].$foldernow);

// Assign directory structure to array
$uploaddirs=array();
dirtree($uploaddirs,$tinybrowser['docroot'],$tinybrowser['path'][$typenow],$tinybrowser['extFilesGlob'][$typenow]);

// determine file dialog file types
switch ($_GET['type']) {
	case 'image': $filestr = TB_TYPEIMG; break;
	case 'media': $filestr = TB_TYPEMEDIA; break;
	case 'file': $filestr = TB_TYPEFILE; break;
}
$fileexts = str_replace(",",";",$tinybrowser['filetype'][$_GET['type']]);
$filelist = $filestr.' ('.$tinybrowser['filetype'][$_GET['type']].')';

// Initalise alert array
$notify = array(
	'type' => array(),
	'message' => array()
);
$goodqty = isset($_GET['goodfiles']) ? $_GET['goodfiles'] : 0;
$badqty = isset($_GET['badfiles']) ? $_GET['badfiles'] : 0;
$dupqty = isset($_GET['dupfiles']) ? $_GET['dupfiles'] : 0;

if($goodqty>0) {
	$notify['type'][]='success';
	$notify['message'][]=sprintf(TB_MSGUPGOOD, $goodqty);
} if($badqty>0) {
	$notify['type'][]='failure';
	$notify['message'][]=sprintf(TB_MSGUPBAD, $badqty);
} if($dupqty>0) {
	$notify['type'][]='failure';
	$notify['message'][]=sprintf(TB_MSGUPDUP, $dupqty);
} if(isset($_GET['permerror'])) {
	$notify['type'][]='failure';
	$notify['message'][]=sprintf(TB_MSGUPFAIL, $tinybrowser['docroot'].$tinybrowser['path'][$typenow]);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>TinyBrowser :: <?php echo TB_UPLOAD; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" media="all" href="css/stylefull_tinybrowser.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/style_tinybrowser.css.php?configFile=<?php echo $_GET['configFile']; ?>" />
<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript">
function uploadComplete(url) { document.location = url + "<?php echo  '&configFile='.$_GET['configFile']; ?>"; }
window.onload = function() {
	var so = new SWFObject("flexupload.swf", "mymovie", "100%", "340", "9", "#ffffff");
	so.addVariable("folder", "<?php echo $uploadpath; ?>");
	so.addVariable("uptype", "<?php echo $typenow; ?>");
	so.addVariable("maxsize", "<?php echo $tinybrowser['maxsize'][$_GET['type']]; ?>");
	so.addVariable("sessid", "<?php echo session_id(); ?>");
	so.addVariable("obfus", "<?php echo md5($_SERVER['DOCUMENT_ROOT'].$tinybrowser['obfuscate']); ?>");
	so.addVariable("filenames", "<?php echo $filelist; ?>");
	so.addVariable("extensions", "<?php echo $fileexts; ?>");
	so.addVariable("filenamelbl", "<?php echo TB_FILENAME; ?>");
	so.addVariable("sizelbl", "<?php echo TB_SIZE; ?>");
	so.addVariable("typelbl", "<?php echo TB_TYPE; ?>");
	so.addVariable("progresslbl", "<?php echo TB_PROGRESS; ?>");
	so.addVariable("browselbl", "<?php echo TB_BROWSE; ?>");
	so.addVariable("removelbl", "<?php echo TB_REMOVE; ?>");
	so.addVariable("uploadlbl", "<?php echo TB_UPLOAD; ?>");
	so.addVariable("uplimitmsg", "<?php echo TB_MSGMAXSIZE; ?>");
	so.addVariable("uplimitlbl", "<?php echo TB_TTLMAXSIZE; ?>");
	so.addVariable("uplimitbyte", "<?php echo TB_BYTES; ?>");
	so.addParam("allowScriptAccess", "always");
	so.addParam("type", "application/x-shockwave-flash");
	so.write("flashcontent");
}
</script>
</head>
<body>
<?php
if(count($notify['type'])>0) alert($notify);
form_open('foldertab',false,basename($_SERVER['SCRIPT_NAME']),'?configFile='.$_GET['configFile'].'&amp;type='.$typenow);
?>
<div class="tabs">
<ul>
<?php if($tinybrowser['allowbrowse']) { ?><li id="browse_tab"><span><a href="tinybrowser.php<?php echo '?configFile='.$_GET['configFile'].'&amp;type='.$typenow.$passfolder; ?>"><?php echo TB_BROWSE; ?></a></span></li><?php }
if($tinybrowser['allowedit'] || $tinybrowser['allowdelete']) { ?><li id="edit_tab"><span><a href="control.php<?php echo '?configFile='.$_GET['configFile'].'&amp;type='.$typenow.$passfolder; ?>"><?php echo TB_CONTROL; ?></a></span></li><?php } ?>
<li id="upload_tab" class="current"><span><a href="upload.php<?php echo '?configFile='.$_GET['configFile'].'&amp;type='.$typenow.$passfolder; ?>"><?php echo TB_UPLOAD; ?></a></span></li>
<?php if($tinybrowser['allowfolders']) { ?><li id="folders_tab"><span><a href="folders.php<?php echo '?configFile='.$_GET['configFile'].'&amp;type='.$typenow.$passfolder; ?>"><?php echo TB_FOLDERS; ?></a></span></li><?php }

// Display folder select, if multiple exist
if(count($uploaddirs)>1) {
	echo '<li id="folder_tab" class="right"><span>';
	form_select($uploaddirs,'folder',TB_FOLDERCURR,urlencode($foldernow),true);
	echo '</span></li>';
}
?>
</ul>
</div>
</form>
<div class="panel_wrapper">
<div id="general_panel" class="panel currentmod">
<fieldset>
<legend><?php echo TB_UPLOADFILES; ?></legend>
<div id="flashcontent"></div>
</fieldset></div></div>
</body>
</html>