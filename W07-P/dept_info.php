<?php
    $link = mysqli_connect('localhost', 'admin', 'admin', 'employees');

    if(mysqli_connect_errno()){
        echo "MariaDB 접속에 실패했습니다. 관리자에게 문의하세요.";
        echo "<br>";
        echo mysqli_connect_error();
        exit();
    }

    $filtered_dept = mysqli_real_escape_string($link, $_POST['dept']);
    $dept_query = "SELECT dept_no FROM departments WHERE dept_name='{$filtered_dept}'";
    $dept_result = mysqli_query($link, $dept_query);
    $dept_row = mysqli_fetch_array($dept_result)['dept_no'];
       
    $query = "
    SELECT *
    FROM employees
    LEFT JOIN dept_emp ON employees.emp_no = dept_emp.emp_no
    WHERE dept_no='{$dept_row}'
    LIMIT 20
    ";

    $result = mysqli_query($link, $query);
    $departments = mysqli_fetch_array($result);

    $emp_info = '';
    while($row = mysqli_fetch_array($result)){
        $emp_info .= '<tr><td>';
        $emp_info .= $row['emp_no'];
        $emp_info .= '</td><td>';
        $emp_info .= $row['birth_date'];
        $emp_info .= '</td><td>';
        $emp_info .= $row['first_name'];
        $emp_info .= '</td><td>';
        $emp_info .= $row['last_name'];
        $emp_info .= '</td><td>';
        $emp_info .= $row['gender'];
        $emp_info .= '</td><td>';
        $emp_info .= $row['hire_date'];
        $emp_info .= '</td></tr>';
    }

    mysqli_free_result($result);
    mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> 부서별 직원 정보 </title>
    <style>
        body{
            font-family : Consolas, monospace;
            font-family : 12px;
        }
        table{
            width : 100%;
        }
        th, td{
            padding : 10px;
            border-bottom : 1px solid #dadada;
        }
    </style>
</head>
<body>
        <h2><a href="index.php"> 직원 관리 시스템</a> | <?= $filtered_dept ?> 직원 정보</h2>
        <table>
            <tr>
                <th> emp_no </th>
                <th> birth_date </th>
                <th> first_name </th>
                <th> last_name </th>
                <th> gender </th>
                <th> hire_date </th>
            </tr>
            <?= $emp_info ?>
        </table>
</body>
</html>