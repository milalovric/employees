<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use DB;




class SearchController extends Controller

{

   public function index()

{

return view('search.search');

}



public function search(Request $request)

{

if($request->ajax())

{

$output="";

$employees=DB::table('employees')->where('FirstName','LIKE','%'.$request->search."%")->get();

if($employees)

{

foreach ($employees as $key => $employee) {

$output.='<tr>'.

'<td>'.$employee->id.'</td>'.

'<td>'.$employee->FirstName.'</td>'.

'<td>'.$employee->LastName.'</td>'.

'<td>'.$employee->Gender.'</td>'.

'</tr>';

}



return Response($output);



   }



   }



}

}