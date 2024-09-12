<?php namespace VaahCms\Themes\ProductTheme\Http\Controllers\Frontend;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use VaahCms\Themes\ProductTheme\Models\ProductThemeUser;
use VaahCms\Themes\ProductTheme\Models\ProductThemeRegistration;


class AuthController extends Controller
{

    //----------------------------------------------------------
    public function login()
    {
      return redirect()->route('vh.frontend.producttheme.signin');
    }
    //----------------------------------------------------------
    public function signOutUser()
    {
      \Auth::logout();
    }
    //----------------------------------------------------------
    public function signout(Request $request)
    {
        $this->signOutUser();
        return redirect('/');
    }
    //----------------------------------------------------------
    public function signin()
    {
      $this->signOutUser();
      return view('producttheme::frontend.auth.signin');
    }
    //----------------------------------------------------------
    public function signinPost(Request $request)
    {

        if($request->type == 'password')
        {
            $response = ProductThemeUser::login($request);
        } else if($request->type == 'otp')
        {
            if(is_array($request->login_otp))
            {
                $inputs = [
                    'login_otp' => implode("", $request->login_otp)
                ];

                $request->merge($inputs);
            }

            $response = ProductThemeUser::loginViaOtp($request);
        }

        if((isset($response['status']) && $response['status'] == 'success')
          || (isset($response['success']) && $response['success'] == true))
        {
            $response['data']['redirect_url'] = url("/");
        }

        return response()->json($response);
    }
    //----------------------------------------------------------
    public function sendOtp(Request $request)
    {
        $response = ProductThemeUser::sendLoginOtp($request);

        return response()->json($response);
    }
    //----------------------------------------------------------
    public function sendResetCode(Request $request)
    {
        $response = ProductThemeUser::sendResetPasswordEmail($request);

        return response()->json($response);
    }
    //----------------------------------------------------------
    public function passwordResetAndSignin(Request $request)
    {
        $response = ProductThemeUser::passwordResetAndSignin($request);

        if($response['status'] == 'success')
        {
            $response['data']['redirect_url'] = url('/');
        }

        return response()->json($response);

    }
    //----------------------------------------------------------
    public function signup()
    {
        $this->signOutUser();
        return view('producttheme::frontend.auth.signup');
    }

    //---------------------------------------------------------
    public function signupPost(Request $request)
    {
        $response = ProductThemeRegistration::postCreate($request);
        return response()->json($response);
    }
    //---------------------------------------------------------
    public function activate(Request $request, $code)
    {
        $this->signOutUser();
        return view('producttheme::frontend.auth.activate')
            ->with([ 'activation_code'=> $code ]);
    }
    //----------------------------------------------------------
    public function activatePost(Request $request, $code)
    {
        $request->merge(['activation_code' => $code]);
        $response = ProductThemeRegistration::activateRegistration($request);
        return response()->json($response);
    }
    //----------------------------------------------------------
    //----------------------------------------------------------
    //----------------------------------------------------------
    //----------------------------------------------------------
    //----------------------------------------------------------
    //----------------------------------------------------------
    //----------------------------------------------------------
    //----------------------------------------------------------
    //----------------------------------------------------------


}
