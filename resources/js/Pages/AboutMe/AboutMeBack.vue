<template>
  <app-layout title="Sobre Mi">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ Util.capitalizeFirstLetter(title) }}
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div
          class="bg-white overflow-hidden shadow-xl sm:rounded-lg" v-if="!showViewAM">
          <div class="flex">
            <div class="flex-none"></div>
            <div class="grow py-8 px-3 border-l-blue-600 border-blue-c">
              <h3 class="font-bold">Informacion personal</h3>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed
              voluptate, autem ipsam ex cum sit, laboriosam nobis debitis
              adipisci quibusdam odio. Ut veritatis porro libero autem explicabo
              error minus provident!
            </div>
            <div class="flex-none w-14 py-8 px-3">
              <i class="las la-user-edit icon-size mt-5" title="Editar" @click="redirectFormAboutMe"></i>
            </div>
          </div>
        </div>
        <FormAboutMe v-if="showViewAM" @backemit="backViewMain($event)" />
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import FormAboutMe from "@/Pages/AboutMe/FormAboutMe";
import { Utils } from "@/utils/utils.js";
import { ref } from "vue";

export default {
  components: {
    AppLayout,
    FormAboutMe,
  },
  props: {
    title: String,
  },
  setup() {
    const Util = new Utils();
    const showViewAM = ref(false);

    const redirectFormAboutMe = () => {
      showViewAM.value = true;
    };

    const backViewMain = (back) => {
      showViewAM.value = back;
    };
    return {
      Util,
      showViewAM,

      redirectFormAboutMe,
      backViewMain,
    };
  },
};
</script>

<style>
.border-blue-c {
  border-left: 8px solid rgba(37, 99, 235, var(--tw-border-opacity));
}
.icon-size {
  font-size: 35px;
  cursor: pointer;
}
</style>