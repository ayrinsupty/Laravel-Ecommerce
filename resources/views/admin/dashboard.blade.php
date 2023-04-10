@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        @if(Session('message'))
            <h2 class="alert alert-success">{{ Session('message') }}</h2>
        @endif

        <div class="me-md-3 me-xl-5">
            <h2>Dashboard</h2>
            <p class="mb-md-0">Your analytics dashboard template.</p>
            <hr>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card card-body bg-primary text-white mb-3">
                    <label>Total Orders</label>
                    <h4>{{ $totalOrder }}</h4>
                    <a href="{{ url('admin/orders') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-success text-white mb-3">
                    <label>Today's Orders</label>
                    <h4>{{ $todayOrder }}</h4>
                    <a href="{{ url('admin/orders') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-warning text-white mb-3">
                    <label>This Month's Orders</label>
                    <h4>{{ $thisMonthOrder }}</h4>
                    <a href="{{ url('admin/orders') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-danger text-white mb-3">
                    <label>This Year's Orders</label>
                    <h4>{{ $thisYearOrder }}</h4>
                    <a href="{{ url('admin/orders') }}" class="text-white">View</a>
                </div>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-3">
                <div class="card card-body bg-primary text-white mb-3">
                    <label>Total Products</label>
                    <h4>{{ $totalProducts }}</h4>
                    <a href="{{ url('admin/products') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-success text-white mb-3">
                    <label>Total Categories</label>
                    <h4>{{ $totalCategories }}</h4>
                    <a href="{{ url('admin/category') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-warning text-white mb-3">
                    <label>Total Brands</label>
                    <h4>{{ $totalBrands }}</h4>
                    <a href="{{ url('admin/brands') }}" class="text-white">View</a>
                </div>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-3">
                <div class="card card-body bg-primary text-white mb-3">
                    <label>All Users</label>
                    <h4>{{ $totalAllUsers }}</h4>
                    <a href="{{ url('admin/users') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-success text-white mb-3">
                    <label>Total Users</label>
                    <h4>{{ $totalUser }}</h4>
                    <a href="{{ url('admin/users') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-warning text-white mb-3">
                    <label>Total Admins</label>
                    <h4>{{ $totalAdmin }}</h4>
                    <a href="{{ url('admin/users') }}" class="text-white">View</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
