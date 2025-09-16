<script setup lang="ts">
import "@/assets/css/themes/icewall/top-nav.css";
import { useRoute, useRouter } from "vue-router";
import TopBar from "@/components/Themes/Icewall/TopBar";
import MobileMenu from "@/components/MobileMenu";
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
import Lucide from "@/components/Base/Lucide";
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
      'icewall px-5 sm:px-8 py-5 relative',
      'after:content-[\'\'] after:bg-gradient-to-b after:from-theme-1 after:to-theme-2 dark:after:from-darkmode-800 dark:after:to-darkmode-800 after:fixed after:inset-0 after:z-[-2]',
    ]"
  >
    <MobileMenu />
    <TopBar />
    <!-- BEGIN: Top Menu -->
    <nav
      class="top-nav relative z-50 -mt-2 hidden translate-y-[35px] opacity-0 md:block xl:-mt-[3px] xl:px-6 xl:pt-[12px]"
    >
      <ul class="h-[50px] flex flex-wrap">
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
        'wrapper relative',
        'before:content-[\'\'] before:z-[-1] before:translate-y-[35px] before:opacity-0 before:w-[95%] before:rounded-[1.3rem] before:bg-transparent xl:before:bg-white/10 before:h-full before:-mt-4 before:absolute before:mx-auto before:inset-x-0 before:dark:bg-darkmode-400/50',
      ]"
    >
      <div
        :class="[
          'wrapper-box bg-transparent xl:bg-theme-1 flex rounded-[1.3rem] md:pt-[80px] -mt-[7px] md:-mt-[67px] xl:-mt-[62px] dark:bg-transparent xl:dark:bg-darkmode-400 translate-y-[35px]',
          'before:hidden xl:before:block before:absolute before:inset-0 before:bg-black/[0.15] before:rounded-[1.3rem] before:z-[-1]',
        ]"
      >
        <!-- BEGIN: Content -->
        <div
          class="md:max-w-auto min-h-screen min-w-0 max-w-full flex-1 rounded-[1.3rem] bg-slate-100 px-4 pb-10 shadow-sm before:block before:h-px before:w-full before:content-[''] dark:bg-darkmode-700 md:px-[22px]"
        >
          <RouterView />
        </div>
        <!-- END: Content -->
      </div>
    </div>
    <!-- END: Content -->
  </div>
</template>
