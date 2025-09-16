<script setup lang="ts">
import "@/assets/css/themes/rubick/side-nav.css";
import { useRoute, useRouter } from "vue-router";
import logoUrl from "@/assets/images/logo.svg";
import Tippy from "@/components/Base/Tippy";
import Lucide from "@/components/Base/Lucide";
import TopBar from "@/components/Themes/Rubick/TopBar";
import MobileMenu from "@/components/MobileMenu";
import { useMenuStore } from "@/stores/menu";
import {
  type ProvideForceActiveMenu,
  forceActiveMenu,
  type Route,
  type FormattedMenu,
  nestedMenu,
  linkTo,
  enter,
  leave,
} from "./side-menu";
import { watch, reactive, ref, computed, onMounted, provide } from "vue";

const route: Route = useRoute();
const router = useRouter();
let formattedMenu = reactive<Array<FormattedMenu | "divider">>([]);
const setFormattedMenu = (
  computedFormattedMenu: Array<FormattedMenu | "divider">
) => {
  Object.assign(formattedMenu, computedFormattedMenu);
};
const menuStore = useMenuStore();
const menu = computed(() => nestedMenu(menuStore.menu("side-menu"), route));
const windowWidth = ref(window.innerWidth);

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

  window.addEventListener("resize", () => {
    windowWidth.value = window.innerWidth;
  });
});
</script>

<template>
  <div
    :class="[
      'rubick px-5 sm:px-8 py-5',
      'before:content-[\'\'] before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 dark:before:from-darkmode-800 dark:before:to-darkmode-800 before:fixed before:inset-0 before:z-[-1]',
    ]"
  >
    <MobileMenu />
    <div class="mt-[4.7rem] flex md:mt-0">
      <!-- BEGIN: Side Menu -->
      <nav
        class="side-nav hidden w-[80px] overflow-x-hidden pb-16 pr-5 md:block xl:w-[230px]"
      >
        <RouterLink
          :to="{ name: 'dashboard-overview-1' }"
          class="flex items-center pt-4 pl-5 intro-x"
        >
          <img
            alt="Midone - Tailwind Admin Dashboard Template"
            class="w-6"
            :src="logoUrl"
          />
          <span class="hidden ml-3 text-lg text-white xl:block">CØDE រៀនកូដ </span>
        </RouterLink>
        <div class="my-6 side-nav__divider"></div>
        <ul>
          <template v-for="(menu, menuKey) in formattedMenu">
            <li
              v-if="menu == 'divider'"
              type="li"
              class="my-6 side-nav__divider"
              :key="'divider-' + menuKey"
            ></li>
            <li v-else :key="menuKey">
              <Tippy
                as="a"
                :content="menu.title"
                :options="{
                  placement: 'right',
                }"
                :disable="windowWidth > 1260"
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
                @click="(event: MouseEvent) => {
                  event.preventDefault();
                  linkTo(menu, router);
                  setFormattedMenu([...formattedMenu]);
                }"
                :class="[
                  menu.active ? 'side-menu side-menu--active' : 'side-menu',
                ]"
              >
                <div class="side-menu__icon">
                  <Lucide :icon="menu.icon" />
                </div>
                <div class="side-menu__title">
                  {{ menu.title }}
                  <div
                    v-if="menu.subMenu"
                    :class="[
                      'side-menu__sub-icon',
                      { 'transform rotate-180': menu.activeDropdown },
                    ]"
                  >
                    <Lucide icon="ChevronDown" />
                  </div>
                </div>
              </Tippy>
              <Transition @enter="enter" @leave="leave">
                <ul
                  v-if="menu.subMenu && menu.activeDropdown"
                  :class="{ 'side-menu__sub-open': menu.activeDropdown }"
                >
                  <li
                    v-for="(subMenu, subMenuKey) in menu.subMenu"
                    :key="subMenuKey"
                  >
                    <Tippy
                      as="a"
                      :content="subMenu.title"
                      :options="{
                        placement: 'right',
                      }"
                      :disable="windowWidth > 1260"
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
                      :class="[
                        subMenu.active
                          ? 'side-menu side-menu--active'
                          : 'side-menu',
                      ]"
                      @click="(event: MouseEvent) => {
                        event.preventDefault();
                        linkTo(subMenu, router);
                        setFormattedMenu([...formattedMenu]);
                      }"
                    >
                      <div class="side-menu__icon">
                        <Lucide :icon="subMenu.icon" />
                      </div>
                      <div class="side-menu__title">
                        {{ subMenu.title }}
                        <div
                          v-if="subMenu.subMenu"
                          :class="[
                            'side-menu__sub-icon',
                            { 'transform rotate-180': subMenu.activeDropdown },
                          ]"
                        >
                          <Lucide icon="ChevronDown" />
                        </div>
                      </div>
                    </Tippy>
                    <Transition
                      @enter="enter"
                      @leave="leave"
                      v-if="subMenu.subMenu"
                    >
                      <ul
                        v-if="subMenu.subMenu && subMenu.activeDropdown"
                        :class="{
                          'side-menu__sub-open': subMenu.activeDropdown,
                        }"
                      >
                        <li
                          v-for="(
                            lastSubMenu, lastSubMenuKey
                          ) in subMenu.subMenu"
                          :key="lastSubMenuKey"
                        >
                          <Tippy
                            as="a"
                            :content="lastSubMenu.title"
                            :options="{
                              placement: 'right',
                            }"
                            :disable="windowWidth > 1260"
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
                            :class="[
                              lastSubMenu.active
                                ? 'side-menu side-menu--active'
                                : 'side-menu',
                            ]"
                            @click="(event: MouseEvent) => {
                              event.preventDefault();
                              linkTo(lastSubMenu, router);
                              setFormattedMenu([...formattedMenu]);
                            }"
                          >
                            <div class="side-menu__icon">
                              <Lucide :icon="lastSubMenu.icon" />
                            </div>
                            <div class="side-menu__title">
                              {{ lastSubMenu.title }}
                            </div>
                          </Tippy>
                        </li>
                      </ul>
                    </Transition>
                  </li>
                </ul>
              </Transition>
            </li>
          </template>
        </ul>
      </nav>
      <!-- END: Side Menu -->
      <!-- BEGIN: Content -->
      <div
        class="md:max-w-auto min-h-screen min-w-0 max-w-full flex-1 rounded-[30px] bg-slate-100 px-4 pb-10 before:block before:h-px before:w-full before:content-[''] dark:bg-darkmode-700 md:px-[22px]"
      >
        <TopBar />
        <RouterView />
      </div>
      <!-- END: Content -->
    </div>
  </div>
</template>
