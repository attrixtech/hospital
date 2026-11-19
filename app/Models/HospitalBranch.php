<?php
/**
 * thrumble.hospital - one site of a multi-branch hospital.
 *
 * Copyright (c) Attrix Technologies <https://www.attrixtech.com> & Infusionn Pvt. Ltd. <https://www.infusionn.in>
 * Part of thrumble.hospital
 * Licensed under the GNU General Public License v3.0.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HospitalBranch extends Model
{
    protected $table = 'hospital_branch';

    protected $fillable = ['name', 'address', 'phone', 'active'];

    protected $casts = ['active' => 'boolean'];
}
