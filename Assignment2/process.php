<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Application Submitted</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Application Submitted Successfully</h1>

    <div class="output-box">
        <h2>Applicant Details</h2>

        <p><strong>Name:</strong> <?php echo $_POST['name']; ?></p>
        <p><strong>Email:</strong> <?php echo $_POST['email']; ?></p>
        <p><strong>Phone:</strong> <?php echo $_POST['phone']; ?></p>
        <p><strong>Date of Birth:</strong> <?php echo $_POST['dob']; ?></p>
        <p><strong>Gender:</strong> <?php echo $_POST['gender']; ?></p>
        <p><strong>Address:</strong> <?php echo nl2br($_POST['address']); ?></p>
    </div>

</div>

</body>
</html>
