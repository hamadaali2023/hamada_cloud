@extends('matrix/homepage')
@section('contentpage')




@section('banar')
   About Us
@endsection()

  <div class="content-wrapper">
   <h3  class="col-xs-12"> About Us  <a href="{{url('admin/aboutus ')}}"><button style="margin:10px;" id="cat" type="submit" class="btn btn-primary"> Back  </button></a></h1>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
              <div class="box box-primary">
                  <div class="box-header with-border">
                      <h3 class="box-title"> About Us </h3>
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

                  <form role="form" method="post" action="{{ request()->url() }}"  enctype="multipart/form-data">
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
                                   <label for="exampleInputEmail1"> name </label>
                                   <input type="text" name="name" class="form-control" value="{{$edit->title }}" vid="exampleInputEmail1" placeholder="Enter name" required>
                              </div>                      
                              <div class="form-group">
                                   <label for="exampleInputEmail1"> price </label>
                                   <input type="text" name="price" class="form-control" value="{{$edit->price }}"  id="exampleInputEmail1" placeholder="Enter price" required>
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
