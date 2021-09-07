<template>
  <Carousel :autoplay="3000" :wrap-around="true">
    <Slide v-for="slide in images" :key="slide">
      <div class="carousel__item"><img :src="slide" ></div>
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
            '/img/carousel/slide1.jpg',
            '/img/carousel/slide2.gif',
            '/img/carousel/slide3.jpg',
            '/img/carousel/slide4.jpg',
            '/img/carousel/slide5.jpg',
        ]
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
.carousel__item {
  min-height: 20rem;
  width: 100%;
  /* background-color: var(--carousel-color-primary); */
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

img {
    width: 35%;
}
</style>