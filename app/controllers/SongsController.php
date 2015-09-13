<?php
class SongsController extends Controller
{
  public function index()
  {
    #$songs = array('music','music2','music3');
    #return View::make('songs.index',compact('songs'));
    $songs = $this->getSongs();
    return View::make('songs.index',compact('songs'));
  }
  public function show($id)
  {
    $song = $this->getSongs()[$id];
    return View::nake('songs.show',compact('song'));
  }
  public function getSongs()
  {
    return ['boy','bb','gg'];
  }
}


?>
