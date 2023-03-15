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

    $filteredBooks = array_filter($books, function($book){
        return $book['realiseYear'] >= 1950 && $book['realiseYear'] <= 2000;
});

require "index.view.php";