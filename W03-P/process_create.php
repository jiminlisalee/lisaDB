<?php
$link = mysqli_connect("localhost", "root", "rootroot", "practice");
$filtered = array(
  'title' => mysqli_real_escape_string($link, $_POST['title']),
  'description' => mysqli_real_escape_string($link, $_POST['description']),
  'address' => mysqli_real_escape_string($link, $_POST['address'])
);

$query = "
INSERT INTO w02 (
  title, description, created, address
  ) VALUE (
    '{$filtered['title']}',
    '{$filtered['description']}',
    now(),
    '{$filtered['address']}'
  )
  ";

$result = mysqli_multi_query($link, $query);
if ($result == false) {
    echo '저장하는 과정에서 문제가 발생했습니다. 관리자에게 문의하세요.';
    error_log(mysql_error($link));
} else {
    echo '뉴스추가를 성공했습니다.<a href = "index.php">돌아가기></a>';
}
