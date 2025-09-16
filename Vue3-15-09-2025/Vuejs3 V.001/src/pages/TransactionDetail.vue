<script setup lang="ts">
import _ from "lodash";
import fakerData from "@/utils/faker";
import Button from "@/components/Base/Button";
import Lucide from "@/components/Base/Lucide";
import Tippy from "@/components/Base/Tippy";
import { Menu } from "@/components/Base/Headless";
import Table from "@/components/Base/Table";
</script>

<template>
  <div class="flex flex-col items-center mt-8 intro-y sm:flex-row">
    <h2 class="mr-auto text-lg font-medium">Transaction Details</h2>
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
  <!-- BEGIN: Transaction Details -->
  <div class="grid grid-cols-11 gap-5 mt-5 intro-y">
    <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
      <div class="p-5 rounded-md box">
        <div
          class="flex items-center pb-5 mb-5 border-b border-slate-200/60 dark:border-darkmode-400"
        >
          <div class="text-base font-medium truncate">Transaction Details</div>
          <a href="" class="flex items-center ml-auto text-primary">
            <Lucide icon="Edit" class="w-4 h-4 mr-2" /> Change Status
          </a>
        </div>
        <div class="flex items-center">
          <Lucide icon="Clipboard" class="w-4 h-4 mr-2 text-slate-500" />
          Invoice:
          <a href="" class="ml-1 underline decoration-dotted">
            INV/20220217/MPL/2053411933
          </a>
        </div>
        <div class="flex items-center mt-3">
          <Lucide icon="Calendar" class="w-4 h-4 mr-2 text-slate-500" />
          Purchase Date: 24 March 2022
        </div>
        <div class="flex items-center mt-3">
          <Lucide icon="Clock" class="w-4 h-4 mr-2 text-slate-500" />
          Transaction Status:
          <span class="px-2 ml-1 rounded bg-success/20 text-success">
            Completed
          </span>
        </div>
      </div>
      <div class="p-5 mt-5 rounded-md box">
        <div
          class="flex items-center pb-5 mb-5 border-b border-slate-200/60 dark:border-darkmode-400"
        >
          <div class="text-base font-medium truncate">Buyer Details</div>
          <a href="" class="flex items-center ml-auto text-primary">
            <Lucide icon="Edit" class="w-4 h-4 mr-2" /> View Details
          </a>
        </div>
        <div class="flex items-center">
          <Lucide icon="Clipboard" class="w-4 h-4 mr-2 text-slate-500" />
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
      </div>
      <div class="p-5 mt-5 rounded-md box">
        <div
          class="flex items-center pb-5 mb-5 border-b border-slate-200/60 dark:border-darkmode-400"
        >
          <div class="text-base font-medium truncate">Payment Details</div>
        </div>
        <div class="flex items-center">
          <Lucide icon="Clipboard" class="w-4 h-4 mr-2 text-slate-500" />
          Payment Method:
          <div class="ml-auto">Direct bank transfer</div>
        </div>
        <div class="flex items-center mt-3">
          <Lucide icon="CreditCard" class="w-4 h-4 mr-2 text-slate-500" />
          Total Price (2 items):
          <div class="ml-auto">$12,500.00</div>
        </div>
        <div class="flex items-center mt-3">
          <Lucide icon="CreditCard" class="w-4 h-4 mr-2 text-slate-500" />
          Total Shipping Cost (800 gr):
          <div class="ml-auto">$1,500.00</div>
        </div>
        <div class="flex items-center mt-3">
          <Lucide icon="CreditCard" class="w-4 h-4 mr-2 text-slate-500" />
          Shipping Insurance:
          <div class="ml-auto">$600.00</div>
        </div>
        <div
          class="flex items-center pt-5 mt-5 font-medium border-t border-slate-200/60 dark:border-darkmode-400"
        >
          <Lucide icon="CreditCard" class="w-4 h-4 mr-2 text-slate-500" />
          Grand Total:
          <div class="ml-auto">$15,000.00</div>
        </div>
      </div>
      <div class="p-5 mt-5 rounded-md box">
        <div
          class="flex items-center pb-5 mb-5 border-b border-slate-200/60 dark:border-darkmode-400"
        >
          <div class="text-base font-medium truncate">Shipping Information</div>
          <a href="" class="flex items-center ml-auto text-primary">
            <Lucide icon="MapPin" class="w-4 h-4 mr-2" /> Tracking Info
          </a>
        </div>
        <div class="flex items-center">
          <Lucide icon="Clipboard" class="w-4 h-4 mr-2 text-slate-500" />
          Courier: Left4code Express
        </div>
        <div class="flex items-center mt-3">
          <Lucide icon="Calendar" class="w-4 h-4 mr-2 text-slate-500" />
          Tracking Number: 003005580322
          <Lucide icon="Copy" class="w-4 h-4 ml-2 text-slate-500" />
        </div>
        <div class="flex items-center mt-3">
          <Lucide icon="MapPin" class="w-4 h-4 mr-2 text-slate-500" />
          Address: 260 W. Storm Street New York, NY 10025.
        </div>
      </div>
    </div>
    <div class="col-span-12 lg:col-span-7 2xl:col-span-8">
      <div class="p-5 rounded-md box">
        <div
          class="flex items-center pb-5 mb-5 border-b border-slate-200/60 dark:border-darkmode-400"
        >
          <div class="text-base font-medium truncate">Order Details</div>
          <a href="" class="flex items-center ml-auto text-primary">
            <Lucide icon="Plus" class="w-4 h-4 mr-2" /> Add Notes
          </a>
        </div>
        <div class="-mt-3 overflow-auto lg:overflow-visible">
          <Table striped>
            <Table.Thead>
              <Table.Tr>
                <Table.Th class="whitespace-nowrap !py-5"> Product </Table.Th>
                <Table.Th class="text-right whitespace-nowrap">
                  Unit Price
                </Table.Th>
                <Table.Th class="text-right whitespace-nowrap"> Qty </Table.Th>
                <Table.Th class="text-right whitespace-nowrap">
                  Total
                </Table.Th>
              </Table.Tr>
            </Table.Thead>
            <Table.Tbody>
              <Table.Tr
                v-for="(faker, fakerKey) in _.take(fakerData, 8)"
                :key="fakerKey"
              >
                <Table.Td class="!py-4">
                  <div class="flex items-center">
                    <div class="w-10 h-10 image-fit zoom-in">
                      <Tippy
                        as="img"
                        alt="Midone - HTML Admin Template"
                        class="border-2 border-white rounded-lg shadow-md"
                        :src="faker.images[0]"
                        :content="`Uploaded at ${faker.dates[0]}`"
                      />
                    </div>
                    <a href="" class="ml-4 font-medium whitespace-nowrap">
                      {{ faker.products[0].name }}
                    </a>
                  </div>
                </Table.Td>
                <Table.Td class="text-right">
                  ${{ faker.totals[0] + ",000.00" }}
                </Table.Td>
                <Table.Td class="text-right">2</Table.Td>
                <Table.Td class="text-right">
                  ${{ faker.totals[0] * 2 + ",000.00" }}
                </Table.Td>
              </Table.Tr>
            </Table.Tbody>
          </Table>
        </div>
      </div>
    </div>
  </div>
  <!-- END: Transaction Details -->
</template>
