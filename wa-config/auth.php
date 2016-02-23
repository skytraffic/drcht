<?php
return array (
  'localhost' => 
  array (
    'auth' => true,
    'app' => 'site',
    'rememberme' => true,
    'params' => 
    array (
      'confirm_email' => '1',
      'button_caption' => 'Регистрация',
    ),
    'fields' => 
    array (
      'lastname' => 
      array (
        'required' => 'true',
        'caption' => 'Фамилия',
        'placeholder' => '',
      ),
      'firstname' => 
      array (
        'required' => 'true',
        'caption' => 'Имя',
        'placeholder' => '',
      ),
      'middlename' => 
      array (
        'required' => 'true',
        'caption' => 'Отчество',
        'placeholder' => '',
      ),
      'email' => 
      array (
        'caption' => 'Email',
        'placeholder' => '',
        'required' => true,
      ),
      'password' => 
      array (
        'caption' => 'Пароль',
        'placeholder' => '',
        'required' => true,
      ),
      'phone' => 
      array (
        'caption' => 'Телефон',
        'placeholder' => '',
      ),
    ),
  ),
);
