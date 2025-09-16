<script setup lang="ts">
import _ from "lodash";
import Button from "@/components/Base/Button";
import Lucide from "@/components/Base/Lucide";
import { Menu } from "@/components/Base/Headless";
import Table from "@/components/Base/Table";
</script>

<template>
  <div class="flex flex-col items-center mt-8 intro-y sm:flex-row">
    <h2 class="mr-auto text-lg font-medium">Invoice Layout</h2>
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
            <Lucide icon="File" class="w-4 h-4 mr-2" /> Export PDF
          </Menu.Item>
        </Menu.Items>
      </Menu>
    </div>
  </div>
  <!-- BEGIN: Invoice -->
  <div class="mt-5 overflow-hidden intro-y box">
    <div
      class="text-center border-b border-slate-200/60 dark:border-darkmode-400 sm:text-left"
    >
      <div class="px-5 py-10 sm:px-20 sm:py-20">
        <div class="text-3xl font-semibold text-primary">INVOICE</div>
        <div class="mt-2">
          Receipt <span class="font-medium">#1923195</span>
        </div>
        <div class="mt-1">Jan 02, 2021</div>
      </div>
      <div class="flex flex-col px-5 pt-10 pb-10 lg:flex-row sm:px-20 sm:pb-20">
        <div>
          <div class="text-base text-slate-500">Client Details</div>
          <div class="mt-2 text-lg font-medium text-primary">
            Arnold Schwarzenegger
          </div>
          <div class="mt-1">arnodlschwarzenegger@gmail.com</div>
          <div class="mt-1">260 W. Storm Street New York, NY 10025.</div>
        </div>
        <div class="mt-10 lg:text-right lg:mt-0 lg:ml-auto">
          <div class="text-base text-slate-500">Payment to</div>
          <div class="mt-2 text-lg font-medium text-primary">Left4code</div>
          <div class="mt-1">left4code@gmail.com</div>
        </div>
      </div>
    </div>
    <div class="px-5 py-10 sm:px-16 sm:py-20">
      <div class="overflow-x-auto">
        <Table>
          <Table.Thead>
            <Table.Tr>
              <Table.Th
                class="border-b-2 dark:border-darkmode-400 whitespace-nowrap"
              >
                DESCRIPTION
              </Table.Th>
              <Table.Th
                class="text-right border-b-2 dark:border-darkmode-400 whitespace-nowrap"
              >
                QTY
              </Table.Th>
              <Table.Th
                class="text-right border-b-2 dark:border-darkmode-400 whitespace-nowrap"
              >
                PRICE
              </Table.Th>
              <Table.Th
                class="text-right border-b-2 dark:border-darkmode-400 whitespace-nowrap"
              >
                SUBTOTAL
              </Table.Th>
            </Table.Tr>
          </Table.Thead>
          <Table.Tbody>
            <Table.Tr>
              <Table.Td class="border-b dark:border-darkmode-400">
                <div class="font-medium whitespace-nowrap">
                  Midone HTML Admin Template
                </div>
                <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">
                  Regular License
                </div>
              </Table.Td>
              <Table.Td
                class="w-32 text-right border-b dark:border-darkmode-400"
              >
                2
              </Table.Td>
              <Table.Td
                class="w-32 text-right border-b dark:border-darkmode-400"
              >
                $25
              </Table.Td>
              <Table.Td
                class="w-32 font-medium text-right border-b dark:border-darkmode-400"
              >
                $50
              </Table.Td>
            </Table.Tr>
            <Table.Tr>
              <Table.Td class="border-b dark:border-darkmode-400">
                <div class="font-medium whitespace-nowrap">
                  Vuejs Admin Template
                </div>
                <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">
                  Regular License
                </div>
              </Table.Td>
              <Table.Td
                class="w-32 text-right border-b dark:border-darkmode-400"
              >
                1
              </Table.Td>
              <Table.Td
                class="w-32 text-right border-b dark:border-darkmode-400"
              >
                $25
              </Table.Td>
              <Table.Td
                class="w-32 font-medium text-right border-b dark:border-darkmode-400"
              >
                $25
              </Table.Td>
            </Table.Tr>
            <Table.Tr>
              <Table.Td class="border-b dark:border-darkmode-400">
                <div class="font-medium whitespace-nowrap">
                  React Admin Template
                </div>
                <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">
                  Regular License
                </div>
              </Table.Td>
              <Table.Td
                class="w-32 text-right border-b dark:border-darkmode-400"
              >
                1
              </Table.Td>
              <Table.Td
                class="w-32 text-right border-b dark:border-darkmode-400"
              >
                $25
              </Table.Td>
              <Table.Td
                class="w-32 font-medium text-right border-b dark:border-darkmode-400"
              >
                $25
              </Table.Td>
            </Table.Tr>
            <Table.Tr>
              <Table.Td>
                <div class="font-medium whitespace-nowrap">
                  Laravel Admin Template
                </div>
                <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">
                  Regular License
                </div>
              </Table.Td>
              <Table.Td class="w-32 text-right">3</Table.Td>
              <Table.Td class="w-32 text-right">$25</Table.Td>
              <Table.Td class="w-32 font-medium text-right"> $75 </Table.Td>
            </Table.Tr>
          </Table.Tbody>
        </Table>
      </div>
    </div>
    <div class="flex flex-col-reverse px-5 pb-10 sm:px-20 sm:pb-20 sm:flex-row">
      <div class="mt-10 text-center sm:text-left sm:mt-0">
        <div class="text-base text-slate-500">Bank Transfer</div>
        <div class="mt-2 text-lg font-medium text-primary">Elon Musk</div>
        <div class="mt-1">Bank Account : 098347234832</div>
        <div class="mt-1">Code : LFT133243</div>
      </div>
      <div class="text-center sm:text-right sm:ml-auto">
        <div class="text-base text-slate-500">Total Amount</div>
        <div class="mt-2 text-xl font-medium text-primary">$20.600.00</div>
        <div class="mt-1">Taxes included</div>
      </div>
    </div>
  </div>
  <!-- END: Invoice -->
</template>
