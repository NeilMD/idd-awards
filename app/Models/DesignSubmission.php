<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DesignSubmission extends Model
{
    // Define the table (optional, as Laravel uses the pluralized name by default)
    protected $table = 'design_submissions';

    // Specify the fields that can be mass-assigned
    protected $fillable = ['name', 'design_title', 'design_description', 'image_path','design_category','link','email'];
}
