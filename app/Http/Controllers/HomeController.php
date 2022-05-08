<?php

namespace App\Http\Controllers;

use App\Models\Policlinic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class HomeController extends Controller
{
    //
    public function index()
    {
        $sliderdata=Policlinic::limit(4)->get();
        $policliniclist1=Policlinic::limit(6)->get();
        return view('home.index',[
                'sliderdata'=>$sliderdata,
                'policliniclist1'=>$policliniclist1
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
