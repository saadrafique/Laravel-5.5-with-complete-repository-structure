<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Service\FormService;
class FormApiController extends Controller
{
    //
    protected $service;
    public function __construct(FormService $servObj)
    {
        $this->service= $servObj;
       // $this->middleware('auth');
    }

    public function index(){

    	return $this->service->getAllRecords();
    }

    public function singleRecord($id){
        
        return $this->service->getSingleRecord($id);
    }
}
