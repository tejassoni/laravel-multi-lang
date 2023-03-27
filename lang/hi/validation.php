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
        'string' => ':attribute फ़ील्ड :value वर्णों से कम या उसके बराबर होना चाहिए।',
    ],
    'mac_address' => ':attribute फ़ील्ड एक मान्य मैक पता होना चाहिए।',
    'max' => [
        'array' => ':attribute फ़ील्ड में :max आइटम से अधिक नहीं होना चाहिए।',
        'file' => ':attribute फ़ील्ड :max किलोबाइट से अधिक नहीं होना चाहिए।',
        'numeric' => ':attribute फ़ील्ड :max से अधिक नहीं होना चाहिए।',
        'string' => ':attribute फ़ील्ड :max वर्णों से अधिक नहीं होना चाहिए।',
    ],
    'max_digits' => ':attribute फ़ील्ड में :max अंक से अधिक नहीं होना चाहिए।',
    'mimes' => ':attribute फ़ील्ड प्रकार की एक फ़ाइल होनी चाहिए:max ।',
    'mimetypes' => ':attribute फ़ील्ड प्रकार की एक फ़ाइल होनी चाहिए:max ।',
    'min' => [
        'array' => ':attribute फ़ील्ड में कम से कम :min आइटम होने चाहिए।',
        'file' => ':attribute फ़ील्ड कम से कम :min किलोबाइट होना चाहिए।',
        'numeric' => ':attribute फ़ील्ड कम से कम :min होना चाहिए।',
        'string' => ':attribute फ़ील्ड कम से कम :min वर्ण होना चाहिए।',
    ],
    'min_digits' => ':attribute फ़ील्ड में कम से कम :min अंक होने चाहिए।',
    'missing' => ':attribute फ़ील्ड गायब होना चाहिए।',
    'missing_if' => ':attribute फ़ील्ड गायब होना चाहिए जब :other :value है।',
    'missing_unless' => ':attribute फ़ील्ड गायब होना चाहिए जब तक कि :other :value न हो।',
    'missing_with' => ':values मौजूद होने पर :attribute फ़ील्ड गायब होना चाहिए।',
    'missing_with_all' => ':values मौजूद होने पर :attribute फ़ील्ड गायब होना चाहिए।',
    'multiple_of' => ':attribute फ़ील्ड :value का गुणज होना चाहिए।',
    'not_in' => 'चयनित :attribute अमान्य है।',
    'not_regex' => ':attribute फ़ील्ड स्वरूप अमान्य है।',
    'numeric' => ':attribute फ़ील्ड एक संख्या होनी चाहिए।',
    'password' => [
        'letters' => ':attribute फ़ील्ड में कम से कम एक अक्षर होना चाहिए।',
        'mixed' => ':attribute फ़ील्ड में कम से कम एक अपरकेस और एक लोअरकेस अक्षर होना चाहिए।',
        'numbers' => ':attribute फ़ील्ड में कम से कम एक संख्या होनी चाहिए।',
        'symbols' => ':attribute फ़ील्ड में कम से कम एक प्रतीक होना चाहिए।',
        'uncompromised' => 'दी गई :attribute डेटा लीक में प्रकट हुई है। कृपया एक अलग :attribute चुनें।',
    ],
    'present' => ':attribute फ़ील्ड मौजूद होना चाहिए।',
    'prohibited' => ':attribute फ़ील्ड निषिद्ध है।',
    'prohibited_if' => ':attribute फ़ील्ड प्रतिबंधित है जब :other :value है।',
    'prohibited_unless' => ':attribute फ़ील्ड निषिद्ध है जब तक कि :other :values में न हो।',
    'prohibits' => ':attribute फ़ील्ड :other को उपस्थित होने से प्रतिबंधित करता है।',
    'regex' => ':attribute फ़ील्ड प्रारूप अमान्य है।',
    'required' => ':attribute फ़ील्ड आवश्यक है।',
    'required_array_keys' => ':attribute फ़ील्ड में इसके लिए प्रविष्टियाँ होनी चाहिए: :values ।',
    'required_if' => ':attribute फ़ील्ड आवश्यक है जब :other :value है।',
    'required_if_accepted' => ':attribute फ़ील्ड आवश्यक है जब :other स्वीकार किया जाता है।',
    'required_unless' => ':attribute फ़ील्ड तब तक आवश्यक है जब तक :other :values में न हो।',
    'required_with' => ':attribute फ़ील्ड की आवश्यकता तब होती है जब :values मौजूद होता है।',
    'required_with_all' => ':attribute फ़ील्ड आवश्यक है जब :values मौजूद हों।',
    'required_without' => ':attribute फ़ील्ड आवश्यक है जब :values मौजूद नहीं है।',
    'required_without_all' => ':attribute फ़ील्ड आवश्यक है जब इनमें से कोई भी :values मौजूद नहीं है।',
    'same' => ':attribute फ़ील्ड :other से मेल खाना चाहिए।',
    'size' => [
        'array' => ':attribute फ़ील्ड में :size आइटम होना चाहिए।',
        'file' => ':attribute फ़ील्ड :size किलोबाइट होना चाहिए।',
        'numeric' => ':attribute फ़ील्ड :size होना चाहिए।',
        'string' => ':attribute फ़ील्ड :size वर्ण होना चाहिए।',
    ],
    'starts_with' => ':attribute फ़ील्ड निम्न में से किसी एक के साथ शुरू होनी चाहिए: :values ।',
    'string' => ':attribute फ़ील्ड एक स्ट्रिंग होना चाहिए।',
    'timezone' => ':attribute फ़ील्ड एक मान्य समयक्षेत्र होना चाहिए।',
    'unique' => ':attribute पहले ही ली जा चुकी है।',
    'uploaded' => ':attribute अपलोड करने में विफल।',
    'uppercase' => ':attribute फ़ील्ड अपरकेस होना चाहिए।',
    'url' => ':attribute फ़ील्ड एक मान्य URL होना चाहिए।',
    'ulid' => ':attribute फ़ील्ड एक मान्य ULID होना चाहिए।',
    'uuid' => ':attribute फ़ील्ड एक मान्य UUID होना चाहिए।',

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
