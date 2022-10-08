@extends('layouts.auth')

@section('page-title', 'Registration')

@section('content')

<section class="form">
    <div class="container">
        <div class="row">
            <div class="col-md-12 center-register box-register">
                <form action="{{ route('register') }}" method="post">
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                @endif
                @csrf

                <h1 class="fw-bold mb-5 text-center">Registration</h1>

                <div class="row">
                    <div class="col-md-3 my-2">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{old('last_name')}}">
                        <span class="text-danger">@error('last_name') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-4 my-2">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" placeholder="First Name" name="first_name" value="{{old('first_name')}}">
                        <span class="text-danger">@error('first_name') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-3 my-2">
                        <label class="form-label">Middle Name</label>
                        <input type="text" class="form-control" placeholder="Middle Name" name="middle_name" value="{{old('middle_name')}}">
                        <span class="text-danger">@error('middle_name') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-2 my-2">
                        <label class="form-label">Suffix</label>
                        <input type="text" class="form-control" placeholder="Suffix" name="suffix" value="{{old('suffix')}}">
                        <span class="text-danger">@error('suffix') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-4 my-2">
                        <label class="form-label">Course</label>
                        <select class="form-select" name="course_ID">
                            @foreach ($courses as $course)
                                <option value="{{ $course->course_ID }}">{{ $course->course_ID }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4 my-2">
                    <label class="form-label">Batch</label>
                        <select class="form-select" name="batch">
                            @for ($i = date('Y'); $i >= 1996; $i--)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-md-4 my-2">
                        <label class="form-label">Student Number</label>
                        <input type="text" class="form-control" placeholder="Student Number" name="stud_number" value="{{old('stud_number')}}">
                        <span class="text-danger">@error('stud_number') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-3 my-2">
                        <label class="form-label">Gender:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="Male">
                            <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="Female">
                            <label class="form-check-label">Female</label>
                        </div>
                    </div>

                    <div class="col-md-3 my-2">
                        <label class="form-label">Birthday</label>
                        <input type="date" class="form-control" placeholder="Last Name" name="birthday" value="{{old('birthday')}}">
                        <span class="text-danger">@error('birthday') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-3 my-2">
                        <label class="form-label">Age</label>
                        <input type="text" class="form-control" placeholder="Age" name="age" value="{{old('age')}}">
                        <span class="text-danger">@error('age') {{$message}} @enderror</span>
                    </div>


                    <div class="col-md-3 my-2">
                        <label class="form-label">Religion</label>
                        <input type="text" class="form-control" placeholder="Religion" name="religion" value="{{old('religion')}}">
                        <span class="text-danger">@error('religion') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-6 my-2">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-6 my-2">
                        <label class="form-label">Mobile Number</label>
                        <input type="text" class="form-control" placeholder="Mobile Number" name="number" value="{{old('number')}}">
                        <span class="text-danger">@error('number') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-6 my-2">
                        <label class="form-label">No. of Semesters with PUP</label>
                        <select class="form-select" name="semesters">
                            @for ($i = 1; $i <= 20; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="col-md-6 my-2">
                        <label class="form-label">Civil Status</label>
                        <select class="form-select" name="civil_status">
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Widowed">Widowed</option>
                        </select>
                    </div>

                    <div class="col-md-12 my-2">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" placeholder="Address" name="city_address" value="{{old('city_address')}}">
                        <span class="text-danger">@error('city_address') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-4 my-2">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" placeholder="Username" name="username" value="{{old('username')}}">
                        <span class="text-danger">@error('username') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-4 my-2">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="********" name="password">
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-4 my-2">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" placeholder="********" name="password_confirmation">
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>

                    <input type="hidden" name="user_role" value="Alumni">

                    <div class="col-md-12 d-flex justify-content-center mt-4 mb-2">
                        <button type="submit" class="btn btn-primary w-50">Register</button>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center mt-3">
                        <p>Already have an account? <a href="{{ route('login') }}">Login here!</a></p>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

