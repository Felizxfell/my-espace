<template>
    <footer class="bg-white pt-10 pt-10"> <!-- sm:mt-10 -->
        <!-- Copyright Bar -->
        <div class="pt-2">
            <div class="flex pb-5 px-3 m-auto pt-5 border-t border-gray-500 flex-col md:flex-row max-w-6xl text-gray-900 hover:text-green-400">
                <div class="mt-2">
                    © Copyright {{ new Date().getFullYear() }}. All Rights Reserved. :D
                </div>
                
                <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex text-xl">                    
                    <a href="#" class="w-6 mx-1 text-gray-900 hover:text-green-400">
                        <i class="lab la-facebook"></i>
                    </a>
                    <a href="#" class="w-6 mx-1 text-gray-900 hover:text-green-400">
                        <i class="lab la-twitter"></i>
                    </a>
                    <a href="#" class="w-6 mx-1 text-gray-900 hover:text-green-400">
                        <i class="lab la-youtube"></i>
                    </a>
                    <a href="#" class="w-6 mx-1 text-gray-900 hover:text-green-400">
                        <i class="las la-at"></i>
                    </a>
                    <a href="#" class="w-6 mx-1 text-gray-900 hover:text-green-400">
                        <i class="lab la-instagram"></i>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=525565243766&text=Hola!" class="w-6 mx-1 text-gray-900 hover:text-green-400">
                        <i class="lab la-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    
}
</script>

<style>

</style>