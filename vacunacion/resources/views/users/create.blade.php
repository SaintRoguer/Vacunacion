<x-app-layout>
@if(session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif
<div class="card">
        <div class="card-body">
            {!! Form::open(['method' => 'POST', 'route' => 'users.store', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('username', 'Username') !!}
                    {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Input the user username']) !!}


                    @error('username')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Input the name of the user']) !!}


                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('dni', 'DNI') !!}
                    {!! Form::text('dni', null, ['class' => 'form-control', 'placeholder' => 'Input the dni of the user']) !!}


                    @error('dni')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', null, ['class' => 'form-control', 'placeholder' => 'Input the password of the user']) !!}


                    @error('password')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', 'Confirm Password') !!}
                    {!! Form::password('password_confirmation', null, ['class' => 'form-control', 'placeholder' => 'Confirm the password of the user']) !!}


                    @error('password_confirmation')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                 <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Input the email of the user']) !!}


                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('role', 'Role') !!}
                    {!! Form::select('role', $role,null,['class'=> 'form-control']) !!}

                    @error('role')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                
                <div class="form-group">
                    {!! Form::label('province', 'Province') !!}
                    {!! Form::select('province', $province,null,['class'=> 'form-control']) !!}

                    @error('province')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('city', 'City') !!}
                    {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Input the city of the user']) !!}


                    @error('city')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                
                
                <div class="btn-group pull-right">
                    {!! Form::submit('Create', ['class' => 'p-2 pl-5 pr-5 bg-transparent border-2 border-blue-500 text-blue-500 text-lg rounded-lg hover:bg-blue-500 hover:text-gray-100 focus:border-4 focus:border-blue-300']) !!}
                </div>
            {!! Form::close() !!}
        </div>
</div>
</x-app-layout>
