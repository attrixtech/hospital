<?php
/**
 * thrumble.hospital - remind patients who still owe money.
 *
 * Replaces the legacy CronJob:cronjob and feeNotification:notification, which
 * both chased unpaid monthly school fees.
 *
 * Usage: php artisan hospital:payment-reminder
 *
 * Copyright (c) Attrix Technologies <https://www.attrixtech.com> & Infusionn Pvt. Ltd. <https://www.infusionn.in>
 * Part of thrumble.hospital
 * Licensed under the GNU General Public License v3.0.
 */

namespace App\Console\Commands;

use App\Http\Controllers\CronjobController;
use Illuminate\Console\Command;

class PaymentReminder extends Command
{
    protected $signature = 'hospital:payment-reminder';

    protected $description = 'Send an SMS reminder to every patient with an outstanding payment';

    public function handle()
    {
        $result = (new CronjobController())->runPaymentReminder();

        $line = $result['status'] . ': ' . $result['reason'] . ' (' . $result['contacts'] . ' contact(s))';

        if ($result['status'] === 'ok') {
            $this->info($line);
        } else {
            $this->warn($line);
        }

        return self::SUCCESS;
    }
}
