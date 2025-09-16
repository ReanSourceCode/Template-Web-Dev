<script setup lang="ts">
import _ from "lodash";
import fakerData from "@/utils/faker";
import Button from "@/components/Base/Button";
import { FormSwitch } from "@/components/Base/Form";
import Progress from "@/components/Base/Progress";
import Lucide from "@/components/Base/Lucide";
import StackedBarChart1 from "@/components/StackedBarChart1";
import SimpleLineChart from "@/components/SimpleLineChart";
import SimpleLineChart1 from "@/components/SimpleLineChart1";
import SimpleLineChart2 from "@/components/SimpleLineChart2";
import { Menu, Tab } from "@/components/Base/Headless";
import { Tab as HeadlessTab } from "@headlessui/vue";
</script>

<template>
  <div class="flex items-center mt-8 intro-y">
    <h2 class="mr-auto text-lg font-medium">Profile Layout</h2>
  </div>
  <Tab.Group>
    <!-- BEGIN: Profile Info -->
    <div class="px-5 pt-5 mt-5 intro-y box">
      <div
        class="flex flex-col pb-5 -mx-5 border-b lg:flex-row border-slate-200/60 dark:border-darkmode-400"
      >
        <div
          class="flex items-center justify-center flex-1 px-5 lg:justify-start"
        >
          <div
            class="relative flex-none w-20 h-20 sm:w-24 sm:h-24 lg:w-32 lg:h-32 image-fit"
          >
            <img
              alt="Midone Tailwind HTML Admin Template"
              class="rounded-full"
              :src="fakerData[0].photos[0]"
            />
            <div
              class="absolute bottom-0 right-0 flex items-center justify-center p-2 mb-1 mr-1 rounded-full bg-primary"
            >
              <Lucide icon="Camera" class="w-4 h-4 text-white" />
            </div>
          </div>
          <div class="ml-5">
            <div
              class="w-24 text-lg font-medium truncate sm:w-40 sm:whitespace-normal"
            >
              {{ fakerData[0].users[0].name }}
            </div>
            <div class="text-slate-500">{{ fakerData[0].jobs[0] }}</div>
          </div>
        </div>
        <div
          class="flex-1 px-5 pt-5 mt-6 border-t border-l border-r lg:mt-0 border-slate-200/60 dark:border-darkmode-400 lg:border-t-0 lg:pt-0"
        >
          <div class="font-medium text-center lg:text-left lg:mt-3">
            Contact Details
          </div>
          <div
            class="flex flex-col items-center justify-center mt-4 lg:items-start"
          >
            <div class="flex items-center truncate sm:whitespace-normal">
              <Lucide icon="Mail" class="w-4 h-4 mr-2" />
              {{ fakerData[0].users[0].email }}
            </div>
            <div class="flex items-center mt-3 truncate sm:whitespace-normal">
              <Lucide icon="Instagram" class="w-4 h-4 mr-2" /> Instagram
              {{ fakerData[0].users[0].name }}
            </div>
            <div class="flex items-center mt-3 truncate sm:whitespace-normal">
              <Lucide icon="Twitter" class="w-4 h-4 mr-2" /> Twitter
              {{ fakerData[0].users[0].name }}
            </div>
          </div>
        </div>
        <div
          class="flex-1 px-5 pt-5 mt-6 border-t lg:mt-0 lg:border-0 border-slate-200/60 dark:border-darkmode-400 lg:pt-0"
        >
          <div class="font-medium text-center lg:text-left lg:mt-5">
            Sales Growth
          </div>
          <div class="flex items-center justify-center mt-2 lg:justify-start">
            <div class="flex w-20 mr-2">
              USP:
              <span class="ml-3 font-medium text-success">+23%</span>
            </div>
            <div class="w-3/4">
              <SimpleLineChart1 :height="55" class="-mr-5" />
            </div>
          </div>
          <div class="flex items-center justify-center lg:justify-start">
            <div class="flex w-20 mr-2">
              STP: <span class="ml-3 font-medium text-danger">-2%</span>
            </div>
            <div class="w-3/4">
              <SimpleLineChart2 :height="55" class="-mr-5" />
            </div>
          </div>
        </div>
      </div>
      <Tab.List
        variant="link-tabs"
        class="flex-col justify-center text-center sm:flex-row lg:justify-start"
      >
        <Tab :fullWidth="false">
          <Tab.Button class="py-4 cursor-pointer">Dashboard</Tab.Button>
        </Tab>
        <Tab :fullWidth="false">
          <Tab.Button class="py-4 cursor-pointer">
            Account & Profile
          </Tab.Button>
        </Tab>
        <Tab :fullWidth="false">
          <Tab.Button class="py-4 cursor-pointer"> Activities </Tab.Button>
        </Tab>
        <Tab :fullWidth="false">
          <Tab.Button class="py-4 cursor-pointer">Tasks</Tab.Button>
        </Tab>
      </Tab.List>
    </div>
    <!-- END: Profile Info -->
    <Tab.Panels class="mt-5 intro-y">
      <Tab.Panel>
        <div class="grid grid-cols-12 gap-6">
          <!-- BEGIN: Top Categories -->
          <div class="col-span-12 intro-y box lg:col-span-6">
            <div
              class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400"
            >
              <h2 class="mr-auto text-base font-medium">Top Categories</h2>
              <Menu class="ml-auto">
                <Menu.Button tag="a" class="block w-5 h-5" href="#">
                  <Lucide
                    icon="MoreHorizontal"
                    class="w-5 h-5 text-slate-500"
                  />
                </Menu.Button>
                <Menu.Items class="w-40">
                  <Menu.Item>
                    <Lucide icon="Plus" class="w-4 h-4 mr-2" /> Add Category
                  </Menu.Item>
                  <Menu.Item>
                    <Lucide icon="Settings" class="w-4 h-4 mr-2" />
                    Settings
                  </Menu.Item>
                </Menu.Items>
              </Menu>
            </div>
            <div class="p-5">
              <div class="flex flex-col sm:flex-row">
                <div class="mr-auto">
                  <a href="" class="font-medium"> Wordpress Template </a>
                  <div class="mt-1 text-slate-500">HTML, PHP, Mysql</div>
                </div>
                <div class="flex">
                  <div class="w-32 mt-5 mr-auto -ml-2 sm:ml-0 sm:mr-5">
                    <SimpleLineChart :height="30" />
                  </div>
                  <div class="text-center">
                    <div class="font-medium">6.5k</div>
                    <div class="bg-success/20 text-success rounded px-2 mt-1.5">
                      +150
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex flex-col mt-5 sm:flex-row">
                <div class="mr-auto">
                  <a href="" class="font-medium"> Bootstrap HTML Template </a>
                  <div class="mt-1 text-slate-500">HTML, PHP, Mysql</div>
                </div>
                <div class="flex">
                  <div class="w-32 mt-5 mr-auto -ml-2 sm:ml-0 sm:mr-5">
                    <SimpleLineChart :height="30" />
                  </div>
                  <div class="text-center">
                    <div class="font-medium">2.5k</div>
                    <div class="bg-pending/10 text-pending rounded px-2 mt-1.5">
                      +150
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex flex-col mt-5 sm:flex-row">
                <div class="mr-auto">
                  <a href="" class="font-medium"> Tailwind HTML Template </a>
                  <div class="mt-1 text-slate-500">HTML, PHP, Mysql</div>
                </div>
                <div class="flex">
                  <div class="w-32 mt-5 mr-auto -ml-2 sm:ml-0 sm:mr-5">
                    <SimpleLineChart :height="30" />
                  </div>
                  <div class="text-center">
                    <div class="font-medium">3.4k</div>
                    <div class="bg-primary/10 text-primary rounded px-2 mt-1.5">
                      +150
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END: Top Categories -->
          <!-- BEGIN: Work In Progress -->
          <Tab.Group class="col-span-12 intro-y box lg:col-span-6">
            <div
              class="flex items-center px-5 py-5 border-b sm:py-0 border-slate-200/60 dark:border-darkmode-400"
            >
              <h2 class="mr-auto text-base font-medium">Work In Progress</h2>
              <Menu class="ml-auto sm:hidden">
                <Menu.Button tag="a" class="block w-5 h-5" href="#">
                  <Lucide
                    icon="MoreHorizontal"
                    class="w-5 h-5 text-slate-500"
                  />
                </Menu.Button>
                <Menu.Items class="w-40">
                  <Menu.Item class="w-full" :as="HeadlessTab"> New </Menu.Item>
                  <Menu.Item class="w-full" :as="HeadlessTab">
                    Last Week
                  </Menu.Item>
                </Menu.Items>
              </Menu>
              <Tab.List
                variant="link-tabs"
                class="hidden w-auto ml-auto sm:flex"
              >
                <Tab :fullWidth="false">
                  <Tab.Button class="py-5 cursor-pointer"> New </Tab.Button>
                </Tab>
                <Tab :fullWidth="false">
                  <Tab.Button class="py-5 cursor-pointer">
                    Last Week
                  </Tab.Button>
                </Tab>
              </Tab.List>
            </div>
            <div class="p-5">
              <Tab.Panels>
                <Tab.Panel>
                  <div>
                    <div class="flex">
                      <div class="mr-auto">Pending Tasks</div>
                      <div>20%</div>
                    </div>
                    <Progress class="h-1 mt-2">
                      <Progress.Bar
                        class="w-1/2 bg-primary"
                        role="progressbar"
                        :aria-valuenow="0"
                        :aria-valuemin="0"
                        :aria-valuemax="100"
                      ></Progress.Bar>
                    </Progress>
                  </div>
                  <div class="mt-5">
                    <div class="flex">
                      <div class="mr-auto">Completed Tasks</div>
                      <div>2 / 20</div>
                    </div>
                    <Progress class="h-1 mt-2">
                      <Progress.Bar
                        class="w-1/4 bg-primary"
                        role="progressbar"
                        :aria-valuenow="0"
                        :aria-valuemin="0"
                        :aria-valuemax="100"
                      ></Progress.Bar>
                    </Progress>
                  </div>
                  <div class="mt-5">
                    <div class="flex">
                      <div class="mr-auto">Tasks In Progress</div>
                      <div>42</div>
                    </div>
                    <Progress class="h-1 mt-2">
                      <Progress.Bar
                        class="w-3/4 bg-primary"
                        role="progressbar"
                        :aria-valuenow="0"
                        :aria-valuemin="0"
                        :aria-valuemax="100"
                      ></Progress.Bar>
                    </Progress>
                  </div>
                  <Button
                    as="a"
                    variant="secondary"
                    href=""
                    class="block w-40 mx-auto mt-5"
                  >
                    View More Details
                  </Button>
                </Tab.Panel>
              </Tab.Panels>
            </div>
          </Tab.Group>
          <!-- END: Work In Progress -->
          <!-- BEGIN: Daily Sales -->
          <div class="col-span-12 intro-y box lg:col-span-6">
            <div
              class="flex items-center px-5 py-5 border-b sm:py-3 border-slate-200/60 dark:border-darkmode-400"
            >
              <h2 class="mr-auto text-base font-medium">Daily Sales</h2>
              <Menu class="ml-auto sm:hidden">
                <Menu.Button tag="a" class="block w-5 h-5" href="#">
                  <Lucide
                    icon="MoreHorizontal"
                    class="w-5 h-5 text-slate-500"
                  />
                </Menu.Button>
                <Menu.Items class="w-40">
                  <Menu.Item>
                    <Lucide icon="File" class="w-4 h-4 mr-2" /> Download Excel
                  </Menu.Item>
                </Menu.Items>
              </Menu>
              <Button variant="outline-secondary" class="hidden sm:flex">
                <Lucide icon="File" class="w-4 h-4 mr-2" /> Download Excel
              </Button>
            </div>
            <div class="p-5">
              <div class="relative flex items-center">
                <div class="flex-none w-12 h-12 image-fit">
                  <img
                    alt="Midone Tailwind HTML Admin Template"
                    class="rounded-full"
                    :src="fakerData[0].photos[0]"
                  />
                </div>
                <div class="ml-4 mr-auto">
                  <a href="" class="font-medium">
                    {{ fakerData[0].users[0].name }}
                  </a>
                  <div class="mr-5 text-slate-500 sm:mr-5">
                    Bootstrap 4 HTML Admin Template
                  </div>
                </div>
                <div class="font-medium text-slate-600 dark:text-slate-500">
                  +$19
                </div>
              </div>
              <div class="relative flex items-center mt-5">
                <div class="flex-none w-12 h-12 image-fit">
                  <img
                    alt="Midone Tailwind HTML Admin Template"
                    class="rounded-full"
                    :src="fakerData[1].photos[0]"
                  />
                </div>
                <div class="ml-4 mr-auto">
                  <a href="" class="font-medium">
                    {{ fakerData[1].users[0].name }}
                  </a>
                  <div class="mr-5 text-slate-500 sm:mr-5">
                    Tailwind HTML Admin Template
                  </div>
                </div>
                <div class="font-medium text-slate-600 dark:text-slate-500">
                  +$25
                </div>
              </div>
              <div class="relative flex items-center mt-5">
                <div class="flex-none w-12 h-12 image-fit">
                  <img
                    alt="Midone Tailwind HTML Admin Template"
                    class="rounded-full"
                    :src="fakerData[2].photos[0]"
                  />
                </div>
                <div class="ml-4 mr-auto">
                  <a href="" class="font-medium">
                    {{ fakerData[2].users[0].name }}
                  </a>
                  <div class="mr-5 text-slate-500 sm:mr-5">
                    Vuejs HTML Admin Template
                  </div>
                </div>
                <div class="font-medium text-slate-600 dark:text-slate-500">
                  +$21
                </div>
              </div>
            </div>
          </div>
          <!-- END: Daily Sales -->
          <!-- BEGIN: Latest Tasks -->
          <Tab.Group class="col-span-12 intro-y box lg:col-span-6">
            <div
              class="flex items-center px-5 py-5 border-b sm:py-0 border-slate-200/60 dark:border-darkmode-400"
            >
              <h2 class="mr-auto text-base font-medium">Latest Tasks</h2>
              <Menu class="ml-auto sm:hidden">
                <Menu.Button tag="a" class="block w-5 h-5" href="#">
                  <Lucide
                    icon="MoreHorizontal"
                    class="w-5 h-5 text-slate-500"
                  />
                </Menu.Button>
                <Menu.Items class="w-40">
                  <Menu.Item class="w-full" :as="HeadlessTab"> New </Menu.Item>
                  <Menu.Item class="w-full" :as="HeadlessTab">
                    Last Week
                  </Menu.Item>
                </Menu.Items>
              </Menu>
              <Tab.List
                variant="link-tabs"
                class="hidden w-auto ml-auto sm:flex"
              >
                <Tab :fullWidth="false">
                  <Tab.Button class="py-5 cursor-pointer"> New </Tab.Button>
                </Tab>
                <Tab :fullWidth="false">
                  <Tab.Button class="py-5 cursor-pointer">
                    Last Week
                  </Tab.Button>
                </Tab>
              </Tab.List>
            </div>
            <div class="p-5">
              <Tab.Panels>
                <Tab.Panel>
                  <div class="flex items-center">
                    <div
                      class="pl-4 border-l-2 border-primary dark:border-primary"
                    >
                      <a href="" class="font-medium"> Create New Campaign </a>
                      <div class="text-slate-500">10:00 AM</div>
                    </div>
                    <FormSwitch class="ml-auto">
                      <FormSwitch.Input type="checkbox" />
                    </FormSwitch>
                  </div>
                  <div class="flex items-center mt-5">
                    <div
                      class="pl-4 border-l-2 border-primary dark:border-primary"
                    >
                      <a href="" class="font-medium"> Meeting With Client </a>
                      <div class="text-slate-500">02:00 PM</div>
                    </div>
                    <FormSwitch class="ml-auto">
                      <FormSwitch.Input type="checkbox" />
                    </FormSwitch>
                  </div>
                  <div class="flex items-center mt-5">
                    <div
                      class="pl-4 border-l-2 border-primary dark:border-primary"
                    >
                      <a href="" class="font-medium"> Create New Repository </a>
                      <div class="text-slate-500">04:00 PM</div>
                    </div>
                    <FormSwitch class="ml-auto">
                      <FormSwitch.Input type="checkbox" />
                    </FormSwitch>
                  </div>
                </Tab.Panel>
              </Tab.Panels>
            </div>
          </Tab.Group>
          <!-- END: Latest Tasks -->
          <!-- BEGIN: General Statistic -->
          <div class="col-span-12 intro-y box">
            <div
              class="flex items-center px-5 py-5 border-b sm:py-3 border-slate-200/60 dark:border-darkmode-400"
            >
              <h2 class="mr-auto text-base font-medium">General Statistics</h2>
              <Menu class="ml-auto sm:hidden">
                <Menu.Button class="block w-5 h-5" href="#">
                  <Lucide
                    icon="MoreHorizontal"
                    class="w-5 h-5 text-slate-500"
                  />
                </Menu.Button>
                <Menu.Items class="w-40">
                  <Menu.Item>
                    <Lucide icon="File" class="w-4 h-4 mr-2" /> Download XML
                  </Menu.Item>
                </Menu.Items>
              </Menu>
              <Button variant="outline-secondary" class="hidden sm:flex">
                <Lucide icon="File" class="w-4 h-4 mr-2" /> Download XML
              </Button>
            </div>
            <div class="grid grid-cols-1 gap-6 p-5 2xl:grid-cols-7">
              <div class="2xl:col-span-2">
                <div class="grid grid-cols-2 gap-6">
                  <div
                    class="col-span-2 p-5 sm:col-span-1 2xl:col-span-2 box dark:bg-darkmode-500"
                  >
                    <div class="font-medium">Net Worth</div>
                    <div class="flex items-center mt-1 sm:mt-0">
                      <div class="flex w-20 mr-4">
                        USP:
                        <span class="ml-3 font-medium text-success">
                          +23%
                        </span>
                      </div>
                      <div class="w-5/6 overflow-auto">
                        <SimpleLineChart :height="51" />
                      </div>
                    </div>
                  </div>
                  <div
                    class="col-span-2 p-5 sm:col-span-1 2xl:col-span-2 box dark:bg-darkmode-500"
                  >
                    <div class="font-medium">Sales</div>
                    <div class="flex items-center mt-1 sm:mt-0">
                      <div class="flex w-20 mr-4">
                        USP:
                        <span class="ml-3 font-medium text-danger"> -5% </span>
                      </div>
                      <div class="w-5/6 overflow-auto">
                        <SimpleLineChart :height="51" />
                      </div>
                    </div>
                  </div>
                  <div
                    class="col-span-2 p-5 sm:col-span-1 2xl:col-span-2 box dark:bg-darkmode-500"
                  >
                    <div class="font-medium">Profit</div>
                    <div class="flex items-center mt-1 sm:mt-0">
                      <div class="flex w-20 mr-4">
                        USP:
                        <span class="ml-3 font-medium text-danger"> -10% </span>
                      </div>
                      <div class="w-5/6 overflow-auto">
                        <SimpleLineChart :height="51" />
                      </div>
                    </div>
                  </div>
                  <div
                    class="col-span-2 p-5 sm:col-span-1 2xl:col-span-2 box dark:bg-darkmode-500"
                  >
                    <div class="font-medium">Products</div>
                    <div class="flex items-center mt-1 sm:mt-0">
                      <div class="flex w-20 mr-4">
                        USP:
                        <span class="ml-3 font-medium text-success">
                          +55%
                        </span>
                      </div>
                      <div class="w-5/6 overflow-auto">
                        <SimpleLineChart :height="51" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full 2xl:col-span-5">
                <div class="flex justify-center mt-8">
                  <div class="flex items-center mr-5">
                    <div class="w-2 h-2 mr-3 rounded-full bg-primary"></div>
                    <span>Product Profit</span>
                  </div>
                  <div class="flex items-center">
                    <div class="w-2 h-2 mr-3 rounded-full bg-slate-300"></div>
                    <span>Author Sales</span>
                  </div>
                </div>
                <div class="mt-8">
                  <StackedBarChart1 :height="420" />
                </div>
              </div>
            </div>
          </div>
          <!-- END: General Statistic -->
        </div>
      </Tab.Panel>
    </Tab.Panels>
  </Tab.Group>
</template>
