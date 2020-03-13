<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\challenge;
use App\Result;
use Response;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $challenges = challenge::where('status', 'ongoing')->orderBy('finishDate','asc')->paginate(10);
        
        return view('home', compact('challenges'));

    }


    public function submit(Request $request)
    {
        error_log( $request);

        
        $challenge = Result::create([
            'id_user' => $request['iduser'],
                'id_challenge' => $request['id'],
                'code' => $request['summernote'],
                'winner' => 0,

        ]);
        
        notify()->success('Code submitted successfully');

        return redirect()->action('ChallengeController@index');


    }

    public function checkIfsubmitted($id_user,$id_challenge)
    {

        error_log("checkeeeed");
   

        $post  = Result::where('id_challenge',$id_challenge)->where('id_user',$id_user)->first();
        error_log($post);

    //     $post  = Result::where($where)->first();
     if ($post==null) {
        error_log("suuuuub");

        $submitted=0;
    }else {
        error_log("nit suuuuub");
        $submitted=1;  
      }
        
   
        error_log("submiiiiiiiiiiiiiiiiiit");
        return Response::json($submitted);

    }
    
   
}
