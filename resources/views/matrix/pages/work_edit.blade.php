@extends('matrix/homepage')
@section('contentpage')




@section('banar')
   Work
@endsection()

  <div class="content-wrapper">
   <h3  class="col-xs-12"> Work  <a href="{{url('admin/services ')}}"><button style="margin:10px;" id="cat" type="submit" class="btn btn-primary"> Back  </button></a></h1>
    <section class="content">
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

                  <form role="form" method="post" action="{{ request()->url() }}" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Title </label>
                            <input type="text" name="title" value="{{$edit->title }}" class="form-control" id="exampleInputEmail1" placeholder="EnterTitle">
                          </div>
                           <div class="form-group">
                             <label for="exampleInputEmail1"> Description </label>                            
                             <textarea class="form-control" rows="5" id="fdddd" name="description" >{{$edit->description }}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> url </label>
                            <input type="text" name="link" value="{{$edit->url }}" class="form-control" id="exampleInputEmail1" placeholder="EnterTitle">
                          </div>
                           <div class="form-group">
                            <img src="{{url($edit->image) }}" height="60" width="70"><br>
                            <label for="exampleInputEmail1"> Choose image </label>                            
                            <input type="file" name="image"  class="form-control" id="exampleInputEmail1" placeholder="Enter ">
                            <input type="hidden"  name="url1" value="{{$edit->image }}">
                          </div>
                           <div class="form-group">

                                   <video width="200" height="190" src="{{$edit->video }}" controls> Sorry, your browser doesn't support HTML5 <code>video</code>, but you can download this video from the <a href="https://archive.org/details/Popeye_forPresident" target="_blank">Internet Archive</a>. </video>
                                   <br>
                                   <label for="exampleInputEmail1"> Video </label>
                                   <input type="text" name="video" class="form-control" id="exampleInputEmail1" placeholder="Enter Video" value="{{$edit->video }}">
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
