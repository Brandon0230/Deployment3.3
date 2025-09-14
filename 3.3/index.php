<?php 
$serverCurrentTime = time();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Test App!</title>
<link rel="stylesheet" href="/style/style.css">
<script>
    const serverTimeStart = <?php echo $serverCurrentTime; ?> * 1000;
</script>
<script src="/scripts/loadTime.js"></script>
</head>
<body>
    <nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    </nav>
<h1>PHP Test App Task 3.3</h1>
<p>PHP on Azure running on Cloud.</p>
<h3>Current Time:</h3>
<h4 id="currentTime"><strong><?php echo $serverCurrentTime; ?></strong></h4>
</body>
</html>
