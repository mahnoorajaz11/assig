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
            <label for="" class="form-lable">enter country code</label>
            <input type="text" class="form-lable" name="c_code">
</div>
            <button type="submit" class="form-control" name="getcode">submit</button>
        </form>
    </div>
    <?php
    if(isset($_POST['getcode'])){
        $code=$_POST['c_code'];
        $pak="+92";
        $flag = strcmp($pak,$code);
        if($flag==0){
            echo "<script>alert('pakistan code')</script>";
        }else{
            echo "<script>alert('invalid country code')</script>";
        }
    }
    ?>
</body>
</html>