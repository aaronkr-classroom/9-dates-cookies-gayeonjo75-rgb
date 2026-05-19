<?php
$start = new DateTime();

$start->setDate(2027, 3, 1);
$start->setTime(17, 30);

$end = clone $start;
$end->modify('+1 month 1 week 1 day 2 hours 15 minutes');
?>

<?php include 'includes/header.php'; ?> 

<p><b>Event starts:</b>
  <?= $start->format('g:i a - D, M j Y'); ?>
</p>

<p><b>Event ends:</b>
  <?= $end->format('g:i a - D, M j Y'); ?>
</p>

<?php include 'includes/footer.php'; ?>