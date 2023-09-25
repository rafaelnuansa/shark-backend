<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScientificWork extends Model
{
    use HasFactory;

    public function user()
    {
        $this->belongsTo(User::class);
    }

    protected function attachment(): Attribute
    {
        return Attribute::make(
            get: fn ($attachment) => url('/storage/files/' . $attachment),
        );
    }
}
