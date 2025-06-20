<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/talentProfile.css" />
    <link rel="stylesheet" href="../css/upload.css" />
    <link rel="stylesheet" href="../css/media.css" />

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="icon" type="image/png" href="../img/spotlit-tab-logo.png">
    <title>MMU TALENT</title>
</head>

<body>
    <?php include('./headerProfile.php'); ?>

    <h1>MMU Talent Feed</h1>
    <div class="feed" id="feed-container"></div>
        <!-- Media Upload Button -->
        <!-------Using js, connect with upload.php---------->
        <button class="plus-btn" id="openMediaBtn">+</button>
        <?php include('../php/upload.php'); ?>

</body>
<script src="../js/media.js"></script>
</html>
