<template>


    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <form @submit.prevent="tweetStore">
        <textarea ref="tweetTextarea" v-model="content" placeholder="Que se passe-t-il ?" class="rounded-lg border border-gray-200 w-full p-2 font-semibold resize-none focus:outline-none">

        </textarea>
                <span class="my-5 text-red-500" v-if="$page.errors.content">
                    {{ $page.errors.content }}
                </span>
                <div class="flex items-center space-x-4 justify-end mt-3">
                    <p class="text-sm text-gray-400 font-thin" > 280 restants</p>
                    <button-vue  class="bg-blue-500 hover:bg-blue-800 rounded-full font-extrabold">Tweet</button-vue>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    import ButtonVue from '@/Jetstream/Button'
    export default {

        components: {
            ButtonVue

        },
        data () {
            return{
            content: ""
            }
        },
        methods: {
            tweetStore(){
            alert(this.content)
}
        }
        }



</script>
