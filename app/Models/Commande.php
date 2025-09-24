<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Commande extends Model
{
    public function category(): HasMany {
        return $this->hasMany(LigneCommande::class);
    }
}
