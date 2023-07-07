<?php

namespace App\Models;

use App\Enums\TaskStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property TaskStatus $status
 * @property Carbon $deadline_at Date in format Y-m-d
 */
class Task extends Model
{
    use HasFactory;

    protected $casts = [
        'status' => TaskStatus::class,
        'deadline_at' => 'date',
    ];

    // Default values
    protected $attributes = [
        'status' => TaskStatus::NOT_STARTED,
    ];

    protected $fillable = [
        'title',
        'description',
        'status',
        'deadline_at',
    ];
}
