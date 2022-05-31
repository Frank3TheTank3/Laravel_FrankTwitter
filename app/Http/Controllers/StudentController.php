<?php
namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Exceptions\Handler;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
	public function showAll() {
        $students = Student::all()->sortByDesc('created_at');
        return view('welcome', ['students' => $students]);
    }

    public function delete($id) {
 
        // ask the database for the message with the ID that we got
        // as a parameter. It is the same ID that we used to
        // generate the links to the message details
        // and the same ID that web.php took out of the link.
        // then we directly call the delete-method of
        // the Message-OBject that we get back from the
        // findOrFail function.
        $result = Student::findOrFail($id)->delete();
  
        // after that we redirect to the message list again  
        return redirect('/');        
    } 
 
}

?>