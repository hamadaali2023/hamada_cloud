@extends('matrix/homepage')

@section('contentpage')



@section('banar')
   Messages
@endsection()

  <div class="content-wrapper">

 


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

                  <th> ID </th>
                 <th> Name </th>
                  <th> E-Mail </th>
                  <th> Phone </th>
                  <th> Subject </th>
                   <th> Message </th>
                  <th> التاريخ </th> 
                  <th class="col-md-1 col-sm-2">Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($messages as $message)
                      @if(!isset($message->deleted_at))
                      <tr>
                        <td>{{ $message->id }}</td>                        
                        <td>{{ $message-> name }}</td>
                        <td>{{ $message-> mail }}</td>
                        <td>{{ $message->phone }}</td>
                        <td>{{ $message->subject }}</td>
                        <td>{{ $message->message }}</td>
                        <td>{{ $message->created_at }}</td> 
                        <td><a href="{{ url('admin/messages/'.$message->id.'/delete') }}"  onclick="return confirm('Are you sure you want to delete ?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
