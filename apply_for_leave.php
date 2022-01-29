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
    <!-- <script src="script.js" defer></script> -->
    <title>Apply for Leave</title>
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
            Apply for Leave
        </div>
        <div class="leave-history-header">
            <span class="material-icons-outlined">calendar_month</span>
            Leave History
        </div>
        <div class="history-table">
            <table>
                <tr>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>1/11/2021</td>
                    <td>Pending</td>
                    <td><a href="#">View</a></td> 
                </tr>
                <tr>
                    <td>1/11/2021</td>
                    <td>Pending</td>
                    <td><a href="#">View</a></td> 
                </tr>
                <tr>
                    <td>1/11/2021</td>
                    <td>Pending</td>
                    <td><a href="#">View</a></td> 
                </tr>
                <tr>
                    <td>1/11/2021</td>
                    <td>Pending</td>
                    <td><a href="#">View</a></td> 
                </tr>
                <tr>
                    <td>1/11/2021</td>
                    <td>Pending</td>
                    <td><a href="#">View</a></td> 
                </tr>
                <tr>
                    <td>1/11/2021</td>
                    <td>Pending</td>
                    <td><a href="#">View</a></td> 
                </tr>
                <tr>
                    <td>1/11/2021</td>
                    <td>Pending</td>
                    <td><a href="#">View</a></td> 
                </tr>
                <tr>
                    <td>1/11/2021</td>
                    <td>Pending</td>
                    <td><a href="#">View</a></td> 
                </tr>
                <tr>
                    <td>1/11/2021</td>
                    <td>Pending</td>
                    <td><a href="#">View</a></td> 
                </tr>
                <tr>
                    <td>1/11/2021</td>
                    <td>Pending</td>
                    <td><a href="#">View</a></td> 
                </tr>
                <tr>
                    <td>1/11/2021</td>
                    <td>Pending</td>
                    <td><a href="#">View</a></td> 
                </tr>
            </table>
        </div>

        <div class="set-leave-header">
            <span class="material-icons-outlined">schedule</span>
            Set Leave
        </div>

        <div class="set-leave">
            <div class="leave-from">
                <label>From:</label>
                <input type="date">
            </div>
            <div class="leave-to">
                <label>To:</label>
                <input type="date">
            </div>
        </div>

        <div class="reason-header">
            <span class="material-icons-outlined">schedule</span>
            Reason
        </div>

        <div class="reason-form">
            <form>
                <textarea name="text" maxlength="300" placeholder="Max of 300 characters."></textarea>
                <input type="submit" value="Submit">
            </form>
        </div>

    </div>

</body>
</html>