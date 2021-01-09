<?php



if(isset($_GET['toss'])) {
    $number1 = rand(1,6);
    $number2 = rand(1,6);
}
elseif(isset($_GET['reset'])) {
    header("Location: http://localhost/1/dice.php");
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
            <div class="row justify-content-md-center">
                <div class="col-md-5 bg-dark p-3">
                    <h3 class="text-center">Welcome to the random dice tossing</h3>
                    <h5 class="text-center">Click on the button to see your dice number</h5>

                <div class="text-center mt-3 pt-3">
                    <img src="images/<?php echo $number1.'.png'; ?>" alt="">
                    <img src="images/<?php echo $number2.'.png'; ?>" alt="">
                </div>

                <div class="text-center mt-3 pt-3">
                <form action="dice.php" method="GET">
                    <button type="submit" name="toss" class="btn btn-primary btn-block ">Toss the dice</button>
                    <button type="submit" name="reset" class="btn btn-primary btn-block ">Reset</button>
                    </form>
                </div>


                </div>
            </div>
        </div>
    



</body>
</html>
