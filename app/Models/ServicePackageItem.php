<?php
/**
 * thrumble.hospital - one service included in a package.
 *
 * Copyright (c) Attrix Technologies <https://www.attrixtech.com> & Infusionn Pvt. Ltd. <https://www.infusionn.in>
 * Part of thrumble.hospital
 * Licensed under the GNU General Public License v3.0.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicePackageItem extends Model
{
    protected $table = 'service_package_item';

    protected $fillable = ['package_id', 'component_id', 'quantity'];
}
