<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Password') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="alert alert-warning" role="alert">
                        You do not have permission to access this link
                    </div>

                    @if (\Session::has('danger'))
                        <div class="alert alert-danger">
                            {!! \Session::get('danger') !!}
                        </div>
                    @endif

                    <nav class="navbar navbar-expand-lg bg-light">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <form action="{{route('update.password')}}" method="post" class="row g-3">
                                    @csrf
                                    <div class="col-auto">
                                        <input type="password" class="form-control" name="password" id="inputPassword2"
                                               placeholder="Enter Password">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-3">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
