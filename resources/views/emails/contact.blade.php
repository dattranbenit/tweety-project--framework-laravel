{{--<x-contact>--}}
{{--<?php--}}
{{--function getUserByEmail(Request $request){--}}
{{--    $email =$request->input('email');--}}
{{--    $user = User::where('email',$email)->first();--}}
{{--    $username=$user->username;--}}
{{--}--}}

{{--$user = \DB::all();--}}
{{--dd($user);--}}
{{--?>--}}
{{--</x-contact>--}}
<?php
$email = \Illuminate\Support\Facades\Request::input('email');

$user = DB::table('users')->where('email',$email)->get('username');
?>
@component('mail::message')
Helo Dat
@component('mail::button',['url'=>'http://127.0.0.1:8000/profiles/$user/edit'])
Move to web page
@endcomponent

@endcomponent

