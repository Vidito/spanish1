<?php
if(isset($_GET['r1'])) {
    $ra1=1;
}
elseif(isset($_GET['s1'])) {
    $s1=11;
}
elseif(isset($_GET['r2'])) {
    $r2=2;
}
elseif(isset($_GET['s2'])) {
    $s2=21;
}
elseif(isset($_GET['r3'])) {
    $r3=3;
}
elseif(isset($_GET['ss'])) {
    $s3=31;
}
elseif(isset($_GET['r4'])) {
    $r4=4;
}
elseif(isset($_GET['s4'])) {
    $s4=41;
}
elseif(isset($_GET['r5'])) {
    $r5=5;
}
elseif(isset($_GET['s5'])) {
    $s5=51;
}
elseif(isset($_GET['r6'])) {
    $r6=6;
}
elseif(isset($_GET['s6'])) {
    $s6=61;
}
elseif(isset($_GET['r7'])) {
    $r7=7;
}
elseif(isset($_GET['s7'])) {
    $s7=71;
}
elseif(isset($_GET['r8'])) {
    $r8=8;
}
elseif(isset($_GET['s8'])) {
    $s8=81;
}
elseif(isset($_GET['r9'])) {
    $r9=9;
}
elseif(isset($_GET['s9'])) {
    $s9=91;
}

else {
    echo "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   
    <title>Dice</title>
</head>
<body>
<div class="container text-light mt-5">
            <div class="row justify-content-lg-center">
                <div class="col-md-9 bg-dark p-3">
                    <h3 class="text-center">Welcome to the picture riddles</h3>
                    <h5 class="text-center">Click on the button to see your random riddles</h5>
                   

                <div class="text-center mt-3 pt-3">
             
                <a class="text-center" href="https://vidito.herokuapp.com/">Reset</a>
                    
                </div>

                <div class="text-center mt-3 pt-3">
                <form action="index.php" method="GET">
                    <button type="submit" name="r1" class="btn btn-primary btn-block ">Riddle 1</button>
                    <button type="submit" name="r2" class="btn btn-primary btn-block ">Riddle 2</button>
                    <button type="submit" name="r3" class="btn btn-primary btn-block ">Riddle 3</button>
                    <button type="submit" name="r4" class="btn btn-primary btn-block ">Riddle 4</button>
                    <button type="submit" name="r5" class="btn btn-primary btn-block ">Riddle 5</button>
                    <button type="submit" name="r6" class="btn btn-primary btn-block ">Riddle 6</button>
                    <button type="submit" name="r7" class="btn btn-primary btn-block ">Riddle 7</button>
                    <button type="submit" name="r8" class="btn btn-primary btn-block ">Riddle 8</button>
                    <button type="submit" name="r9" class="btn btn-primary btn-block ">Riddle 9</button>
                    <p>Solutions</p>

                    <button type="submit" name="s1" class="btn btn-primary btn-block ">Solution 1</button>
                    <button type="submit" name="s2" class="btn btn-primary btn-block ">Solution 2</button>
                    <button type="submit" name="s3" class="btn btn-primary btn-block ">Solution 3</button>
                    <button type="submit" name="s4" class="btn btn-primary btn-block ">Solution 4</button>
                    <button type="submit" name="s5" class="btn btn-primary btn-block ">Solution 5</button>
                    <button type="submit" name="s6" class="btn btn-primary btn-block ">Solution 6</button>
                    <button type="submit" name="s7" class="btn btn-primary btn-block ">Solution 7</button>
                    <button type="submit" name="s8" class="btn btn-primary btn-block ">Solution 8</button>
                    <button type="submit" name="s9" class="btn btn-primary btn-block ">Solution 9</button>
                    
                   
                    </form>
                </div>

                <div class="row justify-content-lg-center">
                <img src="<?php echo $ra1.'.jpg';?>" alt=""> 
                <img src="<?php echo $r2.'.jpg';?>" alt=""> 
                <img src="<?php echo $r3.'.jpg';?>" alt=""> 
                <img src="<?php echo $r4.'.jpg';?>" alt=""> 
                <img src="<?php echo $r5.'.jpg';?>" alt=""> 
                <img src="<?php echo $r6.'.jpg';?>" alt=""> 
                <img src="<?php echo $r7.'.jpg';?>" alt=""> 
                <img src="<?php echo $r8.'.jpg';?>" alt=""> 
                <img src="<?php echo $r9.'.jpg';?>" alt=""> 
                <img src="<?php echo $s1.'.jpg';?>" alt=""> 
                <img src="<?php echo $s2.'.jpg';?>" alt=""> 
                <img src="<?php echo $s3.'.jpg';?>" alt=""> 
                <img src="<?php echo $s4.'.jpg';?>" alt=""> 
                <img src="<?php echo $s5.'.jpg';?>" alt=""> 
                <img src="<?php echo $s6.'.jpg';?>" alt=""> 
                <img src="<?php echo $s7.'.jpg';?>" alt=""> 
                <img src="<?php echo $s8.'.jpg';?>" alt=""> 
                <img src="<?php echo $s9.'.jpg';?>" alt="">
                </div>

                </div>
            </div>
        </div>
    

</body>
</html>
