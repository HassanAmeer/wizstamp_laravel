<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\wizUsersModel;
// use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class wizUsersApiController extends Controller
{
    public function getWizUsersApiF(){
        $wizusers = wizUsersModel::orderBy('id', 'desc')->get();
        if($wizusers->count() > 0){
            return response()->json([
                "status" => true,
                "data" => $wizusers,
            ], 200);
        }else{
            return response()->json([
                "status" => false,
                "Message" => "Users Records is Empty",
            ], 404);
        }
    }

    /////////////// loginf
    public function loginWizUsersApiF(Request $request){
       $email = $request->email;
       $validator = Validator::make($request->all(), [
        'email' => 'required',
        'password' => 'required',
       ]);
        if($validator->fails()){
            return response()->json([
                "status" => false,
                "required fields for Login" => [
                'email','password'
                ],
                "Message" => "2 Field Required",
            ], 404);
        }else{
            $existingUserEmail = wizUsersModel::where('email', $request->email)->first();
            $existingUserPass = wizUsersModel::where('password', $request->password)->first();
            if ($existingUserEmail && $existingUserPass) {
                return response()->json([
                    "status" => true,
                    "Message" => "You Are Login",
                ], 200);
            } else {
                return response()->json([
                    "status" => false,
                    "Message" => "Please Enter Correct Data",
                ], 404);
            }
        }
    }



    public function ResetPasswordF (Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required',
       ]);
      if($validator->fails()){
            return response()->json([
                "status" => false,
                "required field For Reset Password" => [
                   'email',
                ],
                "Message" => "Required Email Field",
            ], 404);
      }else{
          $existingUserEmail = wizUsersModel::where('email', $request->email)->first();
          if ($existingUserEmail) {
              
                // $otp = random_int(0, 4);
                // $mailto = $request->email;
                // $subject = $_SERVER['HTTP_HOST'];
                // $message = 'OTP:'.$otp;
                // $headers = "From: webseowiz9@gmail.com";
                // $result1 = mail($mailto,$subject, $message, $headers);
               
                $otp = app(Otp::class)->generate($existingUser);

                Mail::raw("Your OTP for password reset: $otp", function ($message) use ($existingUser) {
                    $message->to($existingUser->email)->subject('Your OTP for Password Reset');
                });

            return response()->json([
                "status" => true,
                "Message" => "OTP Sent to $request->email",
            ], 404);
        } else {
            return response()->json([
                "status" => false,
                "Message" => "Please Enter Correct Email",
            ], 404);
        }
      }
    }
    ///////// signup wiz users
    public function SignUpWizUsersApiF(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
            // 'brandimg' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
       ]);
      if($validator->fails()){
       // return redirect()->back()->withErrors($validator)->withInput();
            return response()->json([
                "status" => false,
                "required fields For Signup" => [
                   'name',
                   'email',
                   'phone',
                   'password',
                ],
                "Message" => "Required All Fields",
            ], 404);
      }else{
        $existingUserEmail = wizUsersModel::where('email', $request->email)->first();
        $existingUserPhone = wizUsersModel::where('phone', $request->phone)->first();
        if ($existingUserEmail) {
            return response()->json([
                "status" => false,
                "Message" => "Email Already Exist",
            ], 404);
        } else if($existingUserPhone){
            return response()->json([
                "status" => false,
                "Message" => "Phone Number Already Exist",
            ], 404);
        } else {
       $check = wizUsersModel::create([
           'name' => $request->name,
           'email' => $request->email,
           'phone' => $request->phone,
           'password' => $request->password,
       ]);
       if($check){
        return response()->json([
            "status" => true,
            "Message" => "Account is Created",
        ], 200);
           }else{
            return response()->json([
                "status" => false,
                "Message" => "SomeThing Went Wrong",
            ], 404);
           }
               }
        } 
    }
    ///////// update profile
    public function updateProfileApiF(Request $request){
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            // 'name' => 'required',
            // 'phone' => 'required',
            // 'email' => 'required',
            // 'password' => 'required',
            // 'brandimg' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
       ]);
      if($validator->fails()){
       // return redirect()->back()->withErrors($validator)->withInput();
            return response()->json([
                "status" => false,
                "required fields For Update Profile" => [
                   'user_id',
                   'name',
                   'email',
                   'phone',
                // 'password',
                ],
                "Message" => "Required All Fields",
            ], 404);
      }else{

       $check = wizUsersModel::fiind($request->user_id);

       if($check){
        $check->update([
            'name' => $request->name,
           'email' => $request->email,
           'phone' => $request->phone,
           'password' => $request->password,
        ]);
       }
       if($check){
        return response()->json([
            "status" => true,
            "Message" => "Profile Is Updated",
        ], 200);
           }else{
            return response()->json([
                "status" => false,
                "Message" => "Profile can not be updated",
            ], 404);
           }
               }
        } 
    }
    



///// app password for smtp by 2 step verification
// pfvc dkgp krec ooot

/////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////
/////////////////////////// method 1
/////////////////////////// for email method start by command and package
// Certainly! To use the pragmarx/otp package and configure your .env file with SMTP settings, follow these steps:

// Step 1: Install the OTP Package
// Run the following command in your terminal to install the pragmarx/otp package:

// bash
// Copy code
// composer require pragmarx/otp
// Step 2: Configure SMTP in .env
// Update your .env file with your SMTP settings. Make sure to replace the placeholder values with your actual SMTP configuration:

// env
// Copy code
// MAIL_MAILER=smtp
// MAIL_HOST=your-smtp-host
// MAIL_PORT=your-smtp-port
// MAIL_USERNAME=your-smtp-username
// MAIL_PASSWORD=your-smtp-password
// MAIL_ENCRYPTION=tls
// MAIL_FROM_ADDRESS=your-email@example.com
// MAIL_FROM_NAME="${APP_NAME}"
// Step 3: Update Your Controller
// Now, you can use the following updated code in your controller:


// MAIL_MAILER=smtp
// MAIL_HOST=smtp.gmail.com
// MAIL_PORT=465  # Use 465 for SSL, or 587 for TLS
// MAIL_USERNAME=yourname@gmail.com  # Your Gmail email address
// MAIL_PASSWORD=your-generated-app-password
// MAIL_ENCRYPTION=ssl  # Use 'ssl' for port 465, 'tls' for port 587
// MAIL_FROM_ADDRESS=yourname@gmail.com
// MAIL_FROM_NAME="${APP_NAME}"


// php
// Copy code
// use Illuminate\Support\Facades\Mail;
// use PragmaRX\Otp\Otp;

// public function ResetPasswordF(Request $request)
// {
//     $validator = Validator::make($request->all(), [
//         'email' => 'required|email',
//     ]);

//     if ($validator->fails()) {
//         return response()->json([
//             "status" => false,
//             "required field For Reset Password" => ['email'],
//             "Message" => "Required Email Field",
//         ], 404);
//     }

//     $existingUser = wizUsersModel::where('email', $request->email)->first();

//     if ($existingUser) {
//         // Generate and store OTP
//         $otp = app(Otp::class)->generate($existingUser);
//         $existingUser->otp = $otp;
//         $existingUser->save();

//         // Send OTP to the user's email
//         $this->sendOtpEmail($existingUser->email, $otp);

//         return response()->json([
//             "status" => true,
//             "Message" => "OTP Sent to $request->email",
//         ], 200);
//     } else {
//         return response()->json([
//             "status" => false,
//             "Message" => "Please Enter Correct Email",
//         ], 404);
//     }
// }

// private function sendOtpEmail($email, $otp)
// {
//     // You can use Laravel's Mail facade or any other library to send the email
//     // For simplicity, I'll use the built-in Mail facade
//     Mail::raw("Your OTP for password reset: $otp", function ($message) use ($email) {
//         $message->to($email)->subject('Your OTP for Password Reset');
//     });
// }
// Make sure you have a mail driver set to 'smtp' in your config/mail.php file:

// php
// Copy code
// 'driver' => env('MAIL_MAILER', 'smtp'),
// Step 4: Test
// Test the password reset functionality to ensure that the OTP is sent to the user's email.

// This setup assumes you have a working SMTP server with the provided credentials. Adjust the .env file with the correct SMTP configuration for your mail server.
/////////////////////////// for email method end

/////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////
/////////////////////////// method 2
/////////////////////////// for email method without package start
// use Illuminate\Support\Facades\Mail;
// public function ResetPasswordF(Request $request)
// {
//     $validator = Validator::make($request->all(), [
//         'email' => 'required|email',
//     ]);

//     if ($validator->fails()) {
//         return response()->json([
//             "status" => false,
//             "required field For Reset Password" => ['email'],
//             "Message" => "Required Email Field",
//         ], 404);
//     }

//     $existingUser = wizUsersModel::where('email', $request->email)->first();

//     if ($existingUser) {
//         $otp = app(Otp::class)->generate($existingUser);

        // Send OTP to the user's email using Laravel Mail facade
        // Mail::raw("Your OTP for password reset: $otp", function ($message) use ($existingUser) {
        //     $message->to($existingUser->email)->subject('Your OTP for Password Reset');
        // });

//         return response()->json([
//             "status" => true,
//             "Message" => "OTP Sent to $request->email",
//         ], 200);
//     } else {
//         return response()->json([
//             "status" => false,
//             "Message" => "Please Enter Correct Email",
//         ], 404);
//     }
// }

/////////////////////////// for email method without package end
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
////// method 3 by php 
// <?php

// // Replace these variables with your actual SMTP settings
// $smtpHost = 'your-smtp-host';
// $smtpPort = 587;
// $smtpEncryption = 'tls';
// $smtpUsername = 'your-smtp-username';
// $smtpPassword = 'your-smtp-password';

// // Create the transport
// $transport = new Swift_SmtpTransport($smtpHost, $smtpPort, $smtpEncryption);
// $transport->setUsername($smtpUsername);
// $transport->setPassword($smtpPassword);

// // Create the mailer using your created transport
// $mailer = new Swift_Mailer($transport);

// // Create a message
// $message = (new Swift_Message('Test Email'))
//     ->setFrom(['your-email@example.com' => 'Your Name'])
//     ->setTo(['recipient@example.com'])
//     ->setBody('This is a test email sent using Swift Mailer and SMTP.');

// // Send the message
// $result = $mailer->send($message);

// // Output the result
// echo "Email sent with result: $result";


