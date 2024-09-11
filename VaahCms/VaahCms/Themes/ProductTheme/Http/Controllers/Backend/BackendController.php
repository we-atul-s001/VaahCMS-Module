<?php namespace VaahCms\Themes\ProductTheme\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class BackendController extends Controller
{


    public function __construct()
    {

    }

    public function index()
    {
        return view('producttheme::backend.pages.index');
    }

    public function getAssets(Request $request)
    {
        $data=[];

        $response['status'] = 'success';
        $response['data'] = $data;

        return response()->json($response);

    }

}