<?php
include 'db_conn.php';
$search = $_GET['search'] ?? '';
$result = null;

if (!empty($search)) {
    $stmt = $conn->prepare("SELECT * FROM event WHERE event_title LIKE CONCAT('%', ?, '%') OR event_desc LIKE CONCAT('%', ?, '%') ORDER BY event_date ASC");
    $stmt->bind_param("ss", $search, $search);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    $sql = "SELECT * FROM event ORDER BY event_date ASC";
    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/dashboard.css" />
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="icon" type="image/png" href="../img/spotlit-tab-logo.png">
    <title>MMU TALENT</title>
</head>

<body>
    <nav>
        <div class="navheader">
            <div class="navlogo">
                <a href="#">MMU<span>Spotlit</span></a>
            </div>

            <ul class="navlinks" id="nav-links">
                <li><a href="../php/dashboard.php">Home</a></li>
                <li><a href="../php/talent.php">Talent</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="../php/gallery.php">Gallery</a></li>
                <li><a href="../php/community.php">Community Services</a></li>
                <li class="dropdown">
                    <a href="../php/about.php">About Us</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="../php/contact.php">Contact Us</a></li>
                    </ul>
                </li>

            </ul>
            <button type="submit" class="loginbtn" >Log in</button>
        </div>
           <form class="search-bar" method="GET" action="dashboard.php">
                <input type="text" name="search" placeholder="Search events..." value="<?= htmlspecialchars($_GET['search'] ?? '') ?>">
                <button type="submit">Search</button>
            </form>



        <div class="content">
            <div class="slider">
                <div class="slides">
            <?php
            mysqli_data_seek($result, 0);
            while ($row = $result->fetch_assoc()) {
            echo '
            <div class="slide-box">
                <img class="slide-image-top" src="' . htmlspecialchars($row['event_pic']) . '" alt="' . htmlspecialchars($row['event_title']) . '"/>
                <div class="slide-caption-under">
                    <h3>' . htmlspecialchars($row["event_title"]) . '</h3>
                    <p>' . htmlspecialchars(limitSentences($row["event_desc"], 1)) . '</p>
                </div>
            </div>';
        }

            mysqli_data_seek($result, 0);
            ?>
        </div>


                <button class="prev" onclick="prevSlide()">
                    <i class='bx bxs-chevron-left'></i>
                </button>
                <button class="next" onclick="nextSlide()">
                    <i class='bx bxs-chevron-right'></i>
                </button>
            </div>

            <div class="event-container">
        <h3>Upcoming Events</h3>
        <?php
    
        function limitSentences($text, $limit = 1) {
            $sentences = preg_split('/(?<=[.?!])\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);
            return implode(' ', array_slice($sentences, 0, $limit));
        }

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '
                    <div class="event">
                        <div class="event-left">
                            <div class="event-info">
                                <div class="event-name"><b>' . htmlspecialchars($row["event_title"]) . '</b></div>
                                <div class="date-posted">' . htmlspecialchars($row["event_date"]) . '</div>
                            </div>
                        </div>
                        <div class="event-right">
                            <div class="event-description">
                                ' . htmlspecialchars(limitSentences($row["event_desc"], 1)) . '
                            </div>
                        </div>
                    </div>';
                }
            } else {
                echo '<p>No events found.</p>';
            }

            $conn->close();
            ?>
        </div>


        </div>
    </nav>
    <script src="../js/dashboard.js"></script>
</body>

</html>
