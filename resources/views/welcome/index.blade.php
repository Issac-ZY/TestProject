<h1>Hello,Laravel!</h1>

<h2>Student List</h2>

<?php
    echo '<table border=1 >';
    echo '<tr align="center">';
    echo '<td>id</td><td>姓名</td><td>年龄</td><td colspan=2>操作</td>';
    echo '</tr>';
    foreach($stuList as $stu){
        echo '<tr align="center">';
        echo '<td>'.$stu->id.'</td>';
        echo '<td>'.$stu->name.'</td>';
        echo '<td>'.$stu->age.'</td>';
        echo '<td><a href = "/edit?id='.$stu->id.
		'&name='.$stu->name.
		'&age='.$stu->age.
		'">编辑</a><br/></td>';
        echo '<td><a href = "/del?id='.$stu->id.'">删除</a><br/></td>';
        echo '</tr>';   
    }
    echo '</table>';

?>
<br>
<a href = "/insert">Click Here</a> to create a student info.


