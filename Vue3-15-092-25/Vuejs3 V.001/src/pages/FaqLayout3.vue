<script setup lang="ts">
import _ from "lodash";
import Lucide from "@/components/Base/Lucide";
import { Disclosure } from "@/components/Base/Headless";
</script>

<template>
  <div class="flex items-center mt-8 intro-y">
    <h2 class="mr-auto text-lg font-medium">FAQ Layout</h2>
  </div>
  <div class="grid grid-cols-12 gap-6">
    <!-- BEGIN: FAQ Menu -->
    <div class="col-span-12 intro-y lg:col-span-4 xl:col-span-3">
      <div class="mt-5 box">
        <div class="px-4 pt-5 pb-3">
          <a
            class="flex items-center px-4 py-2 font-medium text-white rounded-lg bg-primary"
            href=""
          >
            <Lucide icon="Activity" class="w-4 h-4 mr-2" />
            <div class="flex-1 truncate">About Our Products</div>
          </a>
          <a class="flex items-center px-4 py-2 mt-1" href="">
            <Lucide icon="Box" class="w-4 h-4 mr-2" />
            <div class="flex-1 truncate">Related License</div>
          </a>
          <a class="flex items-center px-4 py-2 mt-1" href="">
            <Lucide icon="Lock" class="w-4 h-4 mr-2" />
            <div class="flex-1 truncate">Single Application License</div>
          </a>
          <a class="flex items-center px-4 py-2 mt-1" href="">
            <Lucide icon="Settings" class="w-4 h-4 mr-2" />
            <div class="flex-1 truncate">Multi Application License</div>
          </a>
        </div>
        <div
          class="px-4 py-3 border-t border-slate-200/60 dark:border-darkmode-400"
        >
          <a class="flex items-center px-4 py-2" href="">
            <Lucide icon="Activity" class="w-4 h-4 mr-2" />
            <div class="flex-1 truncate">Trem of Use</div>
          </a>
          <a class="flex items-center px-4 py-2 mt-1" href="">
            <Lucide icon="Box" class="w-4 h-4 mr-2" />
            <div class="flex-1 truncate">Author Fees</div>
          </a>
          <a class="flex items-center px-4 py-2 mt-1" href="">
            <Lucide icon="Lock" class="w-4 h-4 mr-2" />
            <div class="flex-1 truncate">Product Review</div>
          </a>
          <a class="flex items-center px-4 py-2 mt-1" href="">
            <Lucide icon="Settings" class="w-4 h-4 mr-2" />
            <div class="flex-1 truncate">Privacy Policy</div>
          </a>
        </div>
        <div
          class="px-4 pt-3 pb-5 border-t border-slate-200/60 dark:border-darkmode-400"
        >
          <a class="flex items-center px-4 py-2" href="">
            <Lucide icon="Activity" class="w-4 h-4 mr-2" />
            <div class="flex-1 truncate">About Our Products</div>
          </a>
          <a class="flex items-center px-4 py-2 mt-1" href="">
            <Lucide icon="Box" class="w-4 h-4 mr-2" />
            <div class="flex-1 truncate">Related License</div>
          </a>
          <a class="flex items-center px-4 py-2 mt-1" href="">
            <Lucide icon="Lock" class="w-4 h-4 mr-2" />
            <div class="flex-1 truncate">Single Application License</div>
          </a>
          <a class="flex items-center px-4 py-2 mt-1" href="">
            <Lucide icon="Settings" class="w-4 h-4 mr-2" />
            <div class="flex-1 truncate">Multi Application License</div>
          </a>
        </div>
      </div>
    </div>
    <!-- END: FAQ Menu -->
    <!-- BEGIN: FAQ Content -->
    <div class="col-span-12 intro-y lg:col-span-8 xl:col-span-9">
      <div class="intro-y box lg:mt-5">
        <div
          class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">About Our Products</h2>
        </div>
        <Disclosure.Group variant="boxed" class="p-5">
          <Disclosure>
            <Disclosure.Button>
              OpenSSL Essentials: Working with SSL Certificates, Private Keys
            </Disclosure.Button>
            <Disclosure.Panel
              class="leading-relaxed text-slate-600 dark:text-slate-500"
            >
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book. It has
              survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged.
            </Disclosure.Panel>
          </Disclosure>
          <Disclosure>
            <Disclosure.Button>
              Understanding IP Addresses, Subnets, and CIDR Notation
            </Disclosure.Button>
            <Disclosure.Panel
              class="leading-relaxed text-slate-600 dark:text-slate-500"
            >
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book. It has
              survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged.
            </Disclosure.Panel>
          </Disclosure>
          <Disclosure>
            <Disclosure.Button>
              How To Troubleshoot Common HTTP Error Codes
            </Disclosure.Button>
            <Disclosure.Panel
              class="leading-relaxed text-slate-600 dark:text-slate-500"
            >
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book. It has
              survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged.
            </Disclosure.Panel>
          </Disclosure>
          <Disclosure>
            <Disclosure.Button>
              An Introduction to Securing your Linux VPS
            </Disclosure.Button>
            <Disclosure.Panel
              class="leading-relaxed text-slate-600 dark:text-slate-500"
            >
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book. It has
              survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged.
            </Disclosure.Panel>
          </Disclosure>
        </Disclosure.Group>
      </div>
      <div class="mt-5 intro-y box">
        <div
          class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">
            Single Application License
          </h2>
        </div>
        <Disclosure.Group variant="boxed" class="p-5">
          <Disclosure>
            <Disclosure.Button>
              OpenSSL Essentials: Working with SSL Certificates, Private Keys
            </Disclosure.Button>
            <Disclosure.Panel
              class="leading-relaxed text-slate-600 dark:text-slate-500"
            >
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book. It has
              survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged.
            </Disclosure.Panel>
          </Disclosure>
          <Disclosure>
            <Disclosure.Button>
              Understanding IP Addresses, Subnets, and CIDR Notation
            </Disclosure.Button>
            <Disclosure.Panel
              class="leading-relaxed text-slate-600 dark:text-slate-500"
            >
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book. It has
              survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged.
            </Disclosure.Panel>
          </Disclosure>
          <Disclosure>
            <Disclosure.Button>
              How To Troubleshoot Common HTTP Error Codes
            </Disclosure.Button>
            <Disclosure.Panel
              class="leading-relaxed text-slate-600 dark:text-slate-500"
            >
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book. It has
              survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged.
            </Disclosure.Panel>
          </Disclosure>
          <Disclosure>
            <Disclosure.Button>
              An Introduction to Securing your Linux VPS
            </Disclosure.Button>
            <Disclosure.Panel
              class="leading-relaxed text-slate-600 dark:text-slate-500"
            >
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book. It has
              survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged.
            </Disclosure.Panel>
          </Disclosure>
        </Disclosure.Group>
      </div>
      <div class="mt-5 intro-y box">
        <div
          class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">
            Multi Application License
          </h2>
        </div>
        <Disclosure.Group variant="boxed" class="p-5">
          <Disclosure>
            <Disclosure.Button>
              OpenSSL Essentials: Working with SSL Certificates, Private Keys
            </Disclosure.Button>
            <Disclosure.Panel
              class="leading-relaxed text-slate-600 dark:text-slate-500"
            >
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book. It has
              survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged.
            </Disclosure.Panel>
          </Disclosure>
          <Disclosure>
            <Disclosure.Button>
              Understanding IP Addresses, Subnets, and CIDR Notation
            </Disclosure.Button>
            <Disclosure.Panel
              class="leading-relaxed text-slate-600 dark:text-slate-500"
            >
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book. It has
              survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged.
            </Disclosure.Panel>
          </Disclosure>
          <Disclosure>
            <Disclosure.Button>
              How To Troubleshoot Common HTTP Error Codes
            </Disclosure.Button>
            <Disclosure.Panel
              class="leading-relaxed text-slate-600 dark:text-slate-500"
            >
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book. It has
              survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged.
            </Disclosure.Panel>
          </Disclosure>
          <Disclosure>
            <Disclosure.Button>
              An Introduction to Securing your Linux VPS
            </Disclosure.Button>
            <Disclosure.Panel
              class="leading-relaxed text-slate-600 dark:text-slate-500"
            >
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book. It has
              survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged.
            </Disclosure.Panel>
          </Disclosure>
        </Disclosure.Group>
      </div>
    </div>
    <!-- END: FAQ Content -->
  </div>
</template>
