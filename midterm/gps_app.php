<?php
$link = mysqli_connect('localhost', 'root', '20152827', 'midterm');
$filtered_app = mysqli_real_escape_string($link, $_GET['app']);
$query = "SELECT * FROM googleplaystore Where App = '{$filtered_app}'  ";
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
    <title>google play store</title>
    <style>
          body{
              font-family : Consolas, monospace;
              font-family : 12px;
          }
          table{
              width : 100%;
          }
          th, td{
              padding : 10px;
              border-bottom : 1px solid #dadada;
          }
      </style>
  </head>
  <body>
    <h2><a href="index.php">google play store</a> | App 정보 조회 </h2>
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
         <form action="index.php" method="POST">
          <h2><p><input type="submit" value="돌아가기"></p></h2>
  </body>
</html>
