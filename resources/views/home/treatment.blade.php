<div  aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="{{route('userpanel.index')}}">Our Treatments</a>
    @foreach($data as $rs)
    <a class="dropdown-item" href="dashboard.html">{{$rs->title}}</a>
    @endforeach

</div>
