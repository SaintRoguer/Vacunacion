<x-app-layout>
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">

        <div class="card-header">
            <a class="btn btn-secondary" href="{{route('vaccines.create')}}">Add a vaccine</a>
        </div>

        <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Laboratory</th>
                            <th>Date of caducity</th>
                            <th>Number of doses</th>
                            <th>Days between doses</th>
                            <th colspan="2"></th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($vaccines as $vaccine)
                                    <tr>
                                        <th>{{$vaccine->name}}</th>
                                        <th>{{$vaccine->laboratory}}</th>
                                        <th>{{$vaccine->date_of_caducity}}</th>
                                        <th>{{$vaccine->number_of_doses}}</th>
                                        <th>{{$vaccine->days_between_doses}}</th>
                                        <td width="10px">
                                            <a class="btn btn-primary btn-sm" href="{{route('vaccines.edit',$vaccine)}}">Edit</a>
                                        </td>
                                        <td width="10px">
                                            <form action="{{route('vaccines.destroy',$vaccine)}}" method="POST">
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