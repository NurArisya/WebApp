<?php
include 'db_conn.php';
include 'header.php';

$sql = "SELECT tp.nickname AS name, tp.education, tp.talent, u.first_name, u.last_name, tp.profile_pic, tp.resume_file_path, tp.phone 
        FROM talentprofile tp 
        JOIN users u ON tp.userID = u.userID";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Talent</title>
  <link rel="stylesheet" href="../css/talent.css">
  <link rel="stylesheet" href="../css/dashboard.css">
</head>

<body>
  <div class="search-bar">
    <input type="text" id="searchInput" placeholder="Search Talent" />
    <select id="genreSelect">
      <option value="">Genre</option>
      <option value="music">music</option>
      <option value="theater">theater</option>
      <option value="coding">coding</option>
      <option value="robotics">robotics</option>
    </select>
  </div>

  <div class="card-grid" id="talentGrid">
    <?php
    if ($result && $result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo '
        <div class="card">
          <img src="' . $row['profile_pic'] . '" alt="profile" />
          <h3>' . htmlspecialchars($row['name']) . '</h3>
          <p>' . htmlspecialchars($row['education']) . '</p>
          <p>Specialized in ' . $row['talent'] .'</p>
          <p> Full name: ' . $row['first_name'] . ' ' . $row['last_name'] . '</p>
          <p>'.htmlspecialchars($row['phone']).'</p>
          <a href="' . $row['resume_file_path'] . '" target="_blank">View Resume</a>
        </div>';
      }
    } else {
      echo "<p>No talents found.</p>";
    }
    $conn->close();
    ?>
  </div>

  <script src="../js/talent.js"></script>
</body>
</html>
