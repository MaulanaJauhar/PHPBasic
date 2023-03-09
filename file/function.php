<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function & Filtering</title>
</head>
<body>
    <?php 
        $books = [
            [
              'name'          => "Do Andorids Dream of Electric Sheep",
              'author'        => "Philip K. Dick",
              'realiseYear'   => 1968,
              'purchase_url'  => "http://example.com"
            ],
            [
              'name'          => "Project Hail Mary",
              'author'        => "Andy Weir",
              'realiseYear'   => 2021,
              'purchase_url'  => "http://example.com"
            ],
            [
                'name'          => "The Martisan",
                'author'        => "Andy Weir",
                'realiseYear'   => 2011,
                'purchase_url'  => "http://example.com"
              ]
          ];
    ?>

    <ul>
        <?php foreach ($books as $book) :?>
            <?php if ($book['author'] === 'Andy Weir'):?>
                <li>
                    <a href="<?= $book['purchase_url'] ?>">
                        <?= $book['name'] ?> (<?= $book['realiseYear'] ?>)
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>
</html>