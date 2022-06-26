
<!-- Modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="LoginModalLabel"><i class="fas fa-sign-in text-secondary"></i> Sign in </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-5">
            <div class="text-center p-4">
                <h3 class="text-secondary">Login</h3>
            </div>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-2 pt-3"><i class="fas fa-envelope text-secondary pt-3"></i>
                    </div>
                    <div class="col-10"><input class="form-control" value="{{ old('email') }}" name="email" type="text" placeholder="Email">
                        @error('email')
                            <small> <p class="text-danger" style="text-align: left !important; font-size: 17px !important;"><i class="fas fa-frown-open"></i>{{ $message }}</p></small>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 pt-3"><i class="fas fa-lock text-secondary"></i></div>
                    <div class="col-10"><input class="form-control" value="{{ old('password') }}" name="password" type="password" placeholder="Password">
                        @error('password')
                            <small> <p class="text-danger" style="text-align: left !important; font-size: 17px !important;"><i class="fas fa-frown-open"></i>{{ $message }}</p></small>
                        @enderror
                    </div>
                </div>
                <div class="row" style="padding-top: 10px !important;">
                    <div class="col-2"></div>
                    <div class="col-9">
                        <div class="text-left" style="text-align: left !important;">
                            <button class="btn btn-secondary w-100" type="submit">Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>
  