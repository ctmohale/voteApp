@extends('userlayout.app')
@section('title','Welcome | Voting App')
@section('content')
  <section class="main">
      <div class="sub-main" id="profile">
        <div class="row p-2">
            <div class="col-sm-8">
                <div class="card-body">
                    <p class="text-secondary p-4"><i class="fas fa-user"></i> User profile</p>
                    <div class="main-form pb-5">
                        <form action="{{ route('register_user') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-2"><i class="fas fa-edit text-secondary"></i></div>
                                <div class="col-9"><input class="form-control" value="{{ session('user')->name }}" name="name" type="text" placeholder="Name">
                                    @error('name')
                                        <small> <p class="text-danger" style="text-align: left !important; font-size: 17px !important;"><i class="fas fa-frown-open"></i>{{ $message }}</p></small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2"><i class="fas fa-edit text-secondary"></i></div>
                                <div class="col-9"><input class="form-control" value="{{ session('user')->surname }}" name="surname" type="text" placeholder="Surname">
                                    @error('surname')
                                        <small> <p class="text-danger" style="text-align: left !important; font-size: 17px !important;"><i class="fas fa-frown-open"></i>{{ $message }}</p></small>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-2"><i class="fas fa-edit text-secondary"></i></div>
                                <div class="col-9"><input class="form-control" value="{{session('user')->address }}" name="address" type="text" placeholder="Address">
                                    @error('address')
                                        <small> <p class="text-danger" style="text-align: left !important; font-size: 17px !important;"><i class="fas fa-frown-open"></i>{{ $message }}</p></small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2"><i class="fas fa-edit text-secondary"></i></div>
                                <div class="col-9"><input class="form-control" value="{{ session('user')->postal }}" name="postal" type="number" min="0" placeholder="Postal Code">
                                    @error('postal')
                                        <small> <p class="text-danger" style="text-align: left !important; font-size: 17px !important;"><i class="fas fa-frown-open"></i>{{ $message }}</p></small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2"><i class="fas fa-edit text-secondary"></i></div>
                                <div class="col-9"><input class="form-control" value="{{ session('user')->id_number }}" name="id" type="number" min="0" placeholder="ID Number">
                                    @error('id')
                                        <small> <p class="text-danger" style="text-align: left !important; font-size: 17px !important;"><i class="fas fa-frown-open"></i>{{ $message }}</p></small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row" style="padding-top: 10px !important;">
                                <div class="col-2"></div>
                                <div class="col-9">
                                    <div class="text-left" style="text-align: left !important;">
                                        <button class="btn btn-secondary" type="submit">Update Now</button>
                                    </div>
                                </div>
                            </div>
            
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 ">
                <div class="card-body text-left pt-5" style="text-align: center !important;">
                    <i class="fas fa-user fa-10x text-secondary"></i>
                    <p class="text-secondary p-4"><i class="fas fa-user"></i>{{ session('user')->surname }}</p>
                    <hr>
                </div>
            </div>
            <br><br>
        </div>
        <br><br>
      </div>
      
  </section>
@endsection