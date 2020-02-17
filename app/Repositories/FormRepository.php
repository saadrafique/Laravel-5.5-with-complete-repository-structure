<?php
namespace Repository;
use App\Form;

class FormRepository{



	public function getAllRecords()
    {    
        return Form::all();
    }

    public function getSingleRecordById($id)
    {    
        return Form::find($id);
    }
    
}
