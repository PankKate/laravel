<?php


namespace App\Http\Controllers;
use App\Debts;
use Illuminate\Http\Request;

class GetFormController extends Controller
{

	 public function debts(){
    	$debts = new Debts();
		return view('debts',['data' => $debts->all()]);
    }

	

    public function form_check(Request $request){
    	$valid = $request->validate([
    		'name' => 'required|alpha',
    		'value' => 'required|numeric',
    		'phone' =>'required|digits:11',
    		'note' =>'nullable|alpha_dash',
    	]);

    	$debt = new Debts();
    	$debt->name = $request->input('name');
    	$debt->value = $request->input('value');
    	$debt->phone = $request->input('phone');
    	$debt->note = $request->input('note');

    	$debt->save();
    	return redirect('debts');
    }
}
