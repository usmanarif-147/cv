<div>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <button class="btn btn-primary">Add</button>
            <input type="text" class="form-control w-25" placeholder="Search">
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>GitHub Link</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>
                                <button wire:click="toggleRow({{ $project->id }})"
                                    class="btn rounded-circle
                                     {{ in_array($project->id, $this->expandedRows) ? 'btn-danger' : 'btn-success' }}">
                                    <span class="fw-bolder">
                                        {{ in_array($project->id, $this->expandedRows) ? '-' : '+' }} </span>
                                </button>
                            </td>
                            <td>{{ $project->title }}</td>
                            <td>{{ Str::limit($project->description, 50) }}</td>
                            <td>
                                <a href="{{ $project->github_link }}" target="_blank">GitHub</a>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-secondary m-1"> Add Credential </button>
                                <a href="{{ route('admin.add.update') }}" class="btn btn-sm btn-warning m-1"> Edit </a>
                                <button class="btn btn-sm btn-danger m-1"> Delete </button>
                            </td>
                        </tr>
                        @if (in_array($project->id, $this->expandedRows))
                            <tr>
                                <td colspan="5">
                                    <strong>About:</strong> {{ $project->about }} <br>
                                    <strong>Technologies:</strong> {{ $project->technologies }} <br>
                                    <strong>Tags:</strong> {{ $project->tags }}
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $projects->links() }}
        </div>
    </div>

</div>
