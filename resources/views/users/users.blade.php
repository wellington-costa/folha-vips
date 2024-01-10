@include('components.header')

<body>
@include('components.navbar')

<div class>
    <ul class>
       @foreach ($users as $user)
         <li class>{{$user->email}} - {{$user->role}}</li>
       @endforeach


    </ul>

</div>



</body>

@include('components.footer')
</html>
