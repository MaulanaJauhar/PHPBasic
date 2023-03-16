<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php 
        $data = [
            "Nasi Goreng",
            "Mie Goreng",
            "Nasi Padang"
        ];
        $data[]="Nasi Pecel";
        // remove Mie Goreng from data array
        //unset($data[1]);


    ?>
    <ul>
        <?php foreach($data as $item): ?>
            <li>
                <?= $item; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <ol>
        <!-- //iterate data array using for loop -->
        <?php for($i=0; $i<count($data); $i++): ?>
            <li>
                <?= $data[$i]; ?>
            </li>
        <?php endfor; ?>
    </ol>
</body>
</html>