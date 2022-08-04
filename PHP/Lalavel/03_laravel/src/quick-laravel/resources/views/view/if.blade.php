{{-- if条件 --}}
@if($radom < 50)
    <p>{{ $radom }}は50未満です。</p>
@else
    <p>{{ $radom }}は50以上です。</p>
@endif