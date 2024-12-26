<div>
    <div class="main_content_iner">
        <div class="container-fluid p-0">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <button class="btn btn-primary" wire:click="add">Add</button>
                    <input type="text" class="form-control w-25" wire:model.live="search" placeholder="Search">
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Quizes</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($technologies as $technology)
                                <tr>
                                    <td>{{ $technology->name }}</td>
                                    <td> {{ $technology->quizes_count }} </td>
                                    <td>
                                        <button class="btn btn-sm btn-secondary m-1"
                                            wire:click="edit('{{ $technology->id }}')">
                                            Edit
                                        </button>
                                        <button class="btn btn-sm btn-danger m-1"
                                            wire:click="confirmDelete('{{ $technology->id }}')">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $technologies->links() }}
                </div>
            </div>

        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="storeOrUpdate" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="storeOrUpdateLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form wire:submit.prevent="storeOrUpdate">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="storeOrUpdateLabel">{{ $form_title }}</h1>
                        <button type="button" class="btn-close" aria-label="Close" wire:click="closeModal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">
                                Name
                                @error('name')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </label>
                            <input type="text" class="form-control" wire:model.live="name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeModal">Close</button>
                        <button type="submit" class="btn btn-primary">{{ $btn_text }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="confirmDelete" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center">
                    <div class="modal-header">
                        <h3 class="modal-title w-100" id="disableLabel">Are you sure</h3>
                        <button type="button" class="btn-close" aria-label="Close" wire:click="closeModal">
                        </button>
                    </div>
                    <div class="modal-body">
                        <p style="font-size: 20px">
                            You want to delete this technology
                        </p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" wire:click="closeModal">Close</button>
                        <button type="button" class="btn btn-danger" style="color:white" wire:click="delete">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('show-action-modal', event => {
            $('#storeOrUpdate').modal('show')
        });
        document.addEventListener('show-confirm-delete-modal', event => {
            $('#confirmDelete').modal('show')
        });

        document.addEventListener('swal:modal', event => {
            Swal.fire({
                title: event.detail[0].title,
                text: event.detail[0].text,
                icon: event.detail[0].icon
            });

        });

        document.addEventListener('close-modal', event => {
            $('#storeOrUpdate').modal('hide')
            $('#confirmDelete').modal('hide')
        });
    </script>

</div>
