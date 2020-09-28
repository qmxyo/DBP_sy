<?php
  $link = mysqli_connect("localhost", "root", "20152827", "dbp");

  $filtered = array(
    'name' => mysqli_real_escape_string($link, $_POST['name']),
    'artist' => mysqli_real_escape_string($link, $_POST['artist'])
  );
  $query = "
    INSERT INTO agency
      (name, artist)
      VALUES (
        '{$filtered['name']}',
        '{$filtered['artist']}'
        )
  ";

  $result = mysqli_query($link, $query);
  if ($result == false) {
      echo '저장하는 과정에서 문제가 발생했습니다. 관리자에게 문의하세요.';
      error_log(mysql_error($link));
  } else {
      header('Location: agency.php');
  }
