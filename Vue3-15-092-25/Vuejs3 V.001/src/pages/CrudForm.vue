<script setup lang="ts">
import { ClassicEditor } from "@/components/Base/Ckeditor";
import TomSelect from "@/components/Base/TomSelect";
import { ref } from "vue";
import Button from "@/components/Base/Button";
import {
  FormInput,
  FormLabel,
  FormSwitch,
  InputGroup,
} from "@/components/Base/Form";

const categories = ref(["1", "3"]);
const editorConfig = {
  toolbar: {
    items: ["bold", "italic", "link"],
  },
};
const editorData = ref("<p>Content of the editor.</p>");
</script>

<template>
  <div class="flex items-center mt-8 intro-y">
    <h2 class="mr-auto text-lg font-medium">Form Layout</h2>
  </div>
  <div class="grid grid-cols-12 gap-6 mt-5">
    <div class="col-span-12 intro-y lg:col-span-6">
      <!-- BEGIN: Form Layout -->
      <div class="p-5 intro-y box">
        <div>
          <FormLabel htmlFor="crud-form-1">Product Name</FormLabel>
          <FormInput
            id="crud-form-1"
            type="text"
            class="w-full"
            placeholder="Input text"
          />
        </div>
        <div class="mt-3">
          <FormLabel htmlFor="crud-form-2">Category</FormLabel>
          <TomSelect
            id="crud-form-2"
            v-model="categories"
            class="w-full"
            multiple
          >
            <option value="1">Sport & Outdoor</option>
            <option value="2">PC & Laptop</option>
            <option value="3">Smartphone & Tablet</option>
            <option value="4">Photography</option>
          </TomSelect>
        </div>
        <div class="mt-3">
          <FormLabel htmlFor="crud-form-3">Quantity</FormLabel>
          <InputGroup>
            <FormInput
              id="crud-form-3"
              type="text"
              placeholder="Quantity"
              aria-describedby="input-group-1"
            />
            <InputGroup.Text id="input-group-1">pcs</InputGroup.Text>
          </InputGroup>
        </div>
        <div class="mt-3">
          <FormLabel htmlFor="crud-form-4">Weight</FormLabel>
          <InputGroup>
            <FormInput
              id="crud-form-4"
              type="text"
              placeholder="Weight"
              aria-describedby="input-group-2"
            />
            <InputGroup.Text id="input-group-2">grams</InputGroup.Text>
          </InputGroup>
        </div>
        <div class="mt-3">
          <FormLabel>Price</FormLabel>
          <div class="grid-cols-3 gap-2 sm:grid">
            <InputGroup>
              <InputGroup.Text id="input-group-3">Unit</InputGroup.Text>
              <FormInput
                type="text"
                placeholder="Unit"
                aria-describedby="input-group-3"
              />
            </InputGroup>
            <InputGroup class="mt-2 sm:mt-0">
              <InputGroup.Text id="input-group-4"> Wholesale </InputGroup.Text>
              <FormInput
                type="text"
                placeholder="Wholesale"
                aria-describedby="input-group-4"
              />
            </InputGroup>
            <InputGroup class="mt-2 sm:mt-0">
              <InputGroup.Text id="input-group-5">Bulk</InputGroup.Text>
              <FormInput
                type="text"
                placeholder="Bulk"
                aria-describedby="input-group-5"
              />
            </InputGroup>
          </div>
        </div>
        <div class="mt-3">
          <label>Active Status</label>
          <FormSwitch class="mt-2">
            <FormSwitch.Input type="checkbox" />
          </FormSwitch>
        </div>
        <div class="mt-3">
          <label>Description</label>
          <div class="mt-2">
            <ClassicEditor v-model="editorData" :config="editorConfig" />
          </div>
        </div>
        <div class="mt-5 text-right">
          <Button type="button" variant="outline-secondary" class="w-24 mr-1">
            Cancel
          </Button>
          <Button type="button" variant="primary" class="w-24"> Save </Button>
        </div>
      </div>
      <!-- END: Form Layout -->
    </div>
  </div>
</template>
