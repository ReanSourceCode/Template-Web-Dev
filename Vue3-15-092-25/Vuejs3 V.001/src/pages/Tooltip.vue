<script setup lang="ts">
import Preview from "@/components/Base/Preview";
import Button from "@/components/Base/Button";
import Tippy from "@/components/Base/Tippy";
import TippyContent from "@/components/Base/TippyContent";
import { FormSwitch } from "@/components/Base/Form";
import fakerData from "@/utils/faker";
import SimpleLineChart1 from "@/components/SimpleLineChart1";
</script>

<template>
  <div class="flex items-center mt-8 intro-y">
    <h2 class="mr-auto text-lg font-medium">Tooltip</h2>
  </div>
  <div class="grid grid-cols-12 gap-6 mt-5">
    <div class="col-span-12 intro-y lg:col-span-6">
      <!-- BEGIN: Basic Tooltip -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Basic Tooltip</h2>
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
            <div class="text-center">
              <Tippy
                :as="Button"
                variant="primary"
                content="This is awesome tooltip example!"
              >
                Show Tooltip
              </Tippy>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="text-center">
                <Tippy
                  :as="Button"
                  variant="primary"
                  content="This is awesome tooltip example!"
                >
                  Show Tooltip
                </Tippy>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Basic Tooltip -->
      <!-- BEGIN: On CLick Tooltip -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">On Click Tooltip</h2>
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
            <div class="text-center">
              <Tippy
                :as="Button"
                variant="primary"
                content="This is awesome tooltip example!"
                :options="{
                  trigger: 'click',
                }"
              >
                Show Tooltip
              </Tippy>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="text-center">
                <Tippy
                  :as="Button"
                  variant="primary"
                  content="This is awesome tooltip example!"
                  :options="{
                    trigger: 'click',
                  }"
                >
                  Show Tooltip
                </Tippy>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: On CLick Tooltip -->
      <!-- BEGIN: Light Tooltip -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Light Tooltip</h2>
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
            <div class="text-center">
              <Tippy
                :as="Button"
                variant="primary"
                content="This is awesome tooltip example!"
                :options="{
                  theme: 'light',
                }"
              >
                Show Tooltip
              </Tippy>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="text-center">
                <Tippy
                  :as="Button"
                  variant="primary"
                  content="This is awesome tooltip example!"
                  :options="{
                    theme: 'light',
                  }"
                >
                  Show Tooltip
                </Tippy>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Light Tooltip -->
    </div>
    <div class="col-span-12 intro-y lg:col-span-6">
      <!-- BEGIN: Custom Content Tooltip -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Custom Tooltip Content</h2>
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
            <!-- BEGIN: Custom Tooltip Toggle -->
            <div class="text-center">
              <Button variant="primary" data-tooltip="custom-tooltip-content">
                Show Tooltip
              </Button>
            </div>
            <!-- END: Custom Tooltip Toggle -->
            <!-- BEGIN: Custom Tooltip Content -->
            <div class="tooltip-content">
              <TippyContent to="custom-tooltip-content">
                <div class="relative flex items-center py-1">
                  <div class="w-12 h-12 image-fit">
                    <img
                      alt="Midone Tailwind HTML Admin Template"
                      class="rounded-full"
                      :src="fakerData[0].photos[0]"
                    />
                  </div>
                  <div class="ml-4 mr-auto">
                    <div
                      class="font-medium leading-relaxed dark:text-slate-200"
                    >
                      {{ fakerData[0].users[0].name }}
                    </div>
                    <div class="text-slate-500 dark:text-slate-400">
                      TailwindCSS 3+ HTML Admin Template
                    </div>
                  </div>
                </div>
              </TippyContent>
            </div>
            <!-- END: Custom Tooltip Content -->
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <!-- BEGIN: Custom Tooltip Toggle -->
              <div class="text-center">
                <Button variant="primary" data-tooltip="custom-tooltip-content">
                  Show Tooltip
                </Button>
              </div>
              <!-- END: Custom Tooltip Toggle -->
              <!-- BEGIN: Custom Tooltip Content -->
              <div class="tooltip-content">
                <TippyContent to="custom-tooltip-content">
                  <div class="relative flex items-center py-1">
                    <div class="w-12 h-12 image-fit">
                      <img
                        alt="Midone Tailwind HTML Admin Template"
                        class="rounded-full"
                        :src="fakerData[0].photos[0]"
                      />
                    </div>
                    <div class="ml-4 mr-auto">
                      <div
                        class="font-medium leading-relaxed dark:text-slate-200"
                      >
                        \{\{ fakerData[0].users[0].name \}\}
                      </div>
                      <div class="text-slate-500 dark:text-slate-400">
                        TailwindCSS 3+ HTML Admin Template
                      </div>
                    </div>
                  </div>
                </TippyContent>
              </div>
              <!-- END: Custom Tooltip Content -->
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Custom Content Tooltip -->
      <!-- BEGIN: Chart Tooltip -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Chart Tooltip</h2>
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
            <!-- BEGIN: Custom Tooltip Toggle -->
            <div class="text-center">
              <Button variant="primary" data-tooltip="chart-tooltip">
                Show Tooltip
              </Button>
            </div>
            <!-- END: Custom Tooltip Toggle -->
            <!-- BEGIN: Custom Tooltip Content -->
            <div class="tooltip-content">
              <TippyContent to="chart-tooltip" class="py-1">
                <div class="font-medium dark:text-slate-200">Net Worth</div>
                <div class="flex items-center mt-2 sm:mt-0">
                  <div class="flex w-20 mr-2 dark:text-slate-400">
                    USP:
                    <span class="ml-auto font-medium text-success"> +23% </span>
                  </div>
                  <div class="w-24 sm:w-32 lg:w-56">
                    <SimpleLineChart1 :height="30" />
                  </div>
                </div>
              </TippyContent>
            </div>
            <!-- END: Custom Tooltip Content -->
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <!-- BEGIN: Custom Tooltip Toggle -->
              <div class="text-center">
                <Button variant="primary" data-tooltip="chart-tooltip">
                  Show Tooltip
                </Button>
              </div>
              <!-- END: Custom Tooltip Toggle -->
              <!-- BEGIN: Custom Tooltip Content -->
              <div class="tooltip-content">
                <TippyContent to="chart-tooltip" class="py-1">
                  <div class="font-medium dark:text-slate-200">Net Worth</div>
                  <div class="flex items-center mt-2 sm:mt-0">
                    <div class="flex w-20 mr-2 dark:text-slate-400">
                      USP:
                      <span class="ml-auto font-medium text-success">
                        +23%
                      </span>
                    </div>
                    <div class="w-24 sm:w-32 lg:w-56">
                      <SimpleLineChart1 :height="30" />
                    </div>
                  </div>
                </TippyContent>
              </div>
              <!-- END: Custom Tooltip Content -->
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Chart Tooltip -->
    </div>
  </div>
</template>
