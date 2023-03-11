@extends('matrix/homepage')

@section('contentpage')




@section('banar')
    Contact Us 
@endsection()


  <div class="content-wrapper">
   <h3  class="col-xs-12"> Contact Us  <a href="{{url('admin/contactus ')}}"><button style="margin:10px;" id="cat" type="submit" class="btn btn-primary"> Back  </button></a></h1>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
           
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                   <th> ID </th>                 
                  <th> E-Mail </th>
                  <th> Phone </th>
                  <!-- 
                   <th> Adress </th>
                   <th> Map </th>
                   <th> Social</th>
                  -->
                  <th class="col-md-1 col-sm-2">restore</th>
                </tr>
                </thead>

                <tbody>
                  @foreach ($contactus as $contact)
                      @if(isset($about->deleted_at))
                      <tr>
                        <td>{{ $contact->id }}</td>                        
                        <td>{{ $contact->mail }}</td>
                        <td>{{ $contact->phone }}</td>
                        <!--  
                        <td>{{ $contact->adress }}</td>
                        <td>{{ $contact->map }}</td>
                        <td>{{ $contact->social }}</td>
                        -->
                        <td>
                        <a href="{{ url('admin/contactus/'.$contact->id.'/restore') }}">restore</a>
                        </td>
                      </tr>
                        @endif
                    @endforeach
                  </tbody>


              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  </div>



@stop
