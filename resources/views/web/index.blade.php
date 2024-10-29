@extends('layouts.app')
 
 @section('content')
 <div class="row">
     <div class="col-2">
         @component('components.sidebar', ['categories' => $categories, 'major_category_names' => $major_category_names])
         @endcomponent
     </div>
     <div class="col-9">
         <h1>おすすめ商品</h1>
         <div class="row">
             <div class="col-4">
                 <a href="#">
                     <img src="{{ asset('img/DSC04063_TP_V4.jpg') }}" class="img-thumbnail">
                 </a>
                 <div class="row">
                     <div class="col-12">
                         <p class="samuraimart-product-label mt-2">
                             どんぐり詰め合わせ<br>
                             <label>￥200</label>
                         </p>
                     </div>
                 </div>
             </div>
             <div class="col-4">
                 <a href="#">
                     <img src="{{ asset('img/elfa_IMG_4454_TP_V4.jpg') }}" class="img-thumbnail">
                 </a>
                 <div class="row">
                     <div class="col-12">
                         <p class="samuraimart-product-label mt-2">
                             おいしい柿<br>
                             <label>￥500</label>
                         </p>
                     </div>
                 </div>
             </div>
 
             <div class="col-4">
                 <a href="#">
                     <img src="{{ asset('img/marbee_DSC0316_TP_V4.jpg') }}" class="img-thumbnail">
                 </a>
                 <div class="row">
                     <div class="col-12">
                         <p class="samuraimart-product-label mt-2">
                             旬なみかん<br>
                             <label>￥1200</label>
                         </p>
                     </div>
                 </div>
             </div>
 
         </div>
 
         <div class="d-flex justify-content-between">
         <h1>新着商品</h1>
            <a href="{{ route('products.index', ['sort' => 'id', 'direction' => 'desc']) }}">もっと見る</a>
         </div>
         <div class="row">
             <div class="col-3">
                 <a href="#">
                     <img src="{{ asset('img/fksyabusameIMG_6086-341_TP_V4.jpg') }}" class="img-thumbnail">
                 </a>
                 <div class="row">
                     <div class="col-12">
                         <p class="samuraimart-product-label mt-2">
                             信楽焼狸<br>
                             <label>￥55000</label>
                         </p>
                     </div>
                 </div>
             </div>
 
             <div class="col-3">
                 <a href="#">
                     <img src="{{ asset('img/nekocyanPAKE5233-481_TP_V4.jpg') }}" class="img-thumbnail">
                 </a>
                 <div class="row">
                     <div class="col-12">
                         <p class="samuraimart-product-label mt-2">
                             ソファー<br>
                             <label>￥35000</label>
                         </p>
                     </div>
                 </div>
             </div>
 
             <div class="col-3">
                 <a href="#">
                     <img src="{{ asset('img/ogasuta458A8165_TP_V4.jpg') }}" class="img-thumbnail">
                 </a>
                 <div class="row">
                     <div class="col-12">
                         <p class="samuraimart-product-label mt-2">
                             コーヒーカップ<br>
                             <label>￥1000</label>
                         </p>
                     </div>
                 </div>
             </div>
 
             <div class="col-3">
                 <a href="#">
                     <img src="{{ asset('img/Tm2132038A3951_TP_V4.jpg') }}" class="img-thumbnail">
                 </a>
                 <div class="row">
                     <div class="col-12">
                         <p class="samuraimart-product-label mt-2">
                             食器セット<br>
                             <label>￥2000</label>
                         </p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 @endsection