@extends('matrix/homepage')

@section('contentpage')



@section('banar')
   Messages
@endsection()

  <div class="content-wrapper">

 
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
                  <th> Subject </th>
                  <th> Message </th>
                  <th> Name Package </th>
                  <th> التاريخ </th>
                  <th class="col-md-1 col-sm-2">Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($booking as $book)                     
                      <tr>
                        <td>{{ $book->id }}</td>                        
                        <td>{{ $book-> name }}</td>
                        <td>{{ $book-> mail }}</td>
                         <td>{{ $book->subject }}</td>
                       <td>{{ $book->message }}</td> 
                       <td>{{ $book->namepackage }}</td> 
                       <td>{{ $book->created_at }}</td>                       
                        <td><a href="{{ url('admin/booking/'.$book->id.'/delete') }}"  onclick="return confirm('Are you sure you want to delete ?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                      
                      </tr>
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
