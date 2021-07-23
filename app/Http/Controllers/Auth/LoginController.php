<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite; #--- se agrega esta referencia
class LoginController extends Controller
{
use AuthenticatesUsers;
#--- se agrega esta método
public function index()
{
return view('auth/login');
}
/**
* Redirecciona al usuario a la página de Facebook para autenticarse
*
* @return \Illuminate\Http\Response
*/
public function redirectToFacebookProvider()
{
//return Socialite::driver('facebook')->redirect();
return redirect('/casilla');
}
/**
* Obtiene la información de Facebook
*
* @return \Illuminate\Http\RedirectResponse
*/
public function handleProviderFacebookCallback()
{
$auth_user = Socialite::driver('facebook')->user(); // Fetch authenticated user
dd($auth_user);
}
}//--- End class