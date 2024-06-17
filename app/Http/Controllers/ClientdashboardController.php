<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientdashboardController extends Controller
{
   
   
     
        public function clientdashboard()
        {
            // Ensure user is authenticated
            if (auth()->check()) {
                // Logic for displaying the client dashboard
                return view('user.clientdashboard');
            } else {
                // Redirect or handle unauthorized access
                return redirect('/login'); // Redirect to login if not authenticated
            }
        }
        
    }




