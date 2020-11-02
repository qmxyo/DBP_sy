<?php
  $link = mysqli_connect('localhost', 'root', '20152827', 'midterm');
  $query = "SELECT * FROM googleplaystore ORDER BY Reviews DESC LIMIT 20";
  $result = mysqli_query($link, $query);
  $app_info = '';
  while($row = mysqli_fetch_array($result)) {
    $app_info .= '<tr>';
    $app_info .= '<td>'.$row['App'].'</td>';
    $app_info .= '<td>'.$row['Category'].'</td>';
    $app_info .= '<td>'.$row['Rating'].'</td>';
    $app_info .= '<td>'.$row['Reviews'].'</td>';
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
    <h2><a href="index.php">google play store</a> | google play store 리뷰수 top 20</h2>
    <table border="1">
        <tr>
            <th>앱 이름</th>
            <th>카테고리</th>
            <th>평점</th>
            <th>리뷰수</th>
            <th>다운로드수</th>
            <th>가격</th>
        </tr>
        <?= $app_info ?>
    </table>
</body>

</html>
