@extends('matrix/homepage')

@section('contentpage')




@section('banar')
    Blog
@endsection()


  <div class="content-wrapper">
   <h3  class="col-xs-12">  Blog  <a href="{{url('blog')}}"><button style="margin:10px;" id="cat" type="submit" class="btn btn-primary"> Back  </button></a></h1>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
           
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th> Item ID </th>
                  <th> Title </th>
                  <th> Description </th>
                  <th> Image </th>
                  <th>restore</th>

                </tr>
                </thead>


                <tbody>
                  @foreach ($blogs as $blog)
                      @if(isset($blog->deleted_at))
                      <tr>
                        <td>{{ $blog->id }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->description }}</td>
                        <td>{{ $blog->image }}</td>
                        <td>
                        <a href="{{ url('admin/blog/'.$blog->id.'/restore') }}">restore</a>
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
