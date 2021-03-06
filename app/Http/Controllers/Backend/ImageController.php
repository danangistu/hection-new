<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Backend\WebarqController;

class ImageController extends WebarqController
{
    public function __construct()
    {
    	parent::__construct();
	}

    public function getIndex()
    {
    	return view('backend.library.image');
    }

    public function getLib()
    {
    	return view('backend.library.lib');
    }
}
