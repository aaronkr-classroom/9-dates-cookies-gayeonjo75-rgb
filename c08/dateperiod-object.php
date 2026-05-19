<?php
$start= new DateTime('2026-03-03');
$end= new DateTime('2026-06-09')
$interval= new Dateinterval('P1W');
$period= new Dateperiod('$start, $interval, $end');
?>
<?php include 'includes/header.php'; ?> 
  <p>
    <?php foreach ($period as $event) { ?>
      <b><?= $event->format('l') ?></b>, <?= $event->format('M j Y') ?></b><br>
    <?php } ?>
  </p>
<?php include 'includes/footer.php'; ?>