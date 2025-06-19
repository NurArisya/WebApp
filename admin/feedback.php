<?php
include('../php/db_conn.php');

$select1 = "SELECT * FROM feedback";
$result = $conn->query($select1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/adminStyling.css">
    <link rel="stylesheet" href="../css/feedback.css?v=2">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="icon" type="image/png" href="../img/spotlit-tab-logo.png">
    <title>MMU TALENT</title>
</head>

<body>
    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../img/spotlit-logo.png" alt="logo">
                </span>

                <div class="text header-text">
                    <span class="name">MMU</span>
                    <span class="profession">SpotLit</span>
                </div>
            </div>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="admin.html">
                            <i class='bx bxs-home icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-pencil icon'></i>
                            <span class="text nav-text">Profile</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-group icon'></i>
                            <span class="text nav-text">Talent Profile</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-calendar-alt icon'></i>
                            <span class="text nav-text">Event Management</span>
                        </a>
                    </li>
                    <li class="nav-link active">
                        <a href="#">
                            <i class='bx bxs-star icon'></i>
                            <span class="text nav-text">Feedback Management</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="announcement.php">
                            <i class='bx bxs-megaphone icon'></i>
                            <span class="text nav-text">Announcement Management</span>
                        </a>
                    </li>
                    <li class="nav-link logout-btn" role="button">
                        <div class="logout-link">
                            <i class='bx bx-log-out icon'></i>
                            <span class="text nav-text">Log Out</span>
                        </div>
                    </li>

                </ul>

            </div>

        </div>
    </nav>

    <div class="content">
        <div class="table-container">
            <table id="reviewTable">
                <thead>
                    <tr>
                        <th>Feedback ID</th>
                        <th>Response ID</th>
                        <th>Target Talent</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-----------fetch feedback data from database---------!-->
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['feedbackID'] . "</td>";
                            echo "<td>" . $row['responseID'] . "</td>";
                            echo "<td>" . $row['target_talent'] . "</td>";
                            echo "<td>" . $row['feedback_desc'] . "</td>";
                            echo "<td>" . $row['feedback_date'] . "</td>";
                            echo "<td>
                            <i class='bx bxs-edit edit-icon'></i>
                            <i class='bx bxs-trash delete-icon'></i>
                            <i class='bx bxs-save save-icon' style='display: none;'></i>
                            </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No feedback found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="../js/feedback.js"></script>
</body>

</html>
