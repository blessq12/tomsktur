<nav>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 col-lg-4">
                <a href="{{ route('main.index') }}">
                    <div class="nav-logo">
                        <img src="{{ $company->logo }}" alt="{{ $company->name }}" class="img-fluid">
                        <div class="d-block">
                            <h1>Томсктур</h1>
                            <p>Туроператор сибири</p>
                        </div>
                    </div>  
                </a>
            </div>
            <div class="col-lg-4 d-none d-lg-flex justify-content-center">
                <ul class="nav-list">
                    <li>
                        Туризм
                    </li>
                    <li>
                        Новости
                    </li>
                    <li>
                        О компании
                    </li>
                    <li>
                        Страны
                    </li>
                </ul>
            </div>
            <div class="col-6 col-lg-4 text-end">
                <button type="button" class="btn btn-outline-primary">
                    Подобрать тур 
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div>
</nav>