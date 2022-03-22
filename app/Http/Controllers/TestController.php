<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function index()
    {
        try {
            Log::channel('welcome')->info('You have viewed Home Page'.' '.rand(1,100));
            return view('welcome');

        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }

    public function user()
    {
        try {

            $users = User::all();
            $logfiles = file(storage_path('logs/view.log'));
            $collection = [];
            foreach ($logfiles as $line_number => $line){
                $collection[] = array('line' => $line_number,'content' => htmlspecialchars($line));
            }
            foreach ($collection as $collect){
                dd($collect['content']);
            }
            return view('user',compact('users'));

        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }
}
