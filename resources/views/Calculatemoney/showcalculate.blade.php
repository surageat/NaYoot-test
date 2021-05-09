@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-7">
                <a href="javascript:history.back()" class="btn btn-danger btn-lg col-4">ย้อนหลับ</a>
                <a href="{{ url('/home') }}" class="btn btn-success btn-lg col-4">กลับสู่หน้าหลัก</a>
            </div>
        </div><br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">ผลสรุปการซื้อของ</div>
                    <div class="card-body">
                        <?php if ($money >= 25) {

                        echo '-- ร้านค้าที่ 1 --<br />';
                        $shop1 = $money;
                        if ($shop1) {
                        /*จำนวนสินค้า*/
                        $amount = $money / 25;
                        echo 'จำนวนสินค้าที่ได้ ' . floor($amount) . 'ชิ้น ';
                        if (floor($amount) >= 10) {
                        $discount = (floor($amount) * 25 * 20) / 100;
                        /* echo 'ส่วนลด ' . $discount . '<br />';*/
                        $sum = $money - floor($amount) * 25;
                        $sumdiscount = $money - $sum - $discount;
                        /* echo 'ต้องจ่าย ' . $sumdiscount . '<br />';*/
                        $discount1 = $money - $sumdiscount;
                        echo 'เงินทอน ' . $discount1 . ' บาท<br />';
                        } else {
                        /*echo 'ส่วนลด ' . $discount . '<br />';*/
                        $sum = $money - floor($amount) * 25;
                        $sumdiscount = $money - $sum;
                        /* echo 'ต้องจ่าย ' . $sumdiscount . '<br />';*/
                        $discount1 = $money - $sumdiscount;
                        echo 'เงินทอน ' . floor($discount1) . ' บาท ';
                        echo 'ไม่มีส่วนลด <br />';
                        }
                        }
                        ?>
                        <br>
                        <?php
                        echo '-- ร้านค้าที่ 2 -- <br />';
                        $shop2 = $money;
                        if ($shop2) {
                        $amount1 = $money / 30;
                        /* echo 'จำนวนสินค้าที่ได้ ' . floor($amount) . 'ชิ้น <br />';*/
                        if (floor($amount1) >= 3) {
                        $total = floor($amount1) + (floor($amount1) * 1) / 3;
                        echo 'จำนวนสินค้าที่ได้ ' . floor($total) . 'ชิ้น ';
                        $sum = $money - floor($amount1) * 30;
                        echo 'เงินทอน ' . $sum . ' บาท<br />';
                        } elseif (floor($amount1) == 0) {
                        $total = floor($amount1) + (floor($amount1) * 1) / 3;
                        /*echo 'จำนวนสินค้าที่ได้ ' . floor($total) . 'ชิ้น ';*/
                        $sum = $money - floor($amount1) * 30;
                        /*echo 'เงินทอน ' . floor($sum) . ' บาท ';*/
                        echo 'เงินไม่พอซื้อ';
                        } else {
                        $total = floor($amount1) + (floor($amount1) * 1) / 3;
                        echo 'จำนวนสินค้าที่ได้ ' . floor($total) . 'ชิ้น ';
                        $sum = $money - floor($amount1) * 30;
                        echo 'เงินทอน ' . floor($sum) . ' บาท ';
                        echo 'ไม่มีของแถม';
                        }
                        }
                        ?>
                        <br><br>
                        <div>
                            <?php if ((floor($amount) >= floor($amount1) && $discount1 > $sum) ||
                            (floor($amount) > floor($amount1) && $discount1 < $sum) || (floor($amount) < floor($amount1) &&
                                $discount1 < $sum)) { echo 'แนะนำให้ซื้อร้านที่ 1 จะคุ้มที่สุด' ; } else {
                                echo 'แนะนำให้ซื้อร้านที่ 2 จะคุ้มที่สุด' ; } } else { echo 'เงินไม่พอซื้อ' ; } ?> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
