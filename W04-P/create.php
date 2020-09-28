<?php
  $link = mysqli_connect('localhost', 'root', '20152827', 'dbp');
  $query = "SELECT * FROM singer";
  $result = mysqli_query($link, $query);
  $list ='';

  while ($row = mysqli_fetch_array($result)) {
      $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
  }

  $article = array(
    'title' => '좋아하는 가수',
    'description' => '추천곡'
  );

$updated_link = '';

  if (isset($_GET['id'])) {
      $query = "SELECT * FROM singer WHERE id={$_GET['id']}";
      $result = mysqli_query($link, $query);
      $row = mysqli_fetch_array($result);
      $article = array(
      'title' => $row['title'],
      'description' => $row['description']
    );
      $updated_link = '<a href="update.php?id' .$_GET['id'].'">update</a>';
  }

  $query = "SELECT * FROM agency";
  $result = mysqli_query($link, $query);
  $select_form = '<select name="agency_id">';
  while ($row = mysqli_fetch_array($result)) {
      $select_form .= '<option value="'.$row['id'].'">'.$row['name'].'</option>';
  }
  $select_form .= '</select>';

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> SINGER </title>
</head>
<body>
  <h1><a href="index.php"> 좋아하는 가수와 추천곡 </a></h1>
  <ol> <?= $list ?> </ol>
 <form action="process_create.php" method="POST">
   <p><input type="text" name="title" placeholder="가수명"></p>
  <p><textarea name="description" placeholder="추천곡"></textarea></p>
  <?= $select_form ?>
  <p><input type="submit"></p>
 </form>
</body>
</html>
