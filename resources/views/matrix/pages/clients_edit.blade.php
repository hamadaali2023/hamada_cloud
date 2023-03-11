@extends('matrix/homepage')
@section('contentpage')




@section('banar')
   Clients
@endsection()

  <div class="content-wrapper">
   <h3  class="col-xs-12"> Clients  <a href="{{url('admin/clients ')}}"><button style="margin:10px;" id="cat" type="submit" class="btn btn-primary"> Back  </button></a></h1>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
              <div class="box box-primary">
                  <div class="box-header with-border">
                      <h3 class="box-title"> Clients </h3>
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

                  <form role="form" method="post" action="{{ request()->url() }}" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="box-body">                        
                                <div class="form-group">
                                   <label for="exampleInputEmail1"> title</label>
                                   <input type="text" name="title" value="{{$edit->title }}" class="form-control"  id="exampleInputEmail1" placeholder="Enter ">
                              </div> 
                               <div class="form-group">
                                   <label for="exampleInputEmail1"> description</label>
                                   <input type="text" name="Description" class="form-control" id="exampleInputEmail1" placeholder="description ">
                              </div>                        
                              <div class="form-group">
                                   <img src="{{url($edit->image) }}" height="60" width="70"><br>
                                   <label for="exampleInputEmail1"> Choose image </label>
                                    <input type="hidden"  name="url" value="{{$edit->image }}">
                                   <input type="file" name="image" class="form-control" id="exampleInputEmail1" placeholder="Enter ">
                              </div>                   
                          <div class="box-footer">
                              <button type="submit" class="btn btn-primary"> EDIT </button>
                          </div>
                      </div>
                  </form>
            </div>
          </div>
        </div>
    </section>
  </div>
@stop
