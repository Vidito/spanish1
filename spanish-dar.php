<?php
//    for spanish characters
ini_set('default_charset', 'windows-1252');

$word = explode("-", file_get_contents('sentences.txt'));
$random = array_rand($word);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <!-- for Spanish characters -->
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
    <title>Spanish Sentences</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap');

        body {
            background-image: linear-gradient(90deg, rgb(223, 90, 189), rgb(140, 2, 153));
            background-repeat: no-repeat;
            height: 100vh;
            overflow: hidden;
            color: white;
            text-align: center;
            font-family: 'Balsamiq Sans', cursive;
        }


        h1 {
            margin: 100px auto;
        }
    </style>
</head>

<body>
    <h2>Random Spanish sentences with the verb 'dar'</h2>
    <h1> <?php echo $word[$random]; ?></h1>

</body>

</html>