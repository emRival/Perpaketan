<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Paket IDN</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" >

    <link rel="stylesheet" href="{{asset('atlantis/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('atlantis/assets/css/atlantis.min.css')}}">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{asset('atlantis/assets/css/demo.css')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @livewireScripts
</head>

<body class="m-0 h-100">
    <nav class="navbar navbar-light bg-light" style="background-color: blue !important;">
        <a class="navbar-brand">Navbar</a>

        <form class="form-inline container" style="justify-content: end;"  action="{{route('cari-landing')}}">
            <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
            
        </form>
        @if (Route::has('login'))
        @auth
        <a style="color: white;" href="{{ url('/home') }}" class="btn btn-primary">Home</a>
        @else
        <a href="{{ route('login') }}" class="btn btn-primary me-2">Log in</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
        @endauth
        @endif
    </nav>
    <div style="margin-top: 50px;">
        <div class="container">
            <div class="card " style="border-radius: 20px;">
                <h5 style="background-color: #0099ff; border-radius: 20px; color:white;" class="card-header text-center"><strong>Data Paket IDN</strong></h5>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tgl.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Ekspedisi</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($search == true) 
                        @foreach($barang as $row)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$row->tanggal_input}}</td>
                            <td>{{$row->siswa->nama_siswa}}</td>
                            <td>{{$row->nama_barang}}</td>
                            <td>{{$row->ekspedisi}}</td>
                            <td class="">
                                @if ($row->status == 'satpam')
                                <span class="badge bg-warning" style="color: white;"><i class="fas fa-store-alt"></i> POS SATPAM</span>
                                @endif
                                @if ($row->status == 'musyrif')

                                <span class="badge bg-primary" style="color: white;"><i class="fas fa-boxes"></i> RUANG MUSYRIF</span>
                                @endif
                                @if ($row->status == 'selesai')

                                <span class="badge bg-success" style="color: white;"><i class="fas fa-box-open"></i> SELESAI</span>
                                @endif
                            </td>
                        </tr>


                        @endforeach
                        @endif

                        @if ($search == false)
                        @foreach($barang as $row)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$row->tanggal_input}}</td>
                            <td>{{$row->siswa->nama_siswa}}</td>
                            <td>{{$row->nama_barang}}</td>
                            <td>{{$row->ekspedisi}}</td>
                            <td class="">
                                @if ($row->status == 'satpam')
                                <span class="badge bg-warning" style="color: white;"><i class="fas fa-store-alt"></i> POS SATPAM</span>
                                @endif
                                @if ($row->status == 'musyrif')

                                <span class="badge bg-primary" style="color: white;"><i class="fas fa-boxes"></i> RUANG MUSYRIF</span>
                                @endif
                                @if ($row->status == 'selesai')

                                <span class="badge bg-success" style="color: white;"><i class="fas fa-box-open"></i> SELESAI</span>
                                @endif
                            </td>
                        </tr>


                        @endforeach
                        @foreach($barangselesai as $row)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$row->tanggal_input}}</td>
                            <td>{{$row->siswa->nama_siswa}}</td>
                            <td>{{$row->nama_barang}}</td>
                            <td>{{$row->ekspedisi}}</td>
                            <td class="">
                                @if ($row->status == 'satpam')
                                <span class="badge bg-warning" style="color: white;"><i class="fas fa-store-alt"></i> POS SATPAM</span>
                                @endif
                                @if ($row->status == 'musyrif')

                                <span class="badge bg-primary" style="color: white;"><i class="fas fa-boxes"></i> RUANG MUSYRIF</span>
                                @endif
                                @if ($row->status == 'selesai')

                                <span class="badge bg-success" style="color: white;"><i class="fas fa-box-open"></i> SELESAI</span>
                                @endif
                            </td>
                        </tr>


                        @endforeach
@endif

                    </tbody>
                </table>
                <div class="justfy-content-start">
                    <div class="dataTables_paginate paging_simple_numbers ml-3 mt-2" id="add-row_paginate">
                        {{ $barang->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>

        </div>
    </div>



    <footer style="margin-top: -120px;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0099ff" fill-opacity="1" d="M0,192L288,32L576,192L864,160L1152,128L1440,0L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path>
        </svg>
    </footer>

    <!--   Core JS Files   -->
    <script src="{{asset('atlantis/assets/js/core/jquery.3.2.1.min.js')}}"></script>
    <script src="{{asset('atlantis/assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('atlantis/assets/js/core/bootstrap.min.js')}}"></script>

    <!-- jQuery UI -->
    <script src="{{asset('atlantis/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
    <script src="{{asset('atlantis/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{asset('atlantis/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>


    <!-- Chart JS -->
    <script src="{{asset('atlantis/assets/js/plugin/chart.js/chart.min.js')}}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{asset('atlantis/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Chart Circle -->
    <script src="{{asset('atlantis/assets/js/plugin/chart-circle/circles.min.js')}}"></script>

    <!-- Datatables -->
    <script src="{{asset('atlantis/assets/js/plugin/datatables/datatables.min.js')}}"></script>

    <!-- Bootstrap Notify -->
    <!-- <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> -->

    <!-- jQuery Vector Maps -->
    <script src="{{asset('atlantis/assets/js/plugin/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('atlantis/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js')}}"></script>

    <!-- Sweet Alert -->
    <script src="{{asset('atlantis/assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

    <!-- Atlantis JS -->
    <script src="{{asset('atlantis/assets/js/atlantis.min.js')}}"></script>

    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="{{asset('atlantis/assets/js/setting-demo.js')}}"></script>
    <script src="{{asset('atlantis/assets/js/demo.js')}}"></script>
</body>

</html>