<?php

namespace App\Http\Livewire\Admin\Dashboard;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class UserDashboardLivewire extends Component
{
    public function render()
    {

        $user                = User::find(Auth::user()->id);
        $numberOfProjects    = DB::table('projects')->where('user_id', $user->id)->count();
        $numberOfMessage     = DB::table('messages')->where('user_id', $user->id)->count();
        $numberOfSkills      = DB::table('skills')->where('user_id', $user->id)->count();
        $numberOfExperiences = DB::table('experiences')->where('user_id', $user->id)->count();

        // ->distinct('type')->get(['type'])

        $numberOfProfileViewed = DB::table('devices')->where('user_id', $user->id)->distinct('latest_ip_address')->count();

        return view('livewire.admin.dashboard.user-dashboard-livewire', [
            'numberOfMessage'       => $numberOfMessage,
            'numberOfProjects'      => $numberOfProjects,
            'numberOfSkills'        => $numberOfSkills,
            'numberOfExperiences'   => $numberOfExperiences,
            'numberOfProfileViewed' => $numberOfProfileViewed,
            'title'                 => config('app.name') . '|' . 'User-Dashboard',
        ]
        )->extends('layouts.app');
    }
}
