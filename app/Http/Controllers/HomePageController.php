<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Skill;
use App\Models\Comment;
use App\Models\Blog;
use App\Models\Team;
use Illuminate\Support\Str;
use DOMDocument;
use App\Models\Privacy;
use App\Models\TermsCondition;
class HomePageController extends Controller
{
    public function index()
    {
        $slider = Slider::paginate(10);
        $teams = Team::with('skill')->paginate(10);
        $blogs= Blog::paginate(10);
        // dd($blogs);
        return view("pages.home-page-setting", compact("slider","teams","blogs"));
    }
    public function create(Request $request){
            $request->validate([
                'titles.*' => 'required|string|max:255',
                'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $titles = $request->input('titles');
            $images = $request->file('images');
            
            foreach ($titles as $index => $title) {
                $image = $images[$index];
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images/sliders'), $imageName);
                Slider::create([
                    'title' => $title,
                    'image' => 'images/sliders/' . $imageName,
                    'page_name' => 'home'
                ]);
            }
    
            return redirect()->back()->with('message', 'Sliders have been added successfully!');
    }
        public function destroy($id){
          $data=Slider::find($id);
         
          if($data){
          $data->delete();
          return response()->json(['success'=> true,'data'=> $data]);
            }else{
            return response()->json(['success'=> false,'data'=> $data]);
        }

    }
    public function addteam(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'skills.*.name' => 'required|string|max:255',
            'skills.*.range' => 'required|numeric|min:0|max:100',
            'facebook_link' => 'required|url',
            'linkedin_link' => 'required|url',
            'twitter_link' => 'required|url',
            'instagram_link' => 'required|url',
        ]);
    
        // Handle the image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('team_images', 'public');
        }
    
        // Use a transaction to ensure data integrity
        DB::beginTransaction();
        try {
            // Save the team member
            $team = new Team();
            $team->name = $validatedData['name'];
            $team->image = $imagePath;
            $team->linkedin_link = $validatedData['linkedin_link'];
            $team->twitter_link = $validatedData['twitter_link'];
            $team->instagram_link = $validatedData['instagram_link'];
            $team->facebook_link = $validatedData['facebook_link'];
    
            $team->save();
    
            // Save the skills
            foreach ($validatedData['skills'] as $skillData) {
                $skill = new Skill();
                $skill->name = $skillData['name'];
                $skill->range = $skillData['range'];
                $skill->team_id = $team->id; // Set the foreign key
                $skill->save();
            }
    
            // Commit the transaction
            DB::commit();
    
            // Redirect or return response
            return redirect()->back()->with('success', 'Team member added successfully.');
        } catch (\Exception $e) {
            // Rollback the transaction if something goes wrong
            DB::rollback();
            
            // Log the error or handle it as needed
            // \Log::error('Error adding team member: ' . $e->getMessage());
            
            return redirect()->back()->with('error', 'Failed to add team member. Please try again.');
        }
    }
    public function teamedit($id){
        $team = Team::with('skill')->find($id);
        if (!$team) {
            return redirect()->back()->with('error','No team Member find');
        }
        // dd($team);
        return view('Admin/Editteam', compact('team'));
    }
    public function updateteam(Request $request, $id) {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'linkedin_link' => 'nullable|url',
            'instagram_link' => 'nullable|url',
            'twitter_link' => 'nullable|url',
            'facebook_link' => 'nullable|url',
            'skills.*.name' => 'required|string|max:255',
            'skills.*.range' => 'required|integer|between:0,100',
        ]);
    
        // Find the team member by ID
        $team = Team::findOrFail($id);
    
        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($team->image) {
                Storage::disk('public')->delete('team_images/' . $team->image);
            }
            // Store new image
            $validatedData['image'] = $request->file('image')->store('team_images', 'public');
        } else {
            // If no new image is uploaded, keep the old image
            $validatedData['image'] = $team->image;
        }
    
        // Update the team member's data
        $team->update($validatedData);
    
        // Update skills
        $team->skill()->delete(); // Remove old skills
    
        foreach ($request->input('skills') as $skill) {
            Skill::create([
                'team_id' => $team->id,
                'name' => $skill['name'],
                'range' => $skill['range'],
            ]);
        }
    
        return redirect()->back()->with('success', 'Team member details updated successfully.');
    }
    
    public function delete($id) {
        $team = Team::findOrFail($id);
    
        // Check if the team has an image
        if ($team->image) {
            // Define the path to the image
            $imagePath = 'storage/' . $team->image;
            // dd(env('APP_URL').'/'.$imagePath);
            // Check if the image exists and delete it
            try {
                // Check if the image exists and delete it
                if (Storage::disk('public')->exists($team->image)) {
                    // Debugging: Confirm that the deletion process is entered
                    // dd('File exists, proceeding with deletion.');
                    
                    Storage::disk('public')->delete($imagePath); // Delete the image file
                } 
            } catch (\Exception $e) {
                // Log the exception or handle it accordingly
                // \Log::error('Failed to delete image: ' . $e->getMessage());
            }
        }
    
        // Delete the team record
        $team->delete();
    }
    public function store(Request $request)
    {
        // Validate the form inputs
    //     $tagsArray = json_decode($request->tags, true);

    // // Optionally, you can transform the array if needed (e.g., store as JSON)
    // $tagsJson = json_encode($tagsArray);
    //     dd($request->tags);
        $request->validate([
            'title' => 'required|string|max:255',
            'featured_image' => 'required|max:2048',
            'editordata' => 'required|string',
        ]);
    
        // Handle the image upload
        if ($request->hasFile('featured_image')) {
            $imagePath = $request->file('featured_image')->store('featured_image', 'public');
        } else {
            return redirect()->back()->withErrors(['featured_image' => 'Featured image is required.']);
        }
    
        // Process the content (editordata)
        $description = $request->editordata;
        $dom = new \DomDocument();
        @$dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    
        // Handle images in the editor content
        $imageFiles = $dom->getElementsByTagName('img');
        foreach ($imageFiles as $key => $image) {
            $data = $image->getAttribute('src');
            
            // Check if the image data is base64 encoded (embedded image)
            if (strpos($data, 'data:image') === 0) {
                list($type, $data) = explode(';', $data);
                list(, $data) = explode(',', $data);
    
                // Decode the base64 data and store the image
                $imageData = base64_decode($data);
                $image_name = time() . $key . '.png';
                $path = public_path('uploads/') . $image_name;
                file_put_contents($path, $imageData);
    
                // Replace the src attribute with the file path
                $image->removeAttribute('src');
                $image->setAttribute('src', '/uploads/' . $image_name);
            }
        }
    
        // Save the processed HTML back to the description
        $description = $dom->saveHTML();
    
        // Save the blog data to the database
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->description = $description;
        $blog->tags = $request->tags;
        $blog->featured_image = $imagePath;
        $blog->save();
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Blog created successfully!');
    }

    public function singleblog( $slug){
        $blog = Blog::where('slug', $slug)
        ->with(['comments' => function($query) {
            $query->where('admin_approval', true);
        }])
        ->first();

       
        $latestblogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        if(!$blog){
            return redirect()->back()->with('error','No Blog Found');
        }
        return view('FrontendPages.singleblog', compact('blog','latestblogs'));
    }
    public function allcomment(){
        $comment=Comment::orderBy('created_at','desc')->get();
        return view('Admin.comment', compact('comment'));
    }
    public function approveCmnt($id)
    {
        $comment = Comment::find($id);
        if ($comment) {
            $comment->admin_approval = 1;
            $comment->save();

            return response()->json(['success' => true, 'message' => 'Comment approved successfully.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Comment not found.']);
        }
    }

    // Disapprove comment
    public function disapproveCmnt($id)
    {
        $comment = Comment::find($id);
        if ($comment) {
            $comment->admin_approval = 0;
            $comment->save();

            return response()->json(['success' => true, 'message' => 'Comment disapproved successfully.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Comment not found.']);
        }
    }

    // Delete comment
    public function deleteCmnt($id)
    {
        $comment = Comment::find($id);
        if ($comment) {
            $comment->delete();

            return response()->json(['success' => true, 'message' => 'Comment deleted successfully.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Comment not found.']);
        }
    }
    public function services(){
        return view('Admin/services');
    }
    public function allservice(){
        $services=Service::all();
        return view('Admin/allservices',compact('services'));
    }
    public function addservice(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'service_name' => 'required|string|max:255',
            'slug' => 'required|string|unique:services,slug|max:255',
            'icon' => 'nullable|file|mimes:jpg,png,svg,gif|max:2048',
            'feature_image' => 'nullable|file|mimes:jpg,png,svg,gif|max:2048',
            'description' => 'nullable|string',
            'content' => 'nullable|string',
        ]);

        // Handle file uploads for icon and feature image
        $iconPath = $request->file('icon') ? $request->file('icon')->store('icons', 'public') : null;
        $featureImagePath = $request->file('feature_image') ? $request->file('feature_image')->store('images', 'public') : null;

        // Handle content and extract images from it
        $content = $request->input('content');
        $content = $this->handleContentImages($content);

        // Create a new service
        Service::create([
            'icon' => $iconPath,
            'service_name' => $request->service_name,
            'slug' => Str::slug($request->slug),
            'feature_image' => $featureImagePath,
            'description' => $request->description,
            'content' => $content,
        ]);

        return redirect()->route('services')->with('success', 'Service created successfully.');
    }

    private function handleContentImages($content)
    {
        $dom = new DOMDocument();
        @$dom->loadHTML($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');

            // If image source is base64 encoded, save it to storage
            if (preg_match('/^data:image\/(\w+);base64,/', $src)) {
                $image_type = explode('/', explode(':', substr($src, 0, strpos($src, ';')))[1])[1];
                $image_data = base64_decode(substr($src, strpos($src, ',') + 1));
                $safeName = Str::random(10) . '.' . $image_type;
                Storage::disk('public')->put('content_images/' . $safeName, $image_data);
                $img->setAttribute('src', '/storage/content_images/' . $safeName);
            }
        }

        return $dom->saveHTML();
    }
        public function deleteservice($id){
            $services = Service::find($id);
            $services->delete();
            return response()->json(['success' => true, 'message' => 'Comment deleted successfully.']);
        }
        public function privacypolicy(){
            $Privacy = Privacy::find(1);
            // dd($Privacy);
            return view('Admin.privacypolicy',['Privacy'=> $Privacy]);
        }
        public function privacypolicystore(Request $request)
        {
            // Validate the request data
            $request->validate([
                'content' => 'nullable|string',
            ]);
        
            // Get the content from the request
            $content = $request->input('content');
            $content = $this->handleContentImages($content);
        
            // Check if a privacy policy exists
            $privacyPolicy = Privacy::first(); // Assuming there's only one privacy policy record
        
            if ($privacyPolicy) {
                // Update the existing privacy policy
                $privacyPolicy->update([
                    'privacypolicies' => $content,
                    'created_at'=>\Carbon\Carbon::now(),
                    'update_at'=>\Carbon\Carbon::now(),
                ]);
            } else {
                // Create a new privacy policy if none exists
                Privacy::create([
                    'privacypolicies' => $content,
                    'created_at'=>\Carbon\Carbon::now(),
                    'update_at'=>\Carbon\Carbon::now(),
                ]);
            }
        
            return redirect()->back()->with('success', 'Privacy policy has been saved successfully.');
        }
        
        
        public function conditionstore(Request $request)
        {
            // Validate the request data
            $request->validate([
                'content' => 'nullable|string',
            ]);
        
            // Get the content from the request
            $content = $request->input('content');
            $content = $this->handleContentImages($content);
        
            // Check if a privacy policy exists
            $privacyPolicy = TermsCondition::first(); // Assuming there's only one privacy policy record
        
            if ($privacyPolicy) {
                // Update the existing privacy policy
                $privacyPolicy->update([
                    'termscondition' => $content,
                    'created_at'=>\Carbon\Carbon::now(),
                    'update_at'=>\Carbon\Carbon::now(),
                ]);
            } else {
                // Create a new privacy policy if none exists
                TermsCondition::create([
                    'termscondition' => $content,
                    'created_at'=>\Carbon\Carbon::now(),
                    'update_at'=>\Carbon\Carbon::now(),
                ]);
            }
        
            return redirect()->back()->with('success', 'Terms and condition has been saved successfully.');
        }
        public function editblog($id){
            $blog = Blog::find($id);
            return view('Admin/EditBlog', compact('blog'));
        }
        public function updateblog(Request $request, $id){
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'editordata' => 'required|string',
            ]);
        
            // Find the existing blog post by ID
            $blog = Blog::findOrFail($id);
        
            // Check if a new image is uploaded
            if ($request->hasFile('featured_image')) {
                // Delete the old image if it exists
                if ($blog->featured_image) {
                    Storage::delete('public/' . $blog->featured_image);
                }
        
                // Handle the image upload
                $imagePath = $request->file('featured_image')->store('featured_image', 'public');
                $blog->featured_image = $imagePath;
            }
        
            // Process the content (editordata)
            $description = $request->editordata;
            $dom = new \DomDocument();
            @$dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        
            // Handle images in the editor content
            $imageFiles = $dom->getElementsByTagName('img');
            foreach ($imageFiles as $key => $image) {
                $data = $image->getAttribute('src');
        
                // Check if the image data is base64 encoded (embedded image)
                if (strpos($data, 'data:image') === 0) {
                    list($type, $data) = explode(';', $data);
                    list(, $data) = explode(',', $data);
        
                    // Decode the base64 data and store the image
                    $imageData = base64_decode($data);
                    $image_name = time() . $key . '.png';
                    $path = public_path('uploads/') . $image_name;
                    file_put_contents($path, $imageData);
        
                    // Replace the src attribute with the file path
                    $image->removeAttribute('src');
                    $image->setAttribute('src', '/uploads/' . $image_name);
                }
            }
        
            // Save the processed HTML back to the description
            $description = $dom->saveHTML();
        
            // Update the blog fields
            $blog->title = $request->title;
            $blog->slug = Str::slug($request->title); // Ensure the slug is updated
            $blog->description = $description;
            $blog->tags = $request->tags;
        
            // Save the updated blog post
            $blog->save();
        
            // Redirect back with a success message
            return redirect()->back()->with('success', 'Blog post updated successfully!');
        }
        public function blogdestroy($id){
            $blog = Blog::findOrFail($id);

    // Delete the featured image from storage, if it exists
    if ($blog->featured_image) {
        Storage::delete('public/' . $blog->featured_image);
    }

    // Delete the blog post from the database
    $blog->delete();

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Blog post deleted successfully!');
        }
}
