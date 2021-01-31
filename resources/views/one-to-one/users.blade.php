<x-app-layout>
    <x-slot name="title">{{ $title }}</x-slot>

    {{-- header content --}}
    <div class="px-6 py-4 mb-4 overflow-hidden border rounded-lg shadow-sm border-gray-300 bg-gray-200">
        <div class="flex flex-col justify-between sm:flex-row">
            <div class="text-center sm:text-left flex-start">
                <h3 class="text-lg font-semibold leading-6 text-gray-800">Data {{ $title }}</h3>
                <p class="mt-px text-sm leading-5 text-gray-600 sm:mt-1">The following data of {{ Str::lower(__($title)) }}.</p>
            </div>
        </div>
    </div>

    {{-- table --}}
    <div class="overflow-hidden border rounded-lg border-gray-300">
        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead class="text-sm border-b select-none border-gray-300 bg-gray-200">
                    <tr>
                        <th class="px-6 py-3 font-bold text-center uppercase">No</th>
                        <th class="px-6 py-3 font-bold text-left uppercase">Name</th>
                        <th class="px-6 py-3 font-bold text-left uppercase">Phone</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-gray-700 bg-white divide-y divide-gray-300">
                    @if ($users->count() > 0)
                    @foreach ($users as $user)
                    <tr>
                        <td class="px-6 py-3 leading-6 text-center whitespace-nowrap">{{ ++$i }}</td>
                        <td class="w-10 px-6 py-3 leading-6 sm:w-auto">{{ $user->name }}</td>
                        <td class="w-10 px-6 py-3 leading-6 sm:w-auto">{{ $user->phone->phone_number }}</td>
                    </tr>
                    @endforeach
                    @else
                    <tr class="select-none">
                        <td class="px-6 py-3 leading-4 text-center whitespace-nowrap">-</td>
                        <td class="px-6 py-3 leading-4 whitespace-nowrap">-</td>
                        <td class="px-6 py-3 leading-4 whitespace-nowrap">-</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="text-gray-600 bg-gray-50">
            {{ $users->links() }}
        </div>
    </div>

</x-app-layout>
