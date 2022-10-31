<?php


$pass = htmlentities("<a herf='farhana' >Farhana</a>");
echo html_entity_decode($pass);

echo ('</br>');

$nickname = "Ibrahim";

echo str_repeat($nickname, 10);

echo ('</br>');
$password = '12345687';
if(empty($password)){
    echo " give me the password";
}else{
    echo "perfect";
}

echo ('</br>');



$string = "i love my country";

$arr = explode(' ', $string);
print_r($arr);


echo ('</br>');


$img_name = "test.png";

$image_array = explode('.', $img_name);

if($image_array[1] == 'jpg'){
    echo "the image is perfect";
} else{
    echo "select another picture";
}

echo ('</br>');


$img_name = "test.png";

$image_array = explode('.', $img_name);

if($image_array[1] == 'png'){
    echo "the image is perfect";
} else{
    echo "select another picture";
}

echo ('</br>');

$line = [
    'I',
    'love',
    'chocolate'
];

echo implode(' ', $line);

echo ('</br>');

$users_id = [
    [
        'name' => 'rohim',
        'gmail' => '12345@gmail.com',
    ],

    [
        'name' => 'rohim',
        'gmail' => '12345@gmail.com',
    ],

    [
        'name' => 'rohim',
        'gmail' => '12345@gmail.com',
    ],

    [
        'name' => 'rohim',
        'gmail' => '12345@gmail.com',
    ],

    [
        'name' => 'rohim',
        'gmail' => '12345@gmail.com',
    ],
];

echo count($users_id);


echo ('</br>');

$users_id = [
    [
        'name' => 'rohim',
        'gmail' => '12345@gmail.com',
    ],

    [
        'name' => 'rohim',
        'gmail' => '12345@gmail.com',
    ],

    [
        'name' => 'rohim',
        'gmail' => '12345@gmail.com',
    ],

    [
        'name' => 'rohim',
        'gmail' => '12345@gmail.com',
    ],

    [
        'name' => 'rohim',
        'gmail' => '12345@gmail.com',
    ],
];

if (count($users_id) > 7){
    echo 'sorry time over';
} else{ echo 'perfect';
}


echo ('</br>');

$users_id = [
    [
        'name' => 'rohim',
        'gmail' => '12345@gmail.com',
    ],

    [
        'name' => 'rohim',
        'gmail' => '12345@gmail.com',
    ],

    [
        'name' => 'rohim',
        'gmail' => '12345@gmail.com',
    ],

    [
        'name' => 'rohim',
        'gmail' => '12345@gmail.com',
    ],

    [
        'name' => 'rohim',
        'gmail' => '12345@gmail.com',
    ],

    [
        'name' => 'rohim',
        'gmail' => '12345@gmail.com',
    ],
];

if (count($users_id) > 5 ){
    echo 'sorry time over';
} else{ echo 'perfect';
}


echo ('</br>');

$flowers = [
    'rose',
    'lily',
    'lotus'
    
];

array_push($flowers, 'sunflower', 'water lily');

echo "<pre>";
print_r($flowers);
echo "</pre>";


echo ('</br>');

$flowers = [
    'rose',
    'lily',
    'lotus'
    
];

array_pop($flowers);

echo "<pre>";
print_r($flowers);
echo "</pre>";