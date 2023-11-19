<nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                {{ $company->nameShort }}
            </div>
            <div class="col-6 text-end">
                {{ Auth::user()->name }}
                <i class="fa fa-user-o"></i>
            </div>
        </div>
    </div>
</nav>