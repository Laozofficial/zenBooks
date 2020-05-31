<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Book;
use App\User;

class AdminController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function store(Request $request)
    {
        // dd($request->all());
         $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'file' => 'required',
            'book' => 'required',
            'description' => 'required',
            'format' => 'required',
            'author' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }

         if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension(); // you can also use file name
            $fileName = time() . '.' . $extension;
            $path = Env('PUBLIC_IMAGE_PATH');
            $upload = $file->move($path, $fileName);
        }

          if ($request->hasFile('book')) {
            $file = $request->file('book');
            $extension = $file->getClientOriginalExtension(); // you can also use file name
            $bookName = time() . '.' . $extension;
            $path = Env('PUBLIC_IMAGE_PATH');
            $upload = $file->move($path, $bookName);
        }

        // dd($fileName);

        
        

        $book = new Book;
        $book->name = $request->get('name');
        $book->isbn = $request->get('isbn');
        $book->cover_image = $fileName;
        $book->price = $request->get('price');
        $book->book = $bookName;
        $book->description = $request->get('description');
        $book->format = $request->get('format');
        $book->author = $request->get('author');
        $book->save();

        return redirect()->back()->with('success', 'Book has been added to store');

    }

    public function books()
    {
        $books = Book::orderBy('id', 'desc')->with(['payment'])->paginate(100);

        return view('admin.books',[
            'books' => $books
        ]);
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);

        $book->delete();
        return response()->with('success');
        
    }

    public function update($id)
    {
        $book = Book::findOrFail($id);

        return view('admin.update',[
            'book' => $book
        ]);
    }

    public function updateLogic(Request $request , $id)
    {

         $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'format' => 'required',
            'author' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        

        $book = Book::findOrFail($id);
        $book->name = $request->get('name');
        $book->isbn = $request->get('isbn');
         if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension(); // you can also use file name
            $fileName = time() . '.' . $extension;
            $path = Env('PUBLIC_IMAGE_PATH');
            $upload = $file->move($path, $fileName);
            $book->cover_image = $fileName;
        }
        $book->price = $request->get('price');
        $book->description = $request->get('description');
        $book->format = $request->get('format');
        $book->author = $request->get('author');
        $book->save();

        return redirect()->back()->with('success');

        
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function updateProfile(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,'.Auth::user()->id
        ]);

        $user = User::findOrFail(Auth::user()->id);

        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->save();

        return redirect()->back()->with('success', 'profile updated');

    }

    public function updatePassword(Request $request)
    {
        $now_password  = $request->get('new_password');
        $old_password = $request->get('old_password');
        $user = User::where('id', Auth::user()->id)->first();

                if(Hash::check($old_password, $user->password)){
                    //Your update here
                    $user->password = $now_password;
                    $user->save();

                    return redirect()->back()->with('success', 'Password Updated Successfully');

                }
                else{
                    return redirect()->back()->with('error', 'Password does not match');
                }
    }

}
