<script setup lang="ts">
import _ from "lodash";
import { ref } from "vue";
import fakerData from "@/utils/faker";
import Button from "@/components/Base/Button";
import { FormInput, FormLabel, FormSwitch } from "@/components/Base/Form";
import Lucide from "@/components/Base/Lucide";
import Tippy from "@/components/Base/Tippy";
import Litepicker from "@/components/Base/Litepicker";
import TomSelect from "@/components/Base/TomSelect";
import { ClassicEditor } from "@/components/Base/Ckeditor";
import { Menu, Tab } from "@/components/Base/Headless";

const categories = ref(["1", "2"]);
const tags = ref(["1", "2"]);
const salesReportFilter = ref<string>("");
const editorData = ref("<p>Content of the editor.</p>");
</script>

<template>
  <div class="flex flex-col items-center mt-8 intro-y sm:flex-row">
    <h2 class="mr-auto text-lg font-medium">Add New Post</h2>
    <div class="flex w-full mt-4 sm:w-auto sm:mt-0">
      <Menu class="mr-2">
        <Menu.Button :as="Button" class="flex items-center !box">
          English <Lucide icon="ChevronDown" class="w-4 h-4 ml-2" />
        </Menu.Button>
        <Menu.Items class="w-40">
          <Menu.Item>
            <Lucide icon="Activity" class="w-4 h-4 mr-2" />
            <span class="truncate">English</span>
          </Menu.Item>
          <Menu.Item>
            <Lucide icon="Activity" class="w-4 h-4 mr-2" />
            <span class="truncate">Indonesian</span>
          </Menu.Item>
        </Menu.Items>
      </Menu>
      <Button type="button" class="flex items-center ml-auto mr-2 !box sm:ml-0">
        <Lucide icon="Eye" class="w-4 h-4 mr-2" /> Preview
      </Button>
      <Menu>
        <Menu.Button
          :as="Button"
          variant="primary"
          class="flex items-center shadow-md"
        >
          Save <Lucide icon="ChevronDown" class="w-4 h-4 ml-2" />
        </Menu.Button>
        <Menu.Items class="w-40">
          <Menu.Item>
            <Lucide icon="FileText" class="w-4 h-4 mr-2" /> As New Post
          </Menu.Item>
          <Menu.Item>
            <Lucide icon="FileText" class="w-4 h-4 mr-2" /> As Draft
          </Menu.Item>
          <Menu.Item>
            <Lucide icon="FileText" class="w-4 h-4 mr-2" /> Export to PDF
          </Menu.Item>
          <Menu.Item>
            <Lucide icon="FileText" class="w-4 h-4 mr-2" /> Export to Word
          </Menu.Item>
        </Menu.Items>
      </Menu>
    </div>
  </div>
  <div class="grid grid-cols-12 gap-5 mt-5 intro-y">
    <!-- BEGIN: Post Content -->
    <div class="col-span-12 intro-y lg:col-span-8">
      <FormInput
        type="text"
        class="px-4 py-3 pr-10 intro-y !box"
        placeholder="Title"
      />
      <Tab.Group class="mt-5 overflow-hidden intro-y box">
        <Tab.List
          class="flex-col border-transparent dark:border-transparent sm:flex-row bg-slate-200 dark:bg-darkmode-800"
        >
          <Tab :fullWidth="false" v-slot="{ selected }">
            <Tab.Button
              :class="[
                'flex items-center justify-center w-full px-0 py-0 sm:w-40 text-slate-500',
                {
                  'hover:border-transparent hover:bg-transparent hover:text-slate-600 hover:dark:bg-transparent hover:dark:text-slate-300':
                    !selected,
                },
                {
                  'text-primary border-transparent dark:bg-darkmode-600 dark:border-x-transparent dark:border-t-transparent dark:text-white':
                    selected,
                },
              ]"
              as="button"
            >
              <Tippy
                content="Fill in the article content"
                class="flex items-center justify-center w-full py-4"
                aria-controls="content"
                aria-selected="true"
              >
                <Lucide icon="FileText" class="w-4 h-4 mr-2" />
                Content
              </Tippy>
            </Tab.Button>
          </Tab>
          <Tab :fullWidth="false" v-slot="{ selected }">
            <Tab.Button
              :class="[
                'flex items-center justify-center w-full px-0 py-0 sm:w-40 text-slate-500',
                {
                  'hover:border-transparent hover:bg-transparent hover:text-slate-600 hover:dark:bg-transparent hover:dark:text-slate-300':
                    !selected,
                },
                {
                  'text-primary border-transparent dark:bg-darkmode-600 dark:border-x-transparent dark:border-t-transparent dark:text-white':
                    selected,
                },
              ]"
              as="button"
            >
              <Tippy
                content="Adjust the meta title"
                class="flex items-center justify-center w-full py-4"
                aria-selected="false"
              >
                <Lucide icon="Code" class="w-4 h-4 mr-2" /> Meta Title
              </Tippy>
            </Tab.Button>
          </Tab>
          <Tab :fullWidth="false" v-slot="{ selected }">
            <Tab.Button
              :class="[
                'flex items-center justify-center w-full px-0 py-0 sm:w-40 text-slate-500',
                {
                  'hover:border-transparent hover:bg-transparent hover:text-slate-600 hover:dark:bg-transparent hover:dark:text-slate-300':
                    !selected,
                },
                {
                  'text-primary border-transparent dark:bg-darkmode-600 dark:border-x-transparent dark:border-t-transparent dark:text-white':
                    selected,
                },
              ]"
              as="button"
            >
              <Tippy
                content="Use search keywords"
                class="flex items-center justify-center w-full py-4"
                aria-selected="false"
              >
                <Lucide icon="AlignLeft" class="w-4 h-4 mr-2" />
                Keywords
              </Tippy>
            </Tab.Button>
          </Tab>
        </Tab.List>
        <Tab.Panels>
          <Tab.Panel class="p-5">
            <div
              class="p-5 border rounded-md border-slate-200/60 dark:border-darkmode-400"
            >
              <div
                class="flex items-center pb-5 font-medium border-b border-slate-200/60 dark:border-darkmode-400"
              >
                <Lucide icon="ChevronDown" class="w-4 h-4 mr-2" /> Text Content
              </div>
              <div class="mt-5">
                <ClassicEditor v-model="editorData" />
              </div>
            </div>
            <div
              class="p-5 mt-5 border rounded-md border-slate-200/60 dark:border-darkmode-400"
            >
              <div
                class="flex items-center pb-5 font-medium border-b border-slate-200/60 dark:border-darkmode-400"
              >
                <Lucide icon="ChevronDown" class="w-4 h-4 mr-2" />
                Caption & Images
              </div>
              <div class="mt-5">
                <div>
                  <FormLabel htmlFor="post-form-7">Caption</FormLabel>
                  <FormInput
                    id="post-form-7"
                    type="text"
                    placeholder="Write caption"
                  />
                </div>
                <div class="mt-3">
                  <FormLabel>Upload Image</FormLabel>
                  <div
                    class="pt-4 border-2 border-dashed rounded-md dark:border-darkmode-400"
                  >
                    <div class="flex flex-wrap px-4">
                      <div
                        v-for="(faker, fakerKey) in _.take(fakerData, 4)"
                        :key="fakerKey"
                        class="relative w-24 h-24 mb-5 mr-5 cursor-pointer image-fit zoom-in"
                      >
                        <img
                          class="rounded-md"
                          alt="Midone Tailwind HTML Admin Template"
                          :src="faker.images[0]"
                        />
                        <Tippy
                          as="div"
                          content="Remove this image?"
                          class="absolute top-0 right-0 flex items-center justify-center w-5 h-5 -mt-2 -mr-2 text-white rounded-full bg-danger"
                        >
                          <Lucide icon="X" class="w-4 h-4" />
                        </Tippy>
                      </div>
                    </div>
                    <div
                      class="relative flex items-center px-4 pb-4 cursor-pointer"
                    >
                      <Lucide icon="Image" class="w-4 h-4 mr-2" />
                      <span class="mr-1 text-primary"> Upload a file </span> or
                      drag and drop
                      <FormInput
                        type="file"
                        class="absolute top-0 left-0 w-full h-full opacity-0"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </Tab.Panel>
        </Tab.Panels>
      </Tab.Group>
    </div>
    <!-- END: Post Content -->
    <!-- BEGIN: Post Info -->
    <div class="col-span-12 lg:col-span-4">
      <div class="p-5 intro-y box">
        <div>
          <FormLabel>Written By</FormLabel>
          <Menu class="[&>div:nth-child(2)]:w-full">
            <Menu.Button
              :as="Button"
              variant="outline-secondary"
              class="flex items-center justify-start w-full dark:bg-darkmode-800 dark:border-darkmode-800"
              role="button"
            >
              <div class="w-6 h-6 mr-3 image-fit">
                <img
                  class="rounded"
                  alt="Midone Tailwind HTML Admin Template"
                  :src="fakerData[0].photos[0]"
                />
              </div>
              <div class="truncate">{{ fakerData[0].users[0].name }}</div>
              <Lucide icon="ChevronDown" class="w-4 h-4 ml-auto" />
            </Menu.Button>
            <Menu.Items>
              <Menu.Item
                v-for="(faker, fakerKey) in _.take(fakerData, 5)"
                :key="fakerKey"
              >
                <div class="absolute w-6 h-6 mr-3 image-fit">
                  <img
                    class="rounded"
                    alt="Midone Tailwind HTML Admin Template"
                    :src="faker.photos[0]"
                  />
                </div>
                <div class="pl-1 ml-8">{{ faker.users[0].name }}</div>
              </Menu.Item>
            </Menu.Items>
          </Menu>
        </div>
        <div class="mt-3">
          <FormLabel htmlFor="post-form-2">Post Date</FormLabel>
          <Litepicker
            v-model="salesReportFilter"
            :options="{
              autoApply: false,
              showWeekNumbers: true,
              dropdowns: {
                minYear: 1990,
                maxYear: null,
                months: true,
                years: true,
              },
            }"
          />
        </div>
        <div class="mt-3">
          <FormLabel htmlFor="post-form-3">Categories</FormLabel>
          <TomSelect
            id="post-form-3"
            v-model="categories"
            class="w-full"
            multiple
          >
            <option value="1">Horror</option>
            <option value="2">Sci-fi</option>
            <option value="3">Action</option>
            <option value="4">Drama</option>
            <option value="5">Comedy</option>
          </TomSelect>
        </div>
        <div class="mt-3">
          <FormLabel htmlFor="post-form-4">Tags</FormLabel>
          <TomSelect id="post-form-4" v-model="tags" class="w-full" multiple>
            <option value="1">Leonardo DiCaprio</option>
            <option value="2">Johnny Deep</option>
            <option value="3">Robert Downey, Jr</option>
            <option value="4">Samuel L. Jackson</option>
            <option value="5">Morgan Freeman</option>
          </TomSelect>
        </div>
        <FormSwitch class="flex flex-col items-start mt-3">
          <FormSwitch.Label htmlFor="post-form-5" class="mb-2 ml-0">
            Published
          </FormSwitch.Label>
          <FormSwitch.Input id="post-form-5" type="checkbox" />
        </FormSwitch>
        <FormSwitch class="flex flex-col items-start mt-3">
          <FormSwitch.Label htmlFor="post-form-6" class="mb-2 ml-0">
            Show Author Name
          </FormSwitch.Label>
          <FormSwitch.Input id="post-form-6" type="checkbox" />
        </FormSwitch>
      </div>
    </div>
    <!-- END: Post Info -->
  </div>
</template>
