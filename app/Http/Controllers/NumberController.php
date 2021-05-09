<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\phonebook;
use Illuminate\Support\Facades\File ;

class NumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('notelist.insertnumber');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['phonenumber'] = DB::table('phonebooks')->get();
        return view('notelist.listnumber', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tel_number'=>'required|numeric',

        ]);

        if (!$validator->fails()) {
            $phone = new phonebook;
            $phone->tel_number = $request->input('tel_number');
            $phone->name = $request->input('name');
            $phone->address = $request->input('address');

            if ($request->file('picture') != '') {
                $file = $request->file('picture');
                $ext = $file->getClientOriginalExtension();
                $name = md5(rand() * time()) . '.' . $ext;
                $file->move(public_path('img/Picnumber'), $name);
            } else {
                $name = '';
            }
            $phone->picture = $name;
            $phone->save();
            return back();
        } else {
            return back();
        }
    }

  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $number = phonebook::find($id);
        return view('notelist.editnumber',compact('number'));
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
        $validator = Validator::make($request->all(), [
            'tel_number'=>'required|numeric',

        ]);

        if (!$validator->fails()) {
            $phone = phonebook::find($id);
            $phone->tel_number = $request->get('tel_number');
            $phone->name = $request->get('name');
            $phone->address = $request->get('address');

            File::delete(public_path('/img/Picnumber/' . $phone->picture));

            if ($request->file('picture') != '') {
                $file = $request->file('picture');
                $ext = $file->getClientOriginalExtension();
                $name = md5(rand() * time()) . '.' . $ext;
                $file->move(public_path('img/Picnumber'), $name);
            } else {
                $name = '';
            }
            $phone->picture = $name;
            $phone->save();
            return redirect()->route('allnumber.create');
        } else {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pic = phonebook::find($id);
        File::delete(public_path('/img/Picnumber/' . $pic->picture));
        $pic->delete();
        return back();
    }
}
