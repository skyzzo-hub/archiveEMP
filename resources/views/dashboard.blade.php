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
                                    <p class="text-yellow-100 text-base font-light-custom tracking-tight opacity-90">10 Modules disponibles</p>
                                </div>
                                <div class="rounded-full p-5 bg-white bg-opacity-20 backdrop-blur-sm shadow-xl">
                                    <svg class="w-10 h-10 lg:w-12 lg:h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-8 space-y-4 max-h-96 overflow-y-auto">
                            <a href="#" class="module-item module-item-s1 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s1 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">1</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">Théorie Des Graphes</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="#" class="module-item module-item-s1 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s1 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">2</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">Théorie De Langage</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="#" class="module-item module-item-s1 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s1 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">3</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">Développement Web</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
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
                                <div class="rounded-full p-5 bg-white bg-opacity-20 backdrop-blur-sm shadow-xl">
                                    <svg class="w-10 h-10 lg:w-12 lg:h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-8 space-y-4 max-h-96 overflow-y-auto">
                            <a href="#" class="module-item module-item-s2 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s2 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">1</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">Analyse Mathématique II</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
@endsection