<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use LRedis;
use view;
use Redirect;
use Auth;

class SocketController extends Controller {



	/*public function __construct()
	{
		$this->middleware('guest');
	}*/

	public function index()
	{
		$redis = LRedis::connection();
		$todos = $redis->lrange('chathistory', -10,-1); 
		return view('socket', ['todos' => $todos]);

	}

	public function writemessage()
	{

		return view('writemessage');

	}

	public function sendMessage(){


		if(Request::ajax()) {
	            /*$data = Request::input('message');
	            print_r($data);*/
	            
	            $user  = "<b style='color:purple'>".Auth::User()->name."</b>";
				$txt   = "<p style='color:green;margin-left:42px;'>".Request::input('message')."</p>";
				//$txt =wordwrap($txt, 40, "\n", true);
				//print_r(Request::all());
				/*$txt   ="<p style='color:green'><b style='color:purple'>". $user ."</b> SAY'S ".$txt."</p>";
				$redis = LRedis::connection();
				$a= $redis->publish('message', $txt);
				return redirect('writemessage');*/
				$redis = LRedis::connection();

				
				$a= $redis->publish('message', json_encode([
		            'username'      => $user,
		            'txt' => $txt,
		            
		        ]));
		        $txt=$user."  ".$txt;
		        $redis->rpush('chathistory', $txt);
		}

		
		

	}


}
