@extends('admin-dashboard.layout-admin-dashboard.layout')
@include('admin-dashboard.layout-admin-dashboard.sidebar')
@section('content')
    @if (session()->has('delete'))

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong> {{ session()->get('delete') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="request">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">current_rank</th>
                <th scope="col">league_points</th>
                <th scope="col">server</th>
                <th scope="col">queue</th>
                <th scope="col">roleType</th>
                <th scope="col">desired_rank</th>
                <th scope="col">options</th>
                <th scope="col">price</th>
                <th scope="col">actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $index = 1;?>
            @foreach($requests as $request)
                <tr>
                    <th scope="row">{{$index++}}</th>
                    <td>{{$request->current_rank}}</td>
                    <td>{{$request->league_points}}</td>
                    <td>{{$request->server}}</td>
                    <td>{{$request->queue}}</td>
                    <td>{{$request->roleType}}</td>
                    <td>{{$request->desired_rank}}</td>
                    <td>{{$request->options}}</td>
                    <td>{{$request->price}}</td>
                    <td>
                        <a class="modal-effect btn btn-sm btn-info" data-bs-toggle="modal"
                           data-bs-target="#viewModal{{$request->id}}"
                           title="view"><i class="fas fa-eye"></i></a>


                        <a class="modal-effect btn btn-sm btn-danger" data-bs-toggle="modal"
                           data-bs-target="#exampleModal{{$request->id}}"
                           title="delete"><i class="fas fa-trash"></i></a>
                        <div class="modal fade" id="exampleModal{{$request->id}}" tabindex="-1"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <form action="{{route('admin.destroy',$request->id)}}" method="post">
                                        {{method_field('delete')}}
                                        @csrf
                                        <div class="modal-body">
                                            are sure of the deleting process ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="viewModal{{$request->id}}" tabindex="-1"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Name: {{$request->username}}</p>
                                        <p>Phone: {{$request->phone}}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Close
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>
        <!-- delete -->
        <!-- Modal -->

    </div>
@endsection
