<template>
    <div class="grid grid-cols-6 gap-4">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 col-start-2 col-span-4" @submit.prevent="GuardarAboutMe">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="txtaboutme">
                    Mi informacion principal
                </label>            
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="txtaboutme"  placeholder="Info here..." autocomplete="off"></textarea>
            </div>
            <div class="flex items-center justify-center">
                <button class="bg-gray-800 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-full">
                    Guardar
                </button>
            </div>
            <p class="text-left text-gray-500 text-xs hover:underline backmenu" @click="Back">
                <i class="las la-arrow-left"></i> Back
            </p>
        </form>
    </div>
</template>

<script>
export default {
    name: 'FormAboutMe',
    setup(){
        const GuardarAboutMe = async () => {
            alert('Datos guardados')
        }

        const Back = () => {

        }

        return {
            GuardarAboutMe,
            Back,
        }
    }
}
</script>

<style>
.backmenu {
    cursor: pointer;    
}
</style>