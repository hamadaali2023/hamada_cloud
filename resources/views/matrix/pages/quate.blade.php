@extends('matrix/homepage')

@section('contentpage')



@section('banar')
    Quotation
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



    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Qates</h3>
            </div>
            <div class="box-body">
              <table id="" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th> Item ID </th>                  
                    <th> name </th>
                    <th> E-Mail </th>
                    <th> phone </th>
                    <th> Messages </th>
                    <th> Name Servic </th>
                    <th> التاريخ </th> 
                    <th>Delete</th>                 
                  </tr>
                </thead>
                <tbody>
                  @foreach ($quates as $quate)
                      @if(!isset($quate->deleted_at))
                      <tr>
                        <td>{{ $quate->id }}</td>
                        <td>{{ $quate->name }}</td>
                        <td>{{ $quate->mail }}</td>
                        <td>{{ $quate->phone }}</td>
                        <td>{{ $quate->message }}</td>
                        <td>{{ $quate->nameservic }}</td>
                        <td>{{ $quate->created_at }}</td>
                        <td>@if(!isset($quate->deleted_at))<a href="quate/{{$quate->id}}/delete"><i class="fa fa-trash" aria-hidden="true"></i></a>@endif
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


