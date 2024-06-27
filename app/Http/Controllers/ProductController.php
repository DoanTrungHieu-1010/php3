<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showTT(){
        $students = [
            
                'id' => 'PH44769',
                'name' => 'Đoàn Trung Hiếu',
                'age' => '20',
                'cn' => 'CNTT',
                'country' => 'Bắc Giang'

            
        ];
        return view('hieudt') -> with([
            'students' => $students,
            'a' => 'b'
        ]);
    }

    // public function getProduct($id){
    //     echo $id;
    // }

    // public function updateProduct(Request $request){
    //     echo $request->id . '</br>';
    //     echo $request->name;
    // }
}
