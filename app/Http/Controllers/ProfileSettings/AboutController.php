<?php

namespace App\Http\Controllers\ProfileSettings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $about = About::where('user_id', auth()->user()->id)->first();
        return view("profile-settings.about")->with("about", $about);
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
    public function store()
    {

        $validatedRequest = request()->validate([

            'description' => 'string|nullable|max:1024',
            'hobby' => 'string|nullable|max:1024',
            'skills' => 'string|nullable|max:1024',
            'gender' => 'string|nullable|max:10',
            'facebook' => 'url|nullable|max:1024',
            'twitter' => 'url|nullable|max:1024',
            'linkedin' => 'url|nullable|max:1024',
            'profile_photo' => 'file|max:5000|mimes:jpg,bmp,png',
            'cover_photo' => 'file|max:5000|mimes:jpg,bmp,png'



        ]);
        //user about ->user_id

        //   dd($validatedRequest);

        $userID = auth()->user()->id;

        $about = About::where(['user_id' => $userID])->first();

        if ($about == null) {
            $about = new About(['user_id' => $userID]);
            $about->update($validatedRequest);


            if (request()->file("profile_photo") != null) {
                $about->profile_photo = request()->file("profile_photo")->store("uploads");
            }
            if (request()->file("cover_photo") != null) {
                $about->cover_photo = request()->file("cover_photo")->store("uploads");
            }

            $about->save();
        }


        $about->update($validatedRequest);

        if (request()->file("profile_photo") != null) {
            $about->profile_photo = request()->file("profile_photo")->store("uploads");
        }
        if (request()->file("cover_photo") != null) {
            $about->cover_photo = request()->file("cover_photo")->store("uploads");
        };


        $about->save();

        return redirect('/about')->with('success', 'Your Profile updated');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
