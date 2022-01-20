<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{route('deploit.create')}}"><button class="btn btn-info">New Deploit</button></a>

                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Version</th>
                            <th>Leader ID</th>
                            <th>Start Date</th>
                            <th>Info ID</th>
                            <th>Credentials ID</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($deploits as $deploit)
                        <tr>
                            <td>{{ $deploit->id }}</td>
                            <td>{{ $deploit->name }}</td>
                            <td>{{ $deploit->ver }}</td>
                            <td>{{ $deploit->leader_id }}</td>
                            <td>{{ date('d/m/Y', strtotime($deploit->startDate)) }}</td>
                            <td>{{ $deploit->info_id }}</td>
                            <td>{{ $deploit->credentials_id }}</td>
                            <td>
                                <form action="{{ route('deploit.destroy',$deploit->id) }}" method="POST">

                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
