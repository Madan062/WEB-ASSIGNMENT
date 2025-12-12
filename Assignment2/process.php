<?php
// Helper to print safely
function safe($value) {
  return htmlspecialchars($value);
}

$name    = safe($_POST['name'] ?? '');
$email   = safe($_POST['email'] ?? '');
$phone   = safe($_POST['phone'] ?? '');
$course  = safe($_POST['course'] ?? '');
$gender  = safe($_POST['gender'] ?? 'Not selected');
$address = nl2br(safe($_POST['address'] ?? ''));

$hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Application Submitted</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="topbar">
  <h1>Registration Successful</h1>
  <p class="subtitle">Here are the details you submitted.</p>
</header>

<main class="page">
  <section class="form-card result-box">
    <h2 class="form-title">Submitted Details</h2>

    <p><strong>Name:</strong> <?= $name ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Mobile Number:</strong> <?= $phone ?></p>
    <p><strong>Course:</strong> <?= $course ?></p>
    <p><strong>Gender:</strong> <?= $gender ?></p>

    <p><strong>Hobbies:</strong>
      <?php
        if (!empty($hobbies)) {
          $safeHobbies = array_map('htmlspecialchars', $hobbies);
          echo implode(", ", $safeHobbies);
        } else {
          echo "No hobbies selected";
        }
      ?>
    </p>

    <p><strong>Address:</strong><br><?= $address ?></p>
  </section>
</main>

<footer class="footer">
  <p>&copy; 2025 Registration Portal</p>
</footer>

</body>
</html>
