<?php

$validates =[

"username" =>[
    'filters' => FILTER_VALIDATE_REGEXP ,
    'my_options'=> ['options'=> ['regexp' => '/^[A-Z][a-z]{3,8}$/' ]],
    'error' => "username should be start with upper char and length between 3 and 8 char ",
]
,

"email" =>[
    'filters' => FILTER_VALIDATE_EMAIL ,
    'error' => "enter valid email",
],

"age" =>[
    'filters' => FILTER_VALIDATE_INT ,
    'my_options'=>['options' => [ 'min_range'=> 15   , 'max_range'=>45]],
    'error' => "the age should be between 15 and 45 ",
],

"password" =>[
    'filters' => FILTER_VALIDATE_REGEXP ,
    'my_options'=> ['options'=> ['regexp' => '/^[a-z0-9]{3,8}$/' ]],
    'error' => "password should be   length between 3 and 8 char ",
]

];