@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-11 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <h1 class="font-weight-bolder">
                                        Pusat Data Gereja Bampel
                                    </h1>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section>
                <div class="container">
                    <div class="row">
                <div class="col mt-8">
                        <div class="card" style="width: 18rem;">
                            <img src="{{Asset ('img\IMG_8850.JPG')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Visualisasi Tablo</h5>
                              <p class="card-text">Tablo gereja Katolik seringkali menjadi bagian penting dari seni dan budaya Katolik, dan mereka dapat ditemukan dalam gereja-gereja Katolik di seluruh dunia.
                                 Mereka dapat berfungsi sebagai alat pengajaran dan inspirasi rohani bagi para jemaat.</p>
                             
                            </div>
                          </div>     
                 </div>
                 <div class="col mt-8">
                    <div class="card" style="width: 18rem;">
                        <img src="{{Asset ('img\IMG_0198.JPG')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Rally Rosario</h5>
                          <p class="card-text">sebuah acara atau kegiatan yang diselenggarakan dalam rangka mengumpulkan banyak orang untuk berdoa Rosario bersama-sama. 
                            Ini bisa menjadi bentuk doa publik yang diorganisir untuk menghormati Perawan Maria atau memohon perlindungannya.</p>
                         
                        </div>
                      </div>     
             </div>
             <div class="col mt-8">
                <div class="card" style="width: 18rem;">
                    <img src="{{Asset ('img/AN400707.JPG')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">OMK</h5>
                      <p class="card-text">Organisasi OMK ( Orang Muda Katolik) adalah organisasi yang ditujukan untuk para pemuda dan remaja Katolik yang ingin terlibat dalam komunitas gereja, pertumbuhan spiritual, dan pelayanan.</p>
                      
                    </div>
                  </div>     
         </div>
                    </div>
                    </div>
                </div>
                </div>
            </section>
            

        @include('layouts.footers.auth.footer')
    </div>
@endsection



@push('js')
    <script src="./assets/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(251, 99, 64, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(251, 99, 64, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(251, 99, 64, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#fb6340",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
@endpush
