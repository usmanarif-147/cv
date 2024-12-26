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
                                <th> Technology </th>
                                <th> Level </th>
                                <th> Type </th>
                                <th> Tags </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($quizes as $quiz)
                                <tr>
                                    <td>{{ $quiz->technology->name }}</td>
                                    <td>
                                        @if ($quiz->level == 1)
                                            {{ $quiz->level }}
                                        @elseif ($quiz->level == 2)
                                            {{ $quiz->level }}
                                        @else
                                            {{ $quiz->level }}
                                        @endif
                                    </td>
                                    <td>{{ $quiz->type }}</td>
                                    <td>
                                        @foreach ($quiz->tags as $tag)
                                            <button class="btn btn-sm btn-success">{{ $tag }}</button>
                                        @endforeach
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-secondary m-1"
                                            wire:click="edit('{{ $quiz->id }}')">
                                            Edit
                                        </button>
                                        <button class="btn btn-sm btn-danger m-1"
                                            wire:click="confirmDelete('{{ $quiz->id }}')">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $quizes->links() }}
                </div>
            </div>

        </div>
    </div>

    @include('livewire.admin.interview.quiz.add-or-update')

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
                            You want to delete this Quiz
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
