<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../home.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Berhasil Login</title>
</head>
<body>
    <div class="container-logout">
        <form action="" method="POST" class="login-email">
            <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] ."!". "</h1>"; ?>
             
            <div class="input-group">
            <a href="waodmwopadmwpadjiwapnupapeopwapdiwpaodjpaowdjaw-djwaodiwadnwa" class="btn" style="text-decoration: none;">GO TO DASHBOARD</a>
            <a href="logout.php" class="btn" style="text-decoration: none;">Logout</a>
            </div>
        </form>
    </div>
    <script>
        //<![CDATA[
function externalLinks(){if(document.getElementsByTagName)for(var e=document.getElementsByTagName("a"),t=0;t<e.length;t++){var n=e[t];n.getAttribute("index.html")&&(n.target="_blank")}}window.onload=externalLinks;
//]]>
    </script>
</body>
</html>