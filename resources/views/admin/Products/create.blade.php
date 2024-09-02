@extends('admin.layouts.header')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4> Add Product </h4>
                <form class="custom-validation" novalidate>
                    @csrf

                    <div class="row d-flex">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label"> Title </label>
                                <input type="text" class="form-control" id="validationCustom01"
                                    placeholder=" Title " required>
                            </div>
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label"> Slug </label>
                                <input type="text" class="form-control" id="validationCustom01"
                                    placeholder=" Slug " required>
                            </div>
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label"> Short Description. </label>
                                <input type="text" class="form-control" id="validationCustom01"
                                    placeholder=" Short Description... " required>
                            </div>
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label"> Long Description. </label>
                                <textarea class="form-control" placeholder=" Long Description... " id="validationCustom01" rows="5" required></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom01" class="form-label">Original Price </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" value="42" id="validationCustom01" placeholder=" Original Price.... " required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom01" class="form-label"> Price </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" value="42" id="validationCustom01" placeholder=" Price.... " required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom01" class="form-label"> Quantity </label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" value="42" id="validationCustom01" placeholder=" Price.... " required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h3> Product Status </h3>
                            <div class="mb-3">
                                <label for="validationCustom03" class="form-label"> Status </label>
                                <select
                                    class="form-select"
                                    id="validationCustom03"
                                    required>
                                    <option selected disabled value="">
                                        Select option ...
                                    </option>
                                    <option> Active </option>
                                    <option> InActive </option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <h3> Product Category </h3>
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label"> Status </label>
                                    <select
                                        class="form-select"
                                        id="validationCustom03"
                                        required>
                                        <option selected disabled value="">
                                            Select option ...
                                        </option>
                                        <option> Active </option>
                                        <option> InActive </option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <h3> Product Sub Category </h3>
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label"> Status </label>
                                    <select
                                        class="form-select"
                                        id="validationCustom03"
                                        required>
                                        <option selected disabled value="">
                                            Select option ...
                                        </option>
                                        <option> Active </option>
                                        <option> InActive </option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div>
                                    <label class="form-label">Date Range</label>

                                    <div class="input-daterange input-group" id="datepicker6" data-date-format="dd M, yyyy" data-date-autoclose="true" data-provide="datepicker" data-date-container='#datepicker6'>
                                        <input type="text" class="form-control" name="start" placeholder="Start Date" />
                                        <input type="text" class="form-control" name="end" placeholder="End Date" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


            </div>

            <div class="form-check m-3">
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
                <button class="btn btn-primary m-3" type="submit">Submit form</button>
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
    $('#title').change(function() {
        var element = $(this);
        $.ajax({
            type: "get",
            data: {
                title: element.val()
            },
            dataType: "json",
            success: function(response) {
                if (response["status"] == true) {
                    $("#slug").val(response["slug"]);
                }
            }
        });
    });
</script>
@endsection
