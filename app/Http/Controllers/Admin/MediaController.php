<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\View;
use DB;
use Carbon\Carbon;
use Validator,Response,File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class MediaController extends Controller
{
    public function saleUpload(Request $request){
        try{
            $files = $request->file('photos');

            foreach( $files as $key => $file ){

                $file_name = rand().'.'.$file->extension();

                $upload_path = 'upload'. '/'. 'sale' . '/' . $request->sale_id  . '/';
    
                $file->move($upload_path, $file_name);
    
                DB::table('sale_img')->insert([
                    'sale_id' => $request->sale_id,
                    'sale_img_path' => $upload_path . $file_name,
                    'sale_img_created_at'  => Carbon::now(),
                    'sale_img_updated_at'  => Carbon::now()
                ]);
            }

            return Redirect::to(URL::previous() . "#sale-img")->with('success', 'Thêm ảnh thành công!');
        }
        catch(Exception $e){
            return Redirect::to(URL::previous() . "#sale-img")->with('success', 'Có lỗi xảy ra!');
        }
    }

    public function saleDelete(Request $request){
        $sale_img = DB::table('sale_img')->where('sale_img_id', $request->sale_img_id)->first();
        File::delete($sale_img->sale_img_path);
        DB::table('sale_img')->where('sale_img_id', $request->sale_img_id)->delete();
        return Redirect::to(URL::previous() . "#sale-img")->with('success', 'Xóa ảnh thành công!');
    }

    public function rentUpload(Request $request){
        try{
            $file = $request->file('file');

            if( empty( $file ) ){
                return Response()->json(["success" => false]);
            }

            $file_name = time().'.'.$file->extension();

            $file->move('upload'. '/'. 'rent' . '/' . $request->code . '/', $file_name);

            return Response()->json(["success" => true]);
        }
        catch(Exception $e){
            return Response()->json(["success" => false]);
        }
    }

}
