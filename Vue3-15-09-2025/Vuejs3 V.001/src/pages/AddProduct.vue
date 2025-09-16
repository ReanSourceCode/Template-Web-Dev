<script setup lang="ts">
import _ from "lodash";
import { ref } from "vue";
import fakerData from "@/utils/faker";
import Button from "@/components/Base/Button";
import {
  FormInput,
  FormInline,
  FormSelect,
  FormLabel,
  FormHelp,
  FormCheck,
  InputGroup,
  FormSwitch,
} from "@/components/Base/Form";
import TomSelect from "@/components/Base/TomSelect";
import { ClassicEditor } from "@/components/Base/Ckeditor";
import Alert from "@/components/Base/Alert";
import Lucide from "@/components/Base/Lucide";
import Tippy from "@/components/Base/Tippy";
import Table from "@/components/Base/Table";

const subcategory = ref(["0"]);
const editorData = ref("<p>Content of the editor.</p>");
</script>

<template>
  <div class="flex items-center mt-8 intro-y">
    <h2 class="mr-auto text-lg font-medium">Add Product</h2>
  </div>
  <div class="grid grid-cols-11 pb-20 mt-5 gap-x-6">
    <!-- BEGIN: Notification -->
    <Alert
      variant="primary"
      dismissible
      class="col-span-11 mb-6 intro-y box dark:border-darkmode-600"
      v-slot="{ dismiss }"
    >
      <div class="flex items-center">
        <span>
          <Lucide icon="Info" class="w-4 h-4 mr-2" />
        </span>
        <span>
          Starting May 10, 2021, there will be changes to the Terms & Conditions
          regarding the number of products that may be added by the Seller.
          <a
            href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820"
            class="ml-1 underline"
            target="blank"
          >
            Learn More
          </a>
        </span>
        <Alert.DismissButton
          class="text-white"
          @click="dismiss"
          aria-label="Close"
        >
          <Lucide icon="X" class="w-4 h-4" />
        </Alert.DismissButton>
      </div>
    </Alert>
    <!-- BEGIN: Notification -->
    <div class="col-span-11 intro-y 2xl:col-span-9">
      <!-- BEGIN: Uplaod Product -->
      <div class="p-5 intro-y box">
        <div
          class="p-5 border rounded-md border-slate-200/60 dark:border-darkmode-400"
        >
          <div
            class="flex items-center pb-5 text-base font-medium border-b border-slate-200/60 dark:border-darkmode-400"
          >
            <Lucide icon="ChevronDown" class="w-4 h-4 mr-2" /> Upload Product
          </div>
          <div class="mt-5">
            <div class="flex items-center text-slate-500">
              <span>
                <Lucide icon="Lightbulb" class="w-5 h-5 text-warning" />
              </span>
              <div class="ml-2">
                <span class="mr-1">
                  Avoid selling counterfeit products / violating Intellectual
                  Property Rights, so that your products are not deleted.
                </span>
                <a
                  href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820"
                  class="font-medium text-primary"
                  target="blank"
                >
                  Learn More
                </a>
              </div>
            </div>
            <FormInline class="flex-col items-start mt-10 xl:flex-row">
              <FormLabel class="w-full xl:w-64 xl:!mr-10">
                <div class="text-left">
                  <div class="flex items-center">
                    <div class="font-medium">Product Photos</div>
                    <div
                      class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md"
                    >
                      Required
                    </div>
                  </div>
                  <div class="mt-3 text-xs leading-relaxed text-slate-500">
                    <div>
                      The image format is .jpg .jpeg .png and a minimum size of
                      300 x 300 pixels (For optimal images use a minimum size of
                      700 x 700 pixels).
                    </div>
                    <div class="mt-2">
                      Select product photos or drag and drop up to 5 photos at
                      once here. Include min. 3 attractive photos to make the
                      product more attractive to buyers.
                    </div>
                  </div>
                </div>
              </FormLabel>
              <div
                class="flex-1 w-full pt-4 mt-3 border-2 border-dashed rounded-md xl:mt-0 dark:border-darkmode-400"
              >
                <div class="grid grid-cols-10 gap-5 pl-4 pr-5">
                  <div
                    v-for="(faker, fakerKey) in _.take(fakerData, 5)"
                    :key="fakerKey"
                    class="relative col-span-5 cursor-pointer md:col-span-2 h-28 image-fit zoom-in"
                  >
                    <img
                      class="rounded-md"
                      alt="Midone - HTML Admin Template"
                      :src="faker.photos[0]"
                    />
                    <Tippy
                      content="Remove this image?"
                      class="absolute top-0 right-0 flex items-center justify-center w-5 h-5 -mt-2 -mr-2 text-white rounded-full bg-danger"
                    >
                      <Lucide icon="X" class="w-4 h-4" />
                    </Tippy>
                  </div>
                </div>
                <div
                  class="relative flex items-center justify-center px-4 pb-4 mt-5 cursor-pointer"
                >
                  <Lucide icon="Image" class="w-4 h-4 mr-2" />
                  <span class="mr-1 text-primary"> Upload a file </span>
                  or drag and drop
                  <FormInput
                    id="horizontal-form-1"
                    type="file"
                    class="absolute top-0 left-0 w-full h-full opacity-0"
                  />
                </div>
              </div>
            </FormInline>
          </div>
        </div>
      </div>
      <!-- END: Uplaod Product -->
      <!-- BEGIN: Product Information -->
      <div class="p-5 mt-5 intro-y box">
        <div
          class="p-5 border rounded-md border-slate-200/60 dark:border-darkmode-400"
        >
          <div
            class="flex items-center pb-5 text-base font-medium border-b border-slate-200/60 dark:border-darkmode-400"
          >
            <Lucide icon="ChevronDown" class="w-4 h-4 mr-2" /> Product
            Information
          </div>
          <div class="mt-5">
            <FormInline
              class="flex-col items-start pt-5 mt-5 xl:flex-row first:mt-0 first:pt-0"
            >
              <FormLabel class="xl:w-64 xl:!mr-10">
                <div class="text-left">
                  <div class="flex items-center">
                    <div class="font-medium">Product Name</div>
                    <div
                      class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md"
                    >
                      Required
                    </div>
                  </div>
                  <div class="mt-3 text-xs leading-relaxed text-slate-500">
                    Include min. 40 characters to make it more attractive and
                    easy for buyers to find, consisting of product type, brand,
                    and information such as color, material, or type.
                  </div>
                </div>
              </FormLabel>
              <div class="flex-1 w-full mt-3 xl:mt-0">
                <FormInput
                  id="product-name"
                  type="text"
                  placeholder="Product name"
                />
                <FormHelp class="text-right"> Maximum character 0/70 </FormHelp>
              </div>
            </FormInline>
            <FormInline
              class="flex-col items-start pt-5 mt-5 xl:flex-row first:mt-0 first:pt-0"
            >
              <FormLabel class="xl:w-64 xl:!mr-10">
                <div class="text-left">
                  <div class="flex items-center">
                    <div class="font-medium">Category</div>
                    <div
                      class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md"
                    >
                      Required
                    </div>
                  </div>
                </div>
              </FormLabel>
              <div class="flex-1 w-full mt-3 xl:mt-0">
                <FormSelect id="category">
                  <option
                    v-for="(faker, fakerKey) in _.take(fakerData, 9)"
                    :key="fakerKey"
                    :value="faker.categories[0].name"
                  >
                    {{ faker.categories[0].name }}
                  </option>
                </FormSelect>
              </div>
            </FormInline>
            <FormInline
              class="flex-col items-start pt-5 mt-5 xl:flex-row first:mt-0 first:pt-0"
            >
              <FormLabel class="xl:w-64 xl:!mr-10">
                <div class="text-left">
                  <div class="flex items-center">
                    <div class="font-medium">Subcategory</div>
                  </div>
                  <div class="mt-3 text-xs leading-relaxed text-slate-500">
                    You can add a new subcategory or choose from the existing
                    subcategory list.
                  </div>
                </div>
              </FormLabel>
              <div class="flex-1 w-full mt-3 xl:mt-0">
                <TomSelect
                  v-model="subcategory"
                  :options="{
                    placeholder: 'Etalase',
                  }"
                  class="w-full"
                  multiple
                >
                  <option
                    v-for="(faker, fakerKey) in _.take(fakerData, 2)"
                    :key="fakerKey"
                    :value="fakerKey"
                  >
                    {{ faker.categories[0].name }}
                  </option>
                </TomSelect>
              </div>
            </FormInline>
          </div>
        </div>
      </div>
      <!-- END: Product Information -->
      <!-- BEGIN: Product Detail -->
      <div class="p-5 mt-5 intro-y box">
        <div
          class="p-5 border rounded-md border-slate-200/60 dark:border-darkmode-400"
        >
          <div
            class="flex items-center pb-5 text-base font-medium border-b border-slate-200/60 dark:border-darkmode-400"
          >
            <Lucide icon="ChevronDown" class="w-4 h-4 mr-2" /> Product Detail
          </div>
          <div class="mt-5">
            <FormInline
              class="flex-col items-start pt-5 mt-5 xl:flex-row first:mt-0 first:pt-0"
            >
              <FormLabel class="xl:w-64 xl:!mr-10">
                <div class="text-left">
                  <div class="flex items-center">
                    <div class="font-medium">Condition</div>
                    <div
                      class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md"
                    >
                      Required
                    </div>
                  </div>
                </div>
              </FormLabel>
              <div class="flex-1 w-full mt-3 xl:mt-0">
                <div class="flex flex-col sm:flex-row">
                  <FormCheck class="mr-4">
                    <FormCheck.Input
                      id="condition-new"
                      type="radio"
                      name="horizontal_radio_button"
                      value="horizontal-radio-chris-evans"
                    />
                    <FormCheck.Label htmlFor="condition-new">
                      New
                    </FormCheck.Label>
                  </FormCheck>
                  <FormCheck class="mt-2 mr-4 sm:mt-0">
                    <FormCheck.Input
                      id="condition-second"
                      type="radio"
                      name="horizontal_radio_button"
                      value="horizontal-radio-liam-neeson"
                    />
                    <FormCheck.Label htmlFor="condition-second">
                      Second
                    </FormCheck.Label>
                  </FormCheck>
                </div>
              </div>
            </FormInline>
            <FormInline
              class="flex-col items-start pt-5 mt-5 xl:flex-row first:mt-0 first:pt-0"
            >
              <FormLabel class="xl:w-64 xl:!mr-10">
                <div class="text-left">
                  <div class="flex items-center">
                    <div class="font-medium">Product Description</div>
                    <div
                      class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md"
                    >
                      Required
                    </div>
                  </div>
                  <div class="mt-3 text-xs leading-relaxed text-slate-500">
                    <div>
                      Make sure the product description provides a detailed
                      explanation of your product so that it is easy to
                      understand and find your product.
                    </div>
                    <div class="mt-2">
                      It is recommended not to enter info on mobile numbers,
                      e-mails, etc. into the product description to protect your
                      personal data.
                    </div>
                  </div>
                </div>
              </FormLabel>
              <div class="flex-1 w-full mt-3 xl:mt-0">
                <ClassicEditor v-model="editorData" />
                <FormHelp class="text-right">
                  Maximum character 0/2000
                </FormHelp>
              </div>
            </FormInline>
            <FormInline
              class="flex-col items-start pt-5 mt-5 xl:flex-row first:mt-0 first:pt-0"
            >
              <FormLabel class="xl:w-64 xl:!mr-10">
                <div class="text-left">
                  <div class="flex items-center">
                    <div class="font-medium">Product Video</div>
                  </div>
                  <div class="mt-3 text-xs leading-relaxed text-slate-500">
                    Add a video so that buyers are more interested in your
                    product.
                    <a
                      href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820"
                      class="font-medium text-primary"
                      target="blank"
                    >
                      Learn more.
                    </a>
                  </div>
                </div>
              </FormLabel>
              <div class="flex-1 w-full mt-3 xl:mt-0">
                <Button variant="outline-secondary" class="w-40">
                  <Lucide icon="Plus" class="w-4 h-4 mr-2" /> Add Video URL
                </Button>
              </div>
            </FormInline>
          </div>
        </div>
      </div>
      <!-- END: Product Detail -->
      <!-- BEGIN: Product Variant -->
      <div class="p-5 mt-5 intro-y box">
        <div
          class="p-5 border rounded-md border-slate-200/60 dark:border-darkmode-400"
        >
          <div
            class="flex items-center pb-5 text-base font-medium border-b border-slate-200/60 dark:border-darkmode-400"
          >
            <Lucide icon="ChevronDown" class="w-4 h-4 mr-2" /> Product Variant
          </div>
          <div class="mt-5">
            <FormInline
              class="flex-col items-start pt-5 mt-5 xl:flex-row first:mt-0 first:pt-0"
            >
              <FormLabel class="sm:!mr-10">
                <div class="text-left">
                  <div class="flex items-center">
                    <div class="font-medium">Product Variant</div>
                  </div>
                  <div class="mt-2 text-xs leading-relaxed text-slate-500">
                    Add variants such as color, size, or more. Choose a maximum
                    of 2 variant types.
                  </div>
                </div>
              </FormLabel>
              <div class="flex-1 w-full mt-3 xl:mt-0 xl:text-right">
                <Button variant="primary" class="w-44">
                  <Lucide icon="Plus" class="w-4 h-4 mr-2" /> Add Variant
                </Button>
              </div>
            </FormInline>
          </div>
        </div>
      </div>
      <!-- END: Product Variant -->
      <!-- BEGIN: Product Variant (Details) -->
      <div class="p-5 mt-5 intro-y box">
        <div
          class="p-5 border rounded-md border-slate-200/60 dark:border-darkmode-400"
        >
          <div
            class="flex items-center pb-5 text-base font-medium border-b border-slate-200/60 dark:border-darkmode-400"
          >
            <Lucide icon="ChevronDown" class="w-4 h-4 mr-2" /> Product Variant
            (Details)
          </div>
          <div class="mt-5">
            <FormInline
              class="flex-col items-start pt-2 mt-2 xl:flex-row first:mt-0 first:pt-0"
            >
              <FormLabel class="xl:w-64 xl:!mr-10">
                <div class="text-left">
                  <div class="flex items-center">
                    <div class="font-medium">Variant 1</div>
                  </div>
                  <div class="mt-3 text-xs leading-relaxed text-slate-500">
                    Add the types of variants and options, you can add up to 5
                    options.
                  </div>
                </div>
              </FormLabel>
              <div class="flex-1 w-full mt-3 xl:mt-0">
                <div
                  class="relative py-10 pl-5 pr-5 rounded-md xl:pr-10 bg-slate-50 dark:bg-transparent dark:border"
                >
                  <a
                    href=""
                    class="absolute top-0 right-0 mt-4 mr-4 text-slate-500"
                  >
                    <Lucide icon="X" class="w-5 h-5" />
                  </a>
                  <div>
                    <FormInline class="mt-5 first:mt-0">
                      <FormLabel class="sm:w-20">Name</FormLabel>
                      <div class="flex items-center flex-1 xl:pr-20">
                        <InputGroup class="flex-1">
                          <FormInput type="text" placeholder="Size" />
                          <InputGroup.Text>6/14</InputGroup.Text>
                        </InputGroup>
                      </div>
                    </FormInline>
                    <FormInline class="items-start mt-5 first:mt-0">
                      <FormLabel class="mt-2 sm:w-20"> Options </FormLabel>
                      <div class="flex-1">
                        <div class="items-center mt-5 xl:flex first:mt-0">
                          <InputGroup class="flex-1">
                            <FormInput type="text" placeholder="Small" />
                            <InputGroup.Text>6/14</InputGroup.Text>
                          </InputGroup>
                          <div class="flex w-20 mt-3 text-slate-500 xl:mt-0">
                            <a href="" class="xl:ml-5">
                              <Lucide icon="Move" class="w-4 h-4" />
                            </a>
                            <a href="" class="ml-3 xl:ml-5">
                              <Lucide icon="Trash2" class="w-4 h-4" />
                            </a>
                          </div>
                        </div>
                        <div class="items-center mt-5 xl:flex first:mt-0">
                          <InputGroup class="flex-1">
                            <FormInput type="text" placeholder="Medium" />
                            <InputGroup.Text>6/14</InputGroup.Text>
                          </InputGroup>
                          <div class="flex w-20 mt-3 text-slate-500 xl:mt-0">
                            <a href="" class="xl:ml-5">
                              <Lucide icon="Move" class="w-4 h-4" />
                            </a>
                            <a href="" class="ml-3 xl:ml-5">
                              <Lucide icon="Trash2" class="w-4 h-4" />
                            </a>
                          </div>
                        </div>
                        <div class="items-center mt-5 xl:flex first:mt-0">
                          <InputGroup class="flex-1">
                            <FormInput type="text" placeholder="Large" />
                            <InputGroup.Text>6/14</InputGroup.Text>
                          </InputGroup>
                          <div class="flex w-20 mt-3 text-slate-500 xl:mt-0">
                            <a href="" class="xl:ml-5">
                              <Lucide icon="Move" class="w-4 h-4" />
                            </a>
                            <a href="" class="ml-3 xl:ml-5">
                              <Lucide icon="Trash2" class="w-4 h-4" />
                            </a>
                          </div>
                        </div>
                      </div>
                    </FormInline>
                    <div class="mt-5 xl:ml-20 xl:pl-5 xl:pr-20 first:mt-0">
                      <Button
                        variant="outline-primary"
                        class="w-full border-dashed"
                      >
                        <Lucide icon="Plus" class="w-4 h-4 mr-2" /> Add New
                        Option
                      </Button>
                    </div>
                  </div>
                </div>
              </div>
            </FormInline>
            <FormInline
              class="flex-col items-start pt-2 mt-2 xl:flex-row first:mt-0 first:pt-0"
            >
              <FormLabel class="xl:w-64 xl:!mr-10">
                <div class="text-left">
                  <div class="flex items-center">
                    <div class="font-medium">Variant 2</div>
                  </div>
                  <div class="mt-3 text-xs leading-relaxed text-slate-500">
                    Add the types of variants and options, you can add up to 5
                    options.
                  </div>
                </div>
              </FormLabel>
              <div class="flex-1 w-full mt-3 xl:mt-0">
                <div
                  class="relative py-10 pl-5 pr-5 rounded-md xl:pr-10 bg-slate-50 dark:bg-transparent dark:border"
                >
                  <a
                    href=""
                    class="absolute top-0 right-0 mt-4 mr-4 text-slate-500"
                  >
                    <Lucide icon="X" class="w-5 h-5" />
                  </a>
                  <div>
                    <FormInline class="mt-5 first:mt-0">
                      <FormLabel class="sm:w-20">Name</FormLabel>
                      <div class="flex items-center flex-1 xl:pr-20">
                        <InputGroup class="flex-1">
                          <FormInput type="text" placeholder="Color" />
                          <InputGroup.Text>6/14</InputGroup.Text>
                        </InputGroup>
                      </div>
                    </FormInline>
                    <FormInline class="items-start mt-5 first:mt-0">
                      <FormLabel class="mt-2 sm:w-20"> Options </FormLabel>
                      <div class="flex-1">
                        <div class="items-center mt-5 xl:flex first:mt-0">
                          <InputGroup class="flex-1">
                            <FormInput type="text" placeholder="Black" />
                            <InputGroup.Text>6/14</InputGroup.Text>
                          </InputGroup>
                          <div class="flex w-20 mt-3 text-slate-500 xl:mt-0">
                            <a href="" class="xl:ml-5">
                              <Lucide icon="Move" class="w-4 h-4" />
                            </a>
                            <a href="" class="ml-3 xl:ml-5">
                              <Lucide icon="Trash2" class="w-4 h-4" />
                            </a>
                          </div>
                        </div>
                        <div class="items-center mt-5 xl:flex first:mt-0">
                          <InputGroup class="flex-1">
                            <FormInput type="text" placeholder="White" />
                            <InputGroup.Text>6/14</InputGroup.Text>
                          </InputGroup>
                          <div class="flex w-20 mt-3 text-slate-500 xl:mt-0">
                            <a href="" class="xl:ml-5">
                              <Lucide icon="Move" class="w-4 h-4" />
                            </a>
                            <a href="" class="ml-3 xl:ml-5">
                              <Lucide icon="Trash2" class="w-4 h-4" />
                            </a>
                          </div>
                        </div>
                        <div class="items-center mt-5 xl:flex first:mt-0">
                          <InputGroup class="flex-1">
                            <FormInput type="text" placeholder="Gray" />
                            <InputGroup.Text>6/14</InputGroup.Text>
                          </InputGroup>
                          <div class="flex w-20 mt-3 text-slate-500 xl:mt-0">
                            <a href="" class="xl:ml-5">
                              <Lucide icon="Move" class="w-4 h-4" />
                            </a>
                            <a href="" class="ml-3 xl:ml-5">
                              <Lucide icon="Trash2" class="w-4 h-4" />
                            </a>
                          </div>
                        </div>
                      </div>
                    </FormInline>
                    <div class="mt-5 xl:ml-20 xl:pl-5 xl:pr-20 first:mt-0">
                      <Button
                        variant="outline-primary"
                        class="w-full border-dashed"
                      >
                        <Lucide icon="Plus" class="w-4 h-4 mr-2" /> Add New
                        Option
                      </Button>
                    </div>
                  </div>
                </div>
              </div>
            </FormInline>
            <div class="pt-2 mt-2 xl:ml-64 xl:pl-10 first:mt-0 first:pt-0">
              <Button
                variant="outline-secondary"
                class="w-full py-3 border-dashed"
              >
                <Lucide icon="Plus" class="w-4 h-4 mr-2" /> Add New Variant
              </Button>
            </div>
            <FormInline
              class="flex-col items-start pt-5 mt-5 xl:flex-row first:mt-0 first:pt-0"
            >
              <FormLabel class="xl:w-64 xl:!mr-10">
                <div class="text-left">
                  <div class="flex items-center">
                    <div class="font-medium">Variant Information</div>
                  </div>
                  <div class="mt-3 text-xs leading-relaxed text-slate-500">
                    Apply price and stock on all variants or based on certain
                    variant codes.
                  </div>
                </div>
              </FormLabel>
              <div class="flex-1 w-full mt-3 xl:mt-0">
                <div class="grid-cols-4 gap-2 sm:grid">
                  <InputGroup>
                    <InputGroup.Text>$</InputGroup.Text>
                    <FormInput type="text" placeholder="Price" />
                  </InputGroup>
                  <FormInput
                    type="text"
                    class="mt-2 sm:mt-0"
                    placeholder="Stock"
                  />
                  <FormInput
                    type="text"
                    class="mt-2 sm:mt-0"
                    placeholder="Variant Code"
                  />
                  <Button variant="primary" class="mt-2 sm:mt-0">
                    Apply To All
                  </Button>
                </div>
              </div>
            </FormInline>
            <FormInline
              class="flex-col items-start pt-5 mt-5 xl:flex-row first:mt-0 first:pt-0"
            >
              <FormLabel class="xl:w-64 xl:!mr-10">
                <div class="text-left">
                  <div class="flex items-center">
                    <div class="font-medium">Variant List</div>
                  </div>
                  <div class="mt-3 text-xs leading-relaxed text-slate-500">
                    Set the price and stock for each variant.
                  </div>
                </div>
              </FormLabel>
              <div class="flex-1 w-full mt-3 xl:mt-0">
                <div class="overflow-x-auto">
                  <Table class="border">
                    <Table.Thead>
                      <Table.Tr>
                        <Table.Th
                          class="bg-slate-50 dark:bg-darkmode-800 text-slate-500 whitespace-nowrap"
                        >
                          Size
                        </Table.Th>
                        <Table.Th
                          class="bg-slate-50 dark:bg-darkmode-800 text-slate-500 whitespace-nowrap"
                        >
                          <div class="flex items-center">
                            Color
                            <Lucide icon="HelpCircle" class="w-4 h-4 ml-2" />
                          </div>
                        </Table.Th>
                        <Table.Th
                          class="bg-slate-50 dark:bg-darkmode-800 text-slate-500 whitespace-nowrap !px-2"
                        >
                          Price
                        </Table.Th>
                        <Table.Th
                          class="bg-slate-50 dark:bg-darkmode-800 text-slate-500 whitespace-nowrap !px-2"
                        >
                          <div class="flex items-center">
                            <div
                              class="relative w-4 h-4 mr-2 -mt-0.5 before:content-[''] before:absolute before:w-4 before:h-4 before:bg-primary/20 before:rounded-full lg:before:animate-ping after:content-[''] after:absolute after:w-4 after:h-4 after:bg-primary after:rounded-full after:border-4 after:border-white/60 after:dark:border-darkmode-300"
                            ></div>
                            Stock
                            <Lucide icon="HelpCircle" class="w-4 h-4 ml-2" />
                          </div>
                        </Table.Th>
                        <Table.Th
                          class="bg-slate-50 dark:bg-darkmode-800 text-slate-500 whitespace-nowrap !pl-2"
                        >
                          Variant Code
                        </Table.Th>
                      </Table.Tr>
                    </Table.Thead>
                    <Table.Tbody>
                      <Table.Tr>
                        <Table.Td :rowSpan="3" class="border-r">
                          Small
                        </Table.Td>
                        <Table.Td>Black</Table.Td>
                        <Table.Td class="!px-2">
                          <InputGroup>
                            <InputGroup.Text>$</InputGroup.Text>
                            <FormInput
                              type="text"
                              class="min-w-[6rem]"
                              placeholder="Price"
                            />
                          </InputGroup>
                        </Table.Td>
                        <Table.Td class="!px-2">
                          <FormInput
                            type="text"
                            class="min-w-[6rem]"
                            placeholder="Stock"
                          />
                        </Table.Td>
                        <Table.Td class="!pl-2">
                          <FormInput
                            type="text"
                            class="min-w-[6rem]"
                            placeholder="Variant Code"
                          />
                        </Table.Td>
                      </Table.Tr>
                      <Table.Tr>
                        <Table.Td>White</Table.Td>
                        <Table.Td class="!px-2">
                          <InputGroup>
                            <InputGroup.Text>$</InputGroup.Text>
                            <FormInput
                              type="text"
                              class="min-w-[6rem]"
                              placeholder="Price"
                            />
                          </InputGroup>
                        </Table.Td>
                        <Table.Td class="!px-2">
                          <FormInput
                            type="text"
                            class="min-w-[6rem]"
                            placeholder="Stock"
                          />
                        </Table.Td>
                        <Table.Td class="!pl-2">
                          <FormInput
                            type="text"
                            class="min-w-[6rem]"
                            placeholder="Variant Code"
                          />
                        </Table.Td>
                      </Table.Tr>
                      <Table.Tr>
                        <Table.Td>Gray</Table.Td>
                        <Table.Td class="!px-2">
                          <InputGroup>
                            <InputGroup.Text>$</InputGroup.Text>
                            <FormInput
                              type="text"
                              class="min-w-[6rem]"
                              placeholder="Price"
                            />
                          </InputGroup>
                        </Table.Td>
                        <Table.Td class="!px-2">
                          <FormInput
                            type="text"
                            class="min-w-[6rem]"
                            placeholder="Stock"
                          />
                        </Table.Td>
                        <Table.Td class="!pl-2">
                          <FormInput
                            type="text"
                            class="min-w-[6rem]"
                            placeholder="Variant Code"
                          />
                        </Table.Td>
                      </Table.Tr>
                      <Table.Tr>
                        <Table.Td :rowSpan="3" class="border-r">
                          Medium
                        </Table.Td>
                        <Table.Td>Black</Table.Td>
                        <Table.Td class="!px-2">
                          <InputGroup>
                            <InputGroup.Text>$</InputGroup.Text>
                            <FormInput
                              type="text"
                              class="min-w-[6rem]"
                              placeholder="Price"
                            />
                          </InputGroup>
                        </Table.Td>
                        <Table.Td class="!px-2">
                          <FormInput
                            type="text"
                            class="min-w-[6rem]"
                            placeholder="Stock"
                          />
                        </Table.Td>
                        <Table.Td class="!pl-2">
                          <FormInput
                            type="text"
                            class="min-w-[6rem]"
                            placeholder="Variant Code"
                          />
                        </Table.Td>
                      </Table.Tr>
                      <Table.Tr>
                        <Table.Td>White</Table.Td>
                        <Table.Td class="!px-2">
                          <InputGroup>
                            <InputGroup.Text>$</InputGroup.Text>
                            <FormInput
                              type="text"
                              class="min-w-[6rem]"
                              placeholder="Price"
                            />
                          </InputGroup>
                        </Table.Td>
                        <Table.Td class="!px-2">
                          <FormInput
                            type="text"
                            class="min-w-[6rem]"
                            placeholder="Stock"
                          />
                        </Table.Td>
                        <Table.Td class="!pl-2">
                          <FormInput
                            type="text"
                            class="min-w-[6rem]"
                            placeholder="Variant Code"
                          />
                        </Table.Td>
                      </Table.Tr>
                      <Table.Tr>
                        <Table.Td>Gray</Table.Td>
                        <Table.Td class="!px-2">
                          <InputGroup>
                            <InputGroup.Text>$</InputGroup.Text>
                            <FormInput
                              type="text"
                              class="min-w-[6rem]"
                              placeholder="Price"
                            />
                          </InputGroup>
                        </Table.Td>
                        <Table.Td class="!px-2">
                          <FormInput
                            type="text"
                            class="min-w-[6rem]"
                            placeholder="Stock"
                          />
                        </Table.Td>
                        <Table.Td class="!pl-2">
                          <FormInput
                            type="text"
                            class="min-w-[6rem]"
                            placeholder="Variant Code"
                          />
                        </Table.Td>
                      </Table.Tr>
                      <Table.Tr>
                        <Table.Td :rowSpan="3" class="border-r">
                          Large
                        </Table.Td>
                        <Table.Td>Black</Table.Td>
                        <Table.Td class="!px-2">
                          <InputGroup>
                            <InputGroup.Text>$</InputGroup.Text>
                            <FormInput
                              type="text"
                              class="min-w-[6rem]"
                              placeholder="Price"
                            />
                          </InputGroup>
                        </Table.Td>
                        <Table.Td class="!px-2">
                          <FormInput
                            type="text"
                            class="min-w-[6rem]"
                            placeholder="Stock"
                          />
                        </Table.Td>
                        <Table.Td class="!pl-2">
                          <FormInput
                            type="text"
                            class="min-w-[6rem]"
                            placeholder="Variant Code"
                          />
                        </Table.Td>
                      </Table.Tr>
                      <Table.Tr>
                        <Table.Td>White</Table.Td>
                        <Table.Td class="!px-2">
                          <InputGroup>
                            <InputGroup.Text>$</InputGroup.Text>
                            <FormInput
                              type="text"
                              class="min-w-[6rem]"
                              placeholder="Price"
                            />
                          </InputGroup>
                        </Table.Td>
                        <Table.Td class="!px-2">
                          <FormInput
                            type="text"
                            class="min-w-[6rem]"
                            placeholder="Stock"
                          />
                        </Table.Td>
                        <Table.Td class="!pl-2">
                          <FormInput
                            type="text"
                            class="min-w-[6rem]"
                            placeholder="Variant Code"
                          />
                        </Table.Td>
                      </Table.Tr>
                      <Table.Tr>
                        <Table.Td>Gray</Table.Td>
                        <Table.Td class="!px-2">
                          <InputGroup>
                            <InputGroup.Text>$</InputGroup.Text>
                            <FormInput
                              type="text"
                              class="min-w-[6rem]"
                              placeholder="Price"
                            />
                          </InputGroup>
                        </Table.Td>
                        <Table.Td class="!px-2">
                          <FormInput
                            type="text"
                            class="min-w-[6rem]"
                            placeholder="Stock"
                          />
                        </Table.Td>
                        <Table.Td class="!pl-2">
                          <FormInput
                            type="text"
                            class="min-w-[6rem]"
                            placeholder="Variant Code"
                          />
                        </Table.Td>
                      </Table.Tr>
                    </Table.Tbody>
                  </Table>
                </div>
              </div>
            </FormInline>
            <FormInline
              class="flex-col items-start pt-5 mt-5 xl:flex-row first:mt-0 first:pt-0"
            >
              <FormInline class="xl:w-64 xl:!mr-10">
                <div class="text-left">
                  <div class="flex items-center">
                    <div class="font-medium">Wholesale</div>
                  </div>
                  <div class="mt-3 text-xs leading-relaxed text-slate-500">
                    Add wholesale price for certain quantity purchases.
                  </div>
                </div>
              </FormInline>
              <div class="flex-1 w-full mt-3 xl:mt-0">
                <div class="overflow-x-auto">
                  <Table class="border">
                    <Table.Thead>
                      <Table.Tr>
                        <Table.Th
                          class="!pr-2 bg-slate-50 dark:bg-darkmode-800"
                        ></Table.Th>
                        <Table.Th
                          class="bg-slate-50 dark:bg-darkmode-800"
                        ></Table.Th>
                        <Table.Th
                          class="!px-2 bg-slate-50 dark:bg-darkmode-800 text-slate-500 whitespace-nowrap"
                        >
                          Min.
                        </Table.Th>
                        <Table.Th
                          class="!px-2 bg-slate-50 dark:bg-darkmode-800 text-slate-500 whitespace-nowrap"
                        >
                          Max.
                        </Table.Th>
                        <Table.Th
                          class="!px-2 bg-slate-50 dark:bg-darkmode-800 text-slate-500 whitespace-nowrap"
                        >
                          Unit Price
                        </Table.Th>
                        <Table.Th
                          class="!px-2 bg-slate-50 dark:bg-darkmode-800"
                        ></Table.Th>
                      </Table.Tr>
                    </Table.Thead>
                    <Table.Tbody>
                      <Table.Tr>
                        <Table.Td class="!pr-2">1.</Table.Td>
                        <Table.Td class="whitespace-nowrap">
                          Wholesale Price 1
                        </Table.Td>
                        <Table.Td class="!px-2">
                          <FormInput
                            type="text"
                            class="min-w-[6rem]"
                            placeholder="Min Qty"
                          />
                        </Table.Td>
                        <Table.Td class="!px-2">
                          <FormInput
                            type="text"
                            class="min-w-[6rem]"
                            placeholder="Max Qty"
                          />
                        </Table.Td>
                        <Table.Td class="!px-2">
                          <InputGroup>
                            <InputGroup.Text>$</InputGroup.Text>
                            <FormInput
                              type="text"
                              class="min-w-[6rem]"
                              placeholder="Price"
                            />
                          </InputGroup>
                        </Table.Td>
                        <Table.Td class="!pl-4 text-slate-500">
                          <a href="">
                            <Lucide icon="Trash2" class="w-4 h-4" />
                          </a>
                        </Table.Td>
                      </Table.Tr>
                      <Table.Tr>
                        <Table.Td class="!pr-2">2.</Table.Td>
                        <Table.Td class="whitespace-nowrap">
                          Wholesale Price 2
                        </Table.Td>
                        <Table.Td class="!px-2">
                          <FormInput
                            type="text"
                            class="min-w-[6rem]"
                            placeholder="Min Qty"
                          />
                        </Table.Td>
                        <Table.Td class="!px-2">
                          <FormInput
                            type="text"
                            class="min-w-[6rem]"
                            placeholder="Max Qty"
                          />
                        </Table.Td>
                        <Table.Td class="!px-2">
                          <InputGroup>
                            <InputGroup.Text>$</InputGroup.Text>
                            <FormInput
                              type="text"
                              class="min-w-[6rem]"
                              placeholder="Price"
                            />
                          </InputGroup>
                        </Table.Td>
                        <Table.Td class="!pl-4 text-slate-500">
                          <a href="">
                            <Lucide icon="Trash2" class="w-4 h-4" />
                          </a>
                        </Table.Td>
                      </Table.Tr>
                      <Table.Tr>
                        <Table.Td class="!pr-2">3.</Table.Td>
                        <Table.Td class="whitespace-nowrap">
                          Wholesale Price 3
                        </Table.Td>
                        <Table.Td class="!px-2">
                          <FormInput
                            type="text"
                            class="min-w-[6rem]"
                            placeholder="Min Qty"
                          />
                        </Table.Td>
                        <Table.Td class="!px-2">
                          <FormInput
                            type="text"
                            class="min-w-[6rem]"
                            placeholder="Max Qty"
                          />
                        </Table.Td>
                        <Table.Td class="!px-2">
                          <InputGroup>
                            <InputGroup.Text>$</InputGroup.Text>
                            <FormInput
                              type="text"
                              class="min-w-[6rem]"
                              placeholder="Price"
                            />
                          </InputGroup>
                        </Table.Td>
                        <Table.Td class="!pl-4 text-slate-500">
                          <a href="">
                            <Lucide icon="Trash2" class="w-4 h-4" />
                          </a>
                        </Table.Td>
                      </Table.Tr>
                    </Table.Tbody>
                  </Table>
                </div>
                <Button
                  variant="outline-primary"
                  class="w-full mt-4 border-dashed"
                >
                  <Lucide icon="Plus" class="w-4 h-4 mr-2" /> Add New Wholesale
                  Price
                </Button>
              </div>
            </FormInline>
          </div>
        </div>
      </div>
      <!-- END: Product Variant (Details) -->
      <!-- BEGIN: Product Management -->
      <div class="p-5 mt-5 intro-y box">
        <div
          class="p-5 border rounded-md border-slate-200/60 dark:border-darkmode-400"
        >
          <div
            class="flex items-center pb-5 text-base font-medium border-b border-slate-200/60 dark:border-darkmode-400"
          >
            <Lucide icon="ChevronDown" class="w-4 h-4 mr-2" /> Product
            Management
          </div>
          <div class="mt-5">
            <FormInline
              class="flex-col items-start pt-5 mt-5 xl:flex-row first:mt-0 first:pt-0"
            >
              <FormLabel class="xl:w-64 xl:!mr-10">
                <div class="text-left">
                  <div class="flex items-center">
                    <div class="font-medium">Product Status</div>
                    <div
                      class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md"
                    >
                      Required
                    </div>
                  </div>
                  <div class="mt-3 text-xs leading-relaxed text-slate-500">
                    If the status is active, your product can be searched for by
                    potential buyers.
                  </div>
                </div>
              </FormLabel>
              <div class="flex-1 w-full mt-3 xl:mt-0">
                <FormSwitch>
                  <FormSwitch.Input
                    id="product-status-active"
                    type="checkbox"
                  />
                  <FormSwitch.Label htmlFor="product-status-active">
                    Active
                  </FormSwitch.Label>
                </FormSwitch>
              </div>
            </FormInline>
            <FormInline
              class="flex-col items-start pt-5 mt-5 xl:flex-row first:mt-0 first:pt-0"
            >
              <FormLabel class="xl:w-64 xl:!mr-10">
                <div class="text-left">
                  <div class="flex items-center">
                    <div class="font-medium">Product Stock</div>
                    <div
                      class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md"
                    >
                      Required
                    </div>
                  </div>
                </div>
              </FormLabel>
              <div class="flex-1 w-full mt-3 xl:mt-0">
                <FormInput
                  id="product-stock"
                  type="text"
                  placeholder="Input Product Stock"
                />
              </div>
            </FormInline>
            <FormInline
              class="flex-col items-start pt-5 mt-5 xl:flex-row first:mt-0 first:pt-0"
            >
              <FormLabel class="xl:w-64 xl:!mr-10">
                <div class="text-left">
                  <div class="flex items-center">
                    <div class="font-medium">SKU (Stock Keeping Unit)</div>
                    <div
                      class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md"
                    >
                      Required
                    </div>
                  </div>
                  <div class="mt-3 text-xs leading-relaxed text-slate-500">
                    Use a unique SKU code if you want to mark your product.
                  </div>
                </div>
              </FormLabel>
              <div class="flex-1 w-full mt-3 xl:mt-0">
                <FormInput id="sku" type="text" placeholder="Input SKU" />
              </div>
            </FormInline>
          </div>
        </div>
      </div>
      <!-- END: Product Management -->
      <!-- BEGIN: Weight & Shipping -->
      <div class="p-5 mt-5 intro-y box">
        <div
          class="p-5 border rounded-md border-slate-200/60 dark:border-darkmode-400"
        >
          <div
            class="flex items-center pb-5 text-base font-medium border-b border-slate-200/60 dark:border-darkmode-400"
          >
            <Lucide icon="ChevronDown" class="w-4 h-4 mr-2" /> Weight & Shipping
          </div>
          <div class="mt-5">
            <FormInline
              class="flex-col items-start pt-5 mt-5 xl:flex-row first:mt-0 first:pt-0"
            >
              <FormLabel class="xl:w-64 xl:!mr-10">
                <div class="text-left">
                  <div class="flex items-center">
                    <div class="font-medium">Product Weight</div>
                    <div
                      class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md"
                    >
                      Required
                    </div>
                  </div>
                  <div class="mt-3 text-xs leading-relaxed text-slate-500">
                    Enter the weight by weighing the product after it is
                    <span
                      class="font-medium text-slate-600 dark:text-slate-300"
                    >
                      packaged
                    </span>
                    .
                  </div>
                </div>
              </FormLabel>
              <div class="flex-1 w-full mt-3 xl:mt-0">
                <div class="grid-cols-4 gap-2 sm:grid">
                  <FormSelect>
                    <option value="Gram (g)">Gram (g)</option>
                    <option value="Kilogram (kg)">Kilogram (kg)</option>
                  </FormSelect>
                  <FormInput
                    type="text"
                    id="product-weight"
                    class="mt-2 sm:mt-0"
                    placeholder="Stock"
                  />
                </div>
                <Alert
                  variant="outline-warning"
                  dismissible
                  class="mt-5 bg-warning/20 dark:bg-darkmode-400 dark:border-darkmode-400"
                  v-slot="{ dismiss }"
                >
                  <div class="flex items-center">
                    <span>
                      <Lucide icon="AlertTriangle" class="w-6 h-6 mr-3" />
                    </span>
                    <span class="text-slate-800 dark:text-slate-500">
                      Pay close attention to the weight of the product so that
                      there is no difference in data with the shipping courier.
                      <a class="font-medium text-primary" href="">
                        Learn More
                      </a>
                    </span>
                    <Alert.DismissButton
                      class="btn-close dark:text-white"
                      @click="dismiss"
                    >
                      <Lucide icon="X" class="w-4 h-4" />
                    </Alert.DismissButton>
                  </div>
                </Alert>
              </div>
            </FormInline>
            <FormInline
              class="flex-col items-start pt-5 mt-5 xl:flex-row first:mt-0 first:pt-0"
            >
              <FormLabel class="xl:w-64 xl:!mr-10">
                <div class="text-left">
                  <div class="flex items-center">
                    <div class="font-medium">Product Size</div>
                    <div
                      class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md"
                    >
                      Required
                    </div>
                  </div>
                  <div class="mt-3 text-xs leading-relaxed text-slate-500">
                    Enter the product size after packing to calculate the volume
                    weight.
                    <a class="font-medium text-primary" href="">
                      Learn Volume Weight
                    </a>
                  </div>
                </div>
              </FormLabel>
              <div class="flex-1 w-full mt-3 xl:mt-0">
                <div class="grid-cols-3 gap-2 sm:grid">
                  <InputGroup>
                    <FormInput type="text" placeholder="Width" />
                    <InputGroup.Text>cm</InputGroup.Text>
                  </InputGroup>
                  <InputGroup class="mt-2 sm:mt-0">
                    <FormInput type="text" placeholder="Height" />
                    <InputGroup.Text>cm</InputGroup.Text>
                  </InputGroup>
                  <InputGroup class="mt-2 sm:mt-0">
                    <FormInput type="text" placeholder="Length" />
                    <InputGroup.Text>cm</InputGroup.Text>
                  </InputGroup>
                </div>
              </div>
            </FormInline>
            <FormInline
              class="flex-col items-start pt-5 mt-5 xl:flex-row first:mt-0 first:pt-0"
            >
              <div class="xl:w-64 xl:!mr-10">
                <div class="text-left">
                  <div class="flex items-center">
                    <div class="font-medium">Shipping Insurance</div>
                  </div>
                  <div class="mt-3 text-xs leading-relaxed text-slate-500">
                    Refund product & postage for the seller and buyer in case of
                    damage / loss during shipping.
                    <a class="font-medium text-primary" href=""> Learn More </a>
                  </div>
                </div>
              </div>
              <div class="flex-1 w-full mt-3 xl:mt-0">
                <div class="flex flex-col sm:flex-row">
                  <FormCheck class="mr-4">
                    <FormCheck.Input
                      id="shipping-insurance-required"
                      type="radio"
                      name="horizontal_radio_button"
                      value="horizontal-radio-chris-evans"
                    />
                    <FormCheck.Label>
                      <div>Required</div>
                      <div
                        class="w-56 mt-1 text-xs leading-relaxed text-slate-500"
                      >
                        You
                        <span
                          class="font-medium text-slate-600 dark:text-slate-300"
                        >
                          require
                        </span>
                        the buyer to activate shipping insurance
                      </div>
                    </FormCheck.Label>
                  </FormCheck>
                  <FormCheck class="mt-2 mr-4 sm:mt-0">
                    <FormCheck.Input
                      id="shipping-insurance-optional"
                      type="radio"
                      name="horizontal_radio_button"
                      value="horizontal-radio-liam-neeson"
                    />
                    <FormCheck.Label>
                      <div>Optional</div>
                      <div
                        class="w-56 mt-1 text-xs leading-relaxed text-slate-500"
                      >
                        You
                        <span
                          class="font-medium text-slate-600 dark:text-slate-300"
                        >
                          give the buyer the option
                        </span>
                        to activate shipping insurance
                      </div>
                    </FormCheck.Label>
                  </FormCheck>
                </div>
              </div>
            </FormInline>
            <FormInline
              class="flex-col items-start pt-5 mt-5 xl:flex-row first:mt-0 first:pt-0"
            >
              <FormLabel class="xl:w-64 xl:!mr-10">
                <div class="text-left">
                  <div class="flex items-center">
                    <div class="font-medium">Shipping Service</div>
                  </div>
                  <div class="mt-3 text-xs leading-relaxed text-slate-500">
                    Configure shipping services according to your product type.
                  </div>
                </div>
              </FormLabel>
              <div class="flex-1 w-full mt-3 xl:mt-0">
                <div class="flex flex-col sm:flex-row">
                  <FormCheck class="mr-4">
                    <FormCheck.Input
                      id="shipping-service-standard"
                      type="radio"
                      name="horizontal_radio_button"
                      value="horizontal-radio-chris-evans"
                    />
                    <FormCheck.Label htmlFor="shipping-service-standard">
                      Standard
                    </FormCheck.Label>
                  </FormCheck>
                  <FormCheck class="mt-2 mr-4 sm:mt-0">
                    <FormCheck.Input
                      id="shipping-service-custom"
                      type="radio"
                      name="horizontal_radio_button"
                      value="horizontal-radio-liam-neeson"
                    />
                    <FormCheck.Label htmlFor="shipping-service-custom">
                      Custom
                    </FormCheck.Label>
                  </FormCheck>
                </div>
                <div class="mt-3 text-xs leading-relaxed text-slate-500">
                  The delivery service for this product will be the same as in
                  the
                  <a class="font-medium text-primary" href="">
                    Shipping Settings.
                  </a>
                </div>
              </div>
            </FormInline>
            <FormInline
              class="flex-col items-start pt-5 mt-5 xl:flex-row first:mt-0 first:pt-0"
            >
              <FormLabel class="xl:w-64 xl:!mr-10">
                <div class="text-left">
                  <div class="flex items-center">
                    <div class="font-medium">PreOrder</div>
                  </div>
                </div>
              </FormLabel>
              <div class="flex-1 w-full mt-3 xl:mt-0">
                <FormSwitch>
                  <FormSwitch.Input id="preorder-active" type="checkbox" />
                  <FormSwitch.Label
                    class="text-xs leading-relaxed text-slate-500"
                    htmlFor="preorder-active"
                  >
                    Activate PreOrder if you need a longer shipping process.
                    <a class="font-medium text-primary" href="">
                      Learn more.
                    </a>
                  </FormSwitch.Label>
                </FormSwitch>
              </div>
            </FormInline>
          </div>
        </div>
      </div>
      <!-- END: Weight & Shipping -->
      <div class="flex flex-col justify-end gap-2 mt-5 md:flex-row">
        <Button
          type="button"
          class="w-full py-3 border-slate-300 dark:border-darkmode-400 text-slate-500 md:w-52"
        >
          Cancel
        </Button>
        <Button
          type="button"
          class="w-full py-3 border-slate-300 dark:border-darkmode-400 text-slate-500 md:w-52"
        >
          Save & Add New Product
        </Button>
        <Button variant="primary" type="button" class="w-full py-3 md:w-52">
          Save
        </Button>
      </div>
    </div>
    <div class="hidden col-span-2 intro-y 2xl:block">
      <div class="sticky top-0 pt-10">
        <ul
          class="text-slate-500 relative before:content-[''] before:w-[2px] before:bg-slate-200 before:dark:bg-darkmode-600 before:h-full before:absolute before:left-0 before:z-[-1]"
        >
          <li
            class="pl-5 mb-4 font-medium border-l-2 border-primary dark:border-primary text-primary"
          >
            <a href="">Upload Product</a>
          </li>
          <li
            class="pl-5 mb-4 border-l-2 border-transparent dark:border-transparent"
          >
            <a href="">Product Information</a>
          </li>
          <li
            class="pl-5 mb-4 border-l-2 border-transparent dark:border-transparent"
          >
            <a href="">Product Detail</a>
          </li>
          <li
            class="pl-5 mb-4 border-l-2 border-transparent dark:border-transparent"
          >
            <a href="">Product Variant</a>
          </li>
          <li
            class="pl-5 mb-4 border-l-2 border-transparent dark:border-transparent"
          >
            <a href="">Product Variant (Details)</a>
          </li>
          <li
            class="pl-5 mb-4 border-l-2 border-transparent dark:border-transparent"
          >
            <a href="">Product Management</a>
          </li>
          <li
            class="pl-5 mb-4 border-l-2 border-transparent dark:border-transparent"
          >
            <a href="">Weight & Shipping</a>
          </li>
        </ul>
        <div
          class="relative p-5 mt-10 border rounded-md bg-warning/20 dark:bg-darkmode-600 border-warning dark:border-0"
        >
          <Lucide
            icon="Lightbulb"
            class="absolute top-0 right-0 w-12 h-12 mt-5 mr-3 text-warning/80"
          />
          <h2 class="text-lg font-medium">Tips</h2>
          <div class="mt-5 font-medium">Price</div>
          <div
            class="mt-2 text-xs leading-relaxed text-slate-600 dark:text-slate-500"
          >
            <div>
              The image format is .jpg .jpeg .png and a minimum size of 300 x
              300 pixels (For optimal images use a minimum size of 700 x 700
              pixels).
            </div>
            <div class="mt-2">
              Select product photos or drag and drop up to 5 photos at once
              here. Include min. 3 attractive photos to make the product more
              attractive to buyers.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
