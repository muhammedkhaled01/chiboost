@extends('admin-dashboard.layout-admin-dashboard.layout')
@include('admin-dashboard.layout-admin-dashboard.sidebar')
@section('content')

    <div class="request">
        @if (session()->has('delete'))

            <div class="alert alert-danger alert-dismissible fade show" style="width: 97%" role="alert">
                <strong> {{ session()->get('delete') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <form class="d-flex mt-3 mb-3" method="POST" action="/admin/{id}">
                    @csrf
                    <input class="form-control me-2 w-25" name="q" id="q" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Current Rank</th>
                @if ($pageName == 'divisions')
                    <th scope="col">League Points</th>
                @endif
                <th scope="col">Server</th>
                <th scope="col">Queue</th>
                <th scope="col">Role Type</th>
                @if ($pageName == 'divisions')
                    <th scope="col">Desired Rank</th>
                @endif
                @if($pageName == 'divisions')
                    <th scope="col">Options</th>
                @endif
                @if($pageName =='netwins')
                    <th scope="col">Wins</th>
                @endif
                @if($pageName =='placements')
                    <th scope="col">Games</th>
                @endif
                <th scope="col">Code</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $index = 1; ?>
            @foreach ($requests as $request)
                <tr>
                    <th scope="row">{{ $index++ }}</th>
                    <td>{{ $request->current_rank }}</td>
                    @if ($pageName == 'divisions')
                        <td>{{ $request->league_points }}</td>
                    @endif

                    <td>{{ $request->server }}</td>
                    <td>{{ $request->queue }}</td>
                    <td>{{ $request->roleType }}</td>
                    @if ($pageName == 'divisions')
                        <td>{{ $request->desired_rank }}</td>
                    @endif
                    @if($pageName =='divisions')
                        <td>{{ $request->options }}</td>
                    @endif
                    @if($pageName =='netwins')
                        <td>{{$request->wins}}</td>
                    @endif
                    @if($pageName =='placements')
                        <td>{{$request->games}}</td>
                    @endif
                    <td> <b>{{$request->id }}</b></td>
                    <td>$ {{$request->price }}</td>
                    <td>
                        <a class="modal-effect btn btn-sm btn-info" data-bs-toggle="modal"
                           data-bs-target="#viewModal{{ $request->id }}" title="view"><i
                                class="fas fa-eye"></i></a>


                        <a class="modal-effect btn btn-sm btn-danger" data-bs-toggle="modal"
                           data-bs-target="#exampleModal{{ $request->id }}" title="delete"><i
                                class="fas fa-trash"></i></a>
                        <div class="modal fade" id="exampleModal{{ $request->id }}" tabindex="-1"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('admin.destroy', $request->id) }}" method="post">
                                        {{ method_field('delete') }}
                                        @csrf
                                        <div class="modal-body content-modal">
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
                        <div class="modal fade" id="viewModal{{ $request->id }}" tabindex="-1"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body content-modal">
                                        <p>Name: {{ $request->username }}</p>
                                        <p>Phone: {{ $request->phone }}</p>
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
