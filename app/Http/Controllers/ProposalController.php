<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Proposal;
use App\Models\Job as JobModel; // Alias the Job model to JobModel
use App\Models\CoverLetters;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProposalController extends Controller
{
    public function store($id, Request $request)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $job = JobModel::find($id); // Use the alias JobModel
        $proposal = Proposal::create([
            'job_id' => $job->id,
            'user_id' => Auth::id(),
            'validated' => false
        ]);

        CoverLetters::create([
            'proposal_id' => $proposal->id,
            'content' => $request->content,
        ]);
        return redirect()->back();
    }
    public function accept($id){
        $proposal= Proposal::find($id);
        $proposal->validated=true;
        if($proposal->isDirty()){
            $proposal->save();
            $conversation=Conversation::create([
                'from'=>auth()->user()->id,
                'to'=>$proposal->user->id,
                'job_id'=>$proposal->job_id,
            ]);
            Message::create([
                'user_id'=>Auth::user()->id,
                'conversation_id'=>$conversation->id,
                'content'=>'salut ca va '

            ]);
            return redirect()->route('jobs.index');
        }

    }
}
