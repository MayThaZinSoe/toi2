<?php
class PagesController extends Controller
{

  public function index()
  {
  #  $lessons = array('my lesson1','my lesson2','my lesson3');
  #  return View::make('pages.home',('lessons' as $lessons));
    #  return View::make('pages.home',('lessons' => $lessons);
      $lessons = ('mylesson','secondlesson');
      return View::make('pages.home')->with('lessons',$lessons);

  }


}


?>
