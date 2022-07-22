<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Dependent extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'name',
        'date_birth',
        'cpf',
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

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
