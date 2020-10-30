<?php
$link = mysqli_connect("localhost","root","rootroot","practice");

$query = "
INSERT INTO w02 (
  title, description, created, address
  ) VALUE (
    '{$_POST['title']}',
    '{$_POST['description']}',
    now(),
    '{$_POST['address']}'
  )
  ";

$result = mysqli_query($link,$query);
if($result == false){
  echo '추가하는 과정에서 문제가 발생했습니다. 관리자에게 문의하세요.';
  error_log(mysql_error($link));
} else {
  echo '뉴스추가를 성공했습니다.<a href = "index.php">돌아가기></a>';
}



?>
