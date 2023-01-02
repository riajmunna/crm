<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public $agent;

    public function addAgent()
    {
        return view('admin.agent.add-agent');
    }

    public function saveAgent(Request $request)
    {
        if ($request->agent_name != null && $request->agent_phone != null && $request->agent_email != null && $request->agent_address != null && $request->agent_password != null) {
            Agent::saveAgent($request);
            return back()->with('success', 'Successfully Added');
        } else {
            return back()->with('warning', 'Please Enter Data');
        }

    }

    public function manageAgent()
    {
        return view('admin.agent.manage-agent', [
            'agents' => Agent::all(),
        ]);
    }

    public function deleteAgent(Request $request)
    {
        $this->agent = Agent::find($request->agent_id);
        $this->agent->delete();
        return back()->with('success', 'Successfully Deleted');;
    }
}
