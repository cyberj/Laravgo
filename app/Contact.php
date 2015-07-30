<?php

namespace laravgo;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  // MASS ASSIGNMENT -------------------------------------------------------
  // define which attributes are mass assignable (for security)
  // we only want these 3 attributes able to be filled
  protected $fillable = array('first_name', 'last_name', 'birthday');

  // One contact have many emails
  public function emails()
  {
    return $this->hasMany('Email');
  }
}
