<x-app-layout>
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">

        <div class="card-header">
            <a class="btn btn-secondary" href="{{route('users.create')}}">Add a User</a>
        </div>
        <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Province</th>
                            <th>City</th>
                            <th>DNI</th>
                            <th colspan="1"></th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($users as $user)
                                    <tr>
                                        <th>{{$user->username}}</th>
                                        <th>{{$user->name}}</th>
                                        <th>{{$user->email}}</th>
                                        <th>{{$user->province}}</th>
                                        <th>{{$user->city}}</th>
                                        <th>{{$user->dni}}</th>
                                        <td width="10px">
                                            <form action="{{route('users.destroy',$user)}}" method="POST">
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