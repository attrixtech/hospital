<?php
/**
 * thrumble.hospital - a doctor share policy: a named set of share rules.
 *
 * Copyright (c) Attrix Technologies <https://www.attrixtech.com> & Infusionn Pvt. Ltd. <https://www.infusionn.in>
 * Part of thrumble.hospital
 * Licensed under the GNU General Public License v3.0.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SharePolicy extends Model
{
    protected $table = 'share_policy';

    protected $fillable = ['name', 'notes', 'active'];

    protected $casts = ['active' => 'boolean'];

    public function rules(): HasMany
    {
        return $this->hasMany(ShareRule::class, 'share_policy_id');
    }
}
