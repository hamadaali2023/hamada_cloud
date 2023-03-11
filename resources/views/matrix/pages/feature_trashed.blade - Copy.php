@extends('matrix/homepage')

@section('contentpage')




@section('banar')
    Services
@endsection()


  <div class="content-wrapper">
   <h3  class="col-xs-12"> Services <a href="{{url('admin/services ')}}"><button style="margin:10px;" id="cat" type="submit" class="btn btn-primary"> Back  </button></a></h1>
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
                  @foreach ($id as $feature)
                      @if(isset($feature->deleted_at))
                      <tr>
                        <td>{{ $feature->id }}</td>
                        <td>{{ $feature->title }}</td>
                        <td>{{ $feature->description }}</td>                       
                        <td><img src="{{url($Feature->image) }}" height="50" width="50"></td>
                        <td>
                        <a href="{{ url('admin/feature/'.$feature->id.'/restore') }}">restore</a>
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
