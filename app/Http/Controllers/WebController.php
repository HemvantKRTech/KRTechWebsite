<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
USE App\Models\Blog;
use App\Models\Team;
use App\Models\Comment;
use App\Models\Service;
use App\Models\Newssubscriber;
use App\Models\Privacy;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Models\ContactForm;
// use Illuminate\Support\Facades\Mail;
use App\Jobs\SendContactFormEmail;
class WebController extends Controller
{
    public function index() {
        $homeslider = Slider::orderBy("created_at", "desc")->get(); 
        $teams = Team::orderBy("created_at","desc")->get();
        $blogs=Blog::orderBy("created_at","desc")->with('comments')->get();
       
        return view("welcome", ['slider' => $homeslider,'teams'=>$teams,'blogs'=>$blogs]);
    }
    public function newssubscribe(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:newssubscribers,email',
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        Newssubscriber::create([
            'email' => $request->email,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Subscription successful!'
        ]);
    }
    public function addcomment(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'option' => 'required|string|max:50',
            'message' => 'required|string',
        ]);

        // Create a new comment with the validated data
        $comment = new Comment();
        $comment->name = $validatedData['name'];
        $comment->blog_id = $request->blogid;
        $comment->email = $validatedData['email'];
        $comment->phone = $validatedData['phone'];
        $comment->option = $validatedData['option'];
        $comment->message = $validatedData['message'];
        $comment->admin_approval = false; // Default to false, pending approval
        $comment->save();

        // Return a JSON response with success message
        return response()->json(['success' => 'Comment added successfully.'], 200);
    
    }
    public function webservice(){
        $service = Service::all();
        return view('FrontendPages/services', ['service'=> $service]);
    }
    public function show($slug){
        $service = Service::where('slug', $slug)->first();
        return view('FrontendPages/servicedetail', ['service'=> $service]);
    }
    public function privacy(){
        $privacy=Privacy::find('1');
        return view('FrontendPages.webprivacy', ['privacy'=> $privacy]);

    }
    public function submitForm(Request $request){
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        ContactForm::create($validatedData);
        SendContactFormEmail::dispatch($validatedData);

        // Return a JSON response
        return response()->json(['message' => 'Your message has been sent successfully.']);
    }
}
}