@extends('matrix/homepage')
@section('contentpage')




@section('banar')
  Contact Us
@endsection()

  <div class="content-wrapper">
   <h3  class="col-xs-12"> Contact Us <a href="{{url('admin/contactus ')}}"><button style="margin:10px;" id="cat" type="submit" class="btn btn-primary"> Back  </button></a></h1>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
              <div class="box box-primary">
                  <div class="box-header with-border">
                      <h3 class="box-title"> Contact Us </h3>
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

                  <form role="form" method="post" action="{{ request()->url() }}">
                      {{ csrf_field() }}
                      <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Title </label>
                            <input type="text" name="title" value="{{$edit->title }}" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Map </label>
                            <input type="text" name="map" value="{{$edit->map }}" class="form-control" id="exampleInputEmail1" placeholder="Enter Map">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1"> E-Mail </label>
                            <input type="text" name="mail" value="{{$edit->mail }}" class="form-control" id="exampleInputEmail1" placeholder="Enter Mail">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1"> Adress </label>
                            <input type="text" name="adress" value="{{$edit->adress }}" class="form-control" id="exampleInputEmail1" placeholder="Enter Adress ">
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1"> Phone </label>
                            <input type="text" name="phone" value="{{$edit->phone }}" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone">
                          </div>
                           </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1"> calendar </label>
                            <input type="text" name="calendar" value="{{$edit->calendar }}" class="form-control" id="exampleInputEmail1" placeholder="Enter calendar">
                          </div>
                          <!--
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Social </label>
                            <input type="text" name="social" value="{{$edit->social }}" class="form-control" id="exampleInputEmail1" placeholder="Enter Social ">
                          </div>
                          -->
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
