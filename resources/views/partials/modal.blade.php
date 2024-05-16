<div class="section section-js-components">
    <div class="container">
        <h2 class="mt-lg mb-5">
            <span>Javascript Components</span>
        </h2>
        <h3 class="h4 text-success font-weight-bold mb-4">Modals</h3>
        <!-- Modals -->
        <div class="row">
            <div class="col-md-4">
                <button type="button" class="btn btn-block btn-primary mb-3" data-toggle="modal"
                    data-target="#modal-default">Default</button>
                <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default"
                    aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="modal-title-default">Type your modal title</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right
                                    at the coast of the Semantics, a large language ocean.</p>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                    into your mouth.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Save changes</button>
                                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <button type="button" class="btn btn-block btn-warning mb-3" data-toggle="modal"
                    data-target="#modal-notification">Notification</button>
                <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog"
                    aria-labelledby="modal-notification" aria-hidden="true">
                    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                        <div class="modal-content bg-gradient-danger">
                            <div class="modal-header">
                                <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="py-3 text-center">
                                    <i class="ni ni-bell-55 ni-3x"></i>
                                    <h4 class="heading mt-4">You should read this!</h4>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary
                                        regelialia.</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-white">Ok, Got it</button>
                                <button type="button" class="btn btn-link text-white ml-auto"
                                    data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <button type="button" class="btn btn-block btn-default mb-3" data-toggle="modal"
                    data-target="#modal-form">Form</button>
                <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="card bg-secondary shadow border-0 mb-0">
                                    <div class="card-header bg-white pb-5">
                                        <div class="text-muted text-center mb-3">
                                            <small>Sign in with</small>
                                        </div>
                                        <div class="btn-wrapper text-center">
                                            <a href="javascript:;" class="btn btn-neutral btn-icon">
                                                <span class="btn-inner--icon">
                                                    <img src="./assets/img/icons/common/github.svg">
                                                </span>
                                                <span class="btn-inner--text">Github</span>
                                            </a>
                                            <a href="javascript:;" class="btn btn-neutral btn-icon">
                                                <span class="btn-inner--icon">
                                                    <img src="./assets/img/icons/common/google.svg">
                                                </span>
                                                <span class="btn-inner--text">Google</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body px-lg-12 py-lg-12">
                                        <div class="text-center text-muted mb-4">
                                            <small>Or sign in with credentials</small>
                                        </div>
                                        <form role="form" method="POST" action={{ route('profile.update') }}
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group mb-4">
                                                <div class="input-group input-group-alternative">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="ni ni-email-83"></i></span>
                                                    </div>
                                                    <input class="form-control" placeholder="Username"
                                                        type="username"
                                                        value="{{ old('username', auth()->user()->username) }}" name="username">
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="input-group input-group-alternative">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="ni ni-email-83"></i></span>
                                                    </div>
                                                    <input class="form-control" placeholder="Email" type="email"
                                                        value="{{ old('email', auth()->user()->email) }}" name="email">
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="input-group input-group-alternative">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="ni ni-email-83"></i></span>
                                                    </div>
                                                    <input class="form-control" placeholder="Firstname"
                                                        type="text"
                                                        value="{{ old('firstname', auth()->user()->firstname) }}" name="firstname">
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="input-group input-group-alternative">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="ni ni-email-83"></i></span>
                                                    </div>
                                                    <input class="form-control" placeholder="Lastname" type="text"
                                                        value="{{ old('lastname', auth()->user()->lastname) }}" name="lastname">
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="input-group input-group-alternative">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="ni ni-email-83"></i></span>
                                                    </div>
                                                    <input class="form-control" placeholder="Address" type="text"
                                                        value="{{ old('address', auth()->user()->address) }}" name="address">
                                                </div>
                                            </div>

                                            <div class="custom-control custom-control-alternative custom-checkbox">
                                                <input class="custom-control-input" id=" customCheckLogin"
                                                    type="checkbox">
                                                <label class="custom-control-label" for=" customCheckLogin">
                                                    <span>Remember me</span>
                                                </label>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary my-4">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
