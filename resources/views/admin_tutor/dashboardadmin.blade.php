@extends('layouts.dashboardadmin')

@section('content')

        <!-- Main Content -->
            <!-- Header -->
            <header class="bg-white p-4 shadow">
                <div class="container mx-auto">
                    <h1 class="text-xl font-semibold text-gray-800">Aplikasi Kursus Bahasa Asing</h1>
                </div>
            </header>

            <!-- Dashboard Content -->
            <div class="container mx-auto p-6 space-y-6">
                <!-- Stats Section -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-lg font-medium text-gray-700 mb-4">Statistik Kursus Bahasa</h2>
                    <div class="flex flex-wrap gap-6 mb-6">
                        <div class="flex items-center w-64">
                            <div class="bg-gray-100 p-3 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-sm font-medium text-gray-500">Total Pengguna</h4>
                                <p class="text-xl font-semibold" id="total-users">5,423</p>
                            </div>
                        </div>
                        <div class="flex items-center w-64">
                            <div class="bg-gray-100 p-3 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-sm font-medium text-gray-500">Total Rencana</h4>
                                <p class="text-xl font-semibold" id="total-plans">6</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <canvas id="enrollmentChart" height="200"></canvas>
                    </div>
                </div>
            </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('w-64');
            sidebar.classList.toggle('w-16');
        }

        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('enrollmentChart').getContext('2d');
            const enrollmentChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Pendaftaran Bulanan',
                        data: [320, 380, 375, 410, 450, 470, 480, 520, 490, 540, 560, 520],
                        borderColor: '#6366f1',
                        tension: 0.3,
                        fill: false
                    }]
                }
            });
        });
    </script>
@endsection