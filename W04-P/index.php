<?php
  $link = mysqli_connect('localhost', 'root', '20152827', 'dbp');
  $query = "SELECT * FROM singer";
  $result = mysqli_query($link, $query);
  $list ='';
  while ($row = mysqli_fetch_array($result)) {
      $escaped_title = htmlspecialchars($row['title']);
      $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
  }

  $article = array(
    'title' => '좋아하는 가수',
    'description' => ''
  );

  $update_link = '';
  $agency = '';
  $delete_link = '';

  if (isset($_GET['id'])) {
      $filtered_id = mysqli_real_escape_string($link, $_GET['id']);
      $query = "SELECT * FROM singer LEFT JOIN agency ON singer.agency_id = agency.id WHERE singer.id = {$filtered_id}";
      $result = mysqli_query($link, $query);
      $row = mysqli_fetch_array($result);
      $article['title'] = htmlspecialchars($row['title']);
      $article['description'] = htmlspecialchars($row['description']);
      $article['name'] = htmlspecialchars($row['name']);

      $update_link = '<a href="update.php?id=' .$_GET['id'].'">update</a>';

      $agency = "<p>{$article['name']} 소속</p>";
      $delete_link = '
      <form action="process_delete.php" method="POST">
        <input type="hidden" name="id" value="'.$_GET['id'].'">
        <input type="submit" value="delete">
        </form>
        ';
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> SINGER </title>
</head>
<body>
  <h1><a href="index.php"> 좋아하는 가수와 추천곡 </a></h1>
  <a href="agency.php">agency</a>
  <ol> <?= $list ?> </ol>
  <a href="create.php">create</a>
  <?=$update_link?>
  <?=$delete_link?>
  <h2> <?= $article['title'] ?> </h2>
  <?= $article['description'] ?>
  <?= $agency ?>
</body>
</html>
