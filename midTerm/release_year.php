<?php
  $link = mysqli_connect('localhost', 'admin', 'admin', 'middleT');

  if(isset($_GET['release_year'])){
    $filtered_release_year = mysqli_real_escape_string($link, $_GET['release_year']);
} else {
    $filtered_release_year= mysqli_real_escape_string($link, $_POST['release_year']);        
}

if(isset($_GET['country'])){
    $filtered_country = mysqli_real_escape_string($link, $_GET['country']);
} else {
    $filtered_country= mysqli_real_escape_string($link, $_POST['country']);        
}


  $query = "SELECT * FROM netflix where release_year = '{$filtered_release_year}' AND country = '{$filtered_country}'";
  $result = mysqli_query($link, $query);  
  $emp_info = '';
  while($row = mysqli_fetch_array($result)) {
    $emp_info .= '<tr>';
    $emp_info .= '<td>'.$row['show_id'].'</td>';
    $emp_info .= '<td>'.$row['type'].'</td>';
    $emp_info .= '<td>'.$row['title'].'</td>';
    $emp_info .= '<td>'.$row['cast'].'</td>';
    $emp_info .= '<td>'.$row['country'].'</td>';    
    $emp_info .= '<td>'.$row['description'].'</td>';    
    $emp_info .= '<td>'.$row['release_year'].'</td>';    
    $emp_info .= '</tr>';
  }
  
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> 넷플릭스 </title>
</head>

<body>
    <h2><a href="index.php">홈으로</a>| 년도별 조회</h2>
    <table border="1">
        <tr>
            <th>show_id</th>
            <th>type</th>
            <th>title</th>
            <th>cast</th>
            <th>country</th>
            <th>description</th>
            <th>release_year</th>
        </tr>
        <?= $emp_info ?>

    </table>
</body>

</html>