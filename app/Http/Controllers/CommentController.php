<?php

namespace App\Http\Controllers;

use App\Mail\NewComments;
use App\Parsers\CommentParser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{
    public function runParser()
    {
//
    }

    public function parser()
    {
        if (request()->isMethod('get')) {
            return view('parser.create');
        } elseif (request()->isMethod('post')) {
            $parser = new CommentParser();
            $parser->parse('GET', 'https://www.fps.com.ua/vidguky/?thread_id=26&selected_section=discussion&page=', 5);
            if (!empty($comments = $parser->repo->getComments())) {
                try {
                    Mail::to('st3am.pwr@gmail.com')->send(new NewComments($parser->repo->getComments()));

                } catch (\Exception $exception) {
                    $mailerRes = $exception->getMessage();
                }
                return view('parser.create', [
                    'mailerFailuresRes' => Mail::failures(),
                    'comments' => $comments
                ]);
            }
            return view('parser.create', ['mailerFailuresRes' => null, 'comments' => []]);
        } else {
            return response('Method Not Allowed', 405);
        }

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
