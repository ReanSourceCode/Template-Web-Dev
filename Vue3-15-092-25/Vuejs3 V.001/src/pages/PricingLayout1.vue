<script setup lang="ts">
import _ from "lodash";
import Button from "@/components/Base/Button";
import Lucide from "@/components/Base/Lucide";
</script>

<template>
  <div class="flex items-center mt-8 intro-y">
    <h2 class="mr-auto text-lg font-medium">Pricing Layout</h2>
  </div>
  <!-- BEGIN: Pricing Layout -->
  <div class="flex flex-col mt-5 intro-y box lg:flex-row">
    <div class="flex-1 px-5 py-16 intro-y">
      <Lucide icon="CreditCard" class="block w-12 h-12 mx-auto text-primary" />
      <div class="mt-10 text-xl font-medium text-center">Basic Plan</div>
      <div class="mt-5 text-center text-slate-600 dark:text-slate-500">
        1 Domain <span class="mx-1">•</span> 10 Users
        <span class="mx-1">•</span> 20 Copies
      </div>
      <div class="px-10 mx-auto mt-2 text-center text-slate-500">
        Lorem Ipsum is simply dummy text of the printing and typesetting
        industry.
      </div>
      <div class="flex justify-center">
        <div class="relative mx-auto mt-8 text-5xl font-semibold">
          <span class="absolute top-0 left-0 -ml-4 text-2xl">$</span> 35
        </div>
      </div>
      <Button
        variant="primary"
        rounded
        type="button"
        class="block px-4 py-3 mx-auto mt-8"
      >
        PURCHASE NOW
      </Button>
    </div>
    <div
      class="flex-1 p-5 py-16 border-t border-b intro-y lg:border-b-0 lg:border-t-0 lg:border-l lg:border-r border-slate-200/60 dark:border-darkmode-400"
    >
      <Lucide icon="Briefcase" class="block w-12 h-12 mx-auto text-primary" />
      <div class="mt-10 text-xl font-medium text-center">Business</div>
      <div class="mt-5 text-center text-slate-600 dark:text-slate-500">
        1 Domain <span class="mx-1">•</span> 10 Users
        <span class="mx-1">•</span> 20 Copies
      </div>
      <div class="px-10 mx-auto mt-2 text-center text-slate-500">
        Lorem Ipsum is simply dummy text of the printing and typesetting
        industry.
      </div>
      <div class="flex justify-center">
        <div class="relative mx-auto mt-8 text-5xl font-semibold">
          <span class="absolute top-0 left-0 -ml-4 text-2xl">$</span> 60
        </div>
      </div>
      <Button
        variant="primary"
        rounded
        type="button"
        class="block px-4 py-3 mx-auto mt-8"
      >
        PURCHASE NOW
      </Button>
    </div>
    <div class="flex-1 px-5 py-16 intro-y">
      <Lucide icon="ShoppingBag" class="block w-12 h-12 mx-auto text-primary" />
      <div class="mt-10 text-xl font-medium text-center">Enterprise</div>
      <div class="mt-5 text-center text-slate-600 dark:text-slate-500">
        1 Domain <span class="mx-1">•</span> 10 Users
        <span class="mx-1">•</span> 20 Copies
      </div>
      <div class="px-10 mx-auto mt-2 text-center text-slate-500">
        Lorem Ipsum is simply dummy text of the printing and typesetting
        industry.
      </div>
      <div class="flex justify-center">
        <div class="relative mx-auto mt-8 text-5xl font-semibold">
          <span class="absolute top-0 left-0 -ml-4 text-2xl">$</span>
          120
        </div>
      </div>
      <Button
        variant="primary"
        rounded
        type="button"
        class="block px-4 py-3 mx-auto mt-8"
      >
        PURCHASE NOW
      </Button>
    </div>
  </div>
  <!-- END: Pricing Layout -->
  <!-- BEGIN: Pricing Layout -->
  <div class="flex flex-col mt-5 intro-y box lg:flex-row">
    <div class="flex-1 px-5 py-16 intro-y">
      <Lucide icon="Activity" class="block w-12 h-12 mx-auto text-primary" />
      <div class="mt-10 text-xl font-medium text-center">Basic Plan</div>
      <div class="mt-5 text-center text-slate-600 dark:text-slate-500">
        1 Domain <span class="mx-1">•</span> 10 Users
        <span class="mx-1">•</span> 20 Copies
      </div>
      <div class="px-10 mx-auto mt-2 text-center text-slate-500">
        Lorem Ipsum is simply dummy text of the printing and typesetting
        industry.
      </div>
      <div class="flex justify-center">
        <div class="relative mx-auto mt-8 text-5xl font-semibold">
          <span class="absolute top-0 left-0 -ml-4 text-2xl">$</span> 35
        </div>
      </div>
      <Button
        variant="primary"
        rounded
        type="button"
        class="block px-4 py-3 mx-auto mt-8"
      >
        PURCHASE NOW
      </Button>
    </div>
    <div
      class="flex-1 px-5 py-16 border-t border-b intro-y lg:border-b-0 lg:border-t-0 lg:border-l lg:border-r border-slate-200/60 dark:border-darkmode-400"
    >
      <Lucide icon="Box" class="block w-12 h-12 mx-auto text-primary" />
      <div class="mt-10 text-xl font-medium text-center">Business</div>
      <div class="mt-5 text-center text-slate-600 dark:text-slate-500">
        1 Domain <span class="mx-1">•</span> 10 Users
        <span class="mx-1">•</span> 20 Copies
      </div>
      <div class="px-10 mx-auto mt-2 text-center text-slate-500">
        Lorem Ipsum is simply dummy text of the printing and typesetting
        industry.
      </div>
      <div class="flex justify-center">
        <div class="relative mx-auto mt-8 text-5xl font-semibold">
          <span class="absolute top-0 left-0 -ml-4 text-2xl">$</span> 60
        </div>
      </div>
      <Button
        variant="primary"
        rounded
        type="button"
        class="block px-4 py-3 mx-auto mt-8"
      >
        PURCHASE NOW
      </Button>
    </div>
    <div class="flex-1 px-5 py-16 intro-y">
      <Lucide icon="Send" class="block w-12 h-12 mx-auto text-primary" />
      <div class="mt-10 text-xl font-medium text-center">Enterprise</div>
      <div class="mt-5 text-center text-slate-600 dark:text-slate-500">
        1 Domain <span class="mx-1">•</span> 10 Users
        <span class="mx-1">•</span> 20 Copies
      </div>
      <div class="px-10 mx-auto mt-2 text-center text-slate-500">
        Lorem Ipsum is simply dummy text of the printing and typesetting
        industry.
      </div>
      <div class="flex justify-center">
        <div class="relative mx-auto mt-8 text-5xl font-semibold">
          <span class="absolute top-0 left-0 -ml-4 text-2xl">$</span>
          120
        </div>
      </div>
      <Button
        variant="primary"
        rounded
        type="button"
        class="block px-4 py-3 mx-auto mt-8"
      >
        PURCHASE NOW
      </Button>
    </div>
  </div>
  <!-- END: Pricing Layout -->
</template>
