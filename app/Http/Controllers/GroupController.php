<?php

namespace App\Http\Controllers;

use App\Events\GroupWithEvent;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index(){
        $groups = Group::all();
        return view('group.index', compact('groups'));
    }

    public function notify(int $group_id){
        $group = Group::query()->find($group_id);
        broadcast(new GroupWithEvent($group))->toOthers();
        return redirect()->back();
    }
}
