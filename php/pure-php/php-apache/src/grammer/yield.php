<?php
/**
 * @author hiramiya
 */

//  yield が含まれていれば、どんな関数でもジェネレータ関数


// 最もシンプルな書きかたをすると、yield 文の見た目は return 文とほぼ同じになります。 
// ただ、return の場合はそこで関数の実行を終了して値を返すのに対して、 yield の場合はジェネレータを呼び出しているループに値を戻して ジェネレータ関数の実行を一時停止します。


// メリット
// 1. 処理をまとめることができる. イテレータが簡潔に書ける
// 2. メモリの節約ができる


// Traversable インターフェース
// そのクラスの中身がforeaceh を使用してたどれるかどうか

$i_start = memory_get_usage();

function xloop($i_n)
{
    $i = 0;
    while($i < $i_n + 1 ){
        yield $i++;
    }
}

foreach(xloop(1000) as $val){
// foreach(range(1, 1000) as $val){
    echo $val;
}

// object(Generator)#1 (0) { }
// var_dump(xloop(10));

// foreach()
$i_end_memory = memory_get_usage();

echo '<br>';
var_dump($i_end_memory - $i_start);
var_dump(memory_get_peak_usage());
