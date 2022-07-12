<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date_birth',
        'cpf',
        'rg',
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
            }
        })
            ->paginate(10);

        return $clients;
    }
}
