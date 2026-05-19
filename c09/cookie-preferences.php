<?php
$color = $_COOKIE['color'] ?? null;
$options = ['light', 'dark'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $color = $_POST['color'] ?? null;

  if (in_array($color, $options)) {
    setcookie('color', $color, time() + 3600, '/', '', false, true);
  }

  header("Location: cookie-preferences.php");
  exit;
}


$scheme = (in_array($color, $options) ? $color : 'dark');
?>

<?php include 'includes/header-style-switcher.php'; ?>

<form method="POST" action="cookie-preferences.php">
  Select color scheme:
  <select name="color">
    <option value="dark" <?php if ($scheme == 'dark') echo 'selected'; ?>>Dark</option>
    <option value="light" <?php if ($scheme == 'light') echo 'selected'; ?>>Light</option>
  </select><br>
  <input type="submit" value="Save">
</form>

<?php include 'includes/footer.php'; ?>