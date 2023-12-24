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
               <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Last Seen</th>
                    <th>Status</th>
                </tr>
               </table>
               @forelse ($users as $user)
<tr>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ carbon$user->last_seen }}</td>
    <td>{{ $user->status }}</td>
</tr>
               @empty
               Ther are No Users
               @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
