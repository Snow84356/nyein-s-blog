<?php

namespace App\Http\Controllers;

use App\Models\Post; // Post Model ကို import လုပ်ခြင်း
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        
        $posts = Post::latest()->get(); 

        
        return view('welcome', compact('posts'));
    }
    public function show($id)
{
    // Database မှ ID တူသော Post တစ်ခုတည်းကို ရှာမည်
    $post = Post::findOrFail($id);

    // post.show ဆိုတဲ့ view ဖိုင်ဆီသို့ data ပို့မည်
    return view('post', compact('post'));
}
// Form ဖိုင်ကို ပြသရန်
public function create()
{
    return view('posts.create');
}

// Data အသစ်များကို Database သို့ သိမ်းရန်
public function store(Request $request)
{
    // Form က ပါလာတဲ့ Data များကို စစ်ဆေးခြင်း (Validation)
    $request->validate([
        'title' => 'required|max:255',
        'body' => 'required',
        'image' => 'nullable|url', // ပုံ URL ထည့်ရန် (သို့မဟုတ် Image Upload အတွက်လည်း ပြင်လို့ရပါတယ်)
    ]);

    // Database ထဲသို့ Data အသစ် ထည့်သွင်းခြင်း
    Post::create([
        'title' => $request->title,
        'body' => $request->body,
        'image' => $request->image,
    ]);

    // ပြီးလျှင် Home Page သို့ ပြန်ပို့ပြီး အောင်မြင်ကြောင်း Message ပြရန်
    return redirect('/')->with('success', 'Post created successfully!');
}
// Post ကို ပြန်ပြင်ရန် Edit Form စာမျက်နှာသို့ သွားရန်
public function edit(Post $post)
{
    return view('posts.edit-post', compact('post'));
}

// ပြင်ဆင်ထားသော အချက်အလက်များကို Database သို့ အသစ်သိမ်းဆည်းရန်
public function update(Request $request, Post $post)
{
    $request->validate([
        'title' => 'required|max:255',
        'body' => 'required',
        'image' => 'nullable|url', // ပုံ URL (သို့မဟုတ် image validation လိုအပ်သလို)
    ]);

    $post->update([
        'title' => $request->title,
        'body' => $request->body,
        'image' => $request->image ?? $post->image,
    ]);

    return redirect()->route('posts.show', $post->id)->with('success', 'Post successfully updated!');
}
// Post ကို ဖျက်ရန်
public function destroy(Post $post)
{
    $post->delete();

    return redirect('/')->with('success', 'Post successfully deleted!');
}
}
