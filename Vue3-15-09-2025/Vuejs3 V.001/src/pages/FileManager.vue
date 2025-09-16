<script setup lang="ts">
import _ from "lodash";
import fakerData from "@/utils/faker";
import Button from "@/components/Base/Button";
import Pagination from "@/components/Base/Pagination";
import {
  FormCheck,
  FormInput,
  FormLabel,
  FormSelect,
} from "@/components/Base/Form";
import Lucide from "@/components/Base/Lucide";
import { Menu } from "@/components/Base/Headless";
import FileIcon from "@/components/Base/FileIcon";
</script>

<template>
  <div class="grid grid-cols-12 gap-6 mt-8">
    <div class="col-span-12 lg:col-span-3 2xl:col-span-2">
      <h2 class="mt-2 mr-auto text-lg font-medium intro-y">File Manager</h2>
      <!-- BEGIN: File Manager Menu -->
      <div class="p-5 mt-6 intro-y box">
        <div class="mt-1">
          <a
            href=""
            class="flex items-center px-3 py-2 font-medium text-white rounded-md bg-primary"
          >
            <Lucide icon="Image" class="w-4 h-4 mr-2" /> Images
          </a>
          <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
            <Lucide icon="Video" class="w-4 h-4 mr-2" /> Videos
          </a>
          <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
            <Lucide icon="File" class="w-4 h-4 mr-2" /> Documents
          </a>
          <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
            <Lucide icon="Users" class="w-4 h-4 mr-2" /> Shared
          </a>
          <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
            <Lucide icon="Trash" class="w-4 h-4 mr-2" /> Trash
          </a>
        </div>
        <div
          class="pt-4 mt-4 border-t border-slate-200 dark:border-darkmode-400"
        >
          <a href="" class="flex items-center px-3 py-2 rounded-md">
            <div class="w-2 h-2 mr-3 rounded-full bg-pending"></div>
            Custom Work
          </a>
          <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
            <div class="w-2 h-2 mr-3 rounded-full bg-success"></div>
            Important Meetings
          </a>
          <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
            <div class="w-2 h-2 mr-3 rounded-full bg-warning"></div>
            Work
          </a>
          <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
            <div class="w-2 h-2 mr-3 rounded-full bg-pending"></div>
            Design
          </a>
          <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
            <div class="w-2 h-2 mr-3 rounded-full bg-danger"></div>
            Next Week
          </a>
          <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
            <Lucide icon="Plus" class="w-4 h-4 mr-2" /> Add New Label
          </a>
        </div>
      </div>
      <!-- END: File Manager Menu -->
    </div>
    <div class="col-span-12 lg:col-span-9 2xl:col-span-10">
      <!-- BEGIN: File Manager Filter -->
      <div class="flex flex-col-reverse items-center intro-y sm:flex-row">
        <div class="relative w-full mt-3 mr-auto sm:w-auto sm:mt-0">
          <Lucide
            icon="Search"
            class="absolute inset-y-0 left-0 z-10 w-4 h-4 my-auto ml-3 text-slate-500"
          />
          <FormInput
            type="text"
            class="w-full px-10 sm:w-64 !box"
            placeholder="Search files"
          />
          <Menu class="absolute inset-y-0 right-0 flex items-center mr-3">
            <Menu.Button as="a" role="button" class="block w-4 h-4" href="#">
              <Lucide
                icon="ChevronDown"
                class="w-4 h-4 cursor-pointer text-slate-500"
              />
            </Menu.Button>
            <Menu.Items
              placement="bottom-start"
              class="pt-2 w-[478px] -ml-[228px] -mt-0.5"
            >
              <div class="grid grid-cols-12 gap-4 p-3 gap-y-3">
                <div class="col-span-6">
                  <FormLabel htmlFor="input-filter-1" class="text-xs">
                    File Name
                  </FormLabel>
                  <FormInput
                    id="input-filter-1"
                    type="text"
                    class="flex-1"
                    placeholder="Type the file name"
                  />
                </div>
                <div class="col-span-6">
                  <FormLabel htmlFor="input-filter-2" class="text-xs">
                    Shared With
                  </FormLabel>
                  <FormInput
                    id="input-filter-2"
                    type="text"
                    class="flex-1"
                    placeholder="example@gmail.com"
                  />
                </div>
                <div class="col-span-6">
                  <FormLabel htmlFor="input-filter-3" class="text-xs">
                    Created At
                  </FormLabel>
                  <FormInput
                    id="input-filter-3"
                    type="text"
                    class="flex-1"
                    placeholder="Important Meeting"
                  />
                </div>
                <div class="col-span-6">
                  <FormLabel htmlFor="input-filter-4" class="text-xs">
                    Size
                  </FormLabel>
                  <FormSelect id="input-filter-4" class="flex-1">
                    <option>10</option>
                    <option>25</option>
                    <option>35</option>
                    <option>50</option>
                  </FormSelect>
                </div>
                <div class="flex items-center col-span-12 mt-3">
                  <Button variant="secondary" class="w-32 ml-auto">
                    Create Filter
                  </Button>
                  <Button variant="primary" class="w-32 ml-2"> Search </Button>
                </div>
              </div>
            </Menu.Items>
          </Menu>
        </div>
        <div class="flex w-full sm:w-auto">
          <Button variant="primary" class="mr-2 shadow-md">
            Upload New Files
          </Button>
          <Menu>
            <Menu.Button :as="Button" class="px-2 !box">
              <span class="flex items-center justify-center w-5 h-5">
                <Lucide icon="Plus" class="w-4 h-4" />
              </span>
            </Menu.Button>
            <Menu.Items class="w-40">
              <Menu.Item>
                <Lucide icon="File" class="w-4 h-4 mr-2" /> Share Files
              </Menu.Item>
              <Menu.Item>
                <Lucide icon="Settings" class="w-4 h-4 mr-2" /> Settings
              </Menu.Item>
            </Menu.Items>
          </Menu>
        </div>
      </div>
      <!-- END: File Manager Filter -->
      <!-- BEGIN: Directory & Files -->
      <div class="grid grid-cols-12 gap-3 mt-5 intro-y sm:gap-6">
        <div
          v-for="(faker, fakerKey) in fakerData"
          :key="fakerKey"
          class="col-span-6 intro-y sm:col-span-4 md:col-span-3 2xl:col-span-2"
        >
          <div
            class="relative px-3 pt-8 pb-5 rounded-md file box sm:px-5 zoom-in"
          >
            <div class="absolute top-0 left-0 mt-3 ml-3">
              <FormCheck.Input
                class="border"
                type="checkbox"
                :checked="faker.trueFalse[0]"
              />
            </div>
            <FileIcon
              v-if="faker.files[0].type == 'Empty Folder'"
              class="w-3/5 mx-auto"
              variant="empty-directory"
            />
            <FileIcon
              v-else-if="faker.files[0].type == 'Folder'"
              class="w-3/5 mx-auto"
              variant="directory"
            />
            <FileIcon
              v-else-if="faker.files[0].type == 'Image'"
              class="w-3/5 mx-auto"
              variant="image"
              :src="_.toLower(faker.files[0]['fileName'])"
            />
            <FileIcon
              v-else
              class="w-3/5 mx-auto"
              variant="directory"
              :type="faker.files[0].type"
            />
            <a href="" class="block mt-4 font-medium text-center truncate">
              {{
                faker.files[0].fileName.split("/")[
                  faker.files[0].fileName.split("/").length - 1
                ]
              }}
            </a>
            <div class="text-slate-500 text-xs text-center mt-0.5">
              {{ faker.files[0].size }}
            </div>
            <Menu class="absolute top-0 right-0 mt-3 ml-auto mr-2">
              <Menu.Button as="a" class="block w-5 h-5" href="#">
                <Lucide icon="MoreVertical" class="w-5 h-5 text-slate-500" />
              </Menu.Button>
              <Menu.Items class="w-40">
                <Menu.Item>
                  <Lucide icon="Users" class="w-4 h-4 mr-2" /> Share File
                </Menu.Item>
                <Menu.Item>
                  <Lucide icon="Trash" class="w-4 h-4 mr-2" /> Delete
                </Menu.Item>
              </Menu.Items>
            </Menu>
          </div>
        </div>
      </div>
      <!-- END: Directory & Files -->
      <!-- BEGIN: Pagination -->
      <div
        class="flex flex-wrap items-center mt-6 intro-y sm:flex-row sm:flex-nowrap"
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
      <!-- END: Pagination -->
    </div>
  </div>
</template>
