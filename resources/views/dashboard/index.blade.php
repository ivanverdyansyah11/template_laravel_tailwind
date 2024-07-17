@extends('template.main')

@section('content-dashboard')
    <div class="container mt-4 px-[1.5rem]">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-3 lg:gap-4">
            <div class="card-menu">
                <div class="menu-icon">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="menu-value">
                    <p>Total Customer</p>
                    <h6>123</h6>
                </div>
            </div>
            <div class="card-menu">
                <div class="menu-icon">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="menu-value">
                    <p>Total Customer</p>
                    <h6>123</h6>
                </div>
            </div>
            <div class="card-menu">
                <div class="menu-icon">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="menu-value">
                    <p>Total Customer</p>
                    <h6>123</h6>
                </div>
            </div>
            <div class="card-menu">
                <div class="menu-icon">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="menu-value">
                    <p>Total Customer</p>
                    <h6>123</h6>
                </div>
            </div>
        </div>
        <div class="w-full mt-4">
            <div class="card-canvas">
                <canvas id="myChart" style="height: 420px; width: 100%;"></canvas>
            </div>
        </div>
    </div>
@endsection

@push('child-script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    data: [50, 100, 50, 100, 50, 100, 50, 100, 50, 100, 50, 100],
                    backgroundColor: [
                        'rgba(189, 150, 72, 1)',
                        'rgba(172, 132, 62, 1)',
                        'rgba(189, 150, 72, 1)',
                        'rgba(172, 132, 62, 1)',
                        'rgba(189, 150, 72, 1)',
                        'rgba(172, 132, 62, 1)',
                        'rgba(189, 150, 72, 1)',
                        'rgba(172, 132, 62, 1)',
                        'rgba(189, 150, 72, 1)',
                        'rgba(172, 132, 62, 1)',
                        'rgba(189, 150, 72, 1)',
                        'rgba(172, 132, 62, 1)',
                    ],
                    borderWidth: 1,
                    borderColor: 'rgba(255, 255, 255, 0.12)',
                    borderRadius: 8,
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    },
                },
            }
        });
    </script>
@endpush
