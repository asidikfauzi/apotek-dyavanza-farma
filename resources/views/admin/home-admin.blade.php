@extends('layouts.app')

<link rel="stylesheet" type="text/css" href="{{asset('css/home-admin.css')}}">

@section('content')

<section class="page-section">
	
    <div class="content">
        <form method="POST" action="{{ url('pemain') }}"> 
            <h1 class="text-center text-uppercase">APOTEK DYVANZA FARMA</h1>
            <p class="text-center">DAFTAR OBAT APOTEK DYVANZA FARMA</p><br>
            <div class="topnav">        
                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search . . " name="search">
                        <button type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div div id="grid" class="row">
                    @foreach ($data as $item)
                        <div class="mix col-sm-4 margin30">
                            <div class="item-img-wrap">
                                <a href="#" class="show-name">
                                    <img src="{{asset('assets/img/obat/'.$item['image'])}}" class="rounded mx-auto d-block" alt="image pemain" style="">
                                    <div class="item-img-overlay">
                                        <center><h5><span>{{$item['nama']}} / Rp. {{$item['harga']}}</span></h5></center> 
                                        <center><span>Stok {{$item['stok']}}</span></center>       
                                    </div>
                                </a>
                            </div> 
                        </div>                                                    
                    @endforeach
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
  
@endsection
