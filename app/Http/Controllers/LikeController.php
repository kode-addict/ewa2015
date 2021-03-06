<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LikeController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

        $candidateId=$request->input('candidate_id');

        if($this->checkLikeExist($candidateId)==1){

            $like=\App\LikeCandidate::where('user_id',auth()->user()->id)->where('candidate_id',$candidateId)->first();

            $like->delete();

            return response()->json(['result' => 'destroyed']);

        }
        else{

        \App\LikeCandidate::create([

                'user_id'   => auth()->user()->id,
                'candidate_id'  => $candidateId
            ]);

             return response()->json(['result' => 'created']);

        }
    }


    protected function checkLikeExist($candidateId){

        $result=\App\LikeCandidate::where('user_id',auth()->user()->id)->where('candidate_id',$candidateId)->count();

        return $result;
    }



}
