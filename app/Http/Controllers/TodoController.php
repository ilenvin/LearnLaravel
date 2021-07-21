<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Traits\ResponseTrait;

class TodoController extends Controller
{
    use ResponseTrait;
    public $me = "ni hao ei ";
    public $data = [];
     
    public function index() {
        dd($this->jsonA());
        //return $this->jsonB();
        //return iPrint('it is okay :)');
        // $hello = $this->me;
        // $me = 'ei';
        // return view('todo.index', compact('hello', 'me'));
        $db_todo = Todo::all();
        $data = [
            'hello' => $this->me,
            'me' => "ei",
            'todo' => $db_todo,
        ];
        
        return view('todo.index', $data);
    }

    public function submit(Request $request) {
       Todo::create([
           'title' => $request -> title,
           'body' => $request -> body,
       ]);
       return redirect()->back();
    }

    public function jsonB(){
        return 'JSONB';
    }
    public function delete($id) {
        $data = Todo::where('id' ,$id);
        $data->delete();
        return redirect()->back();
    }

    public function update(Request $request) {
        // $data = Todo::where('id' ,$request->id);
        // $data->title = $request -> title;
        // $data->body = $request -> body;
        // $data->save();
        Todo::where('id', $request->id)
            ->update([
                'title' => $request->title,
                'body' => $request->body,
            ]);
        return redirect()->back();
    }
}
