<div class="components-preview wide-md mx-auto">
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">All Users
                    <!-- <a href="#">
                        <button class="btn btn-primary float-right"><em class="icon ni ni-plus mr-1"></em>Add New User</button>
                    </a>                                                     -->
                </h4>
            </div>
        </div>
        <div class="card card-preview">
            <div class="card-inner">
                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                    <thead>
                        <tr class="nk-tb-item nk-tb-head text-center">
                            <th class="nk-tb-col"><span class="sub-text">User Name</span></th>
                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">User Email</span></th>
                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Verified</span></th>
                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                            <th class="nk-tb-col nk-tb-col-tools">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="nk-tb-item text-center">
                                <td class="nk-tb-col">
                                    <span class="tb-lead">{{ $user->name }}<span class="dot dot-success d-md-none ml-1"></span></span>
                                </td>
                                <td class="nk-tb-col tb-col-mb">
                                    <span class="tb-amount">{{ $user->name }}</span>
                                </td>

                                <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                    <ul class="list-status">
                                        <li><em class="icon text-success ni ni-check-circle"></em> <span>Email</span></li>
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
                                                        <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-pen"></em><span>Edit User</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete User</span></a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
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
