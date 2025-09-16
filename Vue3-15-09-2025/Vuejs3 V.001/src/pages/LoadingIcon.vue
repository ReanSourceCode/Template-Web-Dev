<script setup lang="ts">
import LoadingIcon from "@/components/Base/LoadingIcon";
</script>

<template>
  <div class="flex items-center mt-8 intro-y">
    <h2 class="mr-auto text-lg font-medium">SVG Loaders</h2>
  </div>
  <!-- BEGIN: Icon List -->
  <div class="grid grid-cols-12 px-5 py-8 mt-5 intro-y sm:gap-6 gap-y-6 box">
    <div
      class="flex flex-col items-center justify-end col-span-6 sm:col-span-3 xl:col-span-2"
    >
      <LoadingIcon icon="audio" class="w-8 h-8" />
      <div class="mt-2 text-xs text-center">audio</div>
    </div>
    <div
      class="flex flex-col items-center justify-end col-span-6 sm:col-span-3 xl:col-span-2"
    >
      <LoadingIcon icon="ball-triangle" class="w-8 h-8" />
      <div class="mt-2 text-xs text-center">ball-triangle</div>
    </div>
    <div
      class="flex flex-col items-center justify-end col-span-6 sm:col-span-3 xl:col-span-2"
    >
      <LoadingIcon icon="bars" class="w-8 h-8" />
      <div class="mt-2 text-xs text-center">bars</div>
    </div>
    <div
      class="flex flex-col items-center justify-end col-span-6 sm:col-span-3 xl:col-span-2"
    >
      <LoadingIcon icon="circles" class="w-8 h-8" />
      <div class="mt-2 text-xs text-center">circles</div>
    </div>
    <div
      class="flex flex-col items-center justify-end col-span-6 sm:col-span-3 xl:col-span-2"
    >
      <LoadingIcon icon="grid" class="w-8 h-8" />
      <div class="mt-2 text-xs text-center">grid</div>
    </div>
    <div
      class="flex flex-col items-center justify-end col-span-6 sm:col-span-3 xl:col-span-2"
    >
      <LoadingIcon icon="hearts" class="w-8 h-8" />
      <div class="mt-2 text-xs text-center">hearts</div>
    </div>
    <div
      class="flex flex-col items-center justify-end col-span-6 sm:col-span-3 xl:col-span-2"
    >
      <LoadingIcon icon="oval" class="w-8 h-8" />
      <div class="mt-2 text-xs text-center">oval</div>
    </div>
    <div
      class="flex flex-col items-center justify-end col-span-6 sm:col-span-3 xl:col-span-2"
    >
      <LoadingIcon icon="puff" class="w-8 h-8" />
      <div class="mt-2 text-xs text-center">puff</div>
    </div>
    <div
      class="flex flex-col items-center justify-end col-span-6 sm:col-span-3 xl:col-span-2"
    >
      <LoadingIcon icon="rings" class="w-8 h-8" />
      <div class="mt-2 text-xs text-center">rings</div>
    </div>
    <div
      class="flex flex-col items-center justify-end col-span-6 sm:col-span-3 xl:col-span-2"
    >
      <LoadingIcon icon="spinning-circles" class="w-8 h-8" />
      <div class="mt-2 text-xs text-center">spinning-circles</div>
    </div>
    <div
      class="flex flex-col items-center justify-end col-span-6 sm:col-span-3 xl:col-span-2"
    >
      <LoadingIcon icon="tail-spin" class="w-8 h-8" />
      <div class="mt-2 text-xs text-center">tail-spin</div>
    </div>
    <div
      class="flex flex-col items-center justify-end col-span-6 sm:col-span-3 xl:col-span-2"
    >
      <LoadingIcon icon="three-dots" class="w-8 h-8" />
      <div class="mt-2 text-xs text-center">three-dots</div>
    </div>
  </div>
  <!-- END: Icon List -->
</template>
