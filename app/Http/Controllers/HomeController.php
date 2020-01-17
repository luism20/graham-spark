<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Company;
use App\User;
use App\QlikObject;

use Illuminate\Support\Facades\Log;


use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        // $this->middleware('subscribed');

        // $this->middleware('verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function show()
    {
        $savedCompany = $this->getCompany(Auth::id());
        $generalViewObject = $this->getGeneralViewObject($savedCompany->id);
        Log::Debug(json_encode($generalViewObject));
        if(isset($savedCompany)) {
            return view('dashboard/home', compact('generalViewObject'));    
        } else {
            return $this->setup();
        }        
    }

    public function financialAnalysis()
    {
        $savedCompany = $this->getCompany(Auth::id());
        if(isset($savedCompany)) {
            return view('dashboard/financial-analysis');    
        } else {
            return $this->setup();
        }        
    }

    public function roa()
    {
        $savedCompany = $this->getCompany(Auth::id());
        if(isset($savedCompany)) {
            return view('dashboard/return-asset');    
        } else {
            return $this->setup();
        }        
    }

    /**
     * Show the application setup.
     *
     * @return Response
     */
    public function setup()
    {
        //return view('home');
        return view('dashboard/setup');
    }

    /**
     * Show the excel import
     *
     * @return Response
     */
    public function excel()
    {
        //return view('home');
        return view('dashboard/excel');
    }

    private function getCompany($userId) {
        $savedCompany = Company::where('userId', $userId)->first(); 
        return $savedCompany;
    }

    private function getGeneralViewObject($companyId) {
        $qlikObject = QlikObject::where('companyId', $companyId)->first(); 
        return $qlikObject;
    }

    public function importDataStore(Request $request){
        $this->validate($request, [
            'file_input' => 'required|max:2048|mimes:xlsx,xls'
        ]);
        if ($request->hasFile('file_input')) {
            $file = $request->file('file_input');
            $name = time() . $file->getClientOriginalName();
            $filePath = Auth::id() . '/' . $name;
            Storage::disk('s3')->put($filePath, file_get_contents($file));
            $excelFile = Storage::url($filePath);
            $user = User::find(Auth::id());            
            $userId = $user->id;
            $companyName = $user->company;
            $user->save();
            $company = $this->createCompany($userId, $companyName, $excelFile);
            $this->createMindApp($company->id);
            return redirect('/home'); 
            /*return view('modules/dashboard', [
                'title' => "GrahamMind - Dashboard",
                "usuario" => $usuarios
            ]);*/
        }
    }

    public function createCompany($userId, $companyName, $excelFile = "") {
        $savedCompany = Company::where('userId', $userId)->where('name', $companyName)->first();
        if(isset($savedCompany)) {           
            $savedCompany->excelFile = $excelFile;
            $savedCompany->save();
            return $savedCompany;
        } else {
            $company = new Company();
            $company->userId = $userId;
            $company->name = $companyName;
            $company->excelFile = $excelFile;
            $company->save();
            return $company;
        }        
    }

    public function createMindApp($companyId) {
        $savedCompany = Company::where('id', $companyId)->first();        
        $helper = new MindController();
        $helper->initCreateMindApp($savedCompany->id);        
    }


}
