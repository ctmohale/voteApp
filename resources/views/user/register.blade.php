@extends('userlayout.app')
@section('title','Welcome | Voting App')
@section('content')
  <section class="main">
      <div class="sub-main bg-light pb-5">
        <p class="text-secondary">Register to vote!</p>

        <div class="main-form pb-5">
            <form action="">
                @csrf
                <div class="row">
                    <div class="col-2"><i class="fas fa-edit text-secondary"></i></div>
                    <div class="col-9"><input class="form-control" name="name" type="text" placeholder="Name">
                        @error('record')
                            <small> <p class="text-danger" style="text-align: left !important; font-size: 17px !important;"><i class="fas fa-frown-open"></i>dd</p></small>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-2"><i class="fas fa-edit text-secondary"></i></div>
                    <div class="col-9"><input class="form-control" name="surname" type="text" placeholder="Surname">
                        @error('record')
                            <small> <p class="text-danger" style="text-align: left !important; font-size: 17px !important;"><i class="fas fa-frown-open"></i>dd</p></small>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-2"><i class="fas fa-edit text-secondary"></i></div>
                    <div class="col-9"><input class="form-control" name="email" type="email" placeholder="Email">
                        @error('record')
                            <small> <p class="text-danger" style="text-align: left !important; font-size: 17px !important;"><i class="fas fa-frown-open"></i>dd</p></small>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-2"><i class="fas fa-edit text-secondary"></i></div>
                    <div class="col-9"><input class="form-control" name="password" type="password" placeholder="Password">
                        @error('record')
                            <small> <p class="text-danger" style="text-align: left !important; font-size: 17px !important;"><i class="fas fa-frown-open"></i>dd</p></small>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-2"><i class="fas fa-edit text-secondary"></i></div>
                    <div class="col-9"><input class="form-control" name="address" type="text" placeholder="Address">
                        @error('record')
                            <small> <p class="text-danger" style="text-align: left !important; font-size: 17px !important;"><i class="fas fa-frown-open"></i>dd</p></small>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-2"><i class="fas fa-edit text-secondary"></i></div>
                    <div class="col-9"><input class="form-control" name="postal" type="number" min="0" placeholder="Postal Code">
                        @error('record')
                            <small> <p class="text-danger" style="text-align: left !important; font-size: 17px !important;"><i class="fas fa-frown-open"></i>dd</p></small>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-2"><i class="fas fa-edit text-secondary"></i></div>
                    <div class="col-9"><input class="form-control" name="id" type="number" min="0" placeholder="ID Number">
                        @error('record')
                            <small> <p class="text-danger" style="text-align: left !important; font-size: 17px !important;"><i class="fas fa-frown-open"></i>dd</p></small>
                        @enderror
                    </div>
                </div>
                <div class="row" style="padding-top: 10px !important;">
                    <div class="col-2"></div>
                    <div class="col-9">
                        <div class="text-left" style="text-align: left !important;">
                            <button class="btn btn-secondary" type="submit">Register Now</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
      </div>
  </section>
@endsection