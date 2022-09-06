<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Salary_survey as SalarySurveys;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class SalarySurvey extends Component
{
    use WithPagination;

    public $salarys = [];
    public $yearsOfExperience;
    public $length;
    public $byYearOfexperience = "";

    public function render()
    {

        if($this->byYearOfexperience !=""){
            $this->salarys = DB::table('salarysurvey')->where("years_of_experience", $this->byYearOfexperience)->get();
        }else{
            $this->salarys = DB::table('salarysurvey')->get();
        }
        $this->length = count($this->salarys);
        $this->yearsOfExperience = DB::table('salarysurvey')->distinct()->orderBy('years_of_experience', 'ASC')->get(['years_of_experience']);
       
        return view('livewire.salary-survey');
    }
}
