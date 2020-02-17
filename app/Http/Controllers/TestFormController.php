<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use App\Http\Requests\FormRequest;
class TestFormController extends Controller
{
    //

    public function index(){
    	$form=Form::all();

    	return view('Form.index',compact('form'));
    }

    public function form(){
	
		return view('Form.create');
    }

    public function store(FormRequest $request)
    {
    	$form = Form :: Create($request->all());
        $form->save();
        if (isset($request -> photo)) 
        {
              $imageName = $form->id . '_photo.' .
              $request->file('photo')->getClientOriginalExtension();
              $imageCompletePath = '/photo/'. $imageName ;
              $request->file('photo')->move(
              base_path() . '/public/photo/', $imageName);
              $form->update(array('photo' => $imageCompletePath));

        }
    	return redirect ('/');
    }

    public function destroy($id)
  	{
  	    $form = Form::findOrFail($id);
  	    $form->delete();

  	\Session::flash('flash_message', 'Article successfully deleted!');
  	    return redirect('/');
  	}

  	public function show($id){
  		$form = Form::findOrFail($id);
  		return view('Form.view', compact('form'));
  	}

    public function edit($id)
    {
          $form=Form::findOrFail($id);
          return view('Form.edit',compact('form'));
    }

    public function update($id , FormRequest $request){
          $form=Form::findOrFail($id);
          $form->update($request->all());
          $url = '/detail'.'/'.$id;
          if (isset($request -> photo)) 
          {
                $imageName = $form->id . '_photo.' .
                $request->file('photo')->getClientOriginalExtension();
                $imageCompletePath = '/photo/'. $imageName ;
                $request->file('photo')->move(
                base_path() . '/public/photo/', $imageName);
                $form->update(array('photo' => $imageCompletePath));

          }
          return redirect ($url);
    }

}
