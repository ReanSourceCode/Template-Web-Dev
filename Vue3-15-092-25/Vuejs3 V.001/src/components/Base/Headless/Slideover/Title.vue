<script lang="ts">
export default {
  inheritAttrs: false,
};

export interface TitleProps
  extends /* @vue-ignore */ ExtractProps<typeof HeadlessDialogTitle> {
  as?: string | object;
}
</script>

<script setup lang="ts">
import _ from "lodash";
import { twMerge } from "tailwind-merge";
import { DialogTitle as HeadlessDialogTitle } from "@headlessui/vue";
import { useAttrs, computed } from "vue";

const { as = "div" } = defineProps<TitleProps>();

const attrs = useAttrs();
const computedClass = computed(() =>
  twMerge([
    "flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400",
    typeof attrs.class === "string" && attrs.class,
  ])
);
</script>

<template>
  <HeadlessDialogTitle as="template">
    <component :is="as" :class="computedClass" v-bind="_.omit(attrs, 'class')">
      <slot></slot>
    </component>
  </HeadlessDialogTitle>
</template>
