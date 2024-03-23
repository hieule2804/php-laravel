<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //thêm thư viện database
use App\Models\Post;
use App\Http\Requests\CreateValidationRequest;
use App\Rules\Uppercase;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all(); //select *
        // query builder : ánh xạ id : tránh hacker 
        // $posts = DB::select("SELECT * FROM student WHERE id = :id;", [
        //     'id' => 4,
        // ]);
        // $posts = DB::table("student") // gọi thẳng tất cả dữ liệu trong table
        // delete 
        // ->where('id', '=', 2)
        // ->delete();
        // update
        //     ->where('id', '=', 2)
        //     ->update([
        //         'name' => 'Test Update'
        //     ]);
        // ->insert([
        //     'student_code' => 'MSV123',
        //     'name' => 'Test',
        //     'class' => 'SWP',
        // ]);
        // ->avg('id');//avg
        // ->sum('id');
        // ->max('id');
        // ->min('id')
        // ->count();//count
        // ->find(2); // find by id
        // ->whereBetween("id", [1, 5])
        // ->orderBy("id", "desc")
        // ->oldest();//select last
        // ->first(); //select top 1
        // ->where("id", ">", 5)
        // ->orWhere("id", "<", 5)
        // ->select('name')
        // ->get();//tương đương câu lệnh select
        // dd($posts);  // print

        //filter
        // $posts = Post::where('id', '=', 10)  // gọi dữ liệu trong Model
        // ->get();
        $posts = Post::all();
        return view('post.index', [
            'student' => $posts,
        ]);
    }

    public function create()
    {
        return view('post.create');
    }
    public function store(CreateValidationRequest $request) // thay Request = CreateValidationRequest
    {

        // dd($request->all());
        // dd($request->file('image')->guessExtension());//guessExtension lấy ra đuôi file :jpg,jpeg,...
        //  dd($request->file('image')->getMimeType());//getMimeType check xem đúng là file ảnh chưa
        //dd($request->file('image')->getClientOriginalName());//getClientOriginalName lấy ra tên nguyên thủy của file
        //dd($request->file('image')->getSize());//getSize lấy ra dung lượng của file: kilobytes
        // dd($request->file('image')->getError());//getError trả lỗi nếu có lỗi 
        $request->validate([
            'image' => 'mimes:jpg,png,jpeg|max:5048',
        ]);
        // client image's name and server's image name must be difference
        // tên các file ảnh phải khác nhau , nếu bị trùng thì sẽ thông tin sẽ bị mất
        //tạo generatedIamgeName 
        $generatedImageName = 'image' . time() . '-' . $request->name . '.' . $request->image->extension();
        // dd($generatedImageName);

        // move to folder
        $request->image->move(public_path('images'), $generatedImageName);

        // dd('this is create new');

        // validate data 
        //  lúc này sẽ sử dụng validation Request của mình thay vì dùng Request của laravel
        // $request->validate([ 
        //     'student_code' => 'required|string|min:6|max:6', // required : bắt buộc phải nhập , validate nhiều thứ
        //     //thay vì dùng
        //     // 'name' => 'required', 
        //     //cta sẽ dùng
        //     'name' => new Uppercase(), // custom  validation
        //     'class' => 'required',
        // ]);

        $request->validated();
        // add cach 1
        // $student = new Post();
        // $student->student_code = $request->input('student_code');
        // $student->name = $request->input('name');
        // $student->class = $request->input('class');

        // add c2 : dùng create
        $student = Post::create([
            'student_code' => $request->input('student_code'),
            'name' => $request->input('name'),
            'class' => $request->input('class'),
            'image_path' => $generatedImageName,
        ]);
        //save to data
        $student->save();
        return redirect('/post');
    }

    public function edit($id)
    {
        //display form edit
        // dd($id);
        $student = Post::find($id);
        // dd($student);
        return view('post.edit')->with('student', $student);
    }
    public function update(CreateValidationRequest $request, $id)
    {
        $request->validated();
        $request->validate([
            'image' => 'mimes:jpg,png,jpeg|max:5048',
        ]);
        // client image's name and server's image name must be difference
        // tên các file ảnh phải khác nhau , nếu bị trùng thì sẽ thông tin sẽ bị mất
        //tạo generatedIamgeName 
        $generatedImageName = 'image' . time() . '-' . $request->name . '.' . $request->image->extension();
        // dd($generatedImageName);

        // move to folder
        $request->image->move(public_path('images'), $generatedImageName);
        //update student
        $student = Post::where('id', $id)
            ->update([
                'student_code' => $request->input('student_code'),
                'name' => $request->input('name'),
                'class' => $request->input('class'),
                'image_path' => $generatedImageName,
            ]);
        return redirect('/post');
    }
    public function destroy($id)
    {
        //delete student
        $student = Post::find($id);
        $student->delete();
        return redirect('/post');
    }
    public function show($id)
    {
        $student = Post::find($id);
        return view('post.show')->with('student', $student);
    }
}
