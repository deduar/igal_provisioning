<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{route('deploit.index')}}"><button class="btn btn-info">Back</button></a>
                    CREATE NEW DEPLOIT

                    <form class="form-inline" action="{{ route('deploit.update', $deploit->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Project name </label>
                            <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" value="{{ $deploit->name }}">
                        </div>

                        <div class="form-group">
                            <label>Version </label>
                            <input type="number" class="form-control {{ $errors->has('ver') ? 'error' : '' }}" name="ver" id="ver" value="{{ $deploit->ver }}" step="0.1" min="0.1" max="10">
                        </div>

                        <div class="form-group">
                            <label>Leader </label>
                            <input type="number" class="form-control {{ $errors->has('leader_id') ? 'error' : '' }}" name="leader_id" id="leader_id" value="{{ $deploit->leader_id }}">
                        </div>

                        <div class="form-group">
                            <label>Info ID </label>
                            <input type="number" class="form-control {{ $errors->has('info_id') ? 'error' : '' }}" name="info_id" id="info_id" value="{{ $deploit->info_id }}">
                        </div>

                        <div class="form-group">
                            <label>Credentials ID </label>
                            <input type="number" class="form-control {{ $errors->has('credentials_id') ? 'error' : '' }}" name="credentials_id" id="credentials_id" value="{{ $deploit->credentials_id }}">
                        </div>

                        <div class="form-group">
                            <label>Start date </label>
                            <input type="date" class="form-control {{ $errors->has('startDate') ? 'error' : '' }}" name="startDate" id="startDate" value="{{ $deploit->startDate }}" required>
                        </div>

                        <div>
                            <button class="btn btn-success">Update</button>
                        </div>

                        <!-- Error -->
                        @if ($errors->has('name'))
                        <div class="alert alert-danger">
                            {{ $errors->first('name') }}
                        </div>
                        @endif

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
