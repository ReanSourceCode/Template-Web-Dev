<script setup lang="ts">
import Preview from "@/components/Base/Preview";
import Dropzone, { type DropzoneElement } from "@/components/Base/Dropzone";
import { onMounted, ref, provide } from "vue";
import { FormSwitch } from "@/components/Base/Form";

const dropzoneSingleRef = ref<DropzoneElement>();
const dropzoneMultipleRef = ref<DropzoneElement>();
const dropzoneValidationRef = ref<DropzoneElement>();

provide("bind[dropzoneSingleRef]", (el: DropzoneElement) => {
  dropzoneSingleRef.value = el;
});

provide("bind[dropzoneMultipleRef]", (el: DropzoneElement) => {
  dropzoneMultipleRef.value = el;
});

provide("bind[dropzoneValidationRef]", (el: DropzoneElement) => {
  dropzoneValidationRef.value = el;
});

onMounted(() => {
  const elDropzoneSingleRef = dropzoneSingleRef.value;
  if (elDropzoneSingleRef) {
    elDropzoneSingleRef.dropzone.on("success", () => {
      alert("Added file.");
    });
    elDropzoneSingleRef.dropzone.on("error", () => {
      alert("No more files please!");
    });
  }

  const elDropzoneMultipleRef = dropzoneMultipleRef.value;
  if (elDropzoneMultipleRef) {
    elDropzoneMultipleRef.dropzone.on("success", () => {
      alert("Added file.");
    });
    elDropzoneMultipleRef.dropzone.on("error", () => {
      alert("No more files please!");
    });
  }

  const elDropzoneValidationRef = dropzoneValidationRef.value;
  if (elDropzoneValidationRef) {
    elDropzoneValidationRef.dropzone.on("success", () => {
      alert("Added file.");
    });
    elDropzoneValidationRef.dropzone.on("error", () => {
      alert("No more files please!");
    });
  }
});
</script>

<template>
  <div class="flex items-center mt-8 intro-y">
    <h2 class="mr-auto text-lg font-medium">Dropzone</h2>
  </div>
  <div class="grid grid-cols-12 gap-6 mt-5">
    <div class="col-span-12 intro-y lg:col-span-6">
      <!-- BEGIN: Single File Upload -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Single File Upload</h2>
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
            <Dropzone
              refKey="dropzoneSingleRef"
              :options="{
                url: 'https://httpbin.org/post',
                thumbnailWidth: 150,
                maxFilesize: 0.5,
                maxFiles: 1,
                headers: { 'My-Awesome-Header': 'header value' },
              }"
              class="dropzone"
            >
              <div class="text-lg font-medium">
                Drop files here or click to upload.
              </div>
              <div class="text-gray-600">
                This is just a demo dropzone. Selected files are
                <span class="font-medium">not</span> actually uploaded.
              </div>
            </Dropzone>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Dropzone
                refKey="dropzoneSingleRef"
                :options="{
                  url: 'https://httpbin.org/post',
                  thumbnailWidth: 150,
                  maxFilesize: 0.5,
                  maxFiles: 1,
                  headers: { 'My-Awesome-Header': 'header value' },
                }"
                class="dropzone"
              >
                <div class="text-lg font-medium">
                  Drop files here or click to upload.
                </div>
                <div class="text-gray-600">
                  This is just a demo dropzone. Selected files are
                  <span class="font-medium">not</span> actually uploaded.
                </div>
              </Dropzone>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Single File Upload -->
      <!-- BEGIN: Multiple File Upload -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Multiple File Upload</h2>
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
            <Dropzone
              refKey="dropzoneMultipleRef"
              :options="{
                url: 'https://httpbin.org/post',
                thumbnailWidth: 150,
                maxFilesize: 0.5,
                headers: { 'My-Awesome-Header': 'header value' },
              }"
              class="dropzone"
            >
              <div class="text-lg font-medium">
                Drop files here or click to upload.
              </div>
              <div class="text-gray-600">
                This is just a demo dropzone. Selected files are
                <span class="font-medium">not</span> actually uploaded.
              </div>
            </Dropzone>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Dropzone
                refKey="dropzoneMultipleRef"
                :options="{
                  url: 'https://httpbin.org/post',
                  thumbnailWidth: 150,
                  maxFilesize: 0.5,
                  headers: { 'My-Awesome-Header': 'header value' },
                }"
                class="dropzone"
              >
                <div class="text-lg font-medium">
                  Drop files here or click to upload.
                </div>
                <div class="text-gray-600">
                  This is just a demo dropzone. Selected files are
                  <span class="font-medium">not</span> actually uploaded.
                </div>
              </Dropzone>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Multiple File Upload -->
      <!-- BEGIN: File Type Validation -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">File Type Validation</h2>
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
            <Dropzone
              refKey="dropzoneValidationRef"
              :options="{
                url: 'https://httpbin.org/post',
                thumbnailWidth: 150,
                maxFilesize: 0.5,
                acceptedFiles: 'image/jpeg|image/png|image/jpg',
                headers: { 'My-Awesome-Header': 'header value' },
              }"
              class="dropzone"
            >
              <div class="text-lg font-medium">
                Drop files here or click to upload.
              </div>
              <div class="text-gray-600">
                This is just a demo dropzone. Selected files are
                <span class="font-medium">not</span> actually uploaded.
              </div>
            </Dropzone>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Dropzone
                refKey="dropzoneValidationRef"
                :options="{
                  url: 'https://httpbin.org/post',
                  thumbnailWidth: 150,
                  maxFilesize: 0.5,
                  acceptedFiles: 'image/jpeg|image/png|image/jpg',
                  headers: { 'My-Awesome-Header': 'header value' },
                }"
                class="dropzone"
              >
                <div class="text-lg font-medium">
                  Drop files here or click to upload.
                </div>
                <div class="text-gray-600">
                  This is just a demo dropzone. Selected files are
                  <span class="font-medium">not</span> actually uploaded.
                </div>
              </Dropzone>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: File Type Validation -->
    </div>
  </div>
</template>
