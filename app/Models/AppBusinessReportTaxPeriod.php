<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppBusinessReportTaxPeriod extends Model
{
    protected $table = 'app_business_report_tax_periods';

    protected $fillable = [
        'year',
        'quarter',
        'start_date',
        'end_date',
    ];

    public function reportTaxes()
    {
        return $this->hasMany(AppBusinessReportTax::class, 'tax_period_id');
    }
}
