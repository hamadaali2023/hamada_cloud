@extends('matrix/homepage')
@section('contentpage')




@section('banar')
   Offers Details 
@endsection()

  <div class="content-wrapper">
   <h3  class="col-xs-12"> Offers Details  <a href="{{url('admin/aboutus ')}}"><button style="margin:10px;" id="cat" type="submit" class="btn btn-primary"> Back  </button></a></h1>
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

                  <form role="form" method="post" action="{{ request()->url() }}"  enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="box-body">
                               <div class="form-group">
                                <label for="exampleInputEmail1"> packages </label>
                                <select  name="package_id" class="form-control select2" style="width: 100%;">
                                <option selected="selected"></option>
                                    @foreach ($packages as $package)
                                      <option value="{{ $package->id }}"> {{ $package->title }} </option>
                                    @endforeach
                                </select>
                              </div>                      
                              <div class="form-group">
                                <label for="exampleInputEmail1"> Details </label>
                                  
                                 <select  name="detail_id" class="form-control select2" style="width: 100%;">
                                  <option selected="selected"></option>
                                @foreach ($details as $detail)

                                @if(($detail->check) =="1") 
                                    <option class="red" value="{{ $detail->id }}"  > {{ $detail->name }} </option>
                                @else
                                       <option value="{{ $detail->id }}"> {{ $detail->name }} </option>
                                @endif 

                                      
                                @endforeach
                              </select>

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
