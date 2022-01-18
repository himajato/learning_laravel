<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PageController extends Controller{

    public function about()
    {
       
        return DB::table('test')->get('*');

    }
}
?>