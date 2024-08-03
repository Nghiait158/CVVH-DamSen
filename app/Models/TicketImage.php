<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketImage extends Model
{
    use HasFactory;

    protected $table = 'ticket_image';

    protected $primaryKey = 'ticketImgID';

    protected $fillable = [
        'ticketImgName',
        'ticketImgPath',
        'ticketID'
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class, 'ticketID', 'ticketID');
    }
}
