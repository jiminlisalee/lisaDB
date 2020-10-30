<?php
$link = mysqli_connect("localhost", "root", "rootroot", "practice");
settype($_POST['id'], 'integer');
$filtered = array(
  'id' => mysqli_real_escape_string($link, $_POST['id']),
  'name' => mysqli_real_escape_string($link, $_POST['name']),
  'url' => mysqli_real_escape_string($link, $_POST['url'])

);

$query = "
UPDATE media
  SET
    name = '{$filtered['name']}',
    url = '{$filtered['url']}'
  WHERE
    id = '{$filtered['id']}'
  ";


$result = mysqli_query($link, $query);
if ($result == false) {
    echo '수정하는 과정에서 문제가 발생했습니다. 관리자에게 문의하세요.';
    error_log(mysql_error($link));
} else {
    header('Location:media.php');
}
