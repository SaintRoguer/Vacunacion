<x-app-layout>
@if(session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif
<div class="card">
        <div class="card-body">
            {!! Form::open(['method' => 'POST', 'route' => 'vaccines.store', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Input the name of the vaccine']) !!}


                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('laboratory', 'Laboratory') !!}
                    {!! Form::select('laboratory', $laboratory,null,['class'=> 'form-control']) !!}

                    @error('laboratory')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('date_of_caducity', 'Date of caducity') !!}
                    {!! Form::text('date_of_caducity', null, ['class' => 'form-control', 'placeholder' => 'Input the date of caducity of the vaccine']) !!}


                    @error('date_of_caducity')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                 <div class="form-group">
                    {!! Form::label('number_of_doses', 'Number of doses') !!}
                    {!! Form::text('number_of_doses', null, ['class' => 'form-control', 'placeholder' => 'Input the brand of the product']) !!}


                    @error('number_of_doses')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('days_between_doses', 'Days between doses') !!}
                    {!! Form::text('days_between_doses', null, ['class' => 'form-control', 'placeholder' => 'Input the brand of the product']) !!}


                    @error('days_between_doses')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                
                <div class="btn-group pull-right">
                    {!! Form::submit('Accept', ['class' => 'p-2 pl-5 pr-5 bg-transparent border-2 border-blue-500 text-blue-500 text-lg rounded-lg hover:bg-blue-500 hover:text-gray-100 focus:border-4 focus:border-blue-300']) !!}
                </div>
            {!! Form::close() !!}
        </div>
</div>
</x-app-layout>
