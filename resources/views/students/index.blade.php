@extends('layouts.app')

@section('title', 'បញ្ជីសិស្ស')

@section('content')

    <div class="max-w-7xl mx-auto px-6 py-8">

        <!-- Header -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
            <div class="flex items-start gap-4">
                <div>
                    <h2 class="text-xl font-[900] text-[color:var(--ink)] font-head mb-2">
                        តារាងបង្ហាញព័ត៏មានសិស្ស
                    </h2>
                </div>
            </div>

            <a href="{{ route('students.create') }}"
                class="inline-flex items-center justify-center gap-2 bg-[color:var(--kh-blue)] hover:bg-[color:var(--kh-blue-deep)] text-white px-5 py-2.5 rounded-lg text-sm font-semibold shadow-sm transition-colors focus:ring-2 focus:ring-[color:var(--kh-blue)]/40 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3.5"
                    stroke="currentColor" class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                បន្ថែមសិស្ស
            </a>
        </div>

        <!-- Table Container -->
        <div class="bg-white rounded-sm border border-slate-200 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">

                    <thead class="bg-slate-0 border-b border-slate-300">
                        <tr>
                            <th class="px-6 py-4 text-md font-semibold text-gray-700">ល.រ</th>
                            <th class="px-6 py-4 text-md font-semibold text-gray-700">រូបភាព</th>
                            <th class="px-6 py-4 text-md font-semibold text-gray-700">ឈ្មោះ</th>
                            <th class="px-6 py-4 text-md font-semibold text-gray-700">ភេទ</th>
                            <th class="px-6 py-4 text-md font-semibold text-gray-700">អាយុ</th>
                            <th class="px-6 py-4 text-md font-semibold text-gray-700">លេខទូរស័ព្ទ
                            </th>
                            <th class="px-6 py-4 text-md font-semibold text-gray-700">អាសយដ្ឋាន
                            </th>
                            <th class="px-6 py-4 text-md font-semibold text-gray-700 text-center">
                                សកម្មភាព</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-slate-100">
                        @forelse ($students as $student)
                            <tr class="transition-colors group">

                                <!-- ID -->
                                <td class="px-6 py-4 text-sm text-gray-500 font-medium">
                                    {{ $loop->iteration }}
                                </td>

                                <!-- Image -->
                                <td class="px-6 py-4">
                                    @if ($student->image)
                                        <img src="{{ asset('storage/' . $student->image) }}"
                                            alt="{{ $student->student_name }}"
                                            class="w-12 h-12 rounded-full object-cover border border-slate-100">
                                    @else
                                        <div
                                            class="w-10 h-10 rounded-full bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                            </svg>
                                        </div>
                                    @endif
                                </td>

                                <!-- Name -->
                                <td class="px-6 py-4">
                                    <div class="text-sm font-semibold text-[color:var(--ink)]">
                                        {{ $student->student_name }}
                                    </div>
                                </td>

                                <!-- Sex (Badge) -->
                                <td class="px-6 py-4">
                                    @if ($student->sex == 'Male')
                                        <span
                                            class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-100">
                                            ប្រុស
                                        </span>
                                    @elseif($student->sex == 'Female')
                                        <span
                                            class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-semibold bg-rose-50 text-rose-700 border border-rose-100">
                                            ស្រី
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-gray-100 text-gray-600 border border-gray-200">
                                            មិនកំណត់
                                        </span>
                                    @endif
                                </td>

                                <!-- Age -->
                                <td class="px-6 py-4 text-sm font-semibold text-red-500">
                                    {{ $student->age ?? 'N/A' }} ឆ្នាំ
                                </td>

                                <!-- Phone -->
                                <td class="px-6 py-4 text-md font-semibold text-gray-600 font-mono">
                                    {{ $student->phone ?? '-' }}
                                </td>

                                <!-- Address -->
                                <td class="px-6 py-4 text-sm font-semibold text-gray-600 max-w-xs truncate"
                                    title="{{ $student->address }}">
                                    {{ $student->address ?? '-' }}
                                </td>

                                <!-- Actions -->
                                <td class="px-6 py-4">
                                    <div class="flex items-center justify-center gap-2">

                                        <!-- Edit -->
                                        <a href="{{ route('students.edit', $student->id) }}"
                                            class="flex items-center justify-center w-7 h-7 rounded-md text-blue-600 transition-colors"
                                            title="កែសម្រួល">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </a>

                                        <!-- Delete -->
                                        <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                            id="delete-form-{{ $student->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button"
                                                onclick="confirmDelete({{ $student->id }}, '{{ $student->student_name }}')"
                                                class="flex items-center justify-center w-7 h-7 rounded-md text-red-500 transition-colors"
                                                title="លុប">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </button>
                                        </form>
                                        <script>
                                            function confirmDelete(id, name) {
                                                Swal.fire({
                                                    title: `<span style="font-size: 25px;">លុបទិន្នន័យ</span>`,
                                                    html: `
                                                            <div class="text-gray-600 font-bold">
                                                                តើអ្នកពិតជាចង់លុប<br>
                                                                <b class="text-red-600">${name}</b> ?
                                                            </div>
                                                        `,
                                                    icon: 'warning',
                                                    showCancelButton: true,
                                                    confirmButtonText: 'បាទលុប',
                                                    cancelButtonText: 'បោះបង់',
                                                    reverseButtons: true,
                                                    confirmButtonColor: '#dc2626',
                                                    cancelButtonColor: '#64748b',
                                                    background: '#fff',
                                                    customClass: {
                                                        popup: 'rounded-3xl shadow-2xl',
                                                        confirmButton: 'rounded-xl px-6 py-2',
                                                        cancelButton: 'rounded-xl px-6 py-2'
                                                    }
                                                }).then((result) => {
                                                    if (result.isConfirmed) {

                                                        Swal.fire({
                                                            title: `<span class="text-xl">កំពុងលុប...</span>`,
                                                            allowOutsideClick: false,
                                                            didOpen: () => {
                                                                Swal.showLoading();
                                                            }
                                                        });

                                                        document.getElementById('delete-form-' + id).submit();
                                                    }
                                                });
                                            }
                                        </script>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="px-6 py-16 text-center">
                                    <div class="flex flex-col items-center justify-center">
                                        <div
                                            class="flex h-16 w-16 items-center justify-center rounded-full bg-slate-100 mb-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="h-8 w-8 text-slate-400">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                            </svg>
                                        </div>
                                        <h3 class="text-lg font-semibold text-[color:var(--ink)]">មិនទាន់មានទិន្នន័យសិស្ស
                                        </h3>
                                        <p class="text-sm text-gray-500 mt-1 mb-4">
                                            សូមចាប់ផ្តើមដោយការបន្ថែមសិស្សថ្មីចូលក្នុងប្រព័ន្ធ។</p>
                                        <a href="{{ route('students.create') }}"
                                            class="inline-flex items-center gap-2 text-sm font-semibold text-[color:var(--kh-blue)] hover:text-[color:var(--kh-blue-deep)] transition-colors">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor" class="h-4 w-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 4.5v15m7.5-7.5h-15" />
                                            </svg>
                                            បន្ថែមសិស្សឥឡូវនេះ
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
