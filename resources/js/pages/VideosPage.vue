<template>
    <SiteLayout>
        <h2 class="text-4xl font-semibold">Videos</h2>
        <p class="mt-4 max-w-3xl text-white/75">Sample content categories available for production and delivery.</p>

        <ul class="mt-8 grid gap-4 sm:grid-cols-2">
            <li v-for="video in videos" :key="video" class="rounded-2xl border border-white/10 bg-white/6 px-5 py-4 text-white/85">
                {{ video }}
            </li>
        </ul>
    </SiteLayout>
</template>

<script setup>
import SiteLayout from '../components/SiteLayout.vue';

const videos = ['Brand films', 'Promo edits', 'Behind-the-scenes coverage', 'Social-first content'];
</script>