<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
    <?php 
        $name = "Dark Matter";
        $read = true;

        //If - Else
        if($read){
            $message = "You have read $name";
        }else{
            $message = "You have not read $name";
        }
    ?>

    <h1>
        //Opsi 1. Menggunakan echo
            <?php echo $message; ?>
        //Opsi 2. Menggunakan short echo
            <?= $message; ?>
    </h1>
</body>
</html>