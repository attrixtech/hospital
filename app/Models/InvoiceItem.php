<?php
/**
 * thrumble.hospital - one charge on an invoice.
 *
 * Copyright (c) Attrix Technologies <https://www.attrixtech.com> & Infusionn Pvt. Ltd. <https://www.infusionn.in>
 * Part of thrumble.hospital
 * Licensed under the GNU General Public License v3.0.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InvoiceItem extends Model
{
    use HasFactory;

    protected $table = 'invoice_item';
    public $timestamps = false;

    protected $fillable = [
        'payment_id',
        'payment_category_id',
        'name',
        'quantity',
        'unit_price',
        'line_total',
        'doctor_id',
    ];

    protected $casts = [
        'quantity' => 'integer',
        'unit_price' => 'decimal:2',
        'line_total' => 'decimal:2',
    ];

    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Payment::class, 'payment_id');
    }

    public function summary(): string
    {
        return $this->quantity > 1 ? $this->name . ' x' . $this->quantity : $this->name;
    }
}
