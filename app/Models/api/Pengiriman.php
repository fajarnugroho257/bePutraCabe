<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pengiriman extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table = 'pengiriman';
    protected $primaryKey = 'pengiriman_id';
    protected $fillable = ['pengiriman_id', 'pengiriman_tgl'];
    public function pengirimanData(): HasMany
    {
        return $this->HasMany(PengirimanData::class, 'pengiriman_id');
    }
}
