<div class="container-fluid">
    <div class="row">
        <div class="col-xl-7"><img class="bg-img-cover bg-center" src="public/assets/images/login/itilogo.svg" alt="looginpage"></div>
        <div class="col-xl-5 p-0">
            <div class="login-card">
                <div>
                    <div><a class="logo text-start" href=""></a></div>

                    <div class="login-main" id="formAlumnos"> 
                        <form class="theme-form" method="post">
                            <h4>Bienvenido</h4>
                            <p>Ingrese su usuario y contraseña para iniciar sesión</p>
                            <div class="form-group">
                                <label class="col-form-label">Usuario</label>
                                <input class="form-control" type="text" name="ingresoUsuario" placeholder="Usuario" autofocus autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Contraseña</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="password" name="ingresoPassword" required placeholder="contraseña">
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <button class="btn btn-primary btn-block w-100" type="submit">Entrar</button>
                            </div>

                            <?php
                                $ingreso = new ControladorAdministradores();
                                $ingreso -> ctrIngresoAdministradores(); 
					        ?>
                        </form>
                    </div>

                    <div class="login-main hidden" id="formAdmin"> 
                        <form class="theme-form" method="post">
                            <h4>Bienvenido</h4>
                            <p>Ingrese su usuario y contraseña para iniciar sesión</p>
                            <div class="form-group">
                                <label class="col-form-label">Usuario</label>
                                <input class="form-control" type="text" name="ingresoUsuario" placeholder="Usuario" autofocus autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Contraseña</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="password" name="ingresoPassword" required placeholder="contraseña">
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <button class="btn btn-primary btn-block w-100" type="submit">Entrar</button>
                            </div>

                            <?php
                                $ingreso = new ControladorAdministradores();
                                $ingreso -> ctrIngresoAdministradores(); 
					        ?>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>   
</div>

<script>
    /*=============================================
    REVISAR SI EL CLIENTE YA ESTÁ REGISTRADO
    =============================================*/

    const buscarDni = async (dni) => {

    const idCliente = document.getElementById("idCliente");
    const card = document.querySelector(".card-cliente");
  
    const url = await fetch(`public/assets/ajax/clientes/buscar-cliente.php?dni=${dni}`);
    const resp = await url.json();

    if(resp.ok ===  true & resp.estado === "Activo"){

        idCliente.value = resp.id;

        card.innerHTML = `
        <div class="col-12">
            <div class="card">
                <div class="product-box">
                    <div class="product-img">
                        <div class="ribbon ribbon-success ribbon-right">ACTIVO</div><img class="img-fluid" src="${resp.foto}" alt=""></div>
                        <div class="product-details"> 
                            <h4>${resp.nombre} ${resp.apellido}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        `;
        
    } else if(resp.ok ===  true & resp.estado === "Inactivo"){

        idCliente.value = resp.id;

        card.innerHTML = `
            <div class="col-12">
                <div class="card">
                    <div class="product-box">
                        <div class="product-img">
                            <div class="ribbon ribbon-danger ribbon-right">VENCIDO</div><img class="img-fluid" src="${resp.foto}" alt=""></div>
                            <div class="product-details"> 
                                <h4>${resp.nombre} ${resp.apellido}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;

    }
    
    else if(resp.ok === false){

        idCliente.value = "";

        card.innerHTML = `
            <div class="alert alert-secondary inverse alert-dismissible fade show" role="alert"><i class="icon-thumb-down"></i>
                <p>Oops! El código no se encuentra registrado.</p>
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
            </div>	
        `;

    }

    }

    /*=============================================
    FORMULARIOS
    =============================================*/
    const alumnos = document.getElementById('alumnos');
    const administrador = document.getElementById('administrador');
    const formAlumnos = document.getElementById('formAlumnos');
    const formAdmin = document.getElementById('formAdmin');

    alumnos.addEventListener('click', () => {
        formAlumnos.classList.remove('hidden');
        formAdmin.classList.add('hidden');
    })

    administrador.addEventListener('click', () => {
        formAdmin.classList.remove('hidden');
        formAlumnos.classList.add('hidden');
    })
    
</script>