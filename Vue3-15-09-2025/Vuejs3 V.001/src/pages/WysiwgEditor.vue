<script setup lang="ts">
import { ref } from "vue";
import Preview from "@/components/Base/Preview";
import { ClassicEditor } from "@/components/Base/Ckeditor";
import { FormSwitch } from "@/components/Base/Form";

const editorData = ref("<p>Content of the editor.</p>");
</script>

<template>
  <div class="flex items-center mt-8">
    <h2 class="mr-auto text-lg font-medium">CKEditor</h2>
  </div>
  <div class="grid grid-cols-12 gap-6 mt-5">
    <!-- BEGIN: Classic Editor -->
    <div class="col-span-12">
      <Preview class="box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Classic Editor</h2>
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
            <ClassicEditor v-model="editorData" />
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <ClassicEditor v-model="editorData" />
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
    </div>
    <!-- END: Classic Editor -->
  </div>
</template>
