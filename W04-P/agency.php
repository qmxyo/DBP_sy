<?php
$link = mysqli_connect('localhost', 'root', '20152827', 'dbp');

$query = "SELECT * FROM agency";
$result = mysqli_query($link, $query);
$agency_info = '';

while ($row = mysqli_fetch_array($result)) {
    $filtered = array(
    'id' => htmlspecialchars($row['id']),
    'name' => htmlspecialchars($row['name']),
    'artist' => htmlspecialchars($row['artist'])
  );
    $agency_info .= '<tr>';
    $agency_info .= '<td>'.$filtered['id'].'</td>';
    $agency_info .= '<td>'.$filtered['name'].'</td>';
    $agency_info .= '<td>'.$filtered['artist'].'</td>';
    $agency_info .= '<td><a href="agency.php?id='.$filtered['id'].'">update</a></td>';
    $agency_info .= '
    <td>
      <form action="process_delete_agency.php" method="post">
        <input type="hidden" name="id" value="'.$filtered['id'].'">
        <input type="submit" value="delete">
      </form>
    </td>
    ';
    $agency_info .= '</tr>';
};

$escaped = array(
  'name' => '',
  'artist' => ''
);

$form_action = 'process_create_agency.php';
$label_submit = 'Create agency';
$form_id = '';

if (isset($_GET['id'])) {
    $filtered_id = mysqli_real_escape_string($link, $_GET['id']);
    settype($filtered_id, 'integer');
    $query = "SELECT * FROM agency WHERE id = {$filtered_id}";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    $escaped['name'] = htmlspecialchars($row['name']);
    $escaped['artist'] = htmlspecialchars($row['artist']);

    $form_action = 'process_update_agency.php';
    $label_submit = 'Update agency';
    $form_id = '<input type="hidden" name="id" value="'.$_GET['id'].'">';
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <meta charset = "utf-8">
   <title>SINGER</title>
 </head>
 <body>
   <h1><a href="index.php">좋아하는 가수와 추천곡</a></h1>
   <p><a href="index.php">singer</a></p>

   <table border="1">
     <tr>
       <th>id</th>
       <th>name</th>
       <th>artist</th>
       <th>update</th>
       <th>delete</th>
     </tr>
       <?= $agency_info ?>
   </table>
   <br>
   <form action="<?= $form_action ?>" method="post">
   <?= $form_id ?>
     <label for="fname">name:</label><br>
     <input type="text" id="name" name="name" placeholder="name" value="<?=$escaped['name']?>"><br>
     <label for="lname">artist:</label><br>
     <input type="text" id="artist" name="artist" placeholder="artist" value="<?=$escaped['artist']?>"><br><br>
     <input type="submit" value="<?= $label_submit?>">
   </form>
 </body>
 </html>
