<template >
  <div>
    <section class="gradient-custom">
      <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
          <div class="user_card redondeo">
            <div class="d-flex justify-content-center">
              <div class="brand_logo_container">
                <img
                  src="@/assets/Logo_Circle.png"
                  class="brand_logo"
                  alt="Logo"
                />
              </div>
            </div>
            <div class="d-flex justify-content-center form_container">
              <form>
                <h3 class="font white">Registro de Empleador</h3>

                <br />
                <div class="row">
                  <div class="col-md-7 mb-1">
                    <div class="form-outline">
                      <input
                        type="text"
                        id=""
                        class="form-control form-control-lg"
                      />
                      <label class="form-label white" for=""
                        >Nombre de la Empresa</label
                      >
                    </div>
                  </div>

                  <div class="col-md-5 mb-3">
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        name="inlineRadioOptions"
                        id="recamaristaop"
                        value="option1"
                      />
                      <label class="form-check-label white" for="femaleGender"
                        >Soy empleador particular.</label
                      >
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 mb-1">
                    <div class="form-outline">
                      <input
                        type="text"
                        id="firstName"
                        class="form-control form-control-lg"
                      />
                      <label class="form-label white" for=""
                        >Nombre del Responsable / Persona de Contacto</label
                      >
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-1">
                    <div class="form-outline">
                      <input
                        type="number"
                        id=""
                        class="form-control form-control-lg"
                      />
                      <label class="form-label white" for="">Teléfono</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-1">
                    <select class="select form-control-lg">
                      <option value="1">Giro de la Empresa</option>
                      <option value="2">Industrial</option>
                      <option value="3">Comercial</option>
                      <option value="4">De Servicio</option>
                    </select>
                  </div>
                </div>

                <div class="row col-md-12 mb-1 white">
                  <h3>Dirección</h3>
                </div>
                <div class="row">
                  <div class="col-md-5 mb-1">
                    <div class="form-outline">
                      <input
                        type="text"
                        id="lastName"
                        class="form-control form-control-lg"
                      />
                      <label class="form-label white" for="lastName"
                        >Calle</label
                      >
                    </div>
                  </div>
                                     <div class="col-md-2 mb-2">
                    <div class="form-outline">
                      <input
                        type="number"
                        id="lastName"
                        class="form-control form-control-lg"
                      />
                      <label class="form-label white" for="lastName"
                        >Número</label
                      >
                    </div>
                  </div>
                  <div class="col-md-5 mb-1">
                    <div class="form-outline">
                      <input
                        type="text"
                        id="lastName"
                        class="form-control form-control-lg"
                      />
                      <label class="form-label white" for="lastName"
                        >Colonia</label
                      >
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-2 mb-1">
                    <div class="form-outline">
                      <input
                        type="text"
                        id="lastName"
                        class="form-control form-control-lg"
                      />
                      <label class="form-label white" for="lastName">CP</label>
                    </div>
                  </div>
                  <div class="col-md-5 mb-1">
                    <div class="form-outline">
                      <input
                        type="text"
                        id="lastName"
                        class="form-control form-control-lg"
                      />
                      <label class="form-label white" for="lastName"
                        >Ciudad</label
                      >
                    </div>
                  </div>
                  <div class="col-md-5 mb-1">
                    <select class="select form-control-lg">
                      <option value="1">Seleccione un estado</option>
                      <option value="2">Michoacán</option>
                      <option value="3">Jalisco</option>
                      <option value="4">Querétaro</option>
                    </select>
                  </div>
                </div>
                <div class="row col-md-12 mb-3 white">
                  <h3>Datos de Inicio de Sesión</h3>
                </div>
                <div class="row">
                  <div class="col-md-8 mb-3">
                    <div class="form-outline">
                      <input
                        type="email"
                        id="lastName"
                        class="form-control form-control-lg"
                      />
                      <label class="form-label white" for="lastName"
                        >Correo Electrónico</label
                      >
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="form-outline">
                      <input
                        type="password"
                        id="lastName"
                        class="form-control form-control-lg"
                      />
                      <label class="form-label white" for="lastName"
                        >Contraseña</label
                      >
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8 mb-3">
                    <div class="form-outline">
                      <input
                        type="email"
                        id="lastName"
                        class="form-control form-control-lg"
                      />
                      <label class="form-label white" for="lastName"
                        >Confirmación de Correo Electrónico</label
                      >
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="form-outline">
                      <input
                        type="password"
                        id="lastName"
                        class="form-control form-control-lg"
                      />
                      <label class="form-label white" for="lastName"
                        >Confirmación de Contraseña</label
                      >
                    </div>
                  </div>
                </div>

                <div class="mt-4 pt-2">
                  <input
                    class="btn login_btn"
                    type="submit"
                    value="Registrarse"
                  />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: "r_empleado",
};
</script>

<style scoped>
.gradient-custom {
  /* fallback for old browsers */
  background: #08a5ff;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to bottom right, #ffa100, #08a5ff);

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to bottom right, #ffd621, #ff5b0a);
}

.back {
  background: #08a5ff;
  font-family: sans-serif;
}

.font {
  font-family: sans-serif;
}

html {
  margin: 100;
  padding: 0;
  height: 100%;
  background: #60a3bc !important;
}
.white {
  color: white;
}
.redondeo {
  border-radius: 35px;
}
.user_card {
  border: 04px solid white;
  height: auto;
  width: 800px;

  margin-top: 100px;
  margin-bottom: auto;
  background: #001e30;
  position: relative;
  display: flex;
  justify-content: center;
  flex-direction: column;
  padding: 10px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
    0 6px 20px 0 rgba(0, 0, 0, 0.19);
  -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
    0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.brand_logo_container {
  position: absolute;
  height: 170px;
  width: 170px;
  top: -75px;
  border-radius: 50%;
  background: #001e30;
  padding: 10px;
  text-align: center;
  border: 0px solid white;
}
.brand_logo {
  height: 150px;
  width: 150px;
  border-radius: 50%;
  border: 0px solid white;
}
.form_container {
  margin-top: 100px;
}
.select-input.form-control[readonly]:not([disabled]) {
  font-size: 1rem;
  line-height: 2.15;
  padding-left: 0.75em;
  padding-right: 0.75em;
}
.login_btn {
  background: #ffa100 !important;
  color: white !important;
}
.empleado_btn {
  width: 100%;
  background: #08a5ff !important;
  color: white !important;
}
.login_btn:focus {
  box-shadow: none !important;
  outline: 0px !important;
}
.login_container {
  padding: 0 2rem;
}
.input-group-text {
  background: #ffa100 !important;
  color: white !important;
  border: 0 !important;
  border-radius: 0.25rem 0 0 0.25rem !important;
}
.input_user,
.input_pass:focus {
  box-shadow: none !important;
  outline: 0px !important;
}
.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
  background-color: #ffa100 !important;
}

.margR {
  margin-right: 10px;
}
</style>