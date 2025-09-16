<script lang="ts">
export default {
  inheritAttrs: false,
};

type Variant = "tabs" | "pills" | "boxed-tabs" | "link-tabs";

export interface ListProps
  extends /* @vue-ignore */ ExtractProps<typeof HeadlessTabList> {
  variant?: Variant;
}
</script>

<script setup lang="ts">
import _ from "lodash";
import { provide, useAttrs, computed } from "vue";
import { twMerge } from "tailwind-merge";
import { TabList as HeadlessTabList } from "@headlessui/vue";

export type ProvideList = {
  variant?: Variant;
};

const { variant = "tabs" } = defineProps<ListProps>();

const attrs = useAttrs();
const computedClass = computed(() =>
  twMerge([
    variant == "tabs" && "border-b border-slate-200 dark:border-darkmode-400",
    variant == "boxed-tabs" &&
      "p-0.5 border bg-slate-50/70 border-slate-200/70 rounded-lg dark:border-darkmode-400",
    "w-full flex",
    typeof attrs.class === "string" && attrs.class,
  ])
);

provide<ProvideList>("list", {
  variant: variant,
});
</script>

<template>
  <HeadlessTabList
    as="ul"
    :class="computedClass"
    v-bind="_.omit(attrs, 'class')"
  >
    <slot></slot>
  </HeadlessTabList>
</template>
