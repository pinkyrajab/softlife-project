<div>
    <div class="components-preview wide-md mx-auto" wire:ignore.self>
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">All Locations
                        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#locationModal">
                            <em class="icon ni ni-plus mr-1"></em>Add New Location</button>
                    </h4>
                </div>
            </div>
            <div class="card card-preview">
                <div class="card-inner">
                    <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                        <thead>
                            <tr class="nk-tb-item nk-tb-head text-center">
                                <th class="nk-tb-col"><span class="sub-text">Location Name</span></th>
                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Location Slug</span></th>
                                <th class="nk-tb-col tb-col-lg"><span class="sub-text">Verified</span></th>
                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                <th class="nk-tb-col nk-tb-col-tools">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($locations as $location)
                                <tr class="nk-tb-item text-center">
                                    <td class="nk-tb-col">
                                        <span class="tb-lead">{{ $location->name }}<span class="dot dot-success d-md-none ml-1"></span></span>
                                    </td>
                                    <td class="nk-tb-col tb-col-mb">
                                        <span class="tb-amount">{{ $location->slug }}</span>
                                    </td>

                                    <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                        <ul class="list-status">
                                            <li><em class="icon text-success ni ni-check-circle"></em> <span></span></li>
                                        </ul>
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
                                                                <a href="#" wire:click.prevent="viewLocationData({{ $location->id }})">
                                                                    <em class="icon ni ni-focus"></em><span>Quick View</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-toggle="modal" data-target="#editLocationModal" wire:click="editLocation({{ $location->id }})">
                                                                    <em class="icon ni ni-pen"></em><span>Edit Location</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" wire:click.prevent="deleteConfirmation({{ $location->id }})">
                                                                    <em class="icon ni ni-trash"></em><span>Delete Location</span>
                                                                </a>
                                                                {{-- data-toggle="modal" data-target="#deleteLocationModal" --}}
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

    <div class="col-lg-12">
        <div class="modal fade col-lg-12" id="locationModal" wire:ignore.self>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Location</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <em class="icon ni ni-cross"></em>
                        </a>
                    </div>
                    <div class="modal-body">
                        <form class="is-alter" wire:submit.prevent="storeLocation">
                            @csrf
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name-1">Location Title</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name"
                                               wire:keyup="generateSlug" id="full-name-1">
                                        </div>
                                        @error('name') <span class="text-danger"><strong>{{ $message }}</strong></span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="email-address-1">Location Slug</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control @error('slug') is-invalid @enderror" wire:model="slug"
                                            id="email-address-1" disabled>
                                        </div>
                                        @error('slug') <span class="text-danger"><strong>{{ $message }}</strong></span> @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary">Save Location</button>
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

    <div class="col-lg-12">
        <div class="modal fade col-lg-12" id="editLocationModal" wire:ignore.self>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Location</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <em class="icon ni ni-cross"></em>
                        </a>
                    </div>
                    <div class="modal-body">
                        <form class="is-alter" wire:submit.prevent="editLocationData">
                            @csrf
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name-1">Location Title</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name"
                                               wire:keyup="generateSlug" id="full-name-1">
                                        </div>
                                        @error('name') <span class="text-danger"><strong>{{ $message }}</strong></span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="email-address-1">Location Slug</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control @error('slug') is-invalid @enderror" wire:model="slug"
                                            id="email-address-1" disabled>
                                        </div>
                                        @error('slug') <span class="text-danger"><strong>{{ $message }}</strong></span> @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary">Save Location</button>
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

    <div class="col-lg-12">
        <div class="modal fade col-lg-12" id="deleteLocationModal" wire:ignore.self>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Location Confirmation</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <em class="icon ni ni-cross"></em>
                        </a>
                    </div>
                    <div class="modal-body pt-4 pb-4">
                        <h6>Are you sure you want to delete location? This action cannot be undone</h6>
                    </div>

                    <div class="modal-footer">
                       <button class="btn btn-sm btn-success" wire:click="cancel()" data-dismiss="modal" aria-label="Close">No. Cancel</button>
                       <button class="btn btn-sm btn-danger" wire:click="deleteLocationData()">Sure. Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="modal fade col-lg-12" id="viewLocationModal" wire:ignore.self>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">View Location Data</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <em class="icon ni ni-cross"></em>
                        </a>
                    </div>
                    <div class="modal-body">
                       <table class="table">
                            <thead>
                                <tr class="nk-tb-item nk-tb-head text-center">
                                    <th class="nk-tb-col"><span class="sub-text">Location Name</span></th>
                                    <th class="nk-tb-col tb-col-mb"><span class="sub-text">Location Slug</span></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="nk-tb-item text-center">
                                    <td class="nk-tb-col">
                                        <span class="tb-lead">{{ $view_location_name }}</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-mb">
                                        <span class="tb-amount">{{ $view_location_slug }}</span>
                                    </td>
                                </tr>
                            </tbody>
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@section('scripts')
    <script>
        window.addEventListener('show-edit-form', event => {
            $('#editLocationModal').modal('show');
        })
    </script>

    <script>
        window.addEventListener('show-delete-form', event => {
            $('#deleteLocationModal').modal('show');
        })
    </script>

    <script>
        window.addEventListener('close-modal', event => {
            $('#deleteLocationModal').modal('hide');
        })
    </script>

    <script>
        window.addEventListener('show-view-form', event => {
            $('#viewLocationModal').modal('show');
        })
    </script>
@endsection
