<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member;
use App\Http\Requests\memberCreateRequest;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{

    public function showRegister()
    {
        return view('register');
    }

    public function showLogin()
   {
       return view('login');
   }

   public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('profile');
        }

        return back();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //memberテーブルからname,telephone,emailを$membersに格納
        $members=DB::table('members')
            ->select('id', 'name', 'password', 'email')
            ->get();

        //viewを返す(compactでviewに$membersを渡す)
        return view('member/index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('member/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(memberCreateRequest $request)
    {
        $member=new Member;

        $member->name=$request->input('name');
        $member->password=$request->input('password');
        $member->email=$request->input('email');

        $member->save();

        Auth::login($member);

        //一覧画面にリダイレクト
        return redirect()->route('member.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $member = Member::find($id);

        return view('member/show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $member = Member::find($id);

        return view('member/edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $member = Member::find($id);

        $member->name = $request->input('name');
        $member->password = $request->input('password');
        $member->email = $request->input('email');

        $member->save();

        //一覧画面にリダイレクト
        return redirect()->route('member.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $member = Member::find($id);

        $member->delete();

        return redirect()->route('member.index');
    }
}
