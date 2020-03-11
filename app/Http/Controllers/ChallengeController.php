<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\challenge;
use Redirect;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class ChallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $challenges = challenge::orderBy('finishDate','asc')->paginate(10);
        error_log( $challenges);

        return view('organizer')->with('challenges',$challenges)->withTitle('challenge');;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        error_log( $request);

        $admin = challenge::create([
            'title' => $request['title'],
                'status' => $request['status'],
                'description' => $request['description'],
                'startDate' => $request['startDate'],
                'finishDate'=>$request['finishDate']

        ]);
        return redirect()->action('ChallengeController@index');
    //     Challenge::create([
    //         'title' => $request['title'],
    //     'status' => $request['status'],
    //     'description' => $request['description'],
    //     'startDate' => "ggkgkgk",
    //     'finishDate' => $request['finishDate'],
    //     ]);
    //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function show(challenge $challenge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function edit(challenge $challenge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, challenge $challenge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function destroy(challenge $challenge)
    {
        //
    }
}
