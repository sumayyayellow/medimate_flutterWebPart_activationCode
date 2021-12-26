@extends('layouts.admin')
@section('title','Add Insurance')
@section('content')
@include('includes.banner',['one'=>'Insurance','two'=>'Create'])

<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <form id="add-account" class="form-group" action="{{route('admin.insurance.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4>Add Insurance</h4>
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <label>Insurance Company Name</label>
                            <input value="{{old('name')}}" type="text" class="form-control" name="name" required>
                        </div>

                        <div class="form-group">
                            <label>Contact Person Name</label>
                            <input value="{{old('contact_person_name')}}" type="text" class="form-control" name="contact_person_name" required>
                        </div>

                        <div class="form-group">
                            <label>Contact Person Mobile No.</label>
                            <input value="{{old('contact_person_phone')}}" type="text" class="form-control" name="contact_person_phone" minlength="11" maxlength="11" placeholder="01XXXXXXXXX" required>
                        </div>


                        <div class="form-group">
                            <label>Company Logo</label>
                            <input class="form-control" type="file" name="image" accept="image/*" />
                        </div>


                    </div>
                    <div class="card-footer text-left">
                        <button class="btn btn-primary mr-1" type="submit" name="submit">Add New</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
