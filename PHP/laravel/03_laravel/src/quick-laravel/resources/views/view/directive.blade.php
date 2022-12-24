{{-- 変数によって、表示非表示が設定できる --}}
@env('local')
<p>local環境の時のみ表示</p>
@endenv

@env('kensyo')
<p>検証環境の時のみ表示</p>
@endenv

{{-- 否定条件 --}}
@unless(50 === 10)
<p>否定条件で、unlessというディレクティブがある。</p>
@endunless

@for($i=0; $i<6; $i++)
    <h{{ $i }}>あん♡</h{{ $i }}>
@endfor

{{-- 変数の有無を判定するディレクティブ --}}
@isset($set)
    <p>値あり！</p>
@else
{{-- elseも使えるよ --}}
    <p>値が無い．．．だと！？</p>
@endisset

@empty($empty)
    <p>値なし．．．</p>
@endempty

{{-- switch --}}
@switch($random)
    @case(0)
        <p>大吉や！</p>
        @break
    @case(1)
        <p>普通やな</p>
        @break
    @case(2)
        <p>今日死にます</p>
        @break
    @default
        <p>は？</p>
@endswitch

{{-- loop変数という特殊なやつ --}}
<table class="table">
    <tr>
        <th>値</th>
        <th>index</th>
        <th>iteration</th>
        <th>count</th>
        <th>first</th>
        <th>last</th>
        <th>even</th>
        <th>odd</th>
        <th>depath</th>
    </tr>
    @forelse($weeks as $week)
        {{-- forelseだと、配下にemptyディレクティブをおける --}}
        
    {{-- continue --}}
    @continue($loop->even)
    {{-- break --}}
    @break($loop->iteration > 6)
    <tr>
        <td>{{ $week }}</td>
        <td>{{ $loop->index }}</td>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $loop->count }}</td>
        <td>{{ $loop->first }}</td>
        <td>{{ $loop->last }}</td>
        <td>{{ $loop->even }}</td>
        <td>{{ $loop->odd }}</td>
        <td>{{ $loop->depth }}</td>
    </tr>
    @endforelse
</table>