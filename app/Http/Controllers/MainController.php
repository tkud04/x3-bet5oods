<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Contracts\HelperContract; 
use Illuminate\Support\Facades\Auth;
use Session; 
use Validator; 
use Carbon\Carbon; 

class MainController extends Controller {

	protected $helpers; //Helpers implementation
    
    public function __construct(HelperContract $h)
    {
    	$this->helpers = $h;                     
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
    {
       $user = null;

		if(Auth::check())
		{
			$user = Auth::user();
		}

		
		$signals = $this->helpers->signals;
        $plugins = [];
        $courses = [];
        return view('index',compact(['user','plugins','signals','plugins']));
    }
	

	

    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getTrack(Request $request)
    {
       $user = null;

		if(Auth::check())
		{
			$user = Auth::user();
		}

		$req = $request->all();
        $result = []; $valid = false;

        if(isset($req['tnum'])){
           $result = $this->helpers->track($req['tnum'],['mode' => "all"]);
        }
        $signals = $this->helpers->signals;
		$plugins = $this->helpers->getPlugins();
        #dd($result);
		if(!isset($result['tracking']) || count($result['tracking']) > 0) $valid = true;
    	return view('track',compact(['user','result','valid','signals','plugins']));
    }


	 /**
	 * Show the application contact view to the user.
	 *
	 * @return Response
	 */
	public function getContact(Request $request)
    {
       $user = null;
	   $signals = $this->helpers->signals;
	   $plugins = $this->helpers->getPlugins();

		if(Auth::check())
		{
			$user = Auth::user();
		}

    	return view('contact',compact(['user','signals','plugins']));
    }

	 /**
	 * Show the application about view to the user.
	 *
	 * @return Response
	 */
	public function getAbout(Request $request)
    {
       $user = null;
	   $signals = $this->helpers->signals;
	   $plugins = $this->helpers->getPlugins();

		if(Auth::check())
		{
			$user = Auth::user();
		}

    	return view('about',compact(['user','signals','plugins']));
    }

	 /**
	 * Show the application about view to the user.
	 *
	 * @return Response
	 */
	public function getWhyUs(Request $request)
    {
       $user = null;
	   $signals = $this->helpers->signals;
	   $plugins = $this->helpers->getPlugins();

		if(Auth::check())
		{
			$user = Auth::user();
		}

    	return view('why-us',compact(['user','signals','plugins']));
    }

	 /**
	 * Show the application about view to the user.
	 *
	 * @return Response
	 */
	public function getGoogle(Request $request)
    {
       $user = null;
	   $signals = $this->helpers->signals;
	   $plugins = $this->helpers->getPlugins();

		if(Auth::check())
		{
			$user = Auth::user();
		}

    	return view('google',compact(['user','signals','plugins']));
    }
	
	
    
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getZoho()
    {
        $ret = "1535561942737";
    	return $ret;
    }
    
    
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getPractice()
    {
		$url = "http://www.kloudtransact.com/cobra-deals";
	    $msg = "<h2 style='color: green;'>A new deal has been uploaded!</h2><p>Name: <b>My deal</b></p><br><p>Uploaded by: <b>A Store owner</b></p><br><p>Visit $url for more details.</><br><br><small>KloudTransact Admin</small>";
		$dt = [
		   'sn' => "Tee",
		   'em' => "kudayisitobi@gmail.com",
		   'sa' => "KloudTransact",
		   'subject' => "A new deal was just uploaded. (read this)",
		   'message' => $msg,
		];
    	return $this->helpers->bomb($dt);
    }   


}