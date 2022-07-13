<?php
header("Access-Control-Allow-Origin: *");
#$rest_json = file_get_contents("php://input");
#$_POST = json_decode($rest_json, true);

$_arr = array (

	array(
		'title' => 'VARIADO',
		'content' => array(
			array (
				'prefix' => 'have a',
				'exp' => array('wow pow','wowpow','wow-pow'),
				'desc' => 'tener una reunión o conferencia'
			),
            array (
                'exp' => 'Your call',
                'desc' => 'Su decisión',
            ),
            array (
                'exp' => 'On cloud 9',
				'desc' => 'Como en una nube',
            ),
			array(
				'exp' => 'let alone...',
				'desc' => 'mucho menos...'
			),
			array(
				'exp' => 'I follow you what you say',
				'desc' => 'Entiendo lo que dice'
			),
			array(
				'exp' => 'My two cents',
				'desc' => 'Mi humilde opinión'
			),
			array(
				'exp' => 'Say that again',
				'desc' => 'Me puede repetir lo que dijo'
			),
			array(
				'exp' => 'My bad',
				'desc' => 'Mi culpa'
			),
			array(
				'exp' => 'Get to the point',
				'desc' => 'Al grano/Directo al punto'
			),
			array(
				'exp' => 'Hop into a call',
				'desc' => 'Hagamos una llamada'
			),
			array(
				'exp' => 'Long story short',
				'desc' => 'En resumen'
			),
			array(
				'exp' => 'Bury the hatchet',
				'desc' => 'Hacer las paces'
			),
			array(
				'exp' => 'No wonder',
				'desc' => 'No es de extrañar/Con razón'
			),
			array(
				'prefix' => 'Dont\'',
				'exp' => 'Rub it in',
				'desc' => 'Restregar'
			),
			array(
				'exp' => 'Spice things up',
				'desc' => 'Alegrar/avivar'
			),
			array(
				'exp' => 'Come clean',
				'desc' => 'Confesar/admitir'
			),
			array(
				'exp' => 'Donde deal',
				'desc' => 'Trato hecho'
			),
			array(
				'exp' => 'Live it up',
				'desc' => 'Vive el momento'
			),
			array(
				'exp' => 'Food for thought',
				'desc' => 'Para pensarlo/reflexionar'
			),
			array(
				'exp' => 'Come in handy',
				'desc' => 'Útil'
			),
			array(
				'exp' => 'Go with the flow',
				'desc' => 'Sigue la corriente'
			),
			array(
				'exp' => 'Easy come, easy go',
				'desc' => 'Lo que fácil viene, fácil se va'
			),
			array(
				'exp' => 'Hard to come by',
				'desc' => 'Difícil de conseguir'
			)
		)
    ), 
    array (
      'title' => 'Formas de SALUDAR',
      'content' => 
      array (
        array (
          'category' => 'Formal',
          'content' => 
          array (
            array (
              'exp' => 'Hello',
              'desc' => 'Hola',
            ),
          ),
        ),
        array (
          'category' => 'Casual',
          'content' => 
          array (
            array (
              'exp' => array('Hi', 'Hey!', 'Hi there!', 'Hey there!'),
              'desc' => 'Hola',
            ),
            array (
              'exp' => 'How are you?',
              'desc' => '¿Cómo estas?',
            ),
            array (
              'exp' => 'What are you up to these days?',
              'desc' => '¿Donde andaba metido?',
            ),
            array (
              'exp' => 'What’s new?',
              'desc' => '¿Qué me cuenta?',
            ),
            array (
              'exp' => 'How are you holding up?',
              'desc' => '¿Cómo seguiste?',
            ),
            array (
              'exp' => array('Doing OK?', 'Everything OK?'),
              'desc' => '¿Todo bien?',
            ),
            array (
              'exp' => array('How are things going?', 'How’s it going?', 'How are things?', 'What’s going on?'),
              'desc' => '¿Cómo va todo?',
            ),
            array (
              'exp' => 'How have you been?',
              'desc' => '¿Cómo te ha ido?',
            ),
            array (
              'exp' => 'How’s everyone?',
              'desc' => '¿Cómo estan?',
            ),
            array (
              'exp' => 'How’s everyone doing?',
              'desc' => '¿Cómo estan todos',
            ),
            array (
              'exp' => 'What’s up?',
              'desc' => '¿Qué cuenta?',
            ), 
            array (
              'exp' => 'What’s happening?',
              'desc' => '¿Qué hay?',
            ),
			array (
				'exp' => array(
					'Nice to see you!',
					'It\'s nice to see you again!',
					'Good to see you!',
					'Pleased to meet you.',
					'Nice to meet you'
				),
				'desc' => '¡Qué bueno verte/conocerte/saludarte!'
			)
          ),
        ),
        array (
          'category' => 'Extremadamente informal',
          'content' => 
          array (
            array (
              'exp' => array( 'Hey man!', 'Hey bro!', 'Hey girl!', 'Hey dude!','Hey buddy!'),
              'desc' => 'Mae',
            ),
            array (
              'exp' => 'Howdy!',
              'desc' => '¿Qué hay?',
            ),
            array (
              'exp' => 'How are ya?',
              'desc' => '¿Cómo estas?',
            ),
          ),
        ),
      ),
    ),
    array (
      'title' => 'Formas de responder un SALUDO',
      'content' => 
      array (
        array (
          'category' => 'Formal',
          'content' => 
          array (
            array (
              'exp' => 'Really well',
              'desc' => 'Todo muy bien',
            ),
          ),
        ),
        array (
          'category' => 'Casual',
          'content' => 
          array (
            array (
              'exp' => 'Doing great',
              'desc' => 'Super bien',
            ),
            array (
              'exp' => 'So far so good',
              'desc' => 'Todo tranqui',
            ),
            array (
              'exp' => 'Awesome',
              'desc' => 'Genial',
            ),
            array (
              'prefix' => 'Working',
              'exp' => 'at flat out speed',
              'desc' => 'A toda velocidad',
            ),
          ),
        ),
        array (
          'category' => 'Extremadamente informal',
          'content' => 
          array (
            array (
              'exp' => 'Having a blast',
              'desc' => 'Super mega genial',
            ),
            array (
              'exp' => 'Barely making it',
              'desc' => 'Apenas sobreviviendo',
            ),
          ),
        ),
      ),
    ),
    array (
      'title' => 'Formas de DESPEDIDA',
      'content' => 
      array (
        array (
          'exp' => 'Later/See you later',
          'desc' => 'Hasta pronto',
        ),
        array (
          'exp' => 'Bye now',
          'desc' => 'Te dejo',
        ),
        array (
          'exp' => 'Bye bye',
          'desc' => 'Chao',
        ),
        array (
          'exp' => 'I\'m off',
          'desc' => 'Me fui',
        ),
        array (
          'exp' => 'Son long',
          'desc' => 'Chao',
        ),
        array (
          'prefix' => 'I am',
          'exp' => 'calling it a day',
          'desc' => 'Cierro el chinamo',
        ),
        array (
          'exp' => 'Cheers',
          'desc' => '¡Salud! (pura vida)',
        ),
      ),
    )
);

http_response_code(200);
echo json_encode($_arr);
?>