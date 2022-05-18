@include('baza')
<body>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@if(!session('status'))
<form method="POST" action="{{route('user_create')}}">
    @csrf
    <div class="col-md-2">
        <div class="form-group">
            <label for="title">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" class="form-control" required="required" data-error="Name is required.">
        </div>
    </div>
    @error('name')
    <p style="color:red;" class="text-sm text-red-600">{{ $message }}</p>
    @enderror


    <div class="col-md-2">
        <div class="form-group">
            <label for="title">Surname</label>
            <input id="surname" type="text" name="surname" value="{{ old('surname') }}" class="form-control" required="required" data-error="Surname is required.">
        </div>
    </div>
    @error('surname')
    <p style="color:red;" class="text-sm text-red-600">{{ $message }}</p>
    @enderror


    <div class="col-md-2">
        <div class="form-group">
            <label for="title">Email</label>
            <input id="email" type="text" name="email" class="form-control" value="{{ old('email') }}" required="required" data-error="Email is required.">
        </div>
    </div>
    @error('email')
    <p style="color:red;" class="text-sm text-red-600">{{ $message }}</p>
    @enderror


    <div class="col-md-2">
        <div class="form-group">
            <label for="title">Password</label>
            <input id="password" type="password" name="password" class="form-control" required="required" data-error="Password is required.">
        </div>
    </div>
    @error('password')
    <p style="color:red;" class="text-sm text-red-600">{{ $message }}</p>
    @enderror


    <div class="col-md-2">
        <div class="form-group">
            <label for="title">Repeat password</label>
            <input id="password_confirm" type="password" name="password_confirm" class="form-control" required="required" data-error="Password confirm is required.">
        </div>
    </div>
    @error('password_confirm')
    <p style="color:red;" class="text-sm text-red-600">{{ $message }}</p>
    @enderror
    <input type="submit" class="btn btn-success btn-send" value="Send message">

</form>
    @endif
<h1 style="color:black;"><a href="{{route('main')}}" type="button">Основная страница</a></h1>

</body>

