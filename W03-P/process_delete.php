<?php
$link = mysqli_connect("localhost", "root", "rootroot", "practice");
settype($_POST['id'], 'int');
$filtered = array(
  'id' => mysqli_real_escape_string($link, $_POST['id'])
);

$query = "
DELETE FROM   w02
  WHERE id = '{$filtered['id']}'
  ";


$result = mysqli_multi_query($link, $query);
if ($result == false) {
    echo '삭제하는 과정에서 문제가 발생했습니다. 관리자에게 문의바랍니다.';
    error_log(mysql_error($link));
} else {
    echo '성공했습니다.<a href = "index.php">돌아가기></a>';
}
