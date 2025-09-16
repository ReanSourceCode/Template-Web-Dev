<script setup lang="ts">
import Preview from "@/components/Base/Preview";
import Alert from "@/components/Base/Alert";
import Lucide from "@/components/Base/Lucide";
import { FormSwitch } from "@/components/Base/Form";
</script>

<template>
  <div class="flex items-center mt-8 intro-y">
    <h2 class="mr-auto text-lg font-medium">Alert</h2>
  </div>
  <div class="grid grid-cols-12 gap-6 mt-5 intro-y">
    <div class="col-span-12 lg:col-span-6">
      <!-- BEGIN: Basic Alert -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Basic Alerts</h2>
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
            <Alert variant="primary" class="mb-2"> Awesome simple alert </Alert>
            <Alert variant="secondary" class="mb-2">
              Awesome simple alert
            </Alert>
            <Alert variant="success" class="mb-2"> Awesome simple alert </Alert>
            <Alert variant="warning" class="mb-2"> Awesome simple alert </Alert>
            <Alert variant="pending" class="mb-2"> Awesome simple alert </Alert>
            <Alert variant="danger" class="mb-2"> Awesome simple alert </Alert>
            <Alert variant="dark" class="mb-2"> Awesome simple alert </Alert>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Alert variant="primary" class="mb-2">
                Awesome simple alert
              </Alert>
              <Alert variant="secondary" class="mb-2">
                Awesome simple alert
              </Alert>
              <Alert variant="success" class="mb-2">
                Awesome simple alert
              </Alert>
              <Alert variant="warning" class="mb-2">
                Awesome simple alert
              </Alert>
              <Alert variant="pending" class="mb-2">
                Awesome simple alert
              </Alert>
              <Alert variant="danger" class="mb-2">
                Awesome simple alert
              </Alert>
              <Alert variant="dark" class="mb-2"> Awesome simple alert </Alert>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Basic Alert -->
      <!-- BEGIN: Icon's Alert -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Icon Alerts</h2>
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
            <Alert variant="primary" class="flex items-center mb-2">
              <Lucide icon="AlertCircle" class="w-6 h-6 mr-2" />
              Awesome alert with icon
            </Alert>
            <Alert variant="secondary" class="flex items-center mb-2">
              <Lucide icon="AlertOctagon" class="w-6 h-6 mr-2" />
              Awesome alert with icon
            </Alert>
            <Alert variant="success" class="flex items-center mb-2">
              <Lucide icon="AlertTriangle" class="w-6 h-6 mr-2" />
              Awesome alert with icon
            </Alert>
            <Alert variant="warning" class="flex items-center mb-2">
              <Lucide icon="AlertCircle" class="w-6 h-6 mr-2" />
              Awesome alert with icon
            </Alert>
            <Alert variant="pending" class="flex items-center mb-2">
              <Lucide icon="AlertTriangle" class="w-6 h-6 mr-2" />
              Awesome alert with icon
            </Alert>
            <Alert variant="danger" class="flex items-center mb-2">
              <Lucide icon="AlertOctagon" class="w-6 h-6 mr-2" />
              Awesome alert with icon
            </Alert>
            <Alert variant="dark" class="flex items-center mb-2">
              <Lucide icon="AlertTriangle" class="w-6 h-6 mr-2" />
              Awesome alert with icon
            </Alert>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Alert variant="primary" class="flex items-center mb-2">
                <Lucide icon="AlertCircle" class="w-6 h-6 mr-2" />
                Awesome alert with icon
              </Alert>
              <Alert variant="secondary" class="flex items-center mb-2">
                <Lucide icon="AlertOctagon" class="w-6 h-6 mr-2" />
                Awesome alert with icon
              </Alert>
              <Alert variant="success" class="flex items-center mb-2">
                <Lucide icon="AlertTriangle" class="w-6 h-6 mr-2" />
                Awesome alert with icon
              </Alert>
              <Alert variant="warning" class="flex items-center mb-2">
                <Lucide icon="AlertCircle" class="w-6 h-6 mr-2" />
                Awesome alert with icon
              </Alert>
              <Alert variant="pending" class="flex items-center mb-2">
                <Lucide icon="AlertTriangle" class="w-6 h-6 mr-2" />
                Awesome alert with icon
              </Alert>
              <Alert variant="danger" class="flex items-center mb-2">
                <Lucide icon="AlertOctagon" class="w-6 h-6 mr-2" />
                Awesome alert with icon
              </Alert>
              <Alert variant="dark" class="flex items-center mb-2">
                <Lucide icon="AlertTriangle" class="w-6 h-6 mr-2" />
                Awesome alert with icon
              </Alert>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Icon's Alert -->
      <!-- BEGIN: Additional Content Alert -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">
            Additional Content Alerts
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
        <div class="p-5">
          <Preview.Panel>
            <Alert variant="primary" class="mb-2">
              <div class="flex items-center">
                <div class="text-lg font-medium">
                  Awesome alert with additional info
                </div>
                <div
                  class="px-1 ml-auto text-xs bg-white rounded-md text-slate-700"
                >
                  New
                </div>
              </div>
              <div class="mt-3">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s.
              </div>
            </Alert>
            <Alert variant="secondary" class="mb-2">
              <div class="flex items-center">
                <div class="text-lg font-medium">
                  Awesome alert with additional info
                </div>
                <div
                  class="px-1 ml-auto text-xs text-white rounded-md bg-slate-500"
                >
                  New
                </div>
              </div>
              <div class="mt-3">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s.
              </div>
            </Alert>
            <Alert variant="success" class="mb-2">
              <div class="flex items-center">
                <div class="text-lg font-medium">
                  Awesome alert with additional info
                </div>
                <div
                  class="px-1 ml-auto text-xs bg-white rounded-md text-slate-700"
                >
                  New
                </div>
              </div>
              <div class="mt-3">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s.
              </div>
            </Alert>
            <Alert variant="warning" class="mb-2">
              <div class="flex items-center">
                <div class="text-lg font-medium">
                  Awesome alert with additional info
                </div>
                <div
                  class="px-1 ml-auto text-xs bg-white rounded-md text-slate-700"
                >
                  New
                </div>
              </div>
              <div class="mt-3">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s.
              </div>
            </Alert>
            <Alert variant="pending" class="mb-2">
              <div class="flex items-center">
                <div class="text-lg font-medium">
                  Awesome alert with additional info
                </div>
                <div
                  class="px-1 ml-auto text-xs bg-white rounded-md text-slate-700"
                >
                  New
                </div>
              </div>
              <div class="mt-3">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s.
              </div>
            </Alert>
            <Alert variant="danger" class="mb-2">
              <div class="flex items-center">
                <div class="text-lg font-medium">
                  Awesome alert with additional info
                </div>
                <div
                  class="px-1 ml-auto text-xs bg-white rounded-md text-slate-700"
                >
                  New
                </div>
              </div>
              <div class="mt-3">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s.
              </div>
            </Alert>
            <Alert variant="dark" class="mb-2">
              <div class="flex items-center">
                <div class="text-lg font-medium">
                  Awesome alert with additional info
                </div>
                <div
                  class="px-1 ml-auto text-xs text-white rounded-md bg-slate-500"
                >
                  New
                </div>
              </div>
              <div class="mt-3">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s.
              </div>
            </Alert>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Alert variant="primary" class="mb-2">
                <div class="flex items-center">
                  <div class="text-lg font-medium">
                    Awesome alert with additional info
                  </div>
                  <div
                    class="px-1 ml-auto text-xs bg-white rounded-md text-slate-700"
                  >
                    New
                  </div>
                </div>
                <div class="mt-3">
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s.
                </div>
              </Alert>
              <Alert variant="secondary" class="mb-2">
                <div class="flex items-center">
                  <div class="text-lg font-medium">
                    Awesome alert with additional info
                  </div>
                  <div
                    class="px-1 ml-auto text-xs text-white rounded-md bg-slate-500"
                  >
                    New
                  </div>
                </div>
                <div class="mt-3">
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s.
                </div>
              </Alert>
              <Alert variant="success" class="mb-2">
                <div class="flex items-center">
                  <div class="text-lg font-medium">
                    Awesome alert with additional info
                  </div>
                  <div
                    class="px-1 ml-auto text-xs bg-white rounded-md text-slate-700"
                  >
                    New
                  </div>
                </div>
                <div class="mt-3">
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s.
                </div>
              </Alert>
              <Alert variant="warning" class="mb-2">
                <div class="flex items-center">
                  <div class="text-lg font-medium">
                    Awesome alert with additional info
                  </div>
                  <div
                    class="px-1 ml-auto text-xs bg-white rounded-md text-slate-700"
                  >
                    New
                  </div>
                </div>
                <div class="mt-3">
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s.
                </div>
              </Alert>
              <Alert variant="pending" class="mb-2">
                <div class="flex items-center">
                  <div class="text-lg font-medium">
                    Awesome alert with additional info
                  </div>
                  <div
                    class="px-1 ml-auto text-xs bg-white rounded-md text-slate-700"
                  >
                    New
                  </div>
                </div>
                <div class="mt-3">
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s.
                </div>
              </Alert>
              <Alert variant="danger" class="mb-2">
                <div class="flex items-center">
                  <div class="text-lg font-medium">
                    Awesome alert with additional info
                  </div>
                  <div
                    class="px-1 ml-auto text-xs bg-white rounded-md text-slate-700"
                  >
                    New
                  </div>
                </div>
                <div class="mt-3">
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s.
                </div>
              </Alert>
              <Alert variant="dark" class="mb-2">
                <div class="flex items-center">
                  <div class="text-lg font-medium">
                    Awesome alert with additional info
                  </div>
                  <div
                    class="px-1 ml-auto text-xs text-white rounded-md bg-slate-500"
                  >
                    New
                  </div>
                </div>
                <div class="mt-3">
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s.
                </div>
              </Alert>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Additional Content Alert -->
    </div>
    <div class="col-span-12 lg:col-span-6">
      <!-- BEGIN: Icon & Dismiss Alert -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Icon & Dismiss Alerts</h2>
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
            <Alert
              variant="primary"
              class="flex items-center mb-2"
              v-slot="{ dismiss }"
            >
              <Lucide icon="AlertCircle" class="w-6 h-6 mr-2" />
              Awesome alert with icon
              <Alert.DismissButton
                type="button"
                class="text-white"
                aria-label="Close"
                @click="dismiss"
              >
                <Lucide icon="X" class="w-4 h-4" />
              </Alert.DismissButton>
            </Alert>
            <Alert
              variant="secondary"
              class="flex items-center mb-2"
              v-slot="{ dismiss }"
            >
              <Lucide icon="AlertOctagon" class="w-6 h-6 mr-2" />
              Awesome alert with icon
              <Alert.DismissButton
                type="button"
                class="btn-close"
                aria-label="Close"
                @click="dismiss"
              >
                <Lucide icon="X" class="w-4 h-4" />
              </Alert.DismissButton>
            </Alert>
            <Alert
              variant="success"
              class="flex items-center mb-2"
              v-slot="{ dismiss }"
            >
              <Lucide icon="AlertTriangle" class="w-6 h-6 mr-2" />
              Awesome alert with icon
              <Alert.DismissButton
                type="button"
                class="btn-close"
                aria-label="Close"
                @click="dismiss"
              >
                <Lucide icon="X" class="w-4 h-4" />
              </Alert.DismissButton>
            </Alert>
            <Alert
              variant="warning"
              class="flex items-center mb-2"
              v-slot="{ dismiss }"
            >
              <Lucide icon="AlertCircle" class="w-6 h-6 mr-2" />
              Awesome alert with icon
              <Alert.DismissButton
                type="button"
                class="btn-close"
                aria-label="Close"
                @click="dismiss"
              >
                <Lucide icon="X" class="w-4 h-4" />
              </Alert.DismissButton>
            </Alert>
            <Alert
              variant="pending"
              class="flex items-center mb-2"
              v-slot="{ dismiss }"
            >
              <Lucide icon="AlertTriangle" class="w-6 h-6 mr-2" />
              Awesome alert with icon
              <Alert.DismissButton
                type="button"
                class="btn-close"
                aria-label="Close"
                @click="dismiss"
              >
                <Lucide icon="X" class="w-4 h-4" />
              </Alert.DismissButton>
            </Alert>
            <Alert
              variant="danger"
              class="flex items-center mb-2"
              v-slot="{ dismiss }"
            >
              <Lucide icon="AlertOctagon" class="w-6 h-6 mr-2" />
              Awesome alert with icon
              <Alert.DismissButton
                type="button"
                class="text-white"
                aria-label="Close"
                @click="dismiss"
              >
                <Lucide icon="X" class="w-4 h-4" />
              </Alert.DismissButton>
            </Alert>
            <Alert
              variant="dark"
              class="flex items-center mb-2"
              v-slot="{ dismiss }"
            >
              <Lucide icon="AlertTriangle" class="w-6 h-6 mr-2" />
              Awesome alert with icon
              <Alert.DismissButton
                type="button"
                class="text-white"
                aria-label="Close"
                @click="dismiss"
              >
                <Lucide icon="X" class="w-4 h-4" />
              </Alert.DismissButton>
            </Alert>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Alert
                variant="primary"
                class="flex items-center mb-2"
                v-slot="{ dismiss }"
              >
                <Lucide icon="AlertCircle" class="w-6 h-6 mr-2" />
                Awesome alert with icon
                <Alert.DismissButton
                  type="button"
                  class="text-white"
                  aria-label="Close"
                  @click="dismiss"
                >
                  <Lucide icon="X" class="w-4 h-4" />
                </Alert.DismissButton>
              </Alert>
              <Alert
                variant="secondary"
                class="flex items-center mb-2"
                v-slot="{ dismiss }"
              >
                <Lucide icon="AlertOctagon" class="w-6 h-6 mr-2" />
                Awesome alert with icon
                <Alert.DismissButton
                  type="button"
                  class="btn-close"
                  aria-label="Close"
                  @click="dismiss"
                >
                  <Lucide icon="X" class="w-4 h-4" />
                </Alert.DismissButton>
              </Alert>
              <Alert
                variant="success"
                class="flex items-center mb-2"
                v-slot="{ dismiss }"
              >
                <Lucide icon="AlertTriangle" class="w-6 h-6 mr-2" />
                Awesome alert with icon
                <Alert.DismissButton
                  type="button"
                  class="btn-close"
                  aria-label="Close"
                  @click="dismiss"
                >
                  <Lucide icon="X" class="w-4 h-4" />
                </Alert.DismissButton>
              </Alert>
              <Alert
                variant="warning"
                class="flex items-center mb-2"
                v-slot="{ dismiss }"
              >
                <Lucide icon="AlertCircle" class="w-6 h-6 mr-2" />
                Awesome alert with icon
                <Alert.DismissButton
                  type="button"
                  class="btn-close"
                  aria-label="Close"
                  @click="dismiss"
                >
                  <Lucide icon="X" class="w-4 h-4" />
                </Alert.DismissButton>
              </Alert>
              <Alert
                variant="pending"
                class="flex items-center mb-2"
                v-slot="{ dismiss }"
              >
                <Lucide icon="AlertTriangle" class="w-6 h-6 mr-2" />
                Awesome alert with icon
                <Alert.DismissButton
                  type="button"
                  class="btn-close"
                  aria-label="Close"
                  @click="dismiss"
                >
                  <Lucide icon="X" class="w-4 h-4" />
                </Alert.DismissButton>
              </Alert>
              <Alert
                variant="danger"
                class="flex items-center mb-2"
                v-slot="{ dismiss }"
              >
                <Lucide icon="AlertOctagon" class="w-6 h-6 mr-2" />
                Awesome alert with icon
                <Alert.DismissButton
                  type="button"
                  class="text-white"
                  aria-label="Close"
                  @click="dismiss"
                >
                  <Lucide icon="X" class="w-4 h-4" />
                </Alert.DismissButton>
              </Alert>
              <Alert
                variant="dark"
                class="flex items-center mb-2"
                v-slot="{ dismiss }"
              >
                <Lucide icon="AlertTriangle" class="w-6 h-6 mr-2" />
                Awesome alert with icon
                <Alert.DismissButton
                  type="button"
                  class="text-white"
                  aria-label="Close"
                  @click="dismiss"
                >
                  <Lucide icon="X" class="w-4 h-4" />
                </Alert.DismissButton>
              </Alert>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Icon & Dismiss Alert -->
      <!-- BEGIN: Outline Alert -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Outline Alerts</h2>
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
            <Alert
              variant="outline-primary"
              class="flex items-center mb-2"
              v-slot="{ dismiss }"
            >
              <Lucide icon="AlertCircle" class="w-6 h-6 mr-2" />
              Awesome alert with icon
              <Alert.DismissButton
                type="button"
                class="btn-close"
                @click="dismiss"
                aria-label="Close"
              >
                <Lucide icon="X" class="w-4 h-4" />
              </Alert.DismissButton>
            </Alert>
            <Alert
              variant="outline-secondary"
              class="flex items-center mb-2"
              v-slot="{ dismiss }"
            >
              <Lucide icon="AlertOctagon" class="w-6 h-6 mr-2" />
              Awesome alert with icon
              <Alert.DismissButton
                type="button"
                class="btn-close"
                @click="dismiss"
                aria-label="Close"
              >
                <Lucide icon="X" class="w-4 h-4" />
              </Alert.DismissButton>
            </Alert>
            <Alert
              variant="outline-success"
              class="flex items-center mb-2"
              v-slot="{ dismiss }"
            >
              <Lucide icon="AlertTriangle" class="w-6 h-6 mr-2" />
              Awesome alert with icon
              <Alert.DismissButton
                type="button"
                class="btn-close"
                @click="dismiss"
                aria-label="Close"
              >
                <Lucide icon="X" class="w-4 h-4" />
              </Alert.DismissButton>
            </Alert>
            <Alert
              variant="outline-warning"
              class="flex items-center mb-2"
              v-slot="{ dismiss }"
            >
              <Lucide icon="AlertCircle" class="w-6 h-6 mr-2" />
              Awesome alert with icon
              <Alert.DismissButton
                type="button"
                class="btn-close"
                @click="dismiss"
                aria-label="Close"
              >
                <Lucide icon="X" class="w-4 h-4" />
              </Alert.DismissButton>
            </Alert>
            <Alert
              variant="outline-pending"
              class="flex items-center mb-2"
              v-slot="{ dismiss }"
            >
              <Lucide icon="AlertCircle" class="w-6 h-6 mr-2" />
              Awesome alert with icon
              <Alert.DismissButton
                type="button"
                class="btn-close"
                @click="dismiss"
                aria-label="Close"
              >
                <Lucide icon="X" class="w-4 h-4" />
              </Alert.DismissButton>
            </Alert>
            <Alert
              variant="outline-danger"
              class="flex items-center mb-2"
              v-slot="{ dismiss }"
            >
              <Lucide icon="AlertOctagon" class="w-6 h-6 mr-2" />
              Awesome alert with icon
              <Alert.DismissButton
                type="button"
                class="btn-close"
                @click="dismiss"
                aria-label="Close"
              >
                <Lucide icon="X" class="w-4 h-4" />
              </Alert.DismissButton>
            </Alert>
            <Alert
              variant="outline-dark"
              class="flex items-center mb-2"
              v-slot="{ dismiss }"
            >
              <Lucide icon="AlertTriangle" class="w-6 h-6 mr-2" />
              Awesome alert with icon
              <Alert.DismissButton
                type="button"
                class="btn-close"
                @click="dismiss"
                aria-label="Close"
              >
                <Lucide icon="X" class="w-4 h-4" />
              </Alert.DismissButton>
            </Alert>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Alert
                variant="outline-primary"
                class="flex items-center mb-2"
                v-slot="{ dismiss }"
              >
                <Lucide icon="AlertCircle" class="w-6 h-6 mr-2" />
                Awesome alert with icon
                <Alert.DismissButton
                  type="button"
                  class="btn-close"
                  @click="dismiss"
                  aria-label="Close"
                >
                  <Lucide icon="X" class="w-4 h-4" />
                </Alert.DismissButton>
              </Alert>
              <Alert
                variant="outline-secondary"
                class="flex items-center mb-2"
                v-slot="{ dismiss }"
              >
                <Lucide icon="AlertOctagon" class="w-6 h-6 mr-2" />
                Awesome alert with icon
                <Alert.DismissButton
                  type="button"
                  class="btn-close"
                  @click="dismiss"
                  aria-label="Close"
                >
                  <Lucide icon="X" class="w-4 h-4" />
                </Alert.DismissButton>
              </Alert>
              <Alert
                variant="outline-success"
                class="flex items-center mb-2"
                v-slot="{ dismiss }"
              >
                <Lucide icon="AlertTriangle" class="w-6 h-6 mr-2" />
                Awesome alert with icon
                <Alert.DismissButton
                  type="button"
                  class="btn-close"
                  @click="dismiss"
                  aria-label="Close"
                >
                  <Lucide icon="X" class="w-4 h-4" />
                </Alert.DismissButton>
              </Alert>
              <Alert
                variant="outline-warning"
                class="flex items-center mb-2"
                v-slot="{ dismiss }"
              >
                <Lucide icon="AlertCircle" class="w-6 h-6 mr-2" />
                Awesome alert with icon
                <Alert.DismissButton
                  type="button"
                  class="btn-close"
                  @click="dismiss"
                  aria-label="Close"
                >
                  <Lucide icon="X" class="w-4 h-4" />
                </Alert.DismissButton>
              </Alert>
              <Alert
                variant="outline-pending"
                class="flex items-center mb-2"
                v-slot="{ dismiss }"
              >
                <Lucide icon="AlertCircle" class="w-6 h-6 mr-2" />
                Awesome alert with icon
                <Alert.DismissButton
                  type="button"
                  class="btn-close"
                  @click="dismiss"
                  aria-label="Close"
                >
                  <Lucide icon="X" class="w-4 h-4" />
                </Alert.DismissButton>
              </Alert>
              <Alert
                variant="outline-danger"
                class="flex items-center mb-2"
                v-slot="{ dismiss }"
              >
                <Lucide icon="AlertOctagon" class="w-6 h-6 mr-2" />
                Awesome alert with icon
                <Alert.DismissButton
                  type="button"
                  class="btn-close"
                  @click="dismiss"
                  aria-label="Close"
                >
                  <Lucide icon="X" class="w-4 h-4" />
                </Alert.DismissButton>
              </Alert>
              <Alert
                variant="outline-dark"
                class="flex items-center mb-2"
                v-slot="{ dismiss }"
              >
                <Lucide icon="AlertTriangle" class="w-6 h-6 mr-2" />
                Awesome alert with icon
                <Alert.DismissButton
                  type="button"
                  class="btn-close"
                  @click="dismiss"
                  aria-label="Close"
                >
                  <Lucide icon="X" class="w-4 h-4" />
                </Alert.DismissButton>
              </Alert>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Outline Alert -->
      <!-- BEGIN: Soft Color Alert -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Soft Color Alerts</h2>
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
            <Alert variant="soft-primary" class="flex items-center mb-2">
              <Lucide icon="AlertCircle" class="w-6 h-6 mr-2" />
              Awesome alert with icon
            </Alert>
            <Alert variant="soft-secondary" class="flex items-center mb-2">
              <Lucide icon="AlertOctagon" class="w-6 h-6 mr-2" />
              Awesome alert with icon
            </Alert>
            <Alert variant="soft-success" class="flex items-center mb-2">
              <Lucide icon="AlertTriangle" class="w-6 h-6 mr-2" />
              Awesome alert with icon
            </Alert>
            <Alert variant="soft-warning" class="flex items-center mb-2">
              <Lucide icon="AlertCircle" class="w-6 h-6 mr-2" />
              Awesome alert with icon
            </Alert>
            <Alert variant="soft-pending" class="flex items-center mb-2">
              <Lucide icon="AlertTriangle" class="w-6 h-6 mr-2" />
              Awesome alert with icon
            </Alert>
            <Alert variant="soft-danger" class="flex items-center mb-2">
              <Lucide icon="AlertOctagon" class="w-6 h-6 mr-2" />
              Awesome alert with icon
            </Alert>
            <Alert variant="soft-dark" class="flex items-center mb-2">
              <Lucide icon="AlertTriangle" class="w-6 h-6 mr-2" />
              Awesome alert with icon
            </Alert>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Alert variant="soft-primary" class="flex items-center mb-2">
                <Lucide icon="AlertCircle" class="w-6 h-6 mr-2" />
                Awesome alert with icon
              </Alert>
              <Alert variant="soft-secondary" class="flex items-center mb-2">
                <Lucide icon="AlertOctagon" class="w-6 h-6 mr-2" />
                Awesome alert with icon
              </Alert>
              <Alert variant="soft-success" class="flex items-center mb-2">
                <Lucide icon="AlertTriangle" class="w-6 h-6 mr-2" />
                Awesome alert with icon
              </Alert>
              <Alert variant="soft-warning" class="flex items-center mb-2">
                <Lucide icon="AlertCircle" class="w-6 h-6 mr-2" />
                Awesome alert with icon
              </Alert>
              <Alert variant="soft-pending" class="flex items-center mb-2">
                <Lucide icon="AlertTriangle" class="w-6 h-6 mr-2" />
                Awesome alert with icon
              </Alert>
              <Alert variant="soft-danger" class="flex items-center mb-2">
                <Lucide icon="AlertOctagon" class="w-6 h-6 mr-2" />
                Awesome alert with icon
              </Alert>
              <Alert variant="soft-dark" class="flex items-center mb-2">
                <Lucide icon="AlertTriangle" class="w-6 h-6 mr-2" />
                Awesome alert with icon
              </Alert>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Soft Color Alert -->
    </div>
  </div>
</template>
