<div>
    <div wire:ignore.self class="modal fade" id="storeOrUpdate" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="storeOrUpdateLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <form wire:submit.prevent="storeOrUpdate">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="storeOrUpdateLabel">{{ $form_title }}</h1>
                        <button type="button" class="btn-close" aria-label="Close" wire:click="closeModal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label class="form-label">
                                        Select Technology
                                        @error('technology_id')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </label>
                                    <select class="form-select" wire:model.live="technology_id">
                                        <option value="0" selected>Select</option>
                                        @foreach ($technologies as $technology)
                                            <option value="{{ $technology->id }}"
                                                {{ $technology->id == $technology_id ? 'selected' : '' }}>
                                                {{ $technology->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label class="form-label">
                                        Select Level
                                        @error('level')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </label>
                                    <select class="form-select" wire:model.live="level">
                                        <option value="0" selected>Select</option>
                                        <option value="1" {{ $level == 1 ? 'selected' : '' }}>Easy</option>
                                        <option value="2" {{ $level == 2 ? 'selected' : '' }}>Medium</option>
                                        <option value="3" {{ $level == 3 ? 'selected' : '' }}>Hard</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label class="form-label">
                                        Select Type
                                        @error('type')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </label>
                                    <select class="form-select" wire:model.live="type">
                                        <option value="0" selected>Select</option>
                                        <option value="1" {{ $type == 1 ? 'selected' : '' }}>Problem Solving
                                        </option>
                                        <option value="2" {{ $type == 2 ? 'selected' : '' }}>Conseptual</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">
                                        Question
                                        @error('question')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </label>
                                    <input type="text" class="form-control" wire:model.live="question">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">
                                        Answer
                                        @error('answer')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </label>
                                    <input type="text" class="form-control" wire:model.live="answer">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">
                                        Example
                                        @error('example')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </label>
                                    <input type="text" class="form-control" wire:model.live="example">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">
                                        Tags
                                        @error('tags')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </label>
                                    <div class="tags-input-container">
                                        @foreach ($tags as $index => $tag)
                                            <div class="tag">
                                                {{ $tag }}
                                                <button type="button"
                                                    wire:click="removeTag({{ $index }})">&times;</button>
                                            </div>
                                        @endforeach
                                        <input type="text" class="form-control" wire:model.defer="newTag"
                                            wire:keydown.enter.prevent="addTag" placeholder="Add a tag" />
                                    </div>
                                </div>
                            </div>
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
</div>
