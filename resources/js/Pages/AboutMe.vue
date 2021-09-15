<template>
  <!-- Navigation -->
  <Navigation></Navigation>
  <!-- Navigation -->
  <div class="container-lg p-4 h-full bg-gray-800 font-mono">
    <div class="flex flex-col">
      <div class="mt-0 mb-0 px-4 flex items-start">
        <div class="w-36">&nbsp;</div>
        <div class="w-full">
          <CarouselVue></CarouselVue>
        </div>
        <div class="w-36">&nbsp;</div>
      </div>
      <div class="grid justify-items-stretch mt-9 mb-4">
        <span class="font-bold text-center text-3xl text-white mb-4">
          <p>Felipe de Jes&uacute;s Isidro S&aacute;nchez</p>
          <p class="text-green-400">(Felizxfell)</p>
        </span>
        <Cartoon></Cartoon>
      </div>
    </div>
  </div>
  <!-- <div class="h-full bg-indigo-800 font-mono"></div> -->
  <div class="container-lg p-4 h-full bg-indigo-800 font-mono">
    <div class="h-auto w-full my-4 grid justify-items-center text-white">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam odio
      fuga dicta, in eaque beatae, accusantium ipsam cum facilis quasi ratione,
      blanditiis repudiandae tempora! Vero rerum officiis quibusdam nihil
      soluta!
    </div>
    <div class="box-border h-auto w-full my-4 bg-red-700 text-white">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
      molestias voluptates eos. Sint, neque? Ut, natus! Totam alias, odio harum
      nesciunt autem facere eveniet, ullam, repellendus perspiciatis tempora
      quasi veritatis.
    </div>
    <div class="box-border h-auto w-full my-4 bg-green-500">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem aliquid nam,
      dolorem aspernatur dolor sunt, ex dignissimos, error necessitatibus dicta
      in aperiam. Dolorum eligendi deleniti atque adipisci laboriosam,
      voluptatem maiores?
    </div>
  </div>
  <!-- Footer -->
  <Footer></Footer>
  <!-- Footer -->
</template>

<script>
import CarouselVue from "@/Layouts/Carousel.vue";
import Navigation from "@/Layouts/Navigation.vue";
import Footer from "@/Layouts/Footer.vue";
import Cartoon from "./Cartoon";

export default {
  components: {
    CarouselVue,
    Navigation,
    Footer,
    Cartoon,
  },
};
</script>

<style>
</style>