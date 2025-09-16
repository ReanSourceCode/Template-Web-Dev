<script setup lang="ts">
import _ from "lodash";
import Button from "@/components/Base/Button";
import Lucide from "@/components/Base/Lucide";
import { Tab } from "@/components/Base/Headless";
</script>

<template>
  <h2 class="mt-10 mr-auto text-2xl font-medium text-center intro-y">
    Best Price & Services
  </h2>
  <Tab.Group>
    <!-- BEGIN: Pricing Tab -->
    <div class="flex justify-center mt-6 intro-y">
      <Tab.List
        variant="pills"
        class="w-auto mx-auto overflow-hidden rounded-full box"
      >
        <Tab>
          <Tab.Button
            class="w-32 py-2 rounded-none lg:w-40 lg:py-3"
            as="button"
          >
            Monthly Fees
          </Tab.Button>
        </Tab>
        <Tab>
          <Tab.Button
            class="w-32 py-2 rounded-none lg:w-40 lg:py-3"
            as="button"
          >
            Annual Fees
          </Tab.Button>
        </Tab>
      </Tab.List>
    </div>
    <!-- END: Pricing Tab -->
    <!-- BEGIN: Pricing Content -->
    <div class="flex mt-10">
      <Tab.Panels>
        <Tab.Panel class="flex flex-col lg:flex-row">
          <div
            class="flex flex-col justify-center flex-1 pb-10 text-center intro-y sm:px-10 lg:px-5 lg:pb-0"
          >
            <div class="text-lg font-medium">Monthly Product Pricing</div>
            <div
              class="mt-3 lg:text-justify text-slate-600 dark:text-slate-500"
            >
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever.
              </p>
              <p class="mt-2">
                When an unknown printer took a galley of type and scrambled it
                to make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged.
              </p>
            </div>
          </div>
          <div class="flex-1 py-16 mb-5 intro-y box lg:ml-5 lg:mb-0">
            <Lucide
              icon="Briefcase"
              class="block w-12 h-12 mx-auto text-primary"
            />
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
                <span class="absolute top-0 left-0 -ml-4 text-2xl"> $ </span> 60
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
          <div class="flex-1 py-16 intro-y box lg:ml-5">
            <Lucide
              icon="ShoppingBag"
              class="block w-12 h-12 mx-auto text-primary"
            />
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
                <span class="absolute top-0 left-0 -ml-4 text-2xl"> $ </span>
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
        </Tab.Panel>
        <Tab.Panel class="flex flex-col lg:flex-row">
          <div
            class="flex flex-col justify-center flex-1 pb-10 text-center intro-y sm:px-10 lg:px-5 lg:pb-0"
          >
            <div class="text-lg font-medium">Annual Product Pricing</div>
            <div
              class="mt-3 lg:text-justify text-slate-600 dark:text-slate-500"
            >
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever.
              </p>
              <p class="mt-2">
                When an unknown printer took a galley of type and scrambled it
                to make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged.
              </p>
            </div>
          </div>
          <div class="flex-1 py-16 mb-5 intro-y box lg:ml-5 lg:mb-0">
            <Lucide
              icon="Briefcase"
              class="block w-12 h-12 mx-auto text-primary"
            />
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
                <span class="absolute top-0 left-0 -ml-4 text-2xl"> $ </span> 40
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
          <div class="flex-1 py-16 intro-y box lg:ml-5">
            <Lucide
              icon="ShoppingBag"
              class="block w-12 h-12 mx-auto text-primary"
            />
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
                <span class="absolute top-0 left-0 -ml-4 text-2xl"> $ </span> 90
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
        </Tab.Panel>
      </Tab.Panels>
    </div>
  </Tab.Group>
  <!-- END: Pricing Content -->
  <div class="px-8 py-12 mt-20 intro-y box">
    <h2 class="mr-auto text-2xl font-medium text-center intro-y">
      Best Price & Services
    </h2>
    <Tab.Group>
      <!-- BEGIN: Pricing Tab -->
      <div class="flex justify-center mt-6 intro-y">
        <Tab.List
          variant="pills"
          class="w-auto mx-auto overflow-hidden rounded-full box"
        >
          <Tab>
            <Tab.Button
              class="w-32 py-2 rounded-none lg:w-40 lg:py-3"
              as="button"
            >
              Monthly Fees
            </Tab.Button>
          </Tab>
          <Tab>
            <Tab.Button
              class="w-32 py-2 rounded-none lg:w-40 lg:py-3"
              as="button"
            >
              Annual Fees
            </Tab.Button>
          </Tab>
        </Tab.List>
      </div>
      <!-- END: Pricing Tab -->
      <!-- BEGIN: Pricing Content -->
      <div class="flex mt-10">
        <Tab.Panels>
          <Tab.Panel class="flex flex-col lg:flex-row">
            <div
              class="flex flex-col justify-center flex-1 pb-10 text-center intro-y sm:px-10 lg:px-5 lg:pb-0"
            >
              <div class="text-lg font-medium">Monthly Product Pricing</div>
              <div
                class="mt-3 lg:text-justify text-slate-600 dark:text-slate-500"
              >
                <p>
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever.
                </p>
                <p class="mt-2">
                  When an unknown printer took a galley of type and scrambled it
                  to make a type specimen book. It has survived not only five
                  centuries, but also the leap into electronic typesetting,
                  remaining essentially unchanged.
                </p>
              </div>
            </div>
            <div
              class="flex-1 py-16 border-t border-b intro-y lg:border-t-0 lg:border-b-0 lg:border-l lg:border-r border-slate-200/60 dark:border-darkmode-400 lg:ml-8"
            >
              <Lucide
                icon="Briefcase"
                class="block w-12 h-12 mx-auto text-primary"
              />
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
                  <span class="absolute top-0 left-0 -ml-4 text-2xl"> $ </span>
                  60
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
            <div class="flex-1 py-16 intro-y">
              <Lucide
                icon="ShoppingBag"
                class="block w-12 h-12 mx-auto text-primary"
              />
              <div class="mt-10 text-xl font-medium text-center">
                Enterprise
              </div>
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
                  <span class="absolute top-0 left-0 -ml-4 text-2xl"> $ </span>
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
          </Tab.Panel>
          <Tab.Panel class="flex flex-col lg:flex-row">
            <div
              class="flex flex-col justify-center flex-1 pb-10 text-center intro-y sm:px-10 lg:px-5 lg:pb-0"
            >
              <div class="text-lg font-medium">Annual Product Pricing</div>
              <div class="mt-3 lg:text-justify text-slate-600">
                <p>
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever.
                </p>
                <p class="mt-2">
                  When an unknown printer took a galley of type and scrambled it
                  to make a type specimen book. It has survived not only five
                  centuries, but also the leap into electronic typesetting,
                  remaining essentially unchanged.
                </p>
              </div>
            </div>
            <div
              class="flex-1 py-16 border-t border-b intro-y lg:border-t-0 lg:border-b-0 lg:border-l lg:border-r border-slate-200/60 dark:border-darkmode-400 lg:ml-8"
            >
              <Lucide
                icon="Briefcase"
                class="block w-12 h-12 mx-auto text-primary"
              />
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
                  <span class="absolute top-0 left-0 -ml-4 text-2xl"> $ </span>
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
            <div class="flex-1 py-16 intro-y">
              <Lucide
                icon="ShoppingBag"
                class="block w-12 h-12 mx-auto text-primary"
              />
              <div class="mt-10 text-xl font-medium text-center">
                Enterprise
              </div>
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
                  <span class="absolute top-0 left-0 -ml-4 text-2xl"> $ </span>
                  210
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
          </Tab.Panel>
        </Tab.Panels>
      </div>
      <!-- END: Pricing Content -->
    </Tab.Group>
  </div>
</template>
