@extends('layouts.app')

@section('title', 'ព័ត៌មានសិស្ស')

@section('content')

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

        <!-- Header -->
        <div class="mb-8 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div>
                    <h1 class="text-2xl font-bold text-[color:var(--ink)] font-head mb-5">
                        ព័ត៌មានលម្អិតសិស្ស
                    </h1>
                    <p class="text-md font-semibold text-gray-500 mt-1">
                        មើលព័ត៌មានផ្ទាល់ខ្លួន និងទំនាក់ទំនង
                    </p>
                </div>
            </div>

            <div class="flex gap-3">
                <a href="{{ route('students.index') }}"
                    class="hidden sm:flex items-center gap-2 px-5 py-2.5 rounded-xl bg-white border-2 border-slate-200 text-sm font-semibold text-gray-700 hover:bg-slate-50 hover:border-[color:var(--kh-blue)] hover:text-[color:var(--kh-blue)] transition-all duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125" />
                    </svg>
                    ត្រឡប់ក្រោយ
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- Left Column: Profile Card -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden sticky top-6">
                    <!-- Cover Background -->
                    <div class="h-32 bg-gradient-to-br from-[color:var(--kh-blue)] to-[color:var(--kh-blue-deep)]"></div>

                    <div class="px-6 pb-6">
                        <!-- Avatar -->
                        <div class="relative -mt-16 mb-4 flex justify-center">
                            @if ($student->image)
                                <img src="{{ asset('storage/' . $student->image) }}" alt="{{ $student->student_name }}"
                                    class="w-32 h-32 rounded-full object-cover border-4 border-white shadow-lg ring-2 ring-slate-100">
                            @else
                                <div
                                    class="w-32 h-32 rounded-full bg-slate-100 border-4 border-white flex items-center justify-center text-5xl shadow-lg ring-2 ring-slate-100">
                                    👤
                                </div>
                            @endif
                        </div>

                        <!-- Name & Badge -->
                        <div class="text-center mb-6">
                            <h2 class="text-xl font-bold text-[color:var(--ink)] font-head truncate px-2">
                                {{ $student->student_name }}
                            </h2>

                            @if ($student->sex == 'Male')
                                <span
                                    class="inline-flex items-center gap-1.5 mt-3 rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-700 border border-blue-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="h-3.5 w-3.5">
                                        <path fill-rule="evenodd"
                                            d="M10 2a4 4 0 100 8 4 4 0 000-8zM6 12a2 2 0 00-2 2v1a2 2 0 002 2h8a2 2 0 002-2v-1a2 2 0 00-2-2H6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    សិស្សប្រុស
                                </span>
                            @else
                                <span
                                    class="inline-flex items-center gap-1.5 mt-3 rounded-full bg-pink-50 px-3 py-1 text-xs font-semibold text-pink-700 border border-pink-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="h-3.5 w-3.5">
                                        <path fill-rule="evenodd"
                                            d="M10 2a4 4 0 100 8 4 4 0 000-8zM6 12a2 2 0 00-2 2v1a2 2 0 002 2h8a2 2 0 002-2v-1a2 2 0 00-2-2H6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    សិស្សស្រី
                                </span>
                            @endif
                        </div>

                        <!-- Quick Stats / Info -->
                        <div class="space-y-4 border-t border-slate-100 pt-6">
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-gray-500">អាយុ</span>
                                <span class="font-semibold text-[color:var(--ink)]">{{ $student->age ?? '-' }} ឆ្នាំ</span>
                            </div>
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-gray-500">ថ្ងៃកំណើត</span>
                                <span class="font-semibold text-[color:var(--ink)]">
                                    {{ optional($student->date_of_birth)->format('d/m/Y') ?? '-' }}
                                </span>
                            </div>
                        </div>

                        <!-- Mobile Only Actions -->
                        <div class="mt-8 flex flex-col gap-3 sm:hidden">
                            <a href="{{ route('students.edit', $student->id) }}"
                                class="flex items-center justify-center gap-2 w-full px-4 py-3 rounded-xl bg-[color:var(--kh-blue)] text-white font-semibold shadow-md shadow-blue-500/20 hover:bg-[color:var(--kh-blue-deep)] transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" class="h-4 w-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125" />
                                </svg>
                                កែប្រែព័ត៌មាន
                            </a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                id="delete-form-{{ $student->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="button"
                                    onclick="confirmDelete({{ $student->id }}, '{{ $student->student_name }}')"
                                    class="flex items-center justify-center gap-2 w-full px-4 py-3 rounded-xl border border-red-200 bg-red-50 text-red-600 font-semibold hover:bg-red-100 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" class="h-4 w-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                    លុបសិស្ស
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Details -->
            <div class="lg:col-span-2 space-y-6">

                <!-- Contact Information Card -->
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                    <div class="bg-gradient-to-r from-slate-50 to-white px-6 py-4 border-b border-slate-200">
                        <h2 class="text-lg font-bold text-[color:var(--ink)] flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="h-5 w-5 text-[color:var(--kh-blue)]">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                            ព័ត៌មានទំនាក់ទំនង
                        </h2>
                    </div>

                    <div class="p-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Phone -->
                            <div class="group">
                                <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">
                                    លេខទូរស័ព្ទ
                                </label>
                                <div
                                    class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 border border-slate-100 group-hover:border-[color:var(--kh-blue)]/30 transition-colors">
                                    <div
                                        class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-white text-[color:var(--kh-blue)] shadow-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                                        </svg>
                                    </div>
                                    <span class="font-semibold text-[color:var(--ink)]">
                                        {{ $student->phone ?? 'មិនមាន' }}
                                    </span>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="md:col-span-2 group">
                                <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">
                                    អាសយដ្ឋាន
                                </label>
                                <div
                                    class="flex items-start gap-3 p-3 rounded-xl bg-slate-50 border border-slate-100 group-hover:border-[color:var(--kh-blue)]/30 transition-colors min-h-[60px]">
                                    <div
                                        class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-white text-[color:var(--kh-blue)] shadow-sm mt-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                        </svg>
                                    </div>
                                    <span class="font-medium text-[color:var(--ink)] leading-relaxed">
                                        {{ $student->address ?? 'មិនមាន' }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Desktop Actions Sidebar Area -->
                <div class="hidden sm:flex justify-end gap-4 pt-4">
                    <a href="{{ route('students.edit', $student->id) }}"
                        class="hidden sm:flex items-center gap-2 px-5 py-2.5 rounded-xl bg-white border-2 border-slate-200 text-sm font-semibold text-gray-700 hover:bg-slate-50 hover:border-gray-400 hover:text-[color:var(--kh-blue)] transition-all duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125" />
                        </svg>
                        កែប្រែ
                    </a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                        id="delete-form-desktop-{{ $student->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="button"
                            onclick="confirmDelete({{ $student->id }}, '{{ $student->student_name }}')"
                            class="flex items-center gap-2 px-4 py-2 rounded-xl border-2 border-red-200 bg-white text-red-600 font-semibold hover:bg-red-50 hover:border-red-300 transition-all duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                            លុបសិស្ស
                        </button>
                    </form>
                </div>

            </div>
        </div>

    </div>

    <script>
        function confirmDelete(id, name) {
            Swal.fire({
                title: 'តើអ្នកពិតជាចង់លុប?',
                text: "ទិន្នន័យរបស់ " + name + " នឹងត្រូវបានលុបជាស្ថាពរ!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#94a3b8',
                confirmButtonText: 'បាទ/ចាស, លុបវា!',
                cancelButtonText: 'បោះបង់',
                reverseButtons: true,
                customClass: {
                    popup: 'rounded-2xl',
                    confirmButton: 'px-6 py-2 rounded-xl font-semibold',
                    cancelButton: 'px-6 py-2 rounded-xl font-semibold'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    // Try desktop form first, then mobile form
                    let form = document.getElementById('delete-form-desktop-' + id) || document.getElementById(
                        'delete-form-' + id);
                    if (form) form.submit();
                }
            });
        }
    </script>

@endsection
