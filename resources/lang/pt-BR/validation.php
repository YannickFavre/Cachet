<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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

    'accepted'   => 'O campo :attribute deve ser aceito.',
    'active_url' => 'O campo :attribute não contém uma URL válida.',
    'after'      => 'O campo :attribute deverá conter uma data posterior a :date.',
    'alpha'      => 'O campo :attribute deverá conter apenas letras.',
    'alpha_dash' => 'O campo :attribute só pode conter letras, números, e hifens.',
    'alpha_num'  => 'O campo :attribute só pode conter letras e números.',
    'array'      => 'O campo :attribute deve ser um vetor.',
    'before'     => 'O campo :attribute deverá conter uma data anterior a :date.',
    'between'    => [
        'numeric' => 'O campo :attribute deverá conter uma data anterior a :date.',
        'file'    => 'O campo :attribute deverá ter um valor entre :min - :max.',
        'string'  => 'O campo :attribute deve estar entre :min e :max kilobytes.',
        'array'   => 'O campo :attribute deve ter entre :min e :max itens.',
    ],
    'boolean'        => 'O campo :attribute deve ter entre :min e :max itens.',
    'confirmed'      => 'O campo :attribute deve ser verdadeiro ou falso.',
    'date'           => 'A confirmação do campo :attribute não corresponde.',
    'date_format'    => 'O campo :attribute não é uma data válida.',
    'different'      => 'O campo :attribute não corresponde ao formato :format.',
    'digits'         => 'O campo :attribute e :other devem ser diferentes.',
    'digits_between' => 'O campo :attribute deve ter :digits dígitos.',
    'email'          => 'O campo :attribute deve ter entre :min e :max dígitos.',
    'exists'         => 'O campo :attribute deve ser um endereço de email válido.',
    'distinct'       => 'O campo :attribute tem um valor duplicado.',
    'filled'         => 'O formato de :attribute é inválido.',
    'image'          => 'O :attribute deve ser uma imagem.',
    'in'             => 'O :attribute deve ser uma imagem.',
    'in_array'       => 'O campo :attribute não existe em :other.',
    'integer'        => 'The selected :attribute is invalid.',
    'ip'             => 'The :attribute must be an integer.',
    'json'           => 'O :attribute tem que ser uma string JSON válida.',
    'max'            => [
        'numeric' => 'The :attribute must be a valid IP address.',
        'file'    => 'The :attribute may not be greater than :max.',
        'string'  => 'The :attribute may not be greater than :max kilobytes.',
        'array'   => 'A: atributo não pode ter mais de que :max itens.',
    ],
    'mimes' => 'A: atributo não pode ter mais de que :max itens.',
    'min'   => [
        'numeric' => 'The :attribute must be a file of type: :values.',
        'file'    => 'O :attribute deve ter pelo menos :min kilobytes.',
        'string'  => 'O :attribute deve ter pelo menos :min kilobytes.',
        'array'   => 'The :attribute must be at least :min characters.',
    ],
    'not_in'               => 'The :attribute must have at least :min items.',
    'numeric'              => 'The selected :attribute is invalid.',
    'present'              => 'O campo :attribute deve estar presente.',
    'regex'                => 'The :attribute must be a number.',
    'required'             => 'O formato de :attribute é inválido.',
    'required_if'          => 'The :attribute field is required.',
    'required_unless'      => 'O campo :attribute é obrigatório a não ser que :other esteja entre :values.',
    'required_with'        => 'The :attribute field is required when :other is :value.',
    'required_with_all'    => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_without'     => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_without_all' => 'The :attribute field is required when :values is not present.',
    'same'                 => 'The :attribute field is required when none of :values are present.',
    'size'                 => [
        'numeric' => 'The :attribute and :other must match.',
        'file'    => 'O :attribute deve ter :size kilobytes.',
        'string'  => 'O :attribute deve ter :size caracteres.',
        'array'   => 'O :attribute deve ter :size caracteres.',
    ],
    'string'   => 'The :attribute must contain :size items.',
    'timezone' => 'O :attribute deve ser uma zona válida.',
    'unique'   => 'O :attribute já existe.',
    'url'      => 'O formato de :attribute é inválido.',

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
            'rule-name' => 'Mensagem-personalizada',
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

    'attributes' => [],

];
