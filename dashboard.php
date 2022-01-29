<?php
    include 'includes/session.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <link rel="icon" href="css/img/icon.png" type="image/png">
    <!-- <script src='script.js' defer></script> -->
    <title>Dashboard</title>
</head>
<body>
    <div class="main-container">
        <div class="nav-info">
            <img src="css/img/logo.jpg">
            <header>JTDV</header>
        </div>
        <div class="nav-home">
            <a href="dashboard.php"><span class="material-icons-outlined">other_houses</span></a>
        </div>
        <div class="nav-profile">
            <img src="css/img/photo.jpeg">
        </div>
        <div class="main-header">
            <header>Welcome,<span> <?php echo $session_name; echo '<a href="includes/logout.inc.php" class="logout"> Logout</a>'; ?></span></header>
        </div>
        <div class="content">
            <ul>
                <a href="#"><li class="first"><span class="material-icons-outlined">assignment_turned_in</span>Attendance</li></a>
                <a href="apply_for_leave.php"><li><span class="material-icons-outlined">time_to_leave</span>Apply for Leave</li></a>
                <a href="#"><li><span class="material-icons-outlined">rate_review</span>View Remarks and Violations</li></a>
                <a href="#"><li><span class="material-icons-outlined">emoji_people</span>Request Substitution</li></a>
            </ul>
        </div>
    </div>
</body>
</html>