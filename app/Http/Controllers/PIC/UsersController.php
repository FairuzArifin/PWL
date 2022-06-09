<?php

namespace App\Http\Controllers\PIC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $limit = 5;
    
     public function index()
    {
        $users = User::paginate($this->limit);
        return view('PIC.user.index', compact('users'));

    }
    
//     public function index()
//    {
//         return view('PIC.user.index', [
//            'user' => User::where('id', auth()->user()->id)->get() ,
    
//        ]);
       
//        // [
//        //     'users' => User::where('id', auth()->user()->id)->get()
//        // ]);
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(user $user)
    {
        return view('PIC.user.create', compact('user'));
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\userRequest $request)
    {
        $request->user()->create($request->all());
        return redirect(route('usersindex'))->with('message', 'User Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    private function handleRequest($request)
    {
        $data = $request->all();
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrfail($id);
        return view('PIC.user.create', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\userRequest $request, $id)
    {
        $user = User::findOrfail($id);
        $data = $this->handleRequest($request);
        $user -> update($data);
        return redirect(route('usersindex'))->with('message', 'User Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrfail($id)->delete();
        return redirect(route('usersindex'))->with('message', 'User Berhasil Dihapus');
    }
}
