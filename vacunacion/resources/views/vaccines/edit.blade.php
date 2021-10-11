<x-app-layout>
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($vaccine,['route'=>['vaccines.update',$vaccine], 'method' =>'put']) !!}

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
                    {!! Form::label('date_of_caducity', 'Date_of_caducity') !!}
                    {!! Form::text('date_of_caducity', null, ['class' => 'form-control', 'placeholder' => 'Input the vaccines date of caducity']) !!}


                    @error('date_of_caducity')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('number_of_doses', 'Number of doses') !!}
                    {!! Form::text('number_of_doses', null, ['class' => 'form-control', 'placeholder' => 'Input the vaccines number of doses']) !!}


                    @error('number_of_doses')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('days_between_doses', 'Days between doses') !!}
                    {!! Form::text('days_between_doses', null, ['class' => 'form-control', 'placeholder' => 'Input the vaccines number of days between doses']) !!}


                    @error('days_between_doses')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
            {!! Form::submit('Update vaccine', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>

    </div>
</x-app-layout>