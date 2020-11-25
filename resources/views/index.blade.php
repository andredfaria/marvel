@include ('layout.header')

<main role="main" class="container inner cover mb-5">
    <form action="/v1/public/characters/" method="GET">
        <div class="row mt-5">
            <div class="input-group input-group-sm mb-3 col-12">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Buscar</span>
                </div>
                <input type="text" class="form-control" name="characters" aria-label="Buscar" >
                <div class="input-group-prepend">
                    <input class="btn btn-primary rounded" type="submit">
                </div>
            </div>

            <div class="input-group col-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="route">
                    </div>
                </div>
                <input disabled type="text" value="Comics" class="form-control">
            </div>
            <div class="input-group col-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="route">
                    </div>
                </div>
                <input disabled type="text" value="Events" class="form-control">
            </div>
            <div class="input-group col-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="route">
                    </div>
                </div>
                <input disabled type="text" value="Series" class="form-control">
            </div>
            <div class="input-group col-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="radio" name="route">
                    </div>
                </div>
                <input disabled type="text" value="Stories" class="form-control">
            </div>
        </div>
    </form>

    <div class="row mt-5">
        <div class="col-12">
            <h1 class="cover-heading">Herois.</h1>
        </div>
        <div class="col-12">
            <p class="lead">API dos herois.</p>
            <p class="lead">
                <a href="documents/Teste.pdf" class="btn btn-lg btn-secondary">Saiba mais</a>
            </p>
        </div>
    </div>
</main>   

@include ('layout.footer')