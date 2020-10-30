<?php
  $link = mysqli_connect('localhost', 'root', 'rootroot', 'practice');

  $query = "SELECT * FROM media";
  $result = mysqli_query($link, $query);
  $media_info = '';

  while ($row = mysqli_fetch_array($result)) {
      $filtered = array(
      'id' => htmlspecialchars($row['id']),
      'name' => htmlspecialchars($row['name']),
      'url' => htmlspecialchars($row['url'])
    );

      $media_info .='<tr>';
      $media_info .= '<td>'.$filtered['id'].'</td>';
      $media_info .= '<td>'.$filtered['name'].'</td>';
      $media_info .= '<td>'.$filtered['url'].'</td>';
      $media_info .= '<td><a href="media.php?id='.$filtered['id'].'">update</a></td>';
      $media_info .= '
      <td>
        <form action="process_delete_media.php" method="post">
        <input type="hidden" name="id" value="'.$filtered['id'].'">
        <input type="submit" value="delete">
        </form>
      </td>';

      $media_info .= '</tr>';
  };

$escaped = array(
  'name' => '',
  'url' => ''
);

$form_action = 'process_create_media.php';
$label_submit = 'Create media';
$form_id = '';

if (isset($_GET['id'])) {
    $filtered_id = mysqli_real_escape_string($link, $_GET['id']);
    settype($filtered_id, 'integer');
    $query = "SELECT * FROM media WHERE id ={$filtered_id}";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    $escaped['name'] = htmlspecialchars($row['name']);
    $escaped['url'] = htmlspecialchars($row['url']);

    $form_action = 'process_update_media.php';
    $label_submit = 'Update media';
    $form_id = '<input type="hidden" name="id" value="'.$_GET['id'].'">';
}



  ?>

  <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DATABASE</title>
  </head>
  <body>
    <h1><a href = "index.php">NEWS</a></h1>
    <p><a href = "index.php">practice</a></p>

    <table border="1">
      <tr>
        <th>id</th>
        <th>name</th>
        <th>url</th>
        <th>update</th>
        <th>delete</th>

      </tr>
    <?= $media_info ?>

  </table>
    <br>
    <form action = "<?=$form_action ?>" method="post">
      <?=$form_id?>
      <label for = "fname">name:</label><br>
      <input type="text" id="name" name="name" placeholder="name" value="<?=$escaped['name']?>"><br>
      <label for= "lname">url:</label><br>
      <input type="text" id="url" name="url" placeholder="url" value="<?=$escaped['url']?>"><br><br>
      <input type="submit" value="<?=$label_submit?>">
    </form>
  </body>
</html>
