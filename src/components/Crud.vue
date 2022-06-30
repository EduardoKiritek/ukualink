<template>
  <div class="vh-100 gradient-custom">
    <section >

      <div class="container ">
        <div class="d-flex justify-content-center ">
          <div class="user_card redondeo">
            <div class="d-flex justify-content-center">
            </div>
            <div>
              <h1 class="white">Bienvenido Admin</h1>
            </div>



            <div>
              <transition name="fade">
                <div class="modal">

                </div>

              </transition>
              <button @click.prevent="ventana = true" class="btn btn-success new_Btn">Nuevo</button>
              <div v-bind="ventana" v-if="ventana">
                <form action="">
                  <div class="input-group mb-3">
                    <br>
                    <input v-model="nombre" type="text" class="form-control" placeholder="Nombre" aria-label="Username"
                      aria-describedby="basic-addon1" />
                  </div>
                  <div class="input-group mb-3">
                    <br>
                    <input v-model="apellidoP" type="text" class="form-control" placeholder="Apellido Paterno" aria-label="Username"
                      aria-describedby="basic-addon1" />
                  </div>
                  <div class="input-group mb-3">
                    <br>
                    <input v-model="apellidoM" type="text" class="form-control" placeholder="Apellido Materno" aria-label="Username"
                      aria-describedby="basic-addon1" />
                  </div>
                  <div class="input-group mb-3">
                    <br>
                    <input v-model="fechaNac" type="date" class="form-control" placeholder="Fecha de Nacimiento" aria-label="Username"
                      aria-describedby="basic-addon1" />
                  </div>
                  <div class="input-group mb-3">
                    <br>
                    <input v-model="telefono" type="int" class="form-control" placeholder="Telefono" aria-label="Username"
                      aria-describedby="basic-addon1" />
                  </div>
                  <div class="input-group mb-3">
                    <br>
                    <input v-model="genero" type="text" class="form-control" placeholder="Genero" aria-label="Username"
                      aria-describedby="basic-addon1" />
                  </div>
                  <div class="input-group mb-3">
                    <br>
                    <input v-model="direccion" type="text" class="form-control" placeholder="Direccion" aria-label="Username"
                      aria-describedby="basic-addon1" />
                  </div>
                  <div class="input-group mb-3">
                    <br>
                    <input v-model="email" type="email" class="form-control" placeholder="Correo Electronico" aria-label="Username"
                      aria-describedby="basic-addon1" />
                  </div>

                  <div class="input-group mb-3">
                    <input v-model="oficio" type="text" class="form-control" placeholder="Oficio" aria-label="Username"
                      aria-describedby="basic-addon1" />
                  </div>

                  <div class="input-group mb-3">
                    <input v-model="password" type="passsword" class="form-control" placeholder="Contraseña"
                      aria-label="Username" aria-describedby="basic-addon1" />
                  </div>
                  <button type="button" @click="agregarAlumno(), ventana = false" :disabled="validarBoton"
                    class="btn btn-success btn_Agregar ">
                    {{ indice == -1 ? "Agregar" : "Actualizar" }}
                  </button>
                  <button type="button" @click="ventana = false" class="btn btn-danger">
                    Cancelar
                  </button>
                </form>
              </div>
            </div>

            <div>
              <table class="  white table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido P</th>
                    <th scope="col">Apellido M</th>
                    <th scope="col">Fecha Nac</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Oficio</th>
                    <th scope="col">Password</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(persona, index) in nuevaPersonas" :key="index">
                    <td>{{ index + 1 }}</td>
                    <td>{{ persona.nombre }}</td>
                    <td>{{ persona.apellidoP }}</td>
                    <td>{{ persona.apellidoM }}</td>
                    <td>{{ persona.fechaNac }}</td>
                    <td>{{ persona.telefono }}</td>
                    <td>{{ persona.genero }}</td>
                    <td>{{ persona.direccion }}</td>
                    <td>{{ persona.email }}</td>
                    <td>{{ persona.oficio }}</td>
                    <td>{{ persona.password }}</td>
                    <td>
                      <button @click="eliminarAlumno(index)" class="btn_Agregar btn btn-danger">
                        Eliminar
                      </button>
                      <button @click="editarAlumno(index), ventana = true" class="btn btn-primary">
                        Editar
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </section>
  </div>
</template>

<script>
export default {
  name: "FormularioItem",
  data() {
    return {
      indice: -1,
      nombre: "",
      apellidoP: "",
      apellidoM: "",
      fechaNac: "",
      telefono: null,
      genero: "",
      direccion: "",
      email: "",
      oficio: "",
      password: "",
      nuevaPersonas: [],
      statusBtn: true,
      ventana: false,
    };
  },

  methods: {
    agregarAlumno() {
      //console.log(this.nombre + " " + this.edad + " " + this.carrera);
      let nuevaPersonas = {
        nombre: this.nombre,
        apellidoP: this.apellidoP,
        apellidoM: this.apellidoM,
        fechaNac: this.fechaNac,
        telefono: this.telefono,
        genero: this.genero,
        direccion: this.direccion,
        email: this.email,
        oficio: this.oficio,
        password: this.password,
      };
      console.log(this.indice);
      if (this.indice == -1) {
        this.nuevaPersonas.push(nuevaPersonas);
      } else {
        this.nuevaPersonas[this.indice] = nuevaPersonas;
      }

      this.indice = -1;
      this.limpiarCampos();
      console.log(this.nuevaPersonas);
    },

    eliminarAlumno(index) {
      this.nuevaPersonas.splice(index, 1);
    },

    editarAlumno(index) {
      var nuevaPersona = this.nuevaPersonas[index];
      this.indice = index;
      this.nombre = nuevaPersona.nombre;
      this.apellidoP = nuevaPersona.apellidoP;
      this.apellidoM = nuevaPersona.apellidoM;
      this.fechaNac = nuevaPersona.fechaNac;
      this.telefono = nuevaPersona.telefono;
      this.genero = nuevaPersona.genero;
      this.direccion = nuevaPersona.direccion;
      this.email = nuevaPersona.email;
      this.oficio = nuevaPersona.oficio;
      this.password = nuevaPersona.password;
    },

    limpiarCampos() {
      this.nombre = "";
      this.apellidoP = "";
      this.apellidoM = "";
      this.fechaNac = "";
      this.telefono = null;
      this.genero = "";
      this.direccion = "";
      this.email = "";
      this.oficio = "";
      this.password = "";
    },
  },

  computed: {
    validarBoton() {
      if (this.nombre == "" || this.apellidoP == "" || this.apellidoM == "" || this.fechaNac == "" || this.telefono == null
        || this.genero == "" || this.direccion == "" || this.email == "" || this.oficio == "" || this.password == "") {
        return this.statusBtn;
      } else {
        return this.statusBtn == false;
      }
    },
  },
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

.back {
  background: #08a5ff;
}

.redondeo {
  border-radius: 35px;
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

.new_Btn {
  float: right;
  margin-right: 25px;
  margin-bottom: 15px;
}

.btn_Agregar {
  margin-right: 25px;
}

.user_card {
  border: 04px solid #ffa100;
  height: auto;
  width: auto;
  margin-top: 100px;
  margin-bottom: auto;
  background: #001e30;
  position: relative;
  display: flex;
  justify-content: top;
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

.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
  background-color: #ffa100 !important;
}

.margR {
  margin-right: 10px;
}
</style>