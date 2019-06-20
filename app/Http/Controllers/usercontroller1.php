<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\comment ;
use Auth;
use App\user;
use App\movie_rate;
use App\movie;
use App\order;
use App\Movies_order;
 use App\Http\Resources\movie as movie1 ;
class usercontroller1 extends Controller
{
    //
    public function  __construct()
  {
     $this->middleware('auth');
  }
  // public function dashboard()
  // {
  //   $chart = new chart;
  //     return view('user.dashboard');
  // }
  public function comments()
  {

    return view('user.comments');
  }
  public function profile()
  {
    return view('user.profile');
  }
   public function editprofile(UserUpdate $request)
   {
     try {
   $user=Auth::user();
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


     $user->name = $request['Name'];
     $user->email = $request['Email'];
     if ($request['password'] != "")
     {


        if(!(Hash::check($request['password'],Auth::user()->password)))
        {
          // $password = Hash::make('secret');

          return redirect()->back()->with('error',"your current password dose not match with your provided.");

        }
        if (strcmp($request['password'],$request['new password'])==0 )
        {
          return redirect()->back()->with('error',"your new password connot be same as current password");
        }
        $validation = $request->validate([
          'password' => 'required',
          'new password' => 'requied|string|min:6|confirmed'

        ]);

        return redirect()->back()->with('error',"your current password dose not match with your provided.");

        $user->password = bcrypt($request['new password']);
        // $user->save();
        return redirect()->back()->with('success','password changed successfully');

     }
     $user->save();
     // response(['edited successfully'],204);
      return back();
    }
    public function deletecomment($commentid)
    {
      try {
        $comment = comment::where('id', $commentid)->where('User_id',Auth::id())->delete();

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
      // return response($comment,202);
         return back();
    }
    public function addcomment(Request $request,$movie_id)
    {
      try {
      $newcomment = new comment();

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

       $newcomment->description = $request->comment ;
        $newcomment->user_id = Auth::user()->id ;
        $newcomment->movie_id =$movie_id;
        $newcomment->save();
// return response($newcomment,201);
         return back();

    }
    public function addrate(Request $request,$movie_id)
    {
      try {
    $newrate = new movie_rate();

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

       $newrate->rate = $request->rate ;
        $newrate->user_id = Auth::user()->id ;
        $newrate->movie_id =$movie_id;
        $newrate->save();
        // return response($newrate,201);
         return back();

    }
public function download_movie($movie_id)
{



        $movie = movie::find($movie_id);

        $haveit = Movies_order::where('movie_id', $movie_id)->whereIn('order_id', order::select('id')->where('user_id',Auth::user()->id));





        $filename = $movie->name;
        $path = public_path("uploads/files/" . $filename);
        if ((is_null($haveit)))

    $haveitt = true;
        else

            $haveitt = false;


        return view('user.buymovie', compact('movie'), compact('haveitt'));


}

public function  downloadToBrowser($file)
{
    $file1 = 'Templates/template_2/images/'.$file;
    $name = basename($file1);
    return response()->download($file1, $name);
}
public function buymovie(Request $request,$movie_id)
{
  $this->validate($request,[
'card_owner'=>'required',
'card_number' =>'required',
'expireddate' =>'required',
'VCC' => 'required|regex:/^[0-9][0-9][0-9]$/'
]);

try {
    $card_owner = 'MHD';
    $card_number = '8520753192481562';
    $expireddate = '2020';
    $VCC = 834;
    if(($request->card_owner ===$card_owner) &&($request->card_number===$card_number)&&($expireddate===$request->expireddate)&&($VCC==$request->VCC))
    {
        $validcard = 'valid';
    }
    else
        $validcard = null;
//  $validcard = card::where(card_owner,$request->card_owner)->where('card_number',$request->card_number)->where('expireddate',$request->card_number)->where('VCC',$request->VCC);

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


if ($validcard != null)
{
  try {
    $order = new order();
    $movies_order = new movies_order();
$movie = movie::find($movie_id);
$movies_order->order_id = $order->id;
$movies_order->movie_id = $movie_id;

$order->user_id = Auth::user()->id;

$filename = $movie->thumbnail ;
$path=public_path("moviesPhotos/".$filename);
  } catch (QueryException $exception) {
    $errorMessage = $exception->getMessage();
    $errorCode = $exception->getCode();
    // Return the response to the client..
    $file = $exception->getFile();
    return response()->jdownload_movieson([
        'status' => 'failed',
        'message' => $errorMessage,
        'file' => $file,
        'code' => $errorCode,
    ], 500);
  }



    // return response($movie,200)->download($path);
  // return response();
    $this->downloadToBrowser($filename);
  return back();
     // return view('user.downloadlink');
}
else {
  return'payment not acceptable';
}
}

}
