<?php

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

        // * ARREY FILTRO
        $hotels = array_filter($hotels, function($hotel, $index) {
           return $hotel['parking'] == true ;
       }, ARRAY_FILTER_USE_BOTH);

        // * ARREY FILTRO IN ARROW FUNCTION 
            //$hotels = array_filter($hotels, fn($hotel) => $hotel['parking']);


        // * ARREY CON IL FOREACH
            //    foreach(Hotels as hotel){
            //        if(!hotel['parking']){
            //          unset($hotel[$index]);
            //        }
            //    }
            //    $hotels = array_values($hotels);
    }


    // * FILTRO PER VOTO

    $filter_vote = $_GET['vote_filter'] ?? false;
    if($filter_vote)
        $hotels = array_filter($hotels, fn($hotel) => $hotel['vote'] >= $filter_vote);
    