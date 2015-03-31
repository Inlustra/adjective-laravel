<?php

class File extends Eloquent
{

    protected $table = 'File';

    public function file()
    {
        return $this->morphTo();
    }

}