<?php
include("conection.php");
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
    <table class="table">
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
    $name= $_post['name'];
    $urdu= $_post['urdu'];
    $english= $_post['english'];
    $math= $_post['math'];
    $islamiat= $_post['islamiat'];
    $pakistanstudies= $_post['pakistanstudies'];
    $obtained= $urdu+$english+$math+$islamiat+$pakistanstudies;
    $total=500;
    $percentage=($obtained/$total)*100;
    
    if($percentage>90 && $percentage<=100){
        $grade="A+1";
        $remarks="EXCELLENT";
        ?>
        <tr>
        <td><?php echo $name;?></td>
        <td><?php echo $urdu;?></td>
        <td><?php echo $english;?></td>
        <td><?php echo $math;?></td>
        <td><?php echo $islamiat;?></td>
        <td><?php echo $pakistanstudies;?></td>
        <td><?php echo $obtained;?></td>
        <td><?php echo $total;?></td>
        <td><?php echo $percentage;?></td>
        <td><?php echo $grade;?></td>
        <td><?php echo $remarks;?></td>
       </tr>
       <?php
        }
        elseif($percentage>80 && $percentage<=90){
            $grade="A+";
            $remarks="weldone";
            ?>
                <tr>
                    <td><?php echo $name;?></td>
                    <td><?php echo $urdu;?></td>
                    <td><?php echo $english;?></td>
                    <td><?php echo $math;?></td>
                    <td><?php echo $islamiat;?></td>
                    <td><?php echo $pakistanstudies;?></td>
                    <td><?php echo $obtained;?></td>
                    <td><?php echo $total;?></td>
                    <td><?php echo $percentage;?></td>
                    <td><?php echo $grade;?></td>
                    <td><?php echo $remarks;?></td>
                </tr>
                <?php
           }
           elseif($percentage>60 && $percentage<=70){
            $grade="B";
            $remarks="GOOD";
            ?>
            <tr>
            <td><?php echo $name;?></td>
            <td><?php echo $urdu;?></td>
            <td><?php echo $english;?></td>
            <td><?php echo $math;?></td>
            <td><?php echo $islamiat;?></td>
            <td><?php echo $pakistanstudies;?></td>
            <td><?php echo $obtained;?></td>
            <td><?php echo $total;?></td>
            <td><?php echo $percentage;?></td>
            <td><?php echo $grade;?></td>
            <td><?php echo $remarks;?></td>
           </tr>
             <?php
           }
           elseif($percentage>50 && $percentage<=60){
            $grade="C";
            $remarks="BETTER";
            ?>
            <tr>
            <td><?php echo $name;?></td>
            <td><?php echo $urdu;?></td>
            <td><?php echo $english;?></td>
            <td><?php echo $math;?></td>
            <td><?php echo $islamiat;?></td>
            <td><?php echo $pakistanstudies;?></td>
            <td><?php echo $obtained;?></td>
            <td><?php echo $total;?></td>
            <td><?php echo $percentage;?></td>
            <td><?php echo $grade;?></td>
            <td><?php echo $remarks;?></td>
           </tr>
             <?php
           } 
           elseif($percentage>40 && $percentage<=50){
            $grade="D";
            $remarks="KEEP IT UP";
            ?>
            <tr>
            <td><?php echo $name;?></td>
            <td><?php echo $urdu;?></td>
            <td><?php echo $english;?></td>
            <td><?php echo $math;?></td>
            <td><?php echo $islamiat;?></td>
            <td><?php echo $pakistanstudies;?></td>
            <td><?php echo $obtained;?></td>
            <td><?php echo $total;?></td>
            <td><?php echo $percentage;?></td>
            <td><?php echo $grade;?></td>
            <td><?php echo $remarks;?></td>
           </tr>
             <?php
           }
           else{
            $grade="fail";
            $remarks="TRY AGAIN";
            ?>
            <tr>
            <td><?php echo $name;?></td>
            <td><?php echo $urdu;?></td>
            <td><?php echo $english;?></td>
            <td><?php echo $math;?></td>
            <td><?php echo $islamiat;?></td>
            <td><?php echo $pakistanstudies;?></td>
            <td><?php echo $obtained;?></td>
            <td><?php echo $total;?></td>
            <td><?php echo $percentage;?></td>
            <td><?php echo $grade;?></td>
            <td><?php echo $remarks;?></td>
           </tr>
             <?php
           }
           $query=$pdo->prepare("insert into marksheet(name,urdu,english,math,islamiat,pakistanstudies,obtained,total,percentage,grade,remarks)values(:pname,:purdu,:penglish,:pmath,:pislamiat,:ppakistanstudies,:pobt,:ptotal,:pper,:pgrade,:premarks) ");
           $query->blindParam("pname",$name);
           $query->blindParam("purdu",$urdu);
           $query->blindParam("penglish",$english);
           $query->blindParam("pmath",$math);
           $query->blindParam("pislamiat",$islamiat);
           $query->blindParam("ppakistanstudies",$pakistanstudies);
           $query->blindParam("pobt",$obtained);
           $query->blindParam("ptotal",$total);
           $query->blindParam("pper",$percentage);
           $query->blindParam("pgrade",$grade);
           $query->blindParam("premarks",$remarks);
           $query->execute();
           echo"<script>
           alert('data has send successfully');
           location.assign('viewresult.php');
           </script>"
        }
        ?>

</body>
</html>