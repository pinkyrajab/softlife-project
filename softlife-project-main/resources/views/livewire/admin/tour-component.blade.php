<div>
    <div class="components-preview wide-md mx-auto" wire:ignore.self>
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">All Tours
                        <button class="btn btn-primary float-right">
                            <em class="icon ni ni-plus mr-1" data-toggle="modal" data-target="#addTourModal">Add New Tour</em>
                        </button>
                    </h4>
                </div>
            </div>
            <div class="card card-preview">
                <div class="card-inner">
                    <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                        <thead>
                            <tr class="nk-tb-item nk-tb-head text-center">
                                <th class="nk-tb-col"><span class="sub-text">Tour Image</span></th>
                                <th class="nk-tb-col"><span class="sub-text">Tour Name</span></th>
                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Tour Slug</span></th>
                                <th class="nk-tb-col tb-col-lg"><span class="sub-text">Tour Location</span></th>
                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                <th class="nk-tb-col nk-tb-col-tools">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($tours as $tour)
                            <tr class="nk-tb-item text-center">
                                <td class="nk-tb-col">
                                    <span class="tb-lead">
                                        <img src="{{ asset('files/uploads/tour/'.$tour->image) }}" width="80px">
                                    </span>
                                </td>
                                <td class="nk-tb-col">
                                    <span class="tb-lead">{{ $tour->name }}<span class="dot dot-success d-md-none ml-1"></span></span>
                                </td>
                                <td class="nk-tb-col tb-col-mb">
                                    <span class="tb-amount">{{ $tour->slug }}</span>
                                </td>

                                <td class="nk-tb-col tb-col-lg">
                                    <span>{{ $tour->location->name }}</span>
                                </td>
                                <td class="nk-tb-col tb-col-md">
                                    <span class="tb-status text-success">Active</span>
                                </td>
                                <td class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1">
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li>
                                                            <a href="#">
                                                                <em class="icon ni ni-focus"></em><span>Quick View</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" data-toggle="modal" data-target="#editTourModal" wire:click="editTour({{ $tour->id }})">
                                                                <em class="icon ni ni-pen"></em><span>Edit Tour</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <em class="icon ni ni-trash"></em><span>Delete Tour</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!-- .card-preview -->
        </div> <!-- nk-block -->
    </div>

    <div class="ml-auto">
        <div class="modal fade" id="addTourModal" wire:ignore.self>
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Location</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <em class="icon ni ni-cross"></em>
                        </a>
                    </div>
                    <div class="modal-body">
                        <form class="is-alter" wire:submit.prevent="addTour">
                            @csrf
                            <div class="row g-3">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="name">Tour Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name"
                                               wire:keyup="generateSlug" id="name" name="name">
                                        </div>
                                        @error('name') <span class="text-danger"><strong>{{ $message }}</strong></span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="slug">Tour Slug</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control @error('slug') is-invalid @enderror" wire:model="slug"
                                            id="slug" name="slug" disabled>
                                        </div>
                                        @error('slug') <span class="text-danger"><strong>{{ $message }}</strong></span> @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="charges">Tour Charges</label>
                                        <div class="form-control-wrap">
                                            <input type="number" class="form-control @error('charges') is-invalid @enderror" wire:model="charges"
                                            id="charges" name="charges">
                                        </div>
                                        @error('charges') <span class="text-danger"><strong>{{ $message }}</strong></span> @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="select">Tour Location</label>
                                        <div class="form-control-wrap">
                                            <div class="form-control-select">
                                                <select class="form-control @error('location_id') is-invalid @enderror" wire:model="location_id"
                                                 id="select" name="location_id">
                                                    <option value="">Select Location</option>
                                                    @foreach ($locations as $location)
                                                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('location_id') <span class="text-danger"><strong>{{ $message }}</strong></span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <label class="form-label">Tour Image</label>
                                    <input type="file" name="image" class="input-file" wire:model="image"/>
                                    {{-- @if ($image)
                                        <img src="{{ $image->temporaryUrl() }}" width="120">
                                    @endif --}}
                                    @error('image') <span class="text-danger"><strong>{{ $message }}</strong></span> @enderror
                                </div>

                                <div class="col-md-12">
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <textarea class="tinymce-basic form-control" placeholder="Description" wire:model="description"></textarea>
                                        </div>
                                    </div>
                                    @error('description') <span class="text-danger"><strong>{{ $message }}</strong></span> @enderror
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary">Save Tour</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer bg-light">
                        <span class="sub-text">Note: The Slug auto-generates and hence is disabled</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ml-auto">
        <div class="modal fade" id="editTourModal" wire:ignore.self>
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Tour</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <em class="icon ni ni-cross"></em>
                        </a>
                    </div>
                    <div class="modal-body">
                        <form class="is-alter" wire:submit.prevent="editTourData">
                            @csrf
                            <div class="row g-3">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="name">Tour Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name"
                                               wire:keyup="generateSlug" id="name" name="name">
                                        </div>
                                        @error('name') <span class="text-danger"><strong>{{ $message }}</strong></span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="slug">Tour Slug</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control @error('slug') is-invalid @enderror" wire:model="slug"
                                            id="slug" disabled name="slug">
                                        </div>
                                        @error('slug') <span class="text-danger"><strong>{{ $message }}</strong></span> @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="charges">Tour Charges</label>
                                        <div class="form-control-wrap">
                                            <input type="number" class="form-control @error('charges') is-invalid @enderror" wire:model="charges"
                                            id="charges" name="charges">
                                        </div>
                                        @error('charges') <span class="text-danger"><strong>{{ $message }}</strong></span> @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="select">Tour Location</label>
                                        <div class="form-control-wrap">
                                            <div class="form-control-select">
                                                <select class="form-control @error('location_id') is-invalid @enderror" wire:model="location_id"
                                                 id="select" name="location_id">
                                                    <option value="">Select Location</option>
                                                    @foreach ($locations as $location)
                                                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('location_id') <span class="text-danger"><strong>{{ $message }}</strong></span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <label class="form-label">Tour Image</label>
                                    <input type="file" name="image" class="input-file" wire:model="newimage"/>
                                    @if ($newimage)
                                        <img src="{{ $newimage->temporaryUrl() }}" width="120">
                                        @else
                                        <img src="{{ asset('files/uploads/tour') }}/{{ $tour->image }}" width="120"/>
                                    @endif

                                    @error('image') <span class="text-danger"><strong>{{ $message }}</strong></span> @enderror
                                </div>

                                <div class="col-md-12">
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <textarea name="description" class="tinymce-basic form-control" placeholder="Description" wire:model="description"></textarea>
                                        </div>
                                    </div>
                                    @error('description') <span class="text-danger"><strong>{{ $message }}</strong></span> @enderror
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary">Update Tour</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer bg-light">
                        <span class="sub-text">Note: The Slug auto-generates and hence is disabled</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@section('scripts')
    <script>
        window.addEventListener('show-edit-form', event => {
            $('#editTourModal').modal('show');
        })
    </script>

    <script>
        window.addEventListener('show-delete-form', event => {
            $('#deleteTourModal').modal('show');
        })
    </script>

    <script>
        window.addEventListener('close-modal', event => {
            $('#deleteTourModal').modal('hide');
        })
    </script>

    <script>
        window.addEventListener('show-view-form', event => {
            $('#viewTourModal').modal('show');
        })
    </script>
@endsection
