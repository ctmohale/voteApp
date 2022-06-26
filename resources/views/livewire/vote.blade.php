<div>
    <div class="sub-main" id="vote">
        <div class="row p-2">
            <div class="col-sm-12">
                <div class="card-body" wire:poll>

                    @if ($vote == true)
                        <div class="main-form pb-5">
                            <i class="fas fa-fingerprint fa-10x text-success"></i>
                            <p class="text-secondary p-4"><i class="fas fa-smile"></i> <b>Voted successfully</b></p>

                            <ol class="list-group" style="text-align: left !important;">
                                @foreach ($votedata as $item)
                                  <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto p-3">
                                      <div class="fw-bold"><i class="fas fa-calendar-alt text-secondary"></i> Voted date</div>
                                    </div>
                                    <h5 class="pt-3"><span class="badge bg-secondary rounded-pill">{{ $item->created_at->isoFormat('dddd D MMM Y') }}</span></h5>
                                  </li>
                                  <li class="list-group-item d-flex justify-content-between align-items-start bg-light">
                                    <div class="ms-2 me-auto p-3">
                                      <div class="fw-bold"><i class="fas fa-flag text-secondary"></i> Political party</div>
                                    </div>
                                    <h5 class="pt-3"><span class="badge bg-secondary rounded-pill">{{ $item->party }}</span></h5>
                                  </li>
                                  <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto p-3">
                                      <div class="fw-bold"><i class="fas fa-fingerprint text-secondary"></i> Finger print voting</div>
                                    </div>
                                    <span class="badge rounded-pill text-secondary"><h5 class="pt-2"><b>Registerd</b></h5></span>
                                  </li>
                                @endforeach
                            </ol>
                        </div>
                    @else
                        <div class="main-form pb-5">
                            <i class="fas fa-fingerprint fa-10x text-danger"></i>
                            <p class="text-secondary p-4"><i class="fas fa-frown"></i> <b>Vote pending</b></p>
                            <ol class="list-group">

                            </ol>
                        </div>
                    @endif
                </div>
            </div>
            <br><br>
        </div>
        <br><br>
    </div>
</div>
