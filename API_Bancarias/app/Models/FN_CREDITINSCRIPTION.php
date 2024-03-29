<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FN_CREDITINSCRIPTION extends Model
{
    use HasFactory;
    protected $table = 'FN_CREDITINSCRIPTIONS';
    protected $dateFormat = 'Y-m-d\TH:i:s';

    protected $fillable = [
        'channelCode',
        'financialCode',
        'orderId',
        'purchaseDescription',
        'totalAmount',
        'shippingAmount',
        'totalTaxesAmount',
        'currency',
        'clientDocType',
        'clientDocNumber',
        'firstName',
        'lastName',
        'email',
        'mobileNumber',
        'mobileNumberCountryCode',
        'causalRejection',
        'redirectionUrl',
        'inscriptionId',
        'cuotas',
        'status'
    ];
}
