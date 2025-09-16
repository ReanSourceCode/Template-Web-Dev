<script setup lang="ts">
import Preview from "@/components/Base/Preview";
import TinySlider from "@/components/Base/TinySlider";
import { FormSwitch } from "@/components/Base/Form";
import fakerData from "@/utils/faker";
</script>

<template>
  <div class="flex items-center mt-8 intro-y">
    <h2 class="mr-auto text-lg font-medium">Slider</h2>
  </div>
  <div class="grid grid-cols-12 gap-6 mt-5">
    <div class="col-span-12 intro-y lg:col-span-6">
      <!-- BEGIN: Single Item -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Single Item</h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-1">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-1"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div class="p-5">
          <Preview.Panel>
            <div class="mx-6">
              <TinySlider
                :options="{
                  controls: true,
                }"
              >
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      1
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      2
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      3
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      4
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      5
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      6
                    </h3>
                  </div>
                </div>
              </TinySlider>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="mx-6">
                <TinySlider
                  :options="{
                    controls: true,
                  }"
                >
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        1
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        2
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        3
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        4
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        5
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        6
                      </h3>
                    </div>
                  </div>
                </TinySlider>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Single Item -->
      <!-- BEGIN: Multiple Item -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Multiple Item</h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-2">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-2"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div class="p-5">
          <Preview.Panel>
            <div class="mx-6">
              <TinySlider
                :options="{
                  autoplay: false,
                  controls: true,
                  items: 1,
                  responsive: {
                    600: {
                      items: 3,
                    },
                    480: {
                      items: 2,
                    },
                  },
                }"
              >
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      1
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      2
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      3
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      4
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      5
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      6
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      7
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      8
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      9
                    </h3>
                  </div>
                </div>
              </TinySlider>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="mx-6">
                <TinySlider
                  :options="{
                    autoplay: false,
                    controls: true,
                    items: 1,
                    responsive: {
                      600: {
                        items: 3,
                      },
                      480: {
                        items: 2,
                      },
                    },
                  }"
                >
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        1
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        2
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        3
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        4
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        5
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        6
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        7
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        8
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        9
                      </h3>
                    </div>
                  </div>
                </TinySlider>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Multiple Item -->
      <!-- BEGIN: Responsive Display -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Responsive Display</h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-3">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-3"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div class="p-5">
          <Preview.Panel>
            <div class="pb-8 mx-6">
              <TinySlider
                :options="{
                  autoplay: false,
                  controls: true,
                  items: 1,
                  nav: true,
                  responsive: {
                    600: {
                      items: 3,
                    },
                    480: {
                      items: 2,
                    },
                  },
                }"
              >
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      1
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      2
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      3
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      4
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      5
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      6
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      7
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      8
                    </h3>
                  </div>
                </div>
              </TinySlider>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="pb-8 mx-6">
                <TinySlider
                  :options="{
                    autoplay: false,
                    controls: true,
                    items: 1,
                    nav: true,
                    responsive: {
                      600: {
                        items: 3,
                      },
                      480: {
                        items: 2,
                      },
                    },
                  }"
                >
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        1
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        2
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        3
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        4
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        5
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        6
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        7
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        8
                      </h3>
                    </div>
                  </div>
                </TinySlider>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Responsive Display -->
    </div>
    <div class="col-span-12 intro-y lg:col-span-6">
      <!-- BEGIN: Center Mode -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Center Mode</h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-4">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-4"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div class="p-5">
          <Preview.Panel>
            <div class="mx-6">
              <TinySlider
                :options="{
                  autoplay: false,
                  controls: true,
                  center: true,
                  items: 1,
                  responsive: {
                    600: {
                      items: 2,
                    },
                  },
                }"
              >
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      1
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      2
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      3
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      4
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      5
                    </h3>
                  </div>
                </div>
                <div class="h-32 px-2">
                  <div
                    class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                  >
                    <h3
                      class="flex items-center justify-center h-full text-2xl font-medium"
                    >
                      6
                    </h3>
                  </div>
                </div>
              </TinySlider>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="mx-6">
                <TinySlider
                  :options="{
                    autoplay: false,
                    controls: true,
                    center: true,
                    items: 1,
                    responsive: {
                      600: {
                        items: 2,
                      },
                    },
                  }"
                >
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        1
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        2
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        3
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        4
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        5
                      </h3>
                    </div>
                  </div>
                  <div class="h-32 px-2">
                    <div
                      class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400"
                    >
                      <h3
                        class="flex items-center justify-center h-full text-2xl font-medium"
                      >
                        6
                      </h3>
                    </div>
                  </div>
                </TinySlider>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Center Mode -->
      <!-- BEGIN: Fade Animation -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Fade Animation</h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-5">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-5"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div class="p-5">
          <Preview.Panel>
            <div class="pb-8 mx-6">
              <TinySlider
                :options="{
                  mode: 'gallery',
                  controls: true,
                  nav: true,
                  speed: 500,
                }"
              >
                <div class="h-64 px-2">
                  <div class="h-full overflow-hidden rounded-md image-fit">
                    <img
                      alt="Midone Tailwind HTML Admin Template"
                      :src="fakerData[0].images[0]"
                    />
                  </div>
                </div>
                <div class="h-64 px-2">
                  <div class="h-full overflow-hidden rounded-md image-fit">
                    <img
                      alt="Midone Tailwind HTML Admin Template"
                      :src="fakerData[1].images[1]"
                    />
                  </div>
                </div>
                <div class="h-64 px-2">
                  <div class="h-full overflow-hidden rounded-md image-fit">
                    <img
                      alt="Midone Tailwind HTML Admin Template"
                      :src="fakerData[2].images[2]"
                    />
                  </div>
                </div>
              </TinySlider>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="pb-8 mx-6">
                <TinySlider
                  :options="{
                    mode: 'gallery',
                    controls: true,
                    nav: true,
                    speed: 500,
                  }"
                >
                  <div class="h-64 px-2">
                    <div class="h-full overflow-hidden rounded-md image-fit">
                      <img
                        alt="Midone Tailwind HTML Admin Template"
                        :src="fakerData[0].images[0]"
                      />
                    </div>
                  </div>
                  <div class="h-64 px-2">
                    <div class="h-full overflow-hidden rounded-md image-fit">
                      <img
                        alt="Midone Tailwind HTML Admin Template"
                        :src="fakerData[1].images[1]"
                      />
                    </div>
                  </div>
                  <div class="h-64 px-2">
                    <div class="h-full overflow-hidden rounded-md image-fit">
                      <img
                        alt="Midone Tailwind HTML Admin Template"
                        :src="fakerData[2].images[2]"
                      />
                    </div>
                  </div>
                </TinySlider>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Fade Animation -->
    </div>
  </div>
</template>
