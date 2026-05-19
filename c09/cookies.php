<?php
$counter=$_COOKIE['counter'] ?? 0;
$counter=$counter+1;
setcookie('counter', $counter);

$message='page views: ' . $counter;

?>
<?php include 'includes/header.php'; ?> 

<h1>Welcome</h1>

<p><?= $message ?></p>
<pre>
  <?php var_dump($_COOKIE); ?>
</pre>
<?php include 'includes/footer.php'; ?> 