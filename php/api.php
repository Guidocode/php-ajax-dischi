<?php

require_once __DIR__ . '/db.php';


$discs = empty($_GET['genre']) || $_GET['genre'] === 'All' ? $db : [];
$genres = [];

// se ho disc vuoto allora ho fatto il cambio della select e quindi ho un genere da filtrare
if(count($discs) === 0){

  foreach($db as $disc){
    if($disc['genre'] === $_GET['genre']){
      $discs[] = $disc;
    }
  }
}

// riempio l'array generi
foreach($db as $disc){
  //se l'album dei generi non contiene il genere lo pusho
  if(!in_array($disc['genre'], $genres)){
    $genres[] = $disc['genre'];
  }
}


$response = [
  'discs' => $discs,
  'genres' => $genres
];

	
header('Content-Type: application/json');

echo json_encode($response);