<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerCandidate extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'email', 'phone', 'address', 'type', 'status'];

    public function candidateFollowups() {
        return $this->hasMany('App\Models\CustomerCandidateFollowup');
    }
}
