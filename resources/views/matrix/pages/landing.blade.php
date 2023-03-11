@extends('matrix/homepage')

@section('contentpage')



@section('banar')
    Services
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

     <h3 class="col-xs-12"> Services  <button style="margin:10px;" id="cat" type="submit" class="btn btn-primary"> Add New  </button></h1>

    <section class="content sub1">
      <div class="row">
        <div class="col-md-12">
                    <div class="box box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title"> slider</h3>
                      </div>
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

                      <form role="form" method="post" action="{{ url('admin/landing_add') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                          <div class="box-body">
                              <div class="form-group">
                                   <label for="exampleInputEmail1"> Title </label>
                                   <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title" required="" oninvalid="this.setCustomValidity('Please Enter Title')" oninput="setCustomValidity('')">
                              </div>
                                 <div class="form-group">
                                   <label for="exampleInputEmail1"> Description </label>                     
                                    <textarea class="form-control" rows="5" id="fdddd" name="description" required="" oninvalid="this.setCustomValidity('Please Enter Description')" oninput="setCustomValidity('')"></textarea>
                              </div>
                                 <div class="form-group">
                                   <label for="exampleInputEmail1"> Choose image </label>
                                   <input type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="Enter " required="" oninvalid="this.setCustomValidity('Please Enter image')" oninput="setCustomValidity('')">
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
           
            <div class="box-body">
               <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th> ID </th>
                      <th> Title </th>
                      <th> Description </th>
                      <th> Image </th>
                  
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                <tbody>
                  @foreach ($landing as $land)
                      
                      <tr>
                        <td>{{ $land->id }}</td>
                        <td>{{ $land->title }}</td>
                        <td>{{ substr(strip_tags($land->description), 0, 50) }}</td>                    
                        <td><img src="{{url($land->imag) }}" height="50" width="50"></td>
                        <td>
                          <a href="{{ url('admin/landing/'.$land->id.'/edit') }}"><i class="fa fa-edit"></i></a>
                        </td>
                        <td>
                          <a href="{{ url('admin/landing/'.$land->id.'/delete') }}"  onclick="return confirm('Are you sure you want to delete slide {{$land->id }} ?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
