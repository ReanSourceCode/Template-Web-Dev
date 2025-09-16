<script setup lang="ts">
import _ from "lodash";
import Table from "@/components/Base/Table";
import Preview from "@/components/Base/Preview";
import { FormSwitch } from "@/components/Base/Form";
</script>

<template>
  <div class="flex items-center mt-8 intro-y">
    <h2 class="mr-auto text-lg font-medium">Regular Table</h2>
  </div>
  <div class="grid grid-cols-12 gap-6 mt-5">
    <div class="col-span-12 intro-y lg:col-span-6">
      <!-- BEGIN: Basic Table -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60"
        >
          <h2 class="mr-auto text-base font-medium">Basic Table</h2>
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
            <div class="overflow-x-auto">
              <Table>
                <Table.Thead>
                  <Table.Tr>
                    <Table.Th class="whitespace-nowrap">#</Table.Th>
                    <Table.Th class="whitespace-nowrap"> First Name </Table.Th>
                    <Table.Th class="whitespace-nowrap"> Last Name </Table.Th>
                    <Table.Th class="whitespace-nowrap"> Username </Table.Th>
                  </Table.Tr>
                </Table.Thead>
                <Table.Tbody>
                  <Table.Tr>
                    <Table.Td>1</Table.Td>
                    <Table.Td>Angelina</Table.Td>
                    <Table.Td>Jolie</Table.Td>
                    <Table.Td>@angelinajolie</Table.Td>
                  </Table.Tr>
                  <Table.Tr>
                    <Table.Td>2</Table.Td>
                    <Table.Td>Brad</Table.Td>
                    <Table.Td>Pitt</Table.Td>
                    <Table.Td>@bradpitt</Table.Td>
                  </Table.Tr>
                  <Table.Tr>
                    <Table.Td>3</Table.Td>
                    <Table.Td>Charlie</Table.Td>
                    <Table.Td>Hunnam</Table.Td>
                    <Table.Td>@charliehunnam</Table.Td>
                  </Table.Tr>
                </Table.Tbody>
              </Table>
              <Table dark class="mt-5">
                <Table.Thead>
                  <Table.Tr>
                    <Table.Th class="whitespace-nowrap">#</Table.Th>
                    <Table.Th class="whitespace-nowrap"> First Name </Table.Th>
                    <Table.Th class="whitespace-nowrap"> Last Name </Table.Th>
                    <Table.Th class="whitespace-nowrap"> Username </Table.Th>
                  </Table.Tr>
                </Table.Thead>
                <Table.Tbody>
                  <Table.Tr>
                    <Table.Td>1</Table.Td>
                    <Table.Td>Angelina</Table.Td>
                    <Table.Td>Jolie</Table.Td>
                    <Table.Td>@angelinajolie</Table.Td>
                  </Table.Tr>
                  <Table.Tr>
                    <Table.Td>2</Table.Td>
                    <Table.Td>Brad</Table.Td>
                    <Table.Td>Pitt</Table.Td>
                    <Table.Td>@bradpitt</Table.Td>
                  </Table.Tr>
                  <Table.Tr>
                    <Table.Td>3</Table.Td>
                    <Table.Td>Charlie</Table.Td>
                    <Table.Td>Hunnam</Table.Td>
                    <Table.Td>@charliehunnam</Table.Td>
                  </Table.Tr>
                </Table.Tbody>
              </Table>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="overflow-x-auto">
                <Table>
                  <Table.Thead>
                    <Table.Tr>
                      <Table.Th class="whitespace-nowrap">#</Table.Th>
                      <Table.Th class="whitespace-nowrap">
                        First Name
                      </Table.Th>
                      <Table.Th class="whitespace-nowrap"> Last Name </Table.Th>
                      <Table.Th class="whitespace-nowrap"> Username </Table.Th>
                    </Table.Tr>
                  </Table.Thead>
                  <Table.Tbody>
                    <Table.Tr>
                      <Table.Td>1</Table.Td>
                      <Table.Td>Angelina</Table.Td>
                      <Table.Td>Jolie</Table.Td>
                      <Table.Td>@angelinajolie</Table.Td>
                    </Table.Tr>
                    <Table.Tr>
                      <Table.Td>2</Table.Td>
                      <Table.Td>Brad</Table.Td>
                      <Table.Td>Pitt</Table.Td>
                      <Table.Td>@bradpitt</Table.Td>
                    </Table.Tr>
                    <Table.Tr>
                      <Table.Td>3</Table.Td>
                      <Table.Td>Charlie</Table.Td>
                      <Table.Td>Hunnam</Table.Td>
                      <Table.Td>@charliehunnam</Table.Td>
                    </Table.Tr>
                  </Table.Tbody>
                </Table>
                <Table dark class="mt-5">
                  <Table.Thead>
                    <Table.Tr>
                      <Table.Th class="whitespace-nowrap">#</Table.Th>
                      <Table.Th class="whitespace-nowrap">
                        First Name
                      </Table.Th>
                      <Table.Th class="whitespace-nowrap"> Last Name </Table.Th>
                      <Table.Th class="whitespace-nowrap"> Username </Table.Th>
                    </Table.Tr>
                  </Table.Thead>
                  <Table.Tbody>
                    <Table.Tr>
                      <Table.Td>1</Table.Td>
                      <Table.Td>Angelina</Table.Td>
                      <Table.Td>Jolie</Table.Td>
                      <Table.Td>@angelinajolie</Table.Td>
                    </Table.Tr>
                    <Table.Tr>
                      <Table.Td>2</Table.Td>
                      <Table.Td>Brad</Table.Td>
                      <Table.Td>Pitt</Table.Td>
                      <Table.Td>@bradpitt</Table.Td>
                    </Table.Tr>
                    <Table.Tr>
                      <Table.Td>3</Table.Td>
                      <Table.Td>Charlie</Table.Td>
                      <Table.Td>Hunnam</Table.Td>
                      <Table.Td>@charliehunnam</Table.Td>
                    </Table.Tr>
                  </Table.Tbody>
                </Table>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Basic Table -->
      <!-- BEGIN: Bordered Table -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60"
        >
          <h2 class="mr-auto text-base font-medium">Bordered Table</h2>
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
            <div class="overflow-x-auto">
              <Table bordered>
                <Table.Thead>
                  <Table.Tr>
                    <Table.Th class="whitespace-nowrap">#</Table.Th>
                    <Table.Th class="whitespace-nowrap"> First Name </Table.Th>
                    <Table.Th class="whitespace-nowrap"> Last Name </Table.Th>
                    <Table.Th class="whitespace-nowrap"> Username </Table.Th>
                  </Table.Tr>
                </Table.Thead>
                <Table.Tbody>
                  <Table.Tr>
                    <Table.Td>1</Table.Td>
                    <Table.Td>Angelina</Table.Td>
                    <Table.Td>Jolie</Table.Td>
                    <Table.Td>@angelinajolie</Table.Td>
                  </Table.Tr>
                  <Table.Tr>
                    <Table.Td>2</Table.Td>
                    <Table.Td>Brad</Table.Td>
                    <Table.Td>Pitt</Table.Td>
                    <Table.Td>@bradpitt</Table.Td>
                  </Table.Tr>
                  <Table.Tr>
                    <Table.Td>3</Table.Td>
                    <Table.Td>Charlie</Table.Td>
                    <Table.Td>Hunnam</Table.Td>
                    <Table.Td>@charliehunnam</Table.Td>
                  </Table.Tr>
                </Table.Tbody>
              </Table>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="overflow-x-auto">
                <Table bordered>
                  <Table.Thead>
                    <Table.Tr>
                      <Table.Th class="whitespace-nowrap">#</Table.Th>
                      <Table.Th class="whitespace-nowrap">
                        First Name
                      </Table.Th>
                      <Table.Th class="whitespace-nowrap"> Last Name </Table.Th>
                      <Table.Th class="whitespace-nowrap"> Username </Table.Th>
                    </Table.Tr>
                  </Table.Thead>
                  <Table.Tbody>
                    <Table.Tr>
                      <Table.Td>1</Table.Td>
                      <Table.Td>Angelina</Table.Td>
                      <Table.Td>Jolie</Table.Td>
                      <Table.Td>@angelinajolie</Table.Td>
                    </Table.Tr>
                    <Table.Tr>
                      <Table.Td>2</Table.Td>
                      <Table.Td>Brad</Table.Td>
                      <Table.Td>Pitt</Table.Td>
                      <Table.Td>@bradpitt</Table.Td>
                    </Table.Tr>
                    <Table.Tr>
                      <Table.Td>3</Table.Td>
                      <Table.Td>Charlie</Table.Td>
                      <Table.Td>Hunnam</Table.Td>
                      <Table.Td>@charliehunnam</Table.Td>
                    </Table.Tr>
                  </Table.Tbody>
                </Table>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Bordered Table -->
      <!-- BEGIN: Hoverable Table -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60"
        >
          <h2 class="mr-auto text-base font-medium">Hoverable Table</h2>
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
            <div class="overflow-x-auto">
              <Table bordered hover>
                <Table.Thead>
                  <Table.Tr>
                    <Table.Th class="whitespace-nowrap">#</Table.Th>
                    <Table.Th class="whitespace-nowrap"> First Name </Table.Th>
                    <Table.Th class="whitespace-nowrap"> Last Name </Table.Th>
                    <Table.Th class="whitespace-nowrap"> Username </Table.Th>
                  </Table.Tr>
                </Table.Thead>
                <Table.Tbody>
                  <Table.Tr>
                    <Table.Td>1</Table.Td>
                    <Table.Td>Angelina</Table.Td>
                    <Table.Td>Jolie</Table.Td>
                    <Table.Td>@angelinajolie</Table.Td>
                  </Table.Tr>
                  <Table.Tr>
                    <Table.Td>2</Table.Td>
                    <Table.Td>Brad</Table.Td>
                    <Table.Td>Pitt</Table.Td>
                    <Table.Td>@bradpitt</Table.Td>
                  </Table.Tr>
                  <Table.Tr>
                    <Table.Td>3</Table.Td>
                    <Table.Td>Charlie</Table.Td>
                    <Table.Td>Hunnam</Table.Td>
                    <Table.Td>@charliehunnam</Table.Td>
                  </Table.Tr>
                </Table.Tbody>
              </Table>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="overflow-x-auto">
                <Table bordered hover>
                  <Table.Thead>
                    <Table.Tr>
                      <Table.Th class="whitespace-nowrap">#</Table.Th>
                      <Table.Th class="whitespace-nowrap">
                        First Name
                      </Table.Th>
                      <Table.Th class="whitespace-nowrap"> Last Name </Table.Th>
                      <Table.Th class="whitespace-nowrap"> Username </Table.Th>
                    </Table.Tr>
                  </Table.Thead>
                  <Table.Tbody>
                    <Table.Tr>
                      <Table.Td>1</Table.Td>
                      <Table.Td>Angelina</Table.Td>
                      <Table.Td>Jolie</Table.Td>
                      <Table.Td>@angelinajolie</Table.Td>
                    </Table.Tr>
                    <Table.Tr>
                      <Table.Td>2</Table.Td>
                      <Table.Td>Brad</Table.Td>
                      <Table.Td>Pitt</Table.Td>
                      <Table.Td>@bradpitt</Table.Td>
                    </Table.Tr>
                    <Table.Tr>
                      <Table.Td>3</Table.Td>
                      <Table.Td>Charlie</Table.Td>
                      <Table.Td>Hunnam</Table.Td>
                      <Table.Td>@charliehunnam</Table.Td>
                    </Table.Tr>
                  </Table.Tbody>
                </Table>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Hoverable Table -->
      <!-- BEGIN: Table Row States -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60"
        >
          <h2 class="mr-auto text-base font-medium">Table Row States</h2>
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
            <div class="overflow-x-auto">
              <Table>
                <Table.Thead>
                  <Table.Tr>
                    <Table.Th class="whitespace-nowrap">#</Table.Th>
                    <Table.Th class="whitespace-nowrap"> First Name </Table.Th>
                    <Table.Th class="whitespace-nowrap"> Last Name </Table.Th>
                    <Table.Th class="whitespace-nowrap"> Username </Table.Th>
                  </Table.Tr>
                </Table.Thead>
                <Table.Tbody>
                  <Table.Tr class="text-white bg-primary">
                    <Table.Td>1</Table.Td>
                    <Table.Td>Angelina</Table.Td>
                    <Table.Td>Jolie</Table.Td>
                    <Table.Td>@angelinajolie</Table.Td>
                  </Table.Tr>
                  <Table.Tr class="text-white bg-danger">
                    <Table.Td>2</Table.Td>
                    <Table.Td>Brad</Table.Td>
                    <Table.Td>Pitt</Table.Td>
                    <Table.Td>@bradpitt</Table.Td>
                  </Table.Tr>
                  <Table.Tr class="bg-warning">
                    <Table.Td>3</Table.Td>
                    <Table.Td>Charlie</Table.Td>
                    <Table.Td>Hunnam</Table.Td>
                    <Table.Td>@charliehunnam</Table.Td>
                  </Table.Tr>
                </Table.Tbody>
              </Table>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="overflow-x-auto">
                <Table>
                  <Table.Thead>
                    <Table.Tr>
                      <Table.Th class="whitespace-nowrap">#</Table.Th>
                      <Table.Th class="whitespace-nowrap">
                        First Name
                      </Table.Th>
                      <Table.Th class="whitespace-nowrap"> Last Name </Table.Th>
                      <Table.Th class="whitespace-nowrap"> Username </Table.Th>
                    </Table.Tr>
                  </Table.Thead>
                  <Table.Tbody>
                    <Table.Tr class="text-white bg-primary">
                      <Table.Td>1</Table.Td>
                      <Table.Td>Angelina</Table.Td>
                      <Table.Td>Jolie</Table.Td>
                      <Table.Td>@angelinajolie</Table.Td>
                    </Table.Tr>
                    <Table.Tr class="text-white bg-danger">
                      <Table.Td>2</Table.Td>
                      <Table.Td>Brad</Table.Td>
                      <Table.Td>Pitt</Table.Td>
                      <Table.Td>@bradpitt</Table.Td>
                    </Table.Tr>
                    <Table.Tr class="bg-warning">
                      <Table.Td>3</Table.Td>
                      <Table.Td>Charlie</Table.Td>
                      <Table.Td>Hunnam</Table.Td>
                      <Table.Td>@charliehunnam</Table.Td>
                    </Table.Tr>
                  </Table.Tbody>
                </Table>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Table Row States -->
    </div>
    <div class="col-span-12 intro-y lg:col-span-6">
      <!-- BEGIN: Table Head Options -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60"
        >
          <h2 class="mr-auto text-base font-medium">Table Head Options</h2>
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
            <div class="overflow-x-auto">
              <Table>
                <Table.Thead variant="dark">
                  <Table.Tr>
                    <Table.Th class="whitespace-nowrap">#</Table.Th>
                    <Table.Th class="whitespace-nowrap"> First Name </Table.Th>
                    <Table.Th class="whitespace-nowrap"> Last Name </Table.Th>
                    <Table.Th class="whitespace-nowrap"> Username </Table.Th>
                  </Table.Tr>
                </Table.Thead>
                <Table.Tbody>
                  <Table.Tr>
                    <Table.Td>1</Table.Td>
                    <Table.Td>Angelina</Table.Td>
                    <Table.Td>Jolie</Table.Td>
                    <Table.Td>@angelinajolie</Table.Td>
                  </Table.Tr>
                  <Table.Tr>
                    <Table.Td>2</Table.Td>
                    <Table.Td>Brad</Table.Td>
                    <Table.Td>Pitt</Table.Td>
                    <Table.Td>@bradpitt</Table.Td>
                  </Table.Tr>
                  <Table.Tr>
                    <Table.Td>3</Table.Td>
                    <Table.Td>Charlie</Table.Td>
                    <Table.Td>Hunnam</Table.Td>
                    <Table.Td>@charliehunnam</Table.Td>
                  </Table.Tr>
                </Table.Tbody>
              </Table>
              <Table class="mt-5">
                <Table.Thead variant="light">
                  <Table.Tr>
                    <Table.Th class="whitespace-nowrap">#</Table.Th>
                    <Table.Th class="whitespace-nowrap"> First Name </Table.Th>
                    <Table.Th class="whitespace-nowrap"> Last Name </Table.Th>
                    <Table.Th class="whitespace-nowrap"> Username </Table.Th>
                  </Table.Tr>
                </Table.Thead>
                <Table.Tbody>
                  <Table.Tr>
                    <Table.Td>1</Table.Td>
                    <Table.Td>Angelina</Table.Td>
                    <Table.Td>Jolie</Table.Td>
                    <Table.Td>@angelinajolie</Table.Td>
                  </Table.Tr>
                  <Table.Tr>
                    <Table.Td>2</Table.Td>
                    <Table.Td>Brad</Table.Td>
                    <Table.Td>Pitt</Table.Td>
                    <Table.Td>@bradpitt</Table.Td>
                  </Table.Tr>
                  <Table.Tr>
                    <Table.Td>3</Table.Td>
                    <Table.Td>Charlie</Table.Td>
                    <Table.Td>Hunnam</Table.Td>
                    <Table.Td>@charliehunnam</Table.Td>
                  </Table.Tr>
                </Table.Tbody>
              </Table>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="overflow-x-auto">
                <Table>
                  <Table.Thead variant="dark">
                    <Table.Tr>
                      <Table.Th class="whitespace-nowrap">#</Table.Th>
                      <Table.Th class="whitespace-nowrap">
                        First Name
                      </Table.Th>
                      <Table.Th class="whitespace-nowrap"> Last Name </Table.Th>
                      <Table.Th class="whitespace-nowrap"> Username </Table.Th>
                    </Table.Tr>
                  </Table.Thead>
                  <Table.Tbody>
                    <Table.Tr>
                      <Table.Td>1</Table.Td>
                      <Table.Td>Angelina</Table.Td>
                      <Table.Td>Jolie</Table.Td>
                      <Table.Td>@angelinajolie</Table.Td>
                    </Table.Tr>
                    <Table.Tr>
                      <Table.Td>2</Table.Td>
                      <Table.Td>Brad</Table.Td>
                      <Table.Td>Pitt</Table.Td>
                      <Table.Td>@bradpitt</Table.Td>
                    </Table.Tr>
                    <Table.Tr>
                      <Table.Td>3</Table.Td>
                      <Table.Td>Charlie</Table.Td>
                      <Table.Td>Hunnam</Table.Td>
                      <Table.Td>@charliehunnam</Table.Td>
                    </Table.Tr>
                  </Table.Tbody>
                </Table>
                <Table class="mt-5">
                  <Table.Thead variant="light">
                    <Table.Tr>
                      <Table.Th class="whitespace-nowrap">#</Table.Th>
                      <Table.Th class="whitespace-nowrap">
                        First Name
                      </Table.Th>
                      <Table.Th class="whitespace-nowrap"> Last Name </Table.Th>
                      <Table.Th class="whitespace-nowrap"> Username </Table.Th>
                    </Table.Tr>
                  </Table.Thead>
                  <Table.Tbody>
                    <Table.Tr>
                      <Table.Td>1</Table.Td>
                      <Table.Td>Angelina</Table.Td>
                      <Table.Td>Jolie</Table.Td>
                      <Table.Td>@angelinajolie</Table.Td>
                    </Table.Tr>
                    <Table.Tr>
                      <Table.Td>2</Table.Td>
                      <Table.Td>Brad</Table.Td>
                      <Table.Td>Pitt</Table.Td>
                      <Table.Td>@bradpitt</Table.Td>
                    </Table.Tr>
                    <Table.Tr>
                      <Table.Td>3</Table.Td>
                      <Table.Td>Charlie</Table.Td>
                      <Table.Td>Hunnam</Table.Td>
                      <Table.Td>@charliehunnam</Table.Td>
                    </Table.Tr>
                  </Table.Tbody>
                </Table>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Table Head Options -->
      <!-- BEGIN: Responsive Table -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60"
        >
          <h2 class="mr-auto text-base font-medium">Responsive Table</h2>
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
            <div class="overflow-x-auto">
              <Table>
                <Table.Thead>
                  <Table.Tr>
                    <Table.Th class="whitespace-nowrap">#</Table.Th>
                    <Table.Th class="whitespace-nowrap"> First Name </Table.Th>
                    <Table.Th class="whitespace-nowrap"> Last Name </Table.Th>
                    <Table.Th class="whitespace-nowrap"> Username </Table.Th>
                    <Table.Th class="whitespace-nowrap"> Email </Table.Th>
                    <Table.Th class="whitespace-nowrap"> Address </Table.Th>
                  </Table.Tr>
                </Table.Thead>
                <Table.Tbody>
                  <Table.Tr>
                    <Table.Td class="whitespace-nowrap">1</Table.Td>
                    <Table.Td class="whitespace-nowrap"> Angelina </Table.Td>
                    <Table.Td class="whitespace-nowrap"> Jolie </Table.Td>
                    <Table.Td class="whitespace-nowrap">
                      @angelinajolie
                    </Table.Td>
                    <Table.Td class="whitespace-nowrap">
                      angelinajolie@gmail.com
                    </Table.Td>
                    <Table.Td class="whitespace-nowrap">
                      260 W. Storm Street New York, NY 10025.
                    </Table.Td>
                  </Table.Tr>
                  <Table.Tr>
                    <Table.Td class="whitespace-nowrap">2</Table.Td>
                    <Table.Td class="whitespace-nowrap"> Brad </Table.Td>
                    <Table.Td class="whitespace-nowrap"> Pitt </Table.Td>
                    <Table.Td class="whitespace-nowrap"> @bradpitt </Table.Td>
                    <Table.Td class="whitespace-nowrap">
                      bradpitt@gmail.com
                    </Table.Td>
                    <Table.Td class="whitespace-nowrap">
                      47 Division St. Buffalo, NY 14241.
                    </Table.Td>
                  </Table.Tr>
                  <Table.Tr>
                    <Table.Td class="whitespace-nowrap">3</Table.Td>
                    <Table.Td class="whitespace-nowrap"> Charlie </Table.Td>
                    <Table.Td class="whitespace-nowrap"> Hunnam </Table.Td>
                    <Table.Td class="whitespace-nowrap">
                      @charliehunnam
                    </Table.Td>
                    <Table.Td class="whitespace-nowrap">
                      charliehunnam@gmail.com
                    </Table.Td>
                    <Table.Td class="whitespace-nowrap">
                      8023 Amerige Street Harriman, NY 10926.
                    </Table.Td>
                  </Table.Tr>
                </Table.Tbody>
              </Table>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="overflow-x-auto">
                <Table>
                  <Table.Thead>
                    <Table.Tr>
                      <Table.Th class="whitespace-nowrap">#</Table.Th>
                      <Table.Th class="whitespace-nowrap">
                        First Name
                      </Table.Th>
                      <Table.Th class="whitespace-nowrap"> Last Name </Table.Th>
                      <Table.Th class="whitespace-nowrap"> Username </Table.Th>
                      <Table.Th class="whitespace-nowrap"> Email </Table.Th>
                      <Table.Th class="whitespace-nowrap"> Address </Table.Th>
                    </Table.Tr>
                  </Table.Thead>
                  <Table.Tbody>
                    <Table.Tr>
                      <Table.Td class="whitespace-nowrap">1</Table.Td>
                      <Table.Td class="whitespace-nowrap"> Angelina </Table.Td>
                      <Table.Td class="whitespace-nowrap"> Jolie </Table.Td>
                      <Table.Td class="whitespace-nowrap">
                        @angelinajolie
                      </Table.Td>
                      <Table.Td class="whitespace-nowrap">
                        angelinajolie@gmail.com
                      </Table.Td>
                      <Table.Td class="whitespace-nowrap">
                        260 W. Storm Street New York, NY 10025.
                      </Table.Td>
                    </Table.Tr>
                    <Table.Tr>
                      <Table.Td class="whitespace-nowrap">2</Table.Td>
                      <Table.Td class="whitespace-nowrap"> Brad </Table.Td>
                      <Table.Td class="whitespace-nowrap"> Pitt </Table.Td>
                      <Table.Td class="whitespace-nowrap"> @bradpitt </Table.Td>
                      <Table.Td class="whitespace-nowrap">
                        bradpitt@gmail.com
                      </Table.Td>
                      <Table.Td class="whitespace-nowrap">
                        47 Division St. Buffalo, NY 14241.
                      </Table.Td>
                    </Table.Tr>
                    <Table.Tr>
                      <Table.Td class="whitespace-nowrap">3</Table.Td>
                      <Table.Td class="whitespace-nowrap"> Charlie </Table.Td>
                      <Table.Td class="whitespace-nowrap"> Hunnam </Table.Td>
                      <Table.Td class="whitespace-nowrap">
                        @charliehunnam
                      </Table.Td>
                      <Table.Td class="whitespace-nowrap">
                        charliehunnam@gmail.com
                      </Table.Td>
                      <Table.Td class="whitespace-nowrap">
                        8023 Amerige Street Harriman, NY 10926.
                      </Table.Td>
                    </Table.Tr>
                  </Table.Tbody>
                </Table>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Responsive Table -->
      <!-- BEGIN: Small Table -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60"
        >
          <h2 class="mr-auto text-base font-medium">Small Table</h2>
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
            <div class="overflow-x-auto">
              <Table sm>
                <Table.Thead>
                  <Table.Tr>
                    <Table.Th class="whitespace-nowrap">#</Table.Th>
                    <Table.Th class="whitespace-nowrap"> First Name </Table.Th>
                    <Table.Th class="whitespace-nowrap"> Last Name </Table.Th>
                    <Table.Th class="whitespace-nowrap"> Username </Table.Th>
                  </Table.Tr>
                </Table.Thead>
                <Table.Tbody>
                  <Table.Tr>
                    <Table.Td>1</Table.Td>
                    <Table.Td>Angelina</Table.Td>
                    <Table.Td>Jolie</Table.Td>
                    <Table.Td>@angelinajolie</Table.Td>
                  </Table.Tr>
                  <Table.Tr>
                    <Table.Td>2</Table.Td>
                    <Table.Td>Brad</Table.Td>
                    <Table.Td>Pitt</Table.Td>
                    <Table.Td>@bradpitt</Table.Td>
                  </Table.Tr>
                  <Table.Tr>
                    <Table.Td>3</Table.Td>
                    <Table.Td>Charlie</Table.Td>
                    <Table.Td>Hunnam</Table.Td>
                    <Table.Td>@charliehunnam</Table.Td>
                  </Table.Tr>
                </Table.Tbody>
              </Table>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="overflow-x-auto">
                <Table sm>
                  <Table.Thead>
                    <Table.Tr>
                      <Table.Th class="whitespace-nowrap">#</Table.Th>
                      <Table.Th class="whitespace-nowrap">
                        First Name
                      </Table.Th>
                      <Table.Th class="whitespace-nowrap"> Last Name </Table.Th>
                      <Table.Th class="whitespace-nowrap"> Username </Table.Th>
                    </Table.Tr>
                  </Table.Thead>
                  <Table.Tbody>
                    <Table.Tr>
                      <Table.Td>1</Table.Td>
                      <Table.Td>Angelina</Table.Td>
                      <Table.Td>Jolie</Table.Td>
                      <Table.Td>@angelinajolie</Table.Td>
                    </Table.Tr>
                    <Table.Tr>
                      <Table.Td>2</Table.Td>
                      <Table.Td>Brad</Table.Td>
                      <Table.Td>Pitt</Table.Td>
                      <Table.Td>@bradpitt</Table.Td>
                    </Table.Tr>
                    <Table.Tr>
                      <Table.Td>3</Table.Td>
                      <Table.Td>Charlie</Table.Td>
                      <Table.Td>Hunnam</Table.Td>
                      <Table.Td>@charliehunnam</Table.Td>
                    </Table.Tr>
                  </Table.Tbody>
                </Table>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Small Table -->
      <!-- BEGIN: Striped Rows -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60"
        >
          <h2 class="mr-auto text-base font-medium">Striped Rows</h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-8">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-8"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div class="p-5">
          <Preview.Panel>
            <div class="overflow-x-auto">
              <Table striped>
                <Table.Thead>
                  <Table.Tr>
                    <Table.Th class="whitespace-nowrap">#</Table.Th>
                    <Table.Th class="whitespace-nowrap"> First Name </Table.Th>
                    <Table.Th class="whitespace-nowrap"> Last Name </Table.Th>
                    <Table.Th class="whitespace-nowrap"> Username </Table.Th>
                  </Table.Tr>
                </Table.Thead>
                <Table.Tbody>
                  <Table.Tr>
                    <Table.Td>1</Table.Td>
                    <Table.Td>Angelina</Table.Td>
                    <Table.Td>Jolie</Table.Td>
                    <Table.Td>@angelinajolie</Table.Td>
                  </Table.Tr>
                  <Table.Tr>
                    <Table.Td>2</Table.Td>
                    <Table.Td>Brad</Table.Td>
                    <Table.Td>Pitt</Table.Td>
                    <Table.Td>@bradpitt</Table.Td>
                  </Table.Tr>
                  <Table.Tr>
                    <Table.Td>3</Table.Td>
                    <Table.Td>Charlie</Table.Td>
                    <Table.Td>Hunnam</Table.Td>
                    <Table.Td>@charliehunnam</Table.Td>
                  </Table.Tr>
                </Table.Tbody>
              </Table>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="overflow-x-auto">
                <Table striped>
                  <Table.Thead>
                    <Table.Tr>
                      <Table.Th class="whitespace-nowrap">#</Table.Th>
                      <Table.Th class="whitespace-nowrap">
                        First Name
                      </Table.Th>
                      <Table.Th class="whitespace-nowrap"> Last Name </Table.Th>
                      <Table.Th class="whitespace-nowrap"> Username </Table.Th>
                    </Table.Tr>
                  </Table.Thead>
                  <Table.Tbody>
                    <Table.Tr>
                      <Table.Td>1</Table.Td>
                      <Table.Td>Angelina</Table.Td>
                      <Table.Td>Jolie</Table.Td>
                      <Table.Td>@angelinajolie</Table.Td>
                    </Table.Tr>
                    <Table.Tr>
                      <Table.Td>2</Table.Td>
                      <Table.Td>Brad</Table.Td>
                      <Table.Td>Pitt</Table.Td>
                      <Table.Td>@bradpitt</Table.Td>
                    </Table.Tr>
                    <Table.Tr>
                      <Table.Td>3</Table.Td>
                      <Table.Td>Charlie</Table.Td>
                      <Table.Td>Hunnam</Table.Td>
                      <Table.Td>@charliehunnam</Table.Td>
                    </Table.Tr>
                  </Table.Tbody>
                </Table>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Striped Rows -->
    </div>
  </div>
</template>
