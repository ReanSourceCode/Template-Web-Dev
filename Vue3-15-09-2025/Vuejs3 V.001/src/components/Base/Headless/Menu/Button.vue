<script lang="ts">
export default {
  inheritAttrs: false,
};

export interface ButtonProps
  extends /* @vue-ignore */ ExtractProps<typeof HeadlessMenuButton> {
  as?: string | object;
}
</script>

<script setup lang="ts">
import _ from "lodash";
import { twMerge } from "tailwind-merge";
import { MenuButton as HeadlessMenuButton } from "@headlessui/vue";
import { useAttrs, computed } from "vue";

const { as = "div" } = defineProps<ButtonProps>();

const attrs = useAttrs();
const computedClass = computed(() =>
  twMerge(["cursor-pointer", typeof attrs.class === "string" && attrs.class])
);
</script>

<template>
  <HeadlessMenuButton as="template">
    <component :is="as" :class="computedClass" v-bind="_.omit(attrs, 'class')">
      <slot></slot
    ></component>
  </HeadlessMenuButton>
</template>
