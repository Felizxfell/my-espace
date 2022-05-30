<template>
  <nav class="flex justify-between items-center bg-white text-sm px-8">
    <div class="flex px-5 py-4">
      <a href="javascript:void(0)" class="text-gray-900 hover:text-green-400"><i class="las la-user-astronaut"></i></a>
      <div class="ml-2 px-3 mobile-menu" id="mobileMenu">
        <Link :href="route('about-me')" class="px-2 text-gray-900 hover:text-green-400">Sobre Mi</Link>
        <Link :href="route('about-me')" class="px-2 text-gray-900 hover:text-green-400">Contacto</Link>
        <Link :href="route('about-me')" class="px-2 text-gray-900 hover:text-green-400">Mis Proyectos</Link>
        <Link :href="route('login')" class="px-2 text-gray-900 hover:text-green-400">Login</Link>        
      </div>
    </div>
    <div class="mobile-display">
      <button class="text-gray-900 hover:text-green-400" onclick="menuCollapse()"><i class="las la-bars"></i></button>
    </div>
    <div class="flex mobile-collapse">      
      <jet-input type="search" class="h-full px-3 rounded-l-lg" placeholder="Buscar..."/>      
      <div>
        <button class="inline-block bg-gray-800 hover:bg-gray-600	text-blue-100 hover:text-blue-200 px-4 py-3.5 flex items-center font-bold rounded-r-lg">
          <i class="las la-search"></i>
        </button>        
      </div>
    </div>
  </nav>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import JetInput from '@/Jetstream/Input.vue'

export default {
  components: {
    Link,
    JetInput,
  },
};
</script>

<style>
  .mobile-display {
    display: none;
  }

  @media screen and (max-width: 768px) {
    .mobile-display {
      display: inline-block;
    }

    .mobile-collapse {
      display: none;
    }

    .mobile-menu {
      display: none;
      position: absolute;
      margin-top: 30px;
      margin-left: 0px !important;
      padding: 0px !important;
      background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
      width: 100%;
      left: 0;
    }
    .mobile-menu a {
      display: block;
      width: 100%;
      padding: 1rem;
      margin-left: 1.25rem;
    }
  }
  .show {
    display: block;
    z-index: 1;
  }
</style>