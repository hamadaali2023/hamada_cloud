@extends('matrix/homepage')

@section('contentpage')



@section('banar')
    Work
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

     <h3 class="col-xs-12"> Work  <button style="margin:10px;" id="cat" type="submit" class="btn btn-primary"> Add New  </button></h1>

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

                      <form role="form" method="post" action="{{ url('admin/work_add/'.$id->id.'/store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                          <div class="box-body">
                              <div class="form-group">
                                   <label for="exampleInputEmail1"> Title </label>
                                   <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title" required="" oninvalid="this.setCustomValidity('Please Enter Title')" oninput="setCustomValidity('')">
                              </div>
                              <div class="form-group">
                                   <label for="exampleInputEmail1"> URL </label>
                                   <input type="text" name="url" class="form-control" id="exampleInputEmail1" placeholder="Enter Url">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1"> Description </label>
                                  <textarea class="form-control" rows="5" id="fdddd" name="description" required="" oninvalid="this.setCustomValidity('Please Enter Description')" oninput="setCustomValidity('')"></textarea>
                              </div>
                              <div class="form-group">
                                   <label for="exampleInputEmail1"> Choose image </label>
                                   <input type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="Enter ">
                                   <input type="hidden"  name="url1" value="" >
                              </div>
                              <div class="form-group">
                                   <label for="exampleInputEmail1"> Video </label>
                                   <input type="text" name="video" class="form-control" id="exampleInputEmail1" placeholder="Enter Video">
                              </div>
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
                  <th> URL </th>
                  <th>Description </th>
                 
                  <th> video </th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($Works as $Work)
                      @if(!isset($Work->deleted_at))
                      <tr>
                        <td>{{ $Work->id }}</td>
                        <td>{{ $Work->title }}</td>
                        <td>{{ $Work->url }}</td>
                        <td>{{ substr(strip_tags($Work->description), 0, 80) }}</td>
                        <!--<td><img src="{{url($Work->image) }}" height="70" width="70"></td>-->
                        <td>   <video width="100" height="100" src="{{$Work->video }}" controls> Sorry, your browser doesn't support HTML5 <code>video</code>, but you can download this video from the <a href="https://archive.org/details/Popeye_forPresident" target="_blank">Internet Archive</a>. </video></td>


                        <td><a href="{{ url('admin/work/'.$Work->id.'/edit') }}"><i class="fa fa-edit"></i></a></td>
                        <td><a href="{{ url('admin/work/'.$Work->id.'/delete') }}"  onclick="return confirm('Are you sure you want to delete ?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
