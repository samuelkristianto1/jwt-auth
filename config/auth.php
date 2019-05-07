<?php
return[
  'defaults' => [
    'guard' => env("AUTH_GUARD", "api"),
    'passwords' => 'users',
  ],
  'guards' => [
      'api' => [
          'driver' => 'jwt',
          'provider' => 'users',
      ],
  ],
  'providers' => [
    'users' => [
        'driver' => 'eloquent',
        'model' => App\User::class,
    ],
  ],
  'passwords' => [
    'users' => [
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
    ],
],

]
?>