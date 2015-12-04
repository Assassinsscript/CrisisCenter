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

    "accepted"         => "Le champ :attribute doit être accepté.",
    "active_url"       => "Le champ :attribute n'est pas une URL valide.",
    "after"            => "Le champ :attribute doit être une date postérieure au :date.",
    "alpha"            => "Le champ :attribute doit seulement contenir des lettres.",
    "alpha_dash"       => "Le champ :attribute doit seulement contenir des lettres, des chiffres et des tirets.",
    "alpha_num"        => "Le champ :attribute doit seulement contenir des chiffres et des lettres.",
    "before"           => "Le champ :attribute doit être une date antérieure au :date.",
    "between"          => array(
        "numeric" => "La valeur de :attribute doit être comprise entre :min et :max.",
        "file"    => "Le fichier :attribute doit avoir une taille entre :min et :max kilobytes.",
        "string"  => "Le texte :attribute doit avoir entre :min et :max caractères.",
        'array'   => 'The :attribute must have between :min and :max items.',
    ),
    "confirmed"        => "Le champ de confirmation :attribute ne correspond pas.",
    "date"             => "Le champ :attribute n'est pas une date valide.",
    "date_format"      => "Le champ :attribute ne correspond pas au format :format.",
    "different"        => "Les champs :attribute et :other doivent être différents.",
    "digits"           => "Le champ :attribute doit avoir :digits chiffres.",
    "digits_between"   => "Le champ :attribute doit avoir entre :min and :max chiffres.",
    "email"            => "Le format du champ :attribute est invalide.",
    "exists"           => "Le champ :attribute sélectionné est invalide.",
    "image"            => "Le champ :attribute doit être une image.",
    "in"               => "Le champ :attribute est invalide.",
    "integer"          => "Le champ :attribute doit être un entier.",
    "ip"               => "Le champ :attribute doit être une adresse IP valide.",
    "max"              => array(
        "numeric" => "La valeur de :attribute ne peut être inférieur à :max.",
        "file"    => "Le fichier :attribute ne peut être plus gros que :max kilobytes.",
        "string"  => "Le champ de :attribute ne peut contenir plus de :max caractères.",
        'array'   => 'The :attribute may not have more than :max items.',
    ),
    "mimes"            => "Le champ :attribute doit être un fichier de type : :values.",
    "min"              => array(
        "numeric" => "La valeur de :attribute doit être supérieure à :min.",
        "file"    => "Le fichier :attribute doit être plus que gros que :min kilobytes.",
        "string"  => "Le champ :attribute doit contenir au moins :min caractères.",
        'array'   => 'The :attribute may not have more than :max items.',
    ),
    "not_in"           => "Le champ :attribute sélectionné n'est pas valide.",
    "numeric"          => "Le champ :attribute doit contenir un nombre.",
    "regex"            => "Le format du champ :attribute est invalide.",
    "required"         => "Le champ :attribute est obligatoire.",
    "required_if"      => "Le champ :attribute est obligatoire quand la valeur de :other est :value.",
    "required_with"    => "Le champ :attribute est obligatoire quand :values est présent.",
    "required_without" => "Le champ :attribute est obligatoire quand :values n'est pas présent.",
    "same"             => "Les champs :attribute et :other doivent être identiques.",
    "size"             => array(
        "numeric" => "La taille de la valeur de :attribute doit être :size.",
        "file"    => "La taille du fichier de :attribute doit être de :size kilobytes.",
        "string"  => "Le champ de :attribute doit contenir :size caractères.",
        'array'   => 'The :attribute must contain :size items.',
    ),
    "unique"           => "La valeur du champ :attribute est déjà utilisée.",
    "url"              => "Le format de l'URL de :attribute n'est pas valide.",

    'array'                => 'Le champ :attribute doit être un tableau.',
    'boolean'              => 'Le champ :attribute doit être vrai ou faux.',
    'filled'               => 'Le champ :attribute est requis.',
    'json'                 => 'Le champ :attribute doit être un document JSON valide.',
    'required_with_all'    => 'Le champ :attribute est nécessaire quand les champs :values sont présents.',
    'required_without_all' => 'Le champ :attribute field est nécessaire quand aucun des champs :values sont présents.',
    'string'               => 'Le champ :attribute doit être une chaîne de caractères.',
    'timezone'             => 'Le champ :attribute doit être un fuseau horaire valide.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
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
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
//        'email' => 'Adresse e-mail',
//        'e-mail' => 'Adresse e-mail',
//        'password' => 'Mot de Passe',
    ],

];