<?php
session_start();

$counter = $_SESSION['counter'] ?? 0;
$counter++;
$_SESSION['counter'] = $counter;

$message = 'Page views: ' . $counter;
$greeting = 'cookie!';
?>
<?php include 'includes/header.php'; ?> 

<h1>Welcome</h1>
<p><?= $message ?></p>

<h1><?= $greeting ?></h1>

<pre>
  <?php var_dump($_COOKIE); ?>
</pre>

<?php include 'includes/footer.php'; ?>