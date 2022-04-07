<template >
  <div class="hello">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <router-link to="/">
        <img src="@/assets/Logo_Circle.png" class="d-inline-block align-top logo margR" alt="logo"> 
    </router-link>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <router-link to="/">
          <button class="btn btn-sm btn-outline-secondary margR" type="button"> Inicio</button>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="/login">
          <button class="btn btn-sm btn-outline-secondary margR" type="button" > iniciar Sesión</button>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="/register">
          <button class="btn btn-sm btn-outline-secondary" type="button"> Registrarse</button>
          
          </router-link>
        </li>
      </ul>
    
    </div>
  </div>
</nav>
  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>


.logo{
    height: 40px;
    width: 40px;
}

.font{
    font-family: sans-serif;
}

.margR{
    margin-right: 10px;
}
</style>
