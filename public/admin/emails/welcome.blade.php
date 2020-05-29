<DOCTYPE html>
   <html lang="en-US">
     <head>
     <meta charset="utf-8">
     </head>
        <body>
            <h2>                                                                                 
                {{ $title }} <br>
            </h2>
            <h4> {{ $details }} <br></h4>
            <h3>Email Registered: </h3><p>{{$email}}</p>
            @if($role == 'super_admin')
                <h3>Role: </h3><p>You have been registered as a Super Admin</p>
            @elseif($role == 'admin')
                <h3>Role: </h3><p>You have been registered as an Admin</p>
            @elseif($role == 'project_lead')
                <h3>Role: </h3><p>You have been registered as a Project Lead</p>
            @else($role == 'sales_rep')
                <h3>Role: </h3><p>You have been registered as a Sales Representative</p>
            @endif
            <h3>Password: </h3><p>{{ $password }}</p>
        </body>
    </html>