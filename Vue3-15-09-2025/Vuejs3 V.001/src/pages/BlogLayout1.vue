<script setup lang="ts">
import _ from "lodash";
import fakerData from "@/utils/faker";
import Button from "@/components/Base/Button";
import Pagination from "@/components/Base/Pagination";
import { FormInput, FormSelect } from "@/components/Base/Form";
import Lucide from "@/components/Base/Lucide";
import Tippy from "@/components/Base/Tippy";
import { Menu } from "@/components/Base/Headless";
</script>

<template>
  <div class="flex flex-col items-center mt-8 intro-y sm:flex-row">
    <h2 class="mr-auto text-lg font-medium">Blog Layout</h2>
    <div class="flex w-full mt-4 sm:w-auto sm:mt-0">
      <Button variant="primary" class="mr-2 shadow-md"> Add New Post </Button>
      <Menu class="ml-auto sm:ml-0">
        <Menu.Button :as="Button" class="px-2 !box">
          <span class="flex items-center justify-center w-5 h-5">
            <Lucide icon="Plus" class="w-4 h-4" />
          </span>
        </Menu.Button>
        <Menu.Items class="w-40">
          <Menu.Item>
            <Lucide icon="Share2" class="w-4 h-4 mr-2" /> Share Post
          </Menu.Item>
          <Menu.Item>
            <Lucide icon="Download" class="w-4 h-4 mr-2" /> Download Post
          </Menu.Item>
        </Menu.Items>
      </Menu>
    </div>
  </div>
  <div class="grid grid-cols-12 gap-6 mt-5 intro-y">
    <!-- BEGIN: Blog Layout -->
    <div
      v-for="(faker, fakerKey) in _.take(fakerData, 9)"
      :key="fakerKey"
      class="col-span-12 intro-y md:col-span-6 xl:col-span-4 box"
    >
      <div
        class="flex items-center px-5 py-4 border-b border-slate-200/60 dark:border-darkmode-400"
      >
        <div class="flex-none w-10 h-10 image-fit">
          <img
            alt="Midone Tailwind HTML Admin Template"
            class="rounded-full"
            :src="faker.photos[0]"
          />
        </div>
        <div class="ml-3 mr-auto">
          <a href="" class="font-medium"> {{ faker.users[0].name }} </a>
          <div class="flex text-slate-500 truncate text-xs mt-0.5">
            <a class="inline-block truncate text-primary" href="">
              {{ faker.products[0].category }}
            </a>
            <span class="mx-1">•</span> {{ faker.formattedTimes[0] }}
          </div>
        </div>
        <Menu class="ml-3">
          <Menu.Button tag="a" href="#" class="w-5 h-5 text-slate-500">
            <Lucide icon="MoreVertical" class="w-5 h-5" />
          </Menu.Button>
          <Menu.Items class="w-40">
            <Menu.Item>
              <Lucide icon="Edit2" class="w-4 h-4 mr-2" /> Edit Post
            </Menu.Item>
            <Menu.Item>
              <Lucide icon="Trash" class="w-4 h-4 mr-2" /> Delete Post
            </Menu.Item>
          </Menu.Items>
        </Menu>
      </div>
      <div class="p-5">
        <div class="h-40 2xl:h-56 image-fit">
          <img
            alt="Midone Tailwind HTML Admin Template"
            class="rounded-md"
            :src="faker.images[0]"
          />
        </div>
        <a href="" class="block mt-5 text-base font-medium">
          {{ faker.news[0].title }}
        </a>
        <div class="mt-2 text-slate-600 dark:text-slate-500">
          {{ faker.news[0].shortContent }}
        </div>
      </div>
      <div
        class="flex items-center px-5 py-3 border-t border-slate-200/60 dark:border-darkmode-400"
      >
        <Tippy
          as="a"
          href=""
          class="flex items-center justify-center w-8 h-8 mr-2 border rounded-full intro-x border-slate-300 dark:border-darkmode-400 dark:bg-darkmode-300 dark:text-slate-300 text-slate-500"
          content="Bookmark"
        >
          <Lucide icon="Bookmark" class="w-3 h-3" />
        </Tippy>
        <div class="flex mr-2 intro-x">
          <div class="w-8 h-8 intro-x image-fit">
            <Tippy
              as="img"
              alt="Midone Tailwind HTML Admin Template"
              class="border border-white rounded-full zoom-in"
              :src="faker.photos[0]"
              :content="faker.users[0].name"
            />
          </div>
          <div class="w-8 h-8 -ml-4 intro-x image-fit">
            <Tippy
              as="img"
              alt="Midone Tailwind HTML Admin Template"
              class="border border-white rounded-full zoom-in"
              :src="faker.photos[1]"
              :content="faker.users[1].name"
            />
          </div>
          <div class="w-8 h-8 -ml-4 intro-x image-fit">
            <Tippy
              as="img"
              alt="Midone Tailwind HTML Admin Template"
              class="border border-white rounded-full zoom-in"
              :src="faker.photos[2]"
              :content="faker.users[2].name"
            />
          </div>
        </div>
        <Tippy
          as="a"
          href=""
          class="flex items-center justify-center w-8 h-8 ml-auto rounded-full intro-x text-primary bg-primary/10 dark:bg-darkmode-300 dark:text-slate-300"
          content="Share"
        >
          <Lucide icon="Share2" class="w-3 h-3" />
        </Tippy>
        <Tippy
          as="a"
          href=""
          class="flex items-center justify-center w-8 h-8 ml-2 text-white rounded-full intro-x bg-primary"
          content="Download PDF"
        >
          <Lucide icon="Share" class="w-3 h-3" />
        </Tippy>
      </div>
      <div
        class="px-5 pt-3 pb-5 border-t border-slate-200/60 dark:border-darkmode-400"
      >
        <div class="flex w-full text-xs text-slate-500 sm:text-sm">
          <div class="mr-2">
            Comments:
            <span class="font-medium">{{ faker.totals[0] }}</span>
          </div>
          <div class="mr-2">
            Views: <span class="font-medium">{{ faker.totals[1] }}k</span>
          </div>
          <div class="ml-auto">
            Likes: <span class="font-medium">{{ faker.totals[2] }}k</span>
          </div>
        </div>
        <div class="flex items-center w-full mt-3">
          <div class="flex-none w-8 h-8 mr-3 image-fit">
            <img
              alt="Midone Tailwind HTML Admin Template"
              class="rounded-full"
              :src="faker.photos[0]"
            />
          </div>
          <div class="relative flex-1 text-slate-600">
            <FormInput
              rounded
              type="text"
              class="pr-10 border-transparent bg-slate-100"
              placeholder="Post a comment..."
            />
            <Lucide
              icon="Smile"
              class="absolute inset-y-0 right-0 w-4 h-4 my-auto mr-3"
            />
          </div>
        </div>
      </div>
    </div>
    <!-- END: Blog Layout -->
    <!-- BEGIN: Pagination -->
    <div
      class="flex flex-wrap items-center col-span-12 intro-y sm:flex-row sm:flex-nowrap"
    >
      <Pagination class="w-full sm:w-auto sm:mr-auto">
        <Pagination.Link>
          <Lucide icon="ChevronsLeft" class="w-4 h-4" />
        </Pagination.Link>
        <Pagination.Link>
          <Lucide icon="ChevronLeft" class="w-4 h-4" />
        </Pagination.Link>
        <Pagination.Link>...</Pagination.Link>
        <Pagination.Link>1</Pagination.Link>
        <Pagination.Link active>2</Pagination.Link>
        <Pagination.Link>3</Pagination.Link>
        <Pagination.Link>...</Pagination.Link>
        <Pagination.Link>
          <Lucide icon="ChevronRight" class="w-4 h-4" />
        </Pagination.Link>
        <Pagination.Link>
          <Lucide icon="ChevronsRight" class="w-4 h-4" />
        </Pagination.Link>
      </Pagination>
      <FormSelect class="w-20 mt-3 !box sm:mt-0">
        <option>10</option>
        <option>25</option>
        <option>35</option>
        <option>50</option>
      </FormSelect>
    </div>
    <!-- END: Pagination -->
  </div>
</template>
