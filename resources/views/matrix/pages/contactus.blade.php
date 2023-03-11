@extends('matrix/homepage')

@section('contentpage')



@section('banar')
    Contact Us
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

     <h3 class="col-xs-12"> Contact Us  <button style="margin:10px;" id="cat" type="submit" class="btn btn-primary"> Add New  </button></h1>

    <section class="content sub1">
      <div class="row">
        <div class="col-md-12">
                    <div class="box box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title"> Contactus </h3>
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

                      <form role="form" method="post" action="{{ url('admin/contactus_add') }}">
                            {{ csrf_field() }}
                          <div class="box-body">
                              <div class="form-group">
                                   <label for="exampleInputEmail1"> Title </label>
                                   <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Title" required="" oninvalid="this.setCustomValidity('Please Enter  Title')" oninput="setCustomValidity('')">
                              </div>
                              <div class="form-group">
                                   <label for="exampleInputEmail1"> Map </label>
                                   <input type="text" name="map" class="form-control" id="exampleInputEmail1" placeholder="Enter Map" required="" oninvalid="this.setCustomValidity('Please Enter  Map')" oninput="setCustomValidity('')">
                              </div>
                              <div class="form-group">
                                   <label for="exampleInputEmail1"> E-Mail </label>
                                   <input type="email" name="mail" class="form-control" id="exampleInputEmail1" placeholder="Enter  E-Mail" required="" oninvalid="this.setCustomValidity('Please Enter  E-Mail')" oninput="setCustomValidity('')">
                              </div>
                              <div class="form-group">
                                   <label for="exampleInputEmail1"> Adress </label>
                                   <input type="text" name="adress" class="form-control" id="exampleInputEmail1" placeholder="Enter Adress " required="" oninvalid="this.setCustomValidity('Please Enter Adress')" oninput="setCustomValidity('')">
                              </div>
                              <div class="form-group">
                                   <label for="exampleInputEmail1"> Phone </label>
                                   <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone"  required="" oninvalid="this.setCustomValidity('Please Enter Phone')" oninput="setCustomValidity('')">
                              </div> 
                                <div class="form-group">
                                   <label for="exampleInputEmail1"> Calendar </label>
                                   <input type="text" name="calendar" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone"  required="" oninvalid="this.setCustomValidity('Please Enter calendar')" oninput="setCustomValidity('')">
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
              <h3 class="box-title"><a href="{{url('admin/contactus_trashed')}}" class="btn btn-block btn-danger">Trashed</a></h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>

                  <th> ID </th>
                 
                  <th> E-Mail </th>
                  <th> Phone </th>
                 <!--  <th> Adress </th>
                   <th> Map </th>
                 <th> Social</th>-->
                  <th class="col-md-1 col-sm-2">Edit</th>
                  <th class="col-md-1 col-sm-2">Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($contactus as $contact)
                      @if(!isset($contact->deleted_at))
                      <tr>
                        <td>{{ $contact->id }}</td>
                        
                        <td>{{ $contact->mail }}</td>
                        <td>{{ $contact->phone }}</td>
                       <!--  <td>{{ $contact->adress }}</td>
                        <td>{{ $contact->map }}</td>
                       <td>{{ $contact->social }}</td>-->
                        <td><a href="{{ url('admin/contactus/'.$contact->id.'/edit') }}"><i class="fa fa-edit"></i></a></td>
                        <td><a href="{{ url('admin/contactus/'.$contact->id.'/delete') }}"  onclick="return confirm('Are you sure you want to delete ?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
