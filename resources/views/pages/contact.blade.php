@extends('layouts.app')
@section('content')
    <div class="card mt-4" style="background:  #b3e8ca">
        <div class="card-title ml-4 mt-5"><h1>Contact</h1>
            <p><b>Please fill and submit the below form for more details</b></p></div>
        <div class="card-body">
            <form action="/contact" method="post" action="{{route('contact.store')}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group"><b>
                            <label for="Email_Id">Email</label>
                            <input name="Email" type="email" class="form-control" id="Email" placeholder="name@example.com">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control" id="name">
                        </div>
                    </div>
                </div>
                </b>
                <div class="form-group"><b>
                    <label for="message">Message</label>
                    <textarea type="Message" name="Message" class="form-control" id="Message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </b>
            </form>
        </div>
    </div>
@endsection