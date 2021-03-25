<div class="jumbotron jumbotron-fluid my-0 py-4 px-0 banner-superior">
    <!-- Banner superior -->
</div>

<div class="row" id="mainSection">
    <div class="col-lg-3 panel-1 mx-auto">
        <!-- Panel Central-->
        <div class="container-fluid text-center pt-3 pb-4">
            <h1>Iniciar Sesión</h1>
            <form name="loginForm" action="/Users" method="post">
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input id="inputEmail" type="email" class="form-control" placeholder="ejemplo@ejemplo.com" name="inputEmail" required>
                </div>
                <div class="form-group">
                    <label for="inputPassword">Contraseña:</label>
                    <input id="inputPassword" type="password" minlength="10" class="form-control" name="inputPassword" required>
                </div>

                <?php if (isset($validation)) : ?>
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors() ?>
                        </div>
                    </div>
                <?php endif; ?>
                <button type="submit" class="btn btn-success">Iniciar Sesión</button>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        var elements = document.getElementsByTagName("INPUT");
        for (var i = 0; i < elements.length; i++) {
            elements[i].oninvalid = function(e) {
                e.target.setCustomValidity("");
                if (e.target.name == 'inputEmail') {
                    if (!e.target.validity.valid) {
                        e.target.setCustomValidity("Ingrese un Correo Electrónico.");
                    }
                }
                if (e.target.name == 'inputPassword') {
                    if (!e.target.validity.valid) {
                        e.target.setCustomValidity("Ingrese la contraseña");
                    }
                }
            };
            elements[i].oninput = function(e) {
                e.target.setCustomValidity("");
            };
        }
    })
</script>