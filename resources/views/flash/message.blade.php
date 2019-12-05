<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                    <div class="card">
                        
                        @if ($message = Session::get('success'))
                            <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                                <span class="badge badge-pill badge-primary">Success</span>
                            	     <strong>{{ $message }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        @if ($message = Session::get('error'))
                        <div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
                                <span class="badge badge-pill badge-warning">warning</span>
                                <strong>{{ $message }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        @endif


                        @if (count($errors) > 0)
                        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                <span class="badge badge-pill badge-danger">
                                    Please check the form below for errors
                                </span>
                                <ul>
                                  @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                  @endforeach
                                </ul>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        @if ($message = Session::get('info'))
                        <div class="sufee-alert alert with-close alert-info alert-dismissible fade show">
                            <span class="badge badge-pill badge-info">Success</span>
                                  <strong>{{ $message }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                </div>
            </div>
        </div>
    </div>
</div>
