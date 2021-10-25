<x-app-layout>
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">

        <div class="card-header">
            <a class="btn btn-secondary" href="{{route('vaccine_lots.create')}}">Add a Vaccine lot</a>
        </div>

        <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Lot Number</th>
                            <th>Vaccine</th>
                            <th>Ammount of Vaccines</th>
                            <th>Date of caducity</th>
                            <th>Sanitary Region</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach($lots as $lot)
                                    <tr>
                                        <th>{{$lot->lot_number}}</th>
                                        <th>{{$lot->vaccine}}</th>
                                        <th>{{$lot->ammount_of_vaccines}}</th>
                                        <th>{{$lot->date_of_caducity}}</th>
                                        <th>{{$lot->sanitary_region}}</th>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
</x-app-layout>