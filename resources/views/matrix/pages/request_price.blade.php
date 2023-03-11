@extends('matrix/homepage')

@section('contentpage')



@section('banar')
   Messages
@endsection()

  <div class="content-wrapper">

    <script>
            $(function () {
                 $('.sub1').hide();
                 $("#cat").click(function(){
                     if ($('.sub1').is(':hidden')) {
                         $('.sub1').fadeTo("slow", 1);
                     }
                 });
            });
    </script>



    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Messages</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>

                  <th> Name </th>
                  <th> E-Mail </th>
                  <th> Phone </th>
                  <th> Majal </th>
                  <th> Company </th>
                  <th> Type </th>
                  <th> Description </th> 
                  <th> File </th> 
                  <th> Date  </th>                     
                  <th class="col-md-1 col-sm-2">Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($prices as $price)
                      @if(!isset($message->deleted_at))
                      <tr>                       
                        <td>{{ $price-> name }}</td>
                        <td>{{ $price-> mail }}</td>
                        <td>{{ $price->phone }}</td>
                        <td>{{ $price->majal }}</td>
                        <td>{{ $price->company }}</td>
                        <td>{{ $price->type }}</td>                        
                        <td>                        
                           <textarea style="    height: 30px;" readonly>{{ $price->description }}</textarea> 
                        </td> 
                        <td>
                          <a href="download/{{$price->file}}" download="{{$price->file}}">
                              <button type="button" class="btn btn-primary">
                              <i class="glyphicon glyphicon-download">
                                Download
                              </i>
                              </button>
                          </a>                     
                        </td>     
                        <td>{{ $price->created_at }}</td>
                        <td><a href="{{ url('admin/request_price/'.$price->id.'/delete') }}"  onclick="return confirm('Are you sure you want to delete ?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
