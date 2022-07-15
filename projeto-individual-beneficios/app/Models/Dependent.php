<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date_birth',
        'cpf',
        'rg',
        'relationship'
    ];

    public function getDependents(string $search = null)
    {
        $dependents = $this->where(function ($query) use ($search) {
            if($search){
                $query->where('name', 'LIKE', "%{$search}%");
            }
        })
            ->paginate(5);

        return $dependents;
    }

    public function dependents()
    {
        return $this->hasMany(Dependent::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
