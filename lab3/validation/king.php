<?php
    $db_host='localhost';
    $db_name='register-bd';
    $db_user='root';
    $db_pass='';
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
    $mysqli->set_charset("utf8mb4");
    
    $result = $mysqli->query('SELECT * FROM `users`');
    while($row = $result->fetch_assoc())
    {
        echo '<p>ID пользователя: '.$row['id'].', логин: '.$row['login'].'</p>';
    }
?>