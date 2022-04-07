<template >
<div>
  <section class="gradient-custom">

  <div class="container ">
    <div class="d-flex justify-content-center ">
      <div class="user_card">
        <div class="d-flex justify-content-center">
          <div class="brand_logo_container">
            <img src="@/assets/Logo_Circle.png" class="brand_logo" alt="Logo" />
          </div>
        </div>
        <div class="d-flex justify-content-center form_container">
          <form>
              <h3 class="font white">Inicio de sesión</h3>
              <br>
            <div class="input-group mb-3">
              <input
                type="email"
                name=""
                class="form-control input_user"
                value=""
                placeholder="Correo Electrónico"
              />
            </div>
            <div class="input-group mb-2">
              <input
                type="password"
                name=""
                class="form-control input_pass"
                value=""
                placeholder="Contraseña"
              />
            </div>
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input
                  type="checkbox"
                  class="custom-control-input margR"
                  id="customControlInline"
                />
                <label class="custom-control-label white" for="customControlInline"
                  >  Recordar Inicio</label
                >
              </div>
            </div>
            <div class="d-flex justify-content-center mt-3 login_container">
              <button type="button" name="button" class="btn btn-primary btn-lg login_btn">
                Iniciar Sesión
              </button>
            </div>
          </form>
        </div>

        <div class="mt-4">
          <div class="d-flex justify-content-center links white">
            ¿Aún no tienes cuenta? <a href="#" class="ml-2">Regístrate</a>
            <br>
            <br>
          </div>
          <div class="d-flex justify-content-center links">
            <a href="#">Olvidé mi contraseña</a>
          </div>
        </div>
      </div>
    </div>
  </div>
    </section>
</div>
</template>

<script>
export default {
  name: "LoginItem",
};
</script>

<style scoped>
.gradient-custom {
  /* fallback for old browsers */
  background: #08a5ff;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to bottom right, #ffa100, #08a5ff);

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to bottom right, #9CE9FF, #1317EA);
}
.back{
    background: #08a5ff;
}

.font{
    font-family: sans-serif;
}

html {
  margin: 100;
  padding: 0;
  height: 100%;
  background: #60a3bc !important;
}
.white{
    color: white;
}
.user_card {
  height: 510px;
  width: 350px;
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
  border-radius: 5px;
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
.login_btn { 
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

.margR{
    margin-right: 10px;
}
</style>