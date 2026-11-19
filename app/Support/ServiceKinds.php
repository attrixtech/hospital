<?php
/**
 * thrumble.hospital - kinds of billable service, for reporting.
 *
 * Copyright (c) Attrix Technologies <https://www.attrixtech.com> & Infusionn Pvt. Ltd. <https://www.infusionn.in>
 * Part of thrumble.hospital
 * Licensed under the GNU General Public License v3.0.
 */

namespace App\Support;

class ServiceKinds
{
    public const KINDS = [
        'consultation' => 'Consultation', 'procedure' => 'Procedure', 'lab' => 'Laboratory', 'radiology' => 'Radiology',
        'dialysis' => 'Dialysis', 'ot' => 'Operation theatre', 'room' => 'Room and ward', 'package' => 'Package',
        'pharmacy' => 'Pharmacy', 'donation' => 'Donation', 'misc' => 'Miscellaneous',
    ];

    public static function label($kind)
    {
        return self::KINDS[$kind] ?? 'Other';
    }
}
