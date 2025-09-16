<script setup lang="ts">
import _ from "lodash";
import fakerData from "@/utils/faker";
import { FormTextarea } from "@/components/Base/Form";
import Lucide from "@/components/Base/Lucide";
import Tippy from "@/components/Base/Tippy";
</script>

<template>
  <div class="p-5 mt-8 intro-y xl:w-3/5 box">
    <!-- BEGIN: Blog Layout -->
    <h2 class="text-xl font-medium intro-y sm:text-2xl">
      {{ fakerData[0].news[0].title }}
    </h2>
    <div
      class="mt-3 text-xs intro-y text-slate-600 dark:text-slate-500 sm:text-sm"
    >
      {{ fakerData[0].dates[0] }} <span class="mx-1">•</span>
      <a class="text-primary" href="">
        {{ fakerData[0].products[0].category }}
      </a>
      <span class="mx-1">•</span> 7 Min read
    </div>
    <div class="mt-6 intro-y">
      <div class="h-[250px] md:h-[400px] image-fit">
        <img
          alt="Midone Tailwind HTML Admin Template"
          class="rounded-md"
          :src="fakerData[0].images[0]"
        />
      </div>
    </div>
    <div class="relative flex items-center pt-16 pb-6 intro-y sm:pt-6">
      <Tippy
        as="a"
        href=""
        class="flex items-center justify-center flex-none w-8 h-8 mr-2 border rounded-full intro-x sm:w-10 sm:h-10 border-slate-300 dark:border-darkmode-400 dark:bg-darkmode-300 dark:text-slate-300 text-slate-500"
        content="Bookmark"
      >
        <Lucide icon="Bookmark" class="w-3 h-3" />
      </Tippy>
      <div class="flex mr-3 intro-x">
        <div class="w-8 h-8 intro-x sm:w-10 sm:h-10 image-fit">
          <Tippy
            as="img"
            alt="Midone Tailwind HTML Admin Template"
            class="border border-white rounded-full zoom-in"
            :src="fakerData[0].photos[0]"
            :content="fakerData[0].users[0].name"
          />
        </div>
        <div class="w-8 h-8 -ml-4 intro-x sm:w-10 sm:h-10 image-fit">
          <Tippy
            as="img"
            alt="Midone Tailwind HTML Admin Template"
            class="border border-white rounded-full zoom-in"
            :src="fakerData[0].photos[1]"
            :content="fakerData[0].users[1].name"
          />
        </div>
        <div class="w-8 h-8 -ml-4 intro-x sm:w-10 sm:h-10 image-fit">
          <Tippy
            as="img"
            alt="Midone Tailwind HTML Admin Template"
            class="border border-white rounded-full zoom-in"
            :src="fakerData[0].photos[2]"
            :content="fakerData[0].users[2].name"
          />
        </div>
      </div>
      <div
        class="absolute flex w-full -mt-12 text-xs sm:relative sm:mt-0 text-slate-600 dark:text-slate-500 sm:text-sm"
      >
        <div class="mr-1 intro-x sm:mr-3">
          Comments:
          <span class="font-medium">{{ fakerData[0].totals[0] }}</span>
        </div>
        <div class="mr-1 intro-x sm:mr-3">
          Views:
          <span class="font-medium">{{ fakerData[0].totals[1] }}k</span>
        </div>
        <div class="ml-auto intro-x sm:mr-3">
          Likes:
          <span class="font-medium">{{ fakerData[0].totals[2] }}k</span>
        </div>
      </div>
      <Tippy
        as="a"
        href=""
        class="flex items-center justify-center flex-none w-8 h-8 ml-auto rounded-full intro-x sm:w-10 sm:h-10 text-primary bg-primary/10 dark:bg-darkmode-300 dark:text-slate-300 sm:ml-0"
        content="Share"
      >
        <Lucide icon="Share2" class="w-3 h-3" />
      </Tippy>
      <Tippy
        as="a"
        href=""
        class="flex items-center justify-center flex-none w-8 h-8 ml-2 text-white rounded-full intro-x sm:w-10 sm:h-10 bg-primary"
        content="Download PDF"
      >
        <Lucide icon="Share" class="w-3 h-3" />
      </Tippy>
    </div>
    <div class="leading-relaxed text-justify intro-y indent-[30px]">
      <p class="mb-5">{{ fakerData[1].news[0].content }}</p>
      <p class="mb-5">{{ fakerData[2].news[0].content }}</p>
      <p>{{ fakerData[3].news[0].content }}</p>
    </div>
    <div
      class="flex flex-col items-center pt-5 mt-5 text-xs border-t intro-y sm:text-sm sm:flex-row border-slate-200/60 dark:border-darkmode-400"
    >
      <div class="flex items-center">
        <div class="flex-none w-12 h-12 image-fit">
          <img
            alt="Midone Tailwind HTML Admin Template"
            class="rounded-full"
            :src="fakerData[0].photos[0]"
          />
        </div>
        <div class="ml-3 mr-auto">
          <a href="" class="font-medium">
            {{ fakerData[0].users[0].name }}
          </a>
          , Author
          <div class="text-slate-500">Senior Frontend Engineer</div>
        </div>
      </div>
      <div
        class="flex items-center mt-5 text-slate-600 dark:text-slate-500 sm:ml-auto sm:mt-0"
      >
        Share this post:
        <Tippy
          as="a"
          href=""
          class="flex items-center justify-center w-8 h-8 ml-2 border rounded-full sm:w-10 sm:h-10 dark:border-darkmode-400 text-slate-400 zoom-in"
          content="Facebook"
        >
          <Lucide icon="Facebook" class="w-3 h-3 fill-current" />
        </Tippy>
        <Tippy
          as="a"
          href=""
          class="flex items-center justify-center w-8 h-8 ml-2 border rounded-full sm:w-10 sm:h-10 dark:border-darkmode-400 text-slate-400 zoom-in"
          content="Twitter"
        >
          <Lucide icon="Twitter" class="w-3 h-3 fill-current" />
        </Tippy>
        <Tippy
          as="a"
          href=""
          class="flex items-center justify-center w-8 h-8 ml-2 border rounded-full sm:w-10 sm:h-10 dark:border-darkmode-400 text-slate-400 zoom-in"
          content="Linked In"
        >
          <Lucide icon="Linkedin" class="w-3 h-3 fill-current" />
        </Tippy>
      </div>
    </div>
    <!-- END: Blog Layout -->
    <!-- BEGIN: Comments -->
    <div
      class="pt-5 mt-5 border-t intro-y border-slate-200/60 dark:border-darkmode-400"
    >
      <div class="text-base font-medium sm:text-lg">2 Responses</div>
      <div class="relative mt-5 news__input h-[69px]">
        <Lucide
          icon="MessageCircle"
          class="absolute inset-y-0 left-0 w-5 h-5 my-auto ml-6 text-slate-500"
        />
        <FormTextarea
          class="py-6 pl-16 border-transparent resize-none bg-slate-100"
          :rows="1"
          placeholder="Post a comment..."
        ></FormTextarea>
      </div>
    </div>
    <div class="pb-10 mt-5 intro-y">
      <div class="pt-5">
        <div class="flex">
          <div class="flex-none w-10 h-10 sm:w-12 sm:h-12 image-fit">
            <img
              alt="Midone Tailwind HTML Admin Template"
              class="rounded-full"
              :src="fakerData[0].photos[0]"
            />
          </div>
          <div class="flex-1 ml-3">
            <div class="flex items-center">
              <a href="" class="font-medium">
                {{ fakerData[0].users[0].name }}
              </a>
              <a href="" class="ml-auto text-xs text-slate-500"> Reply </a>
            </div>
            <div class="text-xs text-slate-500 sm:text-sm">
              {{ fakerData[0].formattedTimes[0] }}
            </div>
            <div class="mt-2">{{ fakerData[0].news[0].shortContent }}</div>
          </div>
        </div>
      </div>
      <div
        class="pt-5 mt-5 border-t border-slate-200/60 dark:border-darkmode-400"
      >
        <div class="flex">
          <div class="flex-none w-10 h-10 sm:w-12 sm:h-12 image-fit">
            <img
              alt="Midone Tailwind HTML Admin Template"
              class="rounded-full"
              :src="fakerData[0].photos[1]"
            />
          </div>
          <div class="flex-1 ml-3">
            <div class="flex items-center">
              <a href="" class="font-medium">
                {{ fakerData[0].users[1].name }}
              </a>
              <a href="" class="ml-auto text-xs text-slate-500"> Reply </a>
            </div>
            <div class="text-xs text-slate-500 sm:text-sm">
              {{ fakerData[1].formattedTimes[0] }}
            </div>
            <div class="mt-2">{{ fakerData[1].news[0].shortContent }}</div>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Comments -->
  </div>
</template>
