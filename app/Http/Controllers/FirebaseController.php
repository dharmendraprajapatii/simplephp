<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/locsaleapplication-firebase-adminsdk-6hjf0-01d372832b.json');
        // $firebase = (new Factory)
        // ->withServiceAccount($serviceAccount)
        // ->withDatabaseUri('https://locsaleapplication-default-rtdb.firebaseio.com')
        // ->create();

        // $database = $firebase->getDatabase();

        // $newPost = $database
        // ->getReference('blog/posts')
        // ->push([
        // 'title' => 'Laravel FireBase Tutorial' ,
        // 'category' => 'Laravel'
        // ]);
        // echo '<pre>';
        // print_r($newPost->getvalue());
        
        return view('admin.customers');
            }
        // function show(){
        //     return view('admin.business');
        // }
}