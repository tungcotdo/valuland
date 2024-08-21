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
    public function saleLoad(Request $request){
        $imgs = DB::table('sale_img')->where('sale_id', $request->sale_id)->get();
                
        $template = view('admin.partials.sale_img', ['imgs' => $imgs])->render();

        return Response()->json(["success" => true, "template" => $template]);
    }

    public function saleUpload(Request $request){
        try{
            $files = $request->file('files');

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

            $imgs = DB::table('sale_img')->where('sale_id', $request->sale_id)->get();
                
            $template = view('admin.partials.sale_img', ['imgs' => $imgs])->render();

            return Response()->json(["success" => true, "template" => $template]);

        }
        catch(Exception $e){
            return Redirect::to(URL::previous() . "#sale-img")->with('success', 'Có lỗi xảy ra!');
        }
    }

    public function saleDelete(Request $request){
        $sale_img = DB::table('sale_img')->where('sale_img_id', $request->sale_img_id)->first();
        
        File::delete($sale_img->sale_img_path);
        
        DB::table('sale_img')->where('sale_img_id', $request->sale_img_id)->delete();

        $imgs = DB::table('sale_img')->where('sale_id', $sale_img->sale_id)->get();
                
        $template = view('admin.partials.sale_img', ['imgs' => $imgs])->render();

        return Response()->json(["success" => true, "template" => $template]);
    }

    public function rentLoad(Request $request){
        $imgs = DB::table('rent_img')->where('rent_id', $request->rent_id)->get();
                
        $template = view('admin.partials.rent_img', ['imgs' => $imgs])->render();

        return Response()->json(["success" => true, "template" => $template]);
    }

    public function rentUpload(Request $request){
        try{
            $files = $request->file('files');

            foreach( $files as $key => $file ){

                $file_name = rand().'.'.$file->extension();
                
                $upload_path = 'upload'. '/'. 'rent' . '/' . $request->rent_id  . '/';
                
                $file->move($upload_path, $file_name);
                
                DB::table('rent_img')->insert([
                    'rent_id' => $request->rent_id,
                    'rent_img_path' => $upload_path . $file_name,
                    'rent_img_created_at'  => Carbon::now(),
                    'rent_img_updated_at'  => Carbon::now()
                ]);
            }

            $imgs = DB::table('rent_img')->where('rent_id', $request->rent_id)->get();
                
            $template = view('admin.partials.rent_img', ['imgs' => $imgs])->render();

            return Response()->json(["success" => true, "template" => $template]);

        }
        catch(Exception $e){
            return Redirect::to(URL::previous() . "#rent-img")->with('success', 'Có lỗi xảy ra!');
        }
    }

    public function rentDelete(Request $request){
        $rent_img = DB::table('rent_img')->where('rent_img_id', $request->rent_img_id)->first();
        
        File::delete($rent_img->rent_img_path);
        
        DB::table('rent_img')->where('rent_img_id', $request->rent_img_id)->delete();

        $imgs = DB::table('rent_img')->where('rent_id', $rent_img->rent_id)->get();
                
        $template = view('admin.partials.rent_img', ['imgs' => $imgs])->render();

        return Response()->json(["success" => true, "template" => $template]);
    }


}
