<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public $agent;
    public function addAgent(){
        return view('admin.agent.add-agent');
    }

    public function saveAgent(Request $request){
        Agent::saveAgent($request);
        return back();
    }

    public function manageAgent()
    {
        return view('admin.agent.manage-agent',[
            'agents' => Agent::all(),
        ]);
    }

    public function deleteAgent(Request $request){
        $this->agent = Agent::find($request->agent_id);
        $this->agent->delete();
        return back();
    }
}
