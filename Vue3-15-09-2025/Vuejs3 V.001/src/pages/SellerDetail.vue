<script setup lang="ts">
import _ from "lodash";
import { ref } from "vue";
import fakerData from "@/utils/faker";
import Button from "@/components/Base/Button";
import Pagination from "@/components/Base/Pagination";
import { FormSelect } from "@/components/Base/Form";
import Lucide from "@/components/Base/Lucide";
import { Dialog, Menu } from "@/components/Base/Headless";

const deleteConfirmationModal = ref(false);
const setDeleteConfirmationModal = (value: boolean) => {
  deleteConfirmationModal.value = value;
};
const deleteButtonRef = ref(null);
</script>

<template>
  <div class="flex flex-col items-center mt-8 intro-y sm:flex-row">
    <h2 class="mr-auto text-lg font-medium">Seller Details</h2>
    <div class="flex w-full mt-4 sm:w-auto sm:mt-0">
      <Button variant="primary" class="mr-2 shadow-md"> Print </Button>
      <Menu class="ml-auto sm:ml-0">
        <Menu.Button :as="Button" class="px-2 !box">
          <span class="flex items-center justify-center w-5 h-5">
            <Lucide icon="Plus" class="w-4 h-4" />
          </span>
        </Menu.Button>
        <Menu.Items class="w-40">
          <Menu.Item>
            <Lucide icon="File" class="w-4 h-4 mr-2" /> Export Word
          </Menu.Item>
          <Menu.Item>
            <Lucide icon="File" class="w-4 h-4 mr-2" /> Export to PDF
          </Menu.Item>
        </Menu.Items>
      </Menu>
    </div>
  </div>
  <!-- BEGIN: Seller Details -->
  <div class="grid grid-cols-11 gap-5 mt-5 intro-y">
    <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
      <div class="p-5 rounded-md box">
        <div
          class="flex items-center pb-5 mb-5 border-b border-slate-200/60 dark:border-darkmode-400"
        >
          <div class="text-base font-medium truncate">User Details</div>
          <a href="" class="flex items-center ml-auto text-primary">
            <Lucide icon="Edit" class="w-4 h-4 mr-2" /> More Details
          </a>
        </div>
        <div class="flex items-center">
          <Lucide icon="Clipboard" class="w-4 h-4 mr-2 text-slate-500" />
          Unique ID:
          <a href="" class="ml-1 underline decoration-dotted">
            SLR-20220217-2053411933
          </a>
        </div>
        <div class="flex items-center mt-3">
          <Lucide icon="User" class="w-4 h-4 mr-2 text-slate-500" />
          Name:
          <a href="" class="ml-1 underline decoration-dotted">
            {{ fakerData[0].users[0].name }}
          </a>
        </div>
        <div class="flex items-center mt-3">
          <Lucide icon="Calendar" class="w-4 h-4 mr-2 text-slate-500" />
          Phone Number: +71828273732
        </div>
        <div class="flex items-center mt-3">
          <Lucide icon="MapPin" class="w-4 h-4 mr-2 text-slate-500" />
          Address: 260 W. Storm Street New York, NY 10025.
        </div>
        <div
          class="flex items-center pt-5 mt-5 font-medium border-t border-slate-200/60 dark:border-darkmode-400"
        >
          <Button
            variant="outline-secondary"
            type="button"
            class="w-full px-2 py-1"
          >
            Message User
          </Button>
        </div>
      </div>
      <div class="p-5 mt-5 rounded-md box">
        <div
          class="flex items-center pb-5 mb-5 border-b border-slate-200/60 dark:border-darkmode-400"
        >
          <div class="text-base font-medium truncate">Store Details</div>
          <a href="" class="flex items-center ml-auto text-primary">
            <Lucide icon="Edit" class="w-4 h-4 mr-2" /> More Details
          </a>
        </div>
        <div class="flex items-center">
          <Lucide icon="Clipboard" class="w-4 h-4 mr-2 text-slate-500" />
          Unique ID:
          <a href="" class="ml-1 underline decoration-dotted">
            STR-2053411933-20220217
          </a>
        </div>
        <div class="flex items-center mt-3">
          <Lucide icon="ShoppingBag" class="w-4 h-4 mr-2 text-slate-500" />
          Name:
          <a href="" class="ml-1 underline decoration-dotted"> Themeforest </a>
        </div>
        <div class="flex items-center mt-3">
          <Lucide icon="Calendar" class="w-4 h-4 mr-2 text-slate-500" />
          Phone Number: +71828273732
        </div>
        <div class="flex items-center mt-3">
          <Lucide icon="MapPin" class="w-4 h-4 mr-2 text-slate-500" />
          Address: 260 W. Storm Street New York, NY 10025.
        </div>
        <div class="flex items-center mt-3">
          <Lucide icon="Calendar" class="w-4 h-4 mr-2 text-slate-500" />
          Status:
          <span class="px-2 ml-1 rounded bg-success/20 text-success">
            Active
          </span>
        </div>
        <div
          class="flex items-center pt-5 mt-5 font-medium border-t border-slate-200/60 dark:border-darkmode-400"
        >
          <Button
            variant="outline-secondary"
            type="button"
            class="w-full px-2 py-1"
          >
            Change Status
          </Button>
        </div>
      </div>
      <div class="p-5 mt-5 rounded-md box">
        <div
          class="flex items-center pb-5 mb-5 border-b border-slate-200/60 dark:border-darkmode-400"
        >
          <div class="text-base font-medium truncate">Transaction Reports</div>
          <a href="" class="flex items-center ml-auto text-primary">
            <Lucide icon="Edit" class="w-4 h-4 mr-2" /> More Details
          </a>
        </div>
        <div class="flex items-center mt-3">
          <Lucide icon="Clipboard" class="w-4 h-4 mr-2 text-slate-500" />
          Avg. Daily Transactions:
          <div class="ml-auto">$1,500.00</div>
        </div>
        <div class="flex items-center mt-3">
          <Lucide icon="Clipboard" class="w-4 h-4 mr-2 text-slate-500" />
          Avg. Monthly Transactions:
          <div class="ml-auto">$42,500.00</div>
        </div>
        <div class="flex items-center mt-3">
          <Lucide icon="Clipboard" class="w-4 h-4 mr-2 text-slate-500" />
          Avg. Annually Transactions:
          <div class="ml-auto">$1,012,500.00</div>
        </div>
        <div class="flex items-center mt-3">
          <Lucide icon="Star" class="w-4 h-4 mr-2 text-slate-500" />
          Average Rating:
          <div class="ml-auto">4.9+</div>
        </div>
        <div class="flex items-center mt-3">
          <Lucide icon="Album" class="w-4 h-4 mr-2 text-slate-500" />
          Total Products:
          <div class="ml-auto">7,120</div>
        </div>
        <div class="flex items-center mt-3">
          <Lucide icon="Archive" class="w-4 h-4 mr-2 text-slate-500" />
          Total Transactions:
          <div class="ml-auto">1.512.001</div>
        </div>
        <div class="flex items-center mt-3">
          <Lucide icon="Monitor" class="w-4 h-4 mr-2 text-slate-500" />
          Active Disputes:
          <div class="ml-auto">1</div>
        </div>
      </div>
    </div>
    <div class="col-span-12 lg:col-span-7 2xl:col-span-8">
      <div class="grid grid-cols-12 gap-5">
        <div
          v-for="(faker, fakerKey) in _.take(fakerData, 9)"
          :key="fakerKey"
          class="col-span-12 intro-y sm:col-span-6 2xl:col-span-4"
        >
          <div class="box">
            <div class="p-5">
              <div
                class="h-40 overflow-hidden rounded-md 2xl:h-56 image-fit before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10"
              >
                <img
                  alt="Midone - HTML Admin Template"
                  class="rounded-md"
                  :src="faker.images[0]"
                />
                <template v-if="faker.trueFalse[0]">
                  <span
                    class="absolute top-0 z-10 px-2 py-1 m-5 text-xs text-white rounded bg-pending/80"
                  >
                    Featured
                  </span>
                </template>
                <div class="absolute bottom-0 z-10 px-5 pb-6 text-white">
                  <a href="" class="block text-base font-medium">
                    {{ faker.products[0].name }}
                  </a>
                  <span class="mt-3 text-xs text-white/90">
                    {{ faker.products[0].category }}
                  </span>
                </div>
              </div>
              <div class="mt-5 text-slate-600 dark:text-slate-500">
                <div class="flex items-center">
                  <Lucide icon="Link" class="w-4 h-4 mr-2" /> Price: $
                  {{ faker.totals[0] }}
                </div>
                <div class="flex items-center mt-2">
                  <Lucide icon="Layers" class="w-4 h-4 mr-2" />
                  Remaining Stock:
                  {{ faker.stocks[0] }}
                </div>
                <div class="flex items-center mt-2">
                  <Lucide icon="CheckSquare" class="w-4 h-4 mr-2" />
                  Status: {{ faker.trueFalse[0] ? "Active" : "Inactive" }}
                </div>
              </div>
            </div>
            <div
              class="flex items-center justify-center p-5 border-t lg:justify-end border-slate-200/60 dark:border-darkmode-400"
            >
              <a class="flex items-center mr-auto text-primary" href="#">
                <Lucide icon="Eye" class="w-4 h-4 mr-1" /> Preview
              </a>
              <a class="flex items-center mr-3" href="#">
                <Lucide icon="CheckSquare" class="w-4 h-4 mr-1" />
                Edit
              </a>
              <a
                class="flex items-center text-danger"
                href="#"
                @click="
                  () => {
                    setDeleteConfirmationModal(true);
                  }
                "
              >
                <Lucide icon="Trash2" class="w-4 h-4 mr-1" /> Delete
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- BEGIN: Pagination -->
      <div
        class="flex flex-wrap items-center col-span-11 mt-6 intro-y sm:flex-row sm:flex-nowrap"
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
  <!-- END: Seller Details -->
  <!-- BEGIN: Delete Confirmation Modal -->
  <!-- BEGIN: Delete Confirmation Modal -->
  <Dialog
    :open="deleteConfirmationModal"
    @close="
      () => {
        setDeleteConfirmationModal(false);
      }
    "
    :initialFocus="deleteButtonRef"
  >
    <Dialog.Panel>
      <div class="p-5 text-center">
        <Lucide icon="XCircle" class="w-16 h-16 mx-auto mt-3 text-danger" />
        <div class="mt-5 text-3xl">Are you sure?</div>
        <div class="mt-2 text-slate-500">
          Do you really want to delete these records? <br />
          This process cannot be undone.
        </div>
      </div>
      <div class="px-5 pb-8 text-center">
        <Button
          variant="outline-secondary"
          type="button"
          @click="
            () => {
              setDeleteConfirmationModal(false);
            }
          "
          class="w-24 mr-1"
        >
          Cancel
        </Button>
        <Button
          variant="danger"
          type="button"
          class="w-24"
          ref="deleteButtonRef"
        >
          Delete
        </Button>
      </div>
    </Dialog.Panel>
  </Dialog>
  <!-- END: Delete Confirmation Modal -->
</template>
