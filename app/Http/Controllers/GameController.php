<?php

namespace App\Http\Controllers;

use App\Game;
use App\Http\Requests\StoreGameRequest;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'list' => Game::where('status',1)->paginate(2)
        ];
        return view('game.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('game.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $request->validated();
        $game = new Game();
        $game->name = $request->name;
        $game->price = (double)$request->price;
        $game->description = $request->description;
        $game->status = 1;
        $game->save();
        return redirect('/game');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'game' => Game::find($id)
        ];
        return view('game.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'game' => Game::find($id)
        ];
        return view('game.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate(
            [
                'name' => 'required|max:20|min:3',
                'price' => 'required',
                'description' => 'required',
            ],
            [
                'name.required' => 'Vui lòng nhập tên',
                'name.max' => 'Tên dài không quá 20 kí tự',
                'name.min' => 'Tên tối thiểu 3 kí tự',
                'price.required' => 'Vui lòng nhập giá',
                'description.required' => 'Vui lòng nhập mô tả',
            ]
        );
        $game = Game::find($id);
        $game->name = $request->name;
        $game->price = (double)$request->price;
        $game->description = $request->description;
        $game->save();
        return redirect('/game');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $game = Game::find($id);
        if($game == null){

        }
        $game->status = 0;
        $game->save();
        return 'xóa rồi';
    }
}
