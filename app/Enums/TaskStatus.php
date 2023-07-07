<?php

namespace App\Enums;

enum TaskStatus: string
{
    case NOT_STARTED = 'not_started';
    case PROCESS = 'process';
    case DONE = 'done';

    public function icon(): string
    {
        return match ($this) {
            TaskStatus::DONE => '✅',
            TaskStatus::PROCESS => '▶️',
            TaskStatus::NOT_STARTED => '⚠️',
        };
    }

    public function title(): string
    {
        return __('tasks.status.'.$this->value);
    }
}
