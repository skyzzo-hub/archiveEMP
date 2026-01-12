@extends('layouts.app')

@section('title', 'Graph Theory')

@section('content')


<div x-data="{ 
    selectedCategory: 'all', 
    openDropdown: false 
}" class="min-h-screen flex">
    {{-- Sidebar --}}
    <aside 
    x-show="sidebarOpen"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="-translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="-translate-x-full"
    class="fixed lg:relative w-80 h-screen bg-black/40 backdrop-blur-sm border-r border-white/10 p-6 z-40 overflow-y-auto">
    
    <div class="flex items-center justify-between mb-8">
        <h2 class="text-xl font-bold text-white">Modules</h2>
    </div>
    
    {{-- Module List --}}
    <nav class="space-y-2">
        {{-- Current Module Info --}}
    <div class="mt-8 p-4 bg-yellow-500/10 rounded-lg border border-yellow-500/30">
        <h3 class="text-sm font-semibold text-yellow-500 mb-2">Current Module</h3>
        <p class="text-white font-medium">{{ $module->name }}</p>
        
        
        {{-- File counts --}}
        <div class="mt-4 grid grid-cols-3 gap-2 text-center">
            <div class="bg-black/20 rounded p-2">
                <p class="text-xs text-slate-400">Courses</p>
                <p class="text-lg font-bold text-yellow-500">{{ $courses->count() }}</p>
            </div>
            <div class="bg-black/20 rounded p-2">
                <p class="text-xs text-slate-400">Tutorials</p>
                <p class="text-lg font-bold text-yellow-500">{{ $tutorials->count() }}</p>
            </div>
            <div class="bg-black/20 rounded p-2">
                <p class="text-xs text-slate-400">Exams</p>
                <p class="text-lg font-bold text-yellow-500">{{ $exams->count() }}</p>
            </div>
        </div>
    </div>
        <a href="/archive/1" class="block px-4 py-3 rounded-lg {{ $module->id == 1 ? 'bg-yellow-500/20 text-yellow-500 border border-yellow-500/30' : 'text-slate-300 hover:bg-white/5 border border-transparent' }} transition-all duration-200">
            <div class="flex items-center gap-3">
                <span class="text-2xl">📐</span>
                <div class="flex-1 min-w-0">
                    <p class="font-medium truncate">Theorie De Language</p>
                    <p class="text-xs opacity-70">THL resources</p>
                </div>
            </div>
        </a>
        
        <a href="/archive/2" class="block px-4 py-3 rounded-lg {{ $module->id == 2 ? 'bg-yellow-500/20 text-yellow-500 border border-yellow-500/30' : 'text-slate-300 hover:bg-white/5 border border-transparent' }} transition-all duration-200">
            <div class="flex items-center gap-3">
                <span class="text-2xl">⚛️</span>
                <div class="flex-1 min-w-0">
                    <p class="font-medium truncate">Theorie de Graphes</p>
                    <p class="text-xs opacity-70">THG resources</p>
                </div>
            </div>
        </a>
        
        <a href="/archive/3" class="block px-4 py-3 rounded-lg {{ $module->id == 3 ? 'bg-yellow-500/20 text-yellow-500 border border-yellow-500/30' : 'text-slate-300 hover:bg-white/5 border border-transparent' }} transition-all duration-200">
            <div class="flex items-center gap-3">
                <span class="text-2xl">🧪</span>
                <div class="flex-1 min-w-0">
                    <p class="font-medium truncate">Theorie de L'information Module</p>
                    <p class="text-xs opacity-70">THI resources</p>
                </div>
            </div>
        </a>
        
        <a href="/archive/4" class="block px-4 py-3 rounded-lg {{ $module->id == 4 ? 'bg-yellow-500/20 text-yellow-500 border border-yellow-500/30' : 'text-slate-300 hover:bg-white/5 border border-transparent' }} transition-all duration-200">
            <div class="flex items-center gap-3">
                <span class="text-2xl">📡</span>
                <div class="flex-1 min-w-0">
                    <p class="font-medium truncate">Theorie de Signal  Science</p>
                    <p class="text-xs opacity-70">THS resources</p>
                </div>
            </div>
        </a>
        
        <a href="/archive/5" class="block px-4 py-3 rounded-lg {{ $module->id == 5 ? 'bg-yellow-500/20 text-yellow-500 border border-yellow-500/30' : 'text-slate-300 hover:bg-white/5 border border-transparent' }} transition-all duration-200">
            <div class="flex items-center gap-3">
                <span class="text-2xl">📊</span>
                <div class="flex-1 min-w-0">
                    <p class="font-medium truncate">Base de Donnees Module</p>
                    <p class="text-xs opacity-70">BDD resources</p>
                </div>
            </div>
        </a>
        <a href="/archive/5" class="block px-4 py-3 rounded-lg {{ $module->id == 6 ? 'bg-yellow-500/20 text-yellow-500 border border-yellow-500/30' : 'text-slate-300 hover:bg-white/5 border border-transparent' }} transition-all duration-200">
            <div class="flex items-center gap-3">
                <span class="text-2xl">📈</span>
                <div class="flex-1 min-w-0">
                    <p class="font-medium truncate">Analyse de Donnees Module</p>
                    <p class="text-xs opacity-70">ADD resources</p>
                </div>
            </div>
        </a>
        <a href="/archive/5" class="block px-4 py-3 rounded-lg {{ $module->id == 7 ? 'bg-yellow-500/20 text-yellow-500 border border-yellow-500/30' : 'text-slate-300 hover:bg-white/5 border border-transparent' }} transition-all duration-200">
            <div class="flex items-center gap-3">
                <span class="text-2xl">🌐</span>
                <div class="flex-1 min-w-0">
                    <p class="font-medium truncate">Development Web Module</p>
                    <p class="text-xs opacity-70">Web resources</p>
                </div>
            </div>
        </a>
        <a href="/archive/5" class="block px-4 py-3 rounded-lg {{ $module->id == 8 ? 'bg-yellow-500/20 text-yellow-500 border border-yellow-500/30' : 'text-slate-300 hover:bg-white/5 border border-transparent' }} transition-all duration-200">
            <div class="flex items-center gap-3">
                <span class="text-2xl">🔌</span>
                <div class="flex-1 min-w-0">
                    <p class="font-medium truncate">Reseau Module</p>
                    <p class="text-xs opacity-70">RSX resources</p>
                </div>
            </div>
        </a>
        <a href="/archive/5" class="block px-4 py-3 rounded-lg {{ $module->id == 9 ? 'bg-yellow-500/20 text-yellow-500 border border-yellow-500/30' : 'text-slate-300 hover:bg-white/5 border border-transparent' }} transition-all duration-200">
            <div class="flex items-center gap-3">
                <span class="text-2xl">🎲</span>
                <div class="flex-1 min-w-0">
                    <p class="font-medium truncate">Random Processes and Queues Module</p>
                    <p class="text-xs opacity-70">PAFA resources</p>
                </div>
            </div>
        </a>
    </nav>
</aside>

    {{-- Main Content Area --}}
    <div class="flex-1 p-8 overflow-y-auto">
        

        {{-- Main Container --}}
    <div class="w-full max-w-7xl mx-auto mt-10 bg-gray/40 backdrop-blur-sm rounded-3xl p-10 shadow-[0_20px_60px_rgba(0,0,0,0.5),0_10px_30px_rgba(0,0,0,0.4)] relative overflow-hidden border border-1 border-gray/100" x-data="{ selectedCategory: 'all', openDropdown: false }">
        
        {{-- Top Gold Accent Line --}}
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-yellow-600/40 to-transparent"></div>
        
        {{-- Dropdown Menu Section --}}
        <div class="mb-8">
            
            <div class="relative">
                <button 
                    @click="openDropdown = !openDropdown"
                    class="w-full md:w-96 bg-black/30 backdrop-blur-sm text-slate-100 px-6 py-4 rounded-xl border border-white/10 shadow-[0_4px_12px_rgba(0,0,0,0.3)] flex items-center justify-between transition-all duration-300 hover:shadow-[0_6px_20px_rgba(218,165,32,0.2)] hover:border-yellow-600/30 group">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-lg flex items-center justify-center shadow-[0_4px_12px_rgba(218,165,32,0.4)]">
                            <span class="text-slate-900 text-lg" x-text="selectedCategory === 'all' ? '📚' : selectedCategory === 'courses' ? '🎓' : selectedCategory === 'tutorials' ? '📖' : '📝'"></span>
                        </div>
                        <span class="font-semibold" x-text="selectedCategory === 'all' ? 'All Resources' : selectedCategory === 'courses' ? 'Courses' : selectedCategory === 'tutorials' ? 'Tutorials' : 'Exams'"></span>
                    </div>
                    <svg class="w-5 h-5 text-yellow-500 transition-transform duration-300" :class="{ 'rotate-180': openDropdown }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                
                {{-- Dropdown Menu --}}
                <div 
                    x-show="openDropdown"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-2"
                    @click.away="openDropdown = false"
                    class="absolute top-full left-0 w-full md:w-96 mt-2 bg-slate-800/40 backdrop-blur-md rounded-xl border border-white/10 shadow-[0_8px_24px_rgba(0,0,0,0.4)] overflow-hidden z-50">
                    
                    <button @click="selectedCategory = 'all'; openDropdown = false" class="w-full px-6 py-4 text-left text-slate-100 hover:bg-white/5 transition-all duration-200 flex items-center gap-3 border-b border-white/5">
                        <span class="text-2xl">📚</span>
                        <span class="font-medium">All Resources</span>
                    </button>
                    
                    <button @click="selectedCategory = 'courses'; openDropdown = false" class="w-full px-6 py-4 text-left text-slate-100 hover:bg-white/5 transition-all duration-200 flex items-center gap-3 border-b border-white/5">
                        <span class="text-2xl">🎓</span>
                        <span class="font-medium">Courses</span>
                    </button>
                    
                    <button @click="selectedCategory = 'tutorials'; openDropdown = false" class="w-full px-6 py-4 text-left text-slate-100 hover:bg-white/5 transition-all duration-200 flex items-center gap-3 border-b border-white/5">
                        <span class="text-2xl">📖</span>
                        <span class="font-medium">Tutorials</span>
                    </button>
                    
                    <button @click="selectedCategory = 'exams'; openDropdown = false" class="w-full px-6 py-4 text-left text-slate-100 hover:bg-white/5 transition-all duration-200 flex items-center gap-3">
                        <span class="text-2xl">📝</span>
                        <span class="font-medium">Exams</span>
                    </button>
                </div>
            </div>
        </div>
        

        {{-- Resources Containers --}}
        <div class="flex gap-6 overflow-x-auto pb-2">
            
            {{-- Courses Container --}}
            <div 
                x-show="selectedCategory === 'all' || selectedCategory === 'courses'"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                class="flex-1 min-w-[350px] bg-black/30 backdrop-blur-sm rounded-2xl p-8 shadow-[0_8px_24px_rgba(0,0,0,0.4)] border border-white/5 relative transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_12px_32px_rgba(0,0,0,0.5),0_0_20px_rgba(218,165,32,0.15)] group">
                
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-yellow-600/30 to-yellow-700/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none" style="padding: 1px; -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0); -webkit-mask-composite: xor; mask-composite: exclude;"></div>
                
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-lg flex items-center justify-center text-2xl shadow-[0_4px_12px_rgba(218,165,32,0.4)]">🎓</div>
                    <div>
                        <h3 class="text-slate-100 text-xl font-semibold">Courses</h3>
                        <p class="text-slate-400 text-sm">{{ $courses->count() }} files available</p>
                    </div>
                    <form method="POST" action="{{ route('files.upload') }}" enctype="multipart/form-data" class="ml-auto" id='uploadCoursesForm'>
                        @csrf
                        <input type="file" id="upload-courses" class="hidden" onchange="handleFileUpload(this, 'courses')" multiple>
                        <button type="submit" onclick="document.getElementById('upload-courses').click()" class="px-4 py-2 bg-gradient-to-br from-yellow-500 to-yellow-600 text-slate-900 rounded-lg font-semibold shadow-[0_4px_12px_rgba(218,165,32,0.4)] hover:shadow-[0_6px_16px_rgba(218,165,32,0.5)] transition-all duration-300 hover:scale-105 flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                        </button>
                        
                    </form>
                     
                </div>
                
                <div class="flex flex-col gap-3">
                    @foreach($courses as $file)
                    <a href="{{ route('files.download', $file->id) }}" class="flex items-center justify-between p-4 bg-white/[0.02] rounded-xl border border-white/[0.03] transition-all duration-300 hover:bg-white/[0.04] hover:border-yellow-600/20 hover:scale-[1.02] group/item">
                        <div class="flex items-center gap-3 flex-1 min-w-0">
                            <div class="w-10 h-10 bg-gradient-to-br from-yellow-600/15 to-yellow-700/10 rounded-lg flex items-center justify-center border border-yellow-600/20 flex-shrink-0">
                                {{ $file->icon ?? '📄' }}
                            </div>
                            <div class="min-w-0 flex-1">
                                <p class="text-slate-200 font-medium truncate">{{ $file->filename }}</p>
                                <p class="text-slate-500 text-xs">{{ $file->filetype }} • {{ $file->size }}</p>
                            </div>
                        </div>
                        <div class="w-8 h-8 bg-yellow-500/10 rounded-lg flex items-center justify-center border border-yellow-600/20 opacity-0 group-hover/item:opacity-100 transition-opacity flex-shrink-0 ml-3">
                            <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                            </svg>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            
            {{-- Tutorials Container --}}
            <div 
                x-show="selectedCategory === 'all' || selectedCategory === 'tutorials'"
                x-transition:enter="transition ease-out duration-300 delay-100"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                class="flex-1 min-w-[350px] bg-black/30 backdrop-blur-sm rounded-2xl p-8 shadow-[0_8px_24px_rgba(0,0,0,0.4)] border border-white/5 relative transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_12px_32px_rgba(0,0,0,0.5),0_0_20px_rgba(218,165,32,0.15)] group">
                
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-yellow-600/30 to-yellow-700/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none" style="padding: 1px; -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0); -webkit-mask-composite: xor; mask-composite: exclude;"></div>
                
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-lg flex items-center justify-center text-2xl shadow-[0_4px_12px_rgba(218,165,32,0.4)]">📖</div>
                    <div>
                        <h3 class="text-slate-100 text-xl font-semibold">Tutorials</h3>
                        <p class="text-slate-400 text-sm">{{ $tutorials->count() }} files available</p>
                    </div>
                    <form action="{{ route('files.upload') }}" method="POST" enctype="multipart/form-data" class="ml-auto" id='uploadTutoForm'>
                        @csrf
                        <input type="file" id="upload-tutorials" class="hidden" onchange="handleFileUpload(this, 'tutorials')" multiple>
                        <button type="submit" onclick="document.getElementById('upload-tutorials').click()" class="px-4 py-2 bg-gradient-to-br from-yellow-500 to-yellow-600 text-slate-900 rounded-lg font-semibold shadow-[0_4px_12px_rgba(218,165,32,0.4)] hover:shadow-[0_6px_16px_rgba(218,165,32,0.5)] transition-all duration-300 hover:scale-105 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        
                    </form>
                </div>
                
                <div class="flex flex-col gap-3">
                    @foreach($tutorials as $file)

                    <a href="{{ route('files.download', $file->id) }}" class="flex items-center justify-between p-4 bg-white/[0.02] rounded-xl border border-white/[0.03] transition-all duration-300 hover:bg-white/[0.04] hover:border-yellow-600/20 hover:scale-[1.02] group/item">
                        <div class="flex items-center gap-3 flex-1 min-w-0">
                            <div class="w-10 h-10 bg-gradient-to-br from-yellow-600/15 to-yellow-700/10 rounded-lg flex items-center justify-center border border-yellow-600/20 flex-shrink-0">
                                {{ $file->icon ?? '📄' }}
                            </div>
                            <div class="min-w-0 flex-1">
                                <p class="text-slate-200 font-medium truncate">{{ $file->filename }}</p>
                                <p class="text-slate-500 text-xs">{{ $file->filetype }} • {{ $file->size }}</p>
                            </div>
                        </div>
                        <div class="w-8 h-8 bg-yellow-500/10 rounded-lg flex items-center justify-center border border-yellow-600/20 opacity-0 group-hover/item:opacity-100 transition-opacity flex-shrink-0 ml-3">
                            <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                            </svg>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            
            {{-- Exams Container --}}
           {{-- Exams Container --}}
        <div 
            x-show="selectedCategory === 'all' || selectedCategory === 'exams'"
            x-transition:enter="transition ease-out duration-300 delay-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            class="flex-1 min-w-[350px] bg-black/30 backdrop-blur-sm rounded-2xl p-8 shadow-[0_8px_24px_rgba(0,0,0,0.4)] border border-white/5 relative transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_12px_32px_rgba(0,0,0,0.5),0_0_20px_rgba(218,165,32,0.15)] group">
            
            <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-yellow-600/30 to-yellow-700/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none" style="padding: 1px; -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0); -webkit-mask-composite: xor; mask-composite: exclude;"></div>
            
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-lg flex items-center justify-center text-2xl shadow-[0_4px_12px_rgba(218,165,32,0.4)]">📝</div>
                    <div>
                        <h3 class="text-slate-100 text-xl font-semibold">Exams</h3>
                        <p class="text-slate-400 text-sm">{{ $exams->count() }} files available</p>
                    </div>
                </div>
                
                <form action="{{ route('files.upload') }}" method="POST" enctype="multipart/form-data" id="uploadExamsForm">
                    @csrf
                    <input type="file" id="upload-exams" class="hidden" onchange="handleFileUpload(this, 'exams')" multiple>
                    <button type="button" onclick="document.getElementById('upload-exams').click()" class="px-4 py-2 bg-gradient-to-br from-yellow-500 to-yellow-600 text-slate-900 rounded-lg font-semibold shadow-[0_4px_12px_rgba(218,165,32,0.4)] hover:shadow-[0_6px_16px_rgba(218,165,32,0.5)] transition-all duration-300 hover:scale-105 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </button>
                </form>
            </div>
            
            {{-- Files list MUST be inside the container --}}
            <div class="flex flex-col gap-3">
                @foreach($exams as $file)
                <a href="{{ route('files.download', $file->id) }}" class="flex items-center justify-between p-4 bg-white/[0.02] rounded-xl border border-white/[0.03] transition-all duration-300 hover:bg-white/[0.04] hover:border-yellow-600/20 hover:scale-[1.02] group/item">
                    <div class="flex items-center gap-3 flex-1 min-w-0">
                        <div class="w-10 h-10 bg-gradient-to-br from-yellow-600/15 to-yellow-700/10 rounded-lg flex items-center justify-center border border-yellow-600/20 flex-shrink-0">
                            {{ $file->icon ?? '📄' }}
                        </div>
                        <div class="min-w-0 flex-1">
                            <p class="text-slate-200 font-medium truncate">{{ $file->filename }}</p>
                            <p class="text-slate-500 text-xs">{{ strtoupper($file->filetype) }} • {{ number_format($file->size / 1024, 2) }} KB</p>
                        </div>
                    </div>
                    <div class="w-8 h-8 bg-yellow-500/10 rounded-lg flex items-center justify-center border border-yellow-600/20 opacity-0 group-hover/item:opacity-100 transition-opacity flex-shrink-0 ml-3">
                        <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                    </div>
                </a>
                @endforeach
            </div>
            
        </div> {{-- This closing div is critical! --}}
        
        </div>
</div>
        
    </div>

</div> {{-- Closing the main wrapper --}}
    

<script>
        function handleFileUpload(input, category) {

    if (!input.files || input.files.length === 0) {
        alert('No files selected');
        return;
    }
    
    const formData = new FormData();
    
    // Add files with the correct key
    Array.from(input.files).forEach((file, index) => {
        formData.append('files[]', file, file.name);
        console.log(`File ${index}:`, file.name, file.size, file.type);
    });
    
    formData.append('category', category);
    formData.append('module_id', {{ $module->id }});
    
    // Log FormData contents
    for (let pair of formData.entries()) {
        console.log(pair[0], pair[1]);
    }
    
    const button = input.previousElementSibling;
    const originalText = button.innerHTML;
    button.innerHTML = 'Uploading...';
    button.disabled = true;
    
    const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
    
    fetch('/upload', {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': token,
            'X-Requested-With': 'XMLHttpRequest'
            // Don't set Content-Type - browser will set it with boundary
        }
    })
    .then(response => {
        console.log('Response status:', response.status);
        return response.json();
    })
    .then(data => {
        console.log('Response data:', data);
        if (data.success) {
            alert(data.message || 'Upload successful!');
            setTimeout(() => {
                window.location.reload();
            }, 500);
        } else {
            alert('Upload failed: ' + data.message);
        }
    })
    .catch(error => {
        console.error('Upload error:', error);
        alert('An error occurred: ' + error.message);
    })
    .finally(() => {
        button.innerHTML = originalText;
        button.disabled = false;
        input.value = '';
    });
}

        document.getElementById('uploadCoursesForm').addEventListener('submit', function(event) {
            event.preventDefault();
            handleFileUpload(document.getElementById('upload-courses'), 'courses');
        });
        document.getElementById('uploadTutoForm').addEventListener('submit', function(event) {
            event.preventDefault();
            handleFileUpload(document.getElementById('upload-tutorials'), 'tutorials');
        });

        document.getElementById('uploadExamsForm').addEventListener('submit', function(event) {
            event.preventDefault();
            handleFileUpload(document.getElementById('upload-exams'), 'exams');
        });
</script>
@endsection