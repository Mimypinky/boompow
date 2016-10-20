<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Avatar;
use Response;
use Request;

class UploadController extends Controller
{
    public function Upload(Request $req)
    {
      $image = new Avatar();
      if($image) {
            $file = Request::file('image');
            //getting timest

            $name = $file->getClientOriginalName();

            $image->pic_url = $name;

            $file->move(public_path().'/avatar', $name);
        }
        $image->save();
        return 'Image Uploaded Successfully';
    }
    public function showPicture($picId){
        $pic = Picture::where('pic_id',$picId)->get();
        if($pic) {
            return response()->json(['status' => 200,'msg'=>'success', 'data' => $pic] , 200);
        } else {
            return response()->json(['status' => 404,'msg' => 'Picture id '.$picId.' not found', 404])
        }
    }
}
