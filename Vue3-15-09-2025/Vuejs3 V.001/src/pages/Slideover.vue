<script setup lang="ts">
import Preview from "@/components/Base/Preview";
import { Menu, Slideover } from "@/components/Base/Headless";
import {
  FormLabel,
  FormInput,
  FormSelect,
  FormSwitch,
} from "@/components/Base/Form";
import Button from "@/components/Base/Button";
import Lucide from "@/components/Base/Lucide";
import { ref } from "vue";

const basicSlideoverPreview = ref(false);
const setBasicSlideoverPreview = (value: boolean) => {
  basicSlideoverPreview.value = value;
};
const smallSlideoverSizePreview = ref(false);
const setSmallSlideoverSizePreview = (value: boolean) => {
  smallSlideoverSizePreview.value = value;
};
const mediumSlideoverSizePreview = ref(false);
const setMediumSlideoverSizePreview = (value: boolean) => {
  mediumSlideoverSizePreview.value = value;
};
const largeSlideoverSizePreview = ref(false);
const setLargeSlideoverSizePreview = (value: boolean) => {
  largeSlideoverSizePreview.value = value;
};
const superlargeSlideoverSizePreview = ref(false);
const setSuperlargeSlideoverSizePreview = (value: boolean) => {
  superlargeSlideoverSizePreview.value = value;
};
const programmaticallySlideover = ref(false);
const setProgrammaticallySlideover = (value: boolean) => {
  programmaticallySlideover.value = value;
};
const buttonSlideoverPreview = ref(false);
const setButtonSlideoverPreview = (value: boolean) => {
  buttonSlideoverPreview.value = value;
};
const overlappingSlideoverPreview = ref(false);
const setOverlappingSlideoverPreview = (value: boolean) => {
  overlappingSlideoverPreview.value = value;
};
const nextOverlappingSlideoverPreview = ref(false);
const setNextOverlappingSlideoverPreview = (value: boolean) => {
  nextOverlappingSlideoverPreview.value = value;
};
const headerFooterSlideoverPreview = ref(false);
const setHeaderFooterSlideoverPreview = (value: boolean) => {
  headerFooterSlideoverPreview.value = value;
};
</script>

<template>
  <div class="flex items-center mt-8 intro-y">
    <h2 class="mr-auto text-lg font-medium">Slide Over</h2>
  </div>
  <div class="grid grid-cols-12 gap-6 mt-5">
    <div class="col-span-12 intro-y lg:col-span-6">
      <!-- BEGIN: Blank Slide Over -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Blank Slide Over</h2>
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
        <div id="blank-slideover" class="p-5">
          <Preview.Panel>
            <!-- BEGIN: Slide Over Toggle -->
            <div class="text-center">
              <Button
                as="a"
                href="#"
                variant="primary"
                @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setBasicSlideoverPreview(true);
                        }"
              >
                Show Slide Over
              </Button>
            </div>
            <!-- END: Slide Over Toggle -->
            <!-- BEGIN: Slide Over Content -->
            <Slideover
              :open="basicSlideoverPreview"
              @close="
                () => {
                  setBasicSlideoverPreview(false);
                }
              "
            >
              <Slideover.Panel>
                <Slideover.Title class="p-5">
                  <h2 class="mr-auto text-base font-medium">
                    Blank Slide Over
                  </h2>
                </Slideover.Title>
                <Slideover.Description>
                  This is totally awesome blank slide over!
                </Slideover.Description>
              </Slideover.Panel>
            </Slideover>
            <!-- END: Slide Over Content -->
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <!-- BEGIN: Slide Over Toggle -->
              <div class="text-center">
                <Button
                  as="a"
                  href="#"
                  variant="primary"
                  @click="(event: MouseEvent) => {
                      event.preventDefault();
                      setBasicSlideoverPreview(true);
                    }"
                >
                  Show Slide Over
                </Button>
              </div>
              <!-- END: Slide Over Toggle -->
              <!-- BEGIN: Slide Over Content -->
              <Slideover
                :open="basicSlideoverPreview"
                @close="
                  () => {
                    setBasicSlideoverPreview(false);
                  }
                "
              >
                <Slideover.Panel>
                  <Slideover.Title class="p-5">
                    <h2 class="mr-auto text-base font-medium">
                      Blank Slide Over
                    </h2>
                  </Slideover.Title>
                  <Slideover.Description>
                    This is totally awesome blank slide over!
                  </Slideover.Description>
                </Slideover.Panel>
              </Slideover>
              <!-- END: Slide Over Content -->
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Blank Slide Over -->
      <!-- BEGIN: Slide Over Size -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Slide Over Size</h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-2">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-2"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div id="slideover-size" class="p-5">
          <Preview.Panel>
            <div class="text-center">
              <!-- BEGIN: Small Slide Over Toggle -->
              <Button
                as="a"
                href="#"
                variant="primary"
                @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setSmallSlideoverSizePreview(true);
                        }"
                class="mb-2 mr-1"
              >
                Show Small Slide Over
              </Button>
              <!-- END: Small Slide Over Toggle -->
              <!-- BEGIN: Medium Slide Over Toggle -->
              <Button
                as="a"
                href="#"
                variant="primary"
                @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setMediumSlideoverSizePreview(true);
                        }"
                class="mb-2 mr-1"
              >
                Show Medium Slide Over
              </Button>
              <!-- END: Medium Slide Over Toggle -->
              <!-- BEGIN: Large Slide Over Toggle -->
              <Button
                as="a"
                href="#"
                variant="primary"
                @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setLargeSlideoverSizePreview(true);
                        }"
                class="mb-2 mr-1"
              >
                Show Large Slide Over
              </Button>
              <!-- END: Large Slide Over Toggle -->
              <!-- BEGIN: Super Large Slide Over Toggle -->
              <Button
                as="a"
                href="#"
                variant="primary"
                @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setSuperlargeSlideoverSizePreview(true);
                        }"
                class="mb-2 mr-1"
              >
                Show Superlarge Slide Over
              </Button>
              <!-- END: Super Large Slide Over Toggle -->
            </div>
            <!-- BEGIN: Small Slide Over Content -->
            <Slideover
              size="sm"
              :open="smallSlideoverSizePreview"
              @close="
                () => {
                  setSmallSlideoverSizePreview(false);
                }
              "
            >
              <Slideover.Panel>
                <Slideover.Title class="p-5">
                  <h2 class="mr-auto text-base font-medium">
                    Small Slide Over
                  </h2>
                </Slideover.Title>
                <Slideover.Description>
                  This is totally awesome small slide over!
                </Slideover.Description>
              </Slideover.Panel>
            </Slideover>
            <!-- END: Small Slide Over Content -->
            <!-- BEGIN: Medium Slide Over Content -->
            <Slideover
              :open="mediumSlideoverSizePreview"
              @close="
                () => {
                  setMediumSlideoverSizePreview(false);
                }
              "
            >
              <Slideover.Panel>
                <Slideover.Title class="p-5">
                  <h2 class="mr-auto text-base font-medium">
                    Medium Slide Over
                  </h2>
                </Slideover.Title>
                <Slideover.Description>
                  This is totally awesome medium slide over!
                </Slideover.Description>
              </Slideover.Panel>
            </Slideover>
            <!-- END: Medium Slide Over Content -->
            <!-- BEGIN: Large Slide Over Content -->
            <Slideover
              size="lg"
              :open="largeSlideoverSizePreview"
              @close="
                () => {
                  setLargeSlideoverSizePreview(false);
                }
              "
            >
              <Slideover.Panel>
                <Slideover.Title class="p-5">
                  <h2 class="mr-auto text-base font-medium">
                    Large Slide Over
                  </h2>
                </Slideover.Title>
                <Slideover.Description>
                  This is totally awesome large slide over!
                </Slideover.Description>
              </Slideover.Panel>
            </Slideover>
            <!-- END: Large Slide Over Content -->
            <!-- BEGIN: Super Large Slide Over Content -->
            <Slideover
              size="xl"
              :open="superlargeSlideoverSizePreview"
              @close="
                () => {
                  setSuperlargeSlideoverSizePreview(false);
                }
              "
            >
              <Slideover.Panel>
                <Slideover.Title class="p-5">
                  <h2 class="mr-auto text-base font-medium">
                    Superlarge Slide Over
                  </h2>
                </Slideover.Title>
                <Slideover.Description>
                  This is totally awesome superlarge slide over!
                </Slideover.Description>
              </Slideover.Panel>
            </Slideover>
            <!-- END: Super Large Slide Over Content -->
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="text-center">
                <!-- BEGIN: Small Slide Over Toggle -->
                <Button
                  as="a"
                  href="#"
                  variant="primary"
                  @click="(event: MouseEvent) => {
                      event.preventDefault();
                      setSmallSlideoverSizePreview(true);
                    }"
                  class="mb-2 mr-1"
                >
                  Show Small Slide Over
                </Button>
                <!-- END: Small Slide Over Toggle -->
                <!-- BEGIN: Medium Slide Over Toggle -->
                <Button
                  as="a"
                  href="#"
                  variant="primary"
                  @click="(event: MouseEvent) => {
                      event.preventDefault();
                      setMediumSlideoverSizePreview(true);
                    }"
                  class="mb-2 mr-1"
                >
                  Show Medium Slide Over
                </Button>
                <!-- END: Medium Slide Over Toggle -->
                <!-- BEGIN: Large Slide Over Toggle -->
                <Button
                  as="a"
                  href="#"
                  variant="primary"
                  @click="(event: MouseEvent) => {
                      event.preventDefault();
                      setLargeSlideoverSizePreview(true);
                    }"
                  class="mb-2 mr-1"
                >
                  Show Large Slide Over
                </Button>
                <!-- END: Large Slide Over Toggle -->
                <!-- BEGIN: Super Large Slide Over Toggle -->
                <Button
                  as="a"
                  href="#"
                  variant="primary"
                  @click="(event: MouseEvent) => {
                      event.preventDefault();
                      setSuperlargeSlideoverSizePreview(true);
                    }"
                  class="mb-2 mr-1"
                >
                  Show Superlarge Slide Over
                </Button>
                <!-- END: Super Large Slide Over Toggle -->
              </div>
              <!-- BEGIN: Small Slide Over Content -->
              <Slideover
                size="sm"
                :open="smallSlideoverSizePreview"
                @close="
                  () => {
                    setSmallSlideoverSizePreview(false);
                  }
                "
              >
                <Slideover.Panel>
                  <Slideover.Title class="p-5">
                    <h2 class="mr-auto text-base font-medium">
                      Small Slide Over
                    </h2>
                  </Slideover.Title>
                  <Slideover.Description>
                    This is totally awesome small slide over!
                  </Slideover.Description>
                </Slideover.Panel>
              </Slideover>
              <!-- END: Small Slide Over Content -->
              <!-- BEGIN: Medium Slide Over Content -->
              <Slideover
                :open="mediumSlideoverSizePreview"
                @close="
                  () => {
                    setMediumSlideoverSizePreview(false);
                  }
                "
              >
                <Slideover.Panel>
                  <Slideover.Title class="p-5">
                    <h2 class="mr-auto text-base font-medium">
                      Medium Slide Over
                    </h2>
                  </Slideover.Title>
                  <Slideover.Description>
                    This is totally awesome medium slide over!
                  </Slideover.Description>
                </Slideover.Panel>
              </Slideover>
              <!-- END: Medium Slide Over Content -->
              <!-- BEGIN: Large Slide Over Content -->
              <Slideover
                size="lg"
                :open="largeSlideoverSizePreview"
                @close="
                  () => {
                    setLargeSlideoverSizePreview(false);
                  }
                "
              >
                <Slideover.Panel>
                  <Slideover.Title class="p-5">
                    <h2 class="mr-auto text-base font-medium">
                      Large Slide Over
                    </h2>
                  </Slideover.Title>
                  <Slideover.Description>
                    This is totally awesome large slide over!
                  </Slideover.Description>
                </Slideover.Panel>
              </Slideover>
              <!-- END: Large Slide Over Content -->
              <!-- BEGIN: Super Large Slide Over Content -->
              <Slideover
                size="xl"
                :open="superlargeSlideoverSizePreview"
                @close="
                  () => {
                    setSuperlargeSlideoverSizePreview(false);
                  }
                "
              >
                <Slideover.Panel>
                  <Slideover.Title class="p-5">
                    <h2 class="mr-auto text-base font-medium">
                      Superlarge Slide Over
                    </h2>
                  </Slideover.Title>
                  <Slideover.Description>
                    This is totally awesome superlarge slide over!
                  </Slideover.Description>
                </Slideover.Panel>
              </Slideover>
              <!-- END: Super Large Slide Over Content -->
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Slide Over Size -->
      <!-- BEGIN: Slide Over With Close Button -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">
            Slide Over With Close Button
          </h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-3">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-3"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div id="button-slideover" class="p-5">
          <Preview.Panel>
            <!-- BEGIN: Modal Toggle -->
            <div class="text-center">
              <Button
                as="a"
                href="#"
                variant="primary"
                @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setButtonSlideoverPreview(true);
                        }"
              >
                Show Slide Over
              </Button>
            </div>
            <!-- END: Modal Toggle -->
            <!-- BEGIN: Modal Content -->
            <Slideover
              backdrop="static"
              :open="buttonSlideoverPreview"
              @close="
                () => {
                  setButtonSlideoverPreview(false);
                }
              "
            >
              <Slideover.Panel>
                <a
                  @click="(event: MouseEvent) => {
                            event.preventDefault();
                            setButtonSlideoverPreview(false);
                          }"
                  class="absolute top-0 left-0 right-auto mt-4 -ml-12"
                  href="#"
                >
                  <Lucide icon="X" class="w-8 h-8 text-slate-400" />
                </a>
                <Slideover.Title class="p-5">
                  <h2 class="mr-auto text-base font-medium">
                    Slide Over With Close Button
                  </h2>
                </Slideover.Title>
                <Slideover.Description>
                  This is totally awesome slide over with close button!
                </Slideover.Description>
              </Slideover.Panel>
            </Slideover>
            <!-- END: Modal Content -->
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <!-- BEGIN: Modal Toggle -->
              <div class="text-center">
                <Button
                  as="a"
                  href="#"
                  variant="primary"
                  @click="(event: MouseEvent) => {
                      event.preventDefault();
                      setButtonSlideoverPreview(true);
                    }"
                >
                  Show Slide Over
                </Button>
              </div>
              <!-- END: Modal Toggle -->
              <!-- BEGIN: Modal Content -->
              <Slideover
                backdrop="static"
                :open="buttonSlideoverPreview"
                @close="
                  () => {
                    setButtonSlideoverPreview(false);
                  }
                "
              >
                <Slideover.Panel>
                  <a
                    @click="(event: MouseEvent) => {
                        event.preventDefault();
                        setButtonSlideoverPreview(false);
                      }"
                    class="absolute top-0 left-0 right-auto mt-4 -ml-12"
                    href="#"
                  >
                    <Lucide icon="X" class="w-8 h-8 text-slate-400" />
                  </a>
                  <Slideover.Title class="p-5">
                    <h2 class="mr-auto text-base font-medium">
                      Slide Over With Close Button
                    </h2>
                  </Slideover.Title>
                  <Slideover.Description>
                    This is totally awesome slide over with close button!
                  </Slideover.Description>
                </Slideover.Panel>
              </Slideover>
              <!-- END: Modal Content -->
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Slide Over With Close Button -->
    </div>
    <div class="col-span-12 intro-y lg:col-span-6">
      <!-- BEGIN: Overlapping Slide Over -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Overlapping Slide Over</h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-4">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-4"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div id="overlapping-slideover" class="p-5">
          <Preview.Panel>
            <!-- BEGIN: Slide Over Toggle -->
            <div class="text-center">
              <Button
                as="a"
                href="#"
                variant="primary"
                @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setOverlappingSlideoverPreview(true);
                        }"
              >
                Show Slide Over
              </Button>
            </div>
            <!-- END: Slide Over Toggle -->
            <!-- BEGIN: Slide Over Content -->
            <Slideover
              :open="overlappingSlideoverPreview"
              @close="
                () => {
                  setOverlappingSlideoverPreview(false);
                }
              "
            >
              <Slideover.Panel>
                <Slideover.Title class="p-5">
                  <h2 class="mr-auto text-base font-medium">
                    Overlapping Slide Over
                  </h2>
                </Slideover.Title>
                <Slideover.Description class="px-5 py-10">
                  <div class="text-center">
                    <div class="mb-5">
                      Click button bellow to show overlapping slide over!
                    </div>
                    <!-- BEGIN: Overlapping Slide Over Toggle -->
                    <Button
                      as="a"
                      href="#"
                      variant="primary"
                      @click="(event: MouseEvent) => {
                                event.preventDefault();
                                setNextOverlappingSlideoverPreview(true);
                              }"
                    >
                      Show Overlapping Slide Over
                    </Button>
                    <!-- END: Overlapping Slide Over Toggle -->
                    <!-- BEGIN: Overlapping Slide Over Content -->
                    <Slideover
                      :open="nextOverlappingSlideoverPreview"
                      @close="
                        () => {
                          setNextOverlappingSlideoverPreview(false);
                        }
                      "
                    >
                      <Slideover.Panel>
                        <Slideover.Title class="p-5">
                          <h2 class="mr-auto text-base font-medium">
                            Overlapping Slide Over
                          </h2>
                        </Slideover.Title>
                        <Slideover.Description class="text-center">
                          This is totally awesome overlapping slide over!
                        </Slideover.Description>
                      </Slideover.Panel>
                    </Slideover>
                    <!-- END: Overlapping Slide Over Content -->
                  </div>
                </Slideover.Description>
              </Slideover.Panel>
            </Slideover>
            <!-- END: Slide Over Content -->
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <!-- BEGIN: Slide Over Toggle -->
              <div class="text-center">
                <Button
                  as="a"
                  href="#"
                  variant="primary"
                  @click="(event: MouseEvent) => {
                      event.preventDefault();
                      setOverlappingSlideoverPreview(true);
                    }"
                >
                  Show Slide Over
                </Button>
              </div>
              <!-- END: Slide Over Toggle -->
              <!-- BEGIN: Slide Over Content -->
              <Slideover
                :open="overlappingSlideoverPreview"
                @close="
                  () => {
                    setOverlappingSlideoverPreview(false);
                  }
                "
              >
                <Slideover.Panel>
                  <Slideover.Title class="p-5">
                    <h2 class="mr-auto text-base font-medium">
                      Overlapping Slide Over
                    </h2>
                  </Slideover.Title>
                  <Slideover.Description class="px-5 py-10">
                    <div class="text-center">
                      <div class="mb-5">
                        Click button bellow to show overlapping slide over!
                      </div>
                      <!-- BEGIN: Overlapping Slide Over Toggle -->
                      <Button
                        as="a"
                        href="#"
                        variant="primary"
                        @click="(event: MouseEvent) => {
                            event.preventDefault();
                            setNextOverlappingSlideoverPreview(true);
                          }"
                      >
                        Show Overlapping Slide Over
                      </Button>
                      <!-- END: Overlapping Slide Over Toggle -->
                      <!-- BEGIN: Overlapping Slide Over Content -->
                      <Slideover
                        :open="nextOverlappingSlideoverPreview"
                        @close="
                          () => {
                            setNextOverlappingSlideoverPreview(false);
                          }
                        "
                      >
                        <Slideover.Panel>
                          <Slideover.Title class="p-5">
                            <h2 class="mr-auto text-base font-medium">
                              Overlapping Slide Over
                            </h2>
                          </Slideover.Title>
                          <Slideover.Description class="text-center">
                            This is totally awesome overlapping slide over!
                          </Slideover.Description>
                        </Slideover.Panel>
                      </Slideover>
                      <!-- END: Overlapping Slide Over Content -->
                    </div>
                  </Slideover.Description>
                </Slideover.Panel>
              </Slideover>
              <!-- END: Slide Over Content -->
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Overlapping Slide Over -->
      <!-- BEGIN: Header & Footer Slide Over -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">
            Header & Footer Slide Over
          </h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-5">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-5"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div id="header-footer-slideover" class="p-5">
          <Preview.Panel>
            <!-- BEGIN: Slide Over Toggle -->
            <div class="text-center">
              <Button
                as="a"
                href="#"
                variant="primary"
                @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setHeaderFooterSlideoverPreview(true);
                        }"
              >
                Show Slide Over
              </Button>
            </div>
            <!-- END: Slide Over Toggle -->
            <!-- BEGIN: Slide Over Content -->
            <Slideover
              backdrop="static"
              :open="headerFooterSlideoverPreview"
              @close="
                () => {
                  setHeaderFooterSlideoverPreview(false);
                }
              "
            >
              <!-- BEGIN: Slide Over Header -->
              <Slideover.Panel>
                <a
                  @click="(event: MouseEvent) => {
                            event.preventDefault();
                            setHeaderFooterSlideoverPreview(false);
                          }"
                  class="absolute top-0 left-0 right-auto mt-4 -ml-12"
                  href="#"
                >
                  <Lucide icon="X" class="w-8 h-8 text-slate-400" />
                </a>
                <Slideover.Title>
                  <h2 class="mr-auto text-base font-medium">
                    Broadcast Message
                  </h2>
                  <Button variant="outline-secondary" class="hidden sm:flex">
                    <Lucide icon="File" class="w-4 h-4 mr-2" />
                    Download Docs
                  </Button>
                  <Menu class="sm:hidden">
                    <Menu.Button as="a" class="block w-5 h-5" href="#">
                      <Lucide
                        icon="MoreHorizontal"
                        class="w-5 h-5 text-slate-500"
                      />
                    </Menu.Button>
                    <Menu.Items class="w-40">
                      <Menu.Item>
                        <Lucide icon="File" class="w-4 h-4 mr-2" />
                        Download Docs
                      </Menu.Item>
                    </Menu.Items>
                  </Menu>
                </Slideover.Title>
                <!-- END: Slide Over Header -->
                <!-- BEGIN: Slide Over Body -->
                <Slideover.Description>
                  <div>
                    <FormLabel htmlFor="modal-form-1">From</FormLabel>
                    <FormInput
                      id="modal-form-1"
                      type="text"
                      placeholder="example@gmail.com"
                    />
                  </div>
                  <div class="mt-3">
                    <FormLabel htmlFor="modal-form-2">To</FormLabel>
                    <FormInput
                      id="modal-form-2"
                      type="text"
                      placeholder="example@gmail.com"
                    />
                  </div>
                  <div class="mt-3">
                    <FormLabel htmlFor="modal-form-3"> Subject </FormLabel>
                    <FormInput
                      id="modal-form-3"
                      type="text"
                      placeholder="Important Meeting"
                    />
                  </div>
                  <div class="mt-3">
                    <FormLabel htmlFor="modal-form-4">
                      Has the Words
                    </FormLabel>
                    <FormInput
                      id="modal-form-4"
                      type="text"
                      placeholder="Job, Work, Documentation"
                    />
                  </div>
                  <div class="mt-3">
                    <FormLabel htmlFor="modal-form-5"> Doesn't Have </FormLabel>
                    <FormInput
                      id="modal-form-5"
                      type="text"
                      placeholder="Job, Work, Documentation"
                    />
                  </div>
                  <div class="mt-3">
                    <FormLabel htmlFor="modal-form-6">Size</FormLabel>
                    <FormSelect id="modal-form-6">
                      <option>10</option>
                      <option>25</option>
                      <option>35</option>
                      <option>50</option>
                    </FormSelect>
                  </div>
                </Slideover.Description>
                <!-- END: Slide Over Body -->
                <!-- BEGIN: Slide Over Footer -->
                <Slideover.Footer>
                  <Button
                    variant="outline-secondary"
                    type="button"
                    @click="
                      () => {
                        setHeaderFooterSlideoverPreview(false);
                      }
                    "
                    class="w-20 mr-1"
                  >
                    Cancel
                  </Button>
                  <Button variant="primary" type="button" class="w-20">
                    Send
                  </Button>
                </Slideover.Footer>
              </Slideover.Panel>
              <!-- END: Slide Over Footer -->
            </Slideover>
            <!-- END: Slide Over Content -->
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <!-- BEGIN: Slide Over Toggle -->
              <div class="text-center">
                <Button
                  as="a"
                  href="#"
                  variant="primary"
                  @click="(event: MouseEvent) => {
                      event.preventDefault();
                      setHeaderFooterSlideoverPreview(true);
                    }"
                >
                  Show Slide Over
                </Button>
              </div>
              <!-- END: Slide Over Toggle -->
              <!-- BEGIN: Slide Over Content -->
              <Slideover
                backdrop="static"
                :open="headerFooterSlideoverPreview"
                @close="
                  () => {
                    setHeaderFooterSlideoverPreview(false);
                  }
                "
              >
                <!-- BEGIN: Slide Over Header -->
                <Slideover.Panel>
                  <a
                    @click="(event: MouseEvent) => {
                        event.preventDefault();
                        setHeaderFooterSlideoverPreview(false);
                      }"
                    class="absolute top-0 left-0 right-auto mt-4 -ml-12"
                    href="#"
                  >
                    <Lucide icon="X" class="w-8 h-8 text-slate-400" />
                  </a>
                  <Slideover.Title>
                    <h2 class="mr-auto text-base font-medium">
                      Broadcast Message
                    </h2>
                    <Button variant="outline-secondary" class="hidden sm:flex">
                      <Lucide icon="File" class="w-4 h-4 mr-2" />
                      Download Docs
                    </Button>
                    <Menu class="sm:hidden">
                      <Menu.Button as="a" class="block w-5 h-5" href="#">
                        <Lucide
                          icon="MoreHorizontal"
                          class="w-5 h-5 text-slate-500"
                        />
                      </Menu.Button>
                      <Menu.Items class="w-40">
                        <Menu.Item>
                          <Lucide icon="File" class="w-4 h-4 mr-2" />
                          Download Docs
                        </Menu.Item>
                      </Menu.Items>
                    </Menu>
                  </Slideover.Title>
                  <!-- END: Slide Over Header -->
                  <!-- BEGIN: Slide Over Body -->
                  <Slideover.Description>
                    <div>
                      <FormLabel htmlFor="modal-form-1"> From </FormLabel>
                      <FormInput
                        id="modal-form-1"
                        type="text"
                        placeholder="example@gmail.com"
                      />
                    </div>
                    <div class="mt-3">
                      <FormLabel htmlFor="modal-form-2"> To </FormLabel>
                      <FormInput
                        id="modal-form-2"
                        type="text"
                        placeholder="example@gmail.com"
                      />
                    </div>
                    <div class="mt-3">
                      <FormLabel htmlFor="modal-form-3"> Subject </FormLabel>
                      <FormInput
                        id="modal-form-3"
                        type="text"
                        placeholder="Important Meeting"
                      />
                    </div>
                    <div class="mt-3">
                      <FormLabel htmlFor="modal-form-4">
                        Has the Words
                      </FormLabel>
                      <FormInput
                        id="modal-form-4"
                        type="text"
                        placeholder="Job, Work, Documentation"
                      />
                    </div>
                    <div class="mt-3">
                      <FormLabel htmlFor="modal-form-5">
                        Doesn't Have
                      </FormLabel>
                      <FormInput
                        id="modal-form-5"
                        type="text"
                        placeholder="Job, Work, Documentation"
                      />
                    </div>
                    <div class="mt-3">
                      <FormLabel htmlFor="modal-form-6"> Size </FormLabel>
                      <FormSelect id="modal-form-6">
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                      </FormSelect>
                    </div>
                  </Slideover.Description>
                  <!-- END: Slide Over Body -->
                  <!-- BEGIN: Slide Over Footer -->
                  <Slideover.Footer>
                    <Button
                      variant="outline-secondary"
                      type="button"
                      @click="
                        () => {
                          setHeaderFooterSlideoverPreview(false);
                        }
                      "
                      class="w-20 mr-1"
                    >
                      Cancel
                    </Button>
                    <Button variant="primary" type="button" class="w-20">
                      Send
                    </Button>
                  </Slideover.Footer>
                </Slideover.Panel>
                <!-- END: Slide Over Footer -->
              </Slideover>
              <!-- END: Slide Over Content -->
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Header & Footer Slide Over -->
      <!-- BEGIN: Programmatically Show/Hide Slide Over -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">
            Programmatically Show/Hide Slide Over
          </h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-6">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-6"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div id="programmatically-show-hide-slideover" class="p-5">
          <Preview.Panel>
            <!-- BEGIN: Show Slide Over Toggle -->
            <div class="text-center">
              <Button
                as="a"
                id="programmatically-show-slideover"
                href="#"
                variant="primary"
                class="mb-2 mr-1"
                @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setProgrammaticallySlideover(true);
                        }"
              >
                Show Slide Over
              </Button>
            </div>
            <!-- END: Show Slide Over Toggle -->
            <!-- BEGIN: Slide Over Content -->
            <Slideover
              :open="programmaticallySlideover"
              @close="
                () => {
                  setProgrammaticallySlideover(false);
                }
              "
            >
              <Slideover.Panel>
                <Slideover.Title class="p-5">
                  <h2 class="mr-auto text-base font-medium">
                    Programmatically Show/Hide Slide Over
                  </h2>
                </Slideover.Title>
                <Slideover.Description class="p-10 text-center">
                  <!-- BEGIN: Hide Slide Over Toggle -->
                  <Button
                    as="a"
                    id="programmatically-hide-slideover"
                    href="#"
                    variant="primary"
                    class="mr-1"
                    @click="(event: MouseEvent) => {
                              event.preventDefault();
                              setProgrammaticallySlideover(false);
                            }"
                  >
                    Hide Slide Over
                  </Button>
                  <!-- END: Hide Slide Over Toggle -->
                  <!-- BEGIN: Toggle Slide Over Toggle -->
                  <Button
                    as="a"
                    id="programmatically-toggle-slideover"
                    href="#"
                    variant="primary"
                    class="mt-2 mr-1 sm:mt-0"
                    @click="(event: MouseEvent) => {
                              event.preventDefault();
                              setProgrammaticallySlideover(
                                !programmaticallySlideover
                              );
                            }"
                  >
                    Toggle Slide Over
                  </Button>
                  <!-- END: Toggle Slide Over Toggle -->
                </Slideover.Description>
              </Slideover.Panel>
            </Slideover>
            <!-- END: Slide Over Content -->
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <!-- BEGIN: Show Slide Over Toggle -->
              <div class="text-center">
                <Button
                  as="a"
                  id="programmatically-show-slideover"
                  href="#"
                  variant="primary"
                  class="mb-2 mr-1"
                  @click="(event: MouseEvent) => {
                      event.preventDefault();
                      setProgrammaticallySlideover(true);
                    }"
                >
                  Show Slide Over
                </Button>
              </div>
              <!-- END: Show Slide Over Toggle -->
              <!-- BEGIN: Slide Over Content -->
              <Slideover
                :open="programmaticallySlideover"
                @close="
                  () => {
                    setProgrammaticallySlideover(false);
                  }
                "
              >
                <Slideover.Panel>
                  <Slideover.Title class="p-5">
                    <h2 class="mr-auto text-base font-medium">
                      Programmatically Show/Hide Slide Over
                    </h2>
                  </Slideover.Title>
                  <Slideover.Description class="p-10 text-center">
                    <!-- BEGIN: Hide Slide Over Toggle -->
                    <Button
                      as="a"
                      id="programmatically-hide-slideover"
                      href="#"
                      variant="primary"
                      class="mr-1"
                      @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setProgrammaticallySlideover(false);
                        }"
                    >
                      Hide Slide Over
                    </Button>
                    <!-- END: Hide Slide Over Toggle -->
                    <!-- BEGIN: Toggle Slide Over Toggle -->
                    <Button
                      as="a"
                      id="programmatically-toggle-slideover"
                      href="#"
                      variant="primary"
                      class="mt-2 mr-1 sm:mt-0"
                      @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setProgrammaticallySlideover(
                            !programmaticallySlideover
                          );
                        }"
                    >
                      Toggle Slide Over
                    </Button>
                    <!-- END: Toggle Slide Over Toggle -->
                  </Slideover.Description>
                </Slideover.Panel>
              </Slideover>
              <!-- END: Slide Over Content -->
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Programmatically Show/Hide Slide Over -->
    </div>
  </div>
</template>
