<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\challenge;
use Redirect;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use Response;
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

        $challenge = challenge::create([
            'title' => $request['title'],
                'status' => $request['status'],
                'description' => $request['description'],
                'startDate' => $request['startDate'],
                'finishDate'=>$request['finishDate'],
                'id_organizer'=>1

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
    public function edit($id)
    {
        //
        $where = array('id_challenge' => $id);
        $post  = challenge::where($where)->first();

        return Response::json($post);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $update = ['title' => $request->title, 'description' => $request->description,'status' => $request->status];
        Challenge::where('id',$request->id)->update($update);


        return redirect()->action('ChallengeController@index');

    }
    public function updateChallenge(Request $request)
    {
        error_log( "updaaaate");

        error_log( $request);

        $update = ['title' => $request->title, 'description' => $request->description,'status' => $request->status];
        Challenge::where('id_challenge',$request->id)->update($update);


        return redirect()->action('ChallengeController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Challenge::where('id_challenge',$id)->delete();

        return redirect()->action('ChallengeController@index');
    }
}
