<template >
<div>
  <section class="vh-100 gradient-custom">

  <div class="container h-100 ">
    <div class="d-flex justify-content-center h-100">
      <div class="user_card redondeo">
        <div class="d-flex justify-content-center">
          <div class="brand_logo_container">
            <img src="@/assets/Logo_Circle.png" class="brand_logo" alt="Logo" />
          </div>
        </div>
        <div class="d-flex justify-content-center form_container">
          <form>
              <h3 class="font white">Registrarse</h3>
              <h3 class="font white">Como...</h3>           
   <br>
   <div class="row">
             <div class="d-flex justify-content-center mt-3 login_container col-md-6 mb-4 pb-2">
              <router-link to="/register/R_Empleador">
              <button type="button" name="button" class="btn btn-primary btn-lg login_btn">
                Empleador
              </button>
              </router-link>
            </div>   
       
            <div class="d-flex justify-content-center mt-3 login_container col-md-6 mb-4 pb-2">
              <router-link to="/register/R_Empleado">
              <button type="button" name="button" class="btn btn-primary btn-lg empleado_btn">
                Empleado
              </button>
              </router-link>
            </div>
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
  background: linear-gradient(to bottom right, #ffa100, #08a5ff)
  }

.back{
    background: #08a5ff;
}

.redondeo{
    border-radius: 35px;
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
  border: 04px solid #ffa100;
  height: 300px;
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
.login_btn {
  width: 100%;
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

.margR{
    margin-right: 10px;
}
</style>