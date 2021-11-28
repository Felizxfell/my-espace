<template>
  <Carousel :wrap-around="true"> 
    <!-- :autoplay="4000" -->
    <Slide v-for="slide in images" :key="slide">
      <div class="carousel__item"><img class="img-carousel" :src="slide" /></div>
    </Slide>

    <template #addons="{ slidesCount }">
      <Navigation v-if="slidesCount > 1" />
      <Pagination />
    </template>
  </Carousel>
</template>

<script>
import { defineComponent } from "vue";
import { Carousel, Navigation, Pagination, Slide } from "vue3-carousel";

import "vue3-carousel/dist/carousel.css";

export default defineComponent({
  data() {
    return {
      images: [
        "/img/carousel/laravel.png",
        "/img/carousel/vue.jpg",
        "/img/carousel/php.png",
        "/img/carousel/net.png",
        "/img/carousel/postgresql.jpg",
        "/img/carousel/bootstrap.png",
        "/img/carousel/github.jpg",
        "/img/carousel/mysql.jpg",
        "/img/carousel/codeigniter.png",
        "/img/carousel/j-query.jpg",
      ],
    };
  },
  name: "carousel-vue",
  components: {
    Carousel,
    Slide,
    Pagination,
    Navigation,
  },
});
</script>

<style>
:root {
    --carousel-color-primary: #fafafa;
    --carousel-color-secondary: #5a5a5a;
}

.carousel__item {
  min-height: 20rem;
  width: 100%;  
  color: var(--carousel-color-white);
  font-size: 20px;
  border-radius: 8px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.carousel__slide {
  padding: 10px;
}

.carousel__prev,
.carousel__next {
  background-color: transparent;
  box-sizing: content-box;
  border: 2px solid white;
}

.img-carousel {
  min-width: 50%;
  max-height: 300px;
  border-radius: 2rem;
  -moz-box-shadow: 10px 10px 5px #ccc;
  -webkit-box-shadow: 10px 10px 5px #ccc;
  box-shadow: 10px 10px 5px #ccc;
}

@media screen and (max-width: 590px) {
  .carousel__item {
    min-height: 0rem;
  }
}
</style>