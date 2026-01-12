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
                        <a href="archive/2" class="module-item module-item-s1 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
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
                            <a href="archive/1" class="module-item module-item-s1 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
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
                            <a href="archive/7" class="module-item module-item-s1 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
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
                            <a href="archive/4" class="module-item module-item-s1 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s1 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">4</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">Théorie de Signal</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="archive/3" class="module-item module-item-s1 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s1 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">5</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">Théorie de l'information</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="archive/9" class="module-item module-item-s1 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s1 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">6</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">PAFA</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="archive/8" class="module-item module-item-s1 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s1 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">7</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">Concepts de base de Réseau </span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="archive/5" class="module-item module-item-s1 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s1 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">8</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">Base de Données avancée</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="archive/6" class="module-item module-item-s1 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s1 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">9</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">Analyse des donneés </span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="archive/10" class="module-item module-item-s1 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s1 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">10</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">Anglais I</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="archive/11" class="module-item module-item-s1 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s1 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">11</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">Français I</span>
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
                                <div class="rounded-full p-5 bg-blue-500 bg-opacity-30 backdrop-blur-sm shadow-xl">
                                    <svg class="w-10 h-10 lg:w-12 lg:h-12 text-blue-100" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM7 10h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-8 space-y-4 max-h-96 overflow-y-auto">

                            <a href="archive/11" class="module-item module-item-s2 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s2 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">1</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">Traitement d'image</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="archive/12" class="module-item module-item-s2 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s2 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">2</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">IA</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="archive/13" class="module-item module-item-s2 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s2 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">3</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">Infog</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="archive/14" class="module-item module-item-s2 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s2 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">4</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">optimisation</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="archive/15" class="module-item module-item-s2 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s2 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">5</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">SED</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="archive/16" class="module-item module-item-s2 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s2 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">6</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">IP</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="archive/17" class="module-item module-item-s2 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s2 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">7</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">complexité</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="archive/18" class="module-item module-item-s2 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s2 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">8</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">compilation</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="archive/19" class="module-item module-item-s2 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s2 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">9</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">Sécurity informatique</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="archive/20" class="module-item module-item-s2 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s2 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">10</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">COO</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="archive/21" class="module-item module-item-s2 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s2 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">11</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">Anglais II</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="archive/22" class="module-item module-item-s2 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s2 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">12</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">Français II</span>
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
