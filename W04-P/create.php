<?php
  $link = mysqli_connect("localhost","root","rootroot","practice");
  $query = "SELECT * FROM w02";
  $result = mysqli_query($link, $query);
  $list = '';
  while($row = mysqli_fetch_array($result)){
    $list = $list."<li><a href = \"index.php?id={$row['id']}\">{$row['title']}</a></li>";
  }
  $article = array(
    'title' => 'What news for today',
    'description' => 'Plz subscribe new IT news.',
    'address' => 'Plz put URL'
  );

  if(isset($_GET['id'])) {
    $query = "SELECT * FROM w02 WHERE id={$_GET['id']}";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_array($result);
    $article = array(
    'title' => $row['title'],
    'description' => $row['description'],
    'address' => $row['address']

  );
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta chatset="utf-8">
  <title> today's NEWS </title>
</head>
<body>
  <h1><a href="index.php"> NEWS </a> </h1>
  <ol> <?= $list ?> </ol>

<form action="process_create.php" method="post">
  <p><input type="text" name="title" placeholder="title"></p>
  <p><textarea name="description" placeholder="description"></textarea></p>
  <p><textarea name="address" placeholder="address"></textarea></p>
  <p><input type="submit"></p>
</form>
</body>
</html>
