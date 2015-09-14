<?php
class FaqController extends Controller{
  public function index()
  {
//  $faq = Faq::find('all');

//return View::make('home',array('faq'=>$faq));
$ret = DB::table('faqs')
->get();

$data = array();
$data['faq'] = $ret;
return View::make('home',$data);

  }
  public function show(){
    $name = Input::get('name');
    if($name){
      $ret = Faq::where(function($data) use ($name){
        $data->where('query_text','service_name','%'.$name.'%');
      })->get();
      
      $data = array();
      $data['faq'] = $ret;
      return View::make('home',$data);
      
    //  return View::make('articles.create')->with('data',$data);
    //  return View::make('articles.create',array('data'=>$data));
    }else{
      return View::make('home');
    }

  }


}
 ?>
