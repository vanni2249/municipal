<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppBusinessReportTax extends Model
{
    protected $table = 'app_business_report_taxes';

    protected $fillable = [
        'business_id',
        'tax_period_id',
        'amount_reported',
        'tax_due',
    ];

    public function applications()
    {
        return $this->morphMany(Application::class, 'applicable');
    }

    public function business()
    {
        return $this->belongsTo(Business::class, 'business_id');
    }

    public function taxPeriod()
    {
        return $this->belongsTo(AppBusinessReportTaxPeriod::class, 'tax_period_id');
    }
}
