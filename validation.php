<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute musi zostać zaakceptowane.',
  	'active_url'           => ':attribute nie jest prawidłowym adresem URL.',
  	'after'                => ':attribute musi być datą późniejszą niż :date.',
  	'alpha'                => ':attribute może zawierać tylko litery.',
  	'alpha_dash'           => ':attribute może zawierać tylko litery, cyfry i podkreślenia.',
  	'alpha_num'            => ':attribute może zawierać tylko litery i cyfry.',
  	'array'                => ':attribute musi być tablicą.',
  	'before'               => ':attribute musi być datą wcześniejszą niż :date.',
  	'between'              => [
  		'numeric' => ':attribute musi być wartością pomiędzy :min i :max.',
  		'file'    => ':attribute musi mieć pomiędzy :min a :max kilobajtów.',
  		'string'  => ':attribute musi mieć pomiędzy :min a :max znaków.',
  		'array'   => ':attribute musi mieć pomiędzy :min a :max pozycji.',
  	],
  	'boolean'              => 'pole :attribute musi być true lub false',
  	'confirmed'            => ':attribute potwierdzenie nie pasuje.',
  	'date'                 => ':attribute nie jest prawidłową datą.',
  	'date_format'          => ':attribute nie zgadza się z formatem :format.',
  	'different'            => ':attribute i :other muszą być różne.',
  	'digits'               => ':attribute musi mieć :digits cyfr.',
  	'digits_between'       => ':attribute musi mieć pomiędzy :min a :max cyfr.',
    'distinct'             => ':attribute posiada zdublowaną wartość.',
  	'email'                => ':attribute musi być poprawnym adresem.',
  	'exists'               => 'wybrany :attribute jest nieprawidłowy.',
    'filled'               => ':attribute jest wymagane.',
  	'image'                => ':attribute musi być obrazkiem.',
  	'in'                   => 'wybrany :attribute jest nieprawidłowy.',
    'in_array'             => ':attribute nie istnieje w :other.',
  	'integer'              => ':attribute musi być liczbą.',
  	'ip'                   => ':attribute musi być poprawnym adresem IP.',
    'json'                 => ':attribute musi byc poprawnym ciągiem znaków JSON.',
  	'max'                  => [
  		'numeric' => ':attribute nie może być większy niż :max.',
  		'file'    => ':attribute nie może być większy niż :max kilobajtów.',
  		'string'  => ':attribute nie może być dłuższy niż :max znaków.',
  		'array'   => ':attribute nie może mieć więcej niż :max pozycji.',
  	],
  	'mimes'                => ':attribute musi być plikiem typu: :values.',
  	'min'                  => [
  		'numeric' => ':attribute musi większy lub równy :min.',
  		'file'    => ':attribute musi mieć co najmniej :min kilobajtów.',
  		'string'  => ':attribute musi mieć co najmniej :min znaków.',
  		'array'   => ':attribute musi mieć co najmniej :min pozycji.',
  	],
  	'not_in'               => 'wybrany :attribute jest nieprawidłowy.',
  	'numeric'              => ':attribute musi być liczbą.',
    'present'              => ':attribute musi być teraźniejszością.', // (?)
  	'regex'                => 'format :attribute jest nieprawidłowy',
  	'required'             => 'pole :attribute jest wymagane.',
  	'required_if'          => 'pole :attribute jest wymagane, gdy :other ma wartość :value.',
    'required_unless'      => ':attribute jest wymagane chyba że :other znajduje się w :values.',
  	'required_with'        => 'pole :attribute jest wymagane, gdy :values są zdefiniowane.',
  	'required_with_all'    => 'pole :attribute jest wymagane, gdy :values są zdefiniowane.',
  	'required_without'     => 'pole :attribute jest wymagane, gdy :values nie są zdefiniowane.',
  	'required_without_all' => 'pole :attribute jest wymagane, gdy żadne z :values nie są zdefiniowane.',
  	'same'                 => ':attribute i :other muszą być takie same.',
  	'size'                 => [
  		'numeric' => ':attribute must be :size.',
  		'file'    => ':attribute musi mieć :size kilobajtów.',
  		'string'  => ':attribute musi mieć :size znaków.',
  		'array'   => ':attribute musi zawierać :size pozycji.',
  	],
    'string'               => ':attribute musi być ciągiem znaków.',
    'timezone'             => ':attribute musi być prawidłową strefą czasową.',
  	'unique'               => ':attribute jest już zajęty.',
  	'url'                  => 'format :attribute jest nieprawidłowy.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention 'attribute.rule' to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of 'email'. This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
      'username' => 'nazwa użytkownika'
    ],

];
