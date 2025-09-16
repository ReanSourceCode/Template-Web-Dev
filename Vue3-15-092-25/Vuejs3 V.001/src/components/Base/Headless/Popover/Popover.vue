<script lang="ts">
export default {
  inheritAttrs: false,
};

export interface PopoverProps
  extends /* @vue-ignore */ ExtractProps<typeof HeadlessPopover> {
  as?: string | object;
}
</script>

<script setup lang="ts">
import _ from "lodash";
import { twMerge } from "tailwind-merge";
import { Popover as HeadlessPopover } from "@headlessui/vue";
import { useAttrs, computed } from "vue";

const { as = "div" } = defineProps<PopoverProps>();

const attrs = useAttrs();
const computedClass = computed(() =>
  twMerge(["relative", typeof attrs.class === "string" && attrs.class])
);
</script>

<template>
  <HeadlessPopover as="template" v-slot="{ close }">
    <component :is="as" :class="computedClass" v-bind="_.omit(attrs, 'class')">
      <slot :close="close"></slot
    ></component>
  </HeadlessPopover>
</template>
