<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

 // * FILTRO PER LA RICERCA CON INPUT 
    // $form_sent = !empty($_GET);

    // $hotel_result = ($form_sent) ? [] : $hotels;

    // if($form_sent){

    //     $filter_name = $_GET['hotel-filter'] ?? '';

    //     foreach($hotels as $hotel){
    //         $result = false;
    //         if(str_contains($hotel['name'], $filter_name))
    //         {
    //             $hotel_result[] = $hotel;
    //         }
    //     }
    // }

    // * FILTRO PER PARCHEGGIO

    $filter_parcking = (isset($_GET['check-parking'])) ? true : false;

    if($filter_parcking){

        $hotels = array_filter($hotels, function($hotel, $index) {
           return $hotel['parking'] == true ;
       }, ARRAY_FILTER_USE_BOTH);
    }



?>