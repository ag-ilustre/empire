<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Contact;
use App\Stage;
use Session;
use DB;
use Auth;

class AdminController extends Controller
{
    public function showAgents(){
        $users = User::all(); 
    	$roles = Role::all();

     	return view('admin.agents', compact('users', 'roles')); 
    }

    public function searchAgentsPage(){

    }

    public function editAgentRole($id, Request $request){
        $agentroleedit = User::find($id);
        $agentroleedit->role_id = $request->editedRoleId;
    	$agentroleedit->save();
        
        $agent_first_name = $agentroleedit->first_name;        $agent_last_name = $agentroleedit->last_name;
        $agent_name = $agent_first_name." ".$agent_last_name;

        $role = Role::find($agentroleedit->role_id);
        $role_id = $role->id;
        $role_name = $role->name;
       
        // $response = array(
        //   'role_id' => 'role_id', 
        //   'role_name' => 'role_name'
        // );
        // Session::flash("successmessage", "Updated Role successfully!")
        return response()->json(['agent_name'=> $agent_name, 'role_id' => $role_id, 'role_name' => $role_name]);
        // return response()->json(['role_id' => 'role_id', 'role_name' => 'role_name']);
    	// return redirect('/admin/agents');

        // return view('nameview', compact('agenttroleedit'));
    }

    public function deleteAgent($id){
        $count = Contact::where(['user_id' => $id])->get()->count();

        if ($count == 0) {
        	$agentdelete = User::find($id);
        	$agentdelete->delete();
        	// return redirect('/admin/agents');
            return response()->json(['status' => 'deleted', 'message'=> 'Deleted Agent successfully!', 'agentdelete_id'=> $id]);
        } else {
            return response()->json(['message'=> 'Deleting Agent is not allowed! Contacts are connected to this Agent. Consider editing the role instead.']);
        }


    }

    public function showContacts(){
        $users = User::all();
        $contacts = Contact::all(); 
        $stages = Stage::all();
        return view('admin.contacts', compact('users', 'contacts', 'stages')); 
    }
}
