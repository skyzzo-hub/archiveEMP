@extends('layouts.app')

@section('title', 'Graph Theory')

@section('content')
  <div class="min-h-screen pt-24 pb-12">
            <div class="container mx-auto px-4 lg:px-8">
                <div class="text-center mb-16">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-light-custom tracking-tight mb-6 gradient-text drop-shadow-2xl">📚 Archives Académiques</h1>
                    <p class="text-lg md:text-xl lg:text-2xl text-gray-200 font-light-custom tracking-tight">École Militaire Polytechnique</p>
                    <div class="h-1 w-40 mx-auto mt-6 rounded-full bg-gradient-to-r from-yellow-400 to-orange-500 shadow-lg"></div>
                </div>

                <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
                    <!-- Card Semestre 1 -->
                    <div class="card-s1 rounded-3xl overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-500">
                        <div class="header-s1 p-8">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h2 class="text-3xl lg:text-4xl font-light-custom tracking-tight text-white mb-2 drop-shadow-lg">Semestre 1</h2>
                                    <p class="text-yellow-100 text-base font-light-custom tracking-tight opacity-90">11 Modules disponibles</p>
                                </div>
                                <div class="rounded-full p-5 bg-yellow-500 bg-opacity-30 backdrop-blur-sm shadow-xl">
                                    <svg class="w-10 h-10 lg:w-12 lg:h-12 text-yellow-100" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2L3 7v10c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-9-5zm0 10H7v-2h5V7l5 5-5 5v-5z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-8 space-y-4 max-h-96 overflow-y-auto">
                        @foreach($modules as $m)
                        @if( $m->semestre == 1)
                           <a href="archive/{{$m->id}}" class="module-item module-item-s2 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s2 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">{{$m->id}}</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">{{$m->name}}</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        @endif
                        @endforeach
                        </div>
                    </div>









                    <!-- Card Semestre 2 -->
                    <div class="card-s2 rounded-3xl overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-500">
                        <div class="header-s2 p-8">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h2 class="text-3xl lg:text-4xl font-light-custom tracking-tight text-white mb-2 drop-shadow-lg">Semestre 2</h2>
                                    <p class="text-blue-100 text-base font-light-custom tracking-tight opacity-90">12 Modules disponibles</p>
                                </div>
                                <div class="rounded-full p-5 bg-blue-500 bg-opacity-30 backdrop-blur-sm shadow-xl">
                                    <svg class="w-10 h-10 lg:w-12 lg:h-12 text-blue-100" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM7 10h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-8 space-y-4 max-h-96 overflow-y-auto">
                          @foreach($modules as $m) 
                          @if($m->semestre==2)
                            <a href="archive/{{$m->id}}" class="module-item module-item-s2 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s2 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">{{$m->id}}</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">{{$m->name}}</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                          @endif
                           @endforeach 

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <script>
        fumction handleDasbaord($id) {

        }
    </script>
@endsection
