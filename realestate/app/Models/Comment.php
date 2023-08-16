<?php

namespace App\Models;

// use App\Models\Realestate;
// use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    public function user(): BelongsTo
     {
        return $this->belongsTo(User::class);
    }

    public function realestate(): BelongsTo
    {
       return $this->belongsTo(Realestate::class);
   }
}
