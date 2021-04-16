<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FacultyModel;




class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $faculties=FacultyModel::all();

        return view('viewallfaculties',compact('faculties'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

 public function search(Request $request)
 {
     $getFname=request('fname');

     $faculties=FacultyModel::query()
     ->where('fname', 'LIKE' , "%{$getFname}%")
     ->get();

        return view('viewallfaculties',compact('faculties'));



 }

    public function store(Request $request)
    {
        $getName= request('fname');
        $getDes= request('fdes');
        $getContact= request('fcontact');
        $getCollege= request('fcollege');



        echo $getName;
        echo "<br>";
        echo $getDes;
        echo "<br>";

        echo $getContact;
        echo "<br>";


        echo $getCollege;

        $faculty=new FacultyModel();

        $faculty->fname=$getName;
        $faculty->fmob=$getContact;
        $faculty->fdesignation=$getDes;
        $faculty->fcollege=$getCollege;

        $faculty->save();


        return redirect('/viewallfaculties');




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
        $faculties=FacultyModel::find($id);
        return view('editview',compact('faculties'));


        


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
        $faculty=FacultyModel::find($id);

        $getName= request('fname');
        $getDes= request('fdes');
        $getContact= request('fcontact');
        $getCollege= request('fcollege');
        $faculty->fname=$getName;
        $faculty->fmob=$getContact;
        $faculty->fdesignation=$getDes;
        $faculty->fcollege=$getCollege;

        $faculty->save();


        return redirect('/viewallfaculties');







    }


       
    public function deleteview($id)
    {
        $faculties=FacultyModel::find($id);
        return view('deleteview',compact('faculties'));


        


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faculty=FacultyModel::find($id);

        $faculty->delete();

        return redirect('/viewallfaculties');




        //
    }
}
