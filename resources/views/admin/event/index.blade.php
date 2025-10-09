@extends("admin.layouts.overall")
@section("page_title", "All Events")
@section('module', 'Events')
@section("content")

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    {{-- @include('admin.includes.bodytop') --}}
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@yield('page_title')</h5>
                <!--end::Page Title-->
                <!--begin::Actions-->
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                        <a href="" class="text-muted">@yield('module')</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}" class="text-muted">Dashboard</a>
                    </li>

                </ul>
            </div>
            <a href="#" class="btn btn-warning font-weight-bolder font-size-sm mr-3" data-toggle="modal" data-target="#add-admin">
                <i class="flaticon2-pen"></i> Create Event
            </a>
        </div>
        
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Dashboard-->
            <!--begin::Row-->
            <div class="row">
                <div class="col-xxl-12 col-md-12 order-2 order-xxl-1">
                    <!--begin::Advance Table Widget 2-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bolder text-dark">List of @yield('page_title')</span>
                                {{-- <span class="text-muted mt-3 font-weight-bold font-size-sm"> {{ $count_target_data }} {{ $count_target_data > 1 ? 'targets' : 'target' }}</span> --}}
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Dropdown-->
                                {{-- <a href="#" class="btn btn-warning font-weight-bolder font-size-sm mr-3" data-toggle="modal" data-target="#add-admin">
                                    <i class="flaticon2-add-1"></i> Create Admin
                                </a> --}}

                            </div>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <table class="table table-separate table-head-custom table-checkable" id="example" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Theme</th>
                                        <th>Caption</th>
                                        <th>Start Date</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $cnt = 1;
                                    @endphp
                                    @foreach($events as $event)
                                        <tr>
                                            <td>
                                                {{ $cnt++ }}
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                        {{ $event->theme}}
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                        {{ $event->caption }}
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                        {{ $event->start_date }}
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                                        {{ $event->year }}
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                @if ($event->status == 1)
                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Active</span>
                                                @endif
                                                @if ($event->status == 0)
                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <button href="#" class="btn btn-icon btn-warning" data-toggle="modal" data-target="#edit-admin{{ $event->id }}">
                                                    <i class="flaticon2-edit"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- {{ $event->render() }} --}}
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Advance Table Widget 2-->
                </div>

            </div>
            <!--end::Row-->
            <!--end::Dashboard-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
<!--begin::Footer-->
@foreach($events as $event)
    <div class="modal fade" id="edit-admin{{ $event->id }}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card card-custom">

                        <!--begin::Form-->
                        <form action="{{ route('event.edit', $event->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <input name="target" value="{{ $event->id }}" type="hidden" readonly>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Theme <span class="text-danger">*</span></label>
                                            <input type="text" name="theme" value="{{ $event->theme }}" class="form-control" required="required">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Caption <span class="text-danger">*</span></label>
                                            <input type="text" name="caption" value="{{ $event->caption }}" class="form-control" required="required">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Start Date <span class="text-danger">*</span></label>
                                            <input type="date" name="start_date" value="{{ $event->start_date }}" class="form-control" required="required">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Year <span class="text-danger">*</span></label>
                                            <input type="text" name="year" value="{{ $event->year }}" class="form-control" required="required">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="d-flex flex-stack mt-5">
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input"
                                                    type="checkbox"
                                                    value="1"
                                                    @if ($event->status == 1) checked @endif
                                                    name="status" />
                                                <span class="form-check-label fw-semibold text-muted">Active</span>
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center pt-15">
                                    <button data-dismiss="modal" type="button" class="btn btn-light me-3">Close</button>
                                    <button type="submit" class="btn btn-primary">
                                        <span class="indicator-label">Save</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>


                </div>

            </div>
        </div>
    </div>

@endforeach

<div class="modal fade" id="add-admin" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel"><b>Create New Event</b></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-custom">

                    <!--begin::Form-->
                    <form class="form" action="{{ route('event.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            {{-- <input name="target" value="{{ $event->id }}" type="hidden" readonly> --}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Theme <span class="text-danger">*</span></label>
                                        <input type="text" name="theme" value="{{ old('theme') }}" class="form-control" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Caption <span class="text-danger">*</span></label>
                                        <input type="text" name="caption" value="{{ old('caption') }}" class="form-control" required="required">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Start Date <span class="text-danger">*</span></label>
                                        <input type="date" name="start_date" value="{{ old('start_date') }}" class="form-control" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Year <span class="text-danger">*</span></label>
                                        <input type="text" name="year" value="{{ old('year') }}" class="form-control" required="required">
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="d-flex flex-stack mt-5">
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" checked
                                                name="status" />
                                            <span class="form-check-label fw-semibold text-muted">Active</span>
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                </div>
                            </div>
                            <div class="text-center pt-15">
                                <button data-dismiss="modal" type="button" class="btn btn-light me-3">Close</button>
                                <button type="submit" class="btn btn-primary">
                                    <span class="indicator-label">Save</span>
                                </button>
                            </div>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>


            </div>

        </div>
    </div>
</div>

@push('js')
<script>
    var numericInputs = document.querySelectorAll('.numeric-input');

    numericInputs.forEach(function(input) {
        input.addEventListener('input', function(event) {
            var inputValue = event.target.value;

            if (/[^0-9]/.test(inputValue)) {
                event.target.value = inputValue.replace(/[^0-9]/g, '');
            }
        });
    });
</script>

<script>
    function allowAlphabets(inputElement) {
        inputElement.addEventListener('input', function(event) {
            var inputValue = event.target.value;

            if (/[^a-zA-Z\s]/.test(inputValue)) {
                event.target.value = inputValue.replace(/[^a-zA-Z\s]/g, '');
            }
        });
    }

    // Usage example
    var alphabeticInputs = document.querySelectorAll('.alphabetic-input');

    alphabeticInputs.forEach(function(input) {
        allowAlphabets(input);
    });
</script>
@endpush


@endsection