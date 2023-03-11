@extends('matrix/homepage')

@section('contentpage')



@section('banar')
    categories
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

     <h3 class="col-xs-12"> categories  <button style="margin:10px;" id="cat" type="submit" class="btn btn-primary"> Add New  </button></h1>

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

                      <form role="form" method="post" action="{{ url('admin/category_add') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                          <div class="box-body">
                              <div class="form-group">
                                   <label for="exampleInputEmail1"> Title </label>
                                   <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title" required>
                              </div>
                             
                              <div class="form-group">
                                   <label for="exampleInputEmail1"> Choose image </label>
                                   
                                   <input type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="Enter " required>
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


 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="{{url('admin/projects_trashed')}}" class="btn btn-block btn-danger">trashed</a></h3>
            </div>
            <div class="box-body">
               <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th> ID </th>
                      <th> Title </th>
                      <th> Image </th>
                      <th class="col-md-1 col-sm-2">products</th>
                      <th class="col-md-1 col-sm-2">Edit</th>
                    </tr>
                  </thead>
                <tbody>
                  @foreach ($proj as $pro)
                      @if(!isset($project->deleted_at))
                      <tr>
                        <td>{{ $pro->id }}</td>
                        <td>{{ $pro->title }}</td>                                          
                        <td><img src="{{url($pro->image) }}" height="50" width="50"></td>                   
                        <td class="col-md-1 col-sm-8" > 
                        <a href="{{ url('admin/products/'.$pro->id) }}">  <button  class="btn btn-block btn-primary btn-sm">  products </button></a>
                        </td>
                        <td class="col-md-1 col-sm-2">
                          <a href="{{ url('admin/category/'.$pro->id.'/edit') }}"><i class="fa fa-edit"></i></a>
                        </td>
                    

                      </tr>
                        @endif
                    @endforeach
                     @foreach ($projects as $project)
                      @if(!isset($project->deleted_at))
                      <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                                          
                        <td><img src="{{url($project->image) }}" height="50" width="50"></td>                   
                        <td class="col-md-1 col-sm-8" > 
                        <a href="{{ url('admin/products/'.$project->id) }}">  <button  class="btn btn-block btn-primary btn-sm">  products </button></a>
                        </td>
                        <td class="col-md-1 col-sm-2">
                          <a href="{{ url('admin/category/'.$project->id.'/edit') }}"><i class="fa fa-edit"></i></a>
                        </td>
                        <td class="col-md-1 col-sm-8"><a href="{{ url('admin/category/'.$project->id.'/delete') }}"  onclick="return confirm('Are you sure you want to delete ?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
