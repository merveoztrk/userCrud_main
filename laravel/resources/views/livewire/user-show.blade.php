<div>

    @include('livewire.usermodal')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if (session()->has('message'))
                    <h5 class="alert alert-success">{{ session('message') }}</h5>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>User CRUD
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#userModal">
                                Add New User
                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->surname }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#updateUserModal" wire:click="editUser({{$user->id}})" class="btn btn-primary">
                                                Edit
                                            </button>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#deleteUserModal" wire:click="deleteUser({{$user->id}})" class="btn btn-danger">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            </div>
            </div>
</div>
