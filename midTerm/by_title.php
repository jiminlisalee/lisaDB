<?php
    $link = mysqli_connect('localhost', 'admin', 'admin', 'middleT');
    
    if(isset($_GET['title'])){
        $filtered_title = mysqli_real_escape_string($link, $_GET['title']);
    } else {
        $filtered_title= mysqli_real_escape_string($link, $_POST['title']);        
    }
    
    $query = "SELECT * FROM netflix WHERE title='{$filtered_title}'";    
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> 넷플릭스 </title>
</head>

<body>
    <h2><a href="index.php">홈으로</a> | 제목으로 조회</h2>

    <form  method="POST">
        <label>show_id:</label>
        <input type="text" name="show_id" value="<?=$row['show_id']?>" placeholder="show_id" readonly><br>
        <label>type:</label>
        <input type="text" name="type" value="<?=$row['type']?>" placeholder="type" style="width:200px" readonly><br>
        <label>title:</label>
        <input type="text" name="title" value="<?=$row['title']?>" placeholder="title" style="width:200px" readonly><br>
        <label>cast:</label>
        <input type="text" name="cast" value="<?=$row['cast']?>" placeholder="cast" size= "130" readonly><br>
        <label>country</label>
        <input type="text" name="country" value="<?=$row['country']?>" placeholder="country" readonly><br>
        <label>description</label>
        <textarea name="description" placeholder="description"  cols="50" rows="10" resize="none" readonly><?=$row['description']?></textarea><br>
        <label>release_year</label>
        <input type="text" name="release_year" value="<?=$row['release_year']?>" placeholder="release_year" readonly><br>

    </form>

</body>

</html>