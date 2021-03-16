<?php

namespace App\Http\Controllers\web;
use App\Http\Requests\MessagesRequest;
use App\Http\Controllers\Controller;
use App\Models\Pcategory;
use App\Models\Vcategory;
use App\Models\Post;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
      $pcats = Pcategory::select('id', 'title', 'image')->get();
      $limitpcats = Pcategory::select('id', 'title', 'image')->orderBy('id', 'desc')->take(2)->get();
      // $OnePost = Post::select('id', 'title', 'image', 'updated_at', 'desc')->orderBy('id', 'desc')->take(1)->first();
      $OnePost = Post::with('user')->orderBy('id', 'desc')->take(1)->first();
      $vcats = Vcategory::select('id', 'title', 'image', 'summary')->get();
      $setting = Setting::findOrFail(1);
      return view('frontend.index', [
        'pcats'        => $pcats,
        'limitpcats'   => $limitpcats,
        'OnePost'      => $OnePost,
        'vcats'        => $vcats,
        'setting'      => $setting
      ]);
    }

    public function changeLang($lang)
    {
        if (in_array($lang, ['ar', 'en'])) {
            session()->put('lang', $lang);
        }
        return redirect()->back();
    }

    public function donate()
    {
      return view('frontend.donate');
    }

    public function contact()
    {
      $pcats = Pcategory::select('id', 'title')->get();
      $vcats = Vcategory::select('id', 'title')->get();
      $setting = Setting::findOrFail(1);
      return view('frontend.contact', [
        'pcats' => $pcats,
        'vcats' => $vcats,
        'setting' => $setting
      ]);
    }

    public function about()
    {
      $pcats = Pcategory::select('id', 'title')->get();
      $vcats = Vcategory::select('id', 'title')->get();
      $setting = Setting::findOrFail(1);
      return view('frontend.about', [
        'pcats'   => $pcats,
        'vcats'   => $vcats,
        'setting' => $setting
      ]);
    }

    public function send(MessagesRequest $request)
    {
      // $validator =  Validator::make($request->all(), [
      // 'name'    =>'required|string|max:255',
      // 'email'   =>'required|email|max:255',
      // 'phone'   =>'nullable',
      // 'subject' =>'nullable|string|max:255',
      // 'body'    =>'required|string',
      // ]);

      $requestAll = $request->all();
      $message = Message::create($requestAll);

      // if($validator->fails()){
      //   $errors = $validator->errors();
      //   return redirect( url('contact') )->withErrors($errors);
      // }
      // Message::create([
      //   'name'      => $request->name,
      //   'email'     => $request->email,
      //   'phone'     => $request->phone,
      //   'subject'   => $request->subject,
      //   'body'      => $request->body,
      // ]);
      // $request->session()->flash('success', 'your message send successfully');
      // return back();

      session()->flash('success', trans('main.contact_mgs_send'));
      return back();
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}
