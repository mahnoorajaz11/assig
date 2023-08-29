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
        <form method="post">
        <div class="md-3">
            <label for="" class="form-lable" >Name</label>
            <input type="text" class="form-lable" name="uname">
            <label for="" class="form-lable" >Email</label>
            <input type="text" class="form-lable" name="email">
            <label for="" class="form-lable" >Qualification</label>
            <input type="text" class="form-lable" name="qual">
            <label for="" class="form-lable" >Work experience</label>
            <input type="text" class="form-lable" name="exp">
            
</div>
            <button type="submit" class="form-control" name="getinfo">submit</button> 
        </form>
    </div>
    <div class="container">
        <table class="table" border="1">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Qualification</th>
                    <th scope="col">Work experience</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(isset($_POST['getinfo'])){
                    $name = $_POST['uname'];
                    $email = $_POST['email'];
                    $qual = $_POST['qual'];
                    $exp = $_POST['exp'];
                    ?>
                    <tr>
                    <td scope="row"><?php echo $name; ?></td>
                    <td scope="row"><?php echo $email; ?></td>
                    <td scope="row"><?php echo $qual; ?></td>
                    <td scope="row"><?php echo $exp; ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>