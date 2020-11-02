<?php
    $link = mysqli_connect("localhost", "root", "20152827", "midterm");
    if (isset($_GET['ctg'])) {
        $filtered_ctg = mysqli_real_escape_string($link, $_GET['ctg']);
    } else {
        $filtered_ctg = mysqli_real_escape_string($link, $_POST['ctg']);
    }
    $query = "SELECT * FROM googleplaystore Where Category='{$filtered_ctg}' ORDER BY App LIMIT 20";
    $result = mysqli_query($link, $query);

    $app_info = '';
    while($row = mysqli_fetch_array($result)) {
      $app_info .= '<tr>';
      $app_info .= '<td>'.$row['App'].'</td>';
      $app_info .= '<td>'.$row['Category'].'</td>';
      $app_info .= '<td>'.$row['Rating'].'</td>';
      $app_info .= '<td>'.$row['Installs'].'</td>';
      $app_info .= '<td>'.$row['Price'].'</td>';
      $app_info .= '</tr>';
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> google play store </title>
</head>
<body>
    <h2><a href="index.php">google play store</a> | 카테고리별 앱 정보 </h2>
    <table border="1">
      <tr>
          <th>앱 이름</th>
          <th>카테고리</th>
          <th>평점</th>
          <th>다운로드수</th>
          <th>가격</th>
      </tr>
      <?= $app_info ?>
    </table>
</body>
</html>
