@foreach( $list as $link => $name)
    <ul>
        <li><a href="{{ $link }}">{{ $name }}</a></li>
    </ul>
@endforeach
