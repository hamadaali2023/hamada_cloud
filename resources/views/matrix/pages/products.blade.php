
@extends('matrix/homepage')
@section('contentpage')

@section('banar')
    Products
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

    
      <h3 class="col-xs-12"> Products  <button style="margin:10px;" id="cat" type="submit" class="btn btn-primary"> Add New  </button></h1>
    <section class="content sub1">
      <div class="row">
        <div class="col-md-12">
                    <div class="box box-primary">
                      <div class="box-header with-border">
                      
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
 

  <form role="form" method="post" action="{{ url('admin/products_add/'.$id->id.'/store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                          <div class="box-body">
                              <div class="form-group">
                                   <label for="exampleInputEmail1"> Title </label>
                                   <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title" required="" oninvalid="this.setCustomValidity('Please Enter Title')" oninput="setCustomValidity('')">
                              </div>
                              <div class="form-group">
                                   <label for="exampleInputEmail1"> Clients </label>
                                   <input type="text" name="client" class="form-control" id="exampleInputEmail1" placeholder="Enter Clients" required="" oninvalid="this.setCustomValidity('Please Enter Title')" oninput="setCustomValidity('')">
                              </div>
                               <div class="form-group">
                                   <label for="exampleInputEmail1"> Location </label>
                                   <input type="text" name="location" class="form-control" id="exampleInputEmail1" placeholder="Enter Location" required="" oninvalid="this.setCustomValidity('Please Enter Title')" oninput="setCustomValidity('')">
                              </div>
                              <div class="form-group">
                                <label>Start Date  </label>
                                <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" name="start_date" class="form-control pull-right" id="datepicker" required="" oninvalid="this.setCustomValidity('Please Enter Start Date ')" oninput="setCustomValidity('')">
                                </div>
                              </div>
                              <div class="form-group">
                                <label>Compllation Date  </label>
                                <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="date" name="compllation_Date" class="form-control pull-right" id="">
                                </div>
                              </div>
                                 <div class="form-group">
                                   <label for="exampleInputEmail1"> Description </label>                     
                                    <textarea class="form-control" rows="5" id="fdddd" name="description" required></textarea>
                              </div>
                              <div class="form-group">
                                   <label for="exampleInputEmail1"> Choose image </label>
                                   
                                   <input type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="Enter Image " multiple required>
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
              <h3 class="box-title"><a href="{{url('admin/services_trashed')}}" class="btn btn-block btn-danger">trashed</a></h3>
            </div>
            <div class="box-body">
               <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th> ID </th>
                  <th> Title </th>
                  <th> client </th>
                 
                  <th> Start  </th>
                  <th> Compllation  </th>
                  <th> Description </th>
                  <th> Image  </th>
                  <th>slider Image</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($products as $product)
                     @if(!isset($product->deleted_at))
                      <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->client }}</td>
                        
                        <td>{{ $product->start_date }}</td>
                        <td>{{ $product->compllation_Date }}</td>
                        <td>{{ substr(strip_tags($product->description), 0, 60) }}</td>      
                        <td><img src="{{url($product->image) }}" height="50" width="50"></td> 
                        <td>
                          <a href="{{ url('admin/imageproducts/'.$product->id) }}" class="btn btn-block btn-primary btn-sm">image</a>
                        </td>                
                        <td><a href="{{ url('admin/products/'.$product->id.'/edit') }}"><i class="fa fa-edit"></i></a></td>
                        <td>
                          <a href="{{ url('admin/products/'.$product->id.'/delete') }}"  onclick="return confirm('Are you sure you want to delete ?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
