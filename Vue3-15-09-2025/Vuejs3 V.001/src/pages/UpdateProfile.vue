<script setup lang="ts">
import _ from "lodash";
import { ref } from "vue";
import fakerData from "@/utils/faker";
import Button from "@/components/Base/Button";
import {
  FormInput,
  FormLabel,
  FormSelect,
  FormTextarea,
} from "@/components/Base/Form";
import Lucide from "@/components/Base/Lucide";
import Tippy from "@/components/Base/Tippy";
import TomSelect from "@/components/Base/TomSelect";
import { Menu } from "@/components/Base/Headless";

const select = ref("1");
</script>

<template>
  <div class="flex items-center mt-8 intro-y">
    <h2 class="mr-auto text-lg font-medium">Update Profile</h2>
  </div>
  <div class="grid grid-cols-12 gap-6">
    <!-- BEGIN: Profile Menu -->
    <div
      class="flex flex-col-reverse col-span-12 lg:col-span-4 2xl:col-span-3 lg:block"
    >
      <div class="mt-5 intro-y box">
        <div class="relative flex items-center p-5">
          <div class="w-12 h-12 image-fit">
            <img
              alt="Midone Tailwind HTML Admin Template"
              class="rounded-full"
              :src="fakerData[0].photos[0]"
            />
          </div>
          <div class="ml-4 mr-auto">
            <div class="text-base font-medium">
              {{ fakerData[0].users[0].name }}
            </div>
            <div class="text-slate-500">{{ fakerData[0].jobs[0] }}</div>
          </div>
          <Menu>
            <Menu.Button tag="a" class="block w-5 h-5" href="#">
              <Lucide icon="MoreHorizontal" class="w-5 h-5 text-slate-500" />
            </Menu.Button>
            <Menu.Items class="w-56">
              <Menu.Header> Export Options</Menu.Header>
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
                <Button variant="primary" type="button" class="px-2 py-1">
                  Settings
                </Button>
                <Button
                  variant="secondary"
                  type="button"
                  class="px-2 py-1 ml-auto"
                >
                  View Profile
                </Button>
              </Menu.Footer>
            </Menu.Items>
          </Menu>
        </div>
        <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
          <a class="flex items-center font-medium text-primary" href="">
            <Lucide icon="Activity" class="w-4 h-4 mr-2" /> Personal Information
          </a>
          <a class="flex items-center mt-5" href="">
            <Lucide icon="Box" class="w-4 h-4 mr-2" /> Account Settings
          </a>
          <a class="flex items-center mt-5" href="">
            <Lucide icon="Lock" class="w-4 h-4 mr-2" /> Change Password
          </a>
          <a class="flex items-center mt-5" href="">
            <Lucide icon="Settings" class="w-4 h-4 mr-2" /> User Settings
          </a>
        </div>
        <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
          <a class="flex items-center" href="">
            <Lucide icon="Activity" class="w-4 h-4 mr-2" /> Email Settings
          </a>
          <a class="flex items-center mt-5" href="">
            <Lucide icon="Box" class="w-4 h-4 mr-2" /> Saved Credit Cards
          </a>
          <a class="flex items-center mt-5" href="">
            <Lucide icon="Lock" class="w-4 h-4 mr-2" /> Social Networks
          </a>
          <a class="flex items-center mt-5" href="">
            <Lucide icon="Settings" class="w-4 h-4 mr-2" /> Tax Information
          </a>
        </div>
        <div
          class="flex p-5 border-t border-slate-200/60 dark:border-darkmode-400"
        >
          <Button variant="primary" type="button" class="px-2 py-1">
            New Group
          </Button>
          <Button
            variant="outline-secondary"
            type="button"
            class="px-2 py-1 ml-auto"
          >
            New Quick Link
          </Button>
        </div>
      </div>
    </div>
    <!-- END: Profile Menu -->
    <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
      <!-- BEGIN: Display Information -->
      <div class="intro-y box lg:mt-5">
        <div
          class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Display Information</h2>
        </div>
        <div class="p-5">
          <div class="flex flex-col xl:flex-row">
            <div class="flex-1 mt-6 xl:mt-0">
              <div class="grid grid-cols-12 gap-x-5">
                <div class="col-span-12 2xl:col-span-6">
                  <div>
                    <FormLabel htmlFor="update-profile-form-1">
                      Display Name
                    </FormLabel>
                    <FormInput
                      id="update-profile-form-1"
                      type="text"
                      placeholder="Input text"
                      :value="fakerData[0].users[0].name"
                      disabled
                    />
                  </div>
                  <div class="mt-3">
                    <FormLabel htmlFor="update-profile-form-2">
                      Nearest MRT Station
                    </FormLabel>
                    <TomSelect
                      id="update-profile-form-2"
                      v-model="select"
                      class="w-full"
                    >
                      <option value="1">Admiralty</option>
                      <option value="2">Aljunied</option>
                      <option value="3">Ang Mo Kio</option>
                      <option value="4">Bartley</option>
                      <option value="5">Beauty World</option>
                    </TomSelect>
                  </div>
                </div>
                <div class="col-span-12 2xl:col-span-6">
                  <div class="mt-3 2xl:mt-0">
                    <FormLabel htmlFor="update-profile-form-3">
                      Postal Code
                    </FormLabel>
                    <TomSelect
                      id="update-profile-form-3"
                      v-model="select"
                      class="w-full"
                    >
                      <option value="1">
                        018906 - 1 STRAITS BOULEVARD SINGA...
                      </option>
                      <option value="2">
                        018910 - 5A MARINA GARDENS DRIVE...
                      </option>
                      <option value="3">
                        018915 - 100A CENTRAL BOULEVARD...
                      </option>
                      <option value="4">
                        018925 - 21 PARK STREET MARINA...
                      </option>
                      <option value="5">
                        018926 - 23 PARK STREET MARINA...
                      </option>
                    </TomSelect>
                  </div>
                  <div class="mt-3">
                    <FormLabel htmlFor="update-profile-form-4">
                      Phone Number
                    </FormLabel>
                    <FormInput
                      id="update-profile-form-4"
                      type="text"
                      placeholder="Input text"
                      value="65570828"
                    />
                  </div>
                </div>
                <div class="col-span-12">
                  <div class="mt-3">
                    <FormLabel htmlFor="update-profile-form-5">
                      Address
                    </FormLabel>
                    <FormTextarea
                      id="update-profile-form-5"
                      placeholder="Adress"
                      value="10 Anson Road, International Plaza, #10-11, 079903 Singapore, Singapore"
                    ></FormTextarea>
                  </div>
                </div>
              </div>
              <Button variant="primary" type="button" class="w-20 mt-3">
                Save
              </Button>
            </div>
            <div class="mx-auto w-52 xl:mr-0 xl:ml-6">
              <div
                class="p-5 border-2 border-dashed rounded-md shadow-sm border-slate-200/60 dark:border-darkmode-400"
              >
                <div
                  class="relative h-40 mx-auto cursor-pointer image-fit zoom-in"
                >
                  <img
                    class="rounded-md"
                    alt="Midone Tailwind HTML Admin Template"
                    :src="fakerData[0].photos[0]"
                  />
                  <Tippy
                    as="div"
                    content="Remove this profile photo?"
                    class="absolute top-0 right-0 flex items-center justify-center w-5 h-5 -mt-2 -mr-2 text-white rounded-full bg-danger"
                  >
                    <Lucide icon="X" class="w-4 h-4" />
                  </Tippy>
                </div>
                <div class="relative mx-auto mt-5 cursor-pointer">
                  <Button variant="primary" type="button" class="w-full">
                    Change Photo
                  </Button>
                  <FormInput
                    type="file"
                    class="absolute top-0 left-0 w-full h-full opacity-0"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END: Display Information -->
      <!-- BEGIN: Personal Information -->
      <div class="mt-5 intro-y box">
        <div
          class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Personal Information</h2>
        </div>
        <div class="p-5">
          <div class="grid grid-cols-12 gap-x-5">
            <div class="col-span-12 xl:col-span-6">
              <div>
                <FormLabel htmlFor="update-profile-form-6">Email</FormLabel>
                <FormInput
                  id="update-profile-form-6"
                  type="text"
                  placeholder="Input text"
                  :value="fakerData[0].users[0].email"
                  disabled
                />
              </div>
              <div class="mt-3">
                <FormLabel htmlFor="update-profile-form-7">Name</FormLabel>
                <FormInput
                  id="update-profile-form-7"
                  type="text"
                  placeholder="Input text"
                  :value="fakerData[0].users[0].name"
                  disabled
                />
              </div>
              <div class="mt-3">
                <FormLabel htmlFor="update-profile-form-8"> ID Type </FormLabel>
                <FormSelect id="update-profile-form-8">
                  <option>IC</option>
                  <option>FIN</option>
                  <option>Passport</option>
                </FormSelect>
              </div>
              <div class="mt-3">
                <FormLabel htmlFor="update-profile-form-9">
                  ID Number
                </FormLabel>
                <FormInput
                  id="update-profile-form-9"
                  type="text"
                  placeholder="Input text"
                  value="357821204950001"
                />
              </div>
            </div>
            <div class="col-span-12 xl:col-span-6">
              <div class="mt-3 xl:mt-0">
                <FormLabel htmlFor="update-profile-form-10">
                  Phone Number
                </FormLabel>
                <FormInput
                  id="update-profile-form-10"
                  type="text"
                  placeholder="Input text"
                  value="65570828"
                />
              </div>
              <div class="mt-3">
                <FormLabel htmlFor="update-profile-form-11">
                  Address
                </FormLabel>
                <FormInput
                  id="update-profile-form-11"
                  type="text"
                  placeholder="Input text"
                  value="10 Anson Road, International Plaza, #10-11, 079903 Singapore, Singapore"
                />
              </div>
              <div class="mt-3">
                <FormLabel htmlFor="update-profile-form-12">
                  Bank Name
                </FormLabel>
                <TomSelect
                  id="update-profile-form-12"
                  v-model="select"
                  class="w-full"
                >
                  <option value="1">SBI - STATE BANK OF INDIA</option>
                  <option value="2">CITI BANK - CITI BANK</option>
                </TomSelect>
              </div>
              <div class="mt-3">
                <FormLabel htmlFor="update-profile-form-13">
                  Bank Account
                </FormLabel>
                <FormInput
                  id="update-profile-form-13"
                  type="text"
                  placeholder="Input text"
                  value="DBS Current 011-903573-0"
                />
              </div>
            </div>
          </div>
          <div class="flex justify-end mt-4">
            <Button variant="primary" type="button" class="w-20 mr-auto">
              Save
            </Button>
            <a href="" class="flex items-center text-danger">
              <Lucide icon="Trash2" class="w-4 h-4 mr-1" /> Delete Account
            </a>
          </div>
        </div>
      </div>
      <!-- END: Personal Information -->
    </div>
  </div>
</template>
