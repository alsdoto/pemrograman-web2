<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    // Customize the name of the view where the password can be reset
    protected $resetView = 'auth.passwords.reset';

    // Customize the name of the email subject
    protected $subject = 'Your Password Reset Link';

    // Customize the name of the guard that manages authentication
    protected $guard = 'web';

    // Customize the broker that sends the password reset emails
    protected $broker = 'users';

    // Customize the name of the password reset table
    protected $table = 'password_resets';

    // Customize the name of the password reset link parameter in the URL
    protected $linkRequestView = 'emails.password';

    // Customize the name of the password reset email template
    protected $linkRequestEmail = 'auth.emails.password';

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    // You can override any other methods as needed

    // For example, you might want to customize the redirect path after a successful password reset
    protected function redirectTo()
    {
        return '/dashboard';
    }
}
