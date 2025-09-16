<script setup lang="ts">
import Lucide from "@/components/Base/Lucide";
import Button from "@/components/Base/Button";
import LoadingIcon from "@/components/Base/LoadingIcon";
import Preview from "@/components/Base/Preview";
import { FormSwitch } from "@/components/Base/Form";
</script>

<template>
  <div class="flex items-center mt-8 intro-y">
    <h2 class="mr-auto text-lg font-medium">Buttons</h2>
  </div>
  <div class="grid grid-cols-12 gap-6 mt-5 intro-y">
    <div class="col-span-12 lg:col-span-6">
      <!-- BEGIN: Basic Button -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Basic Buttons</h2>
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
            <Button variant="primary" class="w-24 mb-2 mr-1"> Primary </Button>
            <Button variant="secondary" class="w-24 mb-2 mr-1">
              Secondary
            </Button>
            <Button variant="success" class="w-24 mb-2 mr-1"> Success </Button>
            <Button variant="warning" class="w-24 mb-2 mr-1"> Warning </Button>
            <Button variant="pending" class="w-24 mb-2 mr-1"> Pending </Button>
            <Button variant="danger" class="w-24 mb-2 mr-1"> Danger </Button>
            <Button variant="dark" class="w-24 mb-2 mr-1"> Dark </Button>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Button variant="primary" class="w-24 mb-2 mr-1">
                Primary
              </Button>
              <Button variant="secondary" class="w-24 mb-2 mr-1">
                Secondary
              </Button>
              <Button variant="success" class="w-24 mb-2 mr-1">
                Success
              </Button>
              <Button variant="warning" class="w-24 mb-2 mr-1">
                Warning
              </Button>
              <Button variant="pending" class="w-24 mb-2 mr-1">
                Pending
              </Button>
              <Button variant="danger" class="w-24 mb-2 mr-1"> Danger </Button>
              <Button variant="dark" class="w-24 mb-2 mr-1"> Dark </Button>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Basic Button -->
      <!-- BEGIN: Button Size -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Button Sizes</h2>
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
            <div>
              <Button variant="primary" size="sm" class="w-24 mb-2 mr-1">
                Small
              </Button>
              <Button variant="primary" class="w-24 mb-2 mr-1"> Medium </Button>
              <Button variant="primary" size="lg" class="w-24 mb-2 mr-1">
                Large
              </Button>
            </div>
            <div class="mt-5">
              <Button variant="secondary" size="sm" class="w-24 mb-2 mr-1">
                Small
              </Button>
              <Button variant="secondary" class="w-24 mb-2 mr-1">
                Medium
              </Button>
              <Button variant="secondary" size="lg" class="w-24 mb-2 mr-1">
                Large
              </Button>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div>
                <Button variant="primary" size="sm" class="w-24 mb-2 mr-1">
                  Small
                </Button>
                <Button variant="primary" class="w-24 mb-2 mr-1">
                  Medium
                </Button>
                <Button variant="primary" size="lg" class="w-24 mb-2 mr-1">
                  Large
                </Button>
              </div>
              <div class="mt-5">
                <Button variant="secondary" size="sm" class="w-24 mb-2 mr-1">
                  Small
                </Button>
                <Button variant="secondary" class="w-24 mb-2 mr-1">
                  Medium
                </Button>
                <Button variant="secondary" size="lg" class="w-24 mb-2 mr-1">
                  Large
                </Button>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Button Size -->
      <!-- BEGIN: Button Link -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Working with Links</h2>
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
            <Button
              as="a"
              variant="primary"
              href=""
              class="inline-block w-24 mb-2 mr-1"
            >
              Link
            </Button>
            <Button
              as="a"
              variant="secondary"
              href=""
              class="inline-block w-24 mb-2 mr-1"
            >
              Button
            </Button>
            <Button
              as="a"
              variant="success"
              href=""
              class="inline-block w-24 mb-2 mr-1"
            >
              Input
            </Button>
            <Button
              as="a"
              variant="warning"
              href=""
              class="inline-block w-24 mb-2 mr-1"
            >
              Submit
            </Button>
            <Button
              as="a"
              variant="pending"
              href=""
              class="inline-block w-24 mb-2 mr-1"
            >
              Pending
            </Button>
            <Button
              as="a"
              variant="danger"
              href=""
              class="inline-block w-24 mb-2 mr-1"
            >
              Reset
            </Button>
            <Button
              as="a"
              variant="dark"
              href=""
              class="inline-block w-24 mb-2 mr-1"
            >
              Metal
            </Button>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Button
                as="a"
                variant="primary"
                href=""
                class="inline-block w-24 mb-2 mr-1"
              >
                Link
              </Button>
              <Button
                as="a"
                variant="secondary"
                href=""
                class="inline-block w-24 mb-2 mr-1"
              >
                Button
              </Button>
              <Button
                as="a"
                variant="success"
                href=""
                class="inline-block w-24 mb-2 mr-1"
              >
                Input
              </Button>
              <Button
                as="a"
                variant="warning"
                href=""
                class="inline-block w-24 mb-2 mr-1"
              >
                Submit
              </Button>
              <Button
                as="a"
                variant="pending"
                href=""
                class="inline-block w-24 mb-2 mr-1"
              >
                Pending
              </Button>
              <Button
                as="a"
                variant="danger"
                href=""
                class="inline-block w-24 mb-2 mr-1"
              >
                Reset
              </Button>
              <Button
                as="a"
                variant="dark"
                href=""
                class="inline-block w-24 mb-2 mr-1"
              >
                Metal
              </Button>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Button Link -->
      <!-- BEGIN: Elevated Button -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Elevated Buttons</h2>
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
            <div>
              <Button variant="primary" elevated class="w-24 mb-2 mr-1">
                Primary
              </Button>
              <Button variant="secondary" elevated class="w-24 mb-2 mr-1">
                Secondary
              </Button>
              <Button variant="success" elevated class="w-24 mb-2 mr-1">
                Success
              </Button>
              <Button variant="warning" elevated class="w-24 mb-2 mr-1">
                Warning
              </Button>
              <Button variant="pending" elevated class="w-24 mb-2 mr-1">
                Pending
              </Button>
              <Button variant="danger" elevated class="w-24 mb-2 mr-1">
                Danger
              </Button>
              <Button variant="dark" elevated class="w-24 mb-2 mr-1">
                Dark
              </Button>
            </div>
            <div class="mt-5">
              <Button variant="primary" elevated rounded class="w-24 mb-2 mr-1">
                Primary
              </Button>
              <Button
                variant="secondary"
                elevated
                rounded
                class="w-24 mb-2 mr-1"
              >
                Secondary
              </Button>
              <Button variant="success" elevated rounded class="w-24 mb-2 mr-1">
                Success
              </Button>
              <Button variant="warning" elevated rounded class="w-24 mb-2 mr-1">
                Warning
              </Button>
              <Button variant="pending" elevated rounded class="w-24 mb-2 mr-1">
                Pending
              </Button>
              <Button variant="danger" elevated rounded class="w-24 mb-2 mr-1">
                Danger
              </Button>
              <Button variant="dark" elevated rounded class="w-24 mb-2 mr-1">
                Dark
              </Button>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div>
                <Button variant="primary" elevated class="w-24 mb-2 mr-1">
                  Primary
                </Button>
                <Button variant="secondary" elevated class="w-24 mb-2 mr-1">
                  Secondary
                </Button>
                <Button variant="success" elevated class="w-24 mb-2 mr-1">
                  Success
                </Button>
                <Button variant="warning" elevated class="w-24 mb-2 mr-1">
                  Warning
                </Button>
                <Button variant="pending" elevated class="w-24 mb-2 mr-1">
                  Pending
                </Button>
                <Button variant="danger" elevated class="w-24 mb-2 mr-1">
                  Danger
                </Button>
                <Button variant="dark" elevated class="w-24 mb-2 mr-1">
                  Dark
                </Button>
              </div>
              <div class="mt-5">
                <Button
                  variant="primary"
                  elevated
                  rounded
                  class="w-24 mb-2 mr-1"
                >
                  Primary
                </Button>
                <Button
                  variant="secondary"
                  elevated
                  rounded
                  class="w-24 mb-2 mr-1"
                >
                  Secondary
                </Button>
                <Button
                  variant="success"
                  elevated
                  rounded
                  class="w-24 mb-2 mr-1"
                >
                  Success
                </Button>
                <Button
                  variant="warning"
                  elevated
                  rounded
                  class="w-24 mb-2 mr-1"
                >
                  Warning
                </Button>
                <Button
                  variant="pending"
                  elevated
                  rounded
                  class="w-24 mb-2 mr-1"
                >
                  Pending
                </Button>
                <Button
                  variant="danger"
                  elevated
                  rounded
                  class="w-24 mb-2 mr-1"
                >
                  Danger
                </Button>
                <Button variant="dark" elevated rounded class="w-24 mb-2 mr-1">
                  Dark
                </Button>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Elevated Button -->
      <!-- BEGIN: Social Media Button -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Social Media Buttons</h2>
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
            <div class="flex flex-wrap">
              <Button variant="facebook" class="w-32 mb-2 mr-2">
                <Lucide icon="Facebook" class="w-4 h-4 mr-2" /> Facebook
              </Button>
              <Button variant="twitter" class="w-32 mb-2 mr-2">
                <Lucide icon="Twitter" class="w-4 h-4 mr-2" /> Twitter
              </Button>
              <Button variant="instagram" class="w-32 mb-2 mr-2">
                <Lucide icon="Instagram" class="w-4 h-4 mr-2" /> Instagram
              </Button>
              <Button variant="linkedin" class="w-32 mb-2 mr-2">
                <Lucide icon="Linkedin" class="w-4 h-4 mr-2" /> Linkedin
              </Button>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="flex flex-wrap">
                <Button variant="facebook" class="w-32 mb-2 mr-2">
                  <Lucide icon="Facebook" class="w-4 h-4 mr-2" /> Facebook
                </Button>
                <Button variant="twitter" class="w-32 mb-2 mr-2">
                  <Lucide icon="Twitter" class="w-4 h-4 mr-2" /> Twitter
                </Button>
                <Button variant="instagram" class="w-32 mb-2 mr-2">
                  <Lucide icon="Instagram" class="w-4 h-4 mr-2" />
                  Instagram
                </Button>
                <Button variant="linkedin" class="w-32 mb-2 mr-2">
                  <Lucide icon="Linkedin" class="w-4 h-4 mr-2" /> Linkedin
                </Button>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Social Media Button -->
    </div>
    <div class="col-span-12 lg:col-span-6">
      <!-- BEGIN: Outline Button -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Outline Buttons</h2>
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
            <Button
              variant="outline-primary"
              class="inline-block w-24 mb-2 mr-1"
            >
              Primary
            </Button>
            <Button
              variant="outline-secondary"
              class="inline-block w-24 mb-2 mr-1"
            >
              Secondary
            </Button>
            <Button
              variant="outline-success"
              class="inline-block w-24 mb-2 mr-1"
            >
              Success
            </Button>
            <Button
              variant="outline-warning"
              class="inline-block w-24 mb-2 mr-1"
            >
              Warning
            </Button>
            <Button
              variant="outline-pending"
              class="inline-block w-24 mb-2 mr-1"
            >
              Pending
            </Button>
            <Button
              variant="outline-danger"
              class="inline-block w-24 mb-2 mr-1"
            >
              Danger
            </Button>
            <Button variant="outline-dark" class="inline-block w-24 mb-2 mr-1">
              Dark
            </Button>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Button
                variant="outline-primary"
                class="inline-block w-24 mb-2 mr-1"
              >
                Primary
              </Button>
              <Button
                variant="outline-secondary"
                class="inline-block w-24 mb-2 mr-1"
              >
                Secondary
              </Button>
              <Button
                variant="outline-success"
                class="inline-block w-24 mb-2 mr-1"
              >
                Success
              </Button>
              <Button
                variant="outline-warning"
                class="inline-block w-24 mb-2 mr-1"
              >
                Warning
              </Button>
              <Button
                variant="outline-pending"
                class="inline-block w-24 mb-2 mr-1"
              >
                Pending
              </Button>
              <Button
                variant="outline-danger"
                class="inline-block w-24 mb-2 mr-1"
              >
                Danger
              </Button>
              <Button
                variant="outline-dark"
                class="inline-block w-24 mb-2 mr-1"
              >
                Dark
              </Button>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Outline Button -->
      <!-- BEGIN: Loading Button -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Loading State Buttons</h2>
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
            <Button variant="primary" class="mb-2 mr-1">
              Saving
              <LoadingIcon icon="oval" color="white" class="w-4 h-4 ml-2" />
            </Button>
            <Button variant="success" class="mb-2 mr-1">
              Adding
              <LoadingIcon
                icon="spinning-circles"
                color="white"
                class="w-4 h-4 ml-2"
              />
            </Button>
            <Button variant="warning" class="mb-2 mr-1">
              Loading
              <LoadingIcon
                icon="three-dots"
                color="1a202c"
                class="w-4 h-4 ml-2"
              />
            </Button>
            <Button variant="danger" class="mb-2 mr-1">
              Deleting
              <LoadingIcon icon="puff" color="white" class="w-4 h-4 ml-2" />
            </Button>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Button variant="primary" class="mb-2 mr-1">
                Saving
                <LoadingIcon icon="oval" color="white" class="w-4 h-4 ml-2" />
              </Button>
              <Button variant="success" class="mb-2 mr-1">
                Adding
                <LoadingIcon
                  icon="spinning-circles"
                  color="white"
                  class="w-4 h-4 ml-2"
                />
              </Button>
              <Button variant="warning" class="mb-2 mr-1">
                Loading
                <LoadingIcon
                  icon="three-dots"
                  color="1a202c"
                  class="w-4 h-4 ml-2"
                />
              </Button>
              <Button variant="danger" class="mb-2 mr-1">
                Deleting
                <LoadingIcon icon="puff" color="white" class="w-4 h-4 ml-2" />
              </Button>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Loading Button -->
      <!-- BEGIN: Rounded Button -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Rounded Buttons</h2>
          <FormSwitch class="w-full mt-3 sm:w-auto sm:ml-auto sm:mt-0">
            <FormSwitch.Label htmlFor="show-example-8">
              Show example code
            </FormSwitch.Label>
            <FormSwitch.Input
              id="show-example-8"
              @click="toggle"
              class="ml-3 mr-0"
              type="checkbox"
            />
          </FormSwitch>
        </div>
        <div class="p-5">
          <Preview.Panel>
            <Button variant="primary" rounded class="w-24 mb-2 mr-1">
              Primary
            </Button>
            <Button variant="secondary" rounded class="w-24 mb-2 mr-1">
              Secondary
            </Button>
            <Button variant="success" rounded class="w-24 mb-2 mr-1">
              Success
            </Button>
            <Button variant="warning" rounded class="w-24 mb-2 mr-1">
              Warning
            </Button>
            <Button variant="pending" rounded class="w-24 mb-2 mr-1">
              Pending
            </Button>
            <Button variant="danger" rounded class="w-24 mb-2 mr-1">
              Danger
            </Button>
            <Button variant="dark" rounded class="w-24 mb-2 mr-1">
              Dark
            </Button>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Button variant="primary" rounded class="w-24 mb-2 mr-1">
                Primary
              </Button>
              <Button variant="secondary" rounded class="w-24 mb-2 mr-1">
                Secondary
              </Button>
              <Button variant="success" rounded class="w-24 mb-2 mr-1">
                Success
              </Button>
              <Button variant="warning" rounded class="w-24 mb-2 mr-1">
                Warning
              </Button>
              <Button variant="pending" rounded class="w-24 mb-2 mr-1">
                Pending
              </Button>
              <Button variant="danger" rounded class="w-24 mb-2 mr-1">
                Danger
              </Button>
              <Button variant="dark" rounded class="w-24 mb-2 mr-1">
                Dark
              </Button>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Rounded Button -->
      <!-- BEGIN: Soft Color Button -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Soft Color Buttons</h2>
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
            <Button variant="soft-primary" rounded class="w-24 mb-2 mr-1">
              Primary
            </Button>
            <Button variant="soft-secondary" rounded class="w-24 mb-2 mr-1">
              Secondary
            </Button>
            <Button variant="soft-success" rounded class="w-24 mb-2 mr-1">
              Success
            </Button>
            <Button variant="soft-warning" rounded class="w-24 mb-2 mr-1">
              Warning
            </Button>
            <Button variant="soft-pending" rounded class="w-24 mb-2 mr-1">
              Pending
            </Button>
            <Button variant="soft-danger" rounded class="w-24 mb-2 mr-1">
              Danger
            </Button>
            <Button variant="soft-dark" rounded class="w-24 mb-2 mr-1">
              Dark
            </Button>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Button variant="soft-primary" rounded class="w-24 mb-2 mr-1">
                Primary
              </Button>
              <Button variant="soft-secondary" rounded class="w-24 mb-2 mr-1">
                Secondary
              </Button>
              <Button variant="soft-success" rounded class="w-24 mb-2 mr-1">
                Success
              </Button>
              <Button variant="soft-warning" rounded class="w-24 mb-2 mr-1">
                Warning
              </Button>
              <Button variant="soft-pending" rounded class="w-24 mb-2 mr-1">
                Pending
              </Button>
              <Button variant="soft-danger" rounded class="w-24 mb-2 mr-1">
                Danger
              </Button>
              <Button variant="soft-dark" rounded class="w-24 mb-2 mr-1">
                Dark
              </Button>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Soft Color Button -->
      <!-- BEGIN: Icon Button -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Icon Buttons</h2>
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
            <div class="flex flex-wrap">
              <Button variant="primary" class="w-32 mb-2 mr-2">
                <Lucide icon="Activity" class="w-4 h-4 mr-2" /> Activity
              </Button>
              <Button variant="secondary" class="w-32 mb-2 mr-2">
                <Lucide icon="HardDrive" class="w-4 h-4 mr-2" /> Hard Drive
              </Button>
              <Button variant="success" class="w-32 mb-2 mr-2">
                <Lucide icon="Calendar" class="w-4 h-4 mr-2" /> Calendar
              </Button>
              <Button variant="warning" class="w-32 mb-2 mr-2">
                <Lucide icon="Share2" class="w-4 h-4 mr-2" /> Share
              </Button>
              <Button variant="pending" class="w-32 mb-2 mr-2">
                <Lucide icon="Download" class="w-4 h-4 mr-2" /> Pending
              </Button>
              <Button variant="danger" class="w-32 mb-2 mr-2">
                <Lucide icon="Trash" class="w-4 h-4 mr-2" /> Trash
              </Button>
              <Button variant="dark" class="w-32 mb-2 mr-2">
                <Lucide icon="Image" class="w-4 h-4 mr-2" /> Image
              </Button>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="flex flex-wrap">
                <Button variant="primary" class="w-32 mb-2 mr-2">
                  <Lucide icon="Activity" class="w-4 h-4 mr-2" /> Activity
                </Button>
                <Button variant="secondary" class="w-32 mb-2 mr-2">
                  <Lucide icon="HardDrive" class="w-4 h-4 mr-2" /> Hard Drive
                </Button>
                <Button variant="success" class="w-32 mb-2 mr-2">
                  <Lucide icon="Calendar" class="w-4 h-4 mr-2" /> Calendar
                </Button>
                <Button variant="warning" class="w-32 mb-2 mr-2">
                  <Lucide icon="Share2" class="w-4 h-4 mr-2" /> Share
                </Button>
                <Button variant="pending" class="w-32 mb-2 mr-2">
                  <Lucide icon="Download" class="w-4 h-4 mr-2" /> Pending
                </Button>
                <Button variant="danger" class="w-32 mb-2 mr-2">
                  <Lucide icon="Trash" class="w-4 h-4 mr-2" /> Trash
                </Button>
                <Button variant="dark" class="w-32 mb-2 mr-2">
                  <Lucide icon="Image" class="w-4 h-4 mr-2" /> Image
                </Button>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Icon Button -->
      <!-- BEGIN: Icon Only Button -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Icon Only Buttons</h2>
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
            <Button variant="primary" class="mb-2 mr-1">
              <Lucide icon="Activity" class="w-5 h-5" />
            </Button>
            <Button variant="secondary" class="mb-2 mr-1">
              <Lucide icon="HardDrive" class="w-5 h-5" />
            </Button>
            <Button variant="success" class="mb-2 mr-1">
              <Lucide icon="Calendar" class="w-5 h-5" />
            </Button>
            <Button variant="warning" class="mb-2 mr-1">
              <Lucide icon="Share2" class="w-5 h-5" />
            </Button>
            <Button variant="pending" class="mb-2 mr-1">
              <Lucide icon="Download" class="w-5 h-5" />
            </Button>
            <Button variant="danger" class="mb-2 mr-1">
              <Lucide icon="Trash" class="w-5 h-5" />
            </Button>
            <Button variant="dark" class="mb-2 mr-1">
              <Lucide icon="Image" class="w-5 h-5" />
            </Button>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <Button variant="primary" class="mb-2 mr-1">
                <Lucide icon="Activity" class="w-5 h-5" />
              </Button>
              <Button variant="secondary" class="mb-2 mr-1">
                <Lucide icon="HardDrive" class="w-5 h-5" />
              </Button>
              <Button variant="success" class="mb-2 mr-1">
                <Lucide icon="Calendar" class="w-5 h-5" />
              </Button>
              <Button variant="warning" class="mb-2 mr-1">
                <Lucide icon="Share2" class="w-5 h-5" />
              </Button>
              <Button variant="pending" class="mb-2 mr-1">
                <Lucide icon="Download" class="w-5 h-5" />
              </Button>
              <Button variant="danger" class="mb-2 mr-1">
                <Lucide icon="Trash" class="w-5 h-5" />
              </Button>
              <Button variant="dark" class="mb-2 mr-1">
                <Lucide icon="Image" class="w-5 h-5" />
              </Button>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Icon Only Button -->
    </div>
  </div>
</template>
