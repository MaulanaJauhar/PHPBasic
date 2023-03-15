<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <?php 
        $books = [
            [
              'name'          => "Do Andorids Dream of Electric Sheep",
              'author'        => "Philip K. Dick",
              'purchase_url'  => "http://example.com"
            ],
            [
              'name'          => "Project Hail Mary",
              'author'        => "Andy Weir",
              'purchase_url'  => "http://example.com"
            ]
          ];
    ?>

    <ul>
        <?php foreach($books as $book): ?>
            <li>
                <h2><?= $book['name'] ?></h2>
                <p>By <?= $book['author'] ?></p>
                <a href="<?= $book['purchase_url'] ?>">Purchase</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>