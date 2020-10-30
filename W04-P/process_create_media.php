<?php
$link = mysqli_connect('localhost', 'root', 'rootroot', 'practice');
$filtered = array(
  'name' => mysqli_real_escape_string($link, $_POST['name']),
  'url' => mysqli_real_escape_string($link, $_POST['url'])

);

$query = "
    INSERT INTO media
        (name,url)
        VALUES (
          '{$filtered['name']}',
          '{$filtered['url']}'
        )
";


$result = mysqli_query($link, $query);
if ($result == false) {
    echo '저장하는 과정에서 문제가 발생했습니다. 관리자에게 문의하세요.';
    error_log(mysqli_error($link));
} else {
    header('Location:media.php');
}
