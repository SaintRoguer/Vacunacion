<x-app-layout>
@if(session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif
<div class="card">
        <div class="card-body">
            {!! Form::open(['method' => 'POST', 'route' => 'sanitary_regions.store', 'class' => 'form-horizontal']) !!}
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
                
                <div class="btn-group pull-right">
                    {!! Form::submit('Accept', ['class' => 'p-2 pl-5 pr-5 bg-transparent border-2 border-blue-500 text-blue-500 text-lg rounded-lg hover:bg-blue-500 hover:text-gray-100 focus:border-4 focus:border-blue-300']) !!}
                </div>
            {!! Form::close() !!}
        </div>
</div>
</x-app-layout>
