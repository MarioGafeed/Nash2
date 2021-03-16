<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MessagesRequest;
use App\DataTables\MessagesDataTable;
use App\Models\Message;
use Helper;
use App\Mail\ContactResponseMail;
use Illuminate\Support\Facades\Mail;


class MessageController extends Controller
{
  private $viewPath = 'backend.messages';

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(MessagesDataTable $dataTable)
  {
      return $dataTable->render("{$this->viewPath}.index", [
          'title' => trans('main.show-all') . ' ' . trans('main.messages')
      ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view("{$this->viewPath}.create", [
          'title' => trans('main.add') . ' ' . trans('main.messages'),
      ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(MessagesRequest $request)
  {
      $requestAll = $request->all();
      $message = Message::create($requestAll);

      session()->flash('success', trans('main.added-message'));
      return redirect()->route('messages.create');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $message = Message::findOrFail($id);

      return view("{$this->viewPath}.show", [
          'title' => trans('main.show') . ' ' . trans('main.message') . ' : ' . $message->name,
          'show' => $message,
      ]);
  }


  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @param  bool  $redirect
   * @return \Illuminate\Http\Response
   */
  public function destroy($id, $redirect = true)
  {
      $message = Message::findOrFail($id);
      $message->delete();

      if ($redirect) {
          session()->flash('success', trans('main.deleted-message'));
          return redirect()->route('messages.index');
      }
  }


  /**
   * Remove the multible resource from storage.
   *
   * @param  array  $data
   * @return \Illuminate\Http\Response
   */
  public function multi_delete(Request $request)
  {
      if (count($request->selected_data)) {
          foreach ($request->selected_data as $id) {
              $this->destroy($id, false);
          }
          session()->flash('success', trans('main.deleted-message'));
          return redirect()->route('messages.index');
      }
  }

  public function response(Message $message, Request $request)
  {
    $request->validate([
      'name'=>'required|string|max:255',
      'subject'=>'required',
      'body'=>'required|string',
      'email'   =>'required|email|max:255',
    ]);
    // $receiverName = $message->name;
    $receiverMail = $request->email;
    Mail::to($receiverMail)->send(new ContactResponseMail($request->name, $request->subject, $request->body) );

    session()->flash('success', trans('main.send-message'));
    return redirect()->route('messages.index');
  }
}
