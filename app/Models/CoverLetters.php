<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoverLetters extends Model
{
    use HasFactory;
    protected $fillable = ['proposal_id','content'] ;
    public function proposal()
    {
        return $this->belongsTo(Proposal::class);
    }
}
