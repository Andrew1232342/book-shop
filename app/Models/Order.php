<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'book_id',
        'quantity',
        'total_cost',
        'status',
    ];

    public function books() : BelongsToMany
    {
        return $this->belongsToMany(Book::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
