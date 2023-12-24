<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{--
                <x-welcome /> --}}
                <table class="w-full table-auto">
                    <tr class="bg-grey-800 text-white">
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">Last Seen</th>
                        <th class="py-3 px-6 text-left">Status</th>
                    </tr>
                </table>
                @forelse ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ carbon\carbon::parse($user->last_seen)->diffForHumans() }}</td>
                    {{--  <span {{ $user->last_seen>=now()->subMinutes(2)?'online':'offline' }}>  --}}
                    <td>{{ $user->last_seen>=now()->subMinutes(2)?'online':'offline' }}</td>
                    {{--  </span>  --}}
                </tr>
                @empty
                Ther are No Users
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
