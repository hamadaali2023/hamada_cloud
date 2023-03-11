@extends('layouts.app')

@section('content')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Control</div>
                <div class="panel-body"> 

                  <div class="bs-example" data-example-id="panel-without-body-with-table">
                    <div class="panel panel-default">
                      <div class="panel-heading">Panel heading</div>

                      <table class="table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Role</th>
                          </tr>
                        </thead>
                        <tbody>

                         @foreach ($users as $user)

                          <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>

                            @if (Auth::user()->role == 2 || $user->id == 1)
                            <b>Disabled</b>
                            @else
                              <div class="form-group" style="   margin-bottom: 0px;">
                                  <form method="post" action="update-role/{{ $user->id }}">
                                    {{ csrf_field() }}
                                    <select class="form-control" name="role" onchange="this.form.submit();">

                                     <option value="1" {{ ($user->role == 1) ? 
                                           'selected' : null }}>Admin</option>

                                      <option value="2" {{ ($user->role == 2) ? 
                                           'selected' : null }}>manager</option>

                                     <option value="3" {{ ($user->role == 3) ? 
                                           'selected' : null }}>user</option>
                                    </select>
                                  </form>
                              </div>
                            @endif  
                            </td>
                          </tr>
                         @endforeach



                        </tbody>
                      </table>
                    </div> 
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection