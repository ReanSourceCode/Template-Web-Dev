<script setup lang="ts">
import Preview from "@/components/Base/Preview";
import { FormLabel, FormSwitch } from "@/components/Base/Form";
import { Menu, Dialog } from "@/components/Base/Headless";
import Litepicker from "@/components/Base/Litepicker";
import Button from "@/components/Base/Button";
import Lucide from "@/components/Base/Lucide";
import { ref } from "vue";

const date = ref("");
const daterange = ref("");
const datepickerModalPreview = ref(false);
const setDatepickerModalPreview = (value: boolean) => {
  datepickerModalPreview.value = value;
};
const cancelButtonRef = ref(null);
</script>

<template>
  <div class="flex items-center mt-8 intro-y">
    <h2 class="mr-auto text-lg font-medium">Datepicker</h2>
  </div>
  <div class="grid grid-cols-12 gap-6 mt-5 intro-y">
    <div class="col-span-12 lg:col-span-6">
      <!-- BEGIN: Basic Datepicker -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Basic Date Picker</h2>
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
            <Litepicker
              v-model="date"
              :options="{
                autoApply: false,
                showWeekNumbers: true,
                dropdowns: {
                  minYear: 1990,
                  maxYear: null,
                  months: true,
                  years: true,
                },
                lockDays: ['2024-05-28', '2024-28-05'],
              }"
              class="block w-56 mx-auto"
            />
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Litepicker
                v-model="date"
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
                class="block w-56 mx-auto"
              />
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Basic Datepicker -->
      <!-- BEGIN: Input Group -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Input Group</h2>
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
            <div class="relative w-56 mx-auto">
              <div
                class="absolute flex items-center justify-center w-10 h-full border rounded-l bg-slate-100 text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400"
              >
                <Lucide icon="Calendar" class="w-4 h-4" />
              </div>
              <Litepicker
                v-model="date"
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
                class="pl-12"
              />
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="relative w-56 mx-auto">
                <div
                  class="absolute flex items-center justify-center w-10 h-full border rounded-l bg-slate-100 text-slate-500 dark:bg-darkmode-700 dark:border-darkmode-800 dark:text-slate-400"
                >
                  <Lucide icon="Calendar" class="w-4 h-4" />
                </div>
                <Litepicker
                  v-model="date"
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
                  class="pl-12"
                />
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Input Group -->
    </div>
    <div class="col-span-12 lg:col-span-6">
      <!-- BEGIN: Daterange Picker -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Date Range Picker</h2>
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
            <Litepicker
              v-model="daterange"
              :options="{
                autoApply: false,
                singleMode: false,
                numberOfColumns: 2,
                numberOfMonths: 2,
                showWeekNumbers: true,
                dropdowns: {
                  minYear: 1990,
                  maxYear: null,
                  months: true,
                  years: true,
                },
              }"
              class="block w-56 mx-auto"
            />
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Litepicker
                v-model="daterange"
                :options="{
                  autoApply: false,
                  singleMode: false,
                  numberOfColumns: 2,
                  numberOfMonths: 2,
                  showWeekNumbers: true,
                  dropdowns: {
                    minYear: 1990,
                    maxYear: null,
                    months: true,
                    years: true,
                  },
                }"
                class="block w-56 mx-auto"
              />
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Daterange Picker -->
      <!-- BEGIN: Modal Datepicker -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Modal Date Picker</h2>
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
            <!-- BEGIN: Show Modal Toggle -->
            <div class="text-center">
              <Button
                as="a"
                href="#"
                variant="primary"
                @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setDatepickerModalPreview(true);
                        }"
              >
                Show Modal
              </Button>
            </div>
            <!-- END: Show Modal Toggle -->
            <!-- BEGIN: Modal Content -->
            <Dialog
              :open="datepickerModalPreview"
              @close="
                () => {
                  setDatepickerModalPreview(false);
                }
              "
              :initialFocus="cancelButtonRef"
            >
              <Dialog.Panel>
                <!-- BEGIN: Modal Header -->
                <Dialog.Title>
                  <h2 class="mr-auto text-base font-medium">Filter by Date</h2>
                  <Button variant="outline-secondary" class="hidden sm:flex">
                    <Lucide icon="File" class="w-4 h-4 mr-2" /> Download Docs
                  </Button>
                  <Menu class="sm:hidden">
                    <Menu.Button as="a" class="block w-5 h-5" href="#">
                      <Lucide
                        icon="MoreHorizontal"
                        class="w-5 h-5 text-slate-500"
                      />
                    </Menu.Button>
                    <Menu.Items class="w-40">
                      <Menu.Item>
                        <Lucide icon="File" class="w-4 h-4 mr-2" />
                        Download Docs
                      </Menu.Item>
                    </Menu.Items>
                  </Menu>
                </Dialog.Title>
                <!-- END: Modal Header -->
                <!-- BEGIN: Modal Body -->
                <Dialog.Description class="grid grid-cols-12 gap-4 gap-y-3">
                  <div class="col-span-12 sm:col-span-6">
                    <FormLabel htmlFor="modal-datepicker-1"> From </FormLabel>
                    <Litepicker
                      id="modal-datepicker-1"
                      v-model="date"
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
                  <div class="col-span-12 sm:col-span-6">
                    <FormLabel htmlFor="modal-datepicker-2"> To </FormLabel>
                    <Litepicker
                      id="modal-datepicker-2"
                      v-model="date"
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
                </Dialog.Description>
                <!-- END: Modal Body -->
                <!-- BEGIN: Modal Footer -->
                <Dialog.Footer class="text-right">
                  <Button
                    variant="outline-secondary"
                    type="button"
                    @click="
                      () => {
                        setDatepickerModalPreview(false);
                      }
                    "
                    class="w-20 mr-1"
                  >
                    Cancel
                  </Button>
                  <Button
                    variant="primary"
                    type="button"
                    class="w-20"
                    ref="cancelButtonRef"
                  >
                    Submit
                  </Button>
                </Dialog.Footer>
                <!-- END: Modal Footer -->
              </Dialog.Panel>
            </Dialog>
            <!-- END: Modal Content -->
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <!-- BEGIN: Show Modal Toggle -->
              <div class="text-center">
                <Button
                  as="a"
                  href="#"
                  variant="primary"
                  @click="(event: MouseEvent) => {
                    event.preventDefault();
                    setDatepickerModalPreview(true);
                  }"
                >
                  Show Modal
                </Button>
              </div>
              <!-- END: Show Modal Toggle -->
              <!-- BEGIN: Modal Content -->
              <Dialog
                :open="datepickerModalPreview"
                @close="
                  () => {
                    setDatepickerModalPreview(false);
                  }
                "
                :initialFocus="cancelButtonRef"
              >
                <Dialog.Panel>
                  <!-- BEGIN: Modal Header -->
                  <Dialog.Title>
                    <h2 class="mr-auto text-base font-medium">
                      Filter by Date
                    </h2>
                    <Button variant="outline-secondary" class="hidden sm:flex">
                      <Lucide icon="File" class="w-4 h-4 mr-2" /> Download Docs
                    </Button>
                    <Menu class="sm:hidden">
                      <Menu.Button as="a" class="block w-5 h-5" href="#">
                        <Lucide
                          icon="MoreHorizontal"
                          class="w-5 h-5 text-slate-500"
                        />
                      </Menu.Button>
                      <Menu.Items class="w-40">
                        <Menu.Item>
                          <Lucide icon="File" class="w-4 h-4 mr-2" />
                          Download Docs
                        </Menu.Item>
                      </Menu.Items>
                    </Menu>
                  </Dialog.Title>
                  <!-- END: Modal Header -->
                  <!-- BEGIN: Modal Body -->
                  <Dialog.Description class="grid grid-cols-12 gap-4 gap-y-3">
                    <div class="col-span-12 sm:col-span-6">
                      <FormLabel htmlFor="modal-datepicker-1"> From </FormLabel>
                      <Litepicker
                        id="modal-datepicker-1"
                        v-model="date"
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
                    <div class="col-span-12 sm:col-span-6">
                      <FormLabel htmlFor="modal-datepicker-2"> To </FormLabel>
                      <Litepicker
                        id="modal-datepicker-2"
                        v-model="date"
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
                  </Dialog.Description>
                  <!-- END: Modal Body -->
                  <!-- BEGIN: Modal Footer -->
                  <Dialog.Footer class="text-right">
                    <Button
                      variant="outline-secondary"
                      type="button"
                      @click="
                        () => {
                          setDatepickerModalPreview(false);
                        }
                      "
                      class="w-20 mr-1"
                    >
                      Cancel
                    </Button>
                    <Button
                      variant="primary"
                      type="button"
                      class="w-20"
                      ref="cancelButtonRef"
                    >
                      Submit
                    </Button>
                  </Dialog.Footer>
                  <!-- END: Modal Footer -->
                </Dialog.Panel>
              </Dialog>
              <!-- END: Modal Content -->
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Modal Datepicker -->
    </div>
  </div>
</template>
