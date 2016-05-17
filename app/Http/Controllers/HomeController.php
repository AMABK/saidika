<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminIndex() {
        $query = \App\Question::whereNotNull('created_at');
        //Search by question
        $question = \Request::get('question');
        if ($question && !empty($question)) {
            $query->where('question', 'LIKE', '%' . $question . '%');
        }
        //Search by question
        $status = \Request::get('status');
        if ($status && !empty($status)) {
            if ($status == 2) {
                $status = 0;
            }
            $query->where('q_status', $status);
        } else {
            $query->where('q_status', 1);
        }
        $faq = $query->paginate(10);
        return view('admin.index', array('faqs' => $faq));
    }

    public function addFaq() {
        $ans = \App\Answer::create(array(
                    'answer' => \Request::get('answer')
        ));
        \App\Question::create(array(
            'question' => \Request::get('question'),
            'answer_id' => $ans->id
        ));

        return redirect('/admin')
                        ->with('global', '<div class="alert alert-success" align="center">Question successfully submitted</div>');
    }

    public function updateFaq() {
        \App\Question::find(\Request::get('q_id'))
                ->update(array(
                    'question' => \Request::get('question'),
                    'q_status' => \Request::get('status')
                        )
        );
        \App\Answer::find(\Request::get('a_id'))
                ->update(array(
                    'answer' => \Request::get('answer'),
                        )
        );
        return redirect()->back()
                        ->with('global', '<div class="alert alert-success" align="center">FAQ successfully updated</div>');
    }

    public function getQuestion() {
        $name = \Request::input('term');
        $search = \App\Question::whereRaw("MATCH(question) AGAINST(? IN NATURAL LANGUAGE MODE)", array($name))->take(10)->get();
        //$search = \DB::select("SELECT * FROM questions WHERE MATCH (question) AGAINST ('".$name."')");
        $matches = array();
        foreach ($search as $data) {
            if ($data->answer_id != null) {
                $det['id'] = $data->id;
                $det['answer'] = $data->answer->answer;
                $det['value'] = $data->question;
                $det['label'] = "{$data->question}";
                $matches[] = $det;
            }
        }
//        if (sizeof($matches) < 1) {
//            $matches['label'] = 'NO MATCHES FOUND <a href="/add-question"> Submit a new question</a>';
//        }
        $matches['label'] = 'NO MATCHES FOUND';
        print json_encode($matches);
    }

    public function addQuestion() {

        \App\Question::create(array(
            'question' => \Request::get('question')
        ));
        return redirect('/')
                        ->with('global', '<div class="alert alert-success" align="center">Question successfully submitted, your question will be answered within 24hrs</div>');
    }

    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
