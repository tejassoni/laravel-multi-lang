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

    'accepted' => ':attribute फ़ील्ड को स्वीकार किया जाना चाहिए।',
    'accepted_if' => ':attribute फ़ील्ड को तब स्वीकार किया जाना चाहिए जब :other :value हो।',
    'active_url' => ':attribute फ़ील्ड एक मान्य URL होना चाहिए।',
    'after' => ':attribute फ़ील्ड :date के बाद की तिथि होनी चाहिए।',
    'after_or_equal' => ':attribute फ़ील्ड :date के बाद या उसके बराबर की तिथि होनी चाहिए।',
    'alpha' => ':attribute फ़ील्ड में केवल अक्षर होने चाहिए।',
    'alpha_dash' => ':attribute फ़ील्ड में केवल अक्षर, संख्याएँ, डैश और अंडरस्कोर होने चाहिए।',
    'alpha_num' => ':attribute फ़ील्ड में केवल अक्षर और संख्याएँ होनी चाहिए।',
    'array' => ':attribute फ़ील्ड एक सरणी होनी चाहिए।',
    'ascii' => ':attribute फ़ील्ड में केवल सिंगल-बाइट अल्फ़ान्यूमेरिक वर्ण और प्रतीक होने चाहिए।',
    'before' => ':attribute फ़ील्ड :date से पहले की तारीख होनी चाहिए।',
    'before_or_equal' => ':attribute फ़ील्ड :date से पहले या उसके बराबर की तारीख होनी चाहिए।',
    'between' => [
        'array' => ':attribute फ़ील्ड में :min और :max आइटम के बीच होना चाहिए।',
        'file' => ':attribute फ़ील्ड :min और :max किलोबाइट के बीच होना चाहिए।',
        'numeric' => ':attribute फ़ील्ड :min और :max के बीच होना चाहिए।',
        'string' => ':attribute फ़ील्ड :min और :max वर्णों के बीच होना चाहिए।',
    ],
    'boolean' => ':attribute फ़ील्ड सही या गलत होना चाहिए।',
    'confirmed' => ':attribute फ़ील्ड पुष्टि मेल नहीं खाती।',
    'current_password' => 'पासवर्ड गलत है।',
    'date' => ':attribute फ़ील्ड एक मान्य तिथि होनी चाहिए।',
    'date_equals' => ':attribute फ़ील्ड :date के बराबर दिनांक होना चाहिए।',
    'date_format' => ':attribute फ़ील्ड को प्रारूप :format से मेल खाना चाहिए।',
    'decimal' => ':attribute फ़ील्ड में :decimal दशमलव स्थान होने चाहिए।',
    'declined' => ':attribute फ़ील्ड को अस्वीकार किया जाना चाहिए।',
    'declined_if' => ':attribute फ़ील्ड को अस्वीकार कर दिया जाना चाहिए जब :other :value हो।',
    'different' => ':attribute फ़ील्ड और :other अलग होना चाहिए।',
    'digits' => ':attribute फ़ील्ड :digits अंक होना चाहिए।',
    'digits_between' => ':attribute फ़ील्ड :min और :max अंकों के बीच होना चाहिए।',
    'dimensions' => ':attribute फ़ील्ड में अमान्य छवि आयाम हैं।',
    'distinct' => ':attribute फ़ील्ड में डुप्लिकेट मान है।',
    'doesnt_end_with' => ':attribute फ़ील्ड निम्न में से किसी एक के साथ समाप्त नहीं होनी चाहिए: :values।',
    'doesnt_start_with' => ':attribute फ़ील्ड निम्न में से किसी एक के साथ प्रारंभ नहीं होना चाहिए: :values।',
    'email' => ':attribute फ़ील्ड एक मान्य ईमेल पता होना चाहिए।',
    'ends_with' => ':attribute फ़ील्ड निम्न में से किसी एक के साथ समाप्त होनी चाहिए: :values।',
    'enum' => 'चयनित :attribute अमान्य है।',
    'exists' => 'चयनित :attribute अमान्य है।',
    'file' => ':attribute फ़ील्ड एक फ़ाइल होनी चाहिए।',
    'filled' => ':attribute फ़ील्ड में एक मान होना चाहिए।',
    'gt' => [
        'array' => ':attribute फ़ील्ड में :value आइटम से अधिक होना चाहिए।',
        'file' => ':attribute फ़ील्ड :value किलोबाइट से अधिक होना चाहिए।',
        'numeric' => ':attribute फ़ील्ड :value से अधिक होना चाहिए।',
        'string' => ':attribute फ़ील्ड :value वर्णों से अधिक होना चाहिए।',
    ],
    'gte' => [
        'array' => ':attribute फ़ील्ड में :value आइटम या अधिक होना चाहिए।',
        'file' => ':attribute फ़ील्ड :value किलोबाइट से अधिक या उसके बराबर होना चाहिए।',
        'numeric' => ':attribute फ़ील्ड :value से अधिक या उसके बराबर होना चाहिए।',
        'string' => ':attribute फ़ील्ड :value वर्णों से अधिक या उसके बराबर होना चाहिए।',
    ],
    'image' => ':attribute फ़ील्ड एक छवि होनी चाहिए।',
    'in' => 'चयनित :attribute अमान्य है।',
    'in_array' => ':attribute फ़ील्ड :other में मौजूद होना चाहिए।',
    'integer' => ':attribute फ़ील्ड एक पूर्णांक होना चाहिए।',
    'ip' => ':attribute फ़ील्ड एक मान्य IP पता होना चाहिए।',
    'ipv4' => ':attribute फ़ील्ड एक मान्य IPv4 पता होना चाहिए।',
    'ipv6' => ':attribute फ़ील्ड एक मान्य IPv6 पता होना चाहिए।',
    'json' => ':attribute फ़ील्ड एक वैध JSON स्ट्रिंग होना चाहिए।',
    'lowercase' => ':attribute फ़ील्ड लोअरकेस होना चाहिए।',
    'lt' => [
        'array' => ':attribute फ़ील्ड में :value आइटम से कम होना चाहिए।',
        'file' => ':attribute फ़ील्ड :value किलोबाइट से कम होना चाहिए।',
        'numeric' => ':attribute फ़ील्ड :value से कम होना चाहिए।',
        'string' => ':attribute फ़ील्ड :value वर्णों से कम होना चाहिए।',
    ],
    'lte' => [
        'array' => ':attribute फ़ील्ड में :value आइटम से अधिक नहीं होना चाहिए।',
        'file' => ':attribute फ़ील्ड :value किलोबाइट से कम या उसके बराबर होना चाहिए।',
        'numeric' => ':attribute फ़ील्ड :value से कम या उसके बराबर होना चाहिए।',
        'string' => 'The :attribute field must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attribute field must be a valid MAC address.',
    'max' => [
        'array' => 'The :attribute field must not have more than :max items.',
        'file' => 'The :attribute field must not be greater than :max kilobytes.',
        'numeric' => 'The :attribute field must not be greater than :max.',
        'string' => 'The :attribute field must not be greater than :max characters.',
    ],
    'max_digits' => 'The :attribute field must not have more than :max digits.',
    'mimes' => 'The :attribute field must be a file of type: :values.',
    'mimetypes' => 'The :attribute field must be a file of type: :values.',
    'min' => [
        'array' => 'The :attribute field must have at least :min items.',
        'file' => 'The :attribute field must be at least :min kilobytes.',
        'numeric' => 'The :attribute field must be at least :min.',
        'string' => 'The :attribute field must be at least :min characters.',
    ],
    'min_digits' => 'The :attribute field must have at least :min digits.',
    'missing' => 'The :attribute field must be missing.',
    'missing_if' => 'The :attribute field must be missing when :other is :value.',
    'missing_unless' => 'The :attribute field must be missing unless :other is :value.',
    'missing_with' => 'The :attribute field must be missing when :values is present.',
    'missing_with_all' => 'The :attribute field must be missing when :values are present.',
    'multiple_of' => 'The :attribute field must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute field format is invalid.',
    'numeric' => 'The :attribute field must be a number.',
    'password' => [
        'letters' => 'The :attribute field must contain at least one letter.',
        'mixed' => 'The :attribute field must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'The :attribute field must contain at least one number.',
        'symbols' => 'The :attribute field must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute field format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute field must match :other.',
    'size' => [
        'array' => 'The :attribute field must contain :size items.',
        'file' => 'The :attribute field must be :size kilobytes.',
        'numeric' => 'The :attribute field must be :size.',
        'string' => 'The :attribute field must be :size characters.',
    ],
    'starts_with' => 'The :attribute field must start with one of the following: :values.',
    'string' => 'The :attribute field must be a string.',
    'timezone' => 'The :attribute field must be a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'uppercase' => 'The :attribute field must be uppercase.',
    'url' => 'The :attribute field must be a valid URL.',
    'ulid' => 'The :attribute field must be a valid ULID.',
    'uuid' => 'The :attribute field must be a valid UUID.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
