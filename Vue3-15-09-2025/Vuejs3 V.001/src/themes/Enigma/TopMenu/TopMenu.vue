<script setup lang="ts">
import "@/assets/css/themes/enigma/top-nav.css";
import { useRoute, useRouter } from "vue-router";
import Lucide from "@/components/Base/Lucide";
import MobileMenu from "@/components/MobileMenu";
import TopBar from "@/components/Themes/Enigma/TopBar";
import _ from "lodash";
import { useMenuStore } from "@/stores/menu";
import {
  type ProvideForceActiveMenu,
  forceActiveMenu,
  type Route,
  type FormattedMenu,
  nestedMenu,
  linkTo,
} from "./top-menu";
import { watch, reactive, computed, onMounted, provide } from "vue";

const route: Route = useRoute();
const router = useRouter();
let formattedMenu = reactive<Array<FormattedMenu | "divider">>([]);
const setFormattedMenu = (
  computedFormattedMenu: Array<FormattedMenu | "divider">
) => {
  Object.assign(formattedMenu, computedFormattedMenu);
};
const menuStore = useMenuStore();
const menu = computed(() => nestedMenu(menuStore.menu("top-menu"), route));

provide<ProvideForceActiveMenu>("forceActiveMenu", (pageName: string) => {
  forceActiveMenu(route, pageName);
  setFormattedMenu(menu.value);
});

watch(menu, () => {
  setFormattedMenu(menu.value);
});

watch(
  computed(() => route.path),
  () => {
    delete route.forceActiveMenu;
  }
);

onMounted(() => {
  setFormattedMenu(menu.value);
});
</script>

<template>
  <div
    :class="[
      'enigma py-5 px-5 md:py-0 sm:px-8 md:px-0',
      'before:content-[\'\'] before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 dark:before:from-darkmode-800 dark:before:to-darkmode-800 md:before:bg-none md:bg-slate-200 md:dark:bg-darkmode-800 before:fixed before:inset-0 before:z-[-1]',
    ]"
  >
    <MobileMenu />
    <TopBar layout="top-menu" />
    <!-- BEGIN: Top Menu -->
    <nav class="relative z-50 hidden pt-32 -mt-4 top-nav md:block">
      <ul class="flex flex-wrap px-6 xl:px-[50px]">
        <li v-for="(menu, menuKey) in formattedMenu" :key="menuKey">
          <template v-if="menu != 'divider'">
            <a
              :href="
              menu.subMenu
                ? '#'
                : ((pageName: string | undefined) => {
                    try {
                      return router.resolve({
                        name: pageName,
                      }).fullPath;
                    } catch (err) {
                      return '';
                    }
                  })(menu.pageName)
            "
              :class="[menu.active ? 'top-menu top-menu--active' : 'top-menu']"
              @click="(event: MouseEvent) => {
              event.preventDefault();
              linkTo(menu, router);
            }"
            >
              <div class="top-menu__icon">
                <Lucide :icon="menu.icon" />
              </div>
              <div class="top-menu__title">
                {{ menu.title }}
                <Lucide
                  v-if="menu.subMenu"
                  class="top-menu__sub-icon"
                  icon="ChevronDown"
                />
              </div>
            </a>
            <ul
              v-if="menu.subMenu"
              :class="{ 'side-menu__sub-open': menu.activeDropdown }"
            >
              <li
                v-for="(subMenu, subMenuKey) in menu.subMenu"
                :key="subMenuKey"
              >
                <a
                  :href="
                  subMenu.subMenu
                    ? '#'
                    : ((pageName: string | undefined) => {
                        try {
                          return router.resolve({
                            name: pageName,
                          }).fullPath;
                        } catch (err) {
                          return '';
                        }
                      })(subMenu.pageName)
                "
                  class="top-menu"
                  @click="(event: MouseEvent) => {
                  event.preventDefault();
                  linkTo(subMenu, router);
                }"
                >
                  <div class="top-menu__icon">
                    <Lucide :icon="subMenu.icon" />
                  </div>
                  <div class="top-menu__title">
                    {{ subMenu.title }}
                    <Lucide
                      v-if="subMenu.subMenu"
                      class="top-menu__sub-icon"
                      icon="ChevronDown"
                    />
                  </div>
                </a>
                <ul
                  v-if="subMenu.subMenu"
                  :class="{ 'side-menu__sub-open': subMenu.activeDropdown }"
                >
                  <li
                    v-for="(lastSubMenu, lastSubMenuKey) in subMenu.subMenu"
                    :key="lastSubMenuKey"
                  >
                    <a
                      :href="
                      lastSubMenu.subMenu
                        ? '#'
                        : ((pageName: string | undefined) => {
                            try {
                              return router.resolve({
                                name: pageName,
                              }).fullPath;
                            } catch (err) {
                              return '';
                            }
                          })(lastSubMenu.pageName)
                    "
                      class="top-menu"
                      @click="(event: MouseEvent) => {
                      event.preventDefault();
                      linkTo(lastSubMenu, router);
                    }"
                    >
                      <div class="top-menu__icon">
                        <Lucide :icon="lastSubMenu.icon" />
                      </div>
                      <div class="top-menu__title">
                        {{ lastSubMenu.title }}
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </template>
        </li>
      </ul>
    </nav>
    <!-- END: Top Menu -->
    <!-- BEGIN: Content -->
    <div
      :class="[
        'max-w-full md:max-w-none rounded-[30px] md:rounded-[35px_35px_0_0] px-4 md:px-[22px] min-w-0 min-h-screen bg-slate-100 flex-1 pb-10 mt-5 relative dark:bg-darkmode-700',
        'before:content-[\'\'] before:w-full before:h-px before:block',
      ]"
    >
      <RouterView />
    </div>
    <!-- END: Content -->
  </div>
</template>
