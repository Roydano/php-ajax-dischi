<?php 

    $dischi = [
        [
            "poster" => "https:\/\/www.onstageweb.com\/wp-content\/uploads\/2018\/09\/bon-jovi-new-jersey.jpg",
            "title" => "New Jersey",
            "author" => "Bon Jovi",
            "genre" => "Rock",
            "year" => "1988"
        ],

        [
            "poster" => "https://images-na.ssl-images-amazon.com/images/I/51FPNBYSmZL._AC_.jpg",
            "title" => "Live at Wembley 86",
            "author" => "Queen",
            "genre" => "Rock",
            "year" => "1992"
        ],

        [
            "poster" => "https://images-eu.ssl-images-amazon.com/images/I/41JD3CW65HL.__AC_QL70_ML2_.jpg",
            "title" => "Ten's Summoner's Tales",
            "author" => "Sting",
            "genre" => "Pop",
            "year" => "1993"
        ],

        [
            "poster" => "https:\/\/cdn2.jazztimes.com\/2018\/05\/SteveGadd-800x723.jpg",
            "title" => "Steve Gadd Band",
            "author" => "Steve Gadd Band",
            "genre" => "Jazz",
            "year" => "2018"
        ],

        [
            "poster" => "https:\/\/images-na.ssl-images-amazon.com\/images\/I\/810nSIQOLiL._SY355_.jpg",
            "title" => "Brave new World",
            "author" => "Iron Maiden",
            "genre" => "Metal",
            "year" => "2000"
        ],

        [
            "poster" => "https:\/\/upload.wikimedia.org\/wikipedia\/en\/9\/97\/Eric_Clapton_OMCOMR.jpg",
            "title" => "One more car, one more raider",
            "author" => "Eric Clapton",
            "genre" => "Rock",
            "year" => "2002"
        ],

        [
            "poster" => "https:\/\/images-na.ssl-images-amazon.com\/images\/I\/51rggtPgmRL.jpg",
            "title" => "Made in Japan",
            "author" => "Deep Purple",
            "genre" => "Rock",
            "year" => "1972"
        ],

        [
            "poster" => "https://i.pinimg.com/originals/62/c6/e0/62c6e0b44d1ddd7d3a1b3dd371aca2e2.jpg",
            "title" => "And Justice for All",
            "author" => "Metallica",
            "genre" => "Metal",
            "year" => "1988"
        ],

        [
            "poster" => "https://images-na.ssl-images-amazon.com/images/I/71wvKUYZBcL._AC_SL1000_.jpg",
            "title" => "Hard Wired",
            "author" => "Dave Weckl",
            "genre" => "Jazz",
            "year" => "1994"
        ],

        [
            "poster" => "https://images-na.ssl-images-amazon.com/images/I/6148jblbNqL._AC_SL1500_.jpg",
            "title" => "Bad",
            "author" => "Michael Jackson",
            "genre" => "Pop",
            "year" => "1987"
        ],

    ];

header('Content-Type: application/json');

echo json_encode($dischi);