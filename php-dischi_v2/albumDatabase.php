<?php

  $albumArr = [
    "id1" => [
      "img" => "public/img/best_of_the_beast.jpg",
      "title" => "Best of the Beast",
      "band" => "Iron Maiden",
      "release" => "2001"
    ],
    "id2" => [
      "img" => "public/img/death_magnetic.jpg",
      "title" => "Death Magnetic",
      "band" => "Metallica",
      "release" => "2009"
    ],
    "id3" => [
      "img" => "public/img/images_and_words.jpg",
      "title" => "Images and Words",
      "band" => "Dream Theater",
      "release" => "1992"
    ],
    "id4" => [
      "img" => "public/img/gods_of_war.jpg",
      "title" => "Gods Of War",
      "band" => "Manowar",
      "release" => "2009"
    ],
    "id5" => [
      "img" => "public/img/the_curse.jpg",
      "title" => "The Curse",
      "band" => "Atreyu",
      "release" => "2010"
    ],
    "id6" => [
      "img" => "public/img/poison.jpg",
      "title" => "Poison",
      "band" => "Bullet for My Valentine",
      "release" => "2014"
    ],
    "id7" => [
      "img" => "public/img/hybrid_theory.jpg",
      "title" => "Hybrid Theory",
      "band" => "Linkin Park",
      "release" => "2001"
    ],
    "id8" => [
      "img" => "public/img/back_in_black.jpg",
      "title" => "Back In Black",
      "band" => "AC/DC",
      "release" => "2003"
    ],
    "id9" => [
      "img" => "public/img/greatest_hits.jpg",
      "title" => "Greatest Hits",
      "band" => "Guns N' Roses",
      "release" => "2010"
    ],
    "id10" => [
      "img" => "public/img/discovering_the_waterfront.jpg",
      "title" => "Discovering The Waterfront",
      "band" => "Silverstein",
      "release" => "2006"
    ],
  ];

  if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    echo json_encode($albumArr);
  }

?>
