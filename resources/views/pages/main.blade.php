@extends('home')

@section('content')

 <div class="card-body">
       <div class="col-sm-6">
             <h5 class="card-title">Fields with <span class="text-danger">*</span> are mandatory!</h5>
                 <form method="post" action="store">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>User Name <span class="text-danger">*</span></label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter user name" required="">
                        </div>

                        <div class="form-group">
                            <label>User Email <span class="text-danger">*</span></label>
                            <input type="email" name="useremail" id="useremail" class="form-control" placeholder="Enter user email" required="">
                        </div>

                        <div class="form-group">
                            <label>User Phone <span class="text-danger">*</span></label>
                            <input type="tel" pattern=".{14,14}" title="Accept US Number format (888) 888-8888" class="tel form-control" name="userphone" id="userphone" x-autocompletetype="tel" placeholder="Enter user phone" required="">
                        </div>

                        <div class="form-group">
                            <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Add User</button>
                        </div>
                 </form>
         </div>
    </div>
@endsection