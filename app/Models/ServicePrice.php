<?php
/**
 * thrumble.hospital - the price of one service for one patient type, outpatient and inpatient.
 *
 * Copyright (c) Attrix Technologies <https://www.attrixtech.com> & Infusionn Pvt. Ltd. <https://www.infusionn.in>
 * Part of thrumble.hospital
 * Licensed under the GNU General Public License v3.0.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicePrice extends Model
{
    protected $table = 'service_price';

    protected $fillable = ['payment_category_id', 'patient_type_id', 'opd_price', 'ipd_price'];

    protected $casts = ['opd_price' => 'decimal:2', 'ipd_price' => 'decimal:2'];
}
