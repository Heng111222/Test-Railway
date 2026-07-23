@extends('layouts.app')

@section('title', 'បន្ថែមសិស្ស')

@section('content')

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

    <!-- Header -->
    <div class="mb-8">
        <div class="flex items-center gap-4 mb-2">
            <div>
                <h1 class="text-2xl font-bold text-[color:var(--ink)] font-head">
                    បន្ថែមព័ត៌មានសិស្ស
                </h1>
                {{-- <p class="text-sm text-gray-500 mt-2">
                    សូមបំពេញព័ត៌មានរបស់សិស្សនៅក្នុងទម្រង់ខាងក្រោមឱ្យបានត្រឹមត្រូវ
                </p> --}}
            </div>
        </div>
    </div>

    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- Main Content - Left Column -->
            <div class="lg:col-span-2 space-y-6">

                <!-- Personal Information Card -->
                <div class="bg-white rounded-lg border border-slate-200 shadow-sm overflow-hidden">
                    <div class="bg-gradient-to-r from-slate-50 to-white px-6 py-4 border-b border-slate-200">
                        <h2 class="text-lg font-bold text-[color:var(--ink)] flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5 text-[color:var(--kh-blue)]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                            ព័ត៌មានផ្ទាល់ខ្លួន
                        </h2>
                    </div>

                    <div class="p-6 space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Student Name -->
                            <div>
                                <label for="student_name" class="block mb-2 text-sm font-semibold text-[color:var(--ink)]">
                                    ឈ្មោះសិស្ស <span class="text-[color:var(--kh-red)]">*</span>
                                </label>
                                <div class="relative group">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-400 group-focus-within:text-[color:var(--kh-blue)] transition-colors">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>
                                    </div>
                                    <input
                                        type="text"
                                        id="student_name"
                                        name="student_name"
                                        value="{{ old('student_name') }}"
                                        placeholder="ឧ. ហេង ដារា"
                                        required
                                        class="w-full rounded-xl border-2 border-slate-300 bg-white px-10 py-3 text-sm text-[color:var(--ink)] placeholder-gray-400 transition-all duration-200 focus:border-[color:var(--kh-blue)] focus:ring-1 focus:ring-[color:var(--kh-blue)]/10 focus:outline-none hover:border-slate-400 font-semibold">
                                </div>
                                @error('student_name')
                                    <p class="flex items-center gap-1 text-[color:var(--kh-red)] text-xs mt-2 animate-pulse">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-3.5 w-3.5"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" /></svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <!-- Gender -->
                            <div>
                                <label for="sex" class="block mb-2 text-sm font-semibold text-[color:var(--ink)]">
                                    ភេទ <span class="text-[color:var(--kh-red)]">*</span>
                                </label>
                                <div class="relative group">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-400 group-focus-within:text-[color:var(--kh-blue)] transition-colors">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                        </svg>
                                    </div>
                                    <select
                                        id="sex"
                                        name="sex"
                                        required
                                        class="w-full rounded-xl border-2 font-semibold border-slate-300 bg-white px-10 py-3 text-sm text-[color:var(--ink)] transition-all duration-200 focus:border-[color:var(--kh-blue)] focus:ring-1 focus:ring-[color:var(--kh-blue)]/10 focus:outline-none appearance-none hover:border-slate-400 cursor-pointer">
                                        <option class="font-semibold" value="">ជ្រើសរើសភេទ</option>
                                        <option class="font-semibold" value="Male" {{ old('sex') == 'Male' ? 'selected' : '' }}>ប្រុស</option>
                                        <option class="font-semibold" value="Female" {{ old('sex') == 'Female' ? 'selected' : '' }}>ស្រី</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4 text-gray-400">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </div>
                                </div>
                                @error('sex')
                                    <p class="flex items-center gap-1 text-[color:var(--kh-red)] text-xs mt-2 animate-pulse">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-3.5 w-3.5"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" /></svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <!-- Date of Birth -->
                            <div>
                                <label for="date_of_birth" class="block mb-2 text-sm font-semibold text-[color:var(--ink)]">
                                    ថ្ងៃខែឆ្នាំកំណើត <span class="text-[color:var(--kh-red)]">*</span>
                                </label>
                                <div class="relative group">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-400 group-focus-within:text-[color:var(--kh-blue)] transition-colors">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                        </svg>
                                    </div>
                                    <input
                                        type="date"
                                        id="date_of_birth"
                                        name="date_of_birth"
                                        value="{{ old('date_of_birth') }}"
                                        required
                                        class="w-full rounded-xl font-semibold border-2 border-slate-300 bg-white px-10 py-3 text-sm text-[color:var(--ink)] transition-all duration-200 focus:border-[color:var(--kh-blue)] focus:ring-4 focus:ring-[color:var(--kh-blue)]/10 focus:outline-none hover:border-slate-400">
                                </div>
                                @error('date_of_birth')
                                    <p class="flex items-center gap-1 text-[color:var(--kh-red)] text-xs mt-2 animate-pulse">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-3.5 w-3.5"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" /></svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Information Card -->
                <div class="bg-white rounded-lg  border-slate-200 shadow-sm overflow-hidden">
                    <div class="bg-gradient-to-r from-slate-50 to-white px-6 py-4 border-b border-slate-200">
                        <h2 class="text-lg font-bold text-[color:var(--ink)] flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5 text-[color:var(--kh-blue)]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                            ព័ត៌មានទំនាក់ទំនង
                        </h2>
                    </div>

                    <div class="p-6 space-y-6">
                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block mb-2 text-sm font-semibold text-[color:var(--ink)]">
                                លេខទូរស័ព្ទ
                            </label>
                            <div class="relative group">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-400 group-focus-within:text-[color:var(--kh-blue)] transition-colors">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                                    </svg>
                                </div>
                                <input
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    value="{{ old('phone') }}"
                                    placeholder="012 345 678"
                                    class="w-full rounded-xl font-semibold border-2 border-slate-300 bg-white px-10 py-3 text-sm text-[color:var(--ink)] placeholder-gray-400 transition-all duration-200 focus:border-[color:var(--kh-blue)] focus:ring-4 focus:ring-[color:var(--kh-blue)]/10 focus:outline-none hover:border-slate-400">
                            </div>
                            @error('phone')
                                <p class="flex items-center gap-1 text-[color:var(--kh-red)] text-xs mt-2 animate-pulse">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-3.5 w-3.5"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" /></svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Address -->
                        <div>
                            <label for="address" class="block mb-2 text-sm font-semibold text-[color:var(--ink)]">
                                អាសយដ្ឋាន
                            </label>
                            <div class="relative group">
                                <div class="pointer-events-none absolute top-3 left-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-400 group-focus-within:text-[color:var(--kh-blue)] transition-colors">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>
                                </div>
                                <textarea
                                    id="address"
                                    name="address"
                                    rows="3"
                                    placeholder="ភូមិ, ឃុំ/សង្កាត់, ស្រុក/ខណ្ឌ, ខេត្ត/រាជធានី"
                                    class="w-full rounded-xl font-semibold border-2 border-slate-300 bg-white px-10 py-3 text-sm text-[color:var(--ink)] placeholder-gray-400 transition-all duration-200 focus:border-[color:var(--kh-blue)] focus:ring-4 focus:ring-[color:var(--kh-blue)]/10 focus:outline-none resize-none hover:border-slate-400">{{ old('address') }}</textarea>
                            </div>
                            @error('address')
                                <p class="flex items-center gap-1 text-[color:var(--kh-red)] text-xs mt-2 animate-pulse">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-3.5 w-3.5"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" /></svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>

            </div>

            <!-- Sidebar - Right Column -->
            <div class="lg:col-span-1 space-y-6">

                <!-- Photo Upload Card -->
                <div class="bg-white rounded-lg border border-slate-200 shadow-sm overflow-hidden top-6">
                    <div class="bg-gradient-to-r from-slate-50 to-white px-6 py-4 border-b border-slate-200">
                        <h2 class="text-lg font-bold text-[color:var(--ink)] flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5 text-[color:var(--kh-blue)]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                            </svg>
                            រូបភាពសិស្ស
                        </h2>
                    </div>

                    <div class="p-6">
                        <div class="flex items-center justify-center w-full">
                            <label for="image" class="flex flex-col items-center justify-center w-full h-48 border-2 border-slate-300 border-dashed rounded-xl cursor-pointer bg-gradient-to-br from-slate-50 to-white hover:from-[color:var(--kh-blue)]/5 hover:to-[color:var(--kh-blue-deep)]/5 transition-all duration-300 group">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <div class="w-16 h-16 mb-4 rounded-full bg-slate-100 group-hover:bg-[color:var(--kh-blue)]/10 flex items-center justify-center transition-colors">
                                        <svg class="w-8 h-8 text-slate-400 group-hover:text-[color:var(--kh-blue)] transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                        </svg>
                                    </div>
                                    <p class="mb-2 text-sm text-gray-600 font-medium">
                                        <span class="text-[color:var(--kh-blue)] font-semibold">ចុចដើម្បីជ្រើសរើស</span>
                                    </p>
                                    <p class="text-xs text-gray-400">PNG, JPG ឬ JPEG</p>
                                    <p class="text-xs text-gray-400 mt-1">អតិបរមា 2MB</p>
                                </div>
                                <input id="image" name="image" type="file" class="hidden" accept="image/*" onchange="updateFileName(this)" />
                            </label>
                        </div>

                        <div id="file-name" class="flex items-center gap-2 text-sm text-[color:var(--kh-blue)] mt-4 p-3 bg-[color:var(--kh-blue)]/5 rounded-lg hidden animate-fade-in">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4 flex-shrink-0">
                                <path fill-rule="evenodd" d="M4 2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H4zm5.293 7.293a1 1 0 011.414 0L11 9.586V6a1 1 0 112 0v3.586l.293-.293a1 1 0 111.414 1.414l-2 2a1 1 0 01-1.414 0l-2-2a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                            <span id="file-name-text" class="truncate"></span>
                        </div>

                        @error('image')
                            <p class="flex items-center gap-1 text-[color:var(--kh-red)] text-xs mt-3 animate-pulse">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-3.5 w-3.5"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" /></svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                <!-- Action Buttons Card -->
                <div class="bg-white rounded-lg border border-slate-200 shadow-sm overflow-hidden">
                    <div class="p-6 space-y-3">
                        <button type="submit"
                                class="w-full flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-gradient-to-r from-[color:var(--kh-blue)] to-[color:var(--kh-blue-deep)] text-sm font-semibold text-white shadow-lg duration-200 focus:ring-4 focus:ring-[color:var(--kh-blue)]/30 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            រក្សាទុកព័ត៌មាន
                        </button>

                        <a href="{{ route('students.index') }}"
                           class="w-full flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl border-2 border-slate-300 bg-white text-sm font-semibold text-gray-700 hover:bg-slate-50 hover:border-slate-400 transition-all duration-200 focus:ring-4 focus:ring-slate-200 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                            </svg>
                            ត្រឡប់ក្រោយ
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </form>

</div>

<!-- Enhanced script to show selected file name -->
<script>
    function updateFileName(input) {
        const fileNameDisplay = document.getElementById('file-name');
        const fileNameText = document.getElementById('file-name-text');

        if (input.files && input.files.length > 0) {
            fileNameText.textContent = input.files[0].name;
            fileNameDisplay.classList.remove('hidden');

            // Add animation class
            fileNameDisplay.classList.add('animate-fade-in');
        } else {
            fileNameDisplay.classList.add('hidden');
            fileNameDisplay.classList.remove('animate-fade-in');
        }
    }
</script>

<style>
    @keyframes fade-in {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in {
        animation: fade-in 0.3s ease-out;
    }
</style>

@endsection
