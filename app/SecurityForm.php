<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecurityForm extends Model
{
    //
    protected $table = 'security_form';

    protected $fillable = [
            "name"  ,
            "last_name"  ,
            "position"  ,
            "email"  ,
            "phone"  ,
            "detection_breach_date"  ,
            "detection_breach_date_type"  ,
            "start_breach_date"  ,
            "start_breach_date_type"  ,
            "detection_breach_description"  ,
            "breach_description"  ,
            "breach_types"  ,
            "breach_origins"  ,
            "breach_measures"  ,
            "breach_data"  ,
            "affected_subjects"  ,
            "affected_subjects_number"  ,
            "impacts" ,
            "resolution_breach_date",
            'breach_is_resolved'
    ];
}
