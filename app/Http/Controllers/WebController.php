<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function welcome(){
        return view("welcome");
    }
    public function list_student(){
        $data = Student::
            orderBy("id","asc")
            ->paginate(30);
        return view("list",["data"=>$data]);
    }
    public function create(){
        $student = Student::all();
        return view("create",compact("student"));
    }
    public function store(Request $request){
        $request->validate([
            "name"=>"required|string|min:6",
            "age"=>"required|numeric|min:10",
            "address"=>"required|string|min:6",
            "tel"=>"required|string|min:6"
        ],[
            "required"=>"Vui lòng nhập thông tin",
            "string"=> "Phải nhập vào là một chuỗi văn bản",
            "min"=> "Phải nhập :attribute  tối thiểu :min"
        ]);
        try {
            Student::create([
                "name" => $request->get("name"),
                "age" => $request->get("age"),
                "address" => $request->get("address"),
                "tel" => $request->get("tel"),
            ]);
            return redirect()->to("/student");
        } catch (\Exception $e) {
            return redirect()->back()->with("error",$e->getMessage());
        }
    }
}
