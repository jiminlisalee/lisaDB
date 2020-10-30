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

  if (isset($_GET['id'])) {
      $query = "SELECT * FROM w02 WHERE id={$_GET['id']}";
      $result = mysqli_query($link, $query);
      $row = mysqli_fetch_array($result);
      $article = array(
    'title' => $row['title'],
    'description' => $row['description'],
    'address' => $row['address']

  );
      $update_link = '<a href="update.php?id='.$_GET['id'].'">update</a>';
      $delete_link = '
  <form action="process_delete.php" method="POST">
  <input type = "hidden" name = "id" value="'.$_GET['id'].'">
  <input type = "submit" value = "delete">
  </form>';
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
  <ol> <?= $list ?> </ol>
  <button><a href="create.php">add new one!</a></button>
  <?= $update_link?>
  <?= $delete_link?>

  <h2><?= $article['title']?></h2>
  <h3><?= $article['description']?></h3>

  <?= $article['address']?>

</body>
</html>
