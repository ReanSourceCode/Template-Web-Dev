<script setup lang="ts">
import Preview from "@/components/Base/Preview";
import { FormSwitch } from "@/components/Base/Form";
</script>

<template>
  <div class="flex items-center mt-8 intro-y">
    <h2 class="mr-auto text-lg font-medium">Typography</h2>
  </div>
  <div class="grid grid-cols-12 gap-6 mt-5">
    <div class="col-span-12 intro-y lg:col-span-6">
      <!-- BEGIN: Heading -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Heading</h2>
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
            <div>
              <h1 class="text-4xl font-medium leading-none">h1. Heading 1</h1>
              <h2 class="mt-3 text-3xl font-medium leading-none">
                h2. Heading 2
              </h2>
              <h3 class="mt-3 text-2xl font-medium leading-none">
                h3. Heading 3
              </h3>
              <h4 class="mt-3 text-xl font-medium leading-none">
                h4. Heading 4
              </h4>
              <h5 class="mt-3 text-lg font-medium leading-none">
                h5. Heading 5
              </h5>
              <h6 class="mt-3 font-medium leading-none">h6. Heading 6</h6>
            </div>
            <div class="mt-5">
              <h1 class="text-4xl font-medium leading-none text-primary">
                h1. Heading 1
              </h1>
              <h2
                class="mt-3 text-3xl font-medium leading-none text-slate-600 dark:text-slate-500"
              >
                h2. Heading 2
              </h2>
              <h3 class="mt-3 text-2xl font-medium leading-none text-success">
                h3. Heading 3
              </h3>
              <h4 class="mt-3 text-xl font-medium leading-none text-warning">
                h4. Heading 4
              </h4>
              <h5 class="mt-3 text-lg font-medium leading-none text-danger">
                h5. Heading 5
              </h5>
              <h6 class="mt-3 font-medium leading-none text-slate-500">
                h6. Heading 6
              </h6>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div>
                <h1 class="text-4xl font-medium leading-none">h1. Heading 1</h1>
                <h2 class="mt-3 text-3xl font-medium leading-none">
                  h2. Heading 2
                </h2>
                <h3 class="mt-3 text-2xl font-medium leading-none">
                  h3. Heading 3
                </h3>
                <h4 class="mt-3 text-xl font-medium leading-none">
                  h4. Heading 4
                </h4>
                <h5 class="mt-3 text-lg font-medium leading-none">
                  h5. Heading 5
                </h5>
                <h6 class="mt-3 font-medium leading-none">h6. Heading 6</h6>
              </div>
              <div class="mt-5">
                <h1 class="text-4xl font-medium leading-none text-primary">
                  h1. Heading 1
                </h1>
                <h2
                  class="mt-3 text-3xl font-medium leading-none text-slate-600 dark:text-slate-500"
                >
                  h2. Heading 2
                </h2>
                <h3 class="mt-3 text-2xl font-medium leading-none text-success">
                  h3. Heading 3
                </h3>
                <h4 class="mt-3 text-xl font-medium leading-none text-warning">
                  h4. Heading 4
                </h4>
                <h5 class="mt-3 text-lg font-medium leading-none text-danger">
                  h5. Heading 5
                </h5>
                <h6 class="mt-3 font-medium leading-none text-slate-500">
                  h6. Heading 6
                </h6>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Heading -->
      <!-- BEGIN: Text Settings -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Text Settings</h2>
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
              <div class="font-normal">Example text</div>
              <div class="font-medium">Example medium text</div>
              <div class="font-semibold">Example semibold text</div>
              <div class="font-bold">Example bolder text</div>
              <div class="font-extrabold">Example boldest text</div>
            </div>
            <div class="mt-5">
              <div class="uppercase">Example uppercase text</div>
              <div class="lowercase">Example lowercase text</div>
              <div class="capitalize">Example capitalized text</div>
              <div class="normal-case">Example cursive text</div>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div>
                <div class="font-normal">Example text</div>
                <div class="font-medium">Example medium text</div>
                <div class="font-semibold">Example semibold text</div>
                <div class="font-bold">Example bolder text</div>
                <div class="font-extrabold">Example boldest text</div>
              </div>
              <div class="mt-5">
                <div class="uppercase">Example uppercase text</div>
                <div class="lowercase">Example lowercase text</div>
                <div class="capitalize">Example capitalized text</div>
                <div class="normal-case">Example cursive text</div>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Text Settings -->
      <!-- BEGIN: Common Elements -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Common Elements</h2>
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
            <div>
              You can use the mark tag to
              <mark class="p-1 bg-yellow-200">highlight</mark> text.
            </div>
            <del class="block mt-1">
              This line of text is meant to be treated as deleted text.
            </del>
            <s class="block mt-1">
              This line of text is meant to be treated as no longer accurate.
            </s>
            <ins class="block mt-1">
              This line of text is meant to be treated as an addition to the
              document.
            </ins>
            <u class="block mt-1">
              This line of text will render as underlined
            </u>
            <small class="block mt-1">
              This line of text is meant to be treated as fine print.
            </small>
            <strong class="block mt-1">
              This line rendered as bold text.
            </strong>
            <em class="block mt-1"> This line rendered as italicized text. </em>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div>
                You can use the mark tag to
                <mark class="p-1 bg-yellow-200">highlight</mark> text.
              </div>
              <del class="block mt-1"
                >This line of text is meant to be treated as deleted text.</del
              >
              <s class="block mt-1"
                >This line of text is meant to be treated as no longer
                accurate.</s
              >
              <ins class="block mt-1"
                >This line of text is meant to be treated as an addition to the
                document.</ins
              >
              <u class="block mt-1"
                >This line of text will render as underlined</u
              >
              <small class="block mt-1"
                >This line of text is meant to be treated as fine print.</small
              >
              <strong class="block mt-1"
                >This line rendered as bold text.</strong
              >
              <em class="block mt-1">This line rendered as italicized text.</em>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Common Elements -->
    </div>
    <div class="col-span-12 intro-y lg:col-span-6">
      <!-- BEGIN: BADGES -->
      <Preview class="intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Badges</h2>
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
            <div class="font-medium">Basic Badge</div>
            <div class="mt-2">
              <span
                class="px-1 mr-1 text-xs text-white rounded-full bg-primary"
              >
                1
              </span>
              <span
                class="px-1 mr-1 text-xs border rounded-full text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
              >
                2
              </span>
              <span
                class="px-1 mr-1 text-xs text-white rounded-full bg-success"
              >
                3
              </span>
              <span
                class="px-1 mr-1 text-xs text-white rounded-full bg-warning"
              >
                4
              </span>
              <span class="px-1 mr-1 text-xs text-white rounded-full bg-danger">
                5
              </span>
              <span
                class="px-1 mr-1 text-xs rounded-full bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
              >
                6
              </span>
            </div>
            <div class="mt-6 font-medium">Badge Sizes</div>
            <div class="mt-3">
              <span class="px-2 py-1 mr-1 text-white rounded-full bg-primary">
                1
              </span>
              <span
                class="px-2 py-1 mr-1 border rounded-full text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
              >
                2
              </span>
              <span class="px-2 py-1 mr-1 text-white rounded-full bg-success">
                3
              </span>
              <span class="px-2 py-1 mr-1 text-white rounded-full bg-warning">
                4
              </span>
              <span class="px-2 py-1 mr-1 text-white rounded-full bg-danger">
                5
              </span>
              <span
                class="px-2 py-1 mr-1 rounded-full bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
              >
                6
              </span>
            </div>
            <div class="mt-4">
              <span class="px-3 py-2 mr-1 text-white rounded-full bg-primary">
                1
              </span>
              <span
                class="px-3 py-2 mr-1 border rounded-full text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
              >
                2
              </span>
              <span class="px-3 py-2 mr-1 text-white rounded-full bg-success">
                3
              </span>
              <span class="px-3 py-2 mr-1 text-white rounded-full bg-warning">
                4
              </span>
              <span class="px-3 py-2 mr-1 text-white rounded-full bg-danger">
                5
              </span>
              <span
                class="px-3 py-2 mr-1 rounded-full bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
              >
                6
              </span>
            </div>
            <div class="mt-6">
              <span class="px-4 py-3 mr-1 text-white rounded-full bg-primary">
                1
              </span>
              <span
                class="px-4 py-3 mr-1 border rounded-full text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
              >
                2
              </span>
              <span class="px-4 py-3 mr-1 text-white rounded-full bg-success">
                3
              </span>
              <span class="px-4 py-3 mr-1 text-white rounded-full bg-warning">
                4
              </span>
              <span class="px-4 py-3 mr-1 text-white rounded-full bg-danger">
                5
              </span>
              <span
                class="px-4 py-3 mr-1 rounded-full bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
              >
                6
              </span>
            </div>
            <div class="mt-10 font-medium">Square Badge</div>
            <div class="mt-2">
              <span class="px-1 mr-1 text-xs text-white bg-primary"> 1 </span>
              <span
                class="px-1 mr-1 text-xs border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
              >
                2
              </span>
              <span class="px-1 mr-1 text-xs text-white bg-success"> 3 </span>
              <span class="px-1 mr-1 text-xs text-white bg-warning"> 4 </span>
              <span class="px-1 mr-1 text-xs text-white bg-danger"> 5 </span>
              <span
                class="px-1 mr-1 text-xs bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
              >
                6
              </span>
            </div>
            <div class="mt-6 font-medium">Outline Badge</div>
            <div class="mt-4">
              <span
                class="px-3 py-2 mr-1 border rounded-full border-primary text-primary dark:border-primary"
              >
                1
              </span>
              <span
                class="px-3 py-2 mr-1 border rounded-full text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
              >
                2
              </span>
              <span
                class="px-3 py-2 mr-1 border rounded-full border-success text-success dark:border-success"
              >
                3
              </span>
              <span
                class="px-3 py-2 mr-1 border rounded-full border-warning text-warning dark:border-warning"
              >
                4
              </span>
              <span
                class="px-3 py-2 mr-1 border rounded-full border-danger text-danger dark:border-danger"
              >
                5
              </span>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div class="font-medium">Basic Badge</div>
              <div class="mt-2">
                <span
                  class="px-1 mr-1 text-xs text-white rounded-full bg-primary"
                  >1</span
                >
                <span
                  class="px-1 mr-1 text-xs border rounded-full text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                  >2</span
                >
                <span
                  class="px-1 mr-1 text-xs text-white rounded-full bg-success"
                  >3</span
                >
                <span
                  class="px-1 mr-1 text-xs text-white rounded-full bg-warning"
                  >4</span
                >
                <span
                  class="px-1 mr-1 text-xs text-white rounded-full bg-danger"
                  >5</span
                >
                <span
                  class="px-1 mr-1 text-xs rounded-full bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                  >6</span
                >
              </div>
              <div class="mt-6 font-medium">Badge Sizes</div>
              <div class="mt-3">
                <span class="px-2 py-1 mr-1 text-white rounded-full bg-primary"
                  >1</span
                >
                <span
                  class="px-2 py-1 mr-1 border rounded-full text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                  >2</span
                >
                <span class="px-2 py-1 mr-1 text-white rounded-full bg-success"
                  >3</span
                >
                <span class="px-2 py-1 mr-1 text-white rounded-full bg-warning"
                  >4</span
                >
                <span class="px-2 py-1 mr-1 text-white rounded-full bg-danger"
                  >5</span
                >
                <span
                  class="px-2 py-1 mr-1 rounded-full bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                  >6</span
                >
              </div>
              <div class="mt-4">
                <span class="px-3 py-2 mr-1 text-white rounded-full bg-primary"
                  >1</span
                >
                <span
                  class="px-3 py-2 mr-1 border rounded-full text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                  >2</span
                >
                <span class="px-3 py-2 mr-1 text-white rounded-full bg-success"
                  >3</span
                >
                <span class="px-3 py-2 mr-1 text-white rounded-full bg-warning"
                  >4</span
                >
                <span class="px-3 py-2 mr-1 text-white rounded-full bg-danger"
                  >5</span
                >
                <span
                  class="px-3 py-2 mr-1 rounded-full bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                  >6</span
                >
              </div>
              <div class="mt-6">
                <span class="px-4 py-3 mr-1 text-white rounded-full bg-primary"
                  >1</span
                >
                <span
                  class="px-4 py-3 mr-1 border rounded-full text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                  >2</span
                >
                <span class="px-4 py-3 mr-1 text-white rounded-full bg-success"
                  >3</span
                >
                <span class="px-4 py-3 mr-1 text-white rounded-full bg-warning"
                  >4</span
                >
                <span class="px-4 py-3 mr-1 text-white rounded-full bg-danger"
                  >5</span
                >
                <span
                  class="px-4 py-3 mr-1 rounded-full bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                  >6</span
                >
              </div>
              <div class="mt-10 font-medium">Square Badge</div>
              <div class="mt-2">
                <span class="px-1 mr-1 text-xs text-white bg-primary">1</span>
                <span
                  class="px-1 mr-1 text-xs border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                  >2</span
                >
                <span class="px-1 mr-1 text-xs text-white bg-success">3</span>
                <span class="px-1 mr-1 text-xs text-white bg-warning">4</span>
                <span class="px-1 mr-1 text-xs text-white bg-danger">5</span>
                <span
                  class="px-1 mr-1 text-xs bg-slate-100 text-slate-500 dark:bg-darkmode-800 dark:text-slate-300"
                  >6</span
                >
              </div>
              <div class="mt-6 font-medium">Outline Badge</div>
              <div class="mt-4">
                <span
                  class="px-3 py-2 mr-1 border rounded-full border-primary text-primary dark:border-primary"
                  >1</span
                >
                <span
                  class="px-3 py-2 mr-1 border rounded-full text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300"
                  >2</span
                >
                <span
                  class="px-3 py-2 mr-1 border rounded-full border-success text-success dark:border-success"
                  >3</span
                >
                <span
                  class="px-3 py-2 mr-1 border rounded-full border-warning text-warning dark:border-warning"
                  >4</span
                >
                <span
                  class="px-3 py-2 mr-1 border rounded-full border-danger text-danger dark:border-danger"
                  >5</span
                >
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: BADGES -->
      <!-- BEGIN: SEPARATOR -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Separator</h2>
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
            <div
              class="w-full border-t border-dashed border-slate-200/60 dark:border-darkmode-400"
            ></div>
            <div
              class="w-full mt-5 border-t border-slate-200/60 dark:border-darkmode-400"
            ></div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div
                class="w-full border-t border-dashed border-slate-200/60 dark:border-darkmode-400"
              ></div>
              <div
                class="w-full mt-5 border-t border-slate-200/60 dark:border-darkmode-400"
              ></div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: SEPARATOR -->
      <!-- BEGIN: Divider -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Divider</h2>
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
            <div
              class="flex justify-center w-full mt-2 border-t border-slate-200/60 dark:border-darkmode-400"
            >
              <div
                class="px-5 -mt-3 bg-white dark:bg-darkmode-600 text-slate-500"
              >
                or
              </div>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div
                class="flex justify-center w-full mt-2 border-t border-slate-200/60 dark:border-darkmode-400"
              >
                <div
                  class="px-5 -mt-3 bg-white dark:bg-darkmode-600 text-slate-500"
                >
                  or
                </div>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Divider -->
      <!-- BEGIN: Links -->
      <Preview class="mt-5 intro-y box" v-slot="{ toggle }">
        <div
          class="flex flex-col items-center p-5 border-b sm:flex-row border-slate-200/60 dark:border-darkmode-400"
        >
          <h2 class="mr-auto text-base font-medium">Links</h2>
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
            <div>
              <a href="" class="block font-normal text-primary">
                Example text
              </a>
              <a href="" class="block font-medium text-primary">
                Example medium text
              </a>
              <a href="" class="block font-semibold text-primary">
                Example semibold text
              </a>
              <a href="" class="block font-bold text-primary">
                Example bolder text
              </a>
              <a href="" class="block font-extrabold text-primary">
                Example boldest text
              </a>
            </div>
            <div class="mt-5">
              <a href="" class="block text-primary"> Primary state </a>
              <a href="" class="block text-slate-600 dark:text-slate-500">
                Secondary state
              </a>
              <a href="" class="block text-success"> Success state </a>
              <a href="" class="block text-warning"> Warning state </a>
              <a href="" class="block text-danger"> Danger state </a>
            </div>
          </Preview.Panel>
          <Preview.Panel type="source">
            <Preview.Highlight>
              {{`
              <div>
                <a href="" class="block font-normal text-primary"
                  >Example text</a
                >
                <a href="" class="block font-medium text-primary"
                  >Example medium text</a
                >
                <a href="" class="block font-semibold text-primary"
                  >Example semibold text</a
                >
                <a href="" class="block font-bold text-primary"
                  >Example bolder text</a
                >
                <a href="" class="block font-extrabold text-primary"
                  >Example boldest text</a
                >
              </div>
              <div class="mt-5">
                <a href="" class="block text-primary">Primary state</a>
                <a href="" class="block text-slate-600 dark:text-slate-500"
                  >Secondary state</a
                >
                <a href="" class="block text-success">Success state</a>
                <a href="" class="block text-warning">Warning state</a>
                <a href="" class="block text-danger">Danger state</a>
              </div>
              `}}
            </Preview.Highlight>
          </Preview.Panel>
        </div>
      </Preview>
      <!-- END: Links -->
    </div>
  </div>
</template>
