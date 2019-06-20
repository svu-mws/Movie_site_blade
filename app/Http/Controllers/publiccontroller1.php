<?php

namespace App\Http\Controllers;

use App\producer;
use Illuminate\Http\Request;
use \App\movie ;
use \App\movies_actor;
use \App\actor;
use App\type;
 use App\Http\Resources\movie as movie1 ;
use App\movie_rate;
use function MongoDB\BSON\toJSON;
use function Sodium\add;

class publiccontroller1 extends Controller
{
    //

      public function index()
  {
    try {
              $allmovies = movie::paginate(10);
        } catch (QueryException $exception) {
            $errorMessage = $exception->getMessage();
            $errorCode = $exception->getCode();
            // Return the response to the client..
            $file = $exception->getFile();
            return response()->json([
                'status' => 'failed',
                'message' => $errorMessage,
                'file' => $file,
                'code' => $errorCode,
            ], 500);

        }
        // return response($allmovies, 202);
      $type = type::all();
        return view('welcome',compact('allmovies'),compact('type'));
    }

    // return movie1::collection($allmovies);
    //

  public function singlmovie($id)
    {
      try {
                $movie = movie::find($id);
          } catch (QueryException $exception) {
              $errorMessage = $exception->getMessage();
              $errorCode = $exception->getCode();
              // Return the response to the client..
              $file = $exception->getFile();
              return response()->json([
                  'status' => 'failed',
                  'message' => $errorMessage,
                  'file' => $file,
                  'code' => $errorCode,
              ], 500);

          }
          // return response($movie, 202);
          return view('movies',compact('movie'));
      }

//
// movie1::withoutWrapping();
// return new movie1($movie);

      //

    public function about()
    {
      return new movie1(['show about page']);
    }
    public function contact()
    {
      return new movie1(['show contact page']);
    }
    public function contactpost()
    {
      return new movie1([]);
    }
    public  function searchmoviebtletter($letter)
    {

        $m =  movie::where('name', 'LIKE',  $letter . '%')->get();
        $type= type::all();
        if(count($m) > 0)

            return view('welcome',compact('type'))->withDetails($m);
        else
            return view ('welcome',compact('type'))->withDetails([])->withMessage('No Details found. Try to search again !');

    }
    public  function searchactorbtletter($letter)
    {
        $type= type::all();
        $actors = actor::where('name', 'LIKE', $letter . '%');




        $movies_actors = movies_actor::whereIn('actor_id',$actors->select('id'));

        $m= movie::whereIn('id',$movies_actors->select('id'))->get();
        if(count($m) > 0)
            return view('welcome',compact('type'))->withDetails($m);
        else
            return view ('welcome',compact('type'))->withDetails([])->withMessage('No Details found. Try to search again !');

    }
    public  function searchproducerbtletter($letter)
    {
        $type= type::all();
        $p =  producer::select('id')->where('name', 'LIKE',   $letter . '%');
        $m = movie::whereIn('prodicer_id',$p)->get();
        if(count($m) > 0)
            return view('welcome',compact('type'))->withDetails($m);
        else
            return view ('welcome',compact('type'))->withDetails([])->withMessage('No Details found. Try to search again !');

    }


  public function searchmovie($moviename)
  {
      $m=  movie::where('name', 'LIKE', '%' . $moviename . '%')->get();
//
      return $m;

  }
    public function searchByactor($actorname)
    {
        $actors = actor::where('name', 'LIKE', '%' . $actorname . '%');




        $movies_actors = movies_actor::whereIn('actor_id',$actors->select('id'));

return movie::whereIn('id',$movies_actors->select('id'))->get();

    }
public function searchByproducer($producersname)
{
    $producers = producer::select('id')->where('name', 'LIKE', '%' . $producersname . '%');
    return movie::whereIn('prodicer_id',$producers)->get();

}
  public function search(Request $request)
  {

      if ((empty($request)))
          return back();
      else

        $moviename = $request->moviename;
      $actorsname = $request->actorsname ;
      $producersname=$request->producersname;
      $typesname=$request->typesname;
      $type= type::all();
      if ($moviename== null && $actorsname == null && $producersname==null&&$typesname==null)
          return back();
      else

      if ($moviename!= null && $actorsname == null && $producersname==null&&$typesname==null)
      {
          $type= type::all();
         $m= $this->searchmovie($moviename);
          if(count($m) > 0)
              return view('welcome',compact('type'))->withDetails($m);
          else
              return view ('welcome',compact('type'))->withDetails([])->withMessage('No Details found. Try to search again !');
      }
      if ($moviename== null && $actorsname != null && $producersname==null&&$typesname==null)
      {
          $type= type::all();

           $m =$this->searchByactor($actorsname);

          if(count($m) > 0)
              return view('welcome',compact('type'))->withDetails($m);
          else

              return view ('welcome',compact('type'))->withDetails([])->withMessage('No Details found. Try to search again !');
      }

      if ($moviename== null && $actorsname == null && $producersname!=null&&$typesname==null)
      {
          $type= type::all();
          $m =$this->searchByproducer($producersname);

          if(count($m) > 0)
              return view('welcome',compact('type'))->withDetails($m);
          else

              return view ('welcome',compact('type'))->withDetails([])->withMessage('No Details found. Try to search again !');


      }
      elseif($typesname=null)
	  $t = 0;
  }

}
