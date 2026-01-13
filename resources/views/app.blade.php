<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Archive EMP')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville+SC:wght@400..700&display=swap" rel="stylesheet">
        


 


    <style>
        body {
            background: #f5f5f5;
        }

        .navbar {
            background: #1f2937;
        }

        .subject-btn {
            background: #ffd400;
            border-radius: 30px;
            font-weight: 600;
        }

        .archive-card {
            background: #fff;
            border-radius: 12px;
            border: 2px solid #999;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .archive-card h5 {
            text-align: center;
            font-weight: 700;
            margin-top: 12px;
        }

        .archive-card .icon {
            font-size: 32px;
            text-align: center;
            margin-top: 6px;
        }

        .file-list {
            padding: 16px;
            flex-grow: 1;
        }

        .file-item {
            background: #e0e0e0;
            border-radius: 8px;
            padding: 12px 14px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
        }
        .archive{
            font-family: 'Baskervville SC', serif;
            font-optical-sizing: auto;
            font-style: normal;
        }
    </style>
</head>
<body>

{{-- Navbar --}}
<nav class="navbar navbar-expand-lg px-3">
    <button class="btn btn-outline-light me-3">
        <i class="bi bi-list"></i>
    </button>
    <div class="">
        <a class="archive navbar-brand text-white " href="{{ route('dashboard') }}">
            ARCHIVE EMP
        </a>
         <img src="{{ asset('logo/logo.png') }}" alt="logo emp" style="height:70px; width:44px; margin-left:1px;">
    </div>    
    
    
    <div class="mx-auto" style="max-width:420px;width:100%;">
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-search"></i></span>
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-text"><i class="bi bi-mic"></i></span>
        </div>
    </div>

    <div class="d-flex gap-3">
        <i class="bi bi-bag text-white fs-5"></i>
        <i class="bi bi-person-circle text-white fs-5"></i>
    </div>
</nav>

{{-- Page Content --}}
@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>