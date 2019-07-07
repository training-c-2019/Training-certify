<?php

namespace App\Http\Controllers;
use App\templates;
use Illuminate\Http\Request;

class TemplatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
		$all_template= templates::paginate('5');
		return view('all_template',['all_template'=>$all_template]);
    }
	//-----------------------------------------------
	public function create_templet(){
		$data=$this->validate(request(),[
		'body_ara'=>'required',
		'body_eng'=>'required',
		'description'=>'required',
		'status'=>'required',
		'requires_signature'=>'required',
		'layout'=>'required'		
		]);
		templates::create($data);
		session()->flush('message','new template added successfully');
		return session()->get('message');
    	}
	//-----------------------------------------------
	public function edit_template (Request $request,$id){
		$templet=templates::find($id);
		$templet->body_ara=$request->input('body_ara');
		$templet->body_eng=$request->input('body_eng');
		$templet->description=$request->input('description');
		$templet->status=$request->input('status');
		$templet->requires_signature=$request->input('requires_signature');
		$templet->layout=$request->input('layout');
		$result=$templet->save();
		if($result){
			return 'template is edited successfully';
		}
	}
	//-----------------------------------------------
	public function delete_template($id){
		$del=templates::find($id);
		if($del->delete()){
		    return 'the template is deleted successfully';
		}
	}
	//-----------------------------------------------

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


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
     * @param  \App\templates  $templates
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\templates  $templates
     * @return \Illuminate\Http\Response
     */
    public function edit(templates $templates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\templates  $templates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, templates $templates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\templates  $templates
     * @return \Illuminate\Http\Response
     */
    public function destroy(templates $templates)
    {
        //
    }
}
