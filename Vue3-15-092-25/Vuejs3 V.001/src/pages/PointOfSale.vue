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
import { Menu, Tab, Dialog } from "@/components/Base/Headless";

const newOrderModal = ref(false);
const setNewOrderModal = (value: boolean) => {
  newOrderModal.value = value;
};
const addItemModal = ref(false);
const setAddItemModal = (value: boolean) => {
  addItemModal.value = value;
};
const createTicketRef = ref(null);
const addItemRef = ref(null);
</script>

<template>
  <div class="flex flex-col items-center mt-8 intro-y sm:flex-row">
    <h2 class="mr-auto text-lg font-medium">Point of Sale</h2>
    <div class="flex w-full mt-4 sm:w-auto sm:mt-0">
      <Button
        as="a"
        href="#"
        variant="primary"
        @click="(event: MouseEvent) => {
              event.preventDefault();
              setNewOrderModal(true);
            }"
        class="mr-2 shadow-md"
      >
        New Order
      </Button>
      <Menu class="ml-auto sm:ml-0">
        <Menu.Button :as="Button" class="px-2 !box">
          <span class="flex items-center justify-center w-5 h-5">
            <Lucide icon="ChevronDown" class="w-4 h-4" />
          </span>
        </Menu.Button>
        <Menu.Items>
          <Menu.Item>
            <Lucide icon="Activity" class="w-4 h-4 mr-2" />
            <span class="truncate">
              INV-0206020 - {{ fakerData[3].users[0].name }}
            </span>
          </Menu.Item>
          <Menu.Item>
            <Lucide icon="Activity" class="w-4 h-4 mr-2" />
            <span class="truncate">
              INV-0206022 - {{ fakerData[4].users[0].name }}
            </span>
          </Menu.Item>
          <Menu.Item>
            <Lucide icon="Activity" class="w-4 h-4 mr-2" />
            <span class="truncate">
              INV-0206021 - {{ fakerData[5].users[0].name }}
            </span>
          </Menu.Item>
        </Menu.Items>
      </Menu>
    </div>
  </div>
  <div class="grid grid-cols-12 gap-5 mt-5 intro-y">
    <!-- BEGIN: Item List -->
    <div class="col-span-12 intro-y lg:col-span-8">
      <div class="lg:flex intro-y">
        <div class="relative">
          <FormInput
            type="text"
            class="w-full px-4 py-3 pr-10 lg:w-64 !box"
            placeholder="Search item..."
          />
          <Lucide
            icon="Search"
            class="absolute inset-y-0 right-0 w-4 h-4 my-auto mr-3 text-slate-500"
          />
        </div>
        <FormSelect
          class="w-full px-4 py-3 mt-3 ml-auto !box lg:w-auto lg:mt-0"
        >
          <option>Sort By</option>
          <option>A to Z</option>
          <option>Z to A</option>
          <option>Lowest Price</option>
          <option>Highest Price</option>
        </FormSelect>
      </div>
      <div class="grid grid-cols-12 gap-5 mt-5">
        <div
          class="col-span-12 p-5 cursor-pointer sm:col-span-4 2xl:col-span-3 box zoom-in"
        >
          <div class="text-base font-medium">Soup</div>
          <div class="text-slate-500">5 Items</div>
        </div>
        <div
          class="col-span-12 p-5 cursor-pointer sm:col-span-4 2xl:col-span-3 box bg-primary zoom-in"
        >
          <div class="text-base font-medium text-white">Pancake & Toast</div>
          <div class="text-white text-opacity-80 dark:text-slate-500">
            8 Items
          </div>
        </div>
        <div
          class="col-span-12 p-5 cursor-pointer sm:col-span-4 2xl:col-span-3 box zoom-in"
        >
          <div class="text-base font-medium">Pasta</div>
          <div class="text-slate-500">4 Items</div>
        </div>
        <div
          class="col-span-12 p-5 cursor-pointer sm:col-span-4 2xl:col-span-3 box zoom-in"
        >
          <div class="text-base font-medium">Waffle</div>
          <div class="text-slate-500">3 Items</div>
        </div>
        <div
          class="col-span-12 p-5 cursor-pointer sm:col-span-4 2xl:col-span-3 box zoom-in"
        >
          <div class="text-base font-medium">Snacks</div>
          <div class="text-slate-500">8 Items</div>
        </div>
        <div
          class="col-span-12 p-5 cursor-pointer sm:col-span-4 2xl:col-span-3 box zoom-in"
        >
          <div class="text-base font-medium">Deserts</div>
          <div class="text-slate-500">8 Items</div>
        </div>
        <div
          class="col-span-12 p-5 cursor-pointer sm:col-span-4 2xl:col-span-3 box zoom-in"
        >
          <div class="text-base font-medium">Beverage</div>
          <div class="text-slate-500">9 Items</div>
        </div>
      </div>
      <div class="grid grid-cols-12 gap-5 pt-5 mt-5 border-t">
        <a
          v-for="(faker, fakerKey) in _.take(fakerData, 8)"
          :key="fakerKey"
          href="#"
          @click="
            (event) => {
              event.preventDefault();
              setAddItemModal(true);
            }
          "
          class="block col-span-12 intro-y sm:col-span-4 2xl:col-span-3"
        >
          <div class="relative p-3 rounded-md box zoom-in">
            <div
              class="flex-none relative block before:block before:w-full before:pt-[100%]"
            >
              <div class="absolute top-0 left-0 w-full h-full image-fit">
                <img
                  alt="Midone Tailwind HTML Admin Template"
                  class="rounded-md"
                  :src="faker.foods[0].image"
                />
              </div>
            </div>
            <div class="block mt-3 font-medium text-center truncate">
              {{ faker.foods[0].name }}
            </div>
          </div>
        </a>
      </div>
    </div>
    <!-- END: Item List -->
    <!-- BEGIN: Ticket -->
    <Tab.Group class="col-span-12 lg:col-span-4">
      <div class="pr-1 intro-y">
        <div class="p-2 box">
          <Tab.List variant="pills">
            <Tab>
              <Tab.Button as="button" class="w-full py-2"> Ticket </Tab.Button>
            </Tab>
            <Tab>
              <Tab.Button as="button" class="w-full py-2"> Details </Tab.Button>
            </Tab>
          </Tab.List>
        </div>
      </div>
      <Tab.Panels>
        <Tab.Panel>
          <div class="p-2 mt-5 box">
            <a
              v-for="(faker, fakerKey) in _.take(fakerData, 5)"
              href="#"
              :key="fakerKey"
              @click="(event: MouseEvent) => {
                      event.preventDefault();
                      setAddItemModal(true);
                    }"
              class="flex items-center p-3 transition duration-300 ease-in-out bg-white rounded-md cursor-pointer dark:bg-darkmode-600 hover:bg-slate-100 dark:hover:bg-darkmode-400"
            >
              <div class="max-w-[50%] truncate mr-1">
                {{ faker.foods[0].name }}
              </div>
              <div class="text-slate-500">x 1</div>
              <Lucide icon="Edit" class="w-4 h-4 ml-2 text-slate-500" />
              <div class="ml-auto font-medium">${{ faker.totals[0] }}</div>
            </a>
          </div>
          <div class="flex p-5 mt-5 box">
            <FormInput
              type="text"
              class="w-full px-4 py-3 pr-10 bg-slate-100 border-slate-200/60"
              placeholder="Use coupon code..."
            />
            <Button variant="primary" class="ml-2"> Apply </Button>
          </div>
          <div class="p-5 mt-5 box">
            <div class="flex">
              <div class="mr-auto">Subtotal</div>
              <div class="font-medium">$250</div>
            </div>
            <div class="flex mt-4">
              <div class="mr-auto">Discount</div>
              <div class="font-medium text-danger">-$20</div>
            </div>
            <div class="flex mt-4">
              <div class="mr-auto">Tax</div>
              <div class="font-medium">15%</div>
            </div>
            <div
              class="flex pt-4 mt-4 border-t border-slate-200/60 dark:border-darkmode-400"
            >
              <div class="mr-auto text-base font-medium">Total Charge</div>
              <div class="text-base font-medium">$220</div>
            </div>
          </div>
          <div class="flex mt-5">
            <Button
              class="w-32 border-slate-300 dark:border-darkmode-400 text-slate-500"
            >
              Clear Items
            </Button>
            <Button variant="primary" class="w-32 ml-auto shadow-md">
              Charge
            </Button>
          </div>
        </Tab.Panel>
        <Tab.Panel>
          <div class="p-5 mt-5 box">
            <div
              class="flex items-center pb-5 border-b border-slate-200 dark:border-darkmode-400"
            >
              <div>
                <div class="text-slate-500">Time</div>
                <div class="mt-1">02/06/20 02:10 PM</div>
              </div>
              <Lucide icon="Clock" class="w-4 h-4 ml-auto text-slate-500" />
            </div>
            <div
              class="flex items-center py-5 border-b border-slate-200 dark:border-darkmode-400"
            >
              <div>
                <div class="text-slate-500">Customer</div>
                <div class="mt-1">{{ fakerData[0].users[0].name }}</div>
              </div>
              <Lucide icon="User" class="w-4 h-4 ml-auto text-slate-500" />
            </div>
            <div
              class="flex items-center py-5 border-b border-slate-200 dark:border-darkmode-400"
            >
              <div>
                <div class="text-slate-500">People</div>
                <div class="mt-1">3</div>
              </div>
              <Lucide icon="Users" class="w-4 h-4 ml-auto text-slate-500" />
            </div>
            <div class="flex items-center pt-5">
              <div>
                <div class="text-slate-500">Table</div>
                <div class="mt-1">21</div>
              </div>
              <Lucide icon="Mic" class="w-4 h-4 ml-auto text-slate-500" />
            </div>
          </div>
        </Tab.Panel>
      </Tab.Panels>
    </Tab.Group>
    <!-- END: Ticket -->
  </div>
  <!-- BEGIN: New Order Modal -->
  <Dialog
    :open="newOrderModal"
    @clsoe="
      () => {
        setNewOrderModal(false);
      }
    "
    :initialFocus="createTicketRef"
  >
    <Dialog.Panel>
      <Dialog.Title>
        <h2 class="mr-auto text-base font-medium">New Order</h2>
      </Dialog.Title>
      <Dialog.Description class="grid grid-cols-12 gap-4 gap-y-3">
        <div class="col-span-12">
          <FormLabel htmlFor="pos-form-1">Name</FormLabel>
          <FormInput
            id="pos-form-1"
            type="text"
            class="flex-1"
            placeholder="Customer name"
          />
        </div>
        <div class="col-span-12">
          <FormLabel htmlFor="pos-form-2">Table</FormLabel>
          <FormInput
            id="pos-form-2"
            type="text"
            class="flex-1"
            placeholder="Customer table"
          />
        </div>
        <div class="col-span-12">
          <FormLabel htmlFor="pos-form-3">Number of People</FormLabel>
          <FormInput
            id="pos-form-3"
            type="text"
            class="flex-1"
            placeholder="People"
          />
        </div>
      </Dialog.Description>
      <Dialog.Footer class="text-right">
        <Button
          variant="outline-secondary"
          type="button"
          @click="
            () => {
              setNewOrderModal(false);
            }
          "
          class="w-32 mr-1"
        >
          Cancel
        </Button>
        <Button
          variant="primary"
          type="button"
          class="w-32"
          ref="createTicketRef"
        >
          Create Ticket
        </Button>
      </Dialog.Footer>
    </Dialog.Panel>
  </Dialog>
  <!-- END: New Order Modal -->
  <!-- BEGIN: Add Item Modal -->
  <Dialog
    :open="addItemModal"
    @clsoe="
      () => {
        setAddItemModal(false);
      }
    "
    :initialFocus="addItemRef"
  >
    <Dialog.Panel>
      <Dialog.Title>
        <h2 class="mr-auto text-base font-medium">
          {{ fakerData[0].foods[0].name }}
        </h2>
      </Dialog.Title>
      <Dialog.Description class="grid grid-cols-12 gap-4 gap-y-3">
        <div class="col-span-12">
          <FormLabel htmlFor="pos-form-4" class="form-label">
            Quantity
          </FormLabel>
          <div class="flex flex-1">
            <Button
              type="button"
              class="w-12 mr-1 border-slate-200 bg-slate-100 dark:bg-darkmode-700 dark:border-darkmode-500 text-slate-500"
            >
              -
            </Button>
            <FormInput
              id="pos-form-4"
              type="text"
              class="w-24 text-center"
              placeholder="Item quantity"
              value="2"
            />
            <Button
              type="button"
              class="w-12 ml-1 border-slate-200 bg-slate-100 dark:bg-darkmode-700 dark:border-darkmode-500 text-slate-500"
            >
              +
            </Button>
          </div>
        </div>
        <div class="col-span-12">
          <FormLabel htmlFor="pos-form-5">Notes</FormLabel>
          <FormTextarea id="pos-form-5" placeholder="Item notes"></FormTextarea>
        </div>
      </Dialog.Description>
      <Dialog.Footer class="text-right">
        <Button
          variant="outline-secondary"
          type="button"
          @click="
            () => {
              setAddItemModal(false);
            }
          "
          class="w-24 mr-1"
        >
          Cancel
        </Button>
        <Button variant="primary" type="button" class="w-24" ref="addItemRef">
          Add Item
        </Button>
      </Dialog.Footer>
    </Dialog.Panel>
  </Dialog>
  <!-- END: Add Item Modal -->
</template>
