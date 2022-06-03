<template>
  <!-- Navigation -->
  <Navigation></Navigation>
  <!-- Navigation -->
  <div class="container-lg p-4 h-full bg-gray-800 font-mono">
    <div class="flex flex-col">
      <!-- <div class="mt-0 mb-0 px-4 flex items-start">
        <div class="w-36">&nbsp;</div>
        <div class="w-full">
          <CarouselVue></CarouselVue>
        </div>
        <div class="w-36">&nbsp;</div>
      </div> -->
      <div class="grid justify-items-stretch mt-9 mb-4">
        <span class="font-bold text-center text-3xl text-white mb-4">
          <p>Felipe de Jes&uacute;s Isidro S&aacute;nchez</p>
          <!-- <p class="text-green-400">(Felizxfell)</p> -->
        </span>
        <Cartoon></Cartoon>
      </div>
    </div>    
    <div class="grid grid-cols-1 flex justify-items-center">      
      <div class="box-border h-auto w-9/12 my-4 grid text-black bg-white">
        Mexicano con mas de dos años de experiencia 
      </div>
    </div>    
  </div>
  <!-- Footer -->
  <Footer></Footer>
  <!-- Footer -->
</template>

<script>
// import CarouselVue from "@/Layouts/Carousel.vue";
import Navigation from "@/Layouts/Navigation.vue";
import Footer from "@/Layouts/Footer.vue";
import Cartoon from "@/Layouts/Cartoon";

export default {
  components: {
    // CarouselVue,
    Navigation,
    Footer,
    Cartoon,
  },
};
</script>

<style>
</style>