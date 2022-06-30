
import Vue from 'vue'
import VueRouter from 'vue-router'
import Inicio from '../components/Inicio.vue'
import Login from '../components/Login.vue'
import Register from '../components/Register.vue'
import RegisterRouter from '../components/RegisterRouter.vue'
import R_Empleador from '../components/R_Empleador.vue'
import R_Empleado from '../components/R_Empleado.vue'
import Crud from '../components/Crud.vue'
Vue.use(VueRouter)

const routes = [

  {
    path: '/',
    name: 'inicio',
   component: Inicio,
  },
  {
    path:'/login',
    name:'login',
    component:Login,
  },

  {
    path: '/register',
    name: 'register',
    component: RegisterRouter,
    children:[
      {
        path: '/',
        name: 'register',
        component: Register
      },
      {
        path: '/register/R_Empleador',
        name: 'r_empleador',
        component: R_Empleador
      },
      {
        path: '/register/R_Empleado',
        name: 'r_empleado',
        component: R_Empleado
      },
      {
        path: '/crud',
        name: 'crud',
       component: Crud,
      }
    ]
  },


]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
