<script setup lang="ts">
import Preview from "@/components/Base/Preview";
import { Disclosure } from "@/components/Base/Headless";
import { FormSwitch } from "@/components/Base/Form";
</script>

<template>
  <div class="flex items-center mt-8 intro-y">
    <h2 class="mr-auto text-lg font-medium">Accordion</h2>
  </div>
  <div class="grid grid-cols-12 gap-6 mt-5 intro-y">
    <div class="col-span-12 lg:col-span-6">
      <!-- BEGIN: Basic Accordion -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Basic Accordion</h2>
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
            <Disclosure.Group>
              <Disclosure>
                <Disclosure.Button>
                  OpenSSL Essentials: Working with SSL Certificates, Private
                  Keys
                </Disclosure.Button>
                <Disclosure.Panel
                  class="leading-relaxed text-slate-600 dark:text-slate-500"
                >
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s, when an unknown
                  printer took a galley of type and scrambled it to make a type
                  specimen book. It has survived not only five centuries, but
                  also the leap into electronic typesetting, remaining
                  essentially unchanged.
                </Disclosure.Panel>
              </Disclosure>
              <Disclosure>
                <Disclosure.Button>
                  Understanding IP Addresses, Subnets, and CIDR Notation
                </Disclosure.Button>
                <Disclosure.Panel
                  class="leading-relaxed text-slate-600 dark:text-slate-500"
                >
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s, when an unknown
                  printer took a galley of type and scrambled it to make a type
                  specimen book. It has survived not only five centuries, but
                  also the leap into electronic typesetting, remaining
                  essentially unchanged.
                </Disclosure.Panel>
              </Disclosure>
              <Disclosure>
                <Disclosure.Button>
                  How To Troubleshoot Common HTTP Error Codes
                </Disclosure.Button>
                <Disclosure.Panel
                  class="leading-relaxed text-slate-600 dark:text-slate-500"
                >
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s, when an unknown
                  printer took a galley of type and scrambled it to make a type
                  specimen book. It has survived not only five centuries, but
                  also the leap into electronic typesetting, remaining
                  essentially unchanged.
                </Disclosure.Panel>
              </Disclosure>
              <Disclosure>
                <Disclosure.Button>
                  An Introduction to Securing your Linux VPS
                </Disclosure.Button>
                <Disclosure.Panel
                  class="leading-relaxed text-slate-600 dark:text-slate-500"
                >
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s, when an unknown
                  printer took a galley of type and scrambled it to make a type
                  specimen book. It has survived not only five centuries, but
                  also the leap into electronic typesetting, remaining
                  essentially unchanged.
                </Disclosure.Panel>
              </Disclosure>
            </Disclosure.Group>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Disclosure.Group>
                <Disclosure>
                  <Disclosure.Button>
                    OpenSSL Essentials: Working with SSL Certificates, Private
                    Keys
                  </Disclosure.Button>
                  <Disclosure.Panel
                    class="leading-relaxed text-slate-600 dark:text-slate-500"
                  >
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a
                    type specimen book. It has survived not only five centuries,
                    but also the leap into electronic typesetting, remaining
                    essentially unchanged.
                  </Disclosure.Panel>
                </Disclosure>
                <Disclosure>
                  <Disclosure.Button>
                    Understanding IP Addresses, Subnets, and CIDR Notation
                  </Disclosure.Button>
                  <Disclosure.Panel
                    class="leading-relaxed text-slate-600 dark:text-slate-500"
                  >
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a
                    type specimen book. It has survived not only five centuries,
                    but also the leap into electronic typesetting, remaining
                    essentially unchanged.
                  </Disclosure.Panel>
                </Disclosure>
                <Disclosure>
                  <Disclosure.Button>
                    How To Troubleshoot Common HTTP Error Codes
                  </Disclosure.Button>
                  <Disclosure.Panel
                    class="leading-relaxed text-slate-600 dark:text-slate-500"
                  >
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a
                    type specimen book. It has survived not only five centuries,
                    but also the leap into electronic typesetting, remaining
                    essentially unchanged.
                  </Disclosure.Panel>
                </Disclosure>
                <Disclosure>
                  <Disclosure.Button>
                    An Introduction to Securing your Linux VPS
                  </Disclosure.Button>
                  <Disclosure.Panel
                    class="leading-relaxed text-slate-600 dark:text-slate-500"
                  >
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a
                    type specimen book. It has survived not only five centuries,
                    but also the leap into electronic typesetting, remaining
                    essentially unchanged.
                  </Disclosure.Panel>
                </Disclosure>
              </Disclosure.Group>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Basic Accordion -->
      <!-- BEGIN: Boxed Accordion -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Boxed Accordion</h2>
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
            <Disclosure.Group variant="boxed">
              <Disclosure>
                <Disclosure.Button>
                  OpenSSL Essentials: Working with SSL Certificates, Private
                  Keys
                </Disclosure.Button>
                <Disclosure.Panel
                  class="leading-relaxed text-slate-600 dark:text-slate-500"
                >
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s, when an unknown
                  printer took a galley of type and scrambled it to make a type
                  specimen book. It has survived not only five centuries, but
                  also the leap into electronic typesetting, remaining
                  essentially unchanged.
                </Disclosure.Panel>
              </Disclosure>
              <Disclosure>
                <Disclosure.Button>
                  Understanding IP Addresses, Subnets, and CIDR Notation
                </Disclosure.Button>
                <Disclosure.Panel
                  class="leading-relaxed text-slate-600 dark:text-slate-500"
                >
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s, when an unknown
                  printer took a galley of type and scrambled it to make a type
                  specimen book. It has survived not only five centuries, but
                  also the leap into electronic typesetting, remaining
                  essentially unchanged.
                </Disclosure.Panel>
              </Disclosure>
              <Disclosure>
                <Disclosure.Button>
                  How To Troubleshoot Common HTTP Error Codes
                </Disclosure.Button>
                <Disclosure.Panel
                  class="leading-relaxed text-slate-600 dark:text-slate-500"
                >
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s, when an unknown
                  printer took a galley of type and scrambled it to make a type
                  specimen book. It has survived not only five centuries, but
                  also the leap into electronic typesetting, remaining
                  essentially unchanged.
                </Disclosure.Panel>
              </Disclosure>
              <Disclosure>
                <Disclosure.Button>
                  An Introduction to Securing your Linux VPS
                </Disclosure.Button>
                <Disclosure.Panel
                  class="leading-relaxed text-slate-600 dark:text-slate-500"
                >
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s, when an unknown
                  printer took a galley of type and scrambled it to make a type
                  specimen book. It has survived not only five centuries, but
                  also the leap into electronic typesetting, remaining
                  essentially unchanged.
                </Disclosure.Panel>
              </Disclosure>
            </Disclosure.Group>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Disclosure.Group variant="boxed">
                <Disclosure>
                  <Disclosure.Button>
                    OpenSSL Essentials: Working with SSL Certificates, Private
                    Keys
                  </Disclosure.Button>
                  <Disclosure.Panel
                    class="leading-relaxed text-slate-600 dark:text-slate-500"
                  >
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a
                    type specimen book. It has survived not only five centuries,
                    but also the leap into electronic typesetting, remaining
                    essentially unchanged.
                  </Disclosure.Panel>
                </Disclosure>
                <Disclosure>
                  <Disclosure.Button>
                    Understanding IP Addresses, Subnets, and CIDR Notation
                  </Disclosure.Button>
                  <Disclosure.Panel
                    class="leading-relaxed text-slate-600 dark:text-slate-500"
                  >
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a
                    type specimen book. It has survived not only five centuries,
                    but also the leap into electronic typesetting, remaining
                    essentially unchanged.
                  </Disclosure.Panel>
                </Disclosure>
                <Disclosure>
                  <Disclosure.Button>
                    How To Troubleshoot Common HTTP Error Codes
                  </Disclosure.Button>
                  <Disclosure.Panel
                    class="leading-relaxed text-slate-600 dark:text-slate-500"
                  >
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a
                    type specimen book. It has survived not only five centuries,
                    but also the leap into electronic typesetting, remaining
                    essentially unchanged.
                  </Disclosure.Panel>
                </Disclosure>
                <Disclosure>
                  <Disclosure.Button>
                    An Introduction to Securing your Linux VPS
                  </Disclosure.Button>
                  <Disclosure.Panel
                    class="leading-relaxed text-slate-600 dark:text-slate-500"
                  >
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a
                    type specimen book. It has survived not only five centuries,
                    but also the leap into electronic typesetting, remaining
                    essentially unchanged.
                  </Disclosure.Panel>
                </Disclosure>
              </Disclosure.Group>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Boxed Accordion -->
    </div>
  </div>
</template>
