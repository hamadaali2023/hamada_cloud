@extends('matrix/homepage')

@section('contentpage')



@section('banar')
    packages
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

     <h3 class="col-xs-12"> packages  <button style="margin:10px;" id="cat" type="submit" class="btn btn-primary"> Add New  </button></h1>

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

                      <form role="form" method="post" action="{{ url('admin/package_add') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                          <div class="box-body">
                              <div class="form-group">
                                <label for="exampleInputEmail1"> packages </label>
                                 <select  name="offer_id" class="form-control select2" style="width: 100%;">
                                      <option selected="selected"> ---- </option>
                                      @foreach ($offers as $offer)
                                        <option value="{{ $offer->id }}"> {{ $offer->name }} </option>
                                      @endforeach
                                </select>

                              </div> 
                              <div class="form-group">
                                   <label for="exampleInputEmail1"> Name </label>
                                   <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name"  required="" oninvalid="this.setCustomValidity('Please Enter Name')" oninput="setCustomValidity('')">
                              </div>                      
                              <div class="form-group">
                                   <label for="exampleInputEmail1"> price </label>
                                   <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter price" required="" oninvalid="this.setCustomValidity('Please Enter Price')" oninput="setCustomValidity('')">
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
            <div class="box-body">
               <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th> ID </th>
                      <th> name </th>
                      <th>price</th>
                      <th>offer Name</th>
                      <th class="col-md-1 col-sm-2">Edit</th>                     
                      <th class="col-md-1 col-sm-2">Delete</th>
                    </tr>
                  </thead>
                <tbody>
                  @foreach ($packages as $package)                   
                      <tr>
                        <td>{{ $package->packageid }}</td>                                                            
                        <td>{{ $package->packagename }}</td> 
                        <td>{{ $package->price }}</td> 
                        <td>{{ $package->offername }}</td>                 
                        <td class="col-md-1 col-sm-2">
                          <a href="{{ url('admin/package/'.$package->packageid.'/edit') }}"><i class="fa fa-edit"></i></a>
                        </td> 
                        <td><a href="{{ url('admin/package/'.$package->packageid.'/delete') }}"  onclick="return confirm('Are you sure you want to delete ?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>                 
                      </tr>
                    @endforeach                  
                </tbody>

              </table>
            </div>
           
          </div>
         
        </div>
     
      </div>
    
    </section>
  
  </div>
@stop
