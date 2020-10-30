<?php
  $link = mysqli_connect('localhost', 'root', 'rootroot', 'practice');
  $query = "SELECT * FROM w02";
  $result = mysqli_query($link, $query);
  $list = '';
  while ($row = mysqli_fetch_array($result)) {
      $list = $list."<li><a href = \"index.php?id={$row['id']}\">{$row['title']}</a></li>";
  }
  $article = array(
    'title' => 'What news for today',
    'description' => 'Plz subscribe new IT news.',
    'address'=> 'Plz put URL'
  );
  $update_link ='';
  $delete_link ='';
  $media = '';

  if (isset($_GET['id'])) {
      $filtered_id = mysqli_real_escape_string($link, $_GET['id']);
      $query = "SELECT * FROM w02 LEFT JOIN media ON w02.media_id =
      media.id WHERE w02.id={$filtered_id}";
      $result = mysqli_query($link, $query);
      $row = mysqli_fetch_array($result);
      $article['title'] = htmlspecialchars($row['title']);
      $article['description'] = htmlspecialchars($row['description']);
      $article['address'] = htmlspecialchars($row['address']);
      $article['url'] = htmlspecialchars($row['url']);

      $update_link = '<a href="update.php?id='.$_GET['id'].'">update</a>';
      $delete_link = '
  <form action="process_delete.php" method="POST">
  <input type = "hidden" name = "id" value="'.$_GET['id'].'">
  <input type = "submit" value = "delete">
  </form>';

      $media = "<p>searched at {$article['url']}</p>";
  }
?>


<!DOCTYPE html>
<html>
<head>
  <meta chatset="utf-8">
  <title padding="100px"> NEWS </title>
</head>
<body>
  <h1><a href="index.php"> NEWS </a> </h1>
  <a href="media.php">어디검색창에서?</a>
  <ol> <?= $list ?> </ol>
  <button><a href="create.php">add new one!</a></button>
  <?= $update_link?>
  <?= $delete_link?>

  <h2><?= $article['title']?></h2>
  <h3><?= $article['description']?></h3>
  <h3><?= $article['address']?> </h3>
  <h3><?= $media ?></h3>

</body>
</html>
