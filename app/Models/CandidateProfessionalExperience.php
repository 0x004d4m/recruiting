<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidateProfessionalExperience extends Model
{
    use CrudTrait, SoftDeletes;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'candidate_professional_experiences';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    public function getRecommendationLetter1Attribute($value)
    {
        return $value?url('storage/'.$value):null;
    }

    public function getRecommendationLetter2Attribute($value)
    {
        return $value?url('storage/'.$value):null;
    }

    public function getRecommendationLetter3Attribute($value)
    {
        return $value?url('storage/'.$value):null;
    }

    public function setRecommendationLetter1Attribute($value)
    {
        $attribute_name = "recommendation_letter1";
        $disk = "public";
        $destination_path = "uploads/recommendation_letter";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);

        // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
    }

    public function setRecommendationLetter2Attribute($value)
    {
        $attribute_name = "recommendation_letter2";
        $disk = "public";
        $destination_path = "uploads/recommendation_letter";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);

        // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
    }

    public function setRecommendationLetter3Attribute($value)
    {
        $attribute_name = "recommendation_letter3";
        $disk = "public";
        $destination_path = "uploads/recommendation_letter";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);

        // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
    }
}
