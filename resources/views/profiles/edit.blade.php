@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ $user->path()}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

        <div class="mb-6">
            <label for="name" class="labelling">Name</label>
            <input class="inputing" type="text" id="name" name="name" value="{{$user->name}}" required>

            @error('name')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="user_name" class="labelling">Username</label>
            <input class="inputing" type="text" id="user_name" name="user_name" value="{{$user->user_name }}" required>

            @error('user_name')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="avatar" class="labelling">Avatar</label>
            <input class="inputing" type="file" id="avatar" name="avatar" required>

            @error('avatar')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="labelling">Email</label>
            <input class="inputing" type="email" id="email" name="email" value="{{$user->email }}" required>

            @error('email')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>


        <div class="mb-6">
            <label for="password" class="labelling">Password</label>
            <input class="inputing" type="password" id="password" name="password"  >

            @error('password')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>



        <div class="mb-6">
            <label for="password_confirmation" class="labelling">Confirm password</label>
            <input class="inputing" type="password" id="password_confirmation" name="password_confirmation" >

            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>



        <div class="">
            <button type="submit" class="button  rounded py-2 px-4">
                Submit
            </button>
        </div>


    </form>
@endsection


<style>
    .mb-6{
        margin-bottom: 1.5rem;
    }
    .labelling{
        display: block;
        margin-bottom: 0.5rem;
        text-transform: uppercase;
        font-weight: 700;
        font-size: 0.75rem;
        line-height: 1rem;
        color: rgba(107, 114, 128);
    }
    .inputing{
        border-width: 1px;
        border-color: rgba(156, 163, 175);
        padding: 0.5rem;
        width: 100%;
    }
    .button:hover {background-color: #3e8e41}
    .button{
        background-color: rgba(96, 165, 250);
        color:white;
    }

</style>
