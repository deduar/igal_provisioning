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

                    <form class="form-inline" action="store" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Project name </label>
                            <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label>Version </label>
                            <input type="number" class="form-control {{ $errors->has('ver') ? 'error' : '' }}" name="ver" id="ver" value="{{ old('ver') ?? $model->ver ?? '1.0' }}" step="0.1" min="0.1" max="10" placeholder="0.1">
                        </div>

                        <div class="form-group">
                            <label>Leader </label>
                            <input type="number" class="form-control {{ $errors->has('leader_id') ? 'error' : '' }}" name="leader_id" id="leader_id" value="{{ old('leader_id') ?? $model->info_id ?? $id  }}" placeholder="{{ $id }}">
                        </div>

                        <div class="form-group">
                            <label>Info ID </label>
                            <input type="number" class="form-control {{ $errors->has('info_id') ? 'error' : '' }}" name="info_id" id="info_id" value="{{ old('info_id')  ?? $model->info_id ?? '1' }}">
                        </div>

                        <div class="form-group">
                            <label>Credentials ID </label>
                            <input type="number" class="form-control {{ $errors->has('credentials_id') ? 'error' : '' }}" name="credentials_id" id="credentials_id" value="{{ old('credentials_id') ?? $model->credentials_id ?? '1' }}">
                        </div>

                        <div class="form-group">
                            <label>Start date </label>
                            <input type="date" class="form-control {{ $errors->has('startDate') ? 'error' : '' }}" name="startDate" id="startDate" value="{{ old('startDate') }}" required>
                        </div>

                        <div>
                            <button class="btn btn-success">Create</button>
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
