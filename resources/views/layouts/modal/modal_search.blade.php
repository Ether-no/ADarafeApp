    <!-- Inicia modal buscar productos -->
    <div id="modal_search" class="modal">
        <div class="modal-content">
            <nav class="white">
                <div class="nav-wrapper">
                    <form action='{{url('/search')}}'>
                        <div class="input-field">
                            <input id="search" type="search" name="busca"  required>
                            <label class="label-icon black-text" for="search">

                                <i class="material-icons">search</i>

                            </label>
                            <i class="modal-close material-icons black-text">close</i>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <!-- Inicia modal buscar productos -->
