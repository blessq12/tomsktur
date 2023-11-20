<nav>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-6">
                <a href="{{ route('main.index') }}">
                    <div class="nav-logo">
                        <img src="{{ $company->logo  }}" alt="" class="img-fluid">
                        <div class="d-block">
                            <h2>Томсктур</h2>
                            <p>Туроператор сибири</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 text-end">
                {{ Auth::user()->name }}
                <i class="fa fa-user-o"></i>
            </div>
        </div>
    </div>
</nav>