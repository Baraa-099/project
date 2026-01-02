<p>introduction to view</p>

{{-- <p>{{ $data }} -- {{ $age }}</p> --}}

To Object class
{{-- <p>{{ $obj -> name }} -- {{ $obj->age }}</p> --}}


{{-- 
{{-- @if( $obj -> name == 'fhd')
    <p>yes is fahed</p>
    @else

    <p>no is fahed</p>

@endif --}}


 {{-- @foreach ( as

    @endforeach --}}



@forelse ( $obj as $_obj)
     <p>{{ $_obj }}</p>
@empty
<p>impty</p>
@endforelse



    {{-- @if ()

    @elseif($condition)
    p
    @elseif($condition)
    p
    @elseif($condition)
    p
    @elseif($condition)
    p
    @else
    p
    @endif --}}
