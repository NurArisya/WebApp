<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/admin.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="icon" type="image/png" href="../img/spotlit-tab-logo.png">
    <title>MMU TALENT</title>
</head>

<body>
    <!--Navigation items-->
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
                    <li class="nav-link active">
                        <a href="admin.php">
                            <i class='bx bxs-home icon'></i>
                            <span class="text nav-text">Dashboard</span> <!---DASHBOARD CONTENT-->
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

    <div class="content"> <!--dashboard content-->
        <div class="slider">
            <div class="slides">
                <img src="../img/slideshow.png" alt="Event #1">
                <img src="../img/slideshow1.png" alt="Event #2">
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
            <div class="event">
                <div class="event-left">
                    <div class="event-info">
                        <div class="event-name">Tech Fair</div>
                        <div class="date-posted">24 May 2025</div>
                    </div>
                </div>

                <div class="event-right">
                    <div class="event-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui necessitatibus provident aliquam!
                    </div>

                </div>

            </div>

            <div class="event">
                <div class="event-left">
                    <div class="event-info">
                        <div class="event-name">Tech Fair</div>
                        <div class="date-posted">24 May 2025</div>
                    </div>
                </div>

                <div class="event-right">
                    <div class="event-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui necessitatibus provident aliquam!
                    </div>

                </div>

            </div>

            <div class="event">
                <div class="event-left">
                    <div class="event-info">
                        <div class="event-name">Tech Fair</div>
                        <div class="date-posted">24 May 2025</div>
                    </div>
                </div>

                <div class="event-right">
                    <div class="event-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui necessitatibus provident aliquam!
                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="../js/admin.js"></script>
</body>

</html>
