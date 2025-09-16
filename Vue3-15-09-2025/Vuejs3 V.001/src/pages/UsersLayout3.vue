<script setup lang="ts">
import _ from "lodash";
import fakerData from "@/utils/faker";
import Button from "@/components/Base/Button";
import Pagination from "@/components/Base/Pagination";
import { FormInput, FormSelect } from "@/components/Base/Form";
import Lucide from "@/components/Base/Lucide";
import { Menu } from "@/components/Base/Headless";
</script>

<template>
  <h2 class="mt-10 text-lg font-medium intro-y">Users Layout</h2>
  <div class="grid grid-cols-12 gap-6 mt-5">
    <div
      class="flex flex-wrap items-center col-span-12 mt-2 intro-y sm:flex-nowrap"
    >
      <Button variant="primary" class="mr-2 shadow-md"> Add New User </Button>
      <Menu>
        <Menu.Button :as="Button" class="px-2 !box">
          <span class="flex items-center justify-center w-5 h-5">
            <Lucide icon="Plus" class="w-4 h-4" />
          </span>
        </Menu.Button>
        <Menu.Items class="w-40">
          <Menu.Item>
            <Lucide icon="Users" class="w-4 h-4 mr-2" /> Add Group
          </Menu.Item>
          <Menu.Item>
            <Lucide icon="MessageCircle" class="w-4 h-4 mr-2" /> Send Message
          </Menu.Item>
        </Menu.Items>
      </Menu>
      <div class="hidden mx-auto md:block text-slate-500">
        Showing 1 to 10 of 150 entries
      </div>
      <div class="w-full mt-3 sm:w-auto sm:mt-0 sm:ml-auto md:ml-0">
        <div class="relative w-56 text-slate-500">
          <FormInput
            type="text"
            class="w-56 pr-10 !box"
            placeholder="Search..."
          />
          <Lucide
            icon="Search"
            class="absolute inset-y-0 right-0 w-4 h-4 my-auto mr-3"
          />
        </div>
      </div>
    </div>
    <!-- BEGIN: Users Layout -->
    <div
      v-for="(faker, fakerKey) in _.take(fakerData, 9)"
      :key="fakerKey"
      class="col-span-12 intro-y md:col-span-6 lg:col-span-4"
    >
      <div class="box">
        <div class="flex items-start px-5 pt-5">
          <div class="flex flex-col items-center w-full lg:flex-row">
            <div class="w-16 h-16 image-fit">
              <img
                alt="Midone Tailwind HTML Admin Template"
                class="rounded-full"
                :src="faker.photos[0]"
              />
            </div>
            <div class="mt-3 text-center lg:ml-4 lg:text-left lg:mt-0">
              <a href="" class="font-medium"> {{ faker.users[0].name }} </a>
              <div class="text-slate-500 text-xs mt-0.5">
                {{ faker.jobs[0] }}
              </div>
            </div>
          </div>
          <Menu class="absolute top-0 right-0 mt-3 mr-5">
            <Menu.Button tag="a" class="block w-5 h-5" href="#">
              <Lucide icon="MoreHorizontal" class="w-5 h-5 text-slate-500" />
            </Menu.Button>
            <Menu.Items class="w-40">
              <Menu.Item>
                <Lucide icon="Edit2" class="w-4 h-4 mr-2" /> Edit
              </Menu.Item>
              <Menu.Item>
                <Lucide icon="Trash" class="w-4 h-4 mr-2" /> Delete
              </Menu.Item>
            </Menu.Items>
          </Menu>
        </div>
        <div class="p-5 text-center lg:text-left">
          <div>{{ faker.news[0].shortContent }}</div>
          <div
            class="flex items-center justify-center mt-5 lg:justify-start text-slate-500"
          >
            <Lucide icon="Mail" class="w-3 h-3 mr-2" />
            {{ faker.users[0].email }}
          </div>
          <div
            class="flex items-center justify-center mt-1 lg:justify-start text-slate-500"
          >
            <Lucide icon="Instagram" class="w-3 h-3 mr-2" />
            {{ faker.users[0].name }}
          </div>
        </div>
        <div
          class="p-5 text-center border-t lg:text-right border-slate-200/60 dark:border-darkmode-400"
        >
          <Button variant="primary" class="px-2 py-1 mr-2"> Message </Button>
          <Button variant="outline-secondary" class="px-2 py-1">
            Profile
          </Button>
        </div>
      </div>
    </div>
    <!-- END: Users Layout -->
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
