<div>
    <form wire:submit.prevent="saveOrUpdateProject">
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label class="form-label">
                        Title
                        @error('title')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </label>
                    <input type="text" class="form-control" placeholder="title" wire:model.live="title">
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        About
                        @error('about')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </label>
                    <textarea class="form-control" rows="3" wire:model.live="about"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Description
                        @error('description')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </label>
                    <textarea class="form-control" rows="3" wire:model.live="description"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Technologies
                        @error('technologies')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </label>
                    <input type="text" class="form-control" placeholder="title" wire:model.live="technologies">
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Github
                        @error('github_link')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </label>
                    <input type="text" class="form-control" placeholder="github" wire:model.live="github_link">
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    @foreach ($images as $index => $image)
                        <div class="col-6">
                            <div class="mb-3">
                                <img src="{{ $image->temporaryUrl() }}" alt="Image Preview" style="max-width: 100px;">
                                <button type="button" class="btn btn-danger btn-sm"
                                    wire:click="removeImage({{ $index }})">Delete</button>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mb-3">
                    <input type="file" wire:model="images.{{ count($images) }}" accept="image/*">
                    @error('images.*')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit"> Save </button>
            </div>
        </div>
    </form>
</div>
