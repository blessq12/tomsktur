<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-6 text-start">Привет, {{ Auth::user()->name }}</div>
            <div class="col-6 text-end"><a href=" {{ route('crm.index') }} ">В панель <i class="fa fa-sign-in"></i></a></div>
        </div>
    </div>
</div>