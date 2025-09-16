<script setup lang="ts">
import "@/assets/css/vendors/tabulator.css";
import Lucide from "@/components/Base/Lucide";
import { Menu } from "@/components/Base/Headless";
import Button from "@/components/Base/Button";
import { FormInput, FormSelect } from "@/components/Base/Form";
import * as xlsx from "xlsx";
import { onMounted, ref, reactive } from "vue";
import { createIcons, icons } from "lucide";
import { TabulatorFull as Tabulator } from "tabulator-tables";
import { stringToHTML } from "@/utils/helper";

interface Response {
  name?: string;
  category?: string;
  images?: string[];
  status?: string;
}

const tableRef = ref<HTMLDivElement>();
const tabulator = ref<Tabulator>();
const filter = reactive({
  field: "name",
  type: "like",
  value: "",
});
const setFilter = (value: typeof filter) => {
  Object.assign(filter, value);
};

const imageAssets = import.meta.glob<{
  default: string;
}>("/src/assets/images/fakers/*.{jpg,jpeg,png,svg}", { eager: true });

const initTabulator = () => {
  if (tableRef.value) {
    tabulator.value = new Tabulator(tableRef.value, {
      ajaxURL: "https://dummy-data.left4code.com",
      paginationMode: "remote",
      filterMode: "remote",
      sortMode: "remote",
      printAsHtml: true,
      printStyled: true,
      pagination: true,
      paginationSize: 10,
      paginationSizeSelector: [10, 20, 30, 40],
      layout: "fitColumns",
      responsiveLayout: "collapse",
      placeholder: "No matching records found",
      columns: [
        {
          title: "",
          formatter: "responsiveCollapse",
          width: 40,
          minWidth: 30,
          hozAlign: "center",
          resizable: false,
          headerSort: false,
        },

        // For HTML table
        {
          title: "PRODUCT NAME",
          minWidth: 200,
          responsive: 0,
          field: "name",
          vertAlign: "middle",
          print: false,
          download: false,
          formatter(cell) {
            const response: Response = cell.getData();
            return `<div>
                <div class="font-medium whitespace-nowrap">${response.name}</div>
                <div class="text-xs text-slate-500 whitespace-nowrap">${response.category}</div>
              </div>`;
          },
        },
        {
          title: "IMAGES",
          minWidth: 200,
          field: "images",
          hozAlign: "center",
          headerHozAlign: "center",
          vertAlign: "middle",
          print: false,
          download: false,
          formatter(cell) {
            const response: Response = cell.getData();
            return response.images
              ? `<div class="flex lg:justify-center">
                    <div class="w-10 h-10 intro-x image-fit">
                      <img alt="Midone Tailwind HTML Admin Template" class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="${
                        imageAssets[
                          "/src/assets/images/fakers/" + response.images[0]
                        ].default
                      }">
                    </div>
                    <div class="w-10 h-10 -ml-5 intro-x image-fit">
                      <img alt="Midone Tailwind HTML Admin Template" class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="${
                        imageAssets[
                          "/src/assets/images/fakers/" + response.images[1]
                        ].default
                      }">
                    </div>
                    <div class="w-10 h-10 -ml-5 intro-x image-fit">
                      <img alt="Midone Tailwind HTML Admin Template" class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="${
                        imageAssets[
                          "/src/assets/images/fakers/" + response.images[2]
                        ].default
                      }">
                    </div>
                </div>`
              : "";
          },
        },
        {
          title: "REMAINING STOCK",
          minWidth: 200,
          field: "remaining_stock",
          hozAlign: "center",
          headerHozAlign: "center",
          vertAlign: "middle",
          print: false,
          download: false,
        },
        {
          title: "STATUS",
          minWidth: 200,
          field: "status",
          hozAlign: "center",
          headerHozAlign: "center",
          vertAlign: "middle",
          print: false,
          download: false,
          formatter(cell) {
            const response: Response = cell.getData();
            return `<div class="flex items-center lg:justify-center ${
              response.status ? "text-success" : "text-danger"
            }">
                <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> ${
                  response.status ? "Active" : "Inactive"
                }
              </div>`;
          },
        },
        {
          title: "ACTIONS",
          minWidth: 200,
          field: "actions",
          responsive: 1,
          hozAlign: "center",
          headerHozAlign: "center",
          vertAlign: "middle",
          print: false,
          download: false,
          formatter() {
            const a =
              stringToHTML(`<div class="flex items-center lg:justify-center">
                  <a class="flex items-center mr-3" href="javascript:;">
                    <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                  </a>
                  <a class="flex items-center text-danger" href="javascript:;">
                    <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                  </a>
                </div>`);
            a.addEventListener("click", function () {
              // On click actions
            });
            return a;
          },
        },

        // For print format
        {
          title: "PRODUCT NAME",
          field: "name",
          visible: false,
          print: true,
          download: true,
        },
        {
          title: "CATEGORY",
          field: "category",
          visible: false,
          print: true,
          download: true,
        },
        {
          title: "REMAINING STOCK",
          field: "remaining_stock",
          visible: false,
          print: true,
          download: true,
        },
        {
          title: "STATUS",
          field: "status",
          visible: false,
          print: true,
          download: true,
          formatterPrint(cell) {
            return cell.getValue() ? "Active" : "Inactive";
          },
        },
        {
          title: "IMAGE 1",
          field: "images",
          visible: false,
          print: true,
          download: true,
          formatterPrint(cell) {
            return cell.getValue()[0];
          },
        },
        {
          title: "IMAGE 2",
          field: "images",
          visible: false,
          print: true,
          download: true,
          formatterPrint(cell) {
            return cell.getValue()[1];
          },
        },
        {
          title: "IMAGE 3",
          field: "images",
          visible: false,
          print: true,
          download: true,
          formatterPrint(cell) {
            return cell.getValue()[2];
          },
        },
      ],
    });
  }

  tabulator.value?.on("renderComplete", () => {
    createIcons({
      icons,
      attrs: {
        "stroke-width": 1.5,
      },
      nameAttr: "data-lucide",
    });
  });
};

// Redraw table onresize
const reInitOnResizeWindow = () => {
  window.addEventListener("resize", () => {
    if (tabulator.value) {
      tabulator.value.redraw();
      createIcons({
        icons,
        attrs: {
          "stroke-width": 1.5,
        },
        nameAttr: "data-lucide",
      });
    }
  });
};

// Filter function
const onFilter = () => {
  if (tabulator.value) {
    tabulator.value.setFilter(filter.field, filter.type, filter.value);
  }
};

// On reset filter
const onResetFilter = () => {
  setFilter({
    ...filter,
    field: "name",
    type: "like",
    value: "",
  });
  onFilter();
};

// Export
const onExportCsv = () => {
  if (tabulator.value) {
    tabulator.value.download("csv", "data.csv");
  }
};

const onExportJson = () => {
  if (tabulator.value) {
    tabulator.value.download("json", "data.json");
  }
};

const onExportXlsx = () => {
  if (tabulator.value) {
    (window as any).XLSX = xlsx;
    tabulator.value.download("xlsx", "data.xlsx", {
      sheetName: "Products",
    });
  }
};

const onExportHtml = () => {
  if (tabulator.value) {
    tabulator.value.download("html", "data.html", {
      style: true,
    });
  }
};

// Print
const onPrint = () => {
  if (tabulator.value) {
    tabulator.value.print();
  }
};

onMounted(() => {
  initTabulator();
  reInitOnResizeWindow();
});
</script>

<template>
  <div class="flex flex-col items-center mt-8 intro-y sm:flex-row">
    <h2 class="mr-auto text-lg font-medium">Tabulator</h2>
    <div class="flex w-full mt-4 sm:w-auto sm:mt-0">
      <Button variant="primary" class="mr-2 shadow-md">
        Add New Product
      </Button>
      <Menu class="ml-auto sm:ml-0">
        <Menu.Button :as="Button" class="px-2 font-normal !box">
          <span class="flex items-center justify-center w-5 h-5">
            <Lucide icon="Plus" class="w-4 h-4" />
          </span>
        </Menu.Button>
        <Menu.Items class="w-40">
          <Menu.Item>
            <Lucide icon="FilePlus" class="w-4 h-4 mr-2" /> New Category
          </Menu.Item>
          <Menu.Item>
            <Lucide icon="UserPlus" class="w-4 h-4 mr-2" /> New Group
          </Menu.Item>
        </Menu.Items>
      </Menu>
    </div>
  </div>
  <!-- BEGIN: HTML Table Data -->
  <div class="p-5 mt-5 intro-y box">
    <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
      <form
        id="tabulator-html-filter-form"
        class="xl:flex sm:mr-auto"
        @submit="
          (e) => {
            e.preventDefault();
            onFilter();
          }
        "
      >
        <div class="items-center sm:flex sm:mr-4">
          <label class="flex-none w-12 mr-2 xl:w-auto xl:flex-initial">
            Field
          </label>
          <FormSelect
            id="tabulator-html-filter-field"
            v-model="filter.field"
            class="w-full mt-2 2xl:w-full sm:mt-0 sm:w-auto"
          >
            <option value="name">Name</option>
            <option value="category">Category</option>
            <option value="remaining_stock">Remaining Stock</option>
          </FormSelect>
        </div>
        <div class="items-center mt-2 sm:flex sm:mr-4 xl:mt-0">
          <label class="flex-none w-12 mr-2 xl:w-auto xl:flex-initial">
            Type
          </label>
          <FormSelect
            id="tabulator-html-filter-type"
            v-model="filter.type"
            class="w-full mt-2 sm:mt-0 sm:w-auto"
          >
            <option value="like">like</option>
            <option value="=">=</option>
            <option value="<">&lt;</option>
            <option value="<=">&lt;=</option>
            <option value=">">&gt;</option>
            <option value=">=">&gt;=</option>
            <option value="!=">!=</option>
          </FormSelect>
        </div>
        <div class="items-center mt-2 sm:flex sm:mr-4 xl:mt-0">
          <label class="flex-none w-12 mr-2 xl:w-auto xl:flex-initial">
            Value
          </label>
          <FormInput
            id="tabulator-html-filter-value"
            v-model="filter.value"
            type="text"
            class="mt-2 sm:w-40 2xl:w-full sm:mt-0"
            placeholder="Search..."
          />
        </div>
        <div class="mt-2 xl:mt-0">
          <Button
            id="tabulator-html-filter-go"
            variant="primary"
            type="button"
            class="w-full sm:w-16"
            @click="onFilter"
          >
            Go
          </Button>
          <Button
            id="tabulator-html-filter-reset"
            variant="secondary"
            type="button"
            class="w-full mt-2 sm:w-16 sm:mt-0 sm:ml-1"
            @click="onResetFilter"
          >
            Reset
          </Button>
        </div>
      </form>
      <div class="flex mt-5 sm:mt-0">
        <Button
          id="tabulator-print"
          variant="outline-secondary"
          class="w-1/2 mr-2 sm:w-auto"
          @click="onPrint"
        >
          <Lucide icon="Printer" class="w-4 h-4 mr-2" /> Print
        </Button>
        <Menu class="w-1/2 sm:w-auto">
          <Menu.Button
            :as="Button"
            variant="outline-secondary"
            class="w-full sm:w-auto"
          >
            <Lucide icon="FileText" class="w-4 h-4 mr-2" /> Export
            <Lucide icon="ChevronDown" class="w-4 h-4 ml-auto sm:ml-2" />
          </Menu.Button>
          <Menu.Items class="w-40">
            <Menu.Item @click="onExportCsv">
              <Lucide icon="FileText" class="w-4 h-4 mr-2" /> Export CSV
            </Menu.Item>
            <Menu.Item @click="onExportJson">
              <Lucide icon="FileText" class="w-4 h-4 mr-2" /> Export JSON
            </Menu.Item>
            <Menu.Item @click="onExportXlsx">
              <Lucide icon="FileText" class="w-4 h-4 mr-2" /> Export XLSX
            </Menu.Item>
            <Menu.Item @click="onExportHtml">
              <Lucide icon="FileText" class="w-4 h-4 mr-2" /> Export HTML
            </Menu.Item>
          </Menu.Items>
        </Menu>
      </div>
    </div>
    <div class="overflow-x-auto scrollbar-hidden">
      <div id="tabulator" ref="tableRef" class="mt-5"></div>
    </div>
  </div>
  <!-- END: HTML Table Data -->
</template>
