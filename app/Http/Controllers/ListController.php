<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function show() {
    	$characters = [
    		'1' => 'one',
    		'2' => 'two'
    	];

    	$cars = [
    		'vios' => 789000,
    		'civic' => 1190000
    	];

    	return view('welcome', [
    		'characters' => $characters,
    		'cars' => $cars
    		]
    	);
    }
}
