<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Mensajes de Validación
    |--------------------------------------------------------------------------
    |
    | Las siguientes líneas de lenguaje contienen los mensajes de error predeterminados
    | utilizados por la clase de validador. Algunas de estas reglas tienen múltiples versiones
    | como las reglas de tamaño. Siéntete libre de ajustar cada uno de estos mensajes aquí.
    |
    */

    'accepted' => 'El :attribute debe ser aceptado.',
    'accepted_if' => 'El :attribute debe ser aceptado cuando :other es :value.',
    'active_url' => 'El :attribute no es una URL válida.',
    'after' => 'El :attribute debe ser una fecha después de :date.',
    'after_or_equal' => 'El :attribute debe ser una fecha después o igual a :date.',
    'alpha' => 'El :attribute debe contener solo letras.',
    'alpha_dash' => 'El :attribute debe contener solo letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El :attribute debe contener solo letras y números.',
    'array' => 'El :attribute debe ser un array.',
    'ascii' => 'El :attribute debe contener solo caracteres alfanuméricos de un solo byte y símbolos.',
    'before' => 'El :attribute debe ser una fecha antes de :date.',
    'before_or_equal' => 'El :attribute debe ser una fecha antes o igual a :date.',
    'between' => [
        'array' => 'El :attribute debe tener entre :min y :max elementos.',
        'file' => 'El :attribute debe tener entre :min y :max kilobytes.',
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'string' => 'El :attribute debe tener entre :min y :max caracteres.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed' => 'La confirmación de :attribute no coincide.',
    'current_password' => 'La contraseña actual es incorrecta.',
    'date' => 'El :attribute no es una fecha válida.',
    'date_equals' => 'El :attribute debe ser una fecha igual a :date.',
    'date_format' => 'El :attribute no coincide con el formato :format.',
    'decimal' => 'El :attribute debe tener :decimal lugares decimales.',
    'declined' => 'El :attribute debe ser rechazado.',
    'declined_if' => 'El :attribute debe ser rechazado cuando :other es :value.',
    'different' => 'El :attribute y :other deben ser diferentes.',
    'digits' => 'El :attribute debe tener :digits dígitos.',
    'digits_between' => 'El :attribute debe tener entre :min y :max dígitos.',
    'dimensions' => 'El :attribute tiene dimensiones de imagen inválidas.',
    'distinct' => 'El campo :attribute tiene un valor duplicado.',
    'doesnt_end_with' => 'El :attribute no puede terminar con ninguno de los siguientes: :values.',
    'doesnt_start_with' => 'El :attribute no puede empezar con ninguno de los siguientes: :values.',
    'email' => 'El :attribute debe ser una dirección de correo electrónico válida.',
    'ends_with' => 'El :attribute debe terminar con uno de los siguientes: :values.',
    'enum' => 'El :attribute seleccionado es inválido.',
    'exists' => 'El :attribute seleccionado es inválido.',
    'file' => 'El :attribute debe ser un archivo.',
    'filled' => 'El campo :attribute debe tener un valor.',
    'gt' => [
        'array' => 'El :attribute debe tener más de :value elementos.',
        'file' => 'El :attribute debe ser mayor que :value kilobytes.',
        'numeric' => 'El :attribute debe ser mayor que :value.',
        'string' => 'El :attribute debe tener más de :value caracteres.',
    ],
    'gte' => [
        'array' => 'El :attribute debe tener :value elementos o más.',
        'file' => 'El :attribute debe ser mayor o igual a :value kilobytes.',
        'numeric' => 'El :attribute debe ser mayor o igual a :value.',
        'string' => 'El :attribute debe ser mayor o igual a :value caracteres.',
    ],
    'image' => 'El :attribute debe ser una imagen.',
    'in' => 'El :attribute seleccionado es inválido.',
    'in_array' => 'El campo :attribute no existe en :other.',
    'integer' => 'El :attribute debe ser un número entero.',
    'ip' => 'El :attribute debe ser una dirección IP válida.',
    'ipv4' => 'El :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'El :attribute debe ser una dirección IPv6 válida.',
    'json' => 'El :attribute debe ser una cadena JSON válida.',
    'lowercase' => 'El :attribute debe estar en minúsculas.',
    'lt' => [
        'array' => 'El :attribute debe tener menos de :value elementos.',
        'file' => 'El :attribute debe ser menor que :value kilobytes.',
        'numeric' => 'El :attribute debe ser menor que :value.',
        'string' => 'El :attribute debe tener menos de :value caracteres.',
    ],
    'lte' => [
        'array' => 'El :attribute no debe tener más de :value elementos.',
        'file' => 'El :attribute debe ser menor o igual a :value kilobytes.',
        'numeric' => 'El :attribute debe ser menor o igual a :value.',
        'string' => 'El :attribute debe ser menor o igual a :value caracteres.',
    ],
    'mac_address' => 'El :attribute debe ser una dirección MAC válida.',
    'max' => [
        'array' => 'El :attribute no debe tener más de :max elementos.',
        'file' => 'El :attribute no debe ser mayor que :max kilobytes.',
        'numeric' => 'El :attribute no debe ser mayor que :max.',
        'string' => 'El :attribute no debe ser mayor que :max caracteres.',
    ],
    'max_digits' => 'El :attribute no debe tener más de :max dígitos.',
    'mimes' => 'El :attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'array' => 'El :attribute debe tener al menos :min elementos.',
        'file' => 'El :attribute debe ser de al menos :min kilobytes.',
        'numeric' => 'El :attribute debe ser de al menos :min.',
        'string' => 'El :attribute debe tener al menos :min caracteres.',
    ],
    'min_digits' => 'El :attribute debe tener al menos :min dígitos.',
    'missing' => 'El campo :attribute debe faltar.',
    'missing_if' => 'El campo :attribute debe faltar cuando :other es :value.',
    'missing_unless' => 'El campo :attribute debe faltar a menos que :other sea :value.',
    'missing_with' => 'El campo :attribute debe faltar cuando :values esté presente.',
    'missing_with_all' => 'El campo :attribute debe faltar cuando :values estén presentes.',
    'multiple_of' => 'El :attribute debe ser un múltiplo de :value.',
    'not_in' => 'El :attribute seleccionado es inválido.',
    'not_regex' => 'El formato de :attribute es inválido.',
    'numeric' => 'El :attribute debe ser un número.',
    'password' => [
        'letters' => 'El :attribute debe contener al menos una letra.',
        'mixed' => 'El :attribute debe contener al menos una letra mayúscula y una minúscula.',
        'numbers' => 'El :attribute debe contener al menos un número.',
        'symbols' => 'El :attribute debe contener al menos un símbolo.',
        'uncompromised' => 'El :attribute proporcionado ha aparecido en una filtración de datos. Por favor, elige un :attribute diferente.',
    ],
    'present' => 'El campo :attribute debe estar presente.',
    'prohibited' => 'El campo :attribute está prohibido.',
    'prohibited_if' => 'El campo :attribute está prohibido cuando :other es :value.',
    'prohibited_unless' => 'El campo :attribute está prohibido a menos que :other esté en :values.',
    'prohibits' => 'El campo :attribute prohíbe que :other esté presente.',
    'regex' => 'El formato de :attribute es inválido.',
    'required' => 'El campo :attribute es obligatorio.',
    'required_array_keys' => 'El campo :attribute debe contener entradas para: :values.',
    'required_if' => 'El campo :attribute es obligatorio cuando :other es :value.',
    'required_if_accepted' => 'El campo :attribute es obligatorio cuando :other es aceptado.',
    'required_unless' => 'El campo :attribute es obligatorio a menos que :other esté en :values.',
    'required_with' => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all' => 'El campo :attribute es obligatorio cuando :values están presentes.',
    'required_without' => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de :values está presente.',
    'same' => 'El :attribute y :other deben coincidir.',
    'size' => [
        'array' => 'El :attribute debe contener :size elementos.',
        'file' => 'El :attribute debe ser de :size kilobytes.',
        'numeric' => 'El :attribute debe ser :size.',
        'string' => 'El :attribute debe ser de :size caracteres.',
    ],
    'starts_with' => 'El :attribute debe comenzar con uno de los siguientes: :values.',
    'string' => 'El :attribute debe ser una cadena de texto.',
    'timezone' => 'El :attribute debe ser una zona horaria válida.',
    'unique' => 'El :attribute ya ha sido tomado.',
    'uploaded' => 'Falló la carga de :attribute.',
    'uppercase' => 'El :attribute debe estar en mayúsculas.',
    'url' => 'El :attribute debe ser una URL válida.',
    'ulid' => 'El :attribute debe ser un ULID válido.',
    'uuid' => 'El :attribute debe ser un UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Mensajes de Validación Personalizados
    |--------------------------------------------------------------------------
    |
    | Aquí puedes especificar mensajes de validación personalizados para atributos usando la
    | convención "attribute.rule" para nombrar las líneas. Esto nos ayuda a hacer nuestro mensaje más expresivo.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'mensaje-personalizado',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Atributos de Validación Personalizados
    |--------------------------------------------------------------------------
    |
    | Las siguientes líneas de lenguaje se utilizan para intercambiar nuestros marcadores de posición de atributos
    | con algo más fácil de leer como "Dirección de correo electrónico" en lugar de "email". Esto simplemente nos ayuda a hacer nuestro mensaje más expresivo.
    |
    */

    'attributes' => [],

];
