<?php
    $link =mysqli_connect("localhost","admin","admin","employees");
    $filtered = array(
        'emp_no' => mysqli_real_escape_string($link,$_POST['emp_no']),
        'birth_date' => mysqli_real_escape_string($link,$_POST['birth_date']),
        'first_name' => mysqli_real_escape_string($link,$_POST['first_name']),
        'last_name' => mysqli_real_escape_string($link,$_POST['last_name']),
        'gender' => mysqli_real_escape_string($link,$_POST['gender']),
        'hire_date' => mysqli_real_escape_string($link,$_POST['hire_date'])


    );

    $query ="
        INSERT INTO employees(
            emp_no,
            birth_date,
            first_name,
            last_name,
            gender,
            hire_date 
        ) VALUES (
            '{$filtered['emp_no']}',
            '{$filtered['birth_date']}',
            '{$filtered['first_name']}',
            '{$filtered['last_name']}',
            '{$filtered['gender']}',
            '{$filtered['hire_date']}'
        )
        ";

        //print_r($query);
        $result = mysqli_query($link,$query);
        if($result == false){
            echo '저장하는 과정에서 문제가 생겼습니다. 문의하세요';
            error_log(mysqli_error($link));
        } else {
            echo '성공했습니다. <a href="emp_insert.php">처음으로 돌아가기</a>';
        
        }



        $query2 = "SELECT * FROM employees ORDER BY emp_no DESC limit 10";
        $result = mysqli_query($link,$query2);
        $emp_info = ' ';
        while($row = mysqli_fetch_array($result)) {
            $emp_info .= '<tr>';
            $emp_info .= '<td>'.$row['emp_no'].'</td>';
            $emp_info .= '<td>'.$row['birth_date'].'</td>';
            $emp_info .= '<td>'.$row['first_name'].'</td>';
            $emp_info .= '<td>'.$row['last_name'].'</td>';
            $emp_info .= '<td>'.$row['gender'].'</td>';
            $emp_info .= '<td>'.$row['hire_date'].'</td>';
            
    
            $emp_info .= '</tr>';
        }


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> 직원 관리 시스템 </title>
</head>

<body>
    <h2> 직원 정보 재확인</h2>
    <table border="1">
        <tr>
            <th>emp_no</th>
            <th>birth_date</th>
            <th>first_name</th>
            <th>last_name</th>
            <th>gender</th>
            <th>hire_date</th>
            

        
        </tr>
        <?=$emp_info?>
    </table>


</body>

</html>