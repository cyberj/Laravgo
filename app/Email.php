<?php

namespace laravgo;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
  protected $fillable = array('email', 'contact_id');

  // DEFINE RELATIONSHIPS --------------------------------------------------
  public function contact() {
    return $this->belongsTo('Contact');
  }
}
