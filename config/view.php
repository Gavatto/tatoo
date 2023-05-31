<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Переглянути шляхи зберігання
    |------------------------------------------------ ------------------------
    |
    | Більшість систем створення шаблонів завантажують шаблони з диска. Тут можна вказати
    | масив шляхів, які слід перевірити для ваших переглядів. Звичайно
    | звичайний шлях перегляду Laravel вже зареєстровано для вас.
    |
    */

    'paths' => [
        resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Скомпільований шлях перегляду
    |------------------------------------------------ ------------------------
    |
    | Цей параметр визначає, де будуть усі скомпільовані шаблони Blade
    | збережені для вашої програми. Як правило, це в межах сховища
    | каталог. Однак, як зазвичай, ви можете змінити це значення.
    |
    */

    'compiled' => env(
        'VIEW_COMPILED_PATH',
        realpath(storage_path('framework/views'))
    ),

];
