<?php
include("../php/db_conn.php");

$sql = "SELECT * FROM announcement";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./admin.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="icon" type="image/png" href="../image/spotlit-tab-logo.png">
    <title>MMU TALENT</title>
</head>

<body>
    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../image/spotlit-logo.png" alt="logo">
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
                    <li class="nav-link active">
                        <a href="admin.php">
                            <i class='bx bxs-home icon'></i>
                            <span class="text nav-text">Dashboard</span> <!---DASHBOARD CONTENT-->
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="adminProfile.php">
                            <i class='bx bxs-pencil icon'></i>
                            <span class="text nav-text">Profile</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="adminTalent.php">
                            <i class='bx bxs-group icon'></i>
                            <span class="text nav-text">Talent Profile</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="event.php">
                            <i class='bx bxs-calendar-alt icon'></i>
                            <span class="text nav-text">Event Management</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="feedback.php">
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
        <div class="slider">
            <div class="slides">
                <img src="../image/slideshow.png" alt="Event #1">
                <img src="../image/slideshow1.png" alt="Event #2">
            </div>
            <button class="prev" onclick="prevSlide()">
                <i class='bx bxs-chevron-left'></i>
            </button>
            <button class="next" onclick="nextSlide()">
                <i class='bx bxs-chevron-right'></i>
            </button>
        </div>

            <div class="event-container">
                <h3 class="announcement-title">Announcement</h3>

                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="event">';
                            echo '<div class="event-left">';
                                echo '<div class="event-info">';
                                    echo '<div class="event-name">' . $row["ann_title"] . '</div>';
                                    echo '<div class="date-posted">' . $row["event_date"] . '</div>';
                                echo '</div>';
                            echo '</div>';

                            echo '<div class="event-right">';
                                echo '<div class="event-description">' . $row["ann_description"] . '</div>';
                            echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No announcements found.</p>';
                }
                ?>
            </div>

    </div>

    <script src="../js/admin.js"></script>

</body>

</html>