<?php
  $link = mysqli_connect("localhost", "root", "20152827", "dbp");
  settype($_POST['id'], 'int');
  $filtered = array(
    'id' => mysqli_real_escape_string($link, $_POST['id'])
  );
  $query = "
    DELETE
      FROM agency
      WHERE id = '{$filtered['id']}'
  ";

  $result = mysqli_multi_query($link, $query);
  if ($result == false) {
      echo '삭제하는 과정에서 문제가 발생했습니다. 관리자에게 문의하세요.';
      error_log(mysql_error($link));
  } else {
      header('Location: agency.php');
  }
