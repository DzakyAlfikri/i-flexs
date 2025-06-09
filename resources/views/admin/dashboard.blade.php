@extends('layouts.admin')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <!-- Stats Cards -->
        <div class="row g-4 mb-4">
            <div class="col-md-3">
                <div class="card stat-card">
                    <div class="d-flex align-items-center">
                        <div class="stat-icon me-3">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div>
                            <h3 class="mb-1">150</h3>
                            <p class="mb-0">Total Devices</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card">
                    <div class="d-flex align-items-center">
                        <div class="stat-icon me-3">
                            <i class="fas fa-users"></i>
                        </div>
                        <div>
                            <h3 class="mb-1">1,240</h3>
                            <p class="mb-0">Active Users</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card">
                    <div class="d-flex align-items-center">
                        <div class="stat-icon me-3">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div>
                            <h3 class="mb-1">450</h3>
                            <p class="mb-0">Active Rentals</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card">
                    <div class="d-flex align-items-center">
                        <div class="stat-icon me-3">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <div>
                            <h3 class="mb-1">$52,580</h3>
                            <p class="mb-0">Revenue</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Orders -->
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title mb-4">Recent Orders</h5>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Device</th>
                                <th>Duration</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#ORD001</td>
                                <td>John Doe</td>
                                <td>iPhone 15 Pro</td>
                                <td>7 Days</td>
                                <td>$350</td>
                                <td><span class="status-badge status-active">Active</span></td>
                            </tr>
                            <tr>
                                <td>#ORD002</td>
                                <td>Jane Smith</td>
                                <td>iPhone 16</td>
                                <td>14 Days</td>
                                <td>$650</td>
                                <td><span class="status-badge status-pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>#ORD003</td>
                                <td>Mike Johnson</td>
                                <td>iPhone 15</td>
                                <td>30 Days</td>
                                <td>$1200</td>
                                <td><span class="status-badge status-active">Active</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Charts Row -->
        <div class="row g-4">
            <div class="col-md-8">
                <div class="chart-container">
                    <h5 class="mb-4">Revenue Overview</h5>
                    <canvas id="revenueChart"></canvas>
                </div>
            </div>
            <div class="col-md-4">
                <div class="chart-container">
                    <h5 class="mb-4">Device Distribution</h5>
                    <canvas id="deviceChart"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection