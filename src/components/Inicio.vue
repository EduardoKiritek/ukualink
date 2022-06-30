<template>
  <div>
    <h1>Esta es una página de inicio</h1>
    <button @click="showModal = true" >Abrir el Modal</button>

    <transition name="fade">
      <div class="modal-ovarlay" v-if="showModal">

      </div>
    </transition>

    <div>
      <transition name="fade">
        <div class="modal" v-if="showModal">
        <h1>Titulo</h1>
        <p>Contenido</p>
          <button @click="showModal = false" class="btn btn-danger new_Btn">Cerrar</button>
        </div>
      </transition>

      
    </div>

  </div>
</template>

<script>
export default {
  name: 'inicioItem',
  data() {
    return {
      showModal: false,
    };
  }
}
</script>

<style>
button{
  border: none;
  background: none;
  cursor: pointer;
  border-radius: 15px;

  display: block;
  page-break-after: 15 20px;
  background-image: linear-gradient(to right #9E0606, #F55D06);
  
  font-size: 18px;
  box-shadow: 3px 3px rgba(0, 0, 0, 0.4);

}

.modal-ovarlay{
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 100;
  background: rgba(0, 0, 0, 0.4);
}

.modal{
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  z-index: 101;
}

fade-enter{

}
</style>


