<template>
    <app-layout title="Profile">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Les Derniers Tweets
            </h2>
        </template>

        <div class="py-12">
            {{ tweets }}
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import TweetCreate from '@/Pages/Tweet/Create'

    export default {
        components: {
            AppLayout,
            TweetCreate,
        },

        props: {
            tweets: Array,
        }
    }
</script>
