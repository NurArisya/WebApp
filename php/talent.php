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
<?php include 'header.php'; ?>
  <div class="search-bar">
    <input type="text" id="searchInput" placeholder="Search Talent"/>
    <select id="genreSelect">
      <option value="">Genre</option>
      <option value="actor">Actor</option>
      <option value="singer">Singer</option>
      <option value="dancer">Dancer</option>
    </select>
  </div>

  <div class="card-grid" id="talentGrid">
    <!-- Cards inserted by talent.js -->
  </div>

  <script src="../js/talent.js"></script>
  
</body>
</html>
