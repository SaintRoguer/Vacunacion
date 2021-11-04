<x-app-layout>
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <form name="solicit-report-form" id="solicit-report-form" method="post" action="{{route('report_solicitations.store')}}">
                @csrf
                    
                    <span>Province:</span>
                    <select style="width: 200px" class="provinceSelect form-control" id="province_id" name="province">
                        
                        <option value="0" disabled="true" selected="true">-Select Province-</option>
                        @foreach($provinces as $province)
                            <option value="{{$province}}">{{$province}}</option>
                        @endforeach

                    </select>
                    @error('province_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror


                    <span>Sanitary Region:</span>

                    <select style="width: 200px" class="sanitaryRegionName form-control" id="sanitary_region" name="sanitary_region">

                        <option value="0" disabled="true" selected="true">Sanitary Region</option>
                    </select>
                    @error('sanitary_region')
                        <span class="text-danger">{{$message}}</span>
                    @enderror



                    <span>Type of report</span>
                    <select style="width: 200px" class="vaccinated-or-vaccine form-control" id="vaccine-or-vaccinated_id" name="vaccinations_or_vaccines">
                        
                        <option value="0" disabled="true" selected="true">-Vaccination or Vaccine-</option>
                        @foreach($vaccinations_or_vaccines as $vaccination_or_vaccine)
                            <option value="{{$vaccination_or_vaccine}}">{{$vaccination_or_vaccine}}</option>
                        @endforeach

                    </select>

                    @error('vaccine-or-vaccinated_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <button type="submit" class="btn btn-primary">Solicit</button>
            </form>

        </div>
    </div>
    <div class="card">
        <div class="card-body">

        </div>
    </div>

    <hr style="height:1px;border:none;color:#333;background-color:#333;" />
    @foreach ($report_solicitations as $report_solicitation)
    <p>Report: {{$report_solicitation->id}} </p>
    <p>Province: {{$report_solicitation->province}} </p>
    <p>Region: {{$report_solicitation->sanitary_region}}</p>

        @if($report_solicitation->vaccinations_or_vaccines == 'vaccination')
      
        <p>Vaccinated users: N/A</p>
        @else
        <?php
            $vaccine_lots = App\Models\Vaccine_lot::where('sanitary_region',$report_solicitation->sanitary_region)->sum('ammount_of_vaccines');
        ?>
            </p>Quantity of vaccines available: {{$vaccine_lots}}<p>
        @endif
        <hr style="height:1px;border:none;color:#333;background-color:#333;" />
    @endforeach
    
</x-app-layout>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
	    $(document).ready(function(){

            $(document).on('change','.provinceSelect',function(){
                //console.log("hmm its change");

                var province_id=$(this).val();
                var div=$(this).parent();
                var op=" ";
                //console.log(province_id);
                $.ajax({
                    type:'get',
                    url:'{!!URL::to('findSanitary_regionName')!!}',
                    data:{'id':province_id},
                    success:function(data){
                        //console.log('success');

                        //console.log(data);
                        
                        op+='<option value="0" selected disabled>choose sanitary region</option>';
                        for(var i=0;i<data.length;i++){
                            op+='<option value="'+data[i].name+'">'+data[i].name+'</option>';

                    }
                        div.find('.sanitaryRegionName').html(" ");
                        div.find('.sanitaryRegionName').append(op);
                    
                    console.log(data);
                  
                    
                    }
                });
            });


        });
    </script>