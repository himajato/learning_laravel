@extends('masterpage')

@section('content')
    <div>{{$user}}</div>
    @foreach ($user as $userr)
        <li>{{$userr->name}}</li>
        <li>{{$userr->id}}</li>
    @endforeach
    <?php 
        
        $hash = password_hash('nghials123', PASSWORD_DEFAULT);
        if(password_verify('nghials123', $hash)) {
            echo 'dung';
        } else echo 'sai';

        $test = '<<<<<>"""nguye$#*(*!@#n H58723478uy *#$)(!)(#Nghia123';
        echo filter_var($test, FILTER_VALIDATE_EMAIL);
    ?>
@stop 