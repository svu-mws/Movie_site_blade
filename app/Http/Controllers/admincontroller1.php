<?php

namespace App\Http\Controllers;


use App\Http\Requests\CreatMovie;
use Illuminate\Http\Request;
use \App\movie;
use  App\comment ;
use \App\user;
use \App\producer;
use \App\actor;
use \App\type;
use \App\Movies_order;
use Auth;
use App\Http\Resources\movie as movie1 ;

class admincontroller1 extends Controller
{
   //

   //
   Function dashboard()
   {
       // return (new movie1(['show admin.Dashboard']))
       //     ->response()
       //     ->setStatusCode(202);
     return view('admin.Dashboard');
   }

   Function comments()
         {
           try {
       $comments = Comment::all();
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

// return response($comments,202);
            return View('admin.comments',compact('comments'));
             // return  movie1::collection($comments);
         }
         Function movies()
         {
           try {
       $movies = Movie::all();
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
     // return response($movies,202);


            return View('admin.movies',compact('movies'));
             // return  movie1::collection($movies);
         }
         Function users()
         {
           try {
       $users=User::all();
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
// return response($users,202);
            return View('admin.users',compact('users'));
             // return  movie1::collection($users);
         }
         public function uploadnewmovie()
 {
     $producers=producer::all();
    return view('admin.uploadnewmovie',compact('producers'));
     // return  (new movie1(['show upload movie page']))
     //       ->response()
           // ->setStatusCode(200);
 }
 public function uploadnewmovie1(Request $request)
{

 $this->validate($request,[
'title'=>'required|string',
'description' =>'required|string',
'thumbnail' =>'required',
'price' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/' ,
'prodicer_id' => 'required|regex:/^[0-9]+$/'
]);
try {
 $movie = new movie();
 $movie->name = $request['title'];
 $movie->description = $request['description'];
 $movie->thumbnail =$request['thumbnail'];
   $movie->price = $request['price'];

   $movie->prodicer_id = $request['prodicer_id'];
     $movie->save();
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

 //$thumbnal = $request->file('thumbnail');
 //$filename = $thumbnal->GetClientOriginalName();
//$thumbnal->move( 'movies_images',$filename);

//$movie->thumbnail ='product_images/'.$filename;
return Back()->with('success','movie has been uploaded');
// return response($movie,202)
}
public function deletemovie($id)
   {
     try {
   $movie = Movie::where('id', $id)->first()->delete();
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
// return response($movie,202);
        return Back()->wiht('success','movie has been deleted');
         // return (new movie1(['movie is successfully deleted']))
         //        ->response()
         //        ->setStatusCode(202);
   }
   public function editmovie($id)
     {
       try {
       $movie = Movie::where('id', $id)->first();
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
// return response($movie,202);
       // movie1::withoutWrapping();
       // return (new movie1($movie))
       // ->response()
       // ->setStatusCode(200);
        return view('admin.editMovie',compact('movie'));
     }
     public function editmovie1(CreatMovie $request,$id)
     {
       try {
         $movie = Movie::where('id', $id)->first();
         $movie->name = $request['title'];
         $movie->description = $request['description'];
         $movie->thumbnail = $request['thumbnail'];

           $movie->save();
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



// return response($movie,202);
         // movie1::withoutWrapping();
         // return (new movie1($movie))
         // ->response()
         // ->setStatusCode(202);
         return Back()->wiht('success','movie has been edited');
     }


     Function actors()
     {
       try {
       $actors = Actor::all();
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

        return View('admin.actors',compact('actors'));
       // return  response($actors,202);
     }
     public function addnewactors()
     {

       // movie1::withoutWrapping();
       // return (new movie1(['show add actor page']))
       // ->response()
       //   ->setStatusCode(204);
       return View('admin.addnewactor');
     }
     public function addnewactors1(Request $request)
   {

     $this->validate($request,[
   'name'=>'required|string',
   'description' =>'required|string',
   'thumbnail' =>'required',

   ]);
   try {
     $actor = new actor();
     $actor->name = $request['name'];
     $actor->description = $request['description'];
     //$thumbnal = $request->file('thumbnail');
     //$filename = $thumbnal->GetClientOriginalName();
   //$thumbnal->move( 'movies_images',$filename);

   //$movie->thumbnail ='product_images/'.$filename;
   $actor->thumbnail =$request['thumbnail'];



       $actor->save();
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

   // return response($actor,202);
        return back()->with('success' , 'new actor has been added');
   }
   public function deleteactor($id)
       {
         try {
           $actor = Actor::where('id', $id)->first()->delete();

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
         // return response($actor,202);
              return back()->with('success', 'actor has been deleted');
       }
       public function editactor($id)
         {
           try {
       $actor = Actor::where('id', $id)->first();
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
// return response($actor,202);
           // movie1::withoutWrapping();
           //
           // return (new movie1($actor))
           // ->response()
           // ->setStatusCode(200);
           return view('admin.editactor',compact('actor'));
         }
         public function editactor1(Request $request,$id)
         {



             $this->validate($request,[
           'name'=>'required|string',
           'description' =>'required|string',
           'thumbnail' =>'required',

           ]);
           try {
             $actor = actor::find($id);
             $actor->name = $request['name'];
             $actor->description = $request['description'];
             //$thumbnal = $request->file('thumbnail');
             //$filename = $thumbnal->GetClientOriginalName();
           //$thumbnal->move( 'movies_images',$filename);

           //$movie->thumbnail ='product_images/'.$filename;
           $actor->thumbnail =$request['thumbnail'];



               $actor->save();
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

           // return response($actor,202);
                return back()->with('success' , 'new actor has been updated successfully');

// return response($actor,202);
             // movie1::withoutWrapping();
             //
             // return (new movie1($actor))
             // ->response()
             // ->setStatusCode(202);
             // return back()->with('success' , 'Movie is successfully updated');
         }


         Function producers()
         {
           try {
           $producers = producer::all();


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
//return response($producers,202);
           // return movie1::collection($producers);
            return View('admin.producers',compact('producers'));
         }
         public function addnewproducer()
       {

           return view('admin.addproducer');
       }
         public function addnewproducer1(Request $request)
       {
         $this->validate($request,[
       'name'=>'required|string',

       'thumbnail' =>'required',

       ]);
       try {
         $producer = new producer();
         $producer->name = $request['name'];

         //$thumbnal = $request->file('thumbnail');
         //$filename = $thumbnal->GetClientOriginalName();
       //$thumbnal->move( 'movies_images',$filename);

       //$movie->thumbnail ='product_images/'.$filename;
       $producer->thumbnail =$request['thumbnail'];



           $producer->save();
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
// return response($producer,202);
           // movie1::withoutWrapping();
           //
           // return (new movie1($producer))
           // ->response()
           // ->setStatusCode(201);
           return back()->with('success' , 'movie is successfully created');
       }
       public function deleteproducer($id)
           {
             try {
             $producer = Producer::where('id', $id)->first()->delete();
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
             // return response($producer,202);
               // return (new movie1(['producer has been deleted successfully']))
               // ->response()
               // ->setStatusCode(202);
                  return back()->with('success', 'producer has been deleted successfully');
           }
           public function editproducer($id)
             {
               try {
               $producer = producer::where('id', $id)->first();
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
             // return response($producer,202);
               // movie1::withoutWrapping();
               //
               // return (new movie1($producer))
               // ->response()
               // ->setStatusCode(202);
                return view('admin.editproducer',compact('producer'));
             }
             public function editproducer1(Request $request,$id)
             {
               try {
                 $producer = producer::where('id', $id)->first();
                 $producer->name = $request['name'];

                 $producer->thumbnail = $request['thumbnail'];

                   $producer->save();
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
               // return response($producer,202);
                 // movie1::withoutWrapping();
                 // return (new movie1($actor))
                 // ->response()
                 // ->setStatusCode(202);
                  return back()->with('success' , 'producer has been updated successfully');
             }

             Function moviestypes()
             {
               try {
               $moviestypes = Type::all();
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
// return response(,$moviestypes,202);
               // return  movie1::collection($moviestypes);
                return View('admin.moviestypes',compact('moviestypes'));
             }
             public function addnewtype()
             {
               // return (new movie1(['show add type page']))
               // ->response()
               // ->setStatusCode(200);
               return view('admin.addnewmoviestype');

             }
             public function addnewtype1 (Request $request)
           {
             $this->validate($request,[
           'name'=>'required|string',



           ]);

           try {

                 $moviestypes = new Type();
                 $moviestypes->name = $request['name'];

                 //$thumbnal = $request->file('thumbnail');
                 //$filename = $thumbnal->GetClientOriginalName();
               //$thumbnal->move( 'movies_images',$filename);

               //$movie->thumbnail ='product_images/'.$filename;




                   $moviestypes->save();

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
// return response($moviestypes,202);
               // movie1::withoutWrapping();
               //
               // return (new movie1($moviestypes))
               // ->response()
               // ->setStatusCode(201);
                return back()->with('success' , 'movie type has been added successfully');
           }
           public function deletemoviestype($id)
               {
                 try {

                       $moviestypes = Type::where('id', $id)->first()->delete();
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

                   // return response($moviestypes,202);
                   // movie1::withoutWrapping();
                   //   return (new movie1(['']))
                   //   ->response()
                   //   ->setStatusCode(202);
                   return back()->with('success','movie has been deleted');
               }
               public function editmoviestype($id)
                 {
                   try {
                           $moviestypes = Type::where('id', $id)->first();
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

                   // return response($moviestypes,202);
                   // movie1::withoutWrapping();
                   // return (new movie1($moviestypes))
                   // ->response()
                   // ->setStatusCode(202);
                    return view('admin.editmoviestype',compact('moviestypes'));
                 }
                 public function editmoviestype1(Request $request,$id)
                 {
                   try {
                     $moviestypes = Type::where('id', $id)->first();
                     $moviestypes->name = $request['name'];
                       $moviestypes->save();
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

// return response($moviestypes,202);
                     // movie1::withoutWrapping();
                     // return (new movie1($moviestypes))
                     // ->setStatusCode(202);
                     // ->response()
                      return back()->with('success' , 'Movietype is successfully updated');
                 }

public function reports()
{
 // return new movie1('[show report page]');
  return view('admin.report') ;
}
public function reports1(Request $request)
{
 $this->validate($request,[
'start_date'=>'required|date',

'end_date' =>'required|date'


]);
try {
 $startdate = $request['start_date'];
   $enddate = $request['end_date'];

   $Downloaded_movies = Movies_order::whereBetween('created_at', [$startdate, $enddate])->get();

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

// return response($Downloaded_movies,202);
 return view('admin.generatedreport',compact('Downloaded_movies'));

}
}
