<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\view;
use App\Account;
class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inv()
    {
        return view('inventory.purchase');
    }
    public function index()
    {
        // $fname = "Ravi";
        // $lname = "Rana";
        // $fullname = $fname . " " . $lname;
        // // return view('account.index')->with('fullname', $fullname);
        // return view('account.index', ['fullname'=> $fullname]);

        // return View::first(['account.show', 'admin'], $data);
        $accounts = Account::all();
        return view('account.create', ['accounts' => $accounts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'fname'=> 'required|min:10|max:20',
            'lname'=> 'required',
            'username'=> 'required',
            'confirmpass'=> 'required'
        ]);

        $account = new Account;
        $account->first_name = $request->fname;
        $account->last_name = $request->lname;
        $account->username = $request->username;
        $account->password = $request->confirmpass;
        $account->save();
        // \Session::flash('flash_message','successfully saved.');
        return redirect()->route('account.index')->with('success', 'You have successfully Created!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $account = Account::find($id);
        return view('account.edit', ['account' => $account]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $account = Account::find($id);
        $account->first_name = $request->fname;
        $account->last_name = $request->lname;
        $account->username = $request->username;
        $account->password = $request->confirmpass;
        $account->save();
        return redirect()->route('account.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $account = Account::find($id);
        $account->delete();
        return redirect()->route('account.index');
    }
}
