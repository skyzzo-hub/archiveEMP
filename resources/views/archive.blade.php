@extends('layouts.app')

@section('title', 'Graph Theory')

@section('content')
<div class="mx-auto mt-5 border border-2 rounded-3 drop-shadow-2xl" style="max-width: 1440px; background-color: #1f2937;">
    <div class="container-fluid mt-3">
        <div class="dropdown">
            <button class="btn btn-warning dropdown-toggle mx-3 " type="button" id="dropdownExampleAnimation"data-mdb-dropdown-init data-mdb-ripple-init aria-expanded="false" > 
                Graph Theory
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownExampleAnimation">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
    </div>

    <div class="container-fluid p-4">
        <div class="row g-4">

            {{-- Courses --}}
            <div class="col-md-4">
                <div class="archive-card">
                    <h5>Courses</h5>
                    <div class="icon">📘</div>

                    <div class="file-list">
                        @foreach (['Course 1', 'Course 2', 'Course 3'] as $course)
                            <div class="file-item">
                                {{ $course }}
                                <i class="bi bi-download"></i>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- TD --}}
            <div class="col-md-4">
                <div class="archive-card">
                    <h5>TD</h5>
                    <div class="icon">✏️</div>

                    <div class="file-list">
                        @foreach (['TD 1', 'TD 2'] as $td)
                            <div class="file-item">
                                {{ $td }}
                                <i class="bi bi-download"></i>
                            </div>
                        @endforeach
                    </div>
                    <form action="{{ route('files.upload') }}" method="POST" enctype="multipart/form-data">
                    </form>

                </div>
            </div>

            {{-- Exams --}}
            <div class="col-md-4">
                <div class="archive-card">
                    <h5>Exams</h5>
                    <div class="icon">🎓</div>

                    <div class="file-list">
                        @foreach (['Exam 1', 'Exam 2'] as $exam)
                            <div class="file-item">
                                {{ $exam }}
                                <i class="bi bi-download"></i>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection