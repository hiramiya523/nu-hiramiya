<?php
require_once __DIR__ . '/../vendor/autoload.php';

// 用紙の向き・unit単位・用紙フォーマットを指定します
$tcpdf = new TCPDF('L', "mm", 'A4');
$tcpdf->setPrintHeader(false);
$tcpdf->setPrintFooter(false);
$tcpdf->AddPage();
// htmlの中身を書いていきます
$html = 'tesuto';
// 改行あり、テキスト整列等の設定
$tcpdf->WriteHTML($html, true, 0, false, true, 'L');
// パスとファイル名を指定
$fileName = __DIR__ . '/'. 'test.pdf';
// F：ローカルファイルに保存
$tcpdf->Output($fileName, "F");