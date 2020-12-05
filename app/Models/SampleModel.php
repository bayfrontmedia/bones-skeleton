<?php

namespace App\Models;

use Bayfront\Bones\Model;

class SampleModel extends Model
{

    public function getBonesVersion()
    {
        return BONES_VERSION;
    }

}