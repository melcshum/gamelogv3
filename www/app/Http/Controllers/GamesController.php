<?php


namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\GameSession;
use App\Models\XApiStatement;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $games = Game::latest()->paginate(20);

        return view('games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show($game)
    {


        $app = app();

        $a =  $app->make('stdClass');
        $a->id = '0';
        $a->name = 'Loop Magic';
        $a->difficulty_rate = '0.7';


        $a->time_limit = '25000';
        $a->numOfClick = '20';
        $a->numOfDrag = '14';
        $a->level = 'Practise for iteration (Hard)';

        $b =  $app->make('stdClass');
        $b->id = '0';
        $b->name = 'Loop Magic';
        $b->difficulty_rate = '0.6';
        $b->uncertainty = '3';
        $b->k_factor = '4';

        $b->time_limit = '17000';
        $b->numOfClick = '6';
        $b->numOfDrag = '7';
        $b->level = 'Practise for iteration (Med)';

        $c =  $app->make('stdClass');
        $c->id = '0';
        $c->name = 'Loop Magic';
        $c->difficulty_rate = '0.4';
        $c->uncertainty = '3';
        $c->k_factor = '4';

        $c->time_limit = '10000';
        $c->numOfClick = '3';
        $c->numOfDrag = '2';
        $c->level = 'Practise for iteration (Low)';

        $temp = collect([$a, $b,  $c]);

        $game =  Game::with('scenarios')->where('id', '=', $game->id)->get()->first();

        $scenarios =  $game->scenarios()->paginate(5);

        return view('games.show', compact(['game', 'scenarios', 'temp']));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function showGameSessions($game)
    {

        $game =  Game::with(['game_sessions', 'game_sessions.profile'])->where('id', '=', $game->id)->get()->first();
        $game_sessions =  $game->game_sessions()->paginate(5);

        return view('games.showGameSession', compact(['game', 'game_sessions']));
    }

    public function  showPlayerSessions($gameslug, $sessionid)
    {

         $game_session =  GameSession::with("session_xapi_statement")->where('id', '=', $sessionid)->get()->first();
        // $game_sessions =  $game->game_sessions()->paginate(5);



        //$gamesession =    GameSession::with("session_xapi_statement")->where('session', '=', $session_key)->first();

        $xapis = $game_session->session_xapi_statement;

        $xapi_statements= XApiStatement::whereIn('_id', $xapis->pluck('xapi_id'))->get();


        return view('games.showProfileSession', compact(['game_session', 'xapi_statements'] ));


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(game $game)
    {
        //
    }
}
