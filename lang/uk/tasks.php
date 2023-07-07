<?php

return [
    'title' => [
        'index' => 'Задачі',
        'create' => 'Створення задачі',
        'edit' => 'Редагування задачі',
        'show' => 'Задача №:id'
    ],
    'input' => [
        'title' => 'Заголовок',
        'description' => 'Опис',
        'status' => 'Статус',
        'deadline_at' => 'Крайній термін',
    ],
    'create' => [
        'submit' => 'Створити',
    ],
    'edit' => [
        'btn' => 'Редагувати',
        'submit' => 'Зберегти',
    ],
    'delete' => [
        'btn' => 'Видалити',
        'confirm' => 'Ви впевнені що хочете видалити цю задачу?'
    ],
    'status' => [
        '' => 'Всі',
        \App\Enums\TaskStatus::DONE->value => 'Завершено',
        \App\Enums\TaskStatus::NOT_STARTED->value => 'Не розпочато',
        \App\Enums\TaskStatus::PROCESS->value => 'В процесі',
    ],
];
