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
                    CREATE NEW DEPLOIT

                    <form action="store" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Project name </label>
                            <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}"
                                name="name" id="name" value="{{ old('name') }}">

                            <!-- Error -->
                            @if ($errors->has('name'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>

                        <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
