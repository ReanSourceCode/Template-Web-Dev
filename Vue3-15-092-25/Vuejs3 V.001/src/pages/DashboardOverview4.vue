<script setup lang="ts">
import _ from "lodash";
import { ref, provide } from "vue";
import fakerData from "@/utils/faker";
import Button from "@/components/Base/Button";
import Pagination from "@/components/Base/Pagination";
import { FormInput, FormSelect } from "@/components/Base/Form";
import TinySlider, {
  type TinySliderElement,
} from "@/components/Base/TinySlider";
import Lucide from "@/components/Base/Lucide";
import Tippy from "@/components/Base/Tippy";
import ReportDonutChart from "@/components/ReportDonutChart";
import LeafletMap from "@/components/LeafletMap";
import { Tab } from "@/components/Base/Headless";
import Table from "@/components/Base/Table";

const importantNotesRef = ref<TinySliderElement>();

provide("bind[importantNotesRef]", (el: TinySliderElement) => {
  importantNotesRef.value = el;
});

const prevImportantNotes = () => {
  importantNotesRef.value?.tns.goTo("prev");
};
const nextImportantNotes = () => {
  importantNotesRef.value?.tns.goTo("next");
};
</script>

<template>
  <div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 2xl:col-span-9">
      <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: General Report -->
        <div class="col-span-12 mt-8 xl:col-span-9">
          <div class="flex items-center h-10 intro-y">
            <h2 class="mr-5 text-lg font-medium truncate">General Report</h2>
            <a href="" class="ml-auto truncate text-primary"> Show More </a>
          </div>
          <div class="mt-5 intro-y">
            <div
              :class="[
                'relative mt-5 intro-y',
                'before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-[\'\']',
              ]"
            >
              <div class="grid grid-cols-12 box">
                <div
                  class="flex flex-col justify-center col-span-12 px-8 py-12 lg:col-span-4"
                >
                  <Lucide icon="PieChart" class="w-10 h-10 text-pending" />
                  <div
                    class="flex items-center justify-start mt-12 text-slate-600 dark:text-slate-300"
                  >
                    My Total Assets
                    <Tippy content="Total value of your sales: $158.409.416">
                      <Lucide icon="AlertCircle" class="w-4 h-4 ml-1.5" />
                    </Tippy>
                  </div>
                  <div class="flex items-center justify-start mt-4">
                    <div class="relative text-2xl font-medium pl-3 ml-0.5">
                      <span
                        class="absolute text-xl font-medium top-0 left-0 -ml-0.5"
                      >
                        $
                      </span>
                      1,413,102.02
                    </div>
                    <a class="ml-4 text-slate-500" href="">
                      <Lucide icon="RefreshCcw" class="w-4 h-4" />
                    </a>
                  </div>
                  <div class="mt-4 text-xs text-slate-500">
                    Last updated 1 hour ago
                  </div>
                  <Button
                    variant="outline-secondary"
                    class="relative justify-start mt-12 rounded-full"
                  >
                    Download Reports
                    <span
                      class="w-8 h-8 absolute flex justify-center items-center bg-primary text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5"
                    >
                      <Lucide icon="ArrowRight" class="w-4 h-4" />
                    </span>
                  </Button>
                </div>
                <div
                  class="col-span-12 p-8 border-t border-dashed lg:col-span-8 lg:border-t-0 lg:border-l border-slate-200 dark:border-darkmode-300"
                >
                  <Tab.Group>
                    <Tab.List
                      variant="pills"
                      class="p-1 mx-auto mb-8 border border-dashed rounded-md w-60 border-slate-300 dark:border-darkmode-300"
                      role="tablist"
                    >
                      <Tab>
                        <Tab.Button as="button" class="w-full py-1.5 px-2">
                          Weekly
                        </Tab.Button>
                      </Tab>
                      <Tab>
                        <Tab.Button as="button" class="w-full py-1.5 px-2">
                          Monthly
                        </Tab.Button>
                      </Tab>
                    </Tab.List>
                    <Tab.Panels class="px-5 pb-5">
                      <Tab.Panel class="grid grid-cols-12 gap-y-8 gap-x-10">
                        <div class="col-span-6 sm:col-span-6 md:col-span-4">
                          <div class="text-slate-500">Unpaid Loan</div>
                          <div class="mt-1.5 flex items-center">
                            <div class="text-base">4.501</div>
                            <Tippy
                              class="flex ml-2 text-xs font-medium cursor-pointer text-danger"
                              content="2% Lower than last month"
                            >
                              2%
                              <Lucide
                                icon="ChevronDown"
                                class="w-4 h-4 ml-0.5"
                              />
                            </Tippy>
                          </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 md:col-span-4">
                          <div class="text-slate-500">Active Partner</div>
                          <div class="mt-1.5 flex items-center">
                            <div class="text-base">2</div>
                          </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 md:col-span-4">
                          <div class="text-slate-500">Paid Installment</div>
                          <div class="mt-1.5 flex items-center">
                            <div class="text-base">$72.000</div>
                          </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 md:col-span-4">
                          <div class="text-slate-500">Disbursement</div>
                          <div class="mt-1.5 flex items-center">
                            <div class="text-base">$54.000</div>
                          </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 md:col-span-4">
                          <div class="text-slate-500">Success Payment</div>
                          <div class="mt-1.5 flex items-center">
                            <div class="text-base">2.500</div>
                            <Tippy
                              class="flex ml-2 text-xs font-medium cursor-pointer text-success"
                              content="52% Higher than last month"
                            >
                              52%
                              <Lucide icon="ChevronUp" class="w-4 h-4 ml-0.5" />
                            </Tippy>
                          </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 md:col-span-4">
                          <div class="text-slate-500">Unpaid Loan</div>
                          <div class="mt-1.5 flex items-center">
                            <div class="text-base">$72.000</div>
                          </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 md:col-span-4">
                          <div class="text-slate-500">Posted Campaign</div>
                          <div class="mt-1.5 flex items-center">
                            <div class="text-base">4.501</div>
                          </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 md:col-span-4">
                          <div class="text-slate-500">Social Media</div>
                          <div class="mt-1.5 flex items-center">
                            <div class="text-base">2</div>
                          </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 md:col-span-4">
                          <div class="text-slate-500">Net Margin</div>
                          <div class="mt-1.5 flex items-center">
                            <div class="text-base">$72.000</div>
                            <Tippy
                              class="flex ml-2 text-xs font-medium cursor-pointer text-success"
                              content="49% Higher than last month"
                            >
                              49%
                              <Lucide icon="ChevronUp" class="w-4 h-4 ml-0.5" />
                            </Tippy>
                          </div>
                        </div>
                      </Tab.Panel>
                    </Tab.Panels>
                  </Tab.Group>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END: General Report -->
        <!-- BEGIN: Sales Report -->
        <div
          class="col-span-12 row-start-4 mt-6 md:col-span-6 lg:col-span-4 xl:col-span-3 lg:row-start-3 xl:row-start-auto xl:mt-8"
        >
          <div class="flex items-center h-10 intro-y">
            <h2 class="mr-5 text-lg font-medium truncate">Sales Report</h2>
            <a href="" class="ml-auto truncate text-primary"> Show More </a>
          </div>
          <div
            :class="[
              'relative mt-5 intro-y',
              'before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-[\'\'] before:hidden xl:before:block',
            ]"
          >
            <div class="p-5 box">
              <div class="mt-3">
                <ReportDonutChart :height="196" />
              </div>
              <div class="mx-auto mt-8 w-52 sm:w-auto">
                <div class="flex items-center">
                  <div class="w-2 h-2 mr-3 rounded-full bg-primary"></div>
                  <span class="truncate">17 - 30 Years old</span>
                  <span class="ml-auto font-medium">62%</span>
                </div>
                <div class="flex items-center mt-4">
                  <div class="w-2 h-2 mr-3 rounded-full bg-pending"></div>
                  <span class="truncate">31 - 50 Years old</span>
                  <span class="ml-auto font-medium">33%</span>
                </div>
                <div class="flex items-center mt-4">
                  <div class="w-2 h-2 mr-3 rounded-full bg-warning"></div>
                  <span class="truncate">&gt;= 50 Years old</span>
                  <span class="ml-auto font-medium">10%</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END: Sales Report -->
        <!-- BEGIN: Official Store -->
        <div class="col-span-12 mt-6 xl:col-span-8">
          <div class="items-center block h-10 intro-y sm:flex">
            <h2 class="mr-5 text-lg font-medium truncate">Official Store</h2>
            <div class="relative mt-3 sm:ml-auto sm:mt-0 text-slate-500">
              <Lucide
                icon="MapPin"
                class="absolute inset-y-0 left-0 z-10 w-4 h-4 my-auto ml-3"
              />
              <FormInput
                type="text"
                class="pl-10 sm:w-56 !box"
                placeholder="Filter by city"
              />
            </div>
          </div>
          <div class="p-5 mt-12 intro-y box sm:mt-5">
            <div>
              250 Official stores in 21 countries, click the marker to see
              location details.
            </div>
            <LeafletMap class="h-[310px] mt-5 rounded-md bg-slate-200" />
          </div>
        </div>
        <!-- END: Official Store -->
        <!-- BEGIN: Weekly Best Sellers -->
        <div class="col-span-12 mt-6 lg:col-span-8 xl:col-span-4">
          <div class="flex items-center h-10 intro-y">
            <h2 class="mr-5 text-lg font-medium truncate">
              Weekly Best Sellers
            </h2>
          </div>
          <div class="mt-5">
            <div
              v-for="(faker, fakerKey) in _.take(fakerData, 4)"
              :key="fakerKey"
              class="intro-y"
            >
              <div class="flex items-center px-4 py-4 mb-3 box zoom-in">
                <div
                  class="flex-none w-10 h-10 overflow-hidden rounded-md image-fit"
                >
                  <img
                    alt="Midone Tailwind HTML Admin Template"
                    :src="faker.photos[0]"
                  />
                </div>
                <div class="ml-4 mr-auto">
                  <div class="font-medium">{{ faker.users[0].name }}</div>
                  <div class="text-slate-500 text-xs mt-0.5">
                    {{ faker.dates[0] }}
                  </div>
                </div>
                <div
                  class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-success"
                >
                  137 Sales
                </div>
              </div>
            </div>
            <a
              href=""
              class="block w-full py-4 text-center border border-dotted rounded-md intro-y border-slate-400 dark:border-darkmode-300 text-slate-500"
            >
              View More
            </a>
          </div>
        </div>
        <!-- END: Weekly Best Sellers -->
        <!-- BEGIN: Visitors -->
        <div class="col-span-12 mt-6 md:col-span-6 lg:col-span-4">
          <div class="items-center block h-10 intro-y sm:flex">
            <h2 class="mr-5 text-lg font-medium truncate">Visitors</h2>
            <FormSelect class="mt-3 sm:ml-auto sm:mt-0 sm:w-auto !box">
              <option value="daily">Daily</option>
              <option value="weekly">Weekly</option>
              <option value="monthly">Monthly</option>
              <option value="yearly">Yearly</option>
              <option value="custom-date">Custom Date</option>
            </FormSelect>
          </div>
          <div class="p-5 mt-12 intro-y box sm:mt-5">
            <div
              class="flex pb-3 mb-3 border-b border-dashed text-slate-500 border-slate-200 dark:border-darkmode-300"
            >
              <div>Parameters</div>
              <div class="ml-auto">Report Values</div>
            </div>
            <div class="flex items-center mb-5">
              <div class="flex items-center">
                <div>Site Visits</div>
                <Tippy
                  class="flex ml-2 text-xs font-medium cursor-pointer text-danger"
                  content="49% Higher than last month"
                >
                  -2%
                  <Lucide icon="ChevronDown" class="w-4 h-4 ml-0.5" />
                </Tippy>
              </div>
              <div class="ml-auto">4.500</div>
            </div>
            <div class="flex items-center mb-5">
              <div class="flex items-center">
                <div>Unique Visitors</div>
              </div>
              <div class="ml-auto">21</div>
            </div>
            <div class="flex items-center mb-5">
              <div class="flex items-center">
                <div>Page Views</div>
                <Tippy
                  class="flex ml-2 text-xs font-medium cursor-pointer text-success"
                  content="49% Higher than last month"
                >
                  5% <Lucide icon="ChevronUp" class="w-4 h-4 ml-0.5" />
                </Tippy>
              </div>
              <div class="ml-auto">500</div>
            </div>
            <div class="flex items-center mb-5">
              <div class="flex items-center">
                <div>Bounce Rate</div>
              </div>
              <div class="ml-auto">3.420</div>
            </div>
            <div class="flex items-center mb-5">
              <div class="flex items-center">
                <div>% New Visits</div>
                <Tippy
                  class="flex ml-2 text-xs font-medium cursor-pointer text-danger"
                  content="49% Higher than last month"
                >
                  -9%
                  <Lucide icon="ChevronDown" class="w-4 h-4 ml-0.5" />
                </Tippy>
              </div>
              <div class="ml-auto">32%</div>
            </div>
            <div class="flex items-center mb-5">
              <div class="flex items-center">
                <div>Average Tim On Site</div>
              </div>
              <div class="ml-auto">1.5M</div>
            </div>
            <Button
              variant="outline-secondary"
              class="relative justify-start w-full mb-2 border-dashed border-slate-300 dark:border-darkmode-300"
            >
              <span class="mr-5 truncate">View Full Report</span>
              <span
                class="w-8 h-8 absolute flex justify-center items-center right-0 top-0 bottom-0 my-auto ml-auto mr-0.5"
              >
                <Lucide icon="ArrowRight" class="w-4 h-4" />
              </span>
            </Button>
          </div>
        </div>
        <!-- END: Visitors -->
        <!-- BEGIN: Most Viewed Pages -->
        <div class="col-span-12 mt-6 md:col-span-6 lg:col-span-4">
          <div class="items-center block h-10 intro-y sm:flex">
            <h2 class="mr-5 text-lg font-medium truncate">Most Viewed Pages</h2>
            <FormSelect class="mt-3 sm:ml-auto sm:mt-0 sm:w-auto !box">
              <option value="daily">Daily</option>
              <option value="weekly">Weekly</option>
              <option value="monthly">Monthly</option>
              <option value="yearly">Yearly</option>
              <option value="custom-date">Custom Date</option>
            </FormSelect>
          </div>
          <div class="p-5 mt-12 intro-y box sm:mt-5">
            <div
              class="flex pb-3 mb-3 border-b border-dashed text-slate-500 border-slate-200 dark:border-darkmode-300"
            >
              <div>Page Names</div>
              <div class="ml-auto">Page Views</div>
            </div>
            <div class="flex items-center mb-5">
              <div>/letz-lara…review/2653</div>
              <div class="ml-auto">472</div>
            </div>
            <div class="flex items-center mb-5">
              <div>/midone…review/1674</div>
              <div class="ml-auto">294</div>
            </div>
            <div class="flex items-center mb-5">
              <div>/profile…review/46789</div>
              <div class="ml-auto">500</div>
            </div>
            <div class="flex items-center mb-5">
              <div>/profile…review/24357</div>
              <div class="ml-auto">3.420</div>
            </div>
            <div class="flex items-center mb-5">
              <div>/letz-lara…review/2653</div>
              <div class="ml-auto">83</div>
            </div>
            <div class="flex items-center mb-5">
              <div>/icewall…review/1674</div>
              <div class="ml-auto">21</div>
            </div>
            <Button
              variant="outline-secondary"
              class="relative justify-start w-full mb-2 border-dashed border-slate-300 dark:border-darkmode-300"
            >
              <span class="mr-5 truncate">View Full Report</span>
              <span
                class="w-8 h-8 absolute flex justify-center items-center right-0 top-0 bottom-0 my-auto ml-auto mr-0.5"
              >
                <Lucide icon="ArrowRight" class="w-4 h-4" />
              </span>
            </Button>
          </div>
        </div>
        <!-- END: Most Viewed Pages -->
        <!-- BEGIN: Top Search Items -->
        <div class="col-span-12 mt-6 md:col-span-6 lg:col-span-4">
          <div class="items-center block h-10 intro-y sm:flex">
            <h2 class="mr-5 text-lg font-medium truncate">Top Search Items</h2>
            <FormSelect class="mt-3 sm:ml-auto sm:mt-0 sm:w-auto !box">
              <option value="daily">Daily</option>
              <option value="weekly">Weekly</option>
              <option value="monthly">Monthly</option>
              <option value="yearly">Yearly</option>
              <option value="custom-date">Custom Date</option>
            </FormSelect>
          </div>
          <div class="p-5 mt-12 intro-y box sm:mt-5">
            <div
              class="flex pb-3 mb-3 border-b border-dashed text-slate-500 border-slate-200 dark:border-darkmode-300"
            >
              <div>Keywords</div>
              <div class="ml-auto">Searched</div>
            </div>
            <div class="flex items-center mb-5">
              <div>Laravel 8</div>
              <div class="ml-auto">200</div>
            </div>
            <div class="flex items-center mb-5">
              <div>Eloquent</div>
              <div class="ml-auto">50</div>
            </div>
            <div class="flex items-center mb-5">
              <div>CKEditor Source Build</div>
              <div class="ml-auto">31</div>
            </div>
            <div class="flex items-center mb-5">
              <div>Midone Docs</div>
              <div class="ml-auto">405</div>
            </div>
            <div class="flex items-center mb-5">
              <div>Vue 3 Release Date</div>
              <div class="ml-auto">201</div>
            </div>
            <div class="flex items-center mb-5">
              <div>Install Vite Vue</div>
              <div class="ml-auto">42</div>
            </div>
            <Button
              variant="outline-secondary"
              class="relative justify-start w-full mb-2 border-dashed border-slate-300 dark:border-darkmode-300"
            >
              <span class="mr-5 truncate">View Full Report</span>
              <span
                class="w-8 h-8 absolute flex justify-center items-center right-0 top-0 bottom-0 my-auto ml-auto mr-0.5"
              >
                <Lucide icon="ArrowRight" class="w-4 h-4" />
              </span>
            </Button>
          </div>
        </div>
        <!-- END: Top Search Items -->
        <!-- BEGIN: Weekly Top Products -->
        <div class="col-span-12 mt-6">
          <div class="items-center block h-10 intro-y sm:flex">
            <h2 class="mr-5 text-lg font-medium truncate">
              Weekly Top Products
            </h2>
            <div class="flex items-center mt-3 sm:ml-auto sm:mt-0">
              <Button
                class="flex items-center !box text-slate-600 dark:text-slate-300"
              >
                <Lucide icon="FileText" class="hidden w-4 h-4 mr-2 sm:block" />
                Export to Excel
              </Button>
              <Button
                class="flex items-center ml-3 !box text-slate-600 dark:text-slate-300"
              >
                <Lucide icon="FileText" class="hidden w-4 h-4 mr-2 sm:block" />
                Export to PDF
              </Button>
            </div>
          </div>
          <div class="mt-8 overflow-auto intro-y lg:overflow-visible sm:mt-0">
            <Table class="border-spacing-y-[10px] border-separate sm:mt-2">
              <Table.Thead>
                <Table.Tr>
                  <Table.Th class="border-b-0 whitespace-nowrap">
                    IMAGES
                  </Table.Th>
                  <Table.Th class="border-b-0 whitespace-nowrap">
                    PRODUCT NAME
                  </Table.Th>
                  <Table.Th class="text-center border-b-0 whitespace-nowrap">
                    STOCK
                  </Table.Th>
                  <Table.Th class="text-center border-b-0 whitespace-nowrap">
                    STATUS
                  </Table.Th>
                  <Table.Th class="text-center border-b-0 whitespace-nowrap">
                    ACTIONS
                  </Table.Th>
                </Table.Tr>
              </Table.Thead>
              <Table.Tbody>
                <Table.Tr
                  v-for="(faker, fakerKey) in _.take(fakerData, 4)"
                  :key="fakerKey"
                  class="intro-x"
                >
                  <Table.Td
                    class="box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
                  >
                    <div class="flex">
                      <div class="w-10 h-10 image-fit zoom-in">
                        <Tippy
                          as="img"
                          alt="Midone Tailwind HTML Admin Template"
                          class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                          :src="faker.images[0]"
                          :content="`Uploaded at ${faker.dates[0]}`"
                        />
                      </div>
                      <div class="w-10 h-10 -ml-5 image-fit zoom-in">
                        <Tippy
                          as="img"
                          alt="Midone Tailwind HTML Admin Template"
                          class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                          :src="faker.images[1]"
                          :content="`Uploaded at ${faker.dates[1]}`"
                        />
                      </div>
                      <div class="w-10 h-10 -ml-5 image-fit zoom-in">
                        <Tippy
                          as="img"
                          alt="Midone Tailwind HTML Admin Template"
                          class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                          :src="faker.images[2]"
                          :content="`Uploaded at ${faker.dates[2]}`"
                        />
                      </div>
                    </div>
                  </Table.Td>
                  <Table.Td
                    class="box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
                  >
                    <a href="" class="font-medium whitespace-nowrap">
                      {{ faker.products[0].name }}
                    </a>
                    <div
                      class="text-slate-500 text-xs whitespace-nowrap mt-0.5"
                    >
                      {{ faker.products[0].category }}
                    </div>
                  </Table.Td>
                  <Table.Td
                    class="box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
                  >
                    {{ faker.stocks[0] }}
                  </Table.Td>
                  <Table.Td
                    class="box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
                  >
                    <div
                      :class="[
                        'flex items-center justify-center',
                        { 'text-success': faker.trueFalse[0] },
                        { 'text-danger': !faker.trueFalse[0] },
                      ]"
                    >
                      <Lucide icon="CheckSquare" class="w-4 h-4 mr-2" />
                      {{ faker.trueFalse[0] ? "Active" : "Inactive" }}
                    </div>
                  </Table.Td>
                  <Table.Td
                    :class="[
                      'box w-56 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600',
                      'before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 before:dark:bg-darkmode-400',
                    ]"
                  >
                    <div class="flex items-center justify-center">
                      <a class="flex items-center mr-3" href="">
                        <Lucide icon="CheckSquare" class="w-4 h-4 mr-1" />
                        Edit
                      </a>
                      <a class="flex items-center text-danger" href="">
                        <Lucide icon="Trash2" class="w-4 h-4 mr-1" />
                        Delete
                      </a>
                    </div>
                  </Table.Td>
                </Table.Tr>
              </Table.Tbody>
            </Table>
          </div>
          <div
            class="flex flex-wrap items-center mt-3 intro-y sm:flex-row sm:flex-nowrap"
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
        </div>
        <!-- END: Weekly Top Products -->
      </div>
    </div>
    <div class="col-span-12 2xl:col-span-3">
      <div class="pb-10 -mb-10 2xl:border-l">
        <div class="grid grid-cols-12 2xl:pl-6 gap-x-6 2xl:gap-x-0 gap-y-6">
          <!-- BEGIN: Important Notes -->
          <div class="col-span-12 mt-3 md:col-span-6 xl:col-span-12 2xl:mt-8">
            <div class="flex items-center h-10 intro-x">
              <h2 class="mr-auto text-lg font-medium truncate">
                Important Notes
              </h2>
              <Button
                data-carousel="important-notes"
                data-target="prev"
                class="px-2 mr-2 border-slate-300 text-slate-600 dark:text-slate-300"
                @click="prevImportantNotes"
              >
                <Lucide icon="ChevronLeft" class="w-4 h-4" />
              </Button>
              <Button
                data-carousel="important-notes"
                data-target="next"
                class="px-2 mr-2 border-slate-300 text-slate-600 dark:text-slate-300"
                @click="nextImportantNotes"
              >
                <Lucide icon="ChevronRight" class="w-4 h-4" />
              </Button>
            </div>
            <div class="mt-5 intro-x">
              <div class="box zoom-in">
                <TinySlider refKey="importantNotesRef">
                  <div class="p-5">
                    <div class="text-base font-medium truncate">
                      Lorem Ipsum is simply dummy text
                    </div>
                    <div class="mt-1 text-slate-400">20 Hours ago</div>
                    <div class="mt-1 text-justify text-slate-500">
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry. Lorem Ipsum has been the industry's
                      standard dummy text ever since the 1500s.
                    </div>
                    <div class="flex mt-5 font-medium">
                      <Button
                        variant="secondary"
                        type="button"
                        class="px-2 py-1"
                      >
                        View Notes
                      </Button>
                      <Button
                        variant="outline-secondary"
                        type="button"
                        class="px-2 py-1 ml-auto"
                      >
                        Dismiss
                      </Button>
                    </div>
                  </div>
                  <div class="p-5">
                    <div class="text-base font-medium truncate">
                      Lorem Ipsum is simply dummy text
                    </div>
                    <div class="mt-1 text-slate-400">20 Hours ago</div>
                    <div class="mt-1 text-justify text-slate-500">
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry. Lorem Ipsum has been the industry's
                      standard dummy text ever since the 1500s.
                    </div>
                    <div class="flex mt-5 font-medium">
                      <Button
                        variant="secondary"
                        type="button"
                        class="px-2 py-1"
                      >
                        View Notes
                      </Button>
                      <Button
                        variant="outline-secondary"
                        type="button"
                        class="px-2 py-1 ml-auto"
                      >
                        Dismiss
                      </Button>
                    </div>
                  </div>
                  <div class="p-5">
                    <div class="text-base font-medium truncate">
                      Lorem Ipsum is simply dummy text
                    </div>
                    <div class="mt-1 text-slate-400">20 Hours ago</div>
                    <div class="mt-1 text-justify text-slate-500">
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry. Lorem Ipsum has been the industry's
                      standard dummy text ever since the 1500s.
                    </div>
                    <div class="flex mt-5 font-medium">
                      <Button
                        variant="secondary"
                        type="button"
                        class="px-2 py-1"
                      >
                        View Notes
                      </Button>
                      <Button
                        variant="outline-secondary"
                        type="button"
                        class="px-2 py-1 ml-auto"
                      >
                        Dismiss
                      </Button>
                    </div>
                  </div>
                </TinySlider>
              </div>
            </div>
          </div>
          <!-- END: Important Notes -->
          <!-- BEGIN: Recent Activities -->
          <div
            class="col-span-12 mt-3 md:col-span-6 xl:col-span-4 2xl:col-span-12"
          >
            <div class="flex items-center h-10 intro-x">
              <h2 class="mr-5 text-lg font-medium truncate">
                Recent Activities
              </h2>
              <a href="" class="ml-auto truncate text-primary"> Show More </a>
            </div>
            <div
              class="mt-5 relative before:block before:absolute before:w-px before:h-[85%] before:bg-slate-200 before:dark:bg-darkmode-400 before:ml-5 before:mt-5"
            >
              <div class="relative flex items-center mb-3 intro-x">
                <div
                  class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5"
                >
                  <div
                    class="flex-none w-10 h-10 overflow-hidden rounded-full image-fit"
                  >
                    <img
                      alt="Midone Tailwind HTML Admin Template"
                      :src="fakerData[9].photos[0]"
                    />
                  </div>
                </div>
                <div class="flex-1 px-5 py-3 ml-4 box zoom-in">
                  <div class="flex items-center">
                    <div class="font-medium">
                      {{ fakerData[9].users[0].name }}
                    </div>
                    <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                  </div>
                  <div class="mt-1 text-slate-500">Has joined the team</div>
                </div>
              </div>
              <div class="relative flex items-center mb-3 intro-x">
                <div
                  class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5"
                >
                  <div
                    class="flex-none w-10 h-10 overflow-hidden rounded-full image-fit"
                  >
                    <img
                      alt="Midone Tailwind HTML Admin Template"
                      :src="fakerData[8].photos[0]"
                    />
                  </div>
                </div>
                <div class="flex-1 px-5 py-3 ml-4 box zoom-in">
                  <div class="flex items-center">
                    <div class="font-medium">
                      {{ fakerData[8].users[0].name }}
                    </div>
                    <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                  </div>
                  <div class="text-slate-500">
                    <div class="mt-1">Added 3 new photos</div>
                    <div class="flex mt-2">
                      <Tippy
                        as="div"
                        class="w-8 h-8 mr-1 image-fit zoom-in"
                        :content="fakerData[0].products[0].name"
                      >
                        <img
                          alt="Midone Tailwind HTML Admin Template"
                          class="border border-white rounded-md"
                          :src="fakerData[8].images[0]"
                        />
                      </Tippy>
                      <Tippy
                        as="div"
                        class="w-8 h-8 mr-1 image-fit zoom-in"
                        :content="fakerData[1].products[0].name"
                      >
                        <img
                          alt="Midone Tailwind HTML Admin Template"
                          class="border border-white rounded-md"
                          :src="fakerData[8].images[1]"
                        />
                      </Tippy>
                      <Tippy
                        as="div"
                        class="w-8 h-8 mr-1 image-fit zoom-in"
                        :content="fakerData[2].products[0].name"
                      >
                        <img
                          alt="Midone Tailwind HTML Admin Template"
                          class="border border-white rounded-md"
                          :src="fakerData[8].images[2]"
                        />
                      </Tippy>
                    </div>
                  </div>
                </div>
              </div>
              <div class="my-4 text-xs text-center intro-x text-slate-500">
                12 November
              </div>
              <div class="relative flex items-center mb-3 intro-x">
                <div
                  class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5"
                >
                  <div
                    class="flex-none w-10 h-10 overflow-hidden rounded-full image-fit"
                  >
                    <img
                      alt="Midone Tailwind HTML Admin Template"
                      :src="fakerData[7].photos[0]"
                    />
                  </div>
                </div>
                <div class="flex-1 px-5 py-3 ml-4 box zoom-in">
                  <div class="flex items-center">
                    <div class="font-medium">
                      {{ fakerData[7].users[0].name }}
                    </div>
                    <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                  </div>
                  <div class="mt-1 text-slate-500">
                    Has changed
                    <a class="text-primary" href="">
                      {{ fakerData[7].products[0].name }}
                    </a>
                    price and description
                  </div>
                </div>
              </div>
              <div class="relative flex items-center mb-3 intro-x">
                <div
                  class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5"
                >
                  <div
                    class="flex-none w-10 h-10 overflow-hidden rounded-full image-fit"
                  >
                    <img
                      alt="Midone Tailwind HTML Admin Template"
                      :src="fakerData[6].photos[0]"
                    />
                  </div>
                </div>
                <div class="flex-1 px-5 py-3 ml-4 box zoom-in">
                  <div class="flex items-center">
                    <div class="font-medium">
                      {{ fakerData[6].users[0].name }}
                    </div>
                    <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                  </div>
                  <div class="mt-1 text-slate-500">
                    Has changed
                    <a class="text-primary" href="">
                      {{ fakerData[6].products[0].name }}
                    </a>
                    description
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END: Recent Activities -->
          <!-- BEGIN: Transactions -->
          <div
            class="col-span-12 mt-3 md:col-span-6 xl:col-span-4 2xl:col-span-12"
          >
            <div class="flex items-center h-10 intro-x">
              <h2 class="mr-5 text-lg font-medium truncate">Transactions</h2>
            </div>
            <div class="mt-5">
              <div
                v-for="(faker, fakerKey) in _.take(fakerData, 5)"
                :key="fakerKey"
                class="intro-x"
              >
                <div class="flex items-center px-5 py-3 mb-3 box zoom-in">
                  <div
                    class="flex-none w-10 h-10 overflow-hidden rounded-full image-fit"
                  >
                    <img
                      alt="Midone Tailwind HTML Admin Template"
                      :src="faker.photos[0]"
                    />
                  </div>
                  <div class="ml-4 mr-auto">
                    <div class="font-medium">{{ faker.users[0].name }}</div>
                    <div class="text-slate-500 text-xs mt-0.5">
                      {{ faker.dates[0] }}
                    </div>
                  </div>
                  <div
                    :class="{
                      'text-success': faker.trueFalse[0],
                      'text-danger': !faker.trueFalse[0],
                    }"
                  >
                    {{ faker.trueFalse[0] ? "+" : "-" }}${{ faker.totals[0] }}
                  </div>
                </div>
              </div>
              <a
                href=""
                class="block w-full py-3 text-center border border-dotted rounded-md intro-x border-slate-400 dark:border-darkmode-300 text-slate-500"
              >
                View More
              </a>
            </div>
          </div>
          <!-- END: Transactions -->
          <!-- BEGIN: Schedules -->
          <div
            class="col-span-12 mt-3 md:col-span-6 xl:col-span-4 2xl:col-span-12 xl:col-start-1 xl:row-start-2 2xl:col-start-auto 2xl:row-start-auto"
          >
            <div class="flex items-center h-10 intro-x">
              <h2 class="mr-5 text-lg font-medium truncate">Schedules</h2>
              <a
                href=""
                class="flex items-center ml-auto truncate text-primary"
              >
                <Lucide icon="Plus" class="w-4 h-4 mr-1" /> Add New Schedules
              </a>
            </div>
            <div class="mt-5">
              <div class="intro-x box">
                <div class="p-5">
                  <div class="flex">
                    <Lucide icon="ChevronLeft" class="w-5 h-5 text-slate-500" />
                    <div class="mx-auto text-base font-medium">April</div>
                    <Lucide
                      icon="ChevronRight"
                      class="w-5 h-5 text-slate-500"
                    />
                  </div>
                  <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                    <div class="font-medium">Su</div>
                    <div class="font-medium">Mo</div>
                    <div class="font-medium">Tu</div>
                    <div class="font-medium">We</div>
                    <div class="font-medium">Th</div>
                    <div class="font-medium">Fr</div>
                    <div class="font-medium">Sa</div>
                    <div class="py-0.5 rounded relative text-slate-500">29</div>
                    <div class="py-0.5 rounded relative text-slate-500">30</div>
                    <div class="py-0.5 rounded relative text-slate-500">31</div>
                    <div class="py-0.5 rounded relative">1</div>
                    <div class="py-0.5 rounded relative">2</div>
                    <div class="py-0.5 rounded relative">3</div>
                    <div class="py-0.5 rounded relative">4</div>
                    <div class="py-0.5 rounded relative">5</div>
                    <div
                      class="py-0.5 bg-success/20 dark:bg-success/30 rounded relative"
                    >
                      6
                    </div>
                    <div class="py-0.5 rounded relative">7</div>
                    <div class="py-0.5 bg-primary text-white rounded relative">
                      8
                    </div>
                    <div class="py-0.5 rounded relative">9</div>
                    <div class="py-0.5 rounded relative">10</div>
                    <div class="py-0.5 rounded relative">11</div>
                    <div class="py-0.5 rounded relative">12</div>
                    <div class="py-0.5 rounded relative">13</div>
                    <div class="py-0.5 rounded relative">14</div>
                    <div class="py-0.5 rounded relative">15</div>
                    <div class="py-0.5 rounded relative">16</div>
                    <div class="py-0.5 rounded relative">17</div>
                    <div class="py-0.5 rounded relative">18</div>
                    <div class="py-0.5 rounded relative">19</div>
                    <div class="py-0.5 rounded relative">20</div>
                    <div class="py-0.5 rounded relative">21</div>
                    <div class="py-0.5 rounded relative">22</div>
                    <div
                      class="py-0.5 bg-pending/20 dark:bg-pending/30 rounded relative"
                    >
                      23
                    </div>
                    <div class="py-0.5 rounded relative">24</div>
                    <div class="py-0.5 rounded relative">25</div>
                    <div class="py-0.5 rounded relative">26</div>
                    <div
                      class="py-0.5 bg-primary/10 dark:bg-primary/50 rounded relative"
                    >
                      27
                    </div>
                    <div class="py-0.5 rounded relative">28</div>
                    <div class="py-0.5 rounded relative">29</div>
                    <div class="py-0.5 rounded relative">30</div>
                    <div class="py-0.5 rounded relative text-slate-500">1</div>
                    <div class="py-0.5 rounded relative text-slate-500">2</div>
                    <div class="py-0.5 rounded relative text-slate-500">3</div>
                    <div class="py-0.5 rounded relative text-slate-500">4</div>
                    <div class="py-0.5 rounded relative text-slate-500">5</div>
                    <div class="py-0.5 rounded relative text-slate-500">6</div>
                    <div class="py-0.5 rounded relative text-slate-500">7</div>
                    <div class="py-0.5 rounded relative text-slate-500">8</div>
                    <div class="py-0.5 rounded relative text-slate-500">9</div>
                  </div>
                </div>
                <div class="p-5 border-t border-slate-200/60">
                  <div class="flex items-center">
                    <div class="w-2 h-2 mr-3 rounded-full bg-pending"></div>
                    <span class="truncate">UI/UX Workshop</span>
                    <span class="font-medium xl:ml-auto">23th</span>
                  </div>
                  <div class="flex items-center mt-4">
                    <div class="w-2 h-2 mr-3 rounded-full bg-primary"></div>
                    <span class="truncate"> VueJs Frontend Development </span>
                    <span class="font-medium xl:ml-auto">10th</span>
                  </div>
                  <div class="flex items-center mt-4">
                    <div class="w-2 h-2 mr-3 rounded-full bg-warning"></div>
                    <span class="truncate">Laravel Rest API</span>
                    <span class="font-medium xl:ml-auto">31th</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END: Schedules -->
        </div>
      </div>
    </div>
  </div>
</template>
