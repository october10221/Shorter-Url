<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Request as RequestSegment;

use App\UrlModel as UrlModel;

class MainController extends Controller
{
    public function addurl(Request $request)
    {
        $url = $request->input('name');;

        $insert_url = new UrlModel;
        $insert_url->name_site = $url;
        $insert_url->save();

        if($insert_url){
            $url_encript= base_convert($insert_url->id, 10, 32);
            UrlModel::where('id', $insert_url->id)
            ->update(['code' => $url_encript]);
        }

    return response()->json([ 
        'data'=> $url_encript
    ]);
    }

    public function url()
    {
        $part = RequestSegment::segment(2);
        $get_url = UrlModel::where('code', $part)->first();

        if(!empty( $get_url )){
            UrlModel::increment('view');
            return redirect($get_url->name_site);
        }
        return "เสียใจด้วย ผลลัพธ์ที่คุณหาไม่มีอยู่";
    }

    public function geturl()
    {
        $data = UrlModel::get();

        return $data;
    }

}
