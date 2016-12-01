<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{

	protected $table='calendars';               
	protected $fillable = ['title', 'allDay', 'publish', 'color', 'start', 'end', 'url'];

    public function getSart8601Attribute()
    {
        return $this->start->format('c');
    }

    public function getEnd8601Attribute()
    {
        return $this->end->format('c');
    }

}
