@extends('matrix/homepage')

@section('contentpage')



@section('banar')
    Ourwork
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

     <h3 class="col-xs-12"> Ourwork  <button style="margin:10px;" id="cat" type="submit" class="btn btn-primary"> Add New  </button></h1>

    <section class="content sub1">
      <div class="row">
        <div class="col-md-12">
                    <div class="box box-primary">
                    
                     <p class="text-warning">
                        @if(count($errors))
                            <ul>
                                @foreach($errors->all() as $error)
                                      <div style="padding: 7px; margin-top: 20px; margin-right: 20px; font-size: 17px;" class="p-3 mb-2 bg-danger text-white">{{ $error }}</div>
                                @endforeach
                            </ul>
                         @endif
                     </p>
                      @if(session()->has('message'))
                        <div class="alert alert-success " style="padding: 5px; margin-top: 20px; margin-right: 20px; margin-right: 12px; font-size: 17px;">
                            {{ session()->get('message') }}
                        </div>
                      @endif

                       <form role="form" method="post" action="{{ url('admin/ourwork_add') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                          <div class="box-body">
                              <div class="form-group">
                                   <label for="exampleInputEmail1"> Title </label>
                                   <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title" required="" oninvalid="this.setCustomValidity('Please Enter Title')" oninput="setCustomValidity('')">
                              </div>                             
                                 <div class="form-group">
                                   <label for="exampleInputEmail1"> Description </label>
                                    <textarea class="form-control" rows="5" id="fdddd" name="description" required="" oninvalid="this.setCustomValidity('Please Enter Description')" oninput="setCustomValidity('')"></textarea>                             
                              <div class="box-footer">
                                  <button type="submit" class="btn btn-primary"> send </button>
                              </div>
                          </div>
                      </form>
            </div>
          </div>
        </div>
    </section>



    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="{{url('admin/ourwork_trashed')}}" class="btn btn-block btn-danger">trashed</a></h3>
            </div>
             <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th> ID </th>
                  <th> Title </th>
                  <th>Description </th>
                  <th> Image </th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($blogs as $blog)
                      @if(!isset($blog->deleted_at))
                      <tr>
                        <td>{{ $blog->id }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ substr(strip_tags($blog->description), 0, 80) }}</td>
                        <td>
                        <a href="{{ url('admin/work/'.$blog->id) }}">  <button  class="btn btn-block btn-primary btn-sm">  works </button></a>
                        </td>
                        <td><a href="{{ url('admin/ourwork/'.$blog->id.'/edit') }}"><i class="fa fa-edit"></i></a></td>
                        <td><a href="{{ url('admin/ourwork/'.$blog->id.'/delete') }}"  onclick="return confirm('Are you sure you want to delete ?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
