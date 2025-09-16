<script setup lang="ts">
import Preview from "@/components/Base/Preview";
import { FormInput, FormSwitch } from "@/components/Base/Form";
import _ from "lodash";
import { ref } from "vue";
import Button from "@/components/Base/Button";
import Lucide from "@/components/Base/Lucide";
import { Menu, Popover } from "@/components/Base/Headless";

const programmaticDropdown = ref(false);
const setProgrammaticDropdown = (value: boolean) => {
  programmaticDropdown.value = value;
};
</script>

<template>
  <div class="flex items-center mt-8 intro-y">
    <h2 class="mr-auto text-lg font-medium">Dropdown</h2>
  </div>
  <div class="grid grid-cols-12 gap-6 mt-5">
    <div class="col-span-12 lg:col-span-6">
      <!-- BEGIN: Basic Dropdown -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Basic Dropdown</h2>
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
            <div class="flex justify-center">
              <Menu>
                <Menu.Button :as="Button" variant="primary">
                  Show Dropdown
                </Menu.Button>
                <Menu.Items class="w-40">
                  <Menu.Item>New Dropdown</Menu.Item>
                  <Menu.Item>Delete Dropdown</Menu.Item>
                </Menu.Items>
              </Menu>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Menu>
                <Menu.Button :as="Button" variant="primary">
                  Show Dropdown
                </Menu.Button>
                <Menu.Items class="w-40">
                  <Menu.Item>New Dropdown</Menu.Item>
                  <Menu.Item>Delete Dropdown</Menu.Item>
                </Menu.Items>
              </Menu>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Basic Dropdown -->
      <!-- BEGIN: Header & Footer Dropdown -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">
            Header & Footer Dropdown
          </h2>
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
            <div class="flex justify-center">
              <Menu>
                <Menu.Button :as="Button" variant="primary">
                  Show Dropdown
                </Menu.Button>
                <Menu.Items class="w-56">
                  <Menu.Header>Export Options</Menu.Header>
                  <Menu.Divider />
                  <Menu.Item>
                    <Lucide icon="Activity" class="w-4 h-4 mr-2" />
                    English
                  </Menu.Item>
                  <Menu.Item>
                    <Lucide icon="Box" class="w-4 h-4 mr-2" />
                    Indonesia
                    <div
                      class="px-1 ml-auto text-xs text-white rounded-full bg-danger"
                    >
                      10
                    </div>
                  </Menu.Item>
                  <Menu.Item>
                    <Lucide icon="Layout" class="w-4 h-4 mr-2" />
                    English
                  </Menu.Item>
                  <Menu.Item>
                    <Lucide icon="Sidebar" class="w-4 h-4 mr-2" />
                    Indonesia
                  </Menu.Item>
                  <Menu.Divider />
                  <Menu.Footer>
                    <Button type="button" variant="primary" class="px-2 py-1">
                      Settings
                    </Button>
                    <Button
                      type="button"
                      variant="secondary"
                      class="px-2 py-1 ml-auto"
                    >
                      View Profile
                    </Button>
                  </Menu.Footer>
                </Menu.Items>
              </Menu>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Menu>
                <Menu.Button :as="Button" variant="primary">
                  Show Dropdown
                </Menu.Button>
                <Menu.Items class="w-56">
                  <Menu.Header>Export Options</Menu.Header>
                  <Menu.Divider />
                  <Menu.Item>
                    <Lucide icon="Activity" class="w-4 h-4 mr-2" />
                    English
                  </Menu.Item>
                  <Menu.Item>
                    <Lucide icon="Box" class="w-4 h-4 mr-2" />
                    Indonesia
                    <div
                      class="px-1 ml-auto text-xs text-white rounded-full bg-danger"
                    >
                      10
                    </div>
                  </Menu.Item>
                  <Menu.Item>
                    <Lucide icon="Layout" class="w-4 h-4 mr-2" />
                    English
                  </Menu.Item>
                  <Menu.Item>
                    <Lucide icon="Sidebar" class="w-4 h-4 mr-2" />
                    Indonesia
                  </Menu.Item>
                  <Menu.Divider />
                  <Menu.Footer>
                    <Button type="button" variant="primary" class="px-2 py-1">
                      Settings
                    </Button>
                    <Button
                      type="button"
                      variant="secondary"
                      class="px-2 py-1 ml-auto"
                    >
                      View Profile
                    </Button>
                  </Menu.Footer>
                </Menu.Items>
              </Menu>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Header & Footer Dropdown -->
      <!-- BEGIN: Icon Dropdown -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Icon Dropdown</h2>
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
            <div class="flex justify-center">
              <Menu>
                <Menu.Button :as="Button" variant="primary">
                  Show Dropdown
                </Menu.Button>
                <Menu.Items class="w-48">
                  <Menu.Item>
                    <Lucide icon="Edit2" class="w-4 h-4 mr-2" /> New Dropdown
                  </Menu.Item>
                  <Menu.Item>
                    <Lucide icon="Trash" class="w-4 h-4 mr-2" /> Delete Dropdown
                  </Menu.Item>
                </Menu.Items>
              </Menu>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Menu>
                <Menu.Button :as="Button" variant="primary">
                  Show Dropdown
                </Menu.Button>
                <Menu.Items class="w-48">
                  <Menu.Item>
                    <Lucide icon="Edit2" class="w-4 h-4 mr-2" /> New Dropdown
                  </Menu.Item>
                  <Menu.Item>
                    <Lucide icon="Trash" class="w-4 h-4 mr-2" /> Delete Dropdown
                  </Menu.Item>
                </Menu.Items>
              </Menu>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Icon Dropdown -->
      <!-- BEGIN: Dropdown with close button -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">
            Dropdown with close button
          </h2>
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
            <div class="text-center">
              <Popover class="inline-block" v-slot="{ close }">
                <Popover.Button :as="Button" variant="primary">
                  Filter Dropdown
                  <Lucide icon="ChevronDown" class="w-4 h-4 ml-2" />
                </Popover.Button>
                <Popover.Panel placement="bottom-start">
                  <div class="p-2">
                    <div>
                      <div class="text-xs text-left">From</div>
                      <FormInput
                        type="text"
                        class="flex-1 mt-2"
                        placeholder="example@gmail.com"
                      />
                    </div>
                    <div class="mt-3">
                      <div class="text-xs text-left">To</div>
                      <FormInput
                        type="text"
                        class="flex-1 mt-2"
                        placeholder="example@gmail.com"
                      />
                    </div>
                    <div class="flex items-center mt-3">
                      <Button
                        variant="secondary"
                        @click="
                          () => {
                            close();
                          }
                        "
                        class="w-32 ml-auto"
                      >
                        Close
                      </Button>
                      <Button variant="primary" class="w-32 ml-2">
                        Search
                      </Button>
                    </div>
                  </div>
                </Popover.Panel>
              </Popover>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="text-center">
                <Popover class="inline-block" v-slot="{ close }">
                  <Popover.Button :as="Button" variant="primary">
                    Filter Dropdown
                    <Lucide icon="ChevronDown" class="w-4 h-4 ml-2" />
                  </Popover.Button>
                  <Popover.Panel placement="bottom-start">
                    <div class="p-2">
                      <div>
                        <div class="text-xs text-left">From</div>
                        <FormInput
                          type="text"
                          class="flex-1 mt-2"
                          placeholder="example@gmail.com"
                        />
                      </div>
                      <div class="mt-3">
                        <div class="text-xs text-left">To</div>
                        <FormInput
                          type="text"
                          class="flex-1 mt-2"
                          placeholder="example@gmail.com"
                        />
                      </div>
                      <div class="flex items-center mt-3">
                        <Button
                          variant="secondary"
                          @click="
                            () => {
                              close();
                            }
                          "
                          class="w-32 ml-auto"
                        >
                          Close
                        </Button>
                        <Button variant="primary" class="w-32 ml-2">
                          Search
                        </Button>
                      </div>
                    </div>
                  </Popover.Panel>
                </Popover>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Dropdown with close button -->
    </div>
    <div class="col-span-12 lg:col-span-6">
      <!-- BEGIN: Scrolled Dropdown -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Scrolled Dropdown</h2>
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
            <div class="flex justify-center">
              <Menu>
                <Menu.Button :as="Button" variant="primary">
                  Show Dropdown
                </Menu.Button>
                <Menu.Items class="w-40 h-32 overflow-y-auto">
                  <Menu.Item>January</Menu.Item>
                  <Menu.Item>February</Menu.Item>
                  <Menu.Item>March</Menu.Item>
                  <Menu.Item>June</Menu.Item>
                  <Menu.Item>July</Menu.Item>
                </Menu.Items>
              </Menu>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Menu>
                <Menu.Button :as="Button" variant="primary">
                  Show Dropdown
                </Menu.Button>
                <Menu.Items class="w-40 h-32 overflow-y-auto">
                  <Menu.Item>January</Menu.Item>
                  <Menu.Item>February</Menu.Item>
                  <Menu.Item>March</Menu.Item>
                  <Menu.Item>June</Menu.Item>
                  <Menu.Item>July</Menu.Item>
                </Menu.Items>
              </Menu>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Scrolled Dropdown -->
      <!-- BEGIN: Header & Icon Dropdown -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Header & Icon Dropdown</h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-6">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-6"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div class="p-5">
          <Preview.Panel>
            <div class="flex justify-center">
              <Menu>
                <Menu.Button :as="Button" variant="primary">
                  Show Dropdown
                </Menu.Button>
                <Menu.Items class="w-40">
                  <Menu.Header>Export Tools</Menu.Header>
                  <Menu.Divider />
                  <Menu.Item>
                    <Lucide icon="Printer" class="w-4 h-4 mr-2" />
                    Print
                  </Menu.Item>
                  <Menu.Item>
                    <Lucide icon="ExternalLink" class="w-4 h-4 mr-2" />
                    Excel
                  </Menu.Item>
                  <Menu.Item>
                    <Lucide icon="FileText" class="w-4 h-4 mr-2" />
                    CSV
                  </Menu.Item>
                  <Menu.Item>
                    <Lucide icon="Archive" class="w-4 h-4 mr-2" />
                    PDF
                  </Menu.Item>
                </Menu.Items>
              </Menu>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Menu>
                <Menu.Button :as="Button" variant="primary">
                  Show Dropdown
                </Menu.Button>
                <Menu.Items class="w-40">
                  <Menu.Header>Export Tools</Menu.Header>
                  <Menu.Divider />
                  <Menu.Item>
                    <Lucide icon="Printer" class="w-4 h-4 mr-2" />
                    Print
                  </Menu.Item>
                  <Menu.Item>
                    <Lucide icon="ExternalLink" class="w-4 h-4 mr-2" />
                    Excel
                  </Menu.Item>
                  <Menu.Item>
                    <Lucide icon="FileText" class="w-4 h-4 mr-2" />
                    CSV
                  </Menu.Item>
                  <Menu.Item>
                    <Lucide icon="Archive" class="w-4 h-4 mr-2" />
                    PDF
                  </Menu.Item>
                </Menu.Items>
              </Menu>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Header & Icon Dropdown -->
      <!-- BEGIN: Dropdown Placement -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Dropdown Placement</h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-7">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-7"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div class="p-5">
          <Preview.Panel>
            <div class="text-center">
              <Menu class="inline-block mb-2 mr-1">
                <Menu.Button :as="Button" variant="primary" class="w-32">
                  Top Start
                </Menu.Button>
                <Menu.Items class="w-40" placement="top-start">
                  <Menu.Item>New Dropdown</Menu.Item>
                  <Menu.Item>Delete Dropdown</Menu.Item>
                </Menu.Items>
              </Menu>
              <Menu class="inline-block mb-2 mr-1">
                <Menu.Button :as="Button" variant="primary" class="w-32">
                  Top
                </Menu.Button>
                <Menu.Items class="w-40" placement="top">
                  <Menu.Item>New Dropdown</Menu.Item>
                  <Menu.Item>Delete Dropdown</Menu.Item>
                </Menu.Items>
              </Menu>
              <Menu class="inline-block mb-2 mr-1">
                <Menu.Button :as="Button" variant="primary" class="w-32">
                  Top End
                </Menu.Button>
                <Menu.Items class="w-40" placement="top-end">
                  <Menu.Item>New Dropdown</Menu.Item>
                  <Menu.Item>Delete Dropdown</Menu.Item>
                </Menu.Items>
              </Menu>
              <Menu class="inline-block mb-2 mr-1">
                <Menu.Button :as="Button" variant="primary" class="w-32">
                  Right Start
                </Menu.Button>
                <Menu.Items class="w-40" placement="right-start">
                  <Menu.Item>New Dropdown</Menu.Item>
                  <Menu.Item>Delete Dropdown</Menu.Item>
                </Menu.Items>
              </Menu>
              <Menu class="inline-block mb-2 mr-1">
                <Menu.Button :as="Button" variant="primary" class="w-32">
                  Right
                </Menu.Button>
                <Menu.Items class="w-40" placement="right">
                  <Menu.Item>New Dropdown</Menu.Item>
                  <Menu.Item>Delete Dropdown</Menu.Item>
                </Menu.Items>
              </Menu>
              <Menu class="inline-block mb-2 mr-1">
                <Menu.Button :as="Button" variant="primary" class="w-32">
                  Right End
                </Menu.Button>
                <Menu.Items class="w-40" placement="right-end">
                  <Menu.Item>New Dropdown</Menu.Item>
                  <Menu.Item>Delete Dropdown</Menu.Item>
                </Menu.Items>
              </Menu>
              <Menu class="inline-block mb-2 mr-1">
                <Menu.Button :as="Button" variant="primary" class="w-32">
                  Bottom End
                </Menu.Button>
                <Menu.Items class="w-40" placement="bottom-end">
                  <Menu.Item>New Dropdown</Menu.Item>
                  <Menu.Item>Delete Dropdown</Menu.Item>
                </Menu.Items>
              </Menu>
              <Menu class="inline-block mb-2 mr-1">
                <Menu.Button :as="Button" variant="primary" class="w-32">
                  Bottom
                </Menu.Button>
                <Menu.Items class="w-40" placement="bottom">
                  <Menu.Item>New Dropdown</Menu.Item>
                  <Menu.Item>Delete Dropdown</Menu.Item>
                </Menu.Items>
              </Menu>
              <Menu class="inline-block mb-2 mr-1">
                <Menu.Button :as="Button" variant="primary" class="w-32">
                  Bottom Start
                </Menu.Button>
                <Menu.Items class="w-40" placement="bottom-start">
                  <Menu.Item>New Dropdown</Menu.Item>
                  <Menu.Item>Delete Dropdown</Menu.Item>
                </Menu.Items>
              </Menu>
              <Menu class="inline-block mb-2 mr-1">
                <Menu.Button :as="Button" variant="primary" class="w-32">
                  Left Start
                </Menu.Button>
                <Menu.Items class="w-40" placement="left-start">
                  <Menu.Item>New Dropdown</Menu.Item>
                  <Menu.Item>Delete Dropdown</Menu.Item>
                </Menu.Items>
              </Menu>
              <Menu class="inline-block mb-2 mr-1">
                <Menu.Button :as="Button" variant="primary" class="w-32">
                  Left
                </Menu.Button>
                <Menu.Items class="w-40" placement="left">
                  <Menu.Item>New Dropdown</Menu.Item>
                  <Menu.Item>Delete Dropdown</Menu.Item>
                </Menu.Items>
              </Menu>
              <Menu class="inline-block mb-2 mr-1">
                <Menu.Button :as="Button" variant="primary" class="w-32">
                  Left End
                </Menu.Button>
                <Menu.Items class="w-40" placement="left-end">
                  <Menu.Item>New Dropdown</Menu.Item>
                  <Menu.Item>Delete Dropdown</Menu.Item>
                </Menu.Items>
              </Menu>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="text-center">
                <Menu class="inline-block mb-2 mr-1">
                  <Menu.Button :as="Button" variant="primary" class="w-32">
                    Top Start
                  </Menu.Button>
                  <Menu.Items class="w-40" placement="top-start">
                    <Menu.Item>New Dropdown</Menu.Item>
                    <Menu.Item>Delete Dropdown</Menu.Item>
                  </Menu.Items>
                </Menu>
                <Menu class="inline-block mb-2 mr-1">
                  <Menu.Button :as="Button" variant="primary" class="w-32">
                    Top
                  </Menu.Button>
                  <Menu.Items class="w-40" placement="top">
                    <Menu.Item>New Dropdown</Menu.Item>
                    <Menu.Item>Delete Dropdown</Menu.Item>
                  </Menu.Items>
                </Menu>
                <Menu class="inline-block mb-2 mr-1">
                  <Menu.Button :as="Button" variant="primary" class="w-32">
                    Top End
                  </Menu.Button>
                  <Menu.Items class="w-40" placement="top-end">
                    <Menu.Item>New Dropdown</Menu.Item>
                    <Menu.Item>Delete Dropdown</Menu.Item>
                  </Menu.Items>
                </Menu>
                <Menu class="inline-block mb-2 mr-1">
                  <Menu.Button :as="Button" variant="primary" class="w-32">
                    Right Start
                  </Menu.Button>
                  <Menu.Items class="w-40" placement="right-start">
                    <Menu.Item>New Dropdown</Menu.Item>
                    <Menu.Item>Delete Dropdown</Menu.Item>
                  </Menu.Items>
                </Menu>
                <Menu class="inline-block mb-2 mr-1">
                  <Menu.Button :as="Button" variant="primary" class="w-32">
                    Right
                  </Menu.Button>
                  <Menu.Items class="w-40" placement="right">
                    <Menu.Item>New Dropdown</Menu.Item>
                    <Menu.Item>Delete Dropdown</Menu.Item>
                  </Menu.Items>
                </Menu>
                <Menu class="inline-block mb-2 mr-1">
                  <Menu.Button :as="Button" variant="primary" class="w-32">
                    Right End
                  </Menu.Button>
                  <Menu.Items class="w-40" placement="right-end">
                    <Menu.Item>New Dropdown</Menu.Item>
                    <Menu.Item>Delete Dropdown</Menu.Item>
                  </Menu.Items>
                </Menu>
                <Menu class="inline-block mb-2 mr-1">
                  <Menu.Button :as="Button" variant="primary" class="w-32">
                    Bottom End
                  </Menu.Button>
                  <Menu.Items class="w-40" placement="bottom-end">
                    <Menu.Item>New Dropdown</Menu.Item>
                    <Menu.Item>Delete Dropdown</Menu.Item>
                  </Menu.Items>
                </Menu>
                <Menu class="inline-block mb-2 mr-1">
                  <Menu.Button :as="Button" variant="primary" class="w-32">
                    Bottom
                  </Menu.Button>
                  <Menu.Items class="w-40" placement="bottom">
                    <Menu.Item>New Dropdown</Menu.Item>
                    <Menu.Item>Delete Dropdown</Menu.Item>
                  </Menu.Items>
                </Menu>
                <Menu class="inline-block mb-2 mr-1">
                  <Menu.Button :as="Button" variant="primary" class="w-32">
                    Bottom Start
                  </Menu.Button>
                  <Menu.Items class="w-40" placement="bottom-start">
                    <Menu.Item>New Dropdown</Menu.Item>
                    <Menu.Item>Delete Dropdown</Menu.Item>
                  </Menu.Items>
                </Menu>
                <Menu class="inline-block mb-2 mr-1">
                  <Menu.Button :as="Button" variant="primary" class="w-32">
                    Left Start
                  </Menu.Button>
                  <Menu.Items class="w-40" placement="left-start">
                    <Menu.Item>New Dropdown</Menu.Item>
                    <Menu.Item>Delete Dropdown</Menu.Item>
                  </Menu.Items>
                </Menu>
                <Menu class="inline-block mb-2 mr-1">
                  <Menu.Button :as="Button" variant="primary" class="w-32">
                    Left
                  </Menu.Button>
                  <Menu.Items class="w-40" placement="left">
                    <Menu.Item>New Dropdown</Menu.Item>
                    <Menu.Item>Delete Dropdown</Menu.Item>
                  </Menu.Items>
                </Menu>
                <Menu class="inline-block mb-2 mr-1">
                  <Menu.Button :as="Button" variant="primary" class="w-32">
                    Left End
                  </Menu.Button>
                  <Menu.Items class="w-40" placement="left-end">
                    <Menu.Item>New Dropdown</Menu.Item>
                    <Menu.Item>Delete Dropdown</Menu.Item>
                  </Menu.Items>
                </Menu>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Dropdown Placement -->
    </div>
  </div>
</template>
