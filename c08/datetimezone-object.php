<?php
$tz_LDN = new DateTimeZone('Europe/London');
$tz_SEO = new DateTimeZone('Asia/Seoul');

$LDN = new DateTime('now', $tz_LDN);
$SEO = new DateTime('now', $tz_SEO);
$SYD = new DateTime('now', new DateTimeZone('Australia/Sydney'));


$location = [
    'longitude' => 0,
    'latitude' => 0
];
?>

<?php include 'includes/header.php'; ?>

<p>
<b>LDN: <?= $LDN->format('g:i a') ?></b> 
(<?= ($LDN->getOffset() / 3600) ?>)<br>

<b>SEO: <?= $SEO->format('g:i a') ?></b>
(<?= ($SEO->getOffset() / 3600) ?>)<br>

<b>SYD: <?= $SYD->format('g:i a') ?></b>
(<?= ($SYD->getOffset() / 3600) ?>)
</p>

<h1>Head Office</h1>
<p>
<?= $tz_LDN->getName() ?><br>
<b>Longitude:</b> <?= $location['longitude'] ?><br>
<b>Latitude:</b> <?= $location['latitude'] ?></p>

<pre>
  <?php var_dump($_COOKIE); ?>
</pre>

<?php include 'includes/footer.php'; ?>