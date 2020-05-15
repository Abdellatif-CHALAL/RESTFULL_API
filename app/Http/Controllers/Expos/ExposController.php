<?php

namespace App\Http\Controllers\Expos;

use App\Expos;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Transformers\ExposTransformer;
use Illuminate\Http\Request;

class ExposController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        parent::__construct();
        $this->middleware('scope:read-general')->only('index','show');
      
    }

    public function index()
    {
        $this->allowedAdminAction();
        
        $expos = Expos::all();

        return $this->showAll($expos);
    }

   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($expo_code)
    {

        $expo = Expos::all()->where('expo_code', $expo_code)->first(); 
        return $this->showOne($expo);
    }

    
}
