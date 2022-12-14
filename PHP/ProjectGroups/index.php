
<?php

// $info - информация об одной группе
//     кл.руководитель и студенты

// подклучаем файл model - groups.php
include_once 'groups.php';
$text = ''; //в переменну соберем текст для вывода на страницу
foreach ($school as $group_name=>$info) {
    $text.='<h3>Group: ' . $group_name.'</h3>'; //название группы
    $text.='<p><b>Teacher: </b' . $info['classroomteacher'] . '</p>';
        $text.='<h3>Students list</h3>';
    //students
    foreach ($info['students'] as $student){
        $text.= '<div class="content">';
        $text .= '<p>' . $student['name'] . '</p>';
        $text .= '<img src="images/' . $student['photo'] . '">';
        $text .= '</div>';
    }
    $text .= '<div class="clear"></div><hr>';
}

echo $text;
?>