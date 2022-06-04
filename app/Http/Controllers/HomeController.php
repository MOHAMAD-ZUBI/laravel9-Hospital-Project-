<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Policlinic;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class HomeController extends Controller
{
    public static function maincategorylist(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    //
    public function index()
    {
        $page ='home';
        $sliderdata=Policlinic::limit(4)->get();
        $policliniclist1=Policlinic::limit(6)->get();
        $setting = Setting::first();
        return view('home.index',[
                'page'=>$page,
                'setting'=>$setting,
                'sliderdata'=>$sliderdata,
                'policliniclist1'=>$policliniclist1
            ]);


    }

    public function about()
    {
        $setting = Setting::first();
        return view('home.about',[
            'setting'=>$setting
        ]);


    }
    public function references()
    {
        $setting = Setting::first();
        return view('home.references',[
            'setting'=>$setting
        ]);


    }
    public function contactus()
    {
        $setting = Setting::first();
        return view('home.contactus',[
            'setting'=>$setting
        ]);
    }
    public function faq()
    {
        $setting= setting::first();
        $datalist= Faq::all();
        return view('home.faq',[
            'setting'=>$setting,
            'datalist'=>$datalist
        ]);
    }
    public function storemessage(Request $request)
    {
        // dd($request);
       $data = new Message();
       $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip= request()->ip();
        $data->save();

        return redirect()->route('contactus')->with('info','Your message has been sent , Thank You.');
    }

    public function policlinic($id)
    {
        $data=Policlinic::find($id);
        return view('home.policlinic',[
            'data'=>$data
        ]);


    }
    public function test()
    {
        return view('home.test');
    }
    public function redirect(){

        if(Auth::id()){
            if(Auth::user()->email=='2010205590@ogrenci.karabuk.edu.tr')
            {

                return view('admin.index');
            }
            else{
                return view('home.index');
            }
        }
        else
        {
            return $this->redirect()->back();
        }

    }
    public function param($id,$number)
    {
       // echo "parameter 1:", $id;
       // echo "<br>parameter 2:", $number;
       // echo "<br>Sum Parameters:", $id+$number;
        return view('home.test2', [

            'id' => $id,
            'number' =>$number
    ]);
    }
    public function save(Request  $request)
    {
        echo "Save Function<br>";
        echo "First Name : ", $_REQUEST["fname"];
        echo " Last Name : ", $_REQUEST["lname"];
    }


}
