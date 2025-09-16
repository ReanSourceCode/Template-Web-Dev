<script setup lang="ts">
import Preview from "@/components/Base/Preview";
import {
  FormLabel,
  FormSwitch,
  FormInput,
  FormSelect,
} from "@/components/Base/Form";
import { Menu, Dialog } from "@/components/Base/Headless";
import TinySlider from "@/components/Base/TinySlider";
import Button from "@/components/Base/Button";
import Lucide from "@/components/Base/Lucide";
import fakerData from "@/utils/faker";
import { ref } from "vue";

const basicModalPreview = ref(false);
const setBasicModalPreview = (value: boolean) => {
  basicModalPreview.value = value;
};
const smallModalSizePreview = ref(false);
const setSmallModalSizePreview = (value: boolean) => {
  smallModalSizePreview.value = value;
};
const mediumModalSizePreview = ref(false);
const setMediumModalSizePreview = (value: boolean) => {
  mediumModalSizePreview.value = value;
};
const largeModalSizePreview = ref(false);
const setLargeModalSizePreview = (value: boolean) => {
  largeModalSizePreview.value = value;
};
const superlargeModalSizePreview = ref(false);
const setSuperlargeModalSizePreview = (value: boolean) => {
  superlargeModalSizePreview.value = value;
};
const programmaticallyModal = ref(false);
const setProgrammaticallyModal = (value: boolean) => {
  programmaticallyModal.value = value;
};
const warningModalPreview = ref(false);
const setWarningModalPreview = (value: boolean) => {
  warningModalPreview.value = value;
};
const buttonModalPreview = ref(false);
const setButtonModalPreview = (value: boolean) => {
  buttonModalPreview.value = value;
};
const staticBackdropModalPreview = ref(false);
const setStaticBackdropModalPreview = (value: boolean) => {
  staticBackdropModalPreview.value = value;
};
const overlappingModalPreview = ref(false);
const setOverlappingModalPreview = (value: boolean) => {
  overlappingModalPreview.value = value;
};
const nextOverlappingModalPreview = ref(false);
const setNextOverlappingModalPreview = (value: boolean) => {
  nextOverlappingModalPreview.value = value;
};
const headerFooterModalPreview = ref(false);
const setHeaderFooterModalPreview = (value: boolean) => {
  headerFooterModalPreview.value = value;
};
const deleteModalPreview = ref(false);
const setDeleteModalPreview = (value: boolean) => {
  deleteModalPreview.value = value;
};
const successModalPreview = ref(false);
const setSuccessModalPreview = (value: boolean) => {
  successModalPreview.value = value;
};
const tinySliderModalPreview = ref(false);
const setTinySliderModalPreview = (value: boolean) => {
  tinySliderModalPreview.value = value;
};
const sendButtonRef = ref(null);
const deleteButtonRef = ref(null);
</script>

<template>
  <div class="flex items-center mt-8 intro-y">
    <h2 class="mr-auto text-lg font-medium">Modal</h2>
  </div>
  <div class="grid grid-cols-12 gap-6 mt-5">
    <div class="col-span-12 intro-y lg:col-span-6">
      <!-- BEGIN: Blank Modal -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Blank Modal</h2>
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
        <div class="p-5">
          <Preview.Panel>
            <!-- BEGIN: Modal Toggle -->
            <div class="text-center">
              <Button
                as="a"
                variant="primary"
                @click="
                  () => {
                    setBasicModalPreview(true);
                  }
                "
              >
                Show Modal
              </Button>
            </div>
            <!-- END: Modal Toggle -->
            <!-- BEGIN: Modal Content -->
            <Dialog
              :open="basicModalPreview"
              @close="
                () => {
                  setBasicModalPreview(false);
                }
              "
            >
              <Dialog.Panel class="p-10 text-center">
                This is totally awesome blank modal!
              </Dialog.Panel>
            </Dialog>
            <!-- END: Modal Content -->
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <!-- BEGIN: Modal Toggle -->
              <div class="text-center">
                <Button
                  as="a"
                  variant="primary"
                  @click="
                    () => {
                      setBasicModalPreview(true);
                    }
                  "
                >
                  Show Modal
                </Button>
              </div>
              <!-- END: Modal Toggle -->
              <!-- BEGIN: Modal Content -->
              <Dialog
                :open="basicModalPreview"
                @close="
                  () => {
                    setBasicModalPreview(false);
                  }
                "
              >
                <Dialog.Panel class="p-10 text-center">
                  This is totally awesome blank modal!
                </Dialog.Panel>
              </Dialog>
              <!-- END: Modal Content -->
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Blank Modal -->
      <!-- BEGIN: Modal Size -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Modal Size</h2>
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
        <div class="p-5">
          <Preview.Panel>
            <div class="text-center">
              <!-- BEGIN: Small Modal Toggle -->
              <Button
                as="a"
                href="#"
                variant="primary"
                @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setSmallModalSizePreview(true);
                        }"
                class="mb-2 mr-1"
              >
                Show Small Modal
              </Button>
              <!-- END: Small Modal Toggle -->
              <!-- BEGIN: Medium Modal Toggle -->
              <Button
                as="a"
                href="#"
                variant="primary"
                @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setMediumModalSizePreview(true);
                        }"
                class="mb-2 mr-1"
              >
                Show Medium Modal
              </Button>
              <!-- END: Medium Modal Toggle -->
              <!-- BEGIN: Large Modal Toggle -->
              <Button
                as="a"
                href="#"
                variant="primary"
                @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setLargeModalSizePreview(true);
                        }"
                class="mb-2 mr-1"
              >
                Show Large Modal
              </Button>
              <!-- END: Large Modal Toggle -->
              <!-- BEGIN: Super Large Modal Toggle -->
              <Button
                as="a"
                href="#"
                variant="primary"
                @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setSuperlargeModalSizePreview(true);
                        }"
                class="mb-2 mr-1"
              >
                Show Superlarge Modal
              </Button>
              <!-- END: Super Large Modal Toggle -->
            </div>
            <!-- BEGIN: Small Modal Content -->
            <Dialog
              size="sm"
              :open="smallModalSizePreview"
              @close="
                () => {
                  setSmallModalSizePreview(false);
                }
              "
            >
              <Dialog.Panel class="p-10 text-center">
                This is totally awesome small modal!
              </Dialog.Panel>
            </Dialog>
            <!-- END: Small Modal Content -->
            <!-- BEGIN: Medium Modal Content -->
            <Dialog
              :open="mediumModalSizePreview"
              @close="
                () => {
                  setMediumModalSizePreview(false);
                }
              "
            >
              <Dialog.Panel class="p-10 text-center">
                This is totally awesome medium modal!
              </Dialog.Panel>
            </Dialog>
            <!-- END: Medium Modal Content -->
            <!-- BEGIN: Large Modal Content -->
            <Dialog
              size="lg"
              :open="largeModalSizePreview"
              @close="
                () => {
                  setLargeModalSizePreview(false);
                }
              "
            >
              <Dialog.Panel class="p-10 text-center">
                This is totally awesome large modal!
              </Dialog.Panel>
            </Dialog>
            <!-- END: Large Modal Content -->
            <!-- BEGIN: Super Large Modal Content -->
            <Dialog
              size="xl"
              :open="superlargeModalSizePreview"
              @close="
                () => {
                  setSuperlargeModalSizePreview(false);
                }
              "
            >
              <Dialog.Panel class="p-10 text-center">
                This is totally awesome superlarge modal!
              </Dialog.Panel>
            </Dialog>
            <!-- END: Super Large Modal Content -->
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="text-center">
                <!-- BEGIN: Small Modal Toggle -->
                <Button
                  as="a"
                  href="#"
                  variant="primary"
                  @click="(event: MouseEvent) => {
                    event.preventDefault();
                    setSmallModalSizePreview(true);
                  }"
                  class="mb-2 mr-1"
                >
                  Show Small Modal
                </Button>
                <!-- END: Small Modal Toggle -->
                <!-- BEGIN: Medium Modal Toggle -->
                <Button
                  as="a"
                  href="#"
                  variant="primary"
                  @click="(event: MouseEvent) => {
                    event.preventDefault();
                    setMediumModalSizePreview(true);
                  }"
                  class="mb-2 mr-1"
                >
                  Show Medium Modal
                </Button>
                <!-- END: Medium Modal Toggle -->
                <!-- BEGIN: Large Modal Toggle -->
                <Button
                  as="a"
                  href="#"
                  variant="primary"
                  @click="(event: MouseEvent) => {
                    event.preventDefault();
                    setLargeModalSizePreview(true);
                  }"
                  class="mb-2 mr-1"
                >
                  Show Large Modal
                </Button>
                <!-- END: Large Modal Toggle -->
                <!-- BEGIN: Super Large Modal Toggle -->
                <Button
                  as="a"
                  href="#"
                  variant="primary"
                  @click="(event: MouseEvent) => {
                    event.preventDefault();
                    setSuperlargeModalSizePreview(true);
                  }"
                  class="mb-2 mr-1"
                >
                  Show Superlarge Modal
                </Button>
                <!-- END: Super Large Modal Toggle -->
              </div>
              <!-- BEGIN: Small Modal Content -->
              <Dialog
                size="sm"
                :open="smallModalSizePreview"
                @close="
                  () => {
                    setSmallModalSizePreview(false);
                  }
                "
              >
                <Dialog.Panel class="p-10 text-center">
                  This is totally awesome small modal!
                </Dialog.Panel>
              </Dialog>
              <!-- END: Small Modal Content -->
              <!-- BEGIN: Medium Modal Content -->
              <Dialog
                :open="mediumModalSizePreview"
                @close="
                  () => {
                    setMediumModalSizePreview(false);
                  }
                "
              >
                <Dialog.Panel class="p-10 text-center">
                  This is totally awesome medium modal!
                </Dialog.Panel>
              </Dialog>
              <!-- END: Medium Modal Content -->
              <!-- BEGIN: Large Modal Content -->
              <Dialog
                size="lg"
                :open="largeModalSizePreview"
                @close="
                  () => {
                    setLargeModalSizePreview(false);
                  }
                "
              >
                <Dialog.Panel class="p-10 text-center">
                  This is totally awesome large modal!
                </Dialog.Panel>
              </Dialog>
              <!-- END: Large Modal Content -->
              <!-- BEGIN: Super Large Modal Content -->
              <Dialog
                size="xl"
                :open="superlargeModalSizePreview"
                @close="
                  () => {
                    setSuperlargeModalSizePreview(false);
                  }
                "
              >
                <Dialog.Panel class="p-10 text-center">
                  This is totally awesome superlarge modal!
                </Dialog.Panel>
              </Dialog>
              <!-- END: Super Large Modal Content -->
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Modal Size -->
      <!-- BEGIN: Warning Modal -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Warning Modal</h2>
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
        <div class="p-5">
          <Preview.Panel>
            <!-- BEGIN: Modal Toggle -->
            <div class="text-center">
              <Button
                as="a"
                href="#"
                variant="primary"
                @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setWarningModalPreview(true);
                        }"
              >
                Show Modal
              </Button>
            </div>
            <!-- END: Modal Toggle -->
            <!-- BEGIN: Modal Content -->
            <Dialog
              :open="warningModalPreview"
              @close="
                () => {
                  setWarningModalPreview(false);
                }
              "
            >
              <Dialog.Panel>
                <div class="p-5 text-center">
                  <Lucide
                    icon="XCircle"
                    class="w-16 h-16 mx-auto mt-3 text-warning"
                  />
                  <div class="mt-5 text-3xl">Oops...</div>
                  <div class="mt-2 text-slate-500">Something went wrong!</div>
                </div>
                <div class="px-5 pb-8 text-center">
                  <Button
                    type="button"
                    variant="primary"
                    @click="
                      () => {
                        setWarningModalPreview(false);
                      }
                    "
                    class="w-24"
                  >
                    Ok
                  </Button>
                </div>
                <div
                  class="p-5 text-center border-t border-slate-200/60 dark:border-darkmode-400"
                >
                  <a href="" class="text-primary">
                    Why do I have this issue?
                  </a>
                </div>
              </Dialog.Panel>
            </Dialog>
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
                      setWarningModalPreview(true);
                    }"
                >
                  Show Modal
                </Button>
              </div>
              <!-- END: Modal Toggle -->
              <!-- BEGIN: Modal Content -->
              <Dialog
                :open="warningModalPreview"
                @close="
                  () => {
                    setWarningModalPreview(false);
                  }
                "
              >
                <Dialog.Panel>
                  <div class="p-5 text-center">
                    <Lucide
                      icon="XCircle"
                      class="w-16 h-16 mx-auto mt-3 text-warning"
                    />
                    <div class="mt-5 text-3xl">Oops...</div>
                    <div class="mt-2 text-slate-500">Something went wrong!</div>
                  </div>
                  <div class="px-5 pb-8 text-center">
                    <Button
                      type="button"
                      variant="primary"
                      @click="
                        () => {
                          setWarningModalPreview(false);
                        }
                      "
                      class="w-24"
                    >
                      Ok
                    </Button>
                  </div>
                  <div
                    class="p-5 text-center border-t border-slate-200/60 dark:border-darkmode-400"
                  >
                    <a href="" class="text-primary">
                      Why do I have this issue?
                    </a>
                  </div>
                </Dialog.Panel>
              </Dialog>
              <!-- END: Modal Content -->
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Warning Modal -->
      <!-- BEGIN: Modal With Close Button -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Modal With Close Button</h2>
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
        <div class="p-5">
          <Preview.Panel>
            <!-- BEGIN: Modal Toggle -->
            <div class="text-center">
              <Button
                as="a"
                href="#"
                variant="primary"
                @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setButtonModalPreview(true);
                        }"
              >
                Show Modal
              </Button>
            </div>
            <!-- END: Modal Toggle -->
            <!-- BEGIN: Modal Content -->
            <Dialog
              :open="buttonModalPreview"
              @close="
                () => {
                  setButtonModalPreview(false);
                }
              "
            >
              <Dialog.Panel>
                <a
                  @click="(event: MouseEvent) => {
                            event.preventDefault();
                            setButtonModalPreview(false);
                          }"
                  class="absolute top-0 right-0 mt-3 mr-3"
                  href="#"
                >
                  <Lucide icon="X" class="w-8 h-8 text-slate-400" />
                </a>
                <div class="p-5 text-center">
                  <Lucide
                    icon="CheckCircle"
                    class="w-16 h-16 mx-auto mt-3 text-success"
                  />
                  <div class="mt-5 text-3xl">Modal Example</div>
                  <div class="mt-2 text-slate-500">Modal with close button</div>
                </div>
                <div class="px-5 pb-8 text-center">
                  <Button
                    type="button"
                    variant="primary"
                    @click="
                      () => {
                        setButtonModalPreview(false);
                      }
                    "
                    class="w-24"
                  >
                    Ok
                  </Button>
                </div>
              </Dialog.Panel>
            </Dialog>
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
                      setButtonModalPreview(true);
                    }"
                >
                  Show Modal
                </Button>
              </div>
              <!-- END: Modal Toggle -->
              <!-- BEGIN: Modal Content -->
              <Dialog
                :open="buttonModalPreview"
                @close="
                  () => {
                    setButtonModalPreview(false);
                  }
                "
              >
                <Dialog.Panel>
                  <a
                    @click="(event: MouseEvent) => {
                        event.preventDefault();
                        setButtonModalPreview(false);
                      }"
                    class="absolute top-0 right-0 mt-3 mr-3"
                    href="#"
                  >
                    <Lucide icon="X" class="w-8 h-8 text-slate-400" />
                  </a>
                  <div class="p-5 text-center">
                    <Lucide
                      icon="CheckCircle"
                      class="w-16 h-16 mx-auto mt-3 text-success"
                    />
                    <div class="mt-5 text-3xl">Modal Example</div>
                    <div class="mt-2 text-slate-500">
                      Modal with close button
                    </div>
                  </div>
                  <div class="px-5 pb-8 text-center">
                    <Button
                      type="button"
                      variant="primary"
                      @click="
                        () => {
                          setButtonModalPreview(false);
                        }
                      "
                      class="w-24"
                    >
                      Ok
                    </Button>
                  </div>
                </Dialog.Panel>
              </Dialog>
              <!-- END: Modal Content -->
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Modal With Close Button -->
      <!-- BEGIN: Static Backdrop Modal -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Static Backdrop Modal</h2>
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
        <div class="p-5">
          <Preview.Panel>
            <!-- BEGIN: Modal Toggle -->
            <div class="text-center">
              <Button
                variant="primary"
                @click="
                  () => {
                    setStaticBackdropModalPreview(true);
                  }
                "
              >
                Show Modal
              </Button>
            </div>
            <!-- END: Modal Toggle -->
            <!-- BEGIN: Modal Content -->
            <Dialog
              staticBackdrop
              :open="staticBackdropModalPreview"
              @close="
                () => {
                  setStaticBackdropModalPreview(false);
                }
              "
            >
              <Dialog.Panel class="px-5 py-10">
                <div class="text-center">
                  <div class="mb-5">
                    I will not close if you click outside me. Don't even try to
                    press escape key.
                  </div>
                  <Button
                    type="button"
                    variant="primary"
                    @click="
                      () => {
                        setStaticBackdropModalPreview(false);
                      }
                    "
                    class="w-24"
                  >
                    Ok
                  </Button>
                </div>
              </Dialog.Panel>
            </Dialog>
            <!-- END: Modal Content -->
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <!-- BEGIN: Modal Toggle -->
              <div class="text-center">
                <Button
                  variant="primary"
                  @click="
                    () => {
                      setStaticBackdropModalPreview(true);
                    }
                  "
                >
                  Show Modal
                </Button>
              </div>
              <!-- END: Modal Toggle -->
              <!-- BEGIN: Modal Content -->
              <Dialog
                staticBackdrop
                :open="staticBackdropModalPreview"
                @close="
                  () => {
                    setStaticBackdropModalPreview(false);
                  }
                "
              >
                <Dialog.Panel class="px-5 py-10">
                  <div class="text-center">
                    <div class="mb-5">
                      I will not close if you click outside me. Don't even try
                      to press escape key.
                    </div>
                    <Button
                      type="button"
                      variant="primary"
                      @click="
                        () => {
                          setStaticBackdropModalPreview(false);
                        }
                      "
                      class="w-24"
                    >
                      Ok
                    </Button>
                  </div>
                </Dialog.Panel>
              </Dialog>
              <!-- END: Modal Content -->
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Static Backdrop Modal -->
      <!-- BEGIN: Overlapping Modal -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Overlapping Modal</h2>
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
        <div class="p-5">
          <Preview.Panel>
            <!-- BEGIN: Modal Toggle -->
            <div class="text-center">
              <Button
                as="a"
                href="#"
                variant="primary"
                @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setOverlappingModalPreview(true);
                        }"
              >
                Show Modal
              </Button>
            </div>
            <!-- END: Modal Toggle -->
            <!-- BEGIN: Modal Content -->
            <Dialog
              :open="overlappingModalPreview"
              @close="
                () => {
                  setOverlappingModalPreview(false);
                }
              "
            >
              <Dialog.Panel class="px-5 py-10">
                <div class="text-center">
                  <div class="mb-5">
                    Click button bellow to show overlapping modal!
                  </div>
                  <!-- BEGIN: Overlapping Modal Toggle -->
                  <Button
                    as="a"
                    href="#"
                    variant="primary"
                    @click="(event: MouseEvent) => {
                              event.preventDefault();
                              setNextOverlappingModalPreview(true);
                            }"
                  >
                    Show Overlapping Modal
                  </Button>
                  <!-- END: Overlapping Modal Toggle -->
                </div>
                <!-- BEGIN: Overlapping Modal Content -->
                <Dialog
                  :open="nextOverlappingModalPreview"
                  @close="
                    () => {
                      setNextOverlappingModalPreview(false);
                    }
                  "
                >
                  <Dialog.Panel class="p-5 text-center">
                    This is totally awesome overlapping modal!
                  </Dialog.Panel>
                </Dialog>
                <!-- END: Overlapping Modal Content -->
              </Dialog.Panel>
            </Dialog>
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
                      setOverlappingModalPreview(true);
                    }"
                >
                  Show Modal
                </Button>
              </div>
              <!-- END: Modal Toggle -->
              <!-- BEGIN: Modal Content -->
              <Dialog
                :open="overlappingModalPreview"
                @close="
                  () => {
                    setOverlappingModalPreview(false);
                  }
                "
              >
                <Dialog.Panel class="px-5 py-10">
                  <div class="text-center">
                    <div class="mb-5">
                      Click button bellow to show overlapping modal!
                    </div>
                    <!-- BEGIN: Overlapping Modal Toggle -->
                    <Button
                      as="a"
                      href="#"
                      variant="primary"
                      @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setNextOverlappingModalPreview(true);
                        }"
                    >
                      Show Overlapping Modal
                    </Button>
                    <!-- END: Overlapping Modal Toggle -->
                  </div>
                  <!-- BEGIN: Overlapping Modal Content -->
                  <Dialog
                    :open="nextOverlappingModalPreview"
                    @close="
                      () => {
                        setNextOverlappingModalPreview(false);
                      }
                    "
                  >
                    <Dialog.Panel class="p-5 text-center">
                      This is totally awesome overlapping modal!
                    </Dialog.Panel>
                  </Dialog>
                  <!-- END: Overlapping Modal Content -->
                </Dialog.Panel>
              </Dialog>
              <!-- END: Modal Content -->
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Overlapping Modal -->
    </div>
    <div class="col-span-12 intro-y lg:col-span-6">
      <!-- BEGIN: Header & Footer Modal -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Header & Footer Modal</h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-7">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-7"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div class="p-5">
          <Preview.Panel>
            <!-- BEGIN: Modal Toggle -->
            <div class="text-center">
              <Button
                as="a"
                href="#"
                variant="primary"
                @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setHeaderFooterModalPreview(true);
                        }"
              >
                Show Modal
              </Button>
            </div>
            <!-- END: Modal Toggle -->
            <!-- BEGIN: Modal Content -->
            <Dialog
              :open="headerFooterModalPreview"
              @close="
                () => {
                  setHeaderFooterModalPreview(false);
                }
              "
              :initialFocus="sendButtonRef"
            >
              <Dialog.Panel>
                <Dialog.Title>
                  <h2 class="mr-auto text-base font-medium">
                    Broadcast Message
                  </h2>
                  <Button variant="outline-secondary" class="hidden sm:flex">
                    <Lucide icon="File" class="w-4 h-4 mr-2" /> Download Docs
                  </Button>
                  <Menu class="sm:hidden">
                    <Menu.Button class="block w-5 h-5" href="#">
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
                </Dialog.Title>
                <Dialog.Description class="grid grid-cols-12 gap-4 gap-y-3">
                  <div class="col-span-12 sm:col-span-6">
                    <FormLabel htmlFor="modal-form-1">From</FormLabel>
                    <FormInput
                      id="modal-form-1"
                      type="text"
                      placeholder="example@gmail.com"
                    />
                  </div>
                  <div class="col-span-12 sm:col-span-6">
                    <FormLabel htmlFor="modal-form-2">To</FormLabel>
                    <FormInput
                      id="modal-form-2"
                      type="text"
                      placeholder="example@gmail.com"
                    />
                  </div>
                  <div class="col-span-12 sm:col-span-6">
                    <FormLabel htmlFor="modal-form-3"> Subject </FormLabel>
                    <FormInput
                      id="modal-form-3"
                      type="text"
                      placeholder="Important Meeting"
                    />
                  </div>
                  <div class="col-span-12 sm:col-span-6">
                    <FormLabel htmlFor="modal-form-4">
                      Has the Words
                    </FormLabel>
                    <FormInput
                      id="modal-form-4"
                      type="text"
                      placeholder="Job, Work, Documentation"
                    />
                  </div>
                  <div class="col-span-12 sm:col-span-6">
                    <FormLabel htmlFor="modal-form-5"> Doesn't Have </FormLabel>
                    <FormInput
                      id="modal-form-5"
                      type="text"
                      placeholder="Job, Work, Documentation"
                    />
                  </div>
                  <div class="col-span-12 sm:col-span-6">
                    <FormLabel htmlFor="modal-form-6">Size</FormLabel>
                    <FormSelect id="modal-form-6">
                      <option>10</option>
                      <option>25</option>
                      <option>35</option>
                      <option>50</option>
                    </FormSelect>
                  </div>
                </Dialog.Description>
                <Dialog.Footer>
                  <Button
                    type="button"
                    variant="outline-secondary"
                    @click="
                      () => {
                        setHeaderFooterModalPreview(false);
                      }
                    "
                    class="w-20 mr-1"
                  >
                    Cancel
                  </Button>
                  <Button
                    variant="primary"
                    type="button"
                    class="w-20"
                    ref="{sendButtonRef}"
                  >
                    Send
                  </Button>
                </Dialog.Footer>
              </Dialog.Panel>
            </Dialog>
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
                      setHeaderFooterModalPreview(true);
                    }"
                >
                  Show Modal
                </Button>
              </div>
              <!-- END: Modal Toggle -->
              <!-- BEGIN: Modal Content -->
              <Dialog
                :open="headerFooterModalPreview"
                @close="
                  () => {
                    setHeaderFooterModalPreview(false);
                  }
                "
                :initialFocus="sendButtonRef"
              >
                <Dialog.Panel>
                  <Dialog.Title>
                    <h2 class="mr-auto text-base font-medium">
                      Broadcast Message
                    </h2>
                    <Button variant="outline-secondary" class="hidden sm:flex">
                      <Lucide icon="File" class="w-4 h-4 mr-2" /> Download Docs
                    </Button>
                    <Menu class="sm:hidden">
                      <Menu.Button class="block w-5 h-5" href="#">
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
                  </Dialog.Title>
                  <Dialog.Description class="grid grid-cols-12 gap-4 gap-y-3">
                    <div class="col-span-12 sm:col-span-6">
                      <FormLabel htmlFor="modal-form-1"> From </FormLabel>
                      <FormInput
                        id="modal-form-1"
                        type="text"
                        placeholder="example@gmail.com"
                      />
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                      <FormLabel htmlFor="modal-form-2"> To </FormLabel>
                      <FormInput
                        id="modal-form-2"
                        type="text"
                        placeholder="example@gmail.com"
                      />
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                      <FormLabel htmlFor="modal-form-3"> Subject </FormLabel>
                      <FormInput
                        id="modal-form-3"
                        type="text"
                        placeholder="Important Meeting"
                      />
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                      <FormLabel htmlFor="modal-form-4">
                        Has the Words
                      </FormLabel>
                      <FormInput
                        id="modal-form-4"
                        type="text"
                        placeholder="Job, Work, Documentation"
                      />
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                      <FormLabel htmlFor="modal-form-5">
                        Doesn't Have
                      </FormLabel>
                      <FormInput
                        id="modal-form-5"
                        type="text"
                        placeholder="Job, Work, Documentation"
                      />
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                      <FormLabel htmlFor="modal-form-6"> Size </FormLabel>
                      <FormSelect id="modal-form-6">
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                      </FormSelect>
                    </div>
                  </Dialog.Description>
                  <Dialog.Footer>
                    <Button
                      type="button"
                      variant="outline-secondary"
                      @click="
                        () => {
                          setHeaderFooterModalPreview(false);
                        }
                      "
                      class="w-20 mr-1"
                    >
                      Cancel
                    </Button>
                    <Button
                      variant="primary"
                      type="button"
                      class="w-20"
                      ref="{sendButtonRef}"
                    >
                      Send
                    </Button>
                  </Dialog.Footer>
                </Dialog.Panel>
              </Dialog>
              <!-- END: Modal Content -->
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Header & Footer Modal -->
      <!-- BEGIN: Delete Modal -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Delete Modal</h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-9">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-9"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div class="p-5">
          <Preview.Panel>
            <!-- BEGIN: Modal Toggle -->
            <div class="text-center">
              <Button
                as="a"
                href="#"
                variant="primary"
                @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setDeleteModalPreview(true);
                        }"
              >
                Show Modal
              </Button>
            </div>
            <!-- END: Modal Toggle -->
            <!-- BEGIN: Modal Content -->
            <Dialog
              :open="deleteModalPreview"
              @close="
                () => {
                  setDeleteModalPreview(false);
                }
              "
              :initialFocus="deleteButtonRef"
            >
              <Dialog.Panel>
                <div class="p-5 text-center">
                  <Lucide
                    icon="XCircle"
                    class="w-16 h-16 mx-auto mt-3 text-danger"
                  />
                  <div class="mt-5 text-3xl">Are you sure?</div>
                  <div class="mt-2 text-slate-500">
                    Do you really want to delete these records? <br />
                    This process cannot be undone.
                  </div>
                </div>
                <div class="px-5 pb-8 text-center">
                  <Button
                    type="button"
                    variant="outline-secondary"
                    @click="
                      () => {
                        setDeleteModalPreview(false);
                      }
                    "
                    class="w-24 mr-1"
                  >
                    Cancel
                  </Button>
                  <Button
                    type="button"
                    variant="danger"
                    class="w-24"
                    ref="{deleteButtonRef}"
                  >
                    Delete
                  </Button>
                </div>
              </Dialog.Panel>
            </Dialog>
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
                      setDeleteModalPreview(true);
                    }"
                >
                  Show Modal
                </Button>
              </div>
              <!-- END: Modal Toggle -->
              <!-- BEGIN: Modal Content -->
              <Dialog
                :open="deleteModalPreview"
                @close="
                  () => {
                    setDeleteModalPreview(false);
                  }
                "
                :initialFocus="deleteButtonRef"
              >
                <Dialog.Panel>
                  <div class="p-5 text-center">
                    <Lucide
                      icon="XCircle"
                      class="w-16 h-16 mx-auto mt-3 text-danger"
                    />
                    <div class="mt-5 text-3xl">Are you sure?</div>
                    <div class="mt-2 text-slate-500">
                      Do you really want to delete these records? <br />
                      This process cannot be undone.
                    </div>
                  </div>
                  <div class="px-5 pb-8 text-center">
                    <Button
                      type="button"
                      variant="outline-secondary"
                      @click="
                        () => {
                          setDeleteModalPreview(false);
                        }
                      "
                      class="w-24 mr-1"
                    >
                      Cancel
                    </Button>
                    <Button
                      type="button"
                      variant="danger"
                      class="w-24"
                      ref="{deleteButtonRef}"
                    >
                      Delete
                    </Button>
                  </div>
                </Dialog.Panel>
              </Dialog>
              <!-- END: Modal Content -->
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Delete Modal -->
      <!-- BEGIN: Success Modal -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Success Modal</h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-10">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-10"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div class="p-5">
          <Preview.Panel>
            <!-- BEGIN: Modal Toggle -->
            <div class="text-center">
              <Button
                as="a"
                href="#"
                variant="primary"
                @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setSuccessModalPreview(true);
                        }"
              >
                Show Modal
              </Button>
            </div>
            <!-- END: Modal Toggle -->
            <!-- BEGIN: Modal Content -->
            <Dialog
              :open="successModalPreview"
              @close="
                () => {
                  setSuccessModalPreview(false);
                }
              "
            >
              <Dialog.Panel>
                <div class="p-5 text-center">
                  <Lucide
                    icon="CheckCircle"
                    class="w-16 h-16 mx-auto mt-3 text-success"
                  />
                  <div class="mt-5 text-3xl">Good job!</div>
                  <div class="mt-2 text-slate-500">You clicked the button!</div>
                </div>
                <div class="px-5 pb-8 text-center">
                  <Button
                    type="button"
                    variant="primary"
                    @click="
                      () => {
                        setSuccessModalPreview(false);
                      }
                    "
                    class="w-24"
                  >
                    Ok
                  </Button>
                </div>
              </Dialog.Panel>
            </Dialog>
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
                      setSuccessModalPreview(true);
                    }"
                >
                  Show Modal
                </Button>
              </div>
              <!-- END: Modal Toggle -->
              <!-- BEGIN: Modal Content -->
              <Dialog
                :open="successModalPreview"
                @close="
                  () => {
                    setSuccessModalPreview(false);
                  }
                "
              >
                <Dialog.Panel>
                  <div class="p-5 text-center">
                    <Lucide
                      icon="CheckCircle"
                      class="w-16 h-16 mx-auto mt-3 text-success"
                    />
                    <div class="mt-5 text-3xl">Good job!</div>
                    <div class="mt-2 text-slate-500">
                      You clicked the button!
                    </div>
                  </div>
                  <div class="px-5 pb-8 text-center">
                    <Button
                      type="button"
                      variant="primary"
                      @click="
                        () => {
                          setSuccessModalPreview(false);
                        }
                      "
                      class="w-24"
                    >
                      Ok
                    </Button>
                  </div>
                </Dialog.Panel>
              </Dialog>
              <!-- END: Modal Content -->
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Success Modal -->
      <!-- BEGIN: Tiny Slider Modal -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Tiny Slider Modal</h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-11">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-11"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div class="p-5">
          <Preview.Panel>
            <!-- BEGIN: Modal Toggle -->
            <div class="text-center">
              <Button
                as="a"
                href="#"
                variant="primary"
                @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setTinySliderModalPreview(true);
                        }"
              >
                Show Modal
              </Button>
            </div>
            <!-- END: Modal Toggle -->
            <!-- BEGIN: Modal Content -->
            <Dialog
              :open="tinySliderModalPreview"
              @close="
                () => {
                  setTinySliderModalPreview(false);
                }
              "
            >
              <Dialog.Panel class="p-5">
                <div class="mx-6">
                  <TinySlider
                    :options="{
                      mouseDrag: true,
                      autoplay: false,
                      controls: true,
                      center: true,
                      items: 1,
                      nav: false,
                      speed: 500,
                      responsive: {
                        600: {
                          items: 2,
                        },
                      },
                    }"
                  >
                    <div class="h-56 px-2">
                      <div class="h-full overflow-hidden rounded-md image-fit">
                        <img
                          alt="Midone Tailwind HTML Admin Template"
                          :src="fakerData[0].images[0]"
                        />
                      </div>
                    </div>
                    <div class="h-56 px-2">
                      <div class="h-full overflow-hidden rounded-md image-fit">
                        <img
                          alt="Midone Tailwind HTML Admin Template"
                          :src="fakerData[0].images[1]"
                        />
                      </div>
                    </div>
                    <div class="h-56 px-2">
                      <div class="h-full overflow-hidden rounded-md image-fit">
                        <img
                          alt="Midone Tailwind HTML Admin Template"
                          :src="fakerData[0].images[2]"
                        />
                      </div>
                    </div>
                    <div class="h-56 px-2">
                      <div class="h-full overflow-hidden rounded-md image-fit">
                        <img
                          alt="Midone Tailwind HTML Admin Template"
                          :src="fakerData[0].images[3]"
                        />
                      </div>
                    </div>
                  </TinySlider>
                </div>
              </Dialog.Panel>
            </Dialog>
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
                      setTinySliderModalPreview(true);
                    }"
                >
                  Show Modal
                </Button>
              </div>
              <!-- END: Modal Toggle -->
              <!-- BEGIN: Modal Content -->
              <Dialog
                :open="tinySliderModalPreview"
                @close="
                  () => {
                    setTinySliderModalPreview(false);
                  }
                "
              >
                <Dialog.Panel class="p-5">
                  <div class="mx-6">
                    <TinySlider
                      :options="{
                        mouseDrag: true,
                        autoplay: false,
                        controls: true,
                        center: true,
                        items: 1,
                        nav: false,
                        speed: 500,
                        responsive: {
                          600: {
                            items: 2,
                          },
                        },
                      }"
                    >
                      <div class="h-56 px-2">
                        <div
                          class="h-full overflow-hidden rounded-md image-fit"
                        >
                          <img
                            alt="Midone Tailwind HTML Admin Template"
                            :src="fakerData[0].images[0]"
                          />
                        </div>
                      </div>
                      <div class="h-56 px-2">
                        <div
                          class="h-full overflow-hidden rounded-md image-fit"
                        >
                          <img
                            alt="Midone Tailwind HTML Admin Template"
                            :src="fakerData[0].images[1]"
                          />
                        </div>
                      </div>
                      <div class="h-56 px-2">
                        <div
                          class="h-full overflow-hidden rounded-md image-fit"
                        >
                          <img
                            alt="Midone Tailwind HTML Admin Template"
                            :src="fakerData[0].images[2]"
                          />
                        </div>
                      </div>
                      <div class="h-56 px-2">
                        <div
                          class="h-full overflow-hidden rounded-md image-fit"
                        >
                          <img
                            alt="Midone Tailwind HTML Admin Template"
                            :src="fakerData[0].images[3]"
                          />
                        </div>
                      </div>
                    </TinySlider>
                  </div>
                </Dialog.Panel>
              </Dialog>
              <!-- END: Modal Content -->
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Tiny Slider Modal -->
      <!-- BEGIN: Programmatically Show/Hide Modal -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">
            Programmatically Show/Hide Modal
          </h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-12">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-12"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div class="p-5">
          <Preview.Panel>
            <!-- BEGIN: Show Modal Toggle -->
            <div class="text-center">
              <Button
                as="a"
                href="#"
                variant="primary"
                class="mb-2 mr-1"
                @click="(event: MouseEvent) => {
                          event.preventDefault();
                          setProgrammaticallyModal(true);
                        }"
              >
                Show Modal
              </Button>
            </div>
            <!-- END: Show Modal Toggle -->
            <!-- BEGIN: Modal Content -->
            <Dialog
              :open="programmaticallyModal"
              @close="
                () => {
                  setProgrammaticallyModal(false);
                }
              "
            >
              <Dialog.Panel class="p-10 text-center">
                <!-- BEGIN: Hide Modal Toggle -->
                <Button
                  as="a"
                  href="#"
                  variant="primary"
                  class="mr-1"
                  @click="(event: MouseEvent) => {
                            event.preventDefault();
                            setProgrammaticallyModal(false);
                          }"
                >
                  Hide Modal
                </Button>
                <!-- END: Hide Modal Toggle -->
                <!-- BEGIN: Toggle Modal Toggle -->
                <Button
                  as="a"
                  href="#"
                  variant="primary"
                  class="mr-1"
                  @click="(event: MouseEvent) => {
                            event.preventDefault();
                            setProgrammaticallyModal(!programmaticallyModal);
                          }"
                >
                  Toggle Modal
                </Button>
                <!-- END: Toggle Modal Toggle -->
              </Dialog.Panel>
            </Dialog>
            <!-- END: Modal Content -->
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <!-- BEGIN: Show Modal Toggle -->
              <div class="text-center">
                <Button
                  as="a"
                  href="#"
                  variant="primary"
                  class="mb-2 mr-1"
                  @click="(event: MouseEvent) => {
                      event.preventDefault();
                      setProgrammaticallyModal(true);
                    }"
                >
                  Show Modal
                </Button>
              </div>
              <!-- END: Show Modal Toggle -->
              <!-- BEGIN: Modal Content -->
              <Dialog
                :open="programmaticallyModal"
                @close="
                  () => {
                    setProgrammaticallyModal(false);
                  }
                "
              >
                <Dialog.Panel class="p-10 text-center">
                  <!-- BEGIN: Hide Modal Toggle -->
                  <Button
                    as="a"
                    href="#"
                    variant="primary"
                    class="mr-1"
                    @click="(event: MouseEvent) => {
                        event.preventDefault();
                        setProgrammaticallyModal(false);
                      }"
                  >
                    Hide Modal
                  </Button>
                  <!-- END: Hide Modal Toggle -->
                  <!-- BEGIN: Toggle Modal Toggle -->
                  <Button
                    as="a"
                    href="#"
                    variant="primary"
                    class="mr-1"
                    @click="(event: MouseEvent) => {
                        event.preventDefault();
                        setProgrammaticallyModal(!programmaticallyModal);
                      }"
                  >
                    Toggle Modal
                  </Button>
                  <!-- END: Toggle Modal Toggle -->
                </Dialog.Panel>
              </Dialog>
              <!-- END: Modal Content -->
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Programmatically Show/Hide Modal -->
    </div>
  </div>
</template>
