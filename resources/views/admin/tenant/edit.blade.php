@extends('layouts.admin.app')

@section('content')
    <h3 class="text-center mb-5 mt-5">Edit Patient Information</h3>
    <div class="col-md-6 offset-md-3">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('tenant.update',['id'=>$tenant->id])}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-row">
                <div class="col-md-6">
                    <label for="division">Patient name</label>
                    <input type="text" required class="form-control" placeholder="Diagnostic Center Name" name="name" value="{{$tenant->name}}">
                </div>
                <div class="col-md-6">
                    <label for="division">Phone number</label>
                    <input type="text"  class="form-control" placeholder="Phone" name="phone" required value="{{$tenant->phone}}">
                </div>
                <div class="col-md-6">
                    <label for="division">Division</label>
                    <select name="division" id="division" class="form-control" required>
                        <option value="">Select Division</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Barishal">Barishal</option>
                        <option value="Mymensingh">Mymensingh</option>
                        <option value="Sylhet">Sylhet</option>

                    </select>
                </div>
                <div class="col-md-6">
                    <label for="district">District</label>
                    <select class="form-control" name="district" required>
                        <option value="">Select District</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Gaibandha">Gaibandha</option>
                        <option value="Bogura">Bogura</option>
                        <option value="Dinajpur">Dinajpur</option>
                        <option value="Kurigram">Kurigram</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Naogaon">Naogaon</option>
                        <option value="Natore">Natore</option>
                        <option value="Comilla">Comilla</option>
                        <option value="Feni">Feni</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="location">Area</label>
                    <select class="form-control" name="location" required>
                        <option value="">Select Area</option>
                        <option value="Mirpur-10">Mirpur-10</option>
                        <option value="Mirpur-1">Mirpur-1</option>
                        <option value="Mirpur-2">Mirpur-2</option>
                        <option value="Mirpur-11">Mirpur-11</option>
                        <option value="Mirpur-11.5">Mirpur-11.5</option>
                        <option value="Mirpur-12">Mirpur-12</option>
                        <option value="Dhanmondi-15">Dhanmondi-15</option>
                        <option value="Dhanmondi-32">Dhanmondi-32</option>
                        <option value="Dhanmondi-27">Dhanmondi-27</option>
                        <option value="Sobhanbag">Sobhanbag</option>
                        <option value="Sukrabad">Sukrabad</option>
                        <option value="Tollabag">Tollabag</option>
                        <option value="Mohammadpur">Mohammadpur</option>
                        <option value="Badda">Badda</option>
                        <option value="Farmgate">Farmgate</option>
                        <option value="Greenroad">Greenroad</option>
                        <option value="Uttara">Uttara</option>
                        <option value="Banani">Banani</option>
                        <option value="Gulshan">Gulshan</option>
                        <option value="Gulishtan">Gulishtan</option>
                        <option value="Motijheel">Motijheel</option>
                        <option value="Mohakhali">Mohakhali</option>
                        <option value="Mouchak">Mouchak</option>
                        <option value="Paltan">Paltan</option>
                        <option value="Rampura">Rampura</option>
                        <option value="SignBoard">SignBoard</option>
                        <option value="Jatrabari">Jatrabari</option>
                        <option value="Azimpur">Azimpur</option>
                        <option value="Shyamoli">Shyamoli</option>
                        <option value="Kalyanpur">Kalyanpur</option>
                        <option value="Kamlapur">Kamlapur</option>
                        <option value="Monipuripara">Monipuripara</option>
                        <option value="Dhanmondi-27">Dhanmondi-27</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="tenant_type">Patient Type</label>
                    <select class="form-control" name="tenant_type" required>
                        <option value="">Select Patient type</option>
                        <option value="Serious Patient">Serious Patient</option>
                        <option value="Normal Patient">Normal Patient</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="tenant_type">Doctor Type</label>
                    <select class="form-control" name="home" required>
                        <option value="">Select Doctor type</option>
                        <option value="Medecine Doctor">Medecine Doctor</option>
                        <option value="Surgery Doctor">Surgery Doctor</option>
                        <option value="Gastroenterologists Doctor">Gastroenterologists Doctor</option>
                        <option value="Cardiologists Doctor">Cardiologists Doctor</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="rent">Fees:</label>
                    <input type="number" class="form-control" name="budget" placeholder="Budget(BDT)" min="500" required value="{{$tenant->budget}}">
                </div>

                <div class="col-md-6">
                    <label for="tenant_type">Blood Group</label>
                    <select class="form-control" name="washroom" required>
                        <option value="">Select Blood Group</option>
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>
                        <option value="O+">O+</option>
                        <option value="AB+">AB+</option>
                        <option value="A-">A-</option>
                        <option value="B-">B-</option>
                        <option value="O-">O-</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="tenant_type">Age</label>
                    <select class="form-control" name="balcony" required>
                        <option value="">Enter your age</option>
                        <option value="20">20</option>
                        <option value="22">22</option>
                        <option value="30">30</option>
                        <option value="35">35</option>
                        <option value="40">40</option>
                    </select>
                </div>

                <div class="col-md-12">
                    <label for="Comment">Comment</label>
                    <textarea name="comment" id="comment" cols="30" rows="20" class="form-control">{{$tenant->comment}}</textarea>
                </div>

                <div class="col-md-2 text-center d-flex ml-auto mt-2">
                    <button type="submit" class="btn btn-primary"> Submit </button>
                </div>

            </div>
        </form>
    </div>
@endsection


