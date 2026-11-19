<?php
/**
 * thrumble.hospital - a reusable consultation note template.
 *
 * Copyright (c) Attrix Technologies <https://www.attrixtech.com> & Infusionn Pvt. Ltd. <https://www.infusionn.in>
 * Part of thrumble.hospital
 * Licensed under the GNU General Public License v3.0.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultTemplate extends Model
{
    protected $table = 'consult_template';

    protected $fillable = ['name', 'doctor_id', 'fields'];

    protected $casts = ['fields' => 'array'];
}
