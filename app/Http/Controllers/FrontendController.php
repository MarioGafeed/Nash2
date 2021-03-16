<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pcategory;
use App\Models\Post;
// use App\Models\Question;
// use App\Models\UserAnswer;
// use App\Models\Answer;

class FrontendController extends Controller
{
    public function index()
    {
        // if (auth()->check()) {
        //
        //     $class = auth()->user()->class_relation;
        //
        //     if ($class) {
        //         $data = $class->details_relation()->where('showdate', date('Y-m-d'))
        //                         ->where('status', 'active')
        //                         ->with(['course_relation' => function ($rel) {
        //                             // Course::with('lessons_relation')->get()
        //                             return $rel->with(['lessons_relation' => function ($rel2) {
        //                                 // Lesson::where('status', 'active')->orderBy('myorder', 'ASC');
        //                                 return $rel2->where('status', 'active')->orderBy('myorder', 'ASC');
        //                             }]);
        //                         }])->get()->toArray();
        //         if (!empty($data['course_relation']) && !empty($data['course_relation']['lessons_relation'])) {
        //             abort(404, "يوجد خطا برجاء مراسلة المسؤول");
        //         }
                // if ($data[0]['course_relation']['id']!=null) {
                //   abort(404, "يوجد خطا برجاء مراسلة المسؤول");
                // }
                // else {
                //     session()->put('user_course', $data[0]['course_relation']['id']);
                // }

        //         if (!is_null(auth()->user()->last_lesson) && $lesson = Lesson::find(auth()->user()->last_lesson)) {
        //             return redirect("/lesson/{$lesson->id}");
        //         }
        //
        //         return view('frontend.index', [
        //             'data' => $data,
        //         ]);
        //     } else {
        //         abort(404, "يوجد خطا برجاء مراسلة المسؤول");
        //     }يس
        // }
        return view('frontend.index');
        // return redirect('/login');
    }

    public function pcat($id)
    {
        $post =  Post::with('pcategory');
        dd($post);
        return view('frontend.blog');
    }

    public function sendAnswers(Request $request)
    {
        if (auth()->check()) {
            if (count($request->answers)) {
                foreach ($request->answers as $key => $a) {
                    if (Question::find($key) && Answer::find($a)) {
                        UserAnswer::create([
                            'user_id' => auth()->id(),
                            'question_id' => $key,
                            'answer_id' => $a,
                            'answer_status' => Answer::find($a)->status,
                        ]);

                        if (Answer::find($a)->status == 'true') {
                            $user = auth()->user();
                            $user->score = intval($user->score) + 10;
                            $user->save();
                        }

                    }
                }

                $redirect_url = '/';

                // get the current lesson
                $lesson = Lesson::find($request->lesson_id);

                if ($lesson) {
                    // get next lesson id
                    $next = Lesson::where('status', 'active')->where('course_id', session()->get('user_course'))->where('myorder', '>', $lesson->myorder)->first();

                    if ($next) {
                        $redirect_url = "/lesson/{$next->id}";
                    }
                }
                return redirect($redirect_url);
            }
        }

        return redirect('/login');
    }


    public function changeLang($lang)
    {
        if (in_array($lang, ['ar', 'en'])) {
            session()->put('lang', $lang);
        }

        return redirect()->back();
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}
