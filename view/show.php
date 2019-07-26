<?php
if (isset($res)):
?>
    <h3>переменная $needle встречается в массиве $fruits <span style="color: red"><?=$res?></span>раза</h3><hr/>
<?php
endif;
?>

<?php
if(isset($users)):
?>
<h3>5 пользователей, которые имеют самый высокий рейтинг среди всех комментариев:</h3>
<table border="1" width="30%">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Rating</th>

    </thead>
<?php

    foreach ($users as $user) {
        ?>


        <tbody>
        <tr>
            <td><?= ($user['id']); ?></td>
            <td><?= ($user['name']); ?></td>
            <td><?= ($user['rating']); ?></td>
        </tr>
        </tbody>
        <?php
    }

?>
 <table>
<?php
endif;
?>

