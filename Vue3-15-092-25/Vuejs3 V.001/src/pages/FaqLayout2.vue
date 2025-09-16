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
        <div class="p-5">
          <a class="flex items-center font-medium text-primary" href="">
            <Lucide icon="Activity" class="w-4 h-4 mr-2" /> About Our Products
          </a>
          <a class="flex items-center mt-5" href="">
            <Lucide icon="Box" class="w-4 h-4 mr-2" /> Related License
          </a>
          <a class="flex items-center mt-5" href="">
            <Lucide icon="Lock" class="w-4 h-4 mr-2" /> Single Application
            License
          </a>
          <a class="flex items-center mt-5" href="">
            <Lucide icon="Settings" class="w-4 h-4 mr-2" /> Multi Application
            License
          </a>
        </div>
        <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
          <a class="flex items-center" href="">
            <Lucide icon="Activity" class="w-4 h-4 mr-2" /> Term of Use
          </a>
          <a class="flex items-center mt-5" href="">
            <Lucide icon="Box" class="w-4 h-4 mr-2" /> Author Fees
          </a>
          <a class="flex items-center mt-5" href="">
            <Lucide icon="Lock" class="w-4 h-4 mr-2" /> Product Review
          </a>
          <a class="flex items-center mt-5" href="">
            <Lucide icon="Settings" class="w-4 h-4 mr-2" /> Privacy Policy
          </a>
        </div>
        <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
          <a class="flex items-center" href="">
            <Lucide icon="Activity" class="w-4 h-4 mr-2" /> About Our Products
          </a>
          <a class="flex items-center mt-5" href="">
            <Lucide icon="Box" class="w-4 h-4 mr-2" /> Related License
          </a>
          <a class="flex items-center mt-5" href="">
            <Lucide icon="Lock" class="w-4 h-4 mr-2" /> Single Application
            License
          </a>
          <a class="flex items-center mt-5" href="">
            <Lucide icon="Settings" class="w-4 h-4 mr-2" /> Multi Application
            License
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
        <Disclosure.Group class="p-5">
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
          <h2 class="mr-auto text-base font-medium">Related License</h2>
        </div>
        <Disclosure.Group class="p-5">
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
        <Disclosure.Group class="p-5">
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
