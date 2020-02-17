<?php
namespace ServiceImp;
use Service\FormService;
use Repository\FormRepository;
use App\Form;


class FormServiceImpl implements FormService 
{
	protected $allPost;



	public function __construct(FormRepository $record )
    { 
         $this->Record = $record;
    }

   
    public function getAllRecords()
    {   
       
		return ($this->Record->getAllRecords());
        
    }

    public function getSingleRecord($id)
    {   
       
        return ($this->Record->getSingleRecordById($id));
        
    }






}
	