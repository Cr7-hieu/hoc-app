<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChuyenMuc;
class ChuyenMucController extends Controller
{
    function list(){
        $data = ChuyenMuc::all();
        return view('chuyen-muc.danh-sach', compact('data'));

    }

    function them() {
        return view('chuyen-muc.them');
    }

    function update(Request $request, $id)
    {
        $chuyen_muc = ChuyenMuc::find($id);

        return view('chuyen-muc.sua', compact('chuyen_muc'));
    }

    function saveUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'ten' => 'required|max:255'
        ],[
            'ten.required'=>'Ban phai nhap ten vao nhe',
            'ten.max'=>'Ten qua dai roi'
        ]);

        $chuyen_muc = ChuyenMuc::find($id);
        $chuyen_muc->update($request->all());

        return redirect()->route('chuyenmuc.list');
    }

    function save(Request $request) {
        $validated = $request->validate([
            'ten' => 'required|max:255'
        ],[
            'ten.required'=>'Ban phai nhap ten vao nhe',
            'ten.max'=>'Ten qua dai roi'
        ]);

        $data = [
            "ten"=> $request->input('ten'),
            "mo_ta"=> $request->input('mota')
        ];


        // them vao csdl
        ChuyenMuc::create($data);

        return redirect()->route('chuyenmuc.list');
    }

    function setDelete(Request $request,$id){
        //Xóa chuyên mục có ID tương ứng
        $chuyenmuc = ChuyenMuc::find($id);
        $chuyenmuc->delete();

        return redirect()->route('chuyenmuc.list');
    }
}
