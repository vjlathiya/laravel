<div>
    <div class="container">
        <h4 class="my-4 text-center">CRUD Opration With livewire - User Info</h4>
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show w-75 mx-auto" role="alert">
                <strong>Hello, {{$name}} !</strong> Your data has been submited
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="jumbotron py-3 px-3 my-4 shadow text-capitalize">
            <h5 class="mx-1">Insert Data</h5>
            <form wire:submit.prevent="submit">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">name</label>
                        <input type="text" wire:model="name" class="form-control">
                        @error('name')
                        <span class="error text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">email</label>
                        <input type="email" wire:model="email"  class="form-control">
                        @error('email')
                        <span class="error text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-around py-3">
                <button type="submit" class="btn btn-primary w-50">Submit</button>
            </div>
        </form>
    </div>
</div>