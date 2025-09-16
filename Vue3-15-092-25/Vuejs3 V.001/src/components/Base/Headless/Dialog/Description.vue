<script lang="ts">
export default {
  inheritAttrs: false,
};

export interface DescriptionProps
  extends /* @vue-ignore */ ExtractProps<typeof HeadlessDialogDescription> {
  as?: string | object;
}
</script>

<script setup lang="ts">
import _ from "lodash";
import { twMerge } from "tailwind-merge";
import { DialogDescription as HeadlessDialogDescription } from "@headlessui/vue";
import { useAttrs, computed } from "vue";

const { as = "div" } = defineProps<DescriptionProps>();

const attrs = useAttrs();
const computedClass = computed(() =>
  twMerge(["p-5", typeof attrs.class === "string" && attrs.class])
);
</script>

<template>
  <HeadlessDialogDescription as="template">
    <component :is="as" :class="computedClass" v-bind="_.omit(attrs, 'class')">
      <slot></slot>
    </component>
  </HeadlessDialogDescription>
</template>
