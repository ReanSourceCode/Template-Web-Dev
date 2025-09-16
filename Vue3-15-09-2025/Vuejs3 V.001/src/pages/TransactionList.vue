<script setup lang="ts">
import _ from "lodash";
import { ref } from "vue";
import fakerData from "@/utils/faker";
import Button from "@/components/Base/Button";
import Pagination from "@/components/Base/Pagination";
import { FormCheck, FormInput, FormSelect } from "@/components/Base/Form";
import Lucide from "@/components/Base/Lucide";
import { Dialog, Menu } from "@/components/Base/Headless";
import Table from "@/components/Base/Table";

const deleteConfirmationModal = ref(false);
const setDeleteConfirmationModal = (value: boolean) => {
  deleteConfirmationModal.value = value;
};
const deleteButtonRef = ref(null);
</script>

<template>
  <h2 class="mt-10 text-lg font-medium intro-y">Transaction List</h2>
  <div class="grid grid-cols-12 gap-6 mt-5">
    <div
      class="flex flex-wrap items-center col-span-12 mt-2 intro-y xl:flex-nowrap"
    >
      <div class="flex w-full sm:w-auto">
        <div class="relative w-48 text-slate-500">
          <FormInput
            type="text"
            class="w-48 pr-10 !box"
            placeholder="Search by invoice..."
          />
          <Lucide
            icon="Search"
            class="absolute inset-y-0 right-0 w-4 h-4 my-auto mr-3"
          />
        </div>
        <FormSelect class="ml-2 !box">
          <option>Status</option>
          <option>Waiting Payment</option>
          <option>Confirmed</option>
          <option>Packing</option>
          <option>Delivered</option>
          <option>Completed</option>
        </FormSelect>
      </div>
      <div class="hidden mx-auto xl:block text-slate-500">
        Showing 1 to 10 of 150 entries
      </div>
      <div class="flex items-center w-full mt-3 xl:w-auto xl:mt-0">
        <Button variant="primary" class="mr-2 shadow-md">
          <Lucide icon="FileText" class="w-4 h-4 mr-2" /> Export to Excel
        </Button>
        <Button variant="primary" class="mr-2 shadow-md">
          <Lucide icon="FileText" class="w-4 h-4 mr-2" /> Export to PDF
        </Button>
        <Menu>
          <Menu.Button :as="Button" class="px-2 !box">
            <span class="flex items-center justify-center w-5 h-5">
              <Lucide icon="Plus" class="w-4 h-4" />
            </span>
          </Menu.Button>
          <Menu.Items class="w-40">
            <Menu.Item>
              <Lucide icon="Printer" class="w-4 h-4 mr-2" /> Print
            </Menu.Item>
            <Menu.Item>
              <Lucide icon="FileText" class="w-4 h-4 mr-2" /> Export to Excel
            </Menu.Item>
            <Menu.Item>
              <Lucide icon="FileText" class="w-4 h-4 mr-2" /> Export to PDF
            </Menu.Item>
          </Menu.Items>
        </Menu>
      </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="col-span-12 overflow-auto intro-y 2xl:overflow-visible">
      <Table class="border-spacing-y-[10px] border-separate -mt-2">
        <Table.Thead>
          <Table.Tr>
            <Table.Th class="border-b-0 whitespace-nowrap">
              <FormCheck.Input type="checkbox" />
            </Table.Th>
            <Table.Th class="border-b-0 whitespace-nowrap"> INVOICE </Table.Th>
            <Table.Th class="border-b-0 whitespace-nowrap">
              BUYER NAME
            </Table.Th>
            <Table.Th class="text-center border-b-0 whitespace-nowrap">
              STATUS
            </Table.Th>
            <Table.Th class="border-b-0 whitespace-nowrap"> PAYMENT </Table.Th>
            <Table.Th class="text-right border-b-0 whitespace-nowrap">
              <div class="pr-16">TOTAL TRANSACTION</div>
            </Table.Th>
            <Table.Th class="text-center border-b-0 whitespace-nowrap">
              ACTIONS
            </Table.Th>
          </Table.Tr>
        </Table.Thead>
        <Table.Tbody>
          <Table.Tr
            v-for="(faker, fakerKey) in _.take(fakerData, 9)"
            :key="fakerKey"
            class="intro-x"
          >
            <Table.Td
              class="box w-10 whitespace-nowrap rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
            >
              <FormCheck.Input type="checkbox" />
            </Table.Td>
            <Table.Td
              class="box w-40 whitespace-nowrap rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
            >
              <a href="" class="underline decoration-dotted whitespace-nowrap">
                {{ "#INV-" + faker.totals[0] + "807556" }}
              </a>
            </Table.Td>
            <Table.Td
              class="box w-40 whitespace-nowrap rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
            >
              <a href="" class="font-medium whitespace-nowrap">
                {{ faker.users[0].name }}
              </a>
              <div
                v-if="faker.trueFalse[0]"
                class="text-slate-500 text-xs whitespace-nowrap mt-0.5"
              >
                Ohio, Ohio
              </div>
              <div
                v-else
                class="text-slate-500 text-xs whitespace-nowrap mt-0.5"
              >
                California, LA
              </div>
            </Table.Td>
            <Table.Td
              class="box whitespace-nowrap rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
            >
              <div
                :class="{
                  'flex items-center justify-center whitespace-nowrap': true,
                  'text-success': faker.trueFalse[0],
                  'text-danger': !faker.trueFalse[0],
                }"
              >
                <Lucide icon="CheckSquare" class="w-4 h-4 mr-2" />
                {{ faker.trueFalse[0] ? "Active" : "Inactive" }}
              </div>
            </Table.Td>
            <Table.Td
              class="box whitespace-nowrap rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
            >
              <template v-if="faker.trueFalse[0]">
                <div class="whitespace-nowrap">Direct bank transfer</div>
                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                  25 March, 12:55
                </div>
              </template>
              <template v-else>
                <div class="whitespace-nowrap">Checking payments</div>
                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                  30 March, 11:00
                </div>
              </template>
            </Table.Td>
            <Table.Td
              class="box w-40 whitespace-nowrap rounded-l-none rounded-r-none border-x-0 text-right shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600"
            >
              <div class="pr-16">${{ faker.totals[0] + ",000,00" }}</div>
            </Table.Td>
            <Table.Td
              :class="[
                'box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600',
                'before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 before:dark:bg-darkmode-400',
              ]"
            >
              <div class="flex items-center justify-center">
                <a
                  class="flex items-center mr-5 text-primary whitespace-nowrap"
                  href="#"
                >
                  <Lucide icon="CheckSquare" class="w-4 h-4 mr-1" /> View
                  Details
                </a>
                <a
                  class="flex items-center text-primary whitespace-nowrap"
                  href="#"
                  @click="
                    (event) => {
                      event.preventDefault();
                      setDeleteConfirmationModal(true);
                    }
                  "
                >
                  <Lucide icon="ArrowLeftRight" class="w-4 h-4 mr-1" />
                  Change Status
                </a>
              </div>
            </Table.Td>
          </Table.Tr>
        </Table.Tbody>
      </Table>
    </div>
    <!-- END: Data List -->
    <!-- BEGIN: Pagination -->
    <div
      class="flex flex-wrap items-center col-span-12 intro-y sm:flex-row sm:flex-nowrap"
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
