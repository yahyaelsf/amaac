@extends('admin.layouts.dashboard')

@section('content')
    <div class="row">

        <div class="col-xxl">
            <div class="card mb-4">
                <h5 class="card-header">
                    {{ $role ? 'Edit role' : 'Create New role' }}
                </h5>

                {{-- <form class="card-body" action="{{ route('role.roles.store') }}" method="post"
                    enctype="multipart/form-data">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @csrf
                    @isset($role)
                        <input type="hidden" name="pk_i_id" value="{{ $role->getKey() }}" />
                    @endisset

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">name</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="s_title" class="form-control"
                                value="{{ $role->s_name ?? '' }}" placeholder="title role">
                            @error('s_title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">email</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="s_email" class="form-control"
                                value="{{ $role->s_email ?? '' }}" placeholder="email role">
                            @error('s_email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">select Role</label>
                        <div class="col-sm-9">
                            <select class="form-select" name="fk_i_role_id" id="exampleFormControlSelect1"
                                aria-label="Default select example">
                                <option selected="">Choose Role</option>
                                @foreach ($roles as $role)
                                     <option @selected($role && isset($role->roles[0])) value="{{ $role->id }}">{{ $role->display_name }}</option>
                                @endforeach


                            </select>
                             @error('e_type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">password</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" name="s_password" class="form-control"
                                 placeholder="password role">
                            @error('s_password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">confirm password</label>
                        <div class="col-sm-9">
                            <input type="password" id="multicol-username" name="s_confirm_password" class="form-control"
                                value="{{ $role->s_confirm_password ?? '' }}" placeholder="confirm password role">
                            @error('s_confirm_password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="pt-4">
                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <button type="submit"
                                    class="btn btn-primary me-sm-2 me-1 waves-effect waves-light">Submit</button>
                                <a href="{{ route('role.roles.index') }}" type="reset"
                                    class="btn btn-label-secondary waves-effect">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form> --}}
                <form id="addRoleForm" action="{{ route('admin.roles.process') }}" method="post" class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @csrf
                    @isset($role)
                        <input type="hidden" name="pk_i_id" value="{{ $role->getKey() }}" />
                    @endisset
                    <div class="col-12 mb-4 fv-plugins-icon-container">
                        <label class="form-label" for="modalRoleName">Role Name</label>
                        <input type="text" id="modalRoleName" name="name" value="{{ $role->name ?? '' }}"
                            class="form-control" {{ $role ? 'readonly' : '' }} placeholder="Enter a role name"
                            tabindex="-1">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <div class="col-12">
                        <h5>Role Permissions</h5>
                        <!-- Permission table -->
                        <div class="table-responsive">
                            <table class="table table-flush-spacing">
                                <tbody>
                                    <tr style="border-bottom-width: 1px;">
                                        <td class="text-nowrap fw-semibold">
                                            Administrator Access
                                            <i class="ti ti-info-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                                                aria-label="Allows a full access to the system"
                                                data-bs-original-title="Allows a full access to the system"></i>
                                        </td>
                                        <td>
                                            {{-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="selectAll">
                                                <label class="form-check-label" for="selectAll"> Select All </label>
                                            </div> --}}
                                        </td>
                                    </tr>
                                    @foreach ($basicPermissions as $basicPermission)
                                        <tr style="border-bottom-width: 1px;">
                                            <td class="text-nowrap fw-semibold" >{{ $basicPermission->display_name }}</td>


                                            @if ($basicPermission->children())
                                                @foreach ($basicPermission->children as $childPermission)
                                                    <td>
                                                        <div class="form-check me-1 me-lg-1">
                                                            <input class="form-check-input" name="permissions[]"
                                                                type="checkbox" id="userManagementRead"
                                                                value="{{ $childPermission->id }}"
                                                                {{ isset($role) ? ($role->hasPermissionTo($childPermission->name) ? 'checked' : '') : '' }}>

                                                            <label class="form-check-label" for="userManagementRead">
                                                                {{ $childPermission->display_name }}
                                                            </label>
                                                        </div>
                                                    </td>
                                                @endforeach
                                            @endif


                                            </td>
                                        </tr>
                                    @endforeach
                                    {{-- <tr>
                                        <td class="text-nowrap fw-semibold">Content Management</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="form-check me-3 me-lg-5">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="contentManagementRead">
                                                    <label class="form-check-label" for="contentManagementRead"> Read
                                                    </label>
                                                </div>
                                                <div class="form-check me-3 me-lg-5">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="contentManagementWrite">
                                                    <label class="form-check-label" for="contentManagementWrite"> Write
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="contentManagementCreate">
                                                    <label class="form-check-label" for="contentManagementCreate"> Create
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap fw-semibold">Disputes Management</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="form-check me-3 me-lg-5">
                                                    <input class="form-check-input" type="checkbox" id="dispManagementRead">
                                                    <label class="form-check-label" for="dispManagementRead"> Read </label>
                                                </div>
                                                <div class="form-check me-3 me-lg-5">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="dispManagementWrite">
                                                    <label class="form-check-label" for="dispManagementWrite"> Write
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="dispManagementCreate">
                                                    <label class="form-check-label" for="dispManagementCreate"> Create
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap fw-semibold">Database Management</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="form-check me-3 me-lg-5">
                                                    <input class="form-check-input" type="checkbox" id="dbManagementRead">
                                                    <label class="form-check-label" for="dbManagementRead"> Read </label>
                                                </div>
                                                <div class="form-check me-3 me-lg-5">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="dbManagementWrite">
                                                    <label class="form-check-label" for="dbManagementWrite"> Write
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="dbManagementCreate">
                                                    <label class="form-check-label" for="dbManagementCreate"> Create
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap fw-semibold">Financial Management</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="form-check me-3 me-lg-5">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="finManagementRead">
                                                    <label class="form-check-label" for="finManagementRead"> Read </label>
                                                </div>
                                                <div class="form-check me-3 me-lg-5">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="finManagementWrite">
                                                    <label class="form-check-label" for="finManagementWrite"> Write
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="finManagementCreate">
                                                    <label class="form-check-label" for="finManagementCreate"> Create
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap fw-semibold">Reporting</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="form-check me-3 me-lg-5">
                                                    <input class="form-check-input" type="checkbox" id="reportingRead">
                                                    <label class="form-check-label" for="reportingRead"> Read </label>
                                                </div>
                                                <div class="form-check me-3 me-lg-5">
                                                    <input class="form-check-input" type="checkbox" id="reportingWrite">
                                                    <label class="form-check-label" for="reportingWrite"> Write </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="reportingCreate">
                                                    <label class="form-check-label" for="reportingCreate"> Create </label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap fw-semibold">API Control</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="form-check me-3 me-lg-5">
                                                    <input class="form-check-input" type="checkbox" id="apiRead">
                                                    <label class="form-check-label" for="apiRead"> Read </label>
                                                </div>
                                                <div class="form-check me-3 me-lg-5">
                                                    <input class="form-check-input" type="checkbox" id="apiWrite">
                                                    <label class="form-check-label" for="apiWrite"> Write </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="apiCreate">
                                                    <label class="form-check-label" for="apiCreate"> Create </label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap fw-semibold">Repository Management</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="form-check me-3 me-lg-5">
                                                    <input class="form-check-input" type="checkbox" id="repoRead">
                                                    <label class="form-check-label" for="repoRead"> Read </label>
                                                </div>
                                                <div class="form-check me-3 me-lg-5">
                                                    <input class="form-check-input" type="checkbox" id="repoWrite">
                                                    <label class="form-check-label" for="repoWrite"> Write </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="repoCreate">
                                                    <label class="form-check-label" for="repoCreate"> Create </label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap fw-semibold">Payroll</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="form-check me-3 me-lg-5">
                                                    <input class="form-check-input" type="checkbox" id="payrollRead">
                                                    <label class="form-check-label" for="payrollRead"> Read </label>
                                                </div>
                                                <div class="form-check me-3 me-lg-5">
                                                    <input class="form-check-input" type="checkbox" id="payrollWrite">
                                                    <label class="form-check-label" for="payrollWrite"> Write </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="payrollCreate">
                                                    <label class="form-check-label" for="payrollCreate"> Create </label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                        <!-- Permission table -->
                    </div>
                    <div class="col-12 text-center mt-4">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Submit</button>
                        <button type="reset" class="btn btn-label-secondary waves-effect" data-bs-dismiss="modal"
                            aria-label="Close">
                            Cancel
                        </button>
                    </div>
                    <input type="hidden">
                </form>
            </div>
        </div>
    </div>
@endsection


@push('js')
@endpush
