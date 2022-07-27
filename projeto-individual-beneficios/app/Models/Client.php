<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'date_birth',
        'cpf',
        'rg',
        'address',
        'address_number',
        'address_complement',
        'phone1',
        'phone2',
        'email'
    ];

    public function getClients(string $search = null)
    {
        $clients = $this->where(function ($query) use ($search) {
            if($search){
                $query->where('email', $search);
                $query->orwhere('name', 'LIKE', "%{$search}%");
                $query->orwhere('cpf', 'LIKE', "%{$search}%");
            }
        })
            ->paginate(5);

        return $clients;
    }

    public function dependents()
    {
        return $this->hasMany(Dependent::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
