<script setup lang="ts">
import "@/assets/css/themes/icewall/side-nav.css";
import { useRoute, useRouter } from "vue-router";
import Tippy from "@/components/Base/Tippy";
import Lucide from "@/components/Base/Lucide";
import TopBar from "@/components/Themes/Icewall/TopBar";
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
      'icewall px-5 sm:px-8 py-5 relative',
      'after:content-[\'\'] after:bg-gradient-to-b after:from-theme-1 after:to-theme-2 dark:after:from-darkmode-800 dark:after:to-darkmode-800 after:fixed after:inset-0 after:z-[-2]',
    ]"
  >
    <MobileMenu />
    <TopBar />
    <div
      :class="[
        'wrapper relative',
        'before:content-[\'\'] before:z-[-1] before:translate-y-[35px] before:opacity-0 before:w-[95%] before:rounded-[1.3rem] before:bg-white/10 before:h-full before:-mt-4 before:absolute before:mx-auto before:inset-x-0 before:dark:bg-darkmode-400/50',
      ]"
    >
      <div
        :class="[
          'wrapper-box bg-gradient-to-b from-theme-1 to-theme-2 flex rounded-[1.3rem] -mt-[7px] md:mt-0 dark:from-darkmode-400 dark:to-darkmode-400 translate-y-[35px]',
          'before:block before:absolute before:inset-0 before:bg-black/[0.15] before:rounded-[1.3rem] before:z-[-1]',
        ]"
      >
        <!-- BEGIN: Side Menu -->
        <nav
          class="side-nav hidden md:block w-[100px] xl:w-[250px] px-5 pt-8 pb-16 overflow-x-hidden"
        >
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
                              {
                                'transform rotate-180': subMenu.activeDropdown,
                              },
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
          class="md:max-w-auto min-h-screen min-w-0 max-w-full flex-1 rounded-[1.3rem] bg-slate-100 px-4 pb-10 shadow-sm before:block before:h-px before:w-full before:content-[''] dark:bg-darkmode-700 md:px-[22px]"
        >
          <RouterView />
        </div>
        <!-- END: Content -->
      </div>
    </div>
  </div>
</template>
