<!-- Insert Modal -->
<div wire:ignore.self class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userModalLabel">Create user</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="saveUser">
                <div class="modal-body">
                     <div class="mb-3">
                         <label>Name</label>
                         <input type="text" wire:model="name" class="form-control">
                         @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                     </div>
                     <div class="mb-3">
                         <label>Surname</label>
                         <input type="text" wire:model="surname" class="form-control">
                         @error('course') <span class="text-danger">{{ $message }}</span> @enderror
                     </div>
                     <div class="mb-3">
                         <label>Email</label>
                         <input type="text" wire:model="email" class="form-control">
                         @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                     </div>
                     <div class="mb-3">
                         <label for="password">Password</label>
                         <input type="password" wire:model="password" class="form-control">
                         @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                     </div>
                     <div class="mb-3">
                         <label for="password_confirmation">Password Confirmation</label>
                         <input type="password" wire:model="password_confirmation" class="form-control">

                     </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Update User Modal -->
<div wire:ignore.self class="modal fade" id="updateUserModal" tabindex="-1" aria-labelledby="updateUserModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateUserModalLabel">Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="updateUser">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" wire:model="name" class="form-control">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Surname</label>
                        <input type="text" wire:model="surname" class="form-control">
                        @error('surname') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="text" wire:model="email" class="form-control">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" wire:model="password" class="form-control">
                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Password confirmation</label>
                        <input type="password" wire:model="password_confirmation" class="form-control">
                        @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Student Modal -->
<div wire:ignore.self class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteUserModalLabel">Delete User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyUser">
                <div class="modal-body">
                    <h4>Are you sure you want to delete this data ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Yes! Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>


