<?php
class FaqController extends Controller{
  public function index()
  {
//  $faq = Faq::find('all');

//return View::make('home',array('faq'=>$faq));
$data['faq'] = DB::table('faqs')
->get();

return View::make('home',$data);

  }
  public function show(){
    $name = Input::get('name');
    if($name){
      $data = Faq::where(function($data) use ($name){
        $data->where('query_text','service_name','%'.$name.'%');
      })->get();
    //  return View::make('articles.create')->with('data',$data);
      return View::make('articles.create',array('data'=>$data));
    }else{
      return View::make('home');
    }

  }


}
 ?>
