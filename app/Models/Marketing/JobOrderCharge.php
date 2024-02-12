<?php

namespace App\Models\Marketing;

use App\Models\Payment\PaymentVoucher;
use App\Models\Payment\ShipingPaymentVoucher;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;
use App\Models\Common\Charges;
use Livewire\Wireable;

class JobOrderCharge extends Model implements Wireable
{
    use HasFactory;

    protected $table = 'joborder_charge';
    // public $incrementing = false;
    // protected $keyType = 'string';
    protected $primaryKey = 'items';

    public $timestamps = false;

    protected $fillable = [
        'items',
        'comCode',
        'documentID',
        'ref_paymentCode',
        'chargeCode',
        'detail',
        'chargesCost',
        'chargesReceive',
        'chargesbillReceive',
    ];

    protected $casts = [
        'items' => 'integer',
        'comCode' => 'string',
        'documentID' => 'string',
        'ref_paymentCode' => 'string',
        'chargeCode' => 'string',
        'detail' => 'string',
        'chargesCost' => 'float',
        'chargesReceive' => 'float',
        'chargesbillReceive' => 'float',
    ];

    public function __construct($attributes = [])
    {
        parent::__construct($attributes);
        $this->fill($attributes);
    }

    public static function fromLivewire($value)
    {
        new static($value);
    }

    public function toLiveWire()
    {
        return $this->toArray();
    }

    // public function payment(): HasMany
    // {
    //     return $this->hasMany(PaymentVoucher::class, 'documentID', 'ref_paymentCode');
    // }

    // public function paymentVoucherShipping(): HasMany
    // {
    //     return $this->hasMany(ShipingPaymentVoucher::class, 'documentID', 'ref_paymentCode');
    // }

    public function payment(){
        if($this->ref_paymentCode){
            $shiping = ShipingPaymentVoucher::where('documentID', $this->ref_paymentCode)->get();
            return PaymentVoucher::where('documentID', $this->ref_paymentCode)->get()->merge($shiping);
        }
    }

    public function charges(): HasOne
    {
        return $this->hasOne(Charges::class, 'chargeCode', 'chargeCode');
    }
}
