<style>
    table {
        border-collapse: collapse;
    }
    th {
        border: 1px solid black;
        text-align: center;
        padding: 10px;
        background-color: green;
    }
    td {
        border: 1px solid black;
        text-align: center;
    }

    tbody>tr:nth-child(odd) {
        background-color: #c9bdad;
    }

    tbody>tr:nth-child(even) {
        background-color: #7f7f7f;
    }
    
    
   
    </style>
<table>
    
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>LOGIN</th>
            <th>AGE</th>
            <th>ID_GROUP</th>
</tr>
</thead>
<tbody>

<?php
    
    
    $host = 'my_db'; 
    $user = 'root';
    $pass = '1234';
    $name = 'test';

    $link = mysqli_connect($host, $user, $pass, $name);
    if (!empty($_POST)) {
        $name = $_POST['name'];
        $login = $_POST['login'];
        $age = $_POST['age'];
        $id_group = $_POST['id_group'];
        $query = sprintf("INSERT INTO `students` (`NAME`,`LOGIN`,`AGE`,`ID_GROUP`)VALUES ('%s', '%s', %d, %d)", $name,$login,$age,$id_group);
        mysqli_query($link, $query) or die(mysqli_error($link));
    }
    $query = 'SELECT s.`ID`,s.`NAME`,s.`LOGIN`,s.`AGE`,g.`NAME` AS `GROUP` FROM `students` AS s 
    JOIN `groups` AS g ON g.ID = s.ID_GROUP';
    $query = 'SELECT `NAME`, `ID`, `AGE`, `ID_GROUP`, `LOGIN` FROM `students`'; 
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    while ($row = mysqli_fetch_assoc($result)) {
        
        echo '<tr>';
        echo '<td>'.$row['ID'].'</td>';
        echo '<td>'.$row['NAME'].'</td>';
        echo '<td>'.$row['LOGIN'].'</td>';
        echo '<td>'.$row['AGE'].'</td>';
        echo '<td>'.$row['ID_GROUP'].'</td>';
        echo '</tr>';

      

    }
?> </tbody>
</table>


<br>
<form action = "test.php" method = "POST">
    <input type = "text" name = "name" placeholder="Имя"><br>
    <input  type = "text" name = "login" placeholder="Логин"><br>
    <input type = "text" name = "age" placeholder="Возраст"><br>
    <select name ="group">
    <?php
        $query = 'SELECT `ID`, `NAME` FROM `groups`';
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option>'.$row['NAME'].'</option>'; 
           }
        ?>
       </select><br>
    <input type = "submit"><br>
</form>