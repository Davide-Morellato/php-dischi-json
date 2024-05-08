<?php
    
    //9. creo una variabile in cui tramite la funzione file_get_contents() leggo il file dischi.json
    $data_disksjson = file_get_contents('dischi.json');

    //10. creo una variabile per la conversione di $data_disksjson con il metodo json_decode()
    $disks = json_decode($data_disksjson, true); //true: per la conversione in un array associativo
    
    //1., 8. Creo l'Array Associativo (copiato dal file dischi.json)
    // $disks = [
    //     [
    //         "title" => "New Jersey",
    //         "author" => "Bon Jovi",
    //         "year" => 1988,
    //         "poster" => "https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg",
    //         "genre" => "Rock"
    //     ],
    //     [
    //         "title" => "Live at Wembley 86",
    //         "author" => "Queen",
    //         "year" => 1992,
    //         "poster" => "https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg",
    //         "genre" => "Pop"
    //     ],
    //     [
    //         "title" => "Ten\"s Summoner\"s Tales",
    //         "author" => "Sting",
    //         "year" => 1993,
    //         "poster" => "https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg",
    //         "genre" => "Pop"
    //     ],
    //     [
    //         "title" => "Steve Gadd band",
    //         "author" => "Steve Gadd Band",
    //         "year" => 2018,
    //         "poster" => "https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg",
    //         "genre" => "Jazz"
    //     ],
    //     [
    //         "title" => "Brave new World",
    //         "author" => "Iron Maiden",
    //         "year" => 2000,
    //         "poster" => "https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg",
    //         "genre" => "Metal"
    //     ],
    //     [
    //         "title" => "One more car, one more rider",
    //         "author" => "Eric Clapton",
    //         "year" => 2002,
    //         "poster" => "https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg",
    //         "genre" => "Rock"
    //     ]
    // ];

    //2. header('Content-Type: application/json');
    //3. json_encode() per tradurre il dato in formato json

    header('Content-Type: application/json');

    echo json_encode($disks)
    
?>