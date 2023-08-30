<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-center text-info
        text-capitalize">marksheet</h1>
        <form method="post">
    <div class="mb-3">
        <label for="" class="form-label">user name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">urdu</label>
        <input type="text" class="form-control" name="urdu">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">english</label>
        <input type="text" class="form-control" name="english">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">math</label>
        <input type="text" class="form-control" name="math">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">islamiat</label>
        <input type="text" class="form-control" name="islamiat">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">pakistan studies</label>
        <input type="text" class="form-control" name="pakistanstudies">
    </div>
    <button type="submit" class="btn btn-primary"
    name="getresult">submit</button>
   </form>
   </div>
   <div class="container">
    <table border="1">
 <thead>
    <tr>
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
    </tr>
 </thead>
  <?php
  if(isset($_POST['getresult'])){
    $name= $_POST['name'];
    $urdu= $_POST['urdu'];
    $english= $_POST['english'];
    $math= $_POST['math'];
    $islamiat= $_POST['islamiat'];
    $pakistanstudies= $_POST['pakistanstudies'];
    $obtained= $urdu+$english+$math+$islamiat+$pakistanstudies;
    $total=500;
    $percentage=($obtained/$total)*100;
    
    if($percentage>90 && $percentage<=100){
        $grade="A+1";
        $remarks="EXCELLENT";
        }
        elseif($percentage>80 && $percentage<=90){
            $grade="A+";
            $remarks="weldone";
           }
           elseif($percentage>60 && $percentage<=70){
            $grade="B";
            $remarks="GOOD";
            
           }
           elseif($percentage>50 && $percentage<=60){
            $grade="C";
            $remarks="BETTER";
           
           } 
           elseif($percentage>40 && $percentage<=50){
            $grade="D";
            $remarks="KEEP IT UP";
           
           }
           else{
            $grade="fail";
            $remarks="TRY AGAIN";
           }
           $query=$pdo->prepare("insert into data(name,urdu,english,math,islamiat,pakistanstudies,obtained,total,percentage,grade,remarks)values(:pname,:purdu,:penglish,:pmath,:pislamiat,:ppakistanstudies,:pobt,:ptotal,:pper,:pgrade,:premarks) ");
           $query->bindParam("pname",$name);
           $query->bindParam("purdu",$urdu);
           $query->bindParam("penglish",$english);
           $query->bindParam("pmath",$math);
           $query->bindParam("pislamiat",$islamiat);
           $query->bindParam("ppakistanstudies",$pakistanstudies);
           $query->bindParam("pobt",$obtained);
           $query->bindParam("ptotal",$total);
           $query->bindParam("pper",$percentage);
           $query->bindParam("pgrade",$grade);
           $query->bindParam("premarks",$remarks);
           $query->execute();
           echo"<script>
           alert('data has send successfully'); 
           location.assign('viewresult.php');
           </script>";
         
        }
        ?>

</body>
</html>
