<x-app-layout>
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">

        <div class="card-header">
            <a class="btn btn-secondary" href="{{route('sanitary_regions.create')}}">Add a sanitary region</a>
        </div>

        <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Province</th>
                            <th colspan="2"></th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($sanitary_regions as $sanitary_region)
                                    <tr>
                                        <th>{{$sanitary_region->name}}</th>
                                        <th>{{$sanitary_region->latitude}}</th>
                                        <th>{{$sanitary_region->longitude}}</th>
                                        <th>{{$sanitary_region->province}}</th>
                                        <td width="10px">
                                            <a class="btn btn-primary btn-sm" href="{{route('sanitary_regions.edit',$sanitary_region)}}">Edit</a>
                                        </td>
                                        <td width="10px">
                                            <form action="{{route('sanitary_regions.destroy',$sanitary_region)}}" method="POST">
                                                @csrf
                                                @method('delete')

                                                <button type="submit" class="btn btn-danger btn-sm">Eliminate</button>
                                            </form>
                                        </td>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
</x-app-layout>