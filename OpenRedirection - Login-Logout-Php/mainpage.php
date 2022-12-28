<?php
session_start();    //session start
if(!isset($_SESSION['username']))     //if session not found redirect to homepage
{
header('location:index.php');
}
echo "Welcome &nbsp;";
echo $_SESSION['username'];      //retrieved using session

?>

<html>
<head>
</head>
<body>

<?php
function curPageURL() {
 $pageURL = 'http://';
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"]."/index.php";
 } 
 return $pageURL;
}
?>


<h2>Welcome to Main page</h2>
<a href="logout.php?redirect=<?php echo curPageURL(); ?>">Logout</a>
</body>
</html>