<x-app-layout>
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($sanitary_region,['route'=>['sanitary_regions.update',$sanitary_region], 'method' =>'put']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Input the name of the sanitary region']) !!}


                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('latitude', 'Latitude') !!}
                    {!! Form::text('latitude', null, ['class' => 'form-control', 'placeholder' => 'Input the latitude of the sanitary region']) !!}


                    @error('latitude')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('longitude', 'Longitude') !!}
                    {!! Form::text('longitude', null, ['class' => 'form-control', 'placeholder' => 'Input the longitude of the sanitary region']) !!}


                    @error('longitude')
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

            {!! Form::submit('Update Sanitary Region', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>

    </div>
</x-app-layout>