<?php
/**
 * thrumble.hospital - an exam on the radiology catalogue.
 *
 * Copyright (c) Attrix Technologies <https://www.attrixtech.com> & Infusionn Pvt. Ltd. <https://www.infusionn.in>
 * Part of thrumble.hospital
 * Licensed under the GNU General Public License v3.0.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RadiologyExam extends Model
{
    protected $table = 'radiology_exam';

    protected $fillable = ['name', 'modality', 'payment_category_id', 'report_template', 'active'];

    protected $casts = ['active' => 'boolean'];

    public const MODALITIES = ['xray' => 'X-ray', 'ultrasound' => 'Ultrasound', 'ct' => 'CT', 'mri' => 'MRI',
        'mammography' => 'Mammography', 'fluoroscopy' => 'Fluoroscopy', 'other' => 'Other'];
}
