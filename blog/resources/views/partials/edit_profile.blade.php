@extends('layouts.master')

@section('content')

    <div class="container">
        <form method="POST" action="{{ route('user.edit', $user->id) }}" class="edit-form">
            {{ csrf_field() }}
            {{ method_field('put') }}
            <div class="form-group row">
                <label for="first_name" class="col-md-4 col-form-label text-md-right">First Name</label>

                <div class="col-md-6">
                    <input id="first_name" value="{{ $user->first_name }}" type="text" class="form-control"
                           name="first_name" minlength="3" required autofocus>

                    @if ($errors->has('first_name'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="last_name" class="col-md-4 col-form-label text-md-right">Last Name</label>

                <div class="col-md-6">
                    <input id="last_name" value="{{ $user->last_name }}" type="text" class="form-control"
                           minlength="3" name="last_name" required>

                    @if ($errors->has('last_name'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                <div class="col-md-6">
                    <input id="phone_number" value="{{ $user->phone_number }}" type="tel" class="form-control"
                           name="phone_number" pattern="^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$">
                    @if ($errors->has('phone_number'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="about" class="col-md-4 col-form-label text-md-right">About me</label>

                <div class="col-md-6">
                    <textarea id="about" type="text" class="form-control" name="about">
                        {{ $user->about }}
                    </textarea>
                </div>
            </div>

            {{--            <div class="form-group row">--}}
            {{--                <label for="image" class="col-md-4 col-form-label text-md-right">Avatar</label>--}}

            {{--                <div class="col-md-6">--}}
            {{--                    <input id="image" value="{{ $user->image }}" type="text" class="form-control" name="image">--}}
            {{--                </div>--}}
            {{--            </div>--}}

            <div class="form-group row">
                <label for="image" class="col-md-4 col-form-label text-md-right">Avatar</label>

                <div class="col-md-6">
                    <input type="file" id="image" name="image" accept="image/*">
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Edit
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection
