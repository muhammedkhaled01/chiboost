@section('sidebar')
    <aside class="sidebar">
        <ul class="slide-menu">
            <li class="side-item side-item-category mt-4">Requests</li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#">
                    <i class="fas fa-envelope-open-text"></i>
                    <span class="side-menu__label">Requests</span><i class="fas fa-angle-down"></i>
                    <span class="notifications">1</span>
                </a>
                <ul class="slide-menu-request">
                    <li><a class="slide-item" href="{{route('admin.show','divisions')}}">Divisions</a></li>
                    <li><a class="slide-item" href="{{route('admin.show','netwins')}}">Netwins </a></li>
                    <li><a class="slide-item" href="{{route('admin.show','placements')}}">Placements</a></li>
                </ul>
            </li>
            <li class="side-item side-item-category mt-4">Settings</li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#">
                    <i class="fas fa-envelope-open-text"></i>
                    <span class="side-menu__label">Marketplace</span><i class="fas fa-angle-down"></i>
                </a>
                <ul class="slide-menu-request">
                    <li><a class="slide-item" href="{{route('addNewAccount')}}">Add New Account</a></li>
                </ul>
            </li>
        </ul>
    </aside>
@endsection
