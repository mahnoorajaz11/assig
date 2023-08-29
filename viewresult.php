<?php
include("conection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table class="table">
        <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">urdu</th>
        <th scope="col">english</th>
        <th scope="col">math</th>
        <th scope="col">islamiat</th>
        <th scope="col">pakistan studies</th>
        <th scope="col">obtained</th>
        <th scope="col">total</th>
        <th scope="col">percentage</th>
        <th scope="col">grade</th>
        <th scope="col">remarks</th>
        <th colspan="2">action</th>
    </tr>
 </thead>
 <tbody>
    <?php
    $query=$pdo->("select * from marksheet");
    $row = $query->fetchAll(POD::FETCH_ASSOC);
    foreach($row as $data){
    ?>
     <tr>
        <td><?php echo $data['id'] ?></td>
        <td><?php echo $data['name']?></td>
        <td><?php echo $data['urdu']?></td>
        <td><?php echo $data['english']?></td>
        <td><?php echo $data['math']?></td>
        <td><?php echo $data['islamiat']?></td>
        <td><?php echo $data['pakistanstudies']?></td>
        <td><?php echo $data['obtained']?></td>
        <td><?php echo $data['total']?></td>
        <td><?php echo $data['percentage']?></td>
        <td><?php echo $data['grade']?></td>
        <td><?php echo $data['remarks']?></td>
        <td>
            <button type="button" class="btn btn-sucess">edit</button>
        </td>
        <td>
            <button type="button" class="btn btn-sucess">delete</button>
        </td>
       </tr>
       <?php
    }
    ?>
 </tbody>
        </table>
    </div>
</body>
</html>