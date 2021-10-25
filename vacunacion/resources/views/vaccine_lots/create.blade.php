<x-app-layout>

<div class="card">
        <div class="card-body">
            {!! Form::open(['method' => 'POST', 'route' => 'vaccine_lots.store', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('lot_number', 'Lot number') !!}
                    {!! Form::text('lot_number', null, ['class' => 'form-control', 'placeholder' => 'Input the lot number']) !!}


                    @error('lot_number')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('vaccine', 'Vaccine') !!}
                    {!! Form::select('vaccine', $vaccines,null,['class'=> 'form-control']) !!}

                    @error('vaccine')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>


                <div class="form-group">
                    {!! Form::label('ammount_of_vaccines', 'Ammount of Vaccines') !!}
                    {!! Form::text('ammount_of_vaccines', null, ['class' => 'form-control', 'placeholder' => 'Input the ammount of vaccines']) !!}


                    @error('ammount_of_vaccines')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                 <div class="form-group">
                    {!! Form::label('date_of_caducity', 'Date of caducity') !!}
                    {!! Form::text('date_of_caducity', null, ['class' => 'form-control', 'placeholder' => 'Input the date of caducity']) !!}


                    @error('date_of_caducity')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('sanitary_region', 'Sanitary Region') !!}
                    {!! Form::select('sanitary_region', $sanitary_region,null,['class'=> 'form-control']) !!}

                    @error('sanitary_region')
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
