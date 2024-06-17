<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class ClientLoginController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showLoginForm()
    {
        return view('user.auth.login');
    }

    /**
     * Handle login form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    
     public function login(Request $request)
     {
         $credentials = $request->only('email', 'password');
 
         if (Auth::attempt($credentials)) {
             // Authentication passed...
             return redirect()->intended('/dashboard');
         }
 
         // Authentication failed...
         Log::info('Login attempt failed for email: ' . $request->email);
         return redirect()->back()->withInput()->withErrors(['email' => 'Invalid email or password']);
     }
 

    
    
    public function register(Request $request)
    {
        // Validate the request
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            // 'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|string|max:15',
            'adrs' => 'required|string|max:255',
        ]);
    
        // Create a new user
        $user = User::create([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Ensure the password is hashed
            'phone' => $request->phone,
            'address' => $request->adrs,
            'newsletter' => $request->has('rgstr') ? 1 : 0, // Register for the newsletter if checked
        ]);
    
        // Check if user was created successfully
        if (!$user) {
            return back()->withErrors(['message' => 'Failed to create user.']);
        }
    
        // Flash success message and redirect to client login
        return redirect()->route('client.login')->with('success', 'Registration successful. Please log in.');
    }
    
    
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function testPasswordHash()
    {
        // Replace this with an actual email from your database
        $email = 'parihararpiy@gmail.com';
        
        // Retrieve the user by email
        $user = User::where('email', $email)->first();

        if (!$user) {
            return "User not found!";
        }

        // Plain-text password you want to check
        $plainPassword = '2255';

        // Hashed password from the database
        $passwordFromDatabase = $user->password;

        if (Hash::check($plainPassword, $passwordFromDatabase)) {
            return "Password matches!";
        } else {
            return "Password does not match!";
        }
    }

}
