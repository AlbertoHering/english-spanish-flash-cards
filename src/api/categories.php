<?php
sleep(3);
header("Access-Control-Allow-Origin: *");
#$rest_json = file_get_contents("php://input");
#$_POST = json_decode($rest_json, true);

$_arr = array (
    array(
          'id' => 1,
          'image' => 'https://images.pixieset.com/04917372/59a4613853b6e40890e18039e4aef864-large.jpg',
          'imageBg' => 'https://images.pixieset.com/04917372/59a4613853b6e40890e18039e4aef864-large.jpg',
          'title' => 'Maternidad',
          'subtitle' => 'Embarazadas, Recién-nacidos, Lactancia',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et euismod ligula. Morbi mattis pretium eros, ut mollis leo tempus eget. Sed in dui ac ipsum feugiat ultricies. Phasellus vestibulum enim quis quam congue, non fringilla orci placerat. Praesent sollicitudin'
        ),
    array(
          'id' => 2,
          'image' => 'https://images.pixieset.com/04917372/d42f5f1c4b2f7090a4eed06a410bff19-large.jpg',
          'imageBg' => 'https://images.pixieset.com/04917372/d42f5f1c4b2f7090a4eed06a410bff19-large.jpg',
          'title' => 'Infantil',
          'subtitle' => 'Niños, Minimalistas, Smash',
          'description' => ''
        ),
    array(
          'id' => 3,
          'image' => 'https://images.pixieset.com/04917372/933fb57e27bbd4be87ccffe5fe18e2b0-large.jpg',
          'imageBg' => 'https://images.pixieset.com/04917372/933fb57e27bbd4be87ccffe5fe18e2b0-large.jpg',
          'title' => 'Retrato',
          'subtitle' => 'Individual, Parejas, Familiares',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et euismod ligula. Morbi mattis pretium eros, ut mollis leo tempus eget. Sed in dui ac ipsum feugiat ultricies. Phasellus vestibulum enim quis quam congue, non fringilla orci placerat. Praesent sollicitudin'
        ),
    array(
          'id' => 4,
          'image' => 'https://images.pixieset.com/04917372/05560fdec37d84c7128aabfad5a77d43-large.jpg',
          'imageBg' => 'https://images.pixieset.com/04917372/05560fdec37d84c7128aabfad5a77d43-large.jpg',
          'title' => 'Boudoir',
          'subtitle' => 'Semi-desnudos, Desnudos, Boudoir',
          'description' => ''
        ),
    array(
          'id' => 5,
          'image' => 'https://images.pixieset.com/04917372/05560fdec37d84c7128aabfad5a77d43-large.jpg',
          'imageBg' => 'https://images.pixieset.com/04917372/05560fdec37d84c7128aabfad5a77d43-large.jpg',
          'title' => 'Productos',
          'subtitle' => 'Alimentos, Arquitectura',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et euismod ligula. Morbi mattis pretium eros, ut mollis leo tempus eget. Sed in dui ac ipsum feugiat ultricies. Phasellus vestibulum enim quis quam congue, non fringilla orci placerat. Praesent sollicitudin'
        ),
);


http_response_code(200);
echo json_encode($_arr);
?>