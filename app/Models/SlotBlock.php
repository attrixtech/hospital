<?php
/**
 * thrumble.hospital - a doctor unavailable on a date: a whole day off or part of one.
 *
 * Copyright (c) Attrix Technologies <https://www.attrixtech.com> & Infusionn Pvt. Ltd. <https://www.infusionn.in>
 * Part of thrumble.hospital
 * Licensed under the GNU General Public License v3.0.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SlotBlock extends Model
{
    protected $table = 'slot_block';

    protected $fillable = ['doctor_id', 'date', 'start_time', 'end_time', 'reason'];
}
