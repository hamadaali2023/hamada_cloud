@extends('matrix/homepage')

@section('contentpage')



@section('banar')
   About Us
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

     <h3 class="col-xs-12"> About Us  <button style="margin:10px;" id="cat" type="submit" class="btn btn-primary"> Add New  </button></h1>
     
     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Description </h3>
            </div>            
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th> ID </th>
                    <th> Title </th>
                    <th>Description </th>
                    <th> Image </th>
                    <th class="col-md-1 col-sm-2">Edit</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($description as $about)
                      @if(!isset($about->deleted_at))
                      <tr>
                        <td>{{ $about->id }}</td>
                        <td>{{ $about->title }}</td>
                        <td>{{ substr(strip_tags($about->description), 0, 100) }}
                          </td>
                        <td><img src="{{url($about->image) }}" height="50" width="50"></td>
                        <td class="col-md-1 col-sm-2"><a href="{{ url('admin/aboutus/'.$about->id.'/edit') }}"><i class="fa fa-edit"></i></a></td>                      
                      </tr>
                        @endif
                    @endforeach
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="{{url('admin/aboutus_trashed')}}" class="btn btn-block btn-danger">trashed</a></h3>
            </div>

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th> ID </th>
                    <th> Title </th>
                    <th>Description </th>
                    <th> Image </th>
                  <th class="col-md-1 col-sm-2">Edit</th>
                   <!--   <th class="col-md-1 col-sm-2">Delete</th>-->
                  </tr>
                </thead>
                <tbody>
                  @foreach ($aboutus as $about)
                      @if(!isset($about->deleted_at))
                      <tr>
                        <td>{{ $about->id }}</td>
                        <td>{{ $about->title }}</td>
                        <td>{{ substr(strip_tags($about->description), 0, 120) }}</td>
                        <td><img src="{{url($about->image) }}" height="50" width="50"></td>
                       <td class="col-md-1 col-sm-2"><a href="{{ url('admin/aboutus/'.$about->id.'/edit') }}"><i class="fa fa-edit"></i></a></td>
                      <!--   <td class="col-md-1 col-sm-8"><a href="{{ url('admin/aboutus/'.$about->id.'/delete') }}"  onclick="return confirm('Are you sure you want to delete slide {{$about->id }} ?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>-->
                      </tr>
                        @endif
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
