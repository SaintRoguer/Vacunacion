<x-app-layout>
@if(session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif
<div class="card">
        <div class="card-body">
            {!! Form::open(['method' => 'POST', 'route' => 'vaccinations.store', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Input the name of the vaccinated']) !!}


                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('dni', 'DNI') !!}
                    {!! Form::text('dni', null, ['class' => 'form-control', 'placeholder' => 'Input the dni of the vaccinated']) !!}


                    @error('dni')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                 <div class="form-group">
                    {!! Form::label('date_of_application', 'Date of application') !!}
                    {!! Form::text('date_of_application', null, ['class' => 'form-control', 'placeholder' => 'Input the date of application']) !!}


                    @error('date_of_application')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                
                <div class="form-group">
                    {!! Form::label('vaccine', 'Vaccine') !!}
                    {!! Form::select('vaccine', $vaccine,null,['class'=> 'form-control']) !!}

                    @error('vaccine')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('number_of_doses', 'Number of doses') !!}
                    {!! Form::text('number_of_doses', null, ['class' => 'form-control', 'placeholder' => 'Input the number of doses']) !!}


                    @error('number_of_doses')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('risk_group', 'Risk group') !!}
                    {!! Form::text('risk_group', null, ['class' => 'form-control', 'placeholder' => 'Input the vaccinated risk group']) !!}


                    @error('risk_group')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('adverse_effects', 'Adverse effects') !!}
                    {!! Form::text('adverse_effects', null, ['class' => 'form-control', 'placeholder' => 'Input the vaccinated adverse effects']) !!}


                    @error('adverse_effects')
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
