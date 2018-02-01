<ul class="nav">
    <li{{ (Request::is('home*') ? ' class="active"' : '') }}>
        <a href="{{ url('/home') }}">
            <i class="glyphicon glyphicon-home"></i>
            <p> Dashboard </p>
        </a>
    </li>
    <li{{ (Request::is('gallery*') ? ' class="active"' : '') }}>
        <a href="{{ url('/gallery') }}">
            <i class="	glyphicon glyphicon-picture"></i>
            <p> Gallery </p>
        </a>
    </li>
</ul>
