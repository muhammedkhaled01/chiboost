@extends('admin-dashboard.layout-admin-dashboard.layout')
@include('admin-dashboard.layout-admin-dashboard.sidebar')
@section('content')

    <form class="container" action="{{route('saveAccount')}}" method="post">

        @csrf
        <div class="row">
            <div class="col-sm-8 m-auto add-account">
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                <div class="form-group">
                    <label for="server">Server</label>
                    <select class="form-select" name="server" id="server">
                        <option>EUW</option>
                        <option>EUNE</option>
                        <option>LAN</option>
                        <option>LAS</option>
                        <option>NA</option>
                        <option>OCE</option>
                        <option>TR</option>
                        <option>RU</option>
                    </select>

                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" class="form-control" placeholder="0">
                    @if ($errors->has('price'))
                        <span class="text-danger">{{ $errors->first('price') }}</span>
                    @endif
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-checkout mt-3 w-50 m-auto">Save</button>
                </div>

            </div>
        </div>
    </form>
@endsection
