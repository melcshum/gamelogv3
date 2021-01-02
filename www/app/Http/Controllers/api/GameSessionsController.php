<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;



use App\Http\Controllers\Api\BaseController as BaseController;
use App\Models\XApiStatement;
use App\Models\Game;
use App\Models\User;
use App\Models\XapiProfile;
use App\Models\GameSession;
use App\Models\Scenario;

use App\Http\Resources\InteractionResource;
use App\Http\Resources\GameSessionResource;
use App\Http\Resources\GameResource;
use App\Http\Resources\XApiStatement as XApiStatementResource;

class GameSessionsController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }


    public function newSession(Request $request)
    {

        $loginData = $request->validate([
            'email' => 'email|required',
            'password' => 'required'

        ]);

        if (!auth()->attempt($loginData)) {
            $this->sendError(['message' => 'Invalid Credentials']);
        }
        $game= Game::where('slug', '=', $request->input('game_slug'))->first();

                if ($game == null) {
          return  $this->sendError(['message' => 'Invalid Game Id']);
        }


        // if (Game::find($request->input('game_id') === null)) {
        //     $this->sendError(['message' => 'Invalid Game Id']);
        // }

        // tempoarily use the session_id username + number of session
        //
        $user = User::with('xapi_profile')->where('email', '=',  $request->input('email'))->get()->first();
        $count = XapiProfile::where('user_id', '=', $user->id)->get()->first()->game_sessions()->count();


    //    $game = Game::find($request->input('game_id'));

          $sname = Str::slug($user->name, "_") . "_" . $game->slug .  "_" . $count++;
        //$sname = Str::slug('Laravel 5 Framework', '-');
        $sessionInfo = $user->xapi_profile->game_sessions()
            ->save(
                GameSession::make([
                    'session'  => $sname,
                    'game_id' => $game->id
                ])
            );


        $user = Auth::user();

        // $session['session']['token'] = $user->createToken('MyApp')->accessToken;
        // $session['session']['session_id'] = $sname;
        // $session['session']['game_id'] = $game->id;
        // $session['session']['playername'] =   $user->xapi_profile->name ;

        $session['token'] = $user->createToken('MyApp')->accessToken;
        $session['session_id'] = $sname;
        $session['game_id'] = $game->id;
        $session['playername'] =   $user->xapi_profile->name ;

        return $this->sendResponse( ["session" =>$session], 'Session Started');

        // return $this->sendResponse(
        //     ["session" =>
        //     [
        //         "session_id" => $sname,
        //         "game_id" => $game->id,
        //         "playername" =>  Str::slug($user->name)
        //     ]],
        //     'Session Started'
        // );
    }

    public function start(Request $request)
    {
    }
}
