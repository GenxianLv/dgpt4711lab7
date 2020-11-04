<?php

namespace App\Models;

use App\Models\Simple\CSVModel;

class Places extends CSVModel
{
    protected $origin = WRITEPATH . 'placesData/Place.csv';
    protected $keyField = 'id';
    protected $validationRules = [];
}