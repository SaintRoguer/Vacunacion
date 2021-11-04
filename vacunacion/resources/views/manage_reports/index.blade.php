<x-app-layout>
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    
    @foreach ($report_solicitations as $report_solicitation)
        Report "{{$report_solicitation->id}}" : 
        @if($report_solicitation->vaccinations_or_vaccines == 'vaccination')
            vaccinations done
        @else
            vaccines available
        @endif
         in the province of {{$report_solicitation->province}}, sanitary region : {{$report_solicitation->sanitary_region}}
            <hr style="height:1px;border:none;color:#333;background-color:#333;" />
                <form name="check-form-accept" id="check-form-accept" method="post" action="{{route('accept_report', $report_solicitation)}}">
                    {{ method_field('PUT')}}
                        @csrf
                        <input name="report_id" type="hidden" value="{{$report_solicitation->id}}" class="form-control">
                        <button type="submit" class="btn btn-primary">Accept</button>
                </form>
                <form name="check-form-reject" id="check-form-reject" method="post" action="{{route('reject_report', $report_solicitation)}}">
                    {{ method_field('PUT')}}
                        @csrf
                        <input name="report_id" type="hidden" value="{{$report_solicitation->id}}" class="form-control">
                        <button type="submit" class="btn btn-primary">Reject</button>
                </form>
    @endforeach


</x-app-layout>