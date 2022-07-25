<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'date_payment',
    ];

    public function getPayments(string $search = null)
    {
        $payments = $this->where(function ($query) use ($search) {
            if($search){
                $query->where('name', 'LIKE', "%{$search}%");
            }
        })
            ->paginate(5);

        return $payments;
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
