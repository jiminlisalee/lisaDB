<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> 넷플릭스 </title>
</head>

<body>
    <h1> NETFLIX TV show / Movie </h1>
    
    
    (1)<a href="korea.php"> 한국 tv show/movie 조회</a><br>
    
    
    <form action="by_title.php" method="GET">
        (3) 제목별로 조회:
        <input type="text" name="title" placeholder="프로그램을 입력해주세요!">
        <input type="submit" value="Search">

    </form>

    <form action="by_country.php" method="GET">
        (4) 국가별로 조회:
        <input type="text" name="country" placeholder="국가를 입력해주세요!">
        <input type="submit" value="Search">

    </form>
    
    <form action="release_year.php" method="GET">
        (5) 국가/방송년도별 조회:
        <input type="text" name="release_year" placeholder="년도를 입력해주세요!">
        <input type="text" name="country" placeholder="국가를 입력해주세요!">
        <input type="submit" value="Search">

    </form>
        

    

</body>

</html>