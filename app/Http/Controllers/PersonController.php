<?php

namespace App\Http\Controllers;

use App\Http\Resources\PersonResource;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * *
     * @param \App\Models\Person $person
     * @return \App\Http\Resources\PersonResource
     */
    public function show(Person $person): PersonResource
    {
        return new PersonResource($person);
    }
}