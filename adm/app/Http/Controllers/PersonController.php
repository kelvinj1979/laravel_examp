<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persons;

class PersonController extends Controller
{
    public function getPersons(){

        $persons = Persons::all();

        return view("pages.persons", array("persons"=>$persons));
       
        
    }
}




