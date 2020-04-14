<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
class SessionController extends Controller
{
   
     public function index()
	{
	return view('main_view');
	}
         public function view()
	{
             $session = session();
            //print value from the key univ
            $session_data = $session->get('univ');
            //print data for the key colors 
            $session_data = $session->get('colors');
            //echo $session_data;
            print_r($session->get());
            //print all session data from the array colors
      if($session->get('colors')){
          $data=$session->get('colors');
           foreach ( $data as $key=>$var )
                {
                    print "<br/>$key = = > $var<br/>";
                    }
      }else
         echo 'No data in the session';
   } 
 public function set()
	{
     $session = session();
       $colors = array(
                   'color1' => 'red',
                   'color2' => 'yellow',
                   'color3' => 'blue'
               );
       //add a varible to session
      $session->set('univ','"Al. I. Cuza"');
      //add a string to session
      $session->set($colors);
      echo "Data has been added to session";

	}
public function delete()
	{
    $session = session();
          //delete all session data
        $session->destroy();
        //delete values for key univ
        //$session->remove('univ');
        echo "Data has been removed from session.";

	}
}