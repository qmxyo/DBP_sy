<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> google play store </title>
</head>

<body>
    <h1> google play store </h1>
    <a href="gps_top_reviews.php"> google play store 리뷰 top 20 </a><br>
    <a href="gps_top_rating.php"> google play store 평점 top 20 </a><br>
    <form action="gps_app.php" method="GET">
         App 이름 검색
        <input type="text" name="app" placeholder="app_name">
        <input type="submit" value="Search">
    </form>
    <form action="ctg_app.php" method="POST">
      카테고리별 앱 정보
      <select name="ctg">
        <option value="ART_AND_DESIGN">ART_AND_DESIGN</option>
            <option value="AUTO_AND_VEHICLES">AUTO_AND_VEHICLES</option>
            <option value="BEAUTY">BEAUTY</option>
            <option value="BOOKS_AND_REFERENCE">BOOKS_AND_REFERENCE</option>
            <option value="BUSINESS">BUSINESS</option>
            <option value="COMICS">COMICS</option>
            <option value="COMMUNICATION">COMMUNICATION</option>
            <option value="DATING">DATING</option>
            <option value="EDUCATION">EDUCATION</option>
            <option value="ENTERTAINMENT">ENTERTAINMENT</option>
            <option value="FINANCE">FINANCE</option>
        </select>
        <input type="submit" value="Search">
    </form>
</body>
</html>
