@extends('layouts.app')

@section('content')

    <div>
        <livewire:user-show>
    </div>

@endsection

@section('script')
<script>
    window.addEventListener('close-modal', event => {

        $('#userModal').modal('hide');
        $('#updateUserModal').modal('hide');
        $('#deleteUserModal').modal('hide');
    })
</script>
@endsection
