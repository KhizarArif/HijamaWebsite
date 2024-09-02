@extends('admin.layouts.header')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4> Add Category </h4>
                <form class="custom-validation" novalidate id="categoryForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="validationCustom01"
                                    placeholder="Category Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="validationCustom02" class="form-label">Slug</label>
                                <input type="text" class="form-control" name="slug" id="validationCustom02"
                                    placeholder="slug" required>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="validationCustom03" class="form-label"> Status </label>
                                <select
                                    class="form-select"
                                    id="validationCustom03"
                                    name="status"
                                    required>
                                    <option selected disabled value="">
                                        Select option ...
                                    </option>
                                    <option> Active </option>
                                    <option> InActive </option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="validationCustom03" class="form-label"> Show on Home </label>
                                <select
                                    class="form-select"
                                    id="validationCustom03"
                                    name="show_on_home"
                                    required>
                                    <option selected disabled value="">
                                        Select option ...
                                    </option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Dropzone</h4>
                                    <p class="card-title-desc">DropzoneJS is an open source library
                                        that provides drag’n’drop file uploads with image previews.
                                    </p>

                                    <div>
                                        <form action="#" class="dropzone">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple="multiple">
                                            </div>
                                            <div class="dz-message needsclick">
                                                <div class="mb-3">
                                                    <i class="display-4 text-muted ri-upload-cloud-2-line"></i>
                                                </div>

                                                <h4>Drop files here or click to upload.</h4>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="text-center mt-4">
                                        <button type="button" class="btn btn-primary waves-effect waves-light">Send Files</button>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                            required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- end card -->
    </div>
</div>
@endsection


@section('customJs')

<script>
    $(document).ready(function() {
        console.log('Document ready!'); // Check if this logs to the console

        $("#categoryForm").submit(function(e) {
            e.preventDefault();
            console.log('Form submission intercepted');
            alert('Form submission intercepted');
            debugger;

            $.ajax({
                url: "{{ route('categories.store') }}",
                type: "POST",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    console.log('AJAX request successful', data);
                    if (data.status == 200) {
                        alert(data.message);
                        location.reload();
                    } else {
                        alert(data.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX request failed', status, error);
                }
            });
        });
    });


</script>
@endsection
