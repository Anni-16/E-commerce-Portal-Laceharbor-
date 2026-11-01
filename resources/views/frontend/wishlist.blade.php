@extends('frontend.layouts.master')

@section('content')

<div class="breadcrumb-bar">
    <a href="{{ url('/') }} }}">Home</a><span>/</span> My Wishlist
</div>

<section class="wishlist-section">
    <div class="wishlist-header">
        <h2>My Wishlist</h2>
        <span id="wishCount">0 Items</span>
    </div>

    <!-- DYNAMIC GRID -->
    <div class="wishlist-grid" id="wishlistGrid"></div>

    <!-- EMPTY STATE -->
    <div class="wish-empty" id="wishEmpty" style="display:none">
        <i class="fas fa-heart"></i>
        <p>Your wishlist is empty</p>
        <a href="{{ route('products') }}" class="btn-primary">Explore Products</a>
    </div>
</section>


@endsection