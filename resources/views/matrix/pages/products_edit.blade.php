@extends('matrix/homepage')
@section('contentpage')

@section('banar')
 Products
@endsection()

  <div class="content-wrapper">
   <h3  class="col-xs-12"> Products <a href="{{url('admin/services ')}}"><button style="margin:10px;" id="cat" type="submit" class="btn btn-primary"> Back  </button></a></h1>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
              <div class="box box-primary">
                  <div class="box-header with-border">
                      <h3 class="box-title"> Products </h3>
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
                            <label for="exampleInputEmail1"> Title </label>
                            <input type="text" name="title" value="{{$edit->title }}" class="form-control" id="exampleInputEmail1" placeholder="EnterTitle">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputEmail1"> Clients </label>
                              <input type="text" name="client" value="{{$edit->client }}" class="form-control" id="exampleInputEmail1" placeholder="Enter Clients" >
                          </div>
                           <div class="form-group">
                              <label>  Assets Type  :   </label>
                              <select  name="categories_id" required class="form-control " style="width: 100%;">
                                <option selected="selected">  </option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id  }}"> {{ $category->title  }} </option>
                                @endforeach
                              </select>
                          </div>
                          <div class="form-group">
                                <label for="exampleInputEmail1"> Location </label>
                                <input type="text" name="location" value="{{$edit->location }}" class="form-control" id="exampleInputEmail1" placeholder="Enter Location" >
                          </div>
                          <div class="form-group">
                              <label>Start Date  </label>
                              <div class="input-group date">
                              <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                              </div>
                                <input type="text" name="start_date" value="{{$edit->start_date }}" class="form-control pull-right" id="datepicker">
                              </div>
                          </div>
                          <div class="form-group">
                              <label>Compllation Date  </label>
                              <div class="input-group date">
                              <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                              </div>
                              <input type="date" name="compllation_Date" value="{{$edit->compllation_Date }}" class="form-control pull-right" id="">
                          </div>
                          </div>  
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Description </label>                            
                            <textarea class="form-control" rows="5" id="fdddd" name="description" >{{$edit->description }}</textarea>
                          </div>
                          <div class="form-group">
                            <img src="{{url($edit->image) }}" height="60" width="70"><br>
                            <label for="exampleInputEmail1"> Choose image </label>                            
                            <input type="file" name="image"  class="form-control" id="exampleInputEmail1" placeholder="Enter ">
                            <input type="hidden"  name="url" value="{{$edit->image }}">
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
