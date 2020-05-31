<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Payment;
use Mail;

class AnyController extends Controller
{
    public function bookDetails($id)
    {
        $book = Book::findOrFail($id);

        return view('buy',[
            'book' => $book
        ]);
    }

       // landing page 
    public function welcome()
    {
        $books = Book::orderBy('id', 'desc')->paginate(50);

        return view('welcome', [
            'books' => $books
        ]);
    }

    public function bookFile(Request $request, $id)
    {
        // dd($request->all());
        // return $request->all();
        $book = Book::findOrFail($id);
        $email = $request->get('email');

         // sending download link to buyer
         $data = array(
             'title' => "Please Download Your Book with this Link",
             'dsiclaim' => 'This is to inform you that you have only three tries to download this item , after which all links to this items will have expired and will be unaccessible',
             'link' => $book->book,
         );
        Mail::send('email', $data, function($message) use($email) {
                    $message->to( $email)
                    ->subject('Hello '.$email.' Please download your purchase order from ZenBooks , we hope to serve you again');
        });

        if (Mail::failures()) {
           return redirect()->back()->with('error', 'Sorry! Please try again later');
         }else{

            $payment = new Payment;
            $payment->status = $request->get('status');
            $payment->amount = $request->get('amount');
            $payment->txnId = $request->get('txnId');
            $payment->description = $request->get('description');
            $payment->type = $request->get('type');
            $payment->book_id = $request->get('book_id');
            $payment->user_email = $request->get('email');
            $payment->save();

            return response()->json([
                'success' => 'Go to your email to download your book'
            ]);
        }
    }

    public function downloadFile($id)
    {
        $book = Book::findOrFail($id);

        return view('download-file', [
            'book' => $book
        ]);
    }
}
